<?php
/*
include "connection.php";

    $id = $_POST['updateId'];
    $username = $_POST['updateUsername'];
    $email = $_POST['updateemail'];
    $password = $_POST['updatepassword'];


    $Query = "UPDATE `registration`
    SET username = '$username', email= '$email' , password= '$password'
    WHERE id = '$id';";
    $query_run = mysqli_query($con, $Query);
    
    if($query_run)
    {
        $_SESSION['success'] = "You data is updated";
        header("location:register.php");

    }
    else
    {
        $_SESSION['status'] = "You data is not updated";
        header("location:register.php");  
    }
*/

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "finalproject";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $id = $_POST['updateId'];
    $username = $_POST['updateUsername'];
    $email = $_POST['updateemail'];
    $password = $_POST['updatepassword'];

    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // prepare sql and bind parameters
    $stmt = $conn->prepare("UPDATE `registration` 
                                    SET username = :username , email = :email , password = :password
                                    WHERE id = :id;");


    $stmt->bindParam(':id', $id);
    $stmt->bindParam(':username', $username);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':password', $password);
    $stmt->execute();
    
   header("location:../register.php");
    echo "Records successfully updated";
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}

$conn = null;
