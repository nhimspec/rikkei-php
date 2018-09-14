<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Training Brse</title>
</head>
<body>
<h3>Bài 1:</h3>
<p>Tính tổng dãy số nguyên từ 1-20</p>
<?php
	$sum = 0;
	for ($i=0; $i < 20; $i++) { 
		$sum+= $i+1;
	}
	echo $sum;
?>
</body>
</html>