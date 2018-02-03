<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Setting extends CI_Controller {

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
		$this->load->view('setting');
	}
	public function exDetails()
	{
		$this->load->view('exDetails');
		$this->load->model('exDetails_model');
		$name = $this->input->post('name');
		$introduction = $this->input->post('introduction');
		$recommend = $this->input->post('recommend');
		$exp = $this->input->post('exp');
		$rexp = $this->input->post('rexp');
		$time = $this->input->post('time');
		
		if($this->input->post('name') !== NULL)
		{
			$this->exDetails_model->checkname($name,$introduction,$recommend,$exp,$rexp,$time);
			//$this->exDetails_model->insert($name,$introduction,$recommend,$exp,$rexp,$time);

		}
		
	}
	public function exEmail()
	{
		$this->load->view('exEmail');
	}
	public function exPassword()
	{
		//$this->load->helper('security');
		$this->load->view('exPassword');
		$this->load->model('exPass_model');
		$account = $this->input->post('account');
		$Pass = $this->input->post('Pass');
		//$Pass = do_hash($Pass);
		$newPass = $this->input->post('newPass');
		$newPassCon = $this->input->post('newPassCon');
		$this->exPass_model->checkAcc($account,$Pass,$newPass,$newPassCon); 
	}
	public function exPass()
	{
	/*	$account = $this->input->post('account');
		$Pass = $this->input->post('Pass');
		$newPass = $this->input->post('newPass');
		$newPassCon = $this->input->post('newPassCon');
		if($newPass !== $newPassCon)
		{
			echo '<script language="javascript">';
			echo 'alert("密碼輸入不同!")';
			echo '</script>';
			$this->load->view('exPassword');
		}
		else
		{
			echo $pwd;
		}*/
		//$this->exPassword_model->checkAccount($account,$Pass,$newPass)
	}
}
