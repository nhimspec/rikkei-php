<?php
  function kiemTraChuoiDocNguoc($string)   {  
    if ($string == strrev($string))  
        return true;  
    else  
        return false;  
  }  
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Training Brse</title>
</head>
<body>
<h3>Bài 9:</h3>
<p>Nhập vào 1 chuổi, kiểm tra xem chuổi đó khi đảo ngược lại có giống chuỗi ban đầu không</p>
<form method="POST">
	<input type="text" name="chuoi">
	<button type="submit">Kiểm tra</button>
</form>
<p>Kết quả:</p>
<?php
  if(isset($_POST['chuoi'])){
      echo kiemTraChuoiDocNguoc($_POST['chuoi']) ? 'Giống nhau' : 'Không giống nhau';
  }
?>
</body>
</html>