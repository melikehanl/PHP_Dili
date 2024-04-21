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
		public $O_ad,$O_soyad,$O_bolum,$O_ogrno;
		function Atama(){
			$this->O_ad="Melike";
			$this->O_soyad="HANLI";
			$this->O_ogrno="222703016";
			$this->O_bolum="Bilgisayar";
			return 0;
		}
		function Yazdir(){
			echo $this->O_ad."<br>";
			echo $this->O_soyad."<br>";
			echo $this->O_ogrno."<br>";
			echo $this->O_bolum;
			return 0;
		}
		
	}
	$nesne=new Ogrenci();
	$nesne->Atama();
	$nesne->Yazdir();
	
	?>
</body>
</html>