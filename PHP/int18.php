<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Başlıksız Belge</title>
</head>

<body>
	<?php
	if($_POST){
		$gun=$_POST["Günler"];
		switch($gun){
			case "Pazartesi": echo "Haftanın Birinci Günü"; break;
			case "Salı": echo "Haftanın İkinci Günü"; break;
			case "Çarşamba": echo "Haftanın Üçüncü Günü"; break;
			case "Perşembe": echo "Haftanın Dördüncü Günü"; break;
			case "Cuma": echo "Haftanın Beşinci Günü"; break;
			case "Cumartesi": echo"Haftanın Altıncı Günü"; break;
			case "Pazar": echo "Haftanın Yedinci Günü"; break;
				
			default: echo "Lütfen Bir Gün Giriniz";
		}
	}
	
	?>
	<form action="#" method="post">
	<input type="text" name="Günler"/>
	<input type="submit" value="GÖSTER"/>
	</form>
		 
</body>
</html>