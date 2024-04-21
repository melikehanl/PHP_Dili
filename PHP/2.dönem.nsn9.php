<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Başlıksız Belge</title>
</head>

<body>
	<?php 
	class Hesapla{
		public $aci1,$aci2,$aci3;
		
		function __construct($a1,$a2,$a3){
			$this->aci1=$a1;
			$this->aci2=$a2;
			$this->aci3=$a3;
			return 0;
			
		}
		function __destruct(){
			if($this->aci1+$this->aci2+$this->aci3==180){
				
			if($this->aci1==$this->aci2 && $this->aci2==$this->aci3)
				echo "Eşkenar Üçgen";
			elseif($this->aci1==$this->aci2 || $this->aci2==$this->aci3 || $this->aci1==$this->aci3)
				echo"İkizKenar Üçgen";
			else
				echo "Çok kenar Üçgen";
		}
		else
			echo "Açılar 180 Derece Değil...";
	}
		}
	$vekil=new Hesapla(60,60,60);
	
	
	?>
	
</body>
</html>