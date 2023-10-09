
<body class= "wee">
<div class="form-container">
<h2 style="font-style:bold; text-align:center;">Add Equipment</h2>
<form method="post" style="text-align:center;" action="addeqaction.php" enctype="multipart/form-data"> <!--It specifies the encoding type for the form data-->

<br><br><br>
<input type="hidden" value="<?php echo $id ?>" name="id" required>
Equipment Name:
      <center>
      <input type="text" id="equipment_name" name="equipment_name" required >
    </center>
      
      Description: 
      <center><input type="text" id="description" name="description" required></center>

      

      
      Price:
        <center> <input type="text" id="price" name="price" required></center>

        Upload image:<br> <center><input type="file" name="image" /></center>
      <input type="submit" name="submit" value="Add Equipment">
    
<input type="Reset">

</div>
</form>
      </body>
<style>

    /*  custom styles here */
    
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
    .wee{
        background-color:#4B79A1;
    }
  </style>
