<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>PHP</title>
</head>
<body>
	<?php
$rok = array(41, 22, 46, 7, 0, -2, -3, 41, 0, 0, -17, -1);
$adv = 0;
for ($i=0; $i<=count($rok); $i++) { 
	if ($rok[$i]>=0) {
		$adv = $adv + $rok[$i];
	}
}

echo "$adv";




	?>




</body>
</html>