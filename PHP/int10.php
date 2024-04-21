<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Başlıksız Belge</title>
</head>

<body>
	<?php
if($_GET){
	echo strtolower($_GET["ad"]).".".strtolower($_GET["soyad"]).substr($_GET["tckimlikno"],9,2).substr($_GET["yil"],2,2)."@gop.edu.tr";
	}
	else
{
}
?>
<form action="#" method="get">
Adınız:<input type="text" name="ad" /><br>
Soyadınız:<input type="text" name="soyad" /><br>
TC Kimlik No:<input type="text" name="tckimlikno" maxlength="11" /><br>
Kayıt Yılı:<input type="text" name="yil" maxlength="4"/><br>
<input type="submit" value="e-Mail Adresi Al">
<input type="reset" value="İptal Et">
</form>
	
</body>
</html>