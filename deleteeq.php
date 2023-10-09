<link href="style.css" rel="stylesheet" type="text/css">
<?php



$conn= mysqli_connect("localhost", "root","", "bbc"); // This line establishes a connection to the MySQL database.


if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error); // If there is an error in establishing the connection, this line terminates the script and displays the error message.
}
$ids = $_GET['id']; // This line retrieves the value of the 'id' parameter from the URL query string.

$sql = "DELETE FROM equipments where equipment_id =$ids "; // This line constructs an SQL query to delete a record from the 'equipments' table where the 'equipment_id' matches the value of $ids.

if ($conn->query($sql) === TRUE) { // This line executes the SQL query and checks if it was executed successfully.
  echo "Record deleted successfully"; // If the query was executed successfully, this line displays a success message.
} else {
  echo "Error deleting record: " . $conn->error; // If there was an error executing the query, this line displays an error message along with the specific error.
}

$conn->close(); // This line closes the database connection.
?>
<br>
<a style = "background-color:yellow "href="equipments.php">Back</a>
