<?php
session_start();

//error_reporting(0);
$errors=array();
require 'database/connect.php';
require 'general.php';
require 'users.php';

$current_file=explode('/',$_SERVER['SCRIPT_NAME']);
$current_file=end($current_file);


// if(logged_in() === true)
// {
//     $session_user_id=$_SESSION['id'];
//     $user_data=user_data($session_user_id , 'id', 'username','email','password');
// }
 ?>
