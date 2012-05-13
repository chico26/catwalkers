<?php
/*
 * Created on May 12, 2012
 * @author Alejandro Gutiérrez
 */
 
class Posts extends CI_Controller {
	
	var $data = array();

    public function listing($typePosts, $post_id = FALSE) {
		$this->data['posts'] = Zircon_Core::from('Post')->getPosts($typePosts)->execute();
		$this->data['post_id'] = $post_id;
        structure('gallery_post', $this);

    }
	
	public function viewPost($post_id){
		$this->data['post'] = Doctrine_Query::create()
			->from('post')
			->where('post_id = ?', $post_id)
			->fetchOne();
		
		if(is_object($this->data['post'])){
			$result = array(
				'view' => $this->load->view('posts/view_post', $this->data, true)
			);
			echo json_encode($result);
		}
	}

}