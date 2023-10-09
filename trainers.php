
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trainers</title>
    <style>
        table,tr,td{
            border: 2px solid;
        }
        * {font-family: 'Open Sans', sans-serif;}

.rwd-table {
  margin: auto;
  min-width: 300px;
  max-width: 100%;
  border-collapse: collapse;
}

.rwd-table tr:first-child {
  border-top: none;
  background: #428bca;
  color: #fff;
}

.rwd-table tr {
  border-top: 1px solid #ddd;
  border-bottom: 1px solid #ddd;
  background-color: #f5f9fc;
}

.rwd-table tr:nth-child(odd):not(:first-child) {
  background-color: #ebf3f9;
}

.rwd-table th {
  display: none;
}

.rwd-table td {
  display: block;
}

.rwd-table td:first-child {
  margin-top: .5em;
}

.rwd-table td:last-child {
  margin-bottom: .5em;
}

.rwd-table td:before {
  content: attr(data-th) ": ";
  font-weight: bold;
  width: 120px;
  display: inline-block;
  color: #000;
}

.rwd-table th,
.rwd-table td {
  text-align: left;
}

.rwd-table {
  color: #333;
  border-radius: .4em;
  overflow: hidden;
}

.rwd-table tr {
  border-color: #bfbfbf;
}

.rwd-table th,
.rwd-table td {
  padding: .5em 1em;
}
@media screen and (max-width: 601px) {
  .rwd-table tr:nth-child(2) {
    border-top: none;
  }
}
@media screen and (min-width: 600px) {
  .rwd-table tr:hover:not(:first-child) {
    background-color: #d8e7f3;
  }
  .rwd-table td:before {
    display: none;
  }
  .rwd-table th,
  .rwd-table td {
    display: table-cell;
    padding: .25em .5em;
  }
  .rwd-table th:first-child,
  .rwd-table td:first-child {
    padding-left: 0;
  }
  .rwd-table th:last-child,
  .rwd-table td:last-child {
    padding-right: 0;
  }
  .rwd-table th,
  .rwd-table td {
    padding: 1em !important;
  }
}


/* THE END OF THE IMPORTANT STUFF */

/* Basic Styling */
body {
background: #4B79A1;
background: -webkit-linear-gradient(to left, #4B79A1 , #283E51);
background: linear-gradient(to left, #4B79A1 , #283E51);        
}
h1 {
  text-align: center;
  font-size: 2.4em;
  color: #f2f2f2;
}
.container {
  display: block;
  text-align: center;
}
h3 {
  display: inline-block;
  position: relative;
  text-align: center;
  font-size: 1.5em;
  color: #cecece;
}
h3:before {
  content: "\25C0";
  position: absolute;
  left: -50px;
  -webkit-animation: leftRight 2s linear infinite;
  animation: leftRight 2s linear infinite;
}
h3:after {
  content: "\25b6";
  position: absolute;
  right: -50px;
  -webkit-animation: leftRight 2s linear infinite reverse;
  animation: leftRight 2s linear infinite reverse;
}
@-webkit-keyframes leftRight {
  0%    { -webkit-transform: translateX(0)}
  25%   { -webkit-transform: translateX(-10px)}
  75%   { -webkit-transform: translateX(10px)}
  100%  { -webkit-transform: translateX(0)}
}
@keyframes leftRight {
  0%    { transform: translateX(0)}
  25%   { transform: translateX(-10px)}
  75%   { transform: translateX(10px)}
  100%  { transform: translateX(0)}
}
a{
background-color:red;
color:#fff;
border:2px solid #FFCB00;
padding: 10px;
font-size:20px;
border-radius:5px;
text-decoration:none;
}
.b{
 background-color:green;
 color:#fff;
 border:2px solid #FFCB00;
 padding: 10px;
 font-size:20px;
 border-radius:5px;
 text-decoration:none;
 }
 .c{
 background-color:blue;
 color:#fff;
 border:2px solid #FFCB00;
 padding: 10px;
 font-size:20px;
 border-radius:5px;
 text-decoration:none;
 }
 .d{
 background-color:white;
 color:black;
 border:2px solid #FFCB00;
 padding: 10px;
 font-size:20px;
 border-radius:5px;
 text-decoration:none;
 }
    </style>
</head>
<body>
  

<div class = "container">

<table class="rwd-table" width=80% >
<tr><td> Full Name </td> <td> Phone Number </td><td> Certifications </td> <td><center><a class="b" href="addt.php">Add Trainer</a></center></td><td><center> <a class= "d" href="admin.php">BACK</a></center></td>
<?php	$con= mysqli_connect("localhost", "root","", "bbc");
		$sql="select * from trainers";
		$result=mysqli_query($con,$sql);
		$rows=mysqli_num_rows($result);
if(mysqli_num_rows($result) > 0){

    
?>
		
		<?php
		
		while($row = mysqli_fetch_array($result)) {
		?>
		<tr>
        <td><?php echo $row["fullname"]; ?></td>
		<td><?php echo $row["phone_number"]; ?></td>
        <td><?php echo $row["certifications"]; ?></td>
        
		
		<td><a href="deletet.php?id=<?php echo $row["trainer_id"]; ?>"class="confirmation">Delete</a></td>
		<td><a class="c" href="updatet.php?id=<?php echo $row["trainer_id"]; ?>">Update</a></td>
    
    
		</tr>

    <script type="text/javascript">
  var elems = document.getElementsByClassName('confirmation');
  var confirmIt = function (e) {
    if (!confirm('Are you sure?')) {
      e.preventDefault();
      return false; 
    }
  };

  for (var i = 0, l = elems.length; i < l; i++) {
    elems[i].addEventListener('click', confirmIt, false);
  }
</script>
   
		<?php
		
		}
		
	echo "</table>";
		
		
	
	
}



else{

    echo "0 results";
}

mysqli_close($con);

?>
</div>



</body>
</html>
    
</body>
</html>