<?php 
include "dbconn.php";
$sql = "INSERT INTO `toufiks` (`Name`, `Roll`, `Email`) VALUES('MD. MOHAMMAD', 95364545, 'Mohammad@gmail.com')";
mysqli_query($conn, $sql);

?>