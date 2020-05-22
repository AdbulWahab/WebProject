<?php
/*
include "connection.php";

$fid = $_POST['fareid'];
$route = $_POST['route'];
$price = $_POST['price'];
$class = $_POST['class'];

$query = "INSERT INTO `fare` VALUES ('$fid', '$route', '$price', '$class')";
mysqli_query($con, $query);
header("location:../addFare.php");
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


  $fid = $_POST['fareid'];
  $route = $_POST['route'];
  $price = $_POST['price'];
  $class = $_POST['class'];




  // prepare sql and bind parameters
  $stmt = $conn->prepare("INSERT INTO `fare` 
                            VALUES (:fid, :route, :price, :class)");
  $stmt->bindParam(':fid', $fid);
  $stmt->bindParam(':route', $route);
  $stmt->bindParam(':price', $price);
  $stmt->bindParam(':class', $class);

  // insert a row

  $stmt->execute();
  header("location:../addFare.php");
  echo "New records created successfully";
} catch (PDOException $e) {
  echo "Error: " . $e->getMessage();
}
$conn = null;
?>



?>

*/

class fare
{
  // Properties
  public $fid;
  private $route;
  private $price;
  private $class;

   

  // Methods
  function setfid($fid)
  {
    $this->fid = $fid;
  }
  function setroute($route)
  {
    $this->route = $route;
  }
  function setprice($price)
  {
    $this->price = $price;
  }
  function setclass($class)
  {
    $this->class = $class;
  }

  function getfid()
  {
    return $this->fid;
  }
  function getroute()
  {
    return $this->route;
  }
  function getprice()
  {
    return $this->price;
  }
  function getclass()
  {
    return $this->class;
  }

  function addFareQuery()
  {
     $fid = $this->fid;
    $route= $this->route;
    $price= $this->price;
    $class= $this->class;

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
      $stmt = $conn->prepare("INSERT INTO `fare` 
                            VALUES (:fid, :route, :price, :class)");
      $stmt->bindParam(':fid', $fid);
      $stmt->bindParam(':route', $route);
      $stmt->bindParam(':price', $price);
      $stmt->bindParam(':class', $class);

      // insert a row

      $stmt->execute();
      header("location:../addFare.php");
      echo "New records created successfully";
    } catch (PDOException $e) {
      echo "Error: " . $e->getMessage();
    }
  }
}

$fid = $_POST['fareid'];
$route = $_POST['route'];
$price = $_POST['price'];
$class = $_POST['class'];

$addfare = new fare();


$addfare->setfid($fid);
$addfare->setroute($route);
$addfare->setprice($price);
$addfare->setclass($class);



$addfare->addFareQuery();

?>