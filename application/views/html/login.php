<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
	<head>
		<title>登入</title>
		<meta charset="utf-8">
		<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	</head>
	<body>
		<div class="w3-container">
		  <h2>使用者登入</h2>
		  <hr>
			<form class="w3-container">
				<div class="w3-section">
					<!--帳號-->
					<label><b>Account</b></label>
					<input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="電子郵件地址" name="email" required>
					<!--密碼-->
					<label><b>Password</b></label>
					<input class="w3-input w3-border" type="text" placeholder="請輸入Password" name="Password" required>
					<button class="w3-button w3-block w3-green w3-section w3-padding" type="submit">Login</button>
				</div>
			</form>
			<div class="w3-container w3-border-top w3-padding-16 w3-light-grey">
				<button class="w3-button w3-red"><a href="test1.html">Cancel</button>
			</div>  
		</div>      
	</body>
</html>
