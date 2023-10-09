<?php 
$fullname = $date_of_birth = $phone_number = $experience="";

include "inc/connection.php";
   if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $fullname = test_input($_POST["fullname"]);
        $date_of_birth= test_input($_POST["date_of_birth"]);
        $phone_number = test_input($_POST["phone_number"]);
        $experience = test_input($_POST["experience"]);
    }
 
  $sql="Insert into employees (fullname,date_of_birth,phone_number,experience) values ('".test_input($_POST["fullname"])."','". test_input($_POST["date_of_birth"])."','". test_input($_POST["phone_number"])."','". test_input($_POST["experience"])."')";

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
        <a style= "background-color:yellow"href="employees.php">Back to Employees</a>