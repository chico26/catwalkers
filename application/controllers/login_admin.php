<?php
class Login_admin extends CI_Controller {
	
	var $data = Array();
	
    public function index() {
        $this->load->view('login_admin', $this->data);
    }
	
}
