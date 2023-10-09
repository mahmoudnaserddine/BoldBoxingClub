<?php

include "inc/connection.php";
if(isset($_GET['id']))
{
$id=$_GET['id'];

$sql = "SELECT * from trainers where trainer_id=".$id;
$result = mysqli_query($con, $sql);
 
if (mysqli_num_rows($result) >0){
$row = mysqli_fetch_assoc($result) ;
$fullname = $row["fullname"];
$phone_number=$row["phone_number"];
$certifications=$row["certifications"];

}
}
?>
<?php 
   if ($_SERVER["REQUEST_METHOD"] == "POST") 
   {


  $sql="update trainers set fullname='".$_POST["fullname"]."',phone_number='".$_POST["phone_number"]."',certifications='".$_POST["certifications"]."'  where trainer_id=".$_POST["id"];
  echo $sql;
  if (mysqli_query($con, $sql)) {
    header("Location:trainers.php");

        }
        else
        {
        echo "Error  ". mysqli_error($con);
        }}
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
    <h2>Trainers Form</h2>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
      <input type="hidden" value="<?php echo $id ?>" name="id">
      <label for="fullName">Full Name:</label>
      <input type="text" id="fullname" name="fullname" value="<?php echo $fullname ?>">

      <label for="phoneNumber">Phone Number:</label>
      <input type="text" id="phoneNumber" name="phone_number" value="<?php echo $phone_number ?>">

      

      <label for="certifications">Certifications:</label>
      <input type="text" id="certifications" name="certifications" value="<?php echo $certifications ?>">

      <input type="submit" name="submit" value="Update">
    </form>
    
  </div>
  
  </center>
  

              
</body>
</html>