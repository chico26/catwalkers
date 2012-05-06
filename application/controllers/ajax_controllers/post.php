<?php
class Post extends CI_Controller {
    public function show_post_in_popup($id = false) {
        $this -> load -> view('view_post');
    }

}
