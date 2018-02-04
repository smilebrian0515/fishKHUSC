<?php
class Setting_model extends CI_Model {

    function __construct()
    {
        // 呼叫模型(Model)的建構函數
        parent::__construct();
    }
    
	function checkFisherman ($index) {
		$sql="SELECT `index` FROM `fishman` WHERE `index`=$index ";
		
		$query = $this->db->query($sql);
		
		if ($query->num_rows() > 0)
		{
			return true;
		} else
		{
			return false;
		}
	}
	
	function insertFisherman ($index,$name,$fisherID,$country,$boat,$boatID) {
		$sql="INSERT INTO `fishman`(`index`, `name`, `id`, `country`, `boat`, `boatID`) VALUES ($index,'$name','$fisherID','$country','$boat','$boatID')";
		
		$query = $this->db->query($sql);
	}

	function updateFisherman ($index,$name,$fisherID,$country,$boat,$boatID) {
		$sql="UPDATE `fishman` SET `name`='$name',`id`='$fisherID',`country`='$country',`boat`='$boat',`boatID`='$boatID' WHERE `index`=$index";
		
		$query = $this->db->query($sql);
	}
	
	function checkDetail ($index) {
		$sql="SELECT `index` FROM `detail` WHERE `index`=$index ";
		
		$query = $this->db->query($sql);
		
		if ($query->num_rows() > 0)
		{
			return true;
		} else
		{
			return false;
		}
	}
	
	function insertDetail ($index,$fisherID=null,$fishName="",$location="",$workTime="",$workDay=null,$peopleNumber=null,$demand="",$fishCount="",$fishSize="",$tools="",$useToolsNumber="",$length="") {
		$sql="INSERT INTO `detail` ( `index`, `fisherID`, `fishName`, `location`, `workTime`, `workDay`, `peopleNumber`, `demand`, `fishCount`, `fishSize`, `tools`, `useToolsNumber`, `length` ) VALUES ( $index , '$fisherID','$fishName' , '$location' , '$workTime' , $workDay,$peopleNumber , '$demand' , '$fishCount' , '$fishSize' , '$tools' , '$useToolsNumber' , '$length' );";
		
		$query = $this->db->query($sql);
	}

	function updateDetail ($index,$fisherID=null,$fishName="",$location="",$workTime="",$workDay=null,$peopleNumber=null,$demand="",$fishCount="",$fishSize="",$tools="",$useToolsNumber="",$length="") {
		$sql="UPDATE `detail` SET `fisherID`='$fisherID',`fishName`='$fishName',`location`='$location',`workTime`='$workTime',`workDay`=$workDay,`peopleNumber`=$peopleNumber,`demand`='$demand',`fishCount`='$fishCount',`fishSize`='$fishSize',`tools`='$tools',`useToolsNumber`='$useToolsNumber',`length`='$length' WHERE `index`=$index";
		
		$query = $this->db->query($sql);
	}
	
	function getFishScientific ($name) {
		$sql = "SELECT * FROM `fish` WHERE `scientific` = '$name' ";
		$query = $this->db->query($sql);
		
		if ($query->num_rows() > 0)
			return $query->result_array();
		
		$sql = "SELECT `fishID` FROM `fishname` WHERE `name` like '%$name%' ";
		$query = $this->db->query($sql);
		
		if ($query->num_rows() > 0)
			return $query->result_arrey();
		
		return 0;
	}
}
?>