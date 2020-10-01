<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0
Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xtml1-strict.dtd">
<html xmlns="http://w3.org/1999/xhtml">
  <head>
    <title>Standard Palindrome Checker</title>
	<meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
  </head>
<body>
  <h1>Standard Palindrome Checker</h1><hr />
  <?php
    $stringOne = "avid diva";
    $stringTwo = "a santa at nasa";

    checkForStandardPalindrome($stringOne);
    checkForStandardPalindrome($stringTwo);

    function checkForStandardPalindrome($testString) {
        if (!empty($testString)){
            $simpleString = $testString;
            $simpleString = str_replace(" ", "", $simpleString);
            $simpleString = str_replace(",", "", $simpleString);
            $simpleString = str_replace(".", "", $simpleString);
            $simpleString = str_replace("'", "", $simpleString);
            $simpleString = str_replace("!", "", $simpleString);
            $simpleString = strtolower($simpleString);

            if ($simpleString == strrev($simpleString)) {
                echo "<p>'" . $testString . "' is a palindrome!</p>";
            }
            else{
                echo "<p>'" . $testString . "' is not a palindrome.</p>";
            }
        }
        else{
            echo "<p>The string is empty.</p>";
        }
    }
  ?>
</body>
</html>