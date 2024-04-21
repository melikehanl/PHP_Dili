<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Başlıksız Belge</title>
</head>
<!-- formdan gelen bir sayının tek ve çift olma durumunu kontrol eden php kodu -->
<body>
	
	<?php
if($_GET){
	if($_GET["sayi"]%2==0)
		echo "Çift";
	else
		echo "Tek";
	}
?>
<form method="get" action="#">
Sayı:<input type="text" name="sayi" />
<input type="submit" value="Sayıyı Kontrol Et" />
</form>
</body>
</html>