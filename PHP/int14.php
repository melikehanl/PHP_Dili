<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Başlıksız Belge</title>
</head>

<body>
	<?php
	if($_POST){
		$sayi=$_POST["Rakam"];
		if($sayi==0)
			echo "sıfır";
		else if($sayi==1)
			echo "Bir";
		else if($sayi==2)
			echo "iki";
		else if($sayi==3)
			echo "Üç";
		else if($sayi==4)
			echo "Dört";
		else if($sayi==5)
			echo "Beş";
		else if($sayi==6)
			echo "Altı";
		else if($sayi==7)
			echo "Yedi";
		else if($sayi==8)
			echo "Sekiz";
		else if($sayi==9)
			echo "Dokuz";
		else
			echo "Bir rakam giriniz";
	}
	
	?>
	<form action="#" method="post">
	Rakam Giriniz:<input type="text" name="Rakam"/>
	<input type="submit" value="GÖNDER"/>
	</form>
</body>
</html>