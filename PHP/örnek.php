<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Başlıksız Belge</title>
</head>

<body>
	<?php
	if($_GET){
	echo "Hoşgeldiniz".".".strtoupper($_GET["kisi"]);
	}
	?>
	<form action="#" method="get">
	Ad Soyad:<input type="text" name="kisi">
		<input type="submit" value="GÖNDER">
	</form>
</body>
</html>