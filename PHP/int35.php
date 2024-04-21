<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Başlıksız Belge</title>
</head>

<body>
	<table border="1" cellpadding="2px" cellspacing="2px">
	<tr><td>NO</td>
		<td>AD SOYAD</td>
		<td>TELEFON</td>
		<td>E-MAİL</td>
		<td>İL</td>
		<td>İŞLEMLER</td></tr>
		
	<?php
	include("vtbaglan.php");
	$conn=new mysqli("localhost","root","","vt_baglan",3306);
	$sorgu="select * from tbl_kisibilgi";
	$kayitlar=mysqli_query($conn,$sorgu);
	//print_r($kayitlar);
	while($satir=mysqli_fetch_assoc($kayitlar)){
		echo"<tr><td>$satir[Kisi_ID]</td>
		<td>$satir[Kisi_Ad] $satir[Kisi_Soyad]</td>
		<td>$satir[Kisi_Tel]</td>
		<td>$satir[Kisi_Email]</td>
		<td>$satir[Kisi_Email]</td>
		<td>D - G - S</td></tr>";
	}
		
	

	?>
		</table>
</body>
</html>