<?php
include "inc/connection.php";

if (isset($_GET['id'])) {
  $id = $_GET['id'];

  $sql = "SELECT * FROM exercises WHERE exercise_id=" . $id;
  $result = mysqli_query($con, $sql);

  if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
    $exercise_name = $row["exercise_name"];
    $description = $row["description"];
  }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (isset($_POST["id"])) {
    $id = $_POST["id"];
    $exercise_name = $_POST["exercise_name"];
    $description = $_POST["description"];

    // Check if a new image is uploaded
    if (isset($_FILES['image']) && $_FILES['image']['error'] !== UPLOAD_ERR_NO_FILE) {
      $file_name = $_FILES['image']['name'];
      $file_size = $_FILES['image']['size'];
      $file_tmp = $_FILES['image']['tmp_name'];
      $file_type = $_FILES['image']['type'];
      $file_parts = explode('.', $_FILES['image']['name']);
      $file_ext = strtolower(end($file_parts));
      $extensions = array("jpeg", "jpg", "png");

      if (in_array($file_ext, $extensions) === false) {
        echo 'Extension not allowed. Please choose a JPEG or PNG file.';
        // Handle the error condition as per your requirements
      } elseif ($file_size > 2097152) {
        echo 'File size must be exactly 2 MB.';
        // Handle the error condition as per your requirements
      } else {
        // Move the uploaded file to the target directory
        move_uploaded_file($file_tmp, "images/" . $file_name);
        $image = $file_name;

        $sql = "UPDATE exercises SET exercise_name=?, description=?, image=? WHERE exercise_id=?";
        $stmt = mysqli_prepare($con, $sql);
        mysqli_stmt_bind_param($stmt, "sssi", $exercise_name, $description, $image, $id);
        mysqli_stmt_execute($stmt);

        if (mysqli_stmt_affected_rows($stmt) > 0) {
          header("Location: exercises.php");
          exit();
        } else {
          echo "Error updating record: " . mysqli_error($con);
        }

        mysqli_stmt_close($stmt);
      }
    } else {
      // No new image uploaded, update other fields except image
      $sql = "UPDATE exercises SET exercise_name=?, description=? WHERE exercise_id=?";
      $stmt = mysqli_prepare($con, $sql);
      mysqli_stmt_bind_param($stmt, "ssi", $exercise_name, $description, $id);
      mysqli_stmt_execute($stmt);

      if (mysqli_stmt_affected_rows($stmt) > 0) {
        header("Location: exercises.php");
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
    /* Add your custom styles here */
    /* Example styles */
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
    <h2>Exercises Form</h2>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" enctype="multipart/form-data">
      <input type="hidden" value="<?php echo $id ?>" name="id">
      <label for="event_name">Exercise Name:</label>
      <input type="text" id="exercise_name" name="exercise_name" value="<?php echo isset($exercise_name) ? $exercise_name : '' ?>">


      <label for="description">Description:</label>
      <input type="text" id="description" name="description" value="<?php echo isset($description) ? $description : '' ?>">

      <label for="image">Upload Image:</label>
      <input type="file" id="image" name="image">

      <input type="submit" name="submit" value="Update">
    </form>
  </div>
  </center>
</body>
</html>