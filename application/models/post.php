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
		$this -> hasColumn('type_post', 'string', 255);
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
	
	protected static $instance;
	
	public static function getInstance(){
		if (!isset(self::$instance)) {
            self::$instance = new self();
        }
        return self::$instance;
	}
	
	public function getPosts($typePosts){
		return Doctrine_Query::create()
			->from('post')
			->where('type_post = ?', $typePosts);
	}

}
