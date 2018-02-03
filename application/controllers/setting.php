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
	public function fisherman($index)
	{
		$data = array("id"=>$index);
		$this->parser->parse('setting_F',$data);
	}
	public function researchers($index)
	{
		$data = array("id"=>$index);
		$this->parser->parse('setting_R',$data);
	}
	public function fishermanDetail($index)
	{
		$data = array("id"=>$index);
		$this->parser->parse('fishermanDetail',$data);
	}
	public function researchersDetail($index)
	{
		$data = array("id"=>$index);
		$this->parser->parse('researchersDetail',$data);
	}
	public function update () 
	{
		$name = $this->input->post("name");
		$fisherID = $this->input->post("fisherID");
		$country = $this->input->post("country");
		$boat = $this->input->post("boat");
		$boatID = $this->input->post("boatID");
		$location = $this->input->post("location");
		$workTime = $this->input->post("workTime");
		$workDay = $this->input->post("workDay");
		$peopleNumber = $this->input->post("peopleNumber");
		$demand = $this->input->post("demand");
		$fishName = $this->input->post("fishName");
		$fishCount = $this->input->post("fishCount");
		$fishSize = $this->input->post("fishSize");
		$tools = $this->input->post("tools");
		$useToolsNumber = $this->input->post("useToolsNumber");
		$length = $this->input->post("length");
		
		
		
		
		
		
		echo "123";
		$arr = $this->input->post("myForm");
		print_r($arr);
	}
}
