<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Başlıksız Belge</title>
</head>

<body>
	<!--İNTERNET PROGRAMCILIĞI-->
	<?php
	if($_GET){
		$adsoyad=$_GET["adsoyad"];
		$ad=strlen($adsoyad);
		$adsoyad=strtoupper($adsoyad);
		
		for($i=$ad-1;$i>=0;$i--){
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