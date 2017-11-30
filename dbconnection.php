
<?php

function OpenCon()
 {
 $dbhost = "198.91.81.5";
 $dbuser = "quentin3_quser";
 $dbpass = "quser1";
 $db = "quentin3_databaselab";


 $conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);


 return $conn;
 }

function CloseCon($conn)
 {
 $conn -> close();
 }
   
?>
