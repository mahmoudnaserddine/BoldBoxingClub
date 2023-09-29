


<?php
include('loginaction.php'); 
?>
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Login</title>

<style>
  @import url("https://fonts.googleapis.com/css?family=Lato:400,700");
  .bg {
    background-image: url('images/bbcback.jpeg');
    position: fixed;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    background-size: cover;
  }
  
  body {
    font-family: 'Lato', sans-serif;
    color: #4A4A4A;
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
    overflow: hidden;
    margin: 0;
    padding: 0;
  }
  
  form {
    width: 350px;
    position: relative;
  }
  form .form-field::before {
    font-size: 20px;
    position: absolute;
    left: 15px;
    top: 17px;
    color: #888888;
    content: " ";
    display: block;
    background-size: cover;
    background-repeat: no-repeat;
  }
  form .form-field:nth-child(1)::before {
    background-image: url(images/user-icon.png);
    width: 20px;
    height: 20px;
    top: 15px;
  }
  form .form-field:nth-child(2)::before {
    background-image: url(images/lock-icon.png);
    width: 16px;
    height: 16px;
  }
  form .form-field {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-pack: justify;
    -ms-flex-pack: justify;
    justify-content: space-between;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    margin-bottom: 1rem;
    position: relative;
  }
  form input {
    font-family: inherit;
    width: 100%;
    outline: none;
    background-color: #e9e9e9;
    border-radius: 4px;
    border: none;
    display: block;
    padding: 0.9rem 0.7rem;
    box-shadow: 0px 3px 6px rgba(0, 0, 0, 0.16);
    font-size: 17px;
    color: #4A4A4A;
    text-indent: 40px;
  }
  form .btn {
    outline: none;
    border: none;
    cursor: pointer;
    display: inline-block;
    margin: 0 auto;
    padding: 0.9rem 2.5rem;
    text-align: center;
    background-color: gray;
    color: #fff;
    border-radius: 8px;
    box-shadow: 0px 3px 6px rgba(0, 0, 0, 0.16);
    font-size: 17px;
  }
  .b{
 font-size:20px;
 text-decoration:none;
 color:red;
 }
 a:hover{
  color:blue;
 }
 button{
    
    border-radius: 10%;
  }
  button:hover{
    background-color: red;
  }


</style>
</head>
<body>

<div class="bg"></div>

<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post" align="center">
  <div class="form-field">
    <input type="text" name="username" placeholder="username" required/>
  </div>
  
  <div class="form-field">
    <input type="password" name="password"placeholder="Password" required/>                         </div>
  
  <div class="form-field">
    <button class="btn" type="submit" name="submit"><b>Log in</b></button>
  
    
  </div>
  <br>
  
  <center>
    
  <b><a class="b"  href="signup.php"><h3>Signup!</h3></a></b>
</center>
  
</form>

  
</body>
</html>


