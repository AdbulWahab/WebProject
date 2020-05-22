<?php
/*   
    include "connection.php";
    
    if(isset($_POST['delete_tbtn']))
{

    $id = $_POST['delete_id'];

    $query = "DELETE FROM `train` WHERE trainId='$id'";


    $query_run = mysqli_query($con, $query);
    header("location:deleteTrain.php");
}
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

    $delete_id = $_POST['delete_id'];

    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // prepare sql and bind parameters
    $stmt = $conn->prepare("DELETE FROM `train` 
                            WHERE trainId=:delete_id");
                            
    $stmt->bindParam(':delete_id', $delete_id);
    $stmt->execute();
    
    header("location:../deleteTrain.php");
    echo "New records created successfully";
} 
catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}

$conn = null;

*/


class train
{
    // Properties

    private $trainId;



    // Methods
    function settid($trainId)
    {
        $this->trainId = $trainId;
    }


    function gettid()
    {
        return $this->trainId;
    }

    function deletetrainquery()
    {

        $trainId = $this->trainId;


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
            $stmt = $conn->prepare("DELETE FROM `train` 
                            WHERE trainId=:trainId");

            $stmt->bindParam(':trainId', $trainId);
            $stmt->execute();

            header("location:../deleteTrain.php");
            echo "New records created successfully";
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }

        $conn = null;
    }
}



$delete_id = $_POST['delete_id'];

$obj = new train();


$obj->settid($delete_id);



$obj->deletetrainquery();

?>


