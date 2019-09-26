<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0
Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xtml1-strict.dtd">
<html xmlns="http://w3.org/1999/xhtml">
  <head>
    <title>Paycheck Calculator</title>
	<meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
  </head>
<body>
    <?php
    $numHours = $_POST['NumHours'];
    $pRate = $_POST['HourlyWage'];
    $pCheck = 0;
    $inputError = FALSE;

    if (!is_numeric($numHours) || !is_numeric($pRate)){
        echo "Input must be numeric";
        $inputError = True;
    }
    elseif ($numHours < 0 || $pRate < 0) {
        echo "Input must not be negative";
        $inputError = TRUE;
    }
    else {
        if ($numHours <= 40) {
            $pCheck = $numHours * $pRate;
        }
        else {
            $pCheck = $numHours * ($pRate * 1.5);
        }
    }

    if ($inputError == FALSE) {
        echo "Hours Worked: " . $numHours;
        echo "<br />Pay Rate: " . $pRate;
        echo "<br />--------------";
        echo "<br />Paycheck: " . $pCheck;
    }
    ?>
</body>
</html>