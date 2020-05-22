<?php

// The folloing function that a user is present in database or not retuen true if presen else false

function user_exits($username, $conn)
{
  $username=sanitize($username,$conn);
  $result = $conn->query("SELECT * FROM `user` WHERE `username` = '$username'");
  if(empty($result))
  {
    die("Error in user exit");
  }
  return ($result->num_rows > 0 ) ? true : false ;
}

// the function return the user id from database 

function user_id_from_username($username,$conn)
{
  $username=sanitize($username,$conn);
  $result=$conn->query("SELECT `id` FROM `user` WHERE `username` = '$username' ");

  if(empty($result))
  {
    die("Error user_id_from_username");
  }

  $row=$result->fetch_assoc();

  return $row['id'];
}

// this function check wather the username and passoward is correct

function sanitize($data,$conn)
{
  return htmlentities($conn->real_escape_string($data));
}

function login($username, $password)
{
  global $con;
  $user_id=user_id_from_username($username,$con);

  $username=sanitize($username,$con);
  $password=md5($password);

  $result=$con->query("SELECT COUNT(`id`) AS count FROM `user` WHERE `username`='$username' AND `password` = '$password' ");
  
  if(empty($result))
  {
    die("Error user_id_from_username");
  }

  $row=$result->fetch_assoc();
  
  return ($row['count'] > 0) ? $user_id : false ;
}

// this function check weather user is logged in or not 

function logged_in()
{
  return (isset($_SESSION['user_id'])) ? true :false ;
}
