
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Başlıksız Belge</title>
</head>

<body>
		<?php
	class Bolumbilgi{
		public $bolumid,$bolumadi,$bolumbaskan,$acilmatarih;
		      
		     function Atama(){
				 $this->bolumid="1";
				 $this->bolumadi="Bilgisayar Programcılığı";
				 $this->bolumbaskan="Hakan AKPINAR";
				 $this->acilmatarih="12.12.2020";
				 return 0;
				
			 }
		function Yazdir(){
			echo "Bölüm ID:".$this->bolumid."<br>Bölüm Adi:".$this->bolumadi."<br> Bölüm Başkan:".$this->bolumbaskan."<br>Açılma Tarih:".$this->acilmatarih;
			return 0;
		}
		
	                  
			
		
		
	}
	$nesne=new Bolumbilgi();
	$nesne->Atama();
	$nesne->Yazdir();
	?>
	

</body>
</html>