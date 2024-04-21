<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Başlıksız Belge</title>
</head>

<body>
	<!--İNTERNET PROGRAMCILIĞI-->
	<?php
if($_POST){
    $sayi = $_POST['tamsayi'];
    if($sayi < 0){
        echo "Negatif sayıların faktöriyeli hesaplanamaz.";
    }else{
        $sonuc = 1;
        for ($i=1; $i <= $sayi; $i++) { 
            $sonuc = $sonuc * $i;
        }
    
        echo $sayi." sayısının faktöriyeli= ". $sonuc;
    }
}
?>
	<form action="#" method="post">
	Faktoriyelini Hesapla:<input type="text" name="tamsayi">
	<input type="submit" value="Heasapla">
	</form>
</body>
</html>