<?php
    echo '<table border="1" style="border-collapse: collapse;">
          <tr>
            <th>Field</th>
            <th>Value</th>
          </tr>';

    foreach ($_POST as $entry => $value){
        echo '<tr><td>' . $entry . '</td><td>' . $value . '</td></tr>';
    }
        echo '</table>';
?>