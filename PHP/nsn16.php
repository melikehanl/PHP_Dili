<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Başlıksız Belge</title>
</head>

<body>
	<!--NESNE TABANLI PROGRAMLAMA I-->
	<?php
	class Ogrenci{
		public $O_ad,$O_soyad;
		   function Atama(){
			   $this->O_ad="Melike";
			   $this->O_soyad="HANLI";
			   return 0;
		   }
	}
	$nesne=new Ogrenci();
	$nesne->Atama();
	echo $nesne->O_ad." ".$nesne->O_soyad;
	
	
	?>
</body>
</html>