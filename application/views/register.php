<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>
	<script src="/fish/public/jquery-3.3.1.min.js"></script>
	<script>
		$(document).ready(function()
		{
			
		});
		
		function check() 
		{
			var email = document.forms["myForm"]["email"].value;
			var re_email = document.forms["myForm"]["re_email"].value;
			if (email != re_email) 
			{
				alert("email不一致");
				return false;
			}
			$.post("./checkAccount/",{acc:email},function(data,status){
				//console.log(data);
				if(data){
					alert("帳號已經存在");
					return false;
				}
			})
			
			var password = document.forms["myForm"]["password"].value;
			var re_password = document.forms["myForm"]["repassword"].value;
			if (password != re_password) 
			{
				alert("密碼不一致");
				return false;
			}
			
			var type = document.forms["myForm"]["type"].value;
			if(type == -1)
			{
				alert("請選擇身分");
				return false;
			}
			return true;
		}
	</script>
</head>
<body>

	<form name="myForm" align="center" method="post" action="/fish/index.php/register/insert/" onsubmit="return check()">
		<input type="email" placeholder="電子郵件地址" name="email" required><br>
		<input type="email" placeholder="確認電子郵件地址" name="re_email" required><br>
		<input type="password" placeholder="密碼" name="password" required><br>
		<input type="password" placeholder="確認密碼" name="repassword" required><br>
		<select name="type" >
			<option value="-1">請選擇身分</option>
			<option value="0">漁產業者</option>
			<option value="1">研究人員</option>
		</select> <br>
		<input type="submit" value="送出">
		<input type="reset" value="清空">
	</form>

</body>
</html>