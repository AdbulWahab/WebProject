<?php
/*
include "connection.php";

    $sId = $_POST['deleteDriver'];

    $query = "DELETE FROM `driver` WHERE dId='$sId'";


    $query_run = mysqli_query($con, $query);
    mysqli_query($con, $query);
    
    header("location:../deleteDriver.php");

*/
/*
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "finalproject";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $deleteDriver = $_POST['deleteDriver'];

    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // prepare sql and bind parameters
    $stmt = $conn->prepare("DELETE FROM `driver` 
                            WHERE dId=:deleteDriver");

    $stmt->bindParam(':deleteDriver', $deleteDriver);
    $stmt->execute();

    header("location:../deleteDriver.php");
    echo "New records created successfully";
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}

$conn = null;
*/
class driver
{
    // Properties
    private $driverId;

    // Setter
    function setdid($driverId)
    {
        $this->driverId = $driverId;
    }

    // Getter
    function getdid()
    {
        return $this->driverId;
    }

    function deleteriverquery()
    {

        $driverId = $this->driverId;

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
            $stmt = $conn->prepare("DELETE FROM `driver` 
                                    WHERE dId=:driverId");
        
            $stmt->bindParam(':driverId', $driverId);
            $stmt->execute();
        
            header("location:../deleteDriver.php");
            echo "New records created successfully";
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
        
        $conn = null;
    }
}

$driverId = $_POST['deleteDriver'];

$obj = new driver();


$obj->setdid($driverId);

$obj->deleteriverquery();
?>