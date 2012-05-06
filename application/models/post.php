<?php
class Post extends Doctrine_Record {
	
	public function setTableDefinition() {
		$this -> setTableName('post');
		$this -> hasColumn('post_id', 'integer', null, array(
			'primary' => true, 
			'autoincrement' => true
		));
		$this -> hasColumn('title', 'string', 255);
		$this -> hasColumn('description', 'string', 255);
		$this -> hasColumn('count_of_comments', 'integer');
		$this -> hasColumn('count_of_views', 'integer');
		$this -> hasColumn('count_of_looks', 'integer');
	}

	public function setUp() {
		$this -> actAs('Timestampable');
		$this -> actAs('SoftDelete');
		
		$this->hasMany('comment_post as comments_post', array(
        	'local'		=> 'post_id',
        	'foreign'	=> 'post_id'
        ));
		
		$this->hasMany('photo_post as photos_post', array(
        	'local'		=> 'post_id',
        	'foreign'	=> 'post_id'
        ));
	}

}
