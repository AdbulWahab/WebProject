<?php
/*
include "connection.php";

$tId = $_POST['trainId'];
$tName = $_POST['trainName'];

$query = "INSERT INTO `train` VALUES ('$tId', '$tName')";
mysqli_query($con, $query);
header("location:../addTrain.php");
*/
// GET DATA FORM REQUEST
//$data = json_decode(file_get_contents("php://addTrain"));

//CREATE MESSAGE ARRAY AND SET EMPTY


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
    $stmt = $conn->prepare("INSERT INTO `train` 
                            VALUES (:trainId, :trainName)");
    $stmt->bindParam(':trainId', $trainId);
    $stmt->bindParam(':trainName', $trainName);

    // insert a row
    
    $stmt->execute();
    header("location:../addTrain.php");
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

    function addtrainquery()
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
            $stmt = $conn->prepare("INSERT INTO `train` 
                                VALUES (:trainId, :trainName)");
            $stmt->bindParam(':trainId', $trainId);
            $stmt->bindParam(':trainName', $trainName);

            // insert a row

            $stmt->execute();
            header("location:../addTrain.php");
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



$obj->addtrainquery();

?>
