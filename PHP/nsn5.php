<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Başlıksız Belge</title>
</head>

<body>
	<?php 
function topla($a,$b){
	//echo "<b>".$a+$b."</b>";
	//echo "<font color=\"#FF0000\">".$a+$b."</font>";
	$toplam=$a+$b;
	echo "<font color=\"#FF0000\">".$toplam."</font>";
	return 0; 
	}
$sayi1=5;
$sayi2=8;
topla($sayi1,$sayi2);
?>
   
</body>
</html>