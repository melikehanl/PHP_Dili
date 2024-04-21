<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Başlıksız Belge</title>
</head>

<body>
	<?php 
$kelime="Bilgisayar";
$say=strlen($kelime);//10
for($i=0;$i<$say;$i++)
{
	echo $kelime[$i];
	echo"<br>";
}
	?>
</body>
</html>