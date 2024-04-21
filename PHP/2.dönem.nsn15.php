<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Başlıksız Belge</title>
</head>

<body>
	<?php
	$araba=array("Marka"=>"CLio","Model"=>"x","Renk"=>"Beyaz","Yıl"=>"1975","Fiyat"=>"175.000");
	
	foreach($araba as $etiket=>$deger)
		echo"$etiket : $deger <br>";
	
	?>
</body>
</html>