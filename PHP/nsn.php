<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Başlıksız Belge</title>
</head>

<body>
	<?php
	class Araba{
		public $marka,$model;
		
		
		function Atama(){
			$this->marka="tofaş";
			$this->model="şahin";
			return 0;
		}
		function Yazdir(){
			echo "Araba Marka:".$this->marka."<br> Araba Model:".$this->model;
			return 0;
		}
		
	}
	$nesne=new Araba();
	$nesne->Atama();
	$nesne->Yazdir();
	
	?>
</body>
</html>