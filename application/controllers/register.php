<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('register');
	}
	
	public function insert () 
	{
		$this->load->model("register");
		echo "123";
		$email = $this->input->post("email");
		$pwd = $this->input->post("password");
		$type = $this->input->post("type");
		$register->insert($email,mda5($pwd),type);
		
		
		//$this->db->query("");
		
	}
}
