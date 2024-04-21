<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Başlıksız Belge</title>
</head>

<body>
	<?php
class Ogrenci{
	public $ad="Hakan";
	protected $soyad="AK";
	private	$birim="PazarMYO";
	}
$nesne=new Ogrenci();
echo $nesne->ad;
	?>
</body>
</html>