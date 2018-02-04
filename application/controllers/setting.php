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
	public function updatefisher () 
	{
		$this->load->model("setting_model");
		//確認是否已經存在
		$index = $this->input->post("index");
		$exist = $this->setting_model->checkFisherman($index);
		//echo $index;
		
		$name = $this->input->post("name");
		$fisherID = $this->input->post("fisherID");
		$country = $this->input->post("country");
		$boat = $this->input->post("boat");
		$boatID = $this->input->post("boatID");
		//放入資料
		if($exist)
		{
			$this->setting_model->updateFisherman($index,$name,$fisherID,$country,$boat,$boatID);
		}else 
		{
			$this->setting_model->insertFisherman($index,$name,$fisherID,$country,$boat,$boatID);
		}
		//確認修改
		$exist = $this->setting_model->checkDetail($index);
		$location = $this->input->post("location");
		$workTime = $this->input->post("workTime");
		$workDay = $this->input->post("workDay");
		$peopleNumber = $this->input->post("peopleNumber");
		$demand = $this->input->post("demand");
		////////
		$fishName = $this->input->post("fishName");
		$fishCount = $this->input->post("fishCount");
		$fishSize = $this->input->post("fishSize");
		$tools = $this->input->post("tools");
		$useToolsNumber = $this->input->post("useToolsNumber");
		$length = $this->input->post("length");
		
		//echo $location.$workTime.$workDay.$peopleNumber.$demand.$fishName.$fishCount.$fishSize.$tools.$useToolsNumber.$length."<br>";
		//獲得魚類學名
		//$fish = $this->setting_model->getFishScientific($fishName);
		//放入資料
		if($exist)
		{
			$this->setting_model->updateDetail($index,$fisherID,$fishName,$location,$workTime,$workDay,$peopleNumber,$demand,$fishCount,$fishSize,$tools,$useToolsNumber,$length);
		}else 
		{
			$this->setting_model->insertDetail($index,$fisherID,$fishName,$location,$workTime,$workDay,$peopleNumber,$demand,$fishCount,$fishSize,$tools,$useToolsNumber,$length);
		}
		
		
		
		
		$data = array("id"=>$index);
		$this->parser->parse('setting_F',$data);
	}
}
