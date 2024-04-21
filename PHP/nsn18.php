<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Başlıksız Belge</title>
</head>

<body>
	<!--NESNE TABANLI PROGRAMLAMA-->
	<?php
if($_POST){
    $sayi = $_POST['tamsayi'];
    function faktoryel($sayi)
    {
        if($sayi<2) {
            return 1;   
        }
        return $sayi * faktoryel($sayi-1);
    }
    echo $sayi." sayısının faktöriyeli=".faktoryel($sayi);
}
?>
	<form action="#" method="post">
	<input type="text" name="tamsayi">
	<input type="submit" value="Hesapla">
	</form>
</body>
</html>