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
		switch($sayi){
				case 0;
				echo "Sıfır";break;
				case 1;
				echo "Bir";break;
				case 2;
				echo "İki";break;
				case 3;
				echo "Üç";break;
				case 4;
				echo "Dört";break;
				case 5;
				echo "Beş";break;
				case 6;
				echo "Altı";break;
				case 7;
				echo "Yedi";break;
				case 8;
				echo "Sekiz";break;
				case 9;
				echo "Dokuz";break;
			default: echo "lütfen bir rakam giriniz";
		}
	}
	?>
	<form action="#" method="post">
	<input type="text" name="Rakam"/>
	<input type="submit" value="GÖNDER"/>
	</form>
</body>
</html>