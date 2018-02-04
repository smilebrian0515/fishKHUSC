<?php
class Match_model extends CI_Model {

    function __construct()
    {
        // 呼叫模型(Model)的建構函數
        parent::__construct();
    }
    
	function showFisherman ($index) {
		$sql="SELECT * FROM `researchers` WHERE 1";
		
		$query = $this->db->query($sql);
		if ($query->num_rows() > 0)
		{
			return $query->result();
		} else
		{
			return 0;
		}
	}
	
	function toMatch ($id,$index) {
		$sql="SELECT * FROM `match` WHERE `user1`='$id' AND `user2`='$index'";
		
		$query = $this->db->query($sql);
		
		if ($query->num_rows() > 0)
		{
			return 0;
		} 
		$sql="INSERT INTO `match`(`user1`, `user2`) VALUES ('$id','$index')";
		
		$query = $this->db->query($sql);
	}
	
	function showResearchers ($index) {
		$sql="SELECT F.index,F.name,F.id,F.country,F.boat,F.boatID,D.fishName,D.location,D.workTime,D.workDay,D.peopleNumber,D.demand,D.fishCount,D.fishSize,D.tools,D.useToolsNumber,D.length FROM `fishman` as F,`detail` as D WHERE F.`index`=D.`index`";
		
		$query = $this->db->query($sql);
		if ($query->num_rows() > 0)
		{
			return $query->result();
		} else
		{
			return 0;
		}
	}
	
	function show () 
	{
		$sql = "SELECT * FROM `match` WHERE 1";
		$query = $this->db->query($sql);
		if ($query->num_rows() > 0)
		{
			return $query->result();
		} else
		{
			return 0;
		}
	}
	
	function getUser () {
		$sql = "SELECT * FROM `user` WHERE 1";
		$query = $this->db->query($sql);
		if ($query->num_rows() > 0)
		{
			return $query->result();
		} else
		{
			return 0;
		}
	}
	
}
?>