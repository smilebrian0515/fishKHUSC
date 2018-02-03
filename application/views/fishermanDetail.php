<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>
</head>
<body>

	<form name="myForm" align="center" method="post" action="/fish/index.php/setting/update/">
		<input type="text" placeholder="姓名(ex:吳謹誠)" name="name" value="吳謹誠"><br>
		<input type="text" placeholder="船員編號" name="fisherID" value="a1234567890"><br>
		<input type="text" placeholder="國家" name="country" value="臺灣"><br>
		<input type="text" placeholder="作業船名(ex:東坡32)" name="boat" value="東坡32"><br>
		<input type="text" placeholder="船隻編號(ex:CT3-4432)" name="boatID" value="CT3-4432"><br>
		<input type="text" placeholder="作業地點(ex:野柳沿岸)" name="location" value="野柳沿岸"><br>
		<input type="text" placeholder="作業時間(ex:1500~1900)" name="workTime" value="1500~1900"><br>
		<input type="text" placeholder="作業天數(1~100)" name="workDay" value="1"><br>
		<input type="text" placeholder="作業人數(1~100)" name="peopleNumber" value="5"><br>
		<textarea placeholder="研究需求" name="demand" value="好多螃蟹阿  哇哈哈哈哈"></textarea><br>
		<input type="text" placeholder="魚的種類(ex:鬼頭刀)" name="fishName" value="螃蟹"><br>
		<input type="text" placeholder="魚的數量(ex:3噸重)" name="fishCount" value="40斤"><br>
		<input type="text" placeholder="魚的大小" name="fishSize" value=""><br>
		<input type="text" placeholder="漁具(ex:延繩釣、拖網)" name="tools" value="蟹籠"><br>
		<input type="text" placeholder="次數(ex:5鉤、3網、10次)" name="useToolsNumber" value=""><br>
		<input type="text" placeholder="深度(ex:150公尺)" name="length" value=""><br>
		<input type="submit" value="送出">
		<input type="reset" value="清空">
	</form>

</body>
</html>