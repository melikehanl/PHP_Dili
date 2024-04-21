<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Başlıksız Belge</title>
</head>

<body>
	<?php
	include("sinif.php");
	if($_POST){
	$vekil=new Adres($_POST["il"],$_POST["ilce"],$_POST["mahalle"]);
	}
	
	?>
	<form action="#" method="post">
		<pre>
	İl:        <input type="text" name="il">
	İlçe:      <input type="text" name="ilce">
	Mahalle:   <input type="text" name="mahalle">
	           <input type="submit" value="Kaydet">
	</pre>
	</form>
</body>
</html>