<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Başlıksız Belge</title>
</head>

<body>
	<?php
function faktoriyel($n) {
    if ($n == 0 || $n == 1) {
        return 1;
    } else {
        return $n * faktoriyel($n - 1);
    }
}

// Örnek kullanım
$sayi = 5; // Faktöriyeli hesaplanacak sayı
$sonuc = faktoriyel($sayi);

echo "Faktöriyel($sayi) = $sonuc";
?>

</body>
</html>