<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Match extends CI_Controller {

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
		$this->load->model("match_model");
		$arr = $this->match_model->showFisherman($index);
		for($i=0;$i<count($arr);$i++){
			$arr[$i]->id=$index;
		}
		$data = array("id"=>$index,"researchers"=>$arr);
		$this->parser->parse('match_F',$data);
	}
	public function fishermanMatch ($id,$index) 
	{
		$this->load->model("match_model");
		$this->match_model->toMatch($id,$index);
		
		
		
		$arr = $this->match_model->showFisherman($index);
		for($i=0;$i<count($arr);$i++){
			$arr[$i]->id=$id;
		}
		$data = array("id"=>$index,"researchers"=>$arr);
		$this->parser->parse('match_F',$data);
	}
	
	public function researchers($index)
	{
		$this->load->model("match_model");
		$arr = $this->match_model->showResearchers($index);
		for($i=0;$i<count($arr);$i++){
			$arr[$i]->userid=$index;
		}
		$data = array("id"=>$index,"fisherman"=>$arr);
		$this->parser->parse('match_R',$data);
	}
	public function researchersMatch ($id,$index) 
	{
		$this->load->model("match_model");
		$this->match_model->toMatch($id,$index);
		$arr = $this->match_model->showResearchers($index);
		for($i=0;$i<count($arr);$i++){
			$arr[$i]->userid=$id;
		}
		$data = array("id"=>$index,"fisherman"=>$arr);
		$this->parser->parse('match_R',$data);
	}
	
	public function matchResult($index) 
	{
		$this->load->model("match_model");
		$result = $this->match_model->show();
		$user = array();
		$match = array();
		foreach($result as $row){
			if($row->user1 == $index){
				array_push($user,$row->user2);
			}
		}
		foreach($user as $value){
			foreach($result as $row){
				if($value == $row->user1 && $row->user2 == $index)
				{
					array_push($match,$value);
				}
			}
		}
		//print_r($match);
		
		$arr = $this->match_model->getUser();
		
		foreach($arr as $row){
			foreach($match as $value){
				if($row->index == $value){
					echo $row->account."配對成功!!<br>";
				}
			}
		}
		
	}

}
