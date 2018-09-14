<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Training Brse</title>
</head>
<body>
<h3>Bài 10:</h3>
<p>In bảng cửu chương từ 1-10</p>
<table align="left" border="1" cellpadding="3" cellspacing="0">  
	<?php  
		for($i=1; $i <= 10; $i++) {  
			echo "<tr>";  
			for ($j=1; $j <= 9; $j++) {  
		  		echo "<td>$i x $j = ".$i*$j."</td>";  
		  	}  
		  	echo "</tr>";  
	  	}  
	?>  
</table> 
</body>
</html>