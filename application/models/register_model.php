<?php
class Register_model extends CI_Model {

    function __construct()
    {
        // 呼叫模型(Model)的建構函數
        parent::__construct();
    }
    
	function insert ($email,$pwd,$type) {
		$sql="INSERT INTO `user`(`account`, `password`, `type`) VALUES ('$email','$pwd',$type)";
		
		$this->db->query($sql);
	}
	
	function checkAccount ($email) {
		$sql = "SELECT `account` FROM `user` WHERE `account`='$email'";
		
		$query = $this->db->query($sql);
		
		if ($query->num_rows() > 0)
		{
			return true;
		} else
		{
			return false;
		}
	}

}
?>