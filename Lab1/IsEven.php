<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0
Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title>Is Even</title>
	</head>
	<body>
		<?php
		$var = 7.2;

		if (is_numeric($var))
			if ((round($var)) % 2 == 0)
				echo "Variable is even!";
			else
				echo "Variable is odd!";
		else 
			echo "Variable is not a number";
		?>
	</body>
</html> 
