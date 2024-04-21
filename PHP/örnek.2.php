<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Başlıksız Belge</title>
</head>

<body>
	<?php
	if($_GET){
		if($_GET["kisi"]!=""){
		echo "Hoşgeldiniz".".".$_GET["kisi"];
	  
		}
	else
	{
		echo"Lütfen Bir Ad Soyad Giriniz.";
		
		
	}
		}
	?>
	<form action="#" method="get">
	Ad Soyad:<input type="text" name="kisi">
		<input type="submit" value="GÖNDER">
	</form>
</body>
</html>