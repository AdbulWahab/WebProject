<?php
/*
include "connection.php";

$dId = $_POST['driverId'];
$dFirstName = $_POST['driverFirstName'];
$dLastName = $_POST['driverLastName'];
$dAddress = $_POST['driverAddress'];
$dContact = $_POST['driverContact'];
$dExp = $_POST['driverExprience'];

    $Query = "UPDATE `driver`
    SET dFirstName = '$dFirstName', dLastName = '$dLastName' , dAddress = '$dAddress' , dContact = '$dContact' , dExp = '$dExp'
    WHERE dId = '$dId';";
    $query_run = mysqli_query($con, $Query);
        header("location:../updateDriver.php");
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

    $dId = $_POST['driverId'];
    $dFirstName = $_POST['driverFirstName'];
    $dLastName = $_POST['driverLastName'];
    $dAddress = $_POST['driverAddress'];
    $dContact = $_POST['driverContact'];
    $dExp = $_POST['driverExprience'];

    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // prepare sql and bind parameters
    $stmt = $conn->prepare("UPDATE driver 
                                    SET dFirstName = :dFirstName, dLastName = :dLastName , dAddress = :dAddress , dContact = :dContact , dExp = :dExp
                                    WHERE dId = :dId;");


    $stmt->bindParam(':dId', $dId);
    $stmt->bindParam(':dFirstName', $dFirstName);
    $stmt->bindParam(':dLastName', $dLastName);
    $stmt->bindParam(':dAddress', $dAddress);
    $stmt->bindParam(':dContact', $dContact);
    $stmt->bindParam(':dExp', $dExp);

    $stmt->execute();
    //$stmt->bindParam(':delete_id', $delete_id);

    header("location:../updateDriver.php");
    echo "Records successfully updated";
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}

$conn = null;
*/


class driver
{
    // Properties
    private $driverId;
    private  $driverFirstName;
    private  $driverLastName;
    private  $driverAddress;
    private  $driverContact;
    private  $driverExprience;



    // Methods
    function setdid($driverId)
    {
        $this->driverId = $driverId;
    }
    function setdfname($driverFirstName)
    {
        $this->driverFirstName = $driverFirstName;
    }
    function setdlname($driverLastName)
    {
        $this->driverLastName = $driverLastName;
    }
    function setdaddress($driverAddress)
    {
        $this->driverAddress = $driverAddress;
    }
    function setdriverContact($driverContact)
    {
        $this->driverContact = $driverContact;
    }
    function setdriverExprience($driverExprience)
    {
        $this->driverExprience = $driverExprience;
    }




    function getdid()
    {
        return $this->driverId;
    }
    function getdfname()
    {
        return $this->driverFirstName;
    }
    function getdlname()
    {
        return $this->driverLastName;
    }
    function getdaddress()
    {
        return $this->driverAddress;
    }
    function getdriverContact()
    {
        return $this->driverContact;
    }
    function getdriverExprience()
    {
        return $this->driverExprience;
    }

    function updatedriverquery()
    {

        $driverId = $this->driverId;
        $driverFirstName = $this->driverFirstName;
        $driverLastName = $this->driverLastName;
        $driverAddress = $this->driverAddress;
        $driverContact = $this->driverContact;
        $driverExprience = $this->driverExprience;

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
            $stmt = $conn->prepare("UPDATE driver 
                                            SET dFirstName = :driverFirstName, dLastName = :driverLastName , dAddress = :driverAddress , dContact = :driverContact , dExp = :driverExprience
                                            WHERE dId = :driverId;");


            $stmt->bindParam(':driverId', $driverId);
            $stmt->bindParam(':driverFirstName', $driverFirstName);
            $stmt->bindParam(':driverLastName', $driverLastName);
            $stmt->bindParam(':driverAddress', $driverAddress);
            $stmt->bindParam(':driverContact', $driverContact);
            $stmt->bindParam(':driverExprience', $driverExprience);

            $stmt->execute();
            //$stmt->bindParam(':delete_id', $delete_id);

            header("location:../updateDriver.php");
            echo "Records successfully updated";
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }

        $conn = null;
    }
}


$dId = $_POST['driverId'];
$dFirstName = $_POST['driverFirstName'];
$dLastName = $_POST['driverLastName'];
$dAddress = $_POST['driverAddress'];
$dContact = $_POST['driverContact'];
$dExp = $_POST['driverExprience'];

$obj = new driver();


$obj->setdid($dId);
$obj->setdfname($dFirstName);
$obj->setdlname($dLastName);
$obj->setdaddress($dAddress);
$obj->setdriverContact($dContact);
$obj->setdriverExprience($dExp);



$obj->updatedriverquery();
?>
