<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
	<head>
		<title>註冊</title>
		<meta charset="utf-8">
		<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
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
				}
				
				var password = document.forms["myForm"]["password"].value;
				var re_password = document.forms["myForm"]["repassword"].value;
				if (password != re_password) 
				{
					alert("密碼不一致");
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
		<div class="w3-container">
		  <h2>註冊新帳戶</h2>
		  <hr>
			<form class="w3-container" name="myForm" align="center" method="post" action="./insert/" onsubmit="return check()>
				<div class="w3-section">
				  <!--姓名-->
				  <label><b>Name</b></label>
				  <input class="w3-input w3-border w3-margin-bottom" type="text" name="email" placeholder="電子郵件地址" required>
				  <!--帳號-->
				  <label><b>Account</b></label>
				  <input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="確認電子郵件地址" name="re_email" required>
				  <!--密碼-->
				  <label><b>Password</b></label>
				  <input class="w3-input w3-border" type="text" placeholder="請輸入Password" name="password" required>
				  <input class="w3-input w3-border" type="text" placeholder="確認Password" name="repassword" required>
				  請選擇身分<br>
				  <select name="type" >
					<option value="-1">請選擇身分</option>
					<option value="0">漁產業者</option>
					<option value="1">研究人員</option>
				  </select> <br>
				  <button class="w3-button w3-block w3-green w3-section w3-padding" type="submit">確定</button>
				</div>
			</form>
		  <br><br>已經有帳戶?
		  <button class="w3-button w3-green w3-large"><a href="test2.html">前往登入畫面</button>
		</div>
	</body>
</html>