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
			$this->ad="HAKAN";
			$this->soyad="AK";
			return 0;
			}
	}
$nesne=new Ogrenci();
$nesne->atama();
echo $nesne->ad." ".$nesne->soyad;
?>
</body>
</html>