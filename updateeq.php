<?php
include "inc/connection.php";

if (isset($_GET['id'])) {
  $id = $_GET['id'];

  $sql = "SELECT * FROM equipments WHERE equipment_id=" . $id; // Select all data from the "equipments" table where equipment_id matches the provided id
  $result = mysqli_query($con, $sql); // Execute the SQL query

  if (mysqli_num_rows($result) > 0) { // check if there is at least one row in the result set 
    $row = mysqli_fetch_assoc($result); //Fetch the next row from the result set and store it in the variable $row
    $equipment_name = $row["equipment_name"]; // Retrieve the value of the "equipment_name" column from the fetched row and assign it to the variable $equipment_name
    $description = $row["description"]; // Retrieve the value of the "description" column from the fetched row and assign it to the variable $description
    $price = $row["price"]; // Retrieve the value of the "price" column from the fetched row and assign it to the variable $price
  }
}

//The first two commands check if the server request method is "POST" 
if ($_SERVER["REQUEST_METHOD"] == "POST") { // If it is, it checks if the "id" field is set in the POST request
  if (isset($_POST["id"])) {
    $id = $_POST["id"]; // Get the value of the "id" field from the POST request and assign it to the variable $id
    $equipment_name = $_POST["equipment_name"]; // Get the value of the "equipment_name" field from the POST request and assign it to the variable $equipment_name
    $description = $_POST["description"]; // Get the value of the "description" field from the POST request and assign it to the variable $description
    $price = $_POST["price"];  // Get the value of the "price" field from the POST request and assign it to the variable $price
  

   
    if (isset($_FILES['image']) && $_FILES['image']['error'] !== UPLOAD_ERR_NO_FILE) {
      $file_name = $_FILES['image']['name']; // Retrieves the name of the uploaded file.
      $file_size = $_FILES['image']['size']; // Retrieves the size of the uploaded file.
      $file_tmp = $_FILES['image']['tmp_name']; // Retrieves the temporary file location of the uploaded file.
      $file_type = $_FILES['image']['type'];  // Retrieves the type of the uploaded file.
      $file_parts = explode('.', $_FILES['image']['name']); // Splits the file name by the dot (.) to extract the file extension.
      $file_ext = strtolower(end($file_parts)); // Retrieves the lowercase file extension from the file name.
      $extensions = array("jpeg", "jpg", "png"); // Defines an array of allowed file extensions.

      if (in_array($file_ext, $extensions) === false) {
        echo 'Extension not allowed. Please choose a JPEG or PNG file.'; // Checks if the file extension is allowed and adds an error message if not.
       
      } elseif ($file_size > 2097152) {
        echo 'File size must be exactly 2 MB.'; // Checks if the file size exceeds 2 MB and adds an error message if it does.
        
      } else {
       
        move_uploaded_file($file_tmp, "images/" . $file_name); // Move the uploaded file to the specified directory
        $image = $file_name; // Assign the file name to the variable $image

        $sql = "UPDATE equipments SET equipment_name=?, description=?, price=?, image=? WHERE equipment_id=?"; //Prepare an SQL statement to update the "equipments" table with the new values
        $stmt = mysqli_prepare($con, $sql);//  Prepare the SQL statement
        mysqli_stmt_bind_param($stmt, "ssssi", $equipment_name, $description, $price, $image, $id);// Bind the parameters to the statement
        mysqli_stmt_execute($stmt);// Execute the prepared statement

        if (mysqli_stmt_affected_rows($stmt) > 0) {
          header("Location: equipments.php"); //Redirect to the specified page if the update affected at least one row
          exit(); // Stop the execution of the script
        } else {
          echo "Error updating record: " . mysqli_error($con); //Output an error message if the update didn't affect any rows and display the MySQL error
        }

        mysqli_stmt_close($stmt); // Close the prepared statement
      }
    } else {
      // No new image uploaded, update other fields except image
      $sql = "UPDATE equipments SET equipment_name=?, description=?, price=? WHERE equipment_id=?";
      $stmt = mysqli_prepare($con, $sql);
      mysqli_stmt_bind_param($stmt, "sssi", $equipment_name, $description, $price, $id);
      mysqli_stmt_execute($stmt);

      if (mysqli_stmt_affected_rows($stmt) > 0) {
        header("Location: equipments.php");
        exit();
      } else {
        echo "Error updating record: " . mysqli_error($con);
      }

      mysqli_stmt_close($stmt);
    }
  }
}

mysqli_close($con);
?>
<!DOCTYPE html>
<html>
<head>
  <link href="style.css" rel="stylesheet" type="text/css">
  <style>
    /* custom styles here */
   
    body {
      font-family: Arial, sans-serif;
      background-color: #f4f4f4;
    }
    
    .form-container {
      max-width: 400px;
      margin: 0 auto;
      padding: 20px;
      background-color: #ffffff;
      border: 1px solid #cccccc;
      border-radius: 5px;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    }
    
    .form-container h2 {
      text-align: center;
    }
    
    .form-container label,
    .form-container input[type="text"],
    .form-container input[type="password"] {
      display: block;
      margin-bottom: 10px;
    }
    
    .form-container input[type="submit"] {
      background-color: #4CAF50;
      color: #ffffff;
      border: none;
      padding: 10px 20px;
      margin-top: 10px;
      cursor: pointer;
    }
  </style>
</head>
<body>
  <center>
  <div class="form-container">
    <h2>Equipments Form</h2>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" enctype="multipart/form-data">
      <input type="hidden" value="<?php echo $id ?>" name="id">
      <label for="equipment_name">Equipment Name:</label>
      <input type="text" id="equipment_name" name="equipment_name" value="<?php echo isset($equipment_name) ? $equipment_name : '' ?>">
      <label for="description">Description:</label>
      <input type="text" id="description" name="description" value="<?php echo isset($description) ? $description : '' ?>">
      <label for="price">Price:</label>
      <input type="text" id="price" name="price" value="<?php echo isset($price) ? $price : '' ?>">
      <label for="image">Upload Image:</label>
      <input type="file" id="image" name="image">
      <input type="submit" name="submit" value="Update">
    </form>
  </div>
  </center>
</body>
</html>