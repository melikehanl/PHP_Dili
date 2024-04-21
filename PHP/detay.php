<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Başlıksız Belge</title>
</head>

<body>
		<?php
	include("vtbaglan.php");
	$conn=new mysqli("localhost","root","","vt_baglan",3306);
		if($_GET){
			$kisibul=$_GET["kisi"];
			$sql_bul="select * from tbl_kisibilgi where kisi_ID=$kisibul";
			$kayit=mysqli_query($conn,$sql_bul);
			$satir=mysqli_fetch_assoc($kayit);
		
			echo "<table>
			<tr><th>NO</th>
			<th>:</th>
			<th>$satir[Kisi_ID]</th>
			</tr>
			
			<tr><th>AD SOYAD</th>
			<th>:</th>
			<th>$satir[Kisi_Ad] $satir[Kisi_Soyad]</th>
			</tr>
			
			<tr><th>TELEFON</th>
			<th>:</th>
			<th>$satir[Kisi_Tel]</th>
			</tr>
			
			<tr><th>E-MAİL</th>
			<th>:</th>
			<th>$satir[Kisi_Email]</th>
			</tr>
			
			<tr><th>İL</th>
			<th>:</th>
			<th>$satir[Kisi_IL]</th>
			</tr>
				</table>";
	
				}
		
	?>
		
</body>
</html>