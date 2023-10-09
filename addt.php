
    <body class= "wee">
<div class="form-container">
<h2 style="font-style:bold; text-align:center;">Add Trainer</h2>
<form method="post" style="text-align:center;" action="addtaction.php"> 

<br><br><br>
<input type="hidden" value="<?php echo $id ?>" name="id">
Full Name:
      <center>
      <input type="text" id="fullname" name="fullname" required >
    </center>
      
      Phone Number: 
      <center><input type="text" id="phoneNumber" name="phone_number" required></center>

      

      
      Certificates:
        <center> <input type="text" id="certifications" name="certifications" required></center>
      <input type="submit" name="submit" value="Add Trainer">
    
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
