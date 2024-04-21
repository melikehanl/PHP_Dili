<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Başlıksız Belge</title>
</head>

<body>
	<?php 
$kelime="TOKAT";
$say=strlen($kelime);
for($i=0;$i<$say;$i++)
{
	if($i%2==0){
		echo $kelime[$i];
		echo"<br>";
	}
}
?>
	
</body>
</html>