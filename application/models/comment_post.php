<?php
class Comment_post extends Doctrine_Record {
	
	public function setTableDefinition() {
		$this -> setTableName('comment_post');
		$this -> hasColumn('comment_post_id', 'integer', null, array(
			'primary' => true, 
			'autoincrement' => true
		));
		$this -> hasColumn('coment', 'string', 255);
		//foreign keys
		$this -> hasColumn('post_id', 'integer');
		// $this->hasColumn('user_id','integer');
	}

	public function setUp() {
		$this -> actAs('Timestampable');
		$this -> actAs('SoftDelete');
		
		// $this->hasOne('user', array(
        	// 'local'		=> 'user_id',
        	// 'foreign'	=> 'user_id'
        // ));
		
		$this->hasOne('post', array(
        	'local'		=> 'post_id',
        	'foreign'	=> 'post_id'
        ));
	}

}
