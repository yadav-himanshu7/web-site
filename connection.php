<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "academytable";

$conn = mysqli_connect($servername, $username, $password, $dbname);
if ($conn) 
{
    //echo "connection done";
}
else
{
    echo "connection failed".mysqli_connect_error();
}    
?>