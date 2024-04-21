<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Başlıksız Belge</title>
</head>

<body>
	<?php
if($_POST){
	$kenar1=$_POST["kenar1"];
	$kenar2=$_POST["kenar2"];
	
	$toplam=($kenar1+$kenar2)-1;
	$cikar=($kenar1-$kenar2)+1;
	
	if($toplam===180){
		echo" üçgenin iç açıları toplamı 180 olduğu için sayi 180  olmalı";
	}
	else
	{
		    echo "üçgenin 3. kenarı maximum: $toplam    ve minumim:$cikar değeri";
	}
	
}
?>
	<form action="#" method="post">
	1.kenar:<input type="text" name="kenar1"><br>
	2.kenar:<input type="text" name="kenar2"><br>
	<input type="submit" value="Hesapla">
	</form>
</body>
</html>