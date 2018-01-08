<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	function __construct()
	{
     	parent::__construct();
		$this->load->model('User_model');
	}

	public function index()
	{
		$this->load->view('head');
		$this->load->view('login');
		$this->load->view('base');
	}
	public function loginprocess()
	{
		try 
		{
			$this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
        if ($this->form_validation->run() == FALSE)
        {
            echo json_encode(array('errorMsg' => validation_errors()));
        }	                
        else
        {
		      $email = $this->input->post('email');
					$password = $this->input->post('password');					
					$user = $this->User_model->checkLogin($email,$password);
					if($user>0)
					{
						$_SESSION['email'] = $email;
						echo json_encode(array('successMsg' => 'Successfully Logged In.'));
					}
				else
					echo json_encode(array('errorMsg' => 'Either Email or Password is Wrong'));              
	      }
			} 
		catch (Exception $e)
		{	}			
	}
}
