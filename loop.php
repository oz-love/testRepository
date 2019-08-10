<?php
$i = 1;
for ($i; $i <= 10; $i++) {
	echo $i;
}
echo PHP_EOL;
for ($j = 1; $j < 10; $j++) {
	for ($k = 1; $k < 10; $k++) {
		$result = $j * $k;
		echo $result;
	}
	echo PHP_EOL;
}
?>
