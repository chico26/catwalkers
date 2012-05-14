<?php
class Home extends CI_Controller {
	
	var $data = array();
	
	public function index() {
		$this->load->view('home', $this->data);
	}
	public function show_contact()
    {
        $result= array('view' => $this->load->view('form_contact', $this->data, true), 'success' => false);
        echo json_encode($result);
    }
    public function contact()
    {
        $this->cleanPost();
        $this->__set_validation_rules();
        if($this->form_validation->run() == FALSE)
        {
            $result= array('view' => $this->load->view('form_contact', $this->data, true), 'success' => false);
            echo json_encode($result);
        }
        else
        {
            $this->send_mail();
            $result= array('view' => $this->load->view('form_contact_success', $this->data, true), 'success' => true);
            echo json_encode($result);
        }
    }
    private function cleanPost()
    {
        if($_POST['name'] == 'Nombre')
        {
            $_POST['name']= '';
        }
        if($_POST['email'] == 'E-mail')
        {
            $_POST['email']= '';
        }
        if($_POST['message'] == 'Mensaje')
        {
            $_POST['message']= '';
        }
    }
    public function send_mail()
    {
        $config= array(
            'protocol' => 'smtp',
             'smtp_host' => 'ssl://smtp.googlemail.com',
             'smtp_port' => 465,
            'smtp_user'=>'atole@bebeleche.mx',
            'smtp_pass'=>'125488marmagric**'
        );
        $this->load->library('email', $config);
        $this->email->from($_POST['email']);
        $this->email->to('atole@bebeleche.mx');
        $this->email->subject('Catwalkers contacto');
        $this->email->message($_POST['name'].' - '.$_POST['message']);
        $this->email->set_newline("\r\n");
        $this->email->send();
    }
    private function __set_validation_rules()
    {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('name', 'Nombre', 'required');
        $this->form_validation->set_rules('email', 'E-mail', 'valid_email|required');
        $this->form_validation->set_rules('message', 'Mensaje', 'required');
    }
}
