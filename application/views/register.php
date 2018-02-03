<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>
</head>
<body>

	<form align="center">
		<input type="text" placeholder="電子郵件地址" name="email"><br>
		<input type="text" placeholder="確認電子郵件地址" name="re_email"><br>
		<input type="password" placeholder="密碼" name="password"><br>
		<input type="password" placeholder="確認密碼" name="repassword"><br>
		<select name="type">
			<option value="-1">請選擇身分</option>
			<option value="0">漁產業者</option>
			<option value="1">研究人員</option>
		</select> <br>
		<input type="submit" value="送出">
		<input type="reset" value="清空">
	</form>

</body>
</html>