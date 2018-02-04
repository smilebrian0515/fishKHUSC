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
			<th>國家</th>
			<th>經驗</th>
			<th>研究經驗</th>
			<th>聯絡時間</th>
			<th>推薦信</th>
			<th>自我介紹</th>
			<th>配對</th>
		</tr>
		{researchers}
		<tr>
			
			<td>{name}</td>
			<td>{country}</td>
			<td>{experience}</td>
			<td>{project}</td>
			<td>{contact}</td>
			<td>{recommended}</td>
			<td>{introduction}</td>
			<td><a href="/fish/index.php/match/fishermanMatch/{id}/{index}">配對</a></td>
		</tr>
		{/researchers}
	</table>
	<a href="/fish/index.php/match/matchResult/{id}">配對結果
	<a href="/fish/index.php/home/fisherman/{id}">回到首頁</a>
</body>
</html>