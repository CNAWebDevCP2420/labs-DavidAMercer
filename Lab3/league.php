<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
<head>
<title></title>
</head>
<body>
<?php
  if (empty($_POST['fName']) || empty($_POST['lName']) || empty($_POST['age']) || empty($_POST['average'])) {
      echo "<p>All fields are required.</p>\n";
  }
  else {
      $FirstName = addslashes($_POST['fName']);
      $LastName = addslashes($_POST['lName']);
      $Age = addslashes($_POST['age']);
      $Average = addslashes($_POST['average']);
      
      $NewBowler = "$LastName, $FirstName, $Age years old, bowling average: $Average\n";
      $leagueFile = "league.txt";

      if (file_put_contents($leagueFile, $NewBowler, FILE_APPEND) > 0) {
        echo "<p>" . stripslashes($FirstName) . stripslashes($LastName) . " has been added to the league.</p>\n";
      }
      else {
          echo "<p>Registration error!</p>";
      }
      
  }
?>
</body>
</html>