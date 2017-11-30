
<?php
include 'dbconnection.php';

$conn = OpenCon();

if ($conn == true){

echo "Connected Successfully";

}
CloseCon($conn);

?>
