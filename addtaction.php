<?php 
$fullname = $phonenumber = $certificate="";

include "inc/connection.php";
   if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $fullname = test_input($_POST["fullname"]);
        $phonenumber = test_input($_POST["phone_number"]);
        $certificate = test_input($_POST["certifications"]);
    }
 
  $sql="Insert into trainers (fullname,phone_number,certifications) values ('".test_input($_POST["fullname"])."','". test_input($_POST["phone_number"])."','". test_input($_POST["certifications"])."')";

  if (mysqli_query($con, $sql)) {
    $message= "Record added successfully";

        }
        else
        {
        echo "Error  ". mysqli_error($con);
        }
        mysqli_close($con);

    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
      } 
        ?>  
        <a style= "background-color:yellow"href="trainers.php">Back to Trainers</a>