<?php
include "inc/connection.php";  // Includes the file "connection.php" to establish a database connection.
if(isset($_FILES['image'])){  // Checks if the 'image' file is set in the $_FILES array.

    $errors= array();  // Initializes an empty array to store any errors encountered.

    
    $file_name = $_FILES['image']['name'];  // Retrieves the name of the uploaded file.
    $file_size = $_FILES['image']['size'];   // Retrieves the size of the uploaded file.
    $file_tmp = $_FILES['image']['tmp_name']; // Retrieves the temporary file location of the uploaded file.
    $file_type = $_FILES['image']['type']; // Retrieves the type of the uploaded file.
    $file_parts =explode('.',$_FILES['image']['name']); // Splits the file name by the dot (.) to extract the file extension.
    $file_ext=strtolower(end($file_parts)); // Retrieves the lowercase file extension from the file name.
    $extensions= array("jpeg","jpg","png"); // Defines an array of allowed file extensions.
    
    if(in_array($file_ext,$extensions)=== false){
        $errors[]='extension not allowed, please choose a JPEG or PNG file.'; // Checks if the file extension is allowed and adds an error message if not.
    }
    if($file_size > 2097152) {
        $errors[]='File size must be excately 2 MB';  // Checks if the file size exceeds 2 MB and adds an error message if it does.
    
    } if(empty($errors)==true) { // Checks if there are no errors.
        $equipment_name= $_POST['equipment_name'];  // Retrieves the value of the 'equipment_name' input field.
        $description= $_POST['description'];  // Retrieves the value of the 'description' input field.
        $price= $_POST['price']; // Retrieves the value of the 'price' input field.
        $sql = "INSERT INTO equipments(equipment_name,description,price,image)
        VALUES ('$equipment_name','$description','$price','$file_name')";  // Constructs an SQL query to insert the form data and file name into the database table 'equipments'.    
    mysqli_query( $con, $sql);  // Executes the SQL query using the database connection '$con'.
    
      
        move_uploaded_file($file_tmp,"images/".$file_name);// Moves the uploaded file from the temporary location to the specified directory.
        echo "Success";  // Displays the success message.
   
    }
    else{
    print_r($errors); // Prints any encountered errors.
    }
    }
    
    ?>
        <a style= "background-color:yellow"href="equipments.php">Back to Equipments</a>   <!--Displays a link to navigate back to the 'equipments.php' page.-->