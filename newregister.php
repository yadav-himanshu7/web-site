<?php
// database connection code
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');

$con = mysqli_connect('localhost', 'root', '','academytable');

// get the post records
$fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $gender=$_POST['gender'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $sports=$_POST['sports'];

// database insert SQL code
$sql = "INSERT INTO sportsworldacademy VALUES ('0', '$fname', '$lname', '$gender', '$email','$phone','$sports')";

// insert in database 
$rs = mysqli_query($con, $sql);

if($rs)
{
    echo '<script>alert("Registeration Done, Thank You!")</script>';

}


?>