<?php
/*
include "connection.php";

$sId = $_POST['StationID'];
$sName = $_POST['StationName'];
$sCity = $_POST['StationCity'];

$query = "INSERT INTO `station` VALUES ('$sId', '$sName', '$sCity')";
mysqli_query($con, $query);
header("location:../addStation.php");
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

    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


    $sId = $_POST['StationID'];
    $sName = $_POST['StationName'];
    $sCity = $_POST['StationCity'];



    // prepare sql and bind parameters
    $stmt = $conn->prepare("INSERT INTO `station` 
                            VALUES (:sId, :sName, :sCity)");
    $stmt->bindParam(':sId', $sId);
    $stmt->bindParam(':sName', $sName);
    $stmt->bindParam(':sCity', $sCity);

    // insert a row

    $stmt->execute();
    header("location:../addStation.php");
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
    private $sname;
    private $scity;



    // Methods
    function setsid($sid)
    {
        $this->sid = $sid;
    }
    function setsname($sname)
    {
        $this->sname = $sname;
    }
    function setscity($scity)
    {
        $this->scity = $scity;
    }



    function getsid()
    {
        return $this->sid;
    }
    function getsname()
    {
        return $this->sname;
    }
    function getscity()
    {
        return $this->scity;
    }
   

    function addstationquery()
    {

        $sid = $this->sid;
        $sname = $this->sname;
        $scity = $this->scity;


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
            $stmt = $conn->prepare("INSERT INTO `station` 
                                VALUES (:sid, :sname, :scity)");
            $stmt->bindParam(':sid', $sid);
            $stmt->bindParam(':sname', $sname);
            $stmt->bindParam(':scity', $scity);

            // insert a row

            $stmt->execute();
            header("location:../addStation.php");
            echo "New records created successfully";
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
        $conn = null;
    }
}

$sId = $_POST['StationID'];
$sName = $_POST['StationName'];
$sCity = $_POST['StationCity'];

$obj = new station();


$obj->setsid($sId);
$obj->setsname($sName);
$obj->setscity($sCity);



$obj->addstationquery();

?>
