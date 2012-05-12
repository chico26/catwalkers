<?php

 /*
  * Controller login controls access to the system.
  * @author Alejandro Gutiérrez.
  */
 
class Login extends CI_Controller {
	
	var $data = Array();
	
	/*
	 * Controls user access to the system.
	 * @author Alejandro Gutiérrez.
	 */
    public function index() {
    	//Load form validation rules for login.
    	$this->load->library('form_validation');
		$this->form_validation->set_rules('user', 'Nombre de Usuario', 'required');
		$this->form_validation->set_rules('password', 'Contraseña', 'required');
		
		//Execute form validation rules.
    	if ($this->form_validation->run() == FALSE){
			$this->load->view('login', $this->data);
		}
		//If all rules were valid.
		else{
			//Verify data provided to access (returns the user if it's correct).
			if($user = $this->__verifyAccess()){
				//Hydrate the user's session (provide the user).
				$this->__hydrateSession($user);
			}
			else{
				$this->data['userInvalid'] = 'Nombre de usuario y/o contraseña son incorrectos.';
				$this->load->view('login', $this->data);
			}
		}
		
    }
	
	/*
	 * Obtained from the database to the user who wants to access.
	 * @return The user if data provided is correct else false.
	 * @author Alejandro Gutiérrez.
	 */
	private function __verifyAccess(){
		$user = Doctrine_Query::create()
			->from('user')
			->where('password = ?', md5($_POST['password']))
	        ->andWhere('mail = ?', $_POST['user'])
	        ->orWhere('nickname = ?', $_POST['user'])
			->fetchOne();
			
		if(is_object($user)){
			return $user;
		}
		return false;
	}
	
	/*
	 * Stored in the variable $_SESSION important data of the user.
	 * @author Alejandro Gutiérrez.
	 */
	private function __hydrateSession($user){
		
	}
	
	/*
	 * Destroy the variable $_SESSION and redirect to home page.
	 * @author Alejandro Gutiérrez.
	 */
	public function logOut(){
		if(isset($_SESSION)){
			session_destroy();
		}
		redirect('/');
	}
	
}

/* End of file login.php */ 
/* Location: ./application/controllers/login.php */ 

