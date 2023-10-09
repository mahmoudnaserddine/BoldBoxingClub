
<body class= "wee">
<div class="form-container">
<h2 style="font-style:bold; text-align:center;">Add User</h2>
<form method="post" style="text-align:center;" action="adduaction.php"> 

<br><br><br>
<input type="hidden" value="<?php echo $id ?>" name="id">
Full Name:
      <center>
      <input type="text" id="FullName" name="FullName" required>
    </center>
      
      Username: 
      <center><input type="text" id="username" name="username" required></center>

      
      Password:
        <center> <input type="text" id="password" name="password" required></center>


      Date Of Birth:
        <center> <input type="text" id="date_of_birth" name="date_of_birth" required ></center>

        Phone Number:
        <center> <input type="text" id="phone_number" name="phone_number" required ></center>
      <input type="submit" name="submit" value="Add User">
    
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
