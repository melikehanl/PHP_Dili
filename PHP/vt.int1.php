<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Başlıksız Belge</title>
</head>

<body>
	<?php
	$vt_baglanti=mysqli("Localhost","root","vt_222703016",3306);
	if($vt_baglanti->connect_error)
	
		echo "Bağlantı Hatası";
	
	else
	
		echo "Bağlandı...";
	

	?>
</body>
</html>