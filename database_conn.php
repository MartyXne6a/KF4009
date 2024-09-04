<?php
   $dbConn = new mysqli('localhost', 'unn_w19020174', 'PnaMtn94', 'unn_w19020174');
   if ($dbConn->connect_error) {
      echo "<p>Connection failed: ".$dbConn->connect_error."</p>\n";
      exit;
   }
?>
