<?php
class Tag extends CActiveRecord
{
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	public function tableName()
	{
		return 'tag';
	}

	public function behaviors()
	{
		Yii::import('zii.behaviors.CTimestampBehavior');
		$timestampBehavior=new CTimestampBehavior();
		$timestampBehavior->createAttribute='created_at';
		$timestampBehavior->updateAttribute='updated_at';

		return array(
			'withRelated'=>'WithRelatedBehavior',
			'CTimestampBehavior'=>$timestampBehavior
		);
	}

	public function rules()
	{
		return array(
			array('name','required'),
		);
	}
}
