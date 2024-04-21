<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Başlıksız Belge</title>
</head>

<body>
	<?php
	class Meyve{
		public $M_ad;
		public $M_renk;
		
		function Atama(){
			$this->M_ad="Elma";
			$this->M_renk="Yeşil";
			return 0;
		}
		function Yazdir(){
			echo "Meyve:$this->M_ad<br>Renk:$this->M_renk";
			return 0;
		}
	}
	$nesne=new Meyve();
	$nesne->Atama();
	$nesne->Yazdir();
	?>
</body>
</html>