<?php
function laSoNguyenTo($n){
    // Neu n < 2 thi khong phai la SNT
    if ($n < 2){
        return false;
    }       
     
    for ($i = 2; $i <= ($n/2); $i++){
        if ($n % $i == 0){
            return false;
        }   
    }
     
    return true;
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Training Brse</title>
</head>
<body>
<h3>Bài 3:</h3>
<p>Liệt kê các số nguyên tố nhỏ hơn n</p>
<form method="POST">
	<input type="text" name="number_n" placeholder="Số n">
	<button type="submit">Tính</button>
</form>
<p>Kết quả:</p>
<?php if(isset($_POST['number_n'])): ?>
	<p><?php echo laSoNguyenTo($_POST['number_n']) ? 'Là số nguyên tố' : 'Không phải số nguyên tố'; ?></p>
<?php endif; ?>
</body>
</html>