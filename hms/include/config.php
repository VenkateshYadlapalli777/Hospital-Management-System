<?php
define('DB_SERVER','hospital.cqtvowi67emb.us-east-2.rds.amazonaws.com');
define('DB_USER','admin');
define('DB_PASS' ,'admin123');
define('DB_NAME', 'hms');
$con = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME);
// Check connection
if (mysqli_connect_errno())
{
 echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
?>