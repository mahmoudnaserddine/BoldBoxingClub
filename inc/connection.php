<?php

$con = mysqli_connect("localhost", "root", "", "bbc");

if(mysqli_connect_errno()){
echo "connection error";
mysqli_connect_error();
exit();
}


?>