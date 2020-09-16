<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0
Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title>Days Array</title>
	</head>
	<body>
		<?php
		$Days = array("Sunday",
				"Monday",
				"Tuesday",
				"Wednesday",
				"Thursday",
				"Friday",
				"Saturday");

		echo "The days of the week in English are: <br />";
		echo "$Days[0]<br />";
		echo "$Days[1]<br />";
		echo "$Days[2]<br />";
		echo "$Days[3]<br />";
		echo "$Days[4]<br />";
		echo "$Days[5]<br />";
		echo "$Days[6]<br />";

		$Days[0] = "Dimanche";
		$Days[1] = "Lundi";
		$Days[2] = "Mardi";
		$Days[3] = "Mercredi";
		$Days[4] = "Jeudi";
		$Days[5] = "Vendredi";
		$Days[6] = "Samedi";

		echo "<br />";

		echo "The days of the week in French are: <br />";
		echo "$Days[0]<br />";
		echo "$Days[1]<br />";
		echo "$Days[2]<br />";
		echo "$Days[3]<br />";
		echo "$Days[4]<br />";
		echo "$Days[5]<br />";
		echo "$Days[6]<br />";
		?>
	</body>
</html> 
