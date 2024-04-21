<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Başlıksız Belge</title>
</head>

<body>
	<?php
	$conn=new mysqli("localhost","root","","hairextensionstoredb",3306);
	if($conn==true)
		echo "vt Bağlandı...";
	else
		echo "vt Bağlanamadı..";
	
	
	?>
</body>
</html>