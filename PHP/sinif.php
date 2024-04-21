<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Başlıksız Belge</title>
</head>

<body>
	<?php
	class Adres {
		public $il,$ilce,$mahalle;
		
		function __construct($a,$b,$c){
			$this->il=$a;
			$this->ilce=$b;
			$this->mahalle=$c;
			return 0;
		}
		function __destruct(){
			echo "<b>il</b>:{$this->il}<br><b>ilçe</b>:{$this->ilce}<br><b>Mahalle</b>:{$this->mahalle}";
			return 0;
		}
	}
	
	?>
	
</body>
</html>