<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Başlıksız Belge</title>
</head>

<body>
	<?php
	class EnBuyuk{
		public $sayi1,$sayi2,$sayi3;
		
		function __construct($s1,$s2,$s3){
			$this->sayi1=$s1;
			$this->sayi2=$s2;
			$this->sayi3=$s3;
			
			return  0;
			
		}
		function __destruct(){
			if($this->sayi1>$this->sayi2 && $this->sayi1>$this->sayi3){
				echo $this->sayi1;
				}
				
				elseif($this->sayi2>$this->sayi1 && $this->sayi2>$this->sayi3){
					echo $this->sayi2;
					}
				else
				{
					echo $this->sayi3;
					}
				
			
		}
	}
	$nesne= new Enbuyuk(30,20,10);
	?>
</body>
</html>