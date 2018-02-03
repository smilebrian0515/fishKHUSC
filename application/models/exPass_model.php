<?php
class exPass_model extends CI_Model {

    function __construct()
    {
        // 呼叫模型(Model)的建構函數
        parent::__construct();
    }
	public function checkAcc($account,$Pass,$newPass,$newPassCon)
	{
		k
		$Pass = $this->db->query("SELECT * FROM user WHERE `password` = $Pass AND `account` = $account");
		$Acc = $this->db->query("SELECT * FROM user WHERE `account` = $account");
		if($Acc->num_rows() == 0)
		{
			echo '<script language="javascript">';
			echo 'alert("沒有此帳號!")';
			echo '</script>';		
		}		
		else if($newPass !== $newPassCon)
		{
			echo '<script language="javascript">';
			echo 'alert("密碼輸入不同!")';
			echo '</script>';
		}
		else if($Pass->num_rows() == 0)
		{
			echo '<script language="javascript">';
			echo 'alert("原密碼錯誤!")';
			echo '</script>';					
		}
		else
		{
			$this->db->query("UPDATE `user` SET `password` = '$newPass' WHERE `account` = '$account'");
			echo '<script language="javascript">';
			echo 'alert("密碼修改成功!")';
			echo '</script>';
		}
	}
}