<?php
/*
include "connection.php";

if(isset($_POST['delete_btn']))
{
    $id = $_POST['delete_id'];

    $query = "DELETE FROM `registration` WHERE id='$id'";


    $query_run = mysqli_query($con, $query);

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

    $id = $_POST['delete_id'];

    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // prepare sql and bind parameters
    $stmt = $conn->prepare("DELETE FROM `registration` 
                                WHERE id=:id");

    $stmt->bindParam(':id', $id);
    $stmt->execute();

    header("location:../register.php");
    echo "New records created successfully";
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}

$conn = null;
