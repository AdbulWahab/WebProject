<?php
/*
include "connection.php";

    $fId = $_POST['deleteFare'];

    $query = "DELETE FROM `fare` WHERE fid='$fId'";


    $query_run = mysqli_query($con, $query);
    mysqli_query($con, $query);
    
    header("location:../deleteFare.php");
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

    $fId = $_POST['deleteFare'];

    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // prepare sql and bind parameters
    $stmt = $conn->prepare("DELETE FROM `fare` 
                            WHERE fid=:fId");

    $stmt->bindParam(':fId', $fId);
    $stmt->execute();

    header("location:../deleteFare.php");
    echo "New records created successfully";
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}

$conn = null;
*/


class fare
{
    // Properties
    public $fid;



    // seter
    function setfid($fid)
    {
        $this->fid = $fid;
    }

    // getter
    function getfid()
    {
        return $this->fid;
    }
    
    function deleteFareQuery()
    {
        $fId = $this->fid;

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
            $stmt = $conn->prepare("DELETE FROM `fare` 
                            WHERE fid=:fId");

            $stmt->bindParam(':fId', $fId);
            $stmt->execute();

            header("location:../deleteFare.php");
            echo "New records created successfully";
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }

        $conn = null;
    }
}


$addfare = new fare();


$addfare->setfid($_POST['deleteFare']);




$addfare->deleteFareQuery();



?>
