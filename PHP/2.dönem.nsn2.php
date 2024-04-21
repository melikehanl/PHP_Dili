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
		function Atama(){
			$this->M_ad="Portakal";
			return 0;
		}
	}
	$vekil=new Meyve();
	$vekil->Atama();
	echo $vekil->M_ad;
	
	
	?>
	
</body>
</html>