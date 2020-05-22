<?php
include "connection.php";

$id = $_POST['id'];
$fname = $_POST['firstname'];
$lname = $_POST['lastname'];
$username = $_POST['username'];
$password1 = $_POST['password'];
$password = md5($password1);

echo $fname;


$query = "INSERT INTO `user` 
                VALUES ('$fname', '$lname', '$password', '$username' ,'$id');";
mysqli_query($con, $query);

header("location:../userlogin.php");
echo "no records created successfully";


