<?php
class Posts extends CI_Controller {

	public function insert() {
		$this -> data['post'] = new Post();
		$this -> __set_validation_rules();
		
		if ($this -> form_validation -> run() == FALSE) {
			structure('backend/add_post', $this);
		} else {
			$this -> data['post'] -> fromArray($_POST);
			$this -> data['post'] -> save();
			redirect('backend/posts/listing');
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
		structure('backend/listing_post', $this);
	}

	private function __set_validation_rules() {
		$this -> load -> library('form_validation');
		$this -> form_validation -> set_rules('title', 'Título', 'required');
		$this -> form_validation -> set_rules('description', 'Descripción', 'required');
	}

}
