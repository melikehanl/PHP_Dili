<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Başlıksız Belge</title>
</head>

<body>
	<table border="1" cellpadding="2px" cellspacing="2px">
	<tr><th>NO</th>
		<th>AD SOYAD</th>
		<th>TELEFON</th>
		<th>E-MAİL</th>
		<th>İL</th>
		<th>İŞLEMLER</th></tr>
		
	<?php
	include("vtbaglan.php");
	$conn=new mysqli("localhost","root","","vt_baglan",3306);
	$sorgu="select * from tbl_kisibilgi";
	$kayitlar=mysqli_query($conn,$sorgu);

	while($satir=mysqli_fetch_assoc($kayitlar)){
		echo"<tr><td>$satir[Kisi_ID]</td>
		<td>$satir[Kisi_Ad] $satir[Kisi_Soyad]</td>
		<td>$satir[Kisi_Tel]</td>
		<td>$satir[Kisi_Email]</td>
		<td>$satir[Kisi_IL]</td>
		<td><a href=\"detay.php?kisi=$satir[Kisi_ID]\">Detay</a> - <a href=\"guncelle.php?kisi=$satir[Kisi_ID]\">Güncelle</a> - <a href=\"sil.php?kisi=$satir[Kisi_ID]\">SİL</a></td></tr>";
	}
		
	

	?>
		</table>
</body>
</html>