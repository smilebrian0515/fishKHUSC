<?php
class Setting_model extends CI_Model {

    function __construct()
    {
        // 呼叫模型(Model)的建構函數
        parent::__construct();
    }
    
	function login ($email,$pwd) {
		$sql="SELECT `type` FROM `user` WHERE `account`='$email' AND `password`='$pwd'";
		
		$query = $this->db->query($sql);
		
		if ($query->num_rows() > 0)
		{
			return $query->result_array();
		} else
		{
			return -1;
		}
	}


}
?>