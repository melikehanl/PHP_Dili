<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Başlıksız Belge</title>
</head>

<body>
	<?php
	$vt_baglanti=new mysqli("localhost","root","","sahibinden_vt");
	if($vt_baglanti->connect_error)
	
		echo "Bağlantı Hatası";
	
	else
	
		echo "Bağlandı...";
	
	$sql="INSERT INTO Tbl_Kategori (Kat_ID,Kat_Adi,Kat_Tarih) VALUES (NULL, 'melike',current_timestamp());";
	
	if($vt_baglanti->query($sql)===true)
		echo "Eklendi";
	else
		echo "Eklenmedi!!";
	

	?>
</body>
</html>