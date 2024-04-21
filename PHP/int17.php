<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Başlıksız Belge</title>
</head>

<body>
	<?php
	if($_POST){
		$sayi=$_POST["sayi"];
		$onluk=substr($sayi,0,1);
		$birlik=substr($sayi,1,1);
		if($onluk==0)
			$yaziyla1="";
		else if($onluk==1)
			$yaziyla1="On";
		else if($onluk==2)
			$yaziyla1="Yirmi";
		else if($onluk==3)
			$yaziyla1="Otuz";
		else if($onluk==4)
			$yaziyla1="Kırk";
		else if($onluk==5)
			$yaziyla1="Elli";
		else if($onluk==6)
			$yaziyla1="Atmış";
		else if($onluk==7)
			$yaziyla1="Yetmiş";
		else if($onluk==8)
			$yaziyla1="Seksen";
		else if($onluk==9)
			$yaziyla1="Doksan";
		if($birlik==0)
			$yaziyla2="Sıfır";
		else if($birlik==1)
			$yaziyla2="Bir";
		else if($birlik==2)
			$yaziyla2="İki";
		else if($birlik==3)
			$yaziyla2="Üç";
		else if($birlik==4)
			$yaziyla2="Dört";
		else if($birlik==5)
			$yaziyla2="Beş";
		else if($birlik==6)
			$yaziyla2="Altı";
		else if($birlik==7)
			$yaziyla2="Yedi";
		else if($birlik==8)
			$yaziyla2="Sekiz";
		else if($birlik==9)
			$yaziyla2="Dokuz";
		echo $yaziyla1.".".$yaziyla2;
	
	}
	
	?>
	<form action="#" method="post">
	<input type="text" name="sayi"/>
	<input type="submit" value="GÖSTER"/>
	</form>
</body>
</html>