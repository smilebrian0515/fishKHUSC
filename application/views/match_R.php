<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>
</head>
<body>
	<table border="1">
		<tr>
			<th>姓名</th>
			<th>船員編號</th>
			<th>國家</th>
			<th>作業船型</th>
			<th>船隻編號</th>
			<th>捕撈魚種</th>
			<th>作業地點</th>
			<th>作業時間</th>
			<th>作業天數</th>
			<th>人數</th>
			<th>研究需求</th>
			<th>魚的數量</th>
			<th>魚的大小</th>
			<th>漁具</th>
			<th>捕撈次數</th>
			<th>深度</th>
		</tr>
		{fisherman}
		<tr>
			
			<td>{name}</td>
			<td>{id}</td>
			<td>{country}</td>
			<td>{boat}</td>
			<td>{boatID}</td>
			<td>{fishName}</td>
			<td>{location}</td>
			<td>{workTime}</td>
			<td>{workDay}</td>
			<td>{peopleNumber}</td>
			<td>{demand}</td>
			<td>{fishCount}</td>
			<td>{fishSize}</td>
			<td>{tools}</td>
			<td>{useToolsNumber}</td>
			<td>{length}</td>
			<td><a href="/fish/index.php/match/researchersMatch/{userid}/{index}">配對</a></td>
		</tr>
		{/fisherman}
	</table>
	<a href="/fish/index.php/match/matchResult/{id}">配對結果
	<a href="/fish/index.php/home/researchers/{id}">回到首頁</a>
</body>
</html>