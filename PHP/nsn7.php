<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Başlıksız Belge</title>
</head>

<body>
	<?php 
function tetikle($a,$b){
	if($a>$b)
	return $a;
	else
	return $b;
	}
$buyuk=tetikle(5,8);
echo $buyuk-1;
?>
</body>
</html>