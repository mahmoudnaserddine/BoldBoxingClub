<?php
session_start(); 
if (!isset($_SESSION['role']) || $_SESSION['role'] !== "admin") {
    echo "You need to login as an admin";
    header("Location: login.php");
    exit();
}
?>
<html> 
	<head>
		  <meta charset="utf-8">
		  <meta name="viewport" content="width=device-width, initial-scale=1">
		  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
		  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
		  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	</head>
	<style>
    body {
      overflow: hidden;
    }
  </style>
  <script>
    // Disable scrolling
    function disableScroll() {
      // Get the current scroll position
      var scrollTop = window.pageYOffset || document.documentElement.scrollTop;
      var scrollLeft = window.pageXOffset || document.documentElement.scrollLeft;

      // Disable scroll by setting the scroll position to the current values
      window.onscroll = function() {
        window.scrollTo(scrollLeft, scrollTop);
      };
    }

    // Enable scrolling
    function enableScroll() {
      window.onscroll = null;
    }
  </script>

	<body onload="disableScroll()">
		
<script>
  // Enable scrolling after the page has loaded
  window.onload = enableScroll;
</script>
		<div class="container-fluid" style = "margin-top:40px" >
		
			<div class = "row"  >
				<div class ="col-sm-12">
					<?php 
					include("header.php")
					?>
				
					<div class="col-sm-9" style="min-height: 500px; background-color: black; background-image: url('images/main.jpeg'); background-repeat: no-repeat; background-size: cover;">

          <h1  style = "color:white;text-align:center; margin-top:25%"><b> ADMIN PAGE</b> </h1>
						 
					
					</div>
				</div>
				
					
			</div>
		</div>
		
	</body>
	
</html>