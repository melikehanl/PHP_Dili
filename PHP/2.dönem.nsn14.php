<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Başlıksız Belge</title>
</head>

<body>
	<?php
	$univ=array("Üniversite"=>"TOGÜ","Birim"=>"PazarMYO","Bölüm"=>"Bilgisayar Teknolojileri","Program"=>"Bilgisayar Programcılığı","Bölüm Başkanı"=>"Ögr.Gör.Hakan AKPINAR");
	
	foreach($univ as $etiket=>$deger)
		echo"$etiket : $deger <br>";
	
	?>
</body>
</html>