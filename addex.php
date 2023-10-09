
<body class= "wee">
<div class="form-container">
<h2 style="font-style:bold; text-align:center;">Add Exercise</h2>
<form method="post" style="text-align:center;" action="addexaction.php" enctype="multipart/form-data"> 

<br><br><br>
<input type="hidden" value="<?php echo $id ?>" name="id">
Exercise Name:
      <center>
      <input type="text" id="exercise_name" name="exercise_name" required >
    </center>
      
    
      Description:
        <center> <input type="text" id="description" name="description" required></center>

        Upload image:<br> <center><input type="file" name="image" /></center>
      <input type="submit" name="submit" value="Add Exercise">
    
<input type="Reset">

</div>
</form>
      </body>
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
    .wee{
        background-color:#4B79A1;
    }
  </style>
