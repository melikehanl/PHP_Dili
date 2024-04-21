<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Başlıksız Belge</title>
</head>
<!--NESNE TABANLI PROGRAMLAMA-->
<body>
	<?php
	class Ogrenci{
		public $O_ad="Melike";
		public $O_soyad="HANLI";
		public $O_bolum="Bilgisayar";
		public $O_ogrno="222703016";
			
	}
	$nesne=new Ogrenci();
	echo $nesne->O_ad."<br>";
	echo $nesne->O_soyad."<br>";
	echo $nesne->O_bolum."<br>";
		echo $nesne->O_ogrno;
		
	
	?>
</body>
</html>