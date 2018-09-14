<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Training Brse</title>
</head>
<body>
<h3>Bài 5:</h3>
<p>Nhập vào n, hiển thị tam giác sao nxn</p>
<form method="POST">
	<input type="text" name="number_n" placeholder="Số n">
	<button type="submit">Hiển thị</button>
</form>
<p>Kết quả:</p>
<?php
if(isset($_POST['number_n'])){
	$n = $_POST['number_n'];
	for($x=1; $x <= $n; $x++) {  
	   for ($y=1; $y <= $x; $y++) {  
		 echo "*";  
			if($y < $x) {  
			   echo " ";  
			}  
		}  
	   echo "<br>";  
	}
}
?>
</body>
</html>