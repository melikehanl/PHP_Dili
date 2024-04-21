<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Başlıksız Belge</title>
</head>

<body>
	
	<?php
	//ÖDEV --
class Ucgen {
    public $aci1,$aci2,$aci3;
    

    function __construct($aci1, $aci2, $aci3) {
        $this->aci1 = $aci1;
        $this->aci2 = $aci2;
        $this->aci3 = $aci3;
    }

    function ucgenTuruBul() {
        $toplamAci = $this->aci1 + $this->aci2 + $this->aci3;

        if ($toplamAci != 180) {
            return "Geçersiz üçgen: Açılar toplamı 180 olmalıdır.";
        } elseif ($this->aci1 == $this->aci2 && $this->aci2 == $this->aci3) {
            return "Eşkenar üçgen";
        } elseif ($this->aci1 == 90 || $this->aci2 == 90 || $this->aci3 == 90) {
            return "Dik üçgen";
        } elseif ($this->aci1 == $this->aci2 || $this->aci1 == $this->aci3 || $this->aci2 == $this->aci3) {
            return "İkizkenar üçgen";
        } else {
            return "Çeşitkenar üçgen";
        }
    }
}


$ucgen = new Ucgen(90,50, 50);
echo "Üçgen Türü: " . $ucgen->ucgenTuruBul();
?>

</body>
</html>