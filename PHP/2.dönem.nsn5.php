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
		
		function Atama($M_ad,$M_renk){
			$this->M_ad=$M_ad;
			$this->M_renk=$M_renk;
			return 0;
		}
		function Yazdir(){
			echo "Meyve:$this->M_ad<br>Renk:$this->M_renk";
			return 0;
		}
	}
	$nesne=new Meyve();
	$nesne->Atama("Armut","Sarı");
	$nesne->Yazdir();
	?>
</body>
</html>