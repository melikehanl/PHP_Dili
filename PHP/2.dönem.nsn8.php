<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Başlıksız Belge</title>
</head>

<body>
    <?php
    if($_GET){
        $katekle = strtoupper($_GET["katad"]);
        $conn = new mysqli("localhost", "root", "", "sahibinden_vt", 3306);
        if ($conn->error)
            echo "Hata";
        else {
            $sql = "INSERT INTO Tbl_kategori(Kat_ID,Kat_Adi,Kat_Tarih) VALUES (NULL,'$katekle',current_timestamp());";
            if ($conn->query($sql) === TRUE) {
                echo "Kategori başarıyla eklendi.";
            } else {
                echo "Hata: " . $sql . "<br>" . $conn->error;
            }
        }
    }
    
    
    ?>
    <form method="GET" action="#">
    Kategori Adı: <input type="text" name="katad">
    <input type="submit" value="kaydet">
    </form>
</body>

</html>