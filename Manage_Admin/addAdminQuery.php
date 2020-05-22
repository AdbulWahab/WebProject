<?php
/*
include "connection.php";

$id = $_POST['id'];
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];	


$sql = "INSERT INTO `registration` VALUES ('$id', '$username', '$email', '$password')";
mysqli_query($con,$sql);
echo '<script>alert("Data Inserted");</script>';
header("location:register.php");
*/


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "finalproject";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


    $id = $_POST['id'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password1 = $_POST['password'];
    $password = md5($password1);



    // prepare sql and bind parameters
    $stmt = $conn->prepare("INSERT INTO `registration` 
                            VALUES (:id, :username, :email, :password)");
    $stmt->bindParam(':id', $id);
    $stmt->bindParam(':username', $username);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':password', $password);

    // insert a row

    $stmt->execute();
    header("location:../register.php");
    echo "New records created successfully";
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
$conn = null;
?>
