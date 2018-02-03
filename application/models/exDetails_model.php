<?php
class exDetails_model extends CI_Model {

    function __construct()
    {
        // 呼叫模型(Model)的建構函數
        parent::__construct();
    }
   /* public function insert($name,$introduction,$recommend,$exp,$rexp,$time)
	{

	}*/
	public function checkname($name,$introduction,$recommend,$exp,$rexp,$time)
	{
		$query = $this->db->query("SELECT * FROM researchers WHERE `rname` = $name");
		if ($query->num_rows() >0 )
		{
			echo "test";
			$this->db->query("UPDATE `researchers` SET `introduction` = '$introduction' , `recom` = '$recommend' , `exp` = '$exp' , `rchexp` = '$rexp' ,`time` ='$time' WHERE `rname` = '$name'");
			echo '<script language="javascript">';
			echo 'alert("資料修改成功")';
			echo '</script>';
		}
		else
		{
			$this->db->query("INSERT INTO `researchers` (`rname`,`introduction`,`recom`,`exp`,`rchexp`,`time`)VALUES('$name','$introduction','$recommend','$exp','$rexp','$time')");
			echo '<script language="javascript">';
			echo 'alert("資料新增成功")';
			echo '</script>';
		}
	}
}