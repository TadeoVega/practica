<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="master.css">
</head>
<body>
	<?php 
		$numero1 = $_POST["uno"];
		$numero2 = $_POST["dos"];
		$suma = $numero1 + $numero2;
		echo "el total es: 	".$suma."";

?>
<button>Regresar</button>
</body>
</html>
