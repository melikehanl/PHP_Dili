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
    $fark = $kenar1 - $kenar2; 

    $minKenar = $fark + 1; // min değer
    $maxKenar = $toplam - 1; // max değer

    echo "Üçgenin 3. kenarı için minimum değer: $minKenar ve maksimum değer: $maxKenar";
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