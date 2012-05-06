<?php
class Photo_post extends Doctrine_Record{
	
	public function setTableDefinition(){
		$this->setTableName('photo_post');
		$this->hasColumn('photo_post_id','integer',null,array(
			'primary'=>true,
			'autoincrement'=>true
		));
		$this->hasColumn('route','string',255);
		//foreign key
		$this->hasColumn('post_id','integer');
	}
	
	public function setUp(){
		$this->actAs('Timestampable');
		$this->actAs('SoftDelete');
		
		$this->hasOne('post',array(
			'local'=>'post_id',
			'foreign'=>'post_id'
		));
	}
}
