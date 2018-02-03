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
		<input type="text" placeholder="電子郵件地址"><br>
		<input type="text" placeholder="確認電子郵件地址"><br>
		<input type="password" placeholder="密碼"><br>
		<input type="password" placeholder="確認密碼"><br>
		<select >
			<option>請選擇</option>
			<option>漁產業者</option>
			<option>研究人員</option>
		</select>
		<input type="submit" value="送出">
		<input type="reset" value="清空">
	</form>

</body>
</html>