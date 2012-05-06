<?php
class Home extends CI_Controller {
	var $data = array();
	public function index() {
		$this->load->view('home', $this->data);
	}
}
