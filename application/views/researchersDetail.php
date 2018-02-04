<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>
</head>
<body>

	<form align="center" method="post" action="/fish/index.php/setting/updateresearchers/">
		<input type="text" placeholder="姓名" name="name" value="趙睿盈"><br>
		<input type="text" placeholder="國家" name="country" value="臺灣"><br>
		<textarea placeholder="經驗" name="experience" value="國立臺灣海洋大學"></textarea><br>
		<textarea placeholder="參與過的專案" name="project" value="新港鬼頭刀"></textarea><br>
		<input type="text" placeholder="方便聯絡時間(ex:平日上午,周末下午,周一~周三 1300~1700)" name="contact" value="平日下午"><br>
		<textarea placeholder="推薦信" name="recommended" value="政府推薦我"></textarea><br>
		<textarea placeholder="自我介紹" name="introduction" value="自我介紹"></textarea><br>
		<input type="submit" value="送出">
		<input type="reset" value="清空">
		<input type="text" name="index" value="{id}" hidden>
	</form>

</body>
</html>