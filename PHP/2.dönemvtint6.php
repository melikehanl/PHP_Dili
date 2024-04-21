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
		</table>
	<?php
	include("vtbaglan.php");
	$sql="select * from tbl_kisiselbilgi order by Kb_Ad asc";
	$kayitlar=mysql_query($conn,$sql);
	while($satir=mysql_fetch_assoc($kayitlar)){
		echo"<tr><td>$satir[Kb_ID]</td>
		<td>$satir[Kb_Ad] $satir[Kb_soyad]</td>
		<td>$satir[Kb_Tel]</td>
		<td>$satir[Kb_Email]</td>
		<td>$satir[Kb_IL]</td>
		<td>D - G - S</td></tr>";
		
	}
	
	
	
	
	
	?>
</body>
</html>