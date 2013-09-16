<?php
return array(
	'basePath'=>dirname(__FILE__).'/..',
	'extensionPath'=>dirname(__FILE__).'/../..',

	'import'=>array(
		'application.models.*',
		'ext.WithRelatedBehavior',
	),

	'components'=>array(
		'fixture'=>array(
			'class'=>'system.test.CDbFixtureManager',
			'basePath'=>dirname(__FILE__).'/../fixtures',
		),
		'db'=>array(
			'connectionString'=>'sqlite:sqlite_test.db',
			'username'=>'',
			'password'=>'',
			'charset'=>'utf8',
		),
	),
);
