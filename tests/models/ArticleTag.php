<?php
class ArticleTag extends CActiveRecord
{
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	public function tableName()
	{
		return 'article_tag';
	}

	public function rules()
	{
		return array(
			array('tag_id, article_id','required'),
		);
	}
}