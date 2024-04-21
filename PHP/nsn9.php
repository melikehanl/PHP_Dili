<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Başlıksız Belge</title>
</head>

<body>
	<?php 
class Ogrenci{
	public $ad, $soyad;
		function atama(){
			$this->ad="Örnek";
			$this->soyad="Nesne";
			return 0;
			}
		function yazdir(){
			echo $this->ad." ".$this->soyad;
			return 0;
			}
	}
$nesne=new Ogrenci();
$nesne->atama();
$nesne->yazdir();
?>
</body>
</html>