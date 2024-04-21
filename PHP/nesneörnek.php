<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Başlıksız Belge</title>
</head>

<body>
	<?php
	class Oto{
		public $marka="renault";
		protected $model="megane";
		private $renk="beyaz";
	}
	$nesne=new Oto();
	echo $nesne->marka;

	
	?>
</body>
</html>