<?php
    function getNumbersSorted($stringNumbers){
        $arrayNumbers = explode(",", $stringNumbers);
        sort($arrayNumbers);
        return implode(", ", $arrayNumbers);
    }
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Training Brse</title>
</head>
<body>
<h3>Bài 6:</h3>
<p>Nhập vào 1 mảng các số, sắp sếp mảng đó theo thứ tự từ bé đến lớn (tách nhau bằng dấu phẩy)</p>
<form method="POST">
	<input type="text" name="number_n" placeholder="Nhập các số, tách nhau bằng giấu phẩy">
	<button type="submit">Sắp sếp</button>
</form>
<p>Kết quả:</p>
<?php
    if(isset($_POST['number_n'])){
        echo getNumbersSorted($_POST['number_n']);
    }
?>
</body>
</html>