<?php
  $guestBookFile = file_get_contents("guestbook.txt");
  echo "<h2>Guest book entries: </h2>";
  echo "<pre>$guestBookFile</pre>";
?>