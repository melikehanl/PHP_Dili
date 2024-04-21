<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Başlıksız Belge</title>
</head>

<body>
	<?php 
	include("vtbaglan.php");
	if($_POST){
		$ad=strtoupper($_POST["kbad"]);
		$soyad=strtoupper($_POST["kbsoyad"]);
		$tel=strtoupper($_POST["kbtel"]);
		$mail=$_POST["kbmail"];
		$il=strtoupper($_POST["kbil"]);
		
		$sql = "INSERT INTO `tbl_kisiselbilgi` (Kb_ID, Kb_Ad, Kb_Soyad, Kb_Tel, Kb_Email, Kb_IL, Kb_Tarih) VALUES (NULL, '$ad', '$soyad', '$tel', '$mail', '$il', current_timestamp());";
	 
		mysqli_query($conn,$sql);
	}
	
	
	
	?>
	<form action="#" method="post">
		<pre>
	Adınız:                <input type="text" name="kbad">
	Soyadınız:             <input type="text" name="kbsoyad">
	Telefon numaranız:     <input type="text" name="kbtel">
	E-mail Adresiniz:      <input type="text" name="kbmail">
	İliniz:                <input type="text" name="kbil">
	                       <input type="submit" value="Kaydet"><input type="reset" value="İptal Et"></pre>
	</form>
</body>
</html>