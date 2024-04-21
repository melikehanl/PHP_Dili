<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Başlıksız Belge</title>
</head>

<body>
	<?php
	$dizi=array("Pazartesi","","Çarşamba","Perşembe","Cuma","Cumartesi","Pazar");
	$dizi[1]="Salı";
	$dizi[]="Ardahan";
	$dizi[10]="TÜRKİYE";
	echo"<pre>";
	print_r($dizi);
	echo"</pre>";
	?>
</body>
</html>