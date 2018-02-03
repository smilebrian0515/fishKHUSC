<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>
</head>
<body>

	<form align="center" method="post" action="/fish/index.php/login/check/">
		<input type="email" placeholder="電子郵件地址" name="email"><br>
		<input type="password" placeholder="密碼" name="password"><br>
		<input type="submit" value="送出">
		<input type="reset" value="清空">
	</form>

</body>
</html>