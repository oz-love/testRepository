<?php
if (strlen($_GET['text']) < 1) {
	echo "文字を入力してください";
} else {
	echo "Hello" . $_GET['text'];
}
?>
<!DOCKTYPE html>
<html lang="ja">
<body>
<h3>Greeting</h3>
<form action="" post="get">
<label>名前を入力してください</label>
<input type="text" name="text" maxlength="20">
<input type="submit" value="submit">
</form>
</body>
</html>
