<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0
Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xtml1-strict.dtd">
<html xmlns="http://w3.org/1999/xhtml">
  <head>
    <title></title>
	<meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
  </head>
<body>
<form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
        Name: <br /><input type="text" name="name" /><br />
        Student#: <br /><input type="text" name="stuNum" /><br />
        Program: <br /><input type="text" name="program" /><br /><br />
        
        <input type="reset" value="Clear From" />&nbsp;
        &nbsp;<input type="submit" name="Submit" value="Send Form" />
    </form>

  <?php
    if (isset($_POST['Submit'])) {
        echo "Thank you!";
        include 'inc_requestDump.php';
    }
  ?>
</body>
</html>