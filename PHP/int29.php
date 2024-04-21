<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Başlıksız Belge</title>
</head>

<body>
	<!--İNTERNET PROGRAMCILIĞI-->
	<?php
	if($_GET){
		$sayi1=$_GET["sayi1"];
		$sayi2=$_GET["sayi2"];
		$sayi3=$_GET["sayi3"];
		
		 if ($sayi1 <= $sayi2 && $sayi2 <= $sayi3) 
		 {
        echo "Sıralanmış Sayılar: $sayi1 $sayi2 $sayi3";
		 }
		elseif ($sayi1 <= $sayi3 && $sayi3 <= $sayi2)
		{
        echo "Sıralanmış Sayılar: $sayi1 $sayi3 $sayi2";
        } 
		elseif ($sayi2 <= $sayi1 && $sayi1 <= $sayi3)
		{
        echo "Sıralanmış Sayılar: $sayi2 $sayi1 $sayi3";
         } 
		elseif ($sayi2 <= $sayi3 && $sayi3 <= $sayi1)
		{
        echo "Sıralanmış Sayılar: $sayi2 $sayi3 $sayi1";
        } 
		elseif ($sayi3 <= $sayi1 && $sayi1 <= $sayi2) 
		{
        echo "Sıralanmış Sayılar: $sayi3 $sayi1 $sayi2";
         } 
		else
		{
        echo "Sıralanmış Sayılar: $sayi3 $sayi2 $sayi1";
        }
	}
	
	?>
	<form action="#" method="get">
	1.sayı:<input type="text" name="sayi1"><br>
	2.sayı:<input type="text" name="sayi2"><br>
	3.sayı:<input type="text" name="sayi3"><br>
	<input type="submit" value="SIRALA">
		</form>
</body>
</html>