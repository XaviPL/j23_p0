<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
	<title>Tablas de multiplicar</title> 
</head>
<body>
	Escoje un numero para ver su tabla de multiplicar:
<?php
	for($cont=1;$cont<=10;$cont++){
		echo "<a href='151006_exemple1_2.php?parametro=$cont'>$cont</a><br/>";
	}
?>
</body>
</html>