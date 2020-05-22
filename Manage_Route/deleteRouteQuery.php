<?php
/*
include "connection.php";

    $sId = $_POST['deleteRoute'];

    $query = "DELETE FROM `route` WHERE rId='$sId'";


    $query_run = mysqli_query($con, $query);
    mysqli_query($con, $query);
    
    header("location:../deleteRoute.php");
    */

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "finalproject";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $rId = $_POST['deleteRoute'];

    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // prepare sql and bind parameters
    $stmt = $conn->prepare("DELETE FROM `route` 
                            WHERE rId=:rId");

    $stmt->bindParam(':rId', $rId);
    $stmt->execute();

    header("location:../deleteRoute.php");
    echo "New records created successfully";
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}

$conn = null;

class route
{
    // Properties

    private $rId;

    // setter
    function setrid($rId)
    {
        $this->rId = $rId;
    }

   //getter
    function getrid()
    {
        return $this->rId;
    }
  
    function deleteroutequery()
    {

    $rId = $this->rId ;
        

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
    
        // prepare sql and bind parameters
        $stmt = $conn->prepare("DELETE FROM `route` 
                                WHERE rId=:rId");
    
        $stmt->bindParam(':rId', $rId);
        $stmt->execute();
    
        header("location:../deleteRoute.php");
        echo "New records created successfully";
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
    
    $conn = null;
    }
}

$rId = $_POST['deleteRoute'];

$obj = new route();


$obj->setrid($rId);



$obj->deleteroutequery();
?>
