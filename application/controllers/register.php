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
		$this->load->helper('security');
		$this->load->model("register_model");
		$email = $this->input->post("email");
		$pwd = $this->input->post("password");
		$type = $this->input->post("type");
		$pwd = do_hash($pwd);
		$this->register_model->insert($email,$pwd,$type);
		$data = array("type"=>$type);
		$this->parser->parse("home",$data);
	}
	
	public function checkAccount () 
	{
		$this->load->model("register_model");
		$Acc = $this->input->post("acc");
		echo $this->register_model->checkAccount($Acc);
	}
}
