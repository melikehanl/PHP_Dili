<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Başlıksız Belge</title>
</head>

<body>
	<?php
	class Ogrenci{
		public $ad,$soyad;
		
		
		function Atama(){
			$this->ad="Melike";
			$this->soyad="HANLI";
			return 0;
			
		}
	}
	$nesne=new Ogrenci();
			$nesne->Atama();
		echo $nesne->ad.".".$nesne->soyad;
		
	
	?>
</body>
</html>