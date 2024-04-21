<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Başlıksız Belge</title>
</head>

<body>
	<?php 
$kelime="Melike";
$say=strlen($kelime);
for($i=$say-1;$i>=0;$i--)
{
	echo $kelime[$i];
	echo"<br>";
}
?>
</body>
</html>