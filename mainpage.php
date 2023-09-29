<?php
session_start(); 
if (!($_SESSION['role'] == "user")) {
	echo "You need to login";
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














<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>
