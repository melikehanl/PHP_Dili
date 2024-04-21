<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Başlıksız Belge</title>
</head>

<body>
	<?php
if ($_POST) {
    $kenar1 = $_POST["kenar1"];
    $kenar2 = $_POST["kenar2"];

    $toplam = $kenar1 + $kenar2;

    if ($toplam < 180) {
        $ucuncuKenar = 180 - $toplam;
        echo "Üçgenin üçüncü açısı: $ucuncuKenar derece";
    } else {
        echo "Girilen açılar bir üçgenin iç açılarını temsil etmiyor.";
    }
}
?>
<form action="#" method="POST">
    Birinci Kenarı Giriniz:
    <input type="text" name="kenar1" >
    İkinci Kenarı Giriniz:
    <input type="text" name="kenar2" >
    <input type="submit" value="Hesapla">
</form>

</body>
</html>