<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

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
		$this->load->view('login');
	}
	
	public function check () 
	{
		$this->load->helper('security');
		$this->load->model("login_model");
		$email = $this->input->post("email");
		$pwd = $this->input->post("password");
		$pwd = do_hash($pwd);
		$result = $this->login_model->login($email,$pwd);
		if($result == -1){
			$this->load->view("login_error");
		}else{
			$data = array("id"=>$result[0]["index"]);
			if($result[0]['type']==0){
				$this->parser->parse("home_F",$data);
			}else {
				$this->parser->parse("home_R",$data);
			}
		}
		
		
	}
}
