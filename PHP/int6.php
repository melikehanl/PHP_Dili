<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Başlıksız Belge</title>
</head>

<body>
<?php
if($_GET){
	echo "Hoşgeldiniz ".$_GET["adsoyad"];
	}
?>
<form action="#" method="get">
Adınız Soyadınız:
<input type="text" name="adsoyad">
<input type="submit" value="Kaydet">
</form> 
	
</body>
</html>