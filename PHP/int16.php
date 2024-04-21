<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Başlıksız Belge</title>
</head>

<body>
	<?php
	if($_POST){
		$sayi=$_POST["Rakam"];
		$birler=array("Sıfır","Bir","İki","Üç","Dört","Beş","Altı","Yedi","Sekiz","Dokuz");
		if($sayi==0)
			echo $birler[0];
		else if($sayi==1)
			echo $birler[1];
		else if($sayi==2)
			echo $birler[2];
		else if($sayi==3)
			echo $birler[3];
		else if($sayi==4)
			echo $birler[4];
		else if($sayi==5)
			echo $birler[5];
		else if($sayi==6)
			echo $birler[6];
		else if($sayi==7)
			echo $birler[7];
		else if($sayi==8)
			echo $birler[8];
		else if($sayi==9)
			echo $birler[9];
		else
			echo "Lütfen bir rakam giriniz";
	}
	
	
	
	?>
	<form action="#" method="post">
	<input type="text" name="Rakam"/>
	<input type="submit" value="GÖSTER"/>
	</form>
</body>
</html>