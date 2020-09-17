<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0
Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title>Temp Conversion</title>
	</head>
	<body>
		<?php
		for ($i = 0; $i <= 100; $i++) {
			$x = round(($i - 32) * (5/9), 1);
			echo "<strong>$i</strong> degree(s) Fahrenheit is <strong>$x</strong> degree(s) Celsius<br />";
		}
		?>
	</body>
</html> 
