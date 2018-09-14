<?php
	function calFibonaci($n){
		if($n < 2){
			return $n;
		} else {
			$f0 = 0;
			$f1 = 1;
			$fn = 1;
			for($i = 2; $i < $n; $i++){
				$f0 = $f1;
				$f1 = $fn;
				$fn = $f0 + $f1;
			}
		}

		return $fn;
	}

	function recursiveCalFibonaci($n){
		if($n < 2){
			return $n;
		} else {
			return recursiveCalFibonaci($n - 1) + recursiveCalFibonaci($n - 2);
		}	
	}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Training Brse</title>
</head>
<body>
<h3>Bài 4:</h3>
<p>Hiển thị dãy fibonaci nhỏ hơn n</p>
<form method="POST">
	<input type="text" name="number_n" placeholder="Số n">
	<button type="submit">Tính</button>
</form>
<p>Kết quả:</p>
<?php
	if(isset($_POST['number_n'])){
		$numberN = $_POST['number_n'];
		for($i = 0 ; $i< $numberN; $i++){
			echo recursiveCalFibonaci($i). ' ';
		}
	}
?>
</body>
</html>