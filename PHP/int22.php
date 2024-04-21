<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Başlıksız Belge</title>
</head>

<body>
	<!--İNTERNET PROGRAMCILIĞI-->
	<?php
	$metin = "PazarMYO Bilgisayar";
	$ara = "i";
	$say = 0;
	
	for ($i = 0; $i < strlen($metin); $i++) {
		if ($ara == $metin[$i]) {
			$say++;
		}
	}
	
	echo $say;
?>

</body>
</html>