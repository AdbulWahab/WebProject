<?php
/*
include "connection.php";

    $id = $_POST['trainId'];
    $name = $_POST['trainName'];

    $Query = "UPDATE `train`
    SET trainName = '$name'
    WHERE trainId = '$id';";
    $query_run = mysqli_query($con, $Query);
        header("location:updateTrain.php");
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

    $trainId = $_POST['trainId'];
    $trainName = $_POST['trainName'];

    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // prepare sql and bind parameters
    $stmt = $conn->prepare("UPDATE train 
                                    SET trainName = :trainName
                                    WHERE trainId = :trainId;");


    $stmt->bindParam(':trainId', $trainId);
    $stmt->bindParam(':trainName', $trainName);
    $stmt->execute();
    //$stmt->bindParam(':delete_id', $delete_id);

    header("location:../updateTrain.php");
    echo "New records created successfully";
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}

$conn = null;
*/

class train
{
    // Properties

    private $trainId;
    private $trainName;




    // Methods
    function settid($trainId)
    {
        $this->trainId = $trainId;
    }
    function settname($trainName)
    {
        $this->trainName = $trainName;
    }




    function gettid()
    {
        return $this->trainId;
    }
    function gettname()
    {
        return $this->trainName;
    }

    function updatetrainquery()
    {

        $trainId = $this->trainId;
        $trainName = $this->trainName;



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
            $stmt = $conn->prepare("UPDATE train 
                                        SET trainName = :trainName
                                            WHERE trainId = :trainId;");


            $stmt->bindParam(':trainId', $trainId);
            $stmt->bindParam(':trainName', $trainName);
            $stmt->execute();
            //$stmt->bindParam(':delete_id', $delete_id);

            header("location:../updateTrain.php");
            echo "New records created successfully";
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }

        $conn = null;
    }
}



$trainId = $_POST['trainId'];
$trainName = $_POST['trainName'];

$obj = new train();


$obj->settid($trainId);
$obj->settname($trainName);



$obj->updatetrainquery();

?>