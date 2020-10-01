<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0
Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xtml1-strict.dtd">
<html xmlns="http://w3.org/1999/xhtml">
  <head>
    <title>Password Strength Checker</title>
	<meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
  </head>
<body>
  <h1>How Strong Is Your Password?</h1><hr />
  <?php
    $Passwords = array("password",
                       "PASSWORD",
                       "PASSword",
                       "12345",
                       "Password12345",
                       "R!h8Tz9",
                       "Php7>C#!");
    $i = 1;
    //I find regular expressions difficult, I kind of cheated by checking for length with strlen() rather than with a regular expression
    foreach ($Passwords as $Password){
        $upperCase = preg_match('@[A-Z]@', $Password);
        $lowerCase = preg_match('@[a-z]@', $Password);
        $number = preg_match('@[0-9]@', $Password);
        $special = preg_match('@[^A-Za-z0-9]@', $Password);

        echo "<p>Password # " . $i;
        if ($upperCase && $lowerCase && $number && $special && strlen($Password) > 7 && strlen($Password) < 17){
            echo " is a strong password!</p>";
        }
        else{
            echo " is a weak password.</p>";
        }
        $i++;
    }
  ?>
</body>
</html>