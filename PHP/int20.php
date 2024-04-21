<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Başlıksız Belge</title>
</head>

<body>
	<?php
	if($_GET){
		$adsoyad=$_GET["adsoyad"];
		$ad=strlen($adsoyad);
		$adsoyad=strtoupper($adsoyad);
		
		for($i=0;$i<$ad;$i++){
			echo $adsoyad[$i];
			echo "<br>";
		}
	}
	?>
	<form action="#" method="get">
	Ad Soyad:<input type="text" name="adsoyad">
	<input type="submit" value="GÖNDER"></form>
</body>
</html>