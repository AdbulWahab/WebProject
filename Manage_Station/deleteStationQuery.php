<?php
/*
include "connection.php";

    $sId = $_POST['deleteStation'];

    $query = "DELETE FROM `station` WHERE sId='$sId'";


    $query_run = mysqli_query($con, $query);
    mysqli_query($con, $query);
    
    header("location:../deleteStation.php");
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

    $sId = $_POST['deleteStation'];

    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // prepare sql and bind parameters
    $stmt = $conn->prepare("DELETE FROM `station` 
                            WHERE sId=:sId");

    $stmt->bindParam(':sId', $sId);
    $stmt->execute();

    header("location:../deleteStation.php");
    echo "New records created successfully";
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}

$conn = null;
*/
class station
{
    // Properties

    private $sid;



    // setter
    function setsid($sid)
    {
        $this->sid = $sid;
    }

    //getter

    function getsid()
    {
        return $this->sid;
    }


    function deletestationquery()
    {
        $sId = $this->sid;

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
            $stmt = $conn->prepare("DELETE FROM `station` 
                            WHERE sId=:sId");

            $stmt->bindParam(':sId', $sId);
            $stmt->execute();

            header("location:../deleteStation.php");
            echo "New records created successfully";
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }

        $conn = null;
    }
}

$sId = $_POST['deleteStation'];

$obj = new station();


$obj->setsid($sId);



$obj->deletestationquery();
?>