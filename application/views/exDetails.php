<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>研究人員基本資料</title>
	</head>
	<body>
		<h1 align="center">
			研究人員基本資料
		</h1>
		<pre>
		<h2>
			<form name="Detailform" method="post" action="./insert/">
			姓名
			<input type="text" cols="50" name="name">
			自我介紹
			<textarea rows="5" cols="50" name="introduction"></textarea>
			推薦信函
			<textarea rows="5" cols="50" name="recommend"></textarea>
			經驗
			<textarea rows="5" cols="50" name="exp"></textarea>
			研究經驗
			<textarea rows="5" cols="50" name="rexp"></textarea>
			方便聯絡的時間
			<input type="time" id="time" name="time">
		</h2>
		<input type="submit" value="送出">
		<INPUT TYPE="reset" VALUE='取消'>
		</pre>
	</body>
</html>