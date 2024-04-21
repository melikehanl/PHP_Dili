<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Başlıksız Belge</title>
</head>

<body>
	<?php
	if($_GET){
		if($_GET["kisi"]==""){
		echo"Lütfen Bir Ad Soyad Giriniz.";
	  
		}
	else
	{
	$kullanici=$_GET["kisi"];
	$kullanici=str_replace(" ",".",$kullanici);
	$kullanici=str_replace("Ç","C",$kullanici);
	$kullanici=str_replace("Ş","S",$kullanici);
	$kullanici=str_replace("Ğ","G",$kullanici);  
	$kullanici=str_replace("Ö","O",$kullanici);
	$kullanici=str_replace("Ü","U",$kullanici);
	$kullanici=str_replace("İ","I",$kullanici);
	
	$kullanici=str_replace("ç","c",$kullanici);
	$kullanici=str_replace("ş","s",$kullanici);
	$kullanici=str_replace("ğ","g",$kullanici); 
	$kullanici=str_replace("ö","o",$kullanici);
	$kullanici=str_replace("ü","u",$kullanici);
	$kullanici=str_replace("ı","i",$kullanici);
	
	echo strtolower($kullanici)."@gop.edu.tr";
	
		
	}
		}
	?>
	<form action="#" method="get">
	Ad Soyad:<input type="text" name="kisi">
		<input type="submit" value="GÖNDER">
	</form>
</body>
</html>