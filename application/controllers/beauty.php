<?php
class Beauty extends CI_Controller {
    public function index() {
        structure('beauty', $this);
    }

    public function post($post_id = 1) {
        $this -> load -> view('view_post');
    }
}
