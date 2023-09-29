<?php 
$FullName = $username = $password = $date_of_birth = $phone_number="";

include "inc/connection.php";
   if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $FullName = test_input($_POST["FullName"]);
        $username = test_input($_POST["username"]);
        $password = test_input($_POST["password"]);
        $date_of_birth = test_input($_POST["date_of_birth"]);
        $phone_number = test_input($_POST["phone_number"]);
    }
 
    $sql = "INSERT INTO users (FullName, username, password, date_of_birth, phone_number, roleid) VALUES ('".test_input($_POST["FullName"])."', '".test_input($_POST["username"])."', '".test_input($_POST["password"])."', '".test_input($_POST["date_of_birth"])."', '".test_input($_POST["phone_number"])."', 2)";

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
        <a style= "background-color:yellow"href="users.php">Back to Users</a>