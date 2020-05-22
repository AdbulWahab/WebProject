<?php
/*
include "connection.php";

$rId = $_POST['roteId'];
$to = $_POST['to'];
$from = $_POST['from'];
$dTime = $_POST['dtime'];
$aTime = $_POST['atime'];
$trainName = $_POST['trainName'];

$query = "INSERT INTO `route` VALUES ('$rId', '$to', '$from', '$dTime', '$aTime', '$trainName')";
mysqli_query($con, $query);
header("location:../addRoute.php");
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


    $rId = $_POST['roteId'];
    $to = $_POST['to'];
    $from = $_POST['from'];
    $dTime = $_POST['dtime'];
    $aTime = $_POST['atime'];
    $trainName = $_POST['trainName'];
    $driverName = $_POST['driverName'];




    // prepare sql and bind parameters
    $stmt = $conn->prepare("INSERT INTO `route` 
                            VALUES (:rId, :to, :from, :dTime, :aTime, :trainName, :driverName)");
    $stmt->bindParam(':rId', $rId);
    $stmt->bindParam(':to', $to);
    $stmt->bindParam(':from', $from);
    $stmt->bindParam(':dTime', $dTime);
    $stmt->bindParam(':aTime', $aTime);
    $stmt->bindParam(':trainName', $trainName);
    $stmt->bindParam(':driverName', $driverName);

    // insert a row

    $stmt->execute();
    header("location:../addRoute.php");
    echo "New records created successfully";
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
$conn = null;

*/

class route
{
    // Properties

    private $rId;
    private $to;
    private $from;
    private $dTime;
    private $aTime;
    private $trainid;
    private $driverid;



    // Methods
    function setrid($rId)
    {
        $this->rId = $rId;
    }
    function setto($to)
    {
        $this->to = $to;
    }
    function setfrom($from)
    {
        $this->from = $from;
    }
    function setdtime($dTime)
    {
        $this->dTime = $dTime;
    }
    function setatime($aTime)
    {
        $this->aTime = $aTime;
    }
    function settid($trainid)
    {
        $this->trainid = $trainid;
    }
    function setdid($driverid)
    {
        $this->driverid = $driverid;
    }




    function getrid()
    {
        return $this->rId;
    }
    function getto()
    {
        return $this->to;
    }
    function getfrom()
    {
        return $this->from;
    }
    function getdtime()
    {
        return $this->dTime;
    }
    function getatime()
    {
        return $this->aTime;
    }
    function gettid()
    {
        return $this->trainid;
    }
    function getdid()
    {
        return $this->driverid;
    }

    function addroutequery()
    {

    $rId = $this->rId ;
    $to= $this->to;
    $from= $this->from;
    $dTime= $this->dTime;
    $aTime= $this->aTime;
    $trainid= $this->trainid;
    $driverid= $this->driverid;
        

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
            $stmt = $conn->prepare("INSERT INTO `route` 
                            VALUES (:rId, :to, :from, :dTime, :aTime, :trainid, :driverid)");
            $stmt->bindParam(':rId', $rId);
            $stmt->bindParam(':to', $to);
            $stmt->bindParam(':from', $from);
            $stmt->bindParam(':dTime', $dTime);
            $stmt->bindParam(':aTime', $aTime);
            $stmt->bindParam(':trainid', $trainid);
            $stmt->bindParam(':driverid', $driverid);

            // insert a row

            $stmt->execute();
            header("location:../addRoute.php");
            echo "New records created successfully";
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
        $conn = null;
    }
}

$rId = $_POST['roteId'];
$to = $_POST['to'];
$from = $_POST['from'];
$dTime = $_POST['dtime'];
$aTime = $_POST['atime'];
$trainid = $_POST['trainName'];
$driverid = $_POST['driverName'];

$obj = new route();


$obj->setrid($rId);
$obj->setto($to);
$obj->setfrom($from);
$obj->setdtime($dTime);
$obj->setatime($trainid);
$obj->settid($driverid);
$obj->setdid($driverid);



$obj->addroutequery();
?>
