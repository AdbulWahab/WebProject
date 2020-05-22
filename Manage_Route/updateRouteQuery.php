<?php
/*
include "connection.php";

$rId = $_POST['roteId'];
$to = $_POST['to'];
$from = $_POST['from'];
$dTime = $_POST['dtime'];
$aTime = $_POST['atime'];
$trainName = $_POST['trainName'];

    $Query = "UPDATE `route`
    SET rTo = '$to' , rFrom = '$from' , dTime = '$dTime' , aTime = '$aTime', trainName = '$trainName' 
    WHERE rId = '$rId';";
    $query_run = mysqli_query($con, $Query);
        header("location:../updateRoute.php");

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

    $rId = $_POST['roteId'];
    $to = $_POST['to'];
    $from = $_POST['from'];
    $dTime = $_POST['dtime'];
    $aTime = $_POST['atime'];
    $trainName = $_POST['trainName'];
    $driverName = $_POST['driverName'];

    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // prepare sql and bind parameters
    $stmt = $conn->prepare("UPDATE `route` 
                                            SET rTo = :to , rFrom = :from , dTime = :dTime , aTime = :aTime, trainId = :trainName, dId = :driverName 
                                            WHERE rId = :rId;");


    $stmt->bindParam(':rId', $rId);
    $stmt->bindParam(':to', $to);
    $stmt->bindParam(':from', $from);
    $stmt->bindParam(':dTime', $dTime);
    $stmt->bindParam(':aTime', $aTime);
    $stmt->bindParam(':trainName', $trainName);
    $stmt->bindParam(':driverName', $driverName);

    $stmt->execute();
    //$stmt->bindParam(':delete_id', $delete_id);

    header("location:../updateRoute.php");
    echo "Records successfully updated";
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



    // setter
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


    //getter

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

    function updateroutequery()
    {

        $rId = $this->rId;
        $to = $this->to;
        $from = $this->from;
        $dTime = $this->dTime;
        $aTime = $this->aTime;
        $trainid = $this->trainid;
        $driverid = $this->driverid;


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
            $stmt = $conn->prepare("UPDATE `route` 
                                                SET rTo = :to , rFrom = :from , dTime = :dTime , aTime = :aTime, trainId = :trainid, dId = :driverid 
                                                WHERE rId = :rId;");


            $stmt->bindParam(':rId', $rId);
            $stmt->bindParam(':to', $to);
            $stmt->bindParam(':from', $from);
            $stmt->bindParam(':dTime', $dTime);
            $stmt->bindParam(':aTime', $aTime);
            $stmt->bindParam(':trainid', $trainid);
            $stmt->bindParam(':driverid', $driverid);

            $stmt->execute();
            //$stmt->bindParam(':delete_id', $delete_id);

            header("location:../updateRoute.php");
            echo "Records successfully updated";
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }
}

$rId = $_POST['roteId'];
$to = $_POST['to'];
$from = $_POST['from'];
$dTime = $_POST['dtime'];
$aTime = $_POST['atime'];
$trainid = $_POST['trainid'];
$driverid = $_POST['driverid'];

$obj = new route();


$obj->setrid($rId);
$obj->setto($to);
$obj->setfrom($from);
$obj->setdtime($dTime);
$obj->setatime($aTime);
$obj->settid($trainid);
$obj->setdid($driverid);



$obj->updateroutequery();

?>
