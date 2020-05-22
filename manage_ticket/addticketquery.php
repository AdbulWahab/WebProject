<?php
class ticket
{
    // Properties
    private  $firstname;
    private  $lastname;
    private  $address;
    private  $cnic;
    private  $contact;
    private  $fid;



    // setter
    function setfname($firstname)
    {
        $this->firstname = $firstname;
    }
    function setlname($lastname)
    {
        $this->lastname = $lastname;
    }
    function setaddress($address)
    {
        $this->address = $address;
    }
    function setcnic($cnic)
    {
        $this->cnic = $cnic;
    }
    function setcontact($contact)
    {
        $this->contact = $contact;
    }
    function setfareid($fid)
    {
        $this->fid = $fid;
    }




    //getter
    function getdfname()
    {
        return $this->firstname;
    }
    function getdlname()
    {
        return $this->lastname;
    }
    function getaddress()
    {
        return $this->address;
    }
    function getcnic()
    {
        return $this->cnic;
    }
    function getcontact()
    {
        return $this->contact;
    }
    function getfareid()
    {
        return $this->fid;
    }

    function addticketquery()
    {

        $firstname = $this->firstname;
        $lastname = $this->lastname;
        $address = $this->address;
        $cnic = $this->cnic;
        $contact = $this->contact;
        $fid = $this->fid;

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
            $stmt = $conn->prepare("INSERT INTO `ticket` 
                            VALUES (:firstname, :lastname, :address, :cnic, :contact, :fid)");
            $stmt->bindParam(':firstname', $firstname);
            $stmt->bindParam(':lastname', $lastname);
            $stmt->bindParam(':address', $address);
            $stmt->bindParam(':cnic', $cnic);
            $stmt->bindParam(':contact', $contact);
            $stmt->bindParam(':fid', $fid);

            // insert a row

            $stmt->execute();
            header("location:../home.php");
            echo "New records created successfully";
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
        $conn = null;
    }
}

$fname = $_POST['firstname'];
$lname = $_POST['lastname'];
$address = $_POST['address'];
$cnic = $_POST['cnic'];
$contact = $_POST['contactnumber'];
$fid = $_POST['fareid'];

$obj = new ticket();


$obj->setfname($fname);
$obj->setlname($lname);
$obj->setaddress($address);
$obj->setcnic($cnic);
$obj->setcontact($contact);
$obj->setfareid($fid);



$obj->addticketquery();
?>