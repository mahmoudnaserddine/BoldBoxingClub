<link href="style.css" rel="stylesheet" type="text/css">
<?php



$conn= mysqli_connect("localhost", "root","", "bbc");

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$ids = $_GET['id'];

$sql = "DELETE FROM users where id =$ids ";

if ($conn->query($sql) === TRUE) {
  echo "Record deleted successfully";
} else {
  echo "Error deleting record: " . $conn->error;
}

$conn->close();
?>
<br>
<a style = "background-color:yellow "href="users.php">Back</a>
