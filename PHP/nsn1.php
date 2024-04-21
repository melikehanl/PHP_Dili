<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Başlıksız Belge</title>
</head>

<body>
	<?php 
function tetikle($a,$b,$c){
	 if(($a>$b)&&($a>$c))
	 $buyuk=$a;
	 
	 if(($b>$a)&&($b>$c))
	 $buyuk=$b;
	 
	 if(($c>$a)&&($c>$b))
	 $buyuk=$c;
	 
	 echo $buyuk;
	}
tetikle(-5,-9,0);
?>
</body>
</html>