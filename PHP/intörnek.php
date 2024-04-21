<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Başlıksız Belge</title>
</head>
<body>
    <?php
    if ($_POST) {
        $kenar1 = $_POST["kenar1"] ; // Eğer değer varsa $kenar1, yoksa 0.
        $kenar2 = $_POST["kenar2"] ;

        $toplam = $kenar1 + $kenar2;
        $cikar = $kenar1 - $kenar2;

        if ($toplam === 180) {
            echo "Üçgenin iç açıları toplamı 180 olduğu için sayı 180 olmalı";
        } else {
            $maxKenar = $toplam - 1; // max değer
            $minKenar = $cikar + 1; // min değer

            echo "Üçgenin 3. kenarı maximum: $maxKenar ve minimum: $minKenar olabilir.";
        }
    }
    ?>

    <form action="#" method="post">
        1. kenar: <input type="text" name="kenar1">
        2. kenar: <input type="text" name="kenar2">
        <input type="submit" value="Hesapla">
    </form>
</body>
</html>
