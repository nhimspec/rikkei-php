<?php
	function ucln($a, $b){
		// while($a != $b){
		// 	if ($a > $b){
		// 		$a = $a - $b;
		// 	} else {
		// 		$b = $b - $a;
		// 	}
		// }
		$temp = 0;
		while($b != 0){
			$temp = $a % $b;
			$a = $b;
			$b = $temp;
		}
		return $a;
	}
	function bcnn($a, $b){
		return ($a * $b) / ucln($a, $b);
	}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Training Brse</title>
</head>
<body>
<h3>Bài 2:</h3>
<p>Viết chương trình tìm UCLN và BCNN của 2 số a, b</p>
<form method="POST">
	<input type="text" name="number_a" placeholder="Số a">
	<input type="text" name="number_b" placeholder="Số b">
	<button type="submit">Tính</button>
</form>
<p>Kết quả:</p>
<?php if(isset($_POST['number_a']) && isset($_POST['number_b'])): ?>

<p>UCLN: <?php echo ucln($_POST['number_a'], $_POST['number_b']); ?></p>
<p>BCNN: <?php echo bcnn($_POST['number_a'], $_POST['number_b']); ?></p>

<?php endif; ?>
</body>
</html>