<?php
include "inc/connection.php";
session_start(); 
if (!isset($_SESSION['role']) || $_SESSION['role'] !== "admin") {
    echo "You need to login as an admin";
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bold Boxing Club</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">
    
</head>
<body>
    
<!-- header section starts      -->

<header class="header">

    <p class="logo">  <span>BOLD</span>BOXINGCLUB </p>

    <div id="menu-btn" class="fas fa-bars"></div>

    <nav class="navbar">
        <a href="#home">home</a>
        <a href="#features">exercises</a>
        <a href="#pricing">equipments</a>
        <a href="#trainers">trainers</a>
        <a href="#blogs">schedules</a>
        <a href="logout.php">Logout</a>

    </nav>

</header>

<!-- header section ends     -->

<!-- home section starts  -->

<section class="home" id="home">

    <div class="swiper home-slider">

        <div class="swiper-wrapper">

            <div class="swiper-slide slide" style="background: url(images/mainpagephoto1.png) no-repeat;">
               
            </div>

            <div class="swiper-slide slide" style="background: url(images/mainpagephoto3.jpeg) no-repeat;">
           
            </div>

            <div class="swiper-slide slide" style="background: url(images/mainpagephoto1.jpeg) no-repeat;">
              
            </div>

        </div>

        <div class="swiper-pagination"></div>

    </div>

</section>

<!-- home section ends -->



<section class="features" id="features">
    <h1 class="heading"><span>gym exercises</span></h1>
    <div class="box-container">
    <?php
        $con = mysqli_connect("localhost", "root", "", "bbc");
        $sql = "SELECT * FROM exercises";
        $result = mysqli_query($con, $sql);
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_array($result)) {
                echo '<div class="box">';
                echo '<div class="image">';
                echo '<img src="images/' . $row["image"] . '" alt="exercise image">';
                echo '</div>';
                echo '<div class="content">';
                echo '<h3>' . $row["exercise_name"] . '</h3>';
                echo '<p>' . $row["description"] . '</p>';
                echo '</div>';
                echo '</div>';
            }
        }
        mysqli_close($con);
    ?>
    </div>
</section>

<!-- features section ends -->

<!-- pricing section starts  -->

<section class="pricing" id="pricing">

    <div class="information">
    <h1 class="heading"> <span>gym equipments</span> </h1>
        <span>pricing </span>
        
        <h3>affordable pricing </h3>
        <p>
Our boxing gym accessories provide a wide range of equipments</p>

s       <p> <i class="fas fa-check"></i> Gloves </p>
        <p> <i class="fas fa-check"></i> Handwraps </p>
        <p> <i class="fas fa-check"></i> Mouthguards </p>
        <p> <i class="fas fa-check"></i> HeadGears </p>
        <p> <i class="fas fa-check"></i> Groin guard </p>
        <p> <i class="fas fa-check"></i> Skipping Rope </p>
        
    </div>

    
    
  <?php	$con= mysqli_connect("localhost", "root","", "bbc");
  $sql="select * from equipments ";
  $result=mysqli_query($con,$sql);
  $rows=mysqli_num_rows($result);
if(mysqli_num_rows($result) > 0){
   while($row = mysqli_fetch_array($result)) {
    
?>
<div class="plan basic">
        <h3><?php echo $row["equipment_name"]; ?></h3>
        <div class="price"><span></span><?php echo $row["price"]; ?></div>
        <div class="list">
        <?php echo "<img style='width: 250px; height: 200px' src='images/" . $row["image"] . "'>"; ?>
        </div>
        
        <div style="color:white; font-size:18px"><?php echo $row["description"]; ?></div>
        
       
        </div>
    <?php
    }
}
?>


  













</section>

<!-- pricing section ends -->

<!-- trainers section starts  -->

<section class="trainers" id="trainers">

<div class="plan basic">
    
<?php	$con= mysqli_connect("localhost", "root","", "bbc");
  $sql="select * from trainers where trainer_id='1'";
  $result=mysqli_query($con,$sql);
  $rows=mysqli_num_rows($result);
if(mysqli_num_rows($result) > 0){
   while($row = mysqli_fetch_array($result)) {
?>
   

    <h1 class="heading"> <span>expert trainers</span> </h1>

    <div class="box-container">

    

        <div class="box">
  
     
        
            <img src="images/jaafar.jpeg" alt="">
            <div class="content">
                <span>expert trainer</span>
                <h3><?php echo $row["fullname"]; ?></h3>   
                <p style="font-size:15px; color:white"><i><?php echo $row["certifications"]; ?></i></p> 
                <div class="share">
                    <a href="https://www.facebook.com/jaafarh" class="fab fa-facebook-f"></a><a href="https://instagram.com/naseraldeenjaafar?igshid=ZWIzMWE5ZmU3Zg==" class="fab fa-instagram"></a>  <a href="https://wa.me/+96176939035" class="fab fa-whatsapp"> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<?php echo $row["phone_number"]; ?>  </a>
    
                </div>
            </div>
        </div>
    
     
        <?php
        }
    }
    ?>





<div class="plan basic">
    
<?php	$con= mysqli_connect("localhost", "root","", "bbc");
  $sql="select * from trainers where trainer_id='41'";
  $result=mysqli_query($con,$sql);
  $rows=mysqli_num_rows($result);
if(mysqli_num_rows($result) > 0){
   while($row = mysqli_fetch_array($result)) {
?>
        


        <div class="box">
            <img src="images/mohammad.jpeg" alt="">
            <div class="content">
                <span>expert trainer</span>
                <h3><?php echo $row["fullname"]; ?></h3>   
                <p style="font-size:15px; color:white"><i><?php echo $row["certifications"]; ?></i></p> 
                <div class="share">
                    <a href="https://www.facebook.com/mohammad.naseraldeen.16?mibextid=ZbWKwL" class="fab fa-facebook-f"></a> <a href="https://instagram.com/moenasseraldeen?igshid=ZWIzMWE5ZmU3Zg==" class="fab fa-instagram"></a>  <a href="https://wa.me/+96171186288" class="fab fa-whatsapp"> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<?php echo $row["phone_number"]; ?>  </a>
    
                    
                   
                </div>
            </div>
        </div>


     
        <?php
        }
    }
    ?>



    </div>

</section>

<!-- trainers section ends -->













<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>
