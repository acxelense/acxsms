<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {

	function __construct() {
        parent::__construct();

		$this->load->database();
	}
public function index()
	{
		
	}

	public function checkLogin($username,$password)
	{
		$this->db->where('user_name',$username);
			$this->db->where('user_password', md5($password));
			$this->db->where('user_status', 1);
			return $this->db->get("users")->result_id->num_rows;;

	}
}

