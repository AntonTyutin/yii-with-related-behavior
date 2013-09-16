<?php
if (!defined('__DIR__')) {
	define('__DIR__', dirname(__FILE__));
}

// change the following paths if necessary
$yiit=__DIR__.'/../vendor/yiisoft/yii/framework/yiit.php';
$config=__DIR__.'/config/test.php';
chdir(__DIR__);

require_once($yiit);

$configArray = include($config);
$db=$configArray['components']['db'];
list($dbDriver, $dbParams) = explode(':', $db['connectionString'], 2);
if ($dbDriver == 'sqlite') {
	@unlink($dbParams);
	$conn = new PDO($db['connectionString']);
	foreach(explode(";", file_get_contents(__DIR__ . '/schema/test.sql')) as $stmt) {
		if ($stmt = trim($stmt)) {
			if (false === $conn->exec($stmt)) {
				echo $conn->errorInfo(), PHP_EOL;
			}
		}
	}
	unset($conn);
}

// make sure non existing PHPUnit classes do not break with Yii autoloader
Yii::$enableIncludePath = false;
Yii::setPathOfAlias('tests', __DIR__);
Yii::import('tests.*');

Yii::createWebApplication($config);