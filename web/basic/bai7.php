<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Training Brse</title>
</head>
<body>
<h3>Bài 7:</h3>
<p>Nhập vào 1 mảng các số, tìm giá trị trung bình, tổng của mảng đó</p>
<form method="POST">
	<input type="text" name="number_n" placeholder="Nhập các số, tách nhau bằng giấu phẩy">
	<button type="submit">Sắp sếp</button>
</form>
<p>Kết quả:</p>
<?php
    if(isset($_POST['number_n'])){
        $arrayNumbers = explode(",", $_POST['number_n']);
        echo 'Trung bình: '  . array_sum($arrayNumbers) / count($arrayNumbers) .'<br>';
        echo 'Tổng: '  . array_sum($arrayNumbers);
    }
?>
</body>
</html>