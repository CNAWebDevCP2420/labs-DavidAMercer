<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
<head>
<title>Bug Report</title>
</head>
<body>
<h1>Bug Report</h1>
<?php
 
      $Bug = addslashes($_POST['bug']);
      $ProductName = addslashes($_POST['pName']);
      $Version = addslashes($_POST['version']);
      $Hardware = addslashes($_POST['hardware']);
      $OperatingSystem = addslashes($_POST['OS']);
      $Frequency = addslashes($_POST['frequency']);
      $Solution = addslashes($_POST['solution']);
      
      $NewBug = "Bug: $Bug in: $ProductName, Version: $Version, on: $Hardware, running: $OperatingSystem. Problem occurs: $Frequency. Possible solution: $Solution.\n";
      $bugFile = "bug.txt";

      if (file_put_contents($bugFile, $NewBug, FILE_APPEND) > 0) {
        echo "<p>Your bug has been added to the report.</p>\n";
      }
      else {
          echo "<p>Report error!</p>";
      }
      $bugReportFile = file_get_contents('bug.txt');
      echo "<pre>$bugReportFile</pre>";
      
  
?>
</body>
</html>