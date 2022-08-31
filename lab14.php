<!DOCTYPE html>
<html>
<head>
	<title>laboratorio 1.4</title>
</head>
<body>
	<?php
	echo "<table border=1";
	$n=1;
	for ($n1=1; $n1 <= 10; $n1++) { 
		echo "<tr>";
		for ($i=1; $i <= 10; $i++) { 
			echo "<td>", $n, "</td>";
			$n=$n+1;
			# code...
		}
		echo "</tr>";
	}
	echo "</table>";
	?>
</body>
</html>