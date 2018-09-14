<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Training Brse</title>
</head>
<body>
<h3>Bài 8:</h3>
<p>Nhập vào 1 mảng, tìm độ dài ngắn/dài nhất của các phần tử trong mảng</p>
<form method="POST">
	<input type="text" name="number_n" placeholder="Nhập các số, tách nhau bằng giấu phẩy">
	<button type="submit">Sắp sếp</button>
</form>
<p>Kết quả:</p>
<?php
    if(isset($_POST['number_n'])){
        $arrayNumbers = explode(",", $_POST['number_n']);
        $lengArrayNumbers = array_map('strlen', $arrayNumbers);
        echo 'Độ dài ngắn nhất: '  . min($lengArrayNumbers) .'<br>';
        echo 'Độ dài dài nhất: '  . max($lengArrayNumbers);
    }
?>
</body>
</html>