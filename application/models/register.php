<?php
class Register extends CI_Model {

    function __construct()
    {
        // 呼叫模型(Model)的建構函數
        parent::__construct();
    }
    
	function insert ($email,$pwd,$type) {
		$sql="INSERT INTO `user`(`account`, `password`, `type`) VALUES ($email,$pwd,$type)";
		
		$this->db->query($sql);
	}

}
?>