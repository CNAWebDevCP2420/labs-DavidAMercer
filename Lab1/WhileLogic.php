<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0
Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title>While Logic</title>
	</head>
	<body>
		<?php
		$Count = 0;

		while ($Count < 100) {
			$Numbers[$Count] = $Count + 1;
			++$Count;
		}

		foreach ($Numbers as $CurNum) {
			echo "<p>$CurNum</p>";
		}

		?>
	</body>
</html> 
