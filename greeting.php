<?php
if (!empty($_GET['text'])) {
	echo "Hello " . $_GET['text'];
} else {
	echo "文字を入力してください";
}
?>
<!DOCKTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
</head>
<body>
<h3>Greeting</h3>
<form action="" post="get">
<label>名前を入力してください</label>
<input type="text" name="text" maxlength="20">
<input type="submit" value="submit">
</form>
</body>
</html>
