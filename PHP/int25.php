<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Başlıksız Belge</title>
</head>

<body>
<?php
if ($_GET) {
    $metin = $_GET["metin"];
    $ara = $_GET["ara"]; 
    $say = 0;
    
    for ($i = 0; $i < strlen($metin); $i++) {
        if ($ara == $metin[$i]) {
            $say++;
        }
    }
    echo "Metin içinde $ara karakteri $say kez bulunuyor.";
}
?>
<form action="#" method="GET">
    Metin Giriniz:
    <input type="text" name="metin"><br>
    Karakteri Giriniz:
    <input type="text" name="ara"><br> 
    <input type="submit" value="GÖNDER">
</form>

</body>
</html>