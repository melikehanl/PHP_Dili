<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Başlıksız Belge</title>
</head>

<body>
	<?php
	class Otomobil{
		public $O_Marka;
			function __construct($O_Marka){
			$this->O_Marka=$O_Marka;
		}
		function __destruct(){
			echo "Yerli Arabamız ($this->O_Marka)";
		}
	}
	$vekil=new Otomobil("TOGG");
	
	?>
</body>
</html>