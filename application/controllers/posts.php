<?php
class Posts extends CI_Controller {
	
	var $data = array();

    public function __construct() {
        parent::__construct();
    }

	public function insert() {
		$this -> data['post'] = new Post();
		$this -> __set_validation_rules();
		
		if ($this -> form_validation -> run() == FALSE) {
			structure('posts/add_post', $this);
		} else {
			$this -> data['post'] -> fromArray($_POST);
			$this -> data['post'] -> save();
			redirect('posts/listing');
		}
	}

	public function update($post_id) {
		$this -> data['post'] = Doctrine_Query::create() -> 
			from('post') -> 
			where('post_id = ?', $post_id) -> 
			fetchOne();
	}

	public function listing() {
		$this -> data['posts'] = Doctrine_Query::create()
		 	-> from('post')
			-> orderBy('title') 
			-> execute();
		structure('posts/listing_post', $this);
	}

	private function __set_validation_rules() {
		$this -> load -> library('form_validation');
		$this -> form_validation -> set_rules('title', 'Título', 'required');
		$this -> form_validation -> set_rules('description', 'Descripción', 'required');
	}
	
	public function viewPost($post_id = 1) {
        $this->load->view('view_post');
    }

}
