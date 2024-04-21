<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Başlıksız Belge</title>
</head>

<body>
	<!--İNTERNET PROGRAMCILIĞI-->
	<table border="1">
		<tr>
			<td>
	<?php
	if($_GET){
		$sayi1=$_GET["sayi1"];
		$sayi2=$_GET["sayi2"];
		$toplam=$sayi1+$sayi2;  
		$cikarma=$sayi1-$sayi2;
		$carpma=$sayi1*$sayi2;
		$bolme=$sayi1/$sayi2;
		echo "Toplam:".$toplam."<br>Cikarma:".$cikarma."<br>Carpma:".$carpma."<br>Bolme:".$bolme;
	}
	?>
				</td>
			
		
			<td>
	<form action="#" method="get">
	1.sayi:<input type="text" name="sayi1"><br>
		2.sayi:<input type="text" name="sayi2" ><br>
		<input type="submit" value="GÖNDER">
		
		
    </form>
				</td>
			</tr>
			
		</table>
</body>
</html>