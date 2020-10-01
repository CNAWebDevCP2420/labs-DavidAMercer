<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0
Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xtml1-strict.dtd">
<html xmlns="http://w3.org/1999/xhtml">
  <head>
    <title>Two Trains</title>
	<meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
  </head>
<body>
    <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
        Train A Speed: <br /><input type="text" name="SpeedA" /><br />
        Train B Speed: <br /><input type="text" name="SpeedB" /><br />
        Distance: <br /><input type="text" name="Distance" /><br /><br />
        
        <input type="reset" value="Clear From" />&nbsp;
        &nbsp;<input type="submit" name="Submit" value="Send Form" />
    </form>

    <?php
    
    if (isset($_POST['Submit'])) {
        $SpeedA = $_POST['SpeedA'];
        $SpeedB = $_POST['SpeedB'];
        $Distance = $_POST['Distance'];
        $inputError = FALSE;

        if (!is_numeric($SpeedA) || !is_numeric($SpeedB) || !is_numeric($Distance)) {
            echo "Values must be numeric";
            $inputError = TRUE;
        }
        elseif ($SpeedA < 0 || $SpeedB < 0 || $Distance <= 0){
            echo "Values cannot be negative";
            $inputError = True;
        }

        $DistanceA = (($SpeedA / $SpeedB) * $Distance) / (1 + ($SpeedA / $SpeedB));
        $DistanceB = $Distance - $DistanceA;
        $TimeA = $DistanceA / $SpeedA;
        $TimeB = $DistanceB / $SpeedB;

        $TimeB = $TimeB * 60;

        echo "Train A travels " . number_format($DistanceA, 2) . " kms at " . $SpeedA . " kms/per hour.<br />";
        echo "Train B travels " . number_format($DistanceB, 2) . " kms at " . $SpeedB . " kms/per hour.<br />";
        echo "They will crash in " . number_format($TimeA, 2) . " hours, or " . number_format($TimeB, 2) . " minutes.";
    }
    ?>
  
  
</body>
</html>