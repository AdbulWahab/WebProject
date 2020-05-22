<?php
/*
include "connection.php";

$dId = $_POST['driverId'];
$dFirstName = $_POST['driverFirstName'];
$dLastName = $_POST['driverLastName'];
$dAddress = $_POST['driverAddress'];
$dContact = $_POST['driverContact'];
$dExp = $_POST['driverExprience'];

$query = "INSERT INTO `driver` VALUES ('$dId', '$dFirstName', '$dLastName', '$dAddress', '$dContact', '$dExp')";
mysqli_query($con, $query);
header("location:../addDriver.php");
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


    $driverId = $_POST['driverId'];
    $driverFirstName = $_POST['driverFirstName'];
    $driverLastName = $_POST['driverLastName'];
    $driverAddress = $_POST['driverAddress'];
    $driverContact = $_POST['driverContact'];
    $driverExprience = $_POST['driverExprience'];




    // prepare sql and bind parameters
    $stmt = $conn->prepare("INSERT INTO `driver` 
                            VALUES (:driverId, :driverFirstName, :driverLastName, :driverAddress, :driverContact, :driverExprience)");
    $stmt->bindParam(':driverId', $driverId);
    $stmt->bindParam(':driverFirstName', $driverFirstName);
    $stmt->bindParam(':driverLastName', $driverLastName);
    $stmt->bindParam(':driverAddress', $driverAddress);
    $stmt->bindParam(':driverContact', $driverContact);
    $stmt->bindParam(':driverExprience', $driverExprience);

    // insert a row

    $stmt->execute();
    header("location:../addDriver.php");
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

    function addDriverQuery()
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
            $stmt = $conn->prepare("INSERT INTO `driver` 
                            VALUES (:driverId, :driverFirstName, :driverLastName, :driverAddress, :driverContact, :driverExprience)");
            $stmt->bindParam(':driverId', $driverId);
            $stmt->bindParam(':driverFirstName', $driverFirstName);
            $stmt->bindParam(':driverLastName', $driverLastName);
            $stmt->bindParam(':driverAddress', $driverAddress);
            $stmt->bindParam(':driverContact', $driverContact);
            $stmt->bindParam(':driverExprience', $driverExprience);

            // insert a row

            $stmt->execute();
            header("location:../addDriver.php");
            echo "New records created successfully";
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
        $conn = null;
    }
}

$driverId = $_POST['driverId'];
$driverFirstName = $_POST['driverFirstName'];
$driverLastName = $_POST['driverLastName'];
$driverAddress = $_POST['driverAddress'];
$driverContact = $_POST['driverContact'];
$driverExprience = $_POST['driverExprience'];

$obj = new driver();


$obj->setdid($driverId);
$obj->setdfname($driverFirstName);
$obj->setdlname($driverLastName);
$obj->setdaddress($driverAddress);
$obj->setdriverContact($driverContact);
$obj->setdriverExprience($driverExprience);



$obj->addDriverQuery();
