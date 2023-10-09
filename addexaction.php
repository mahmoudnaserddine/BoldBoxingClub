<?php
include "inc/connection.php";
if(isset($_FILES['image'])){

    $errors= array(); 
    
    $file_name = $_FILES['image']['name'];
    $file_size = $_FILES['image']['size'];
    $file_tmp = $_FILES['image']['tmp_name'];
    $file_type = $_FILES['image']['type'];
    $file_parts =explode('.',$_FILES['image']['name']);
    $file_ext=strtolower(end($file_parts));
    $extensions= array("jpeg","jpg","png"); 
    
    if(in_array($file_ext,$extensions)=== false){
        $errors[]='extension not allowed, please choose a JPEG or PNG file.';
    }
    if($file_size > 2097152) {
        $errors[]='File size must be excately 2 MB';
    
    } if(empty($errors)==true) {
        $exercise_name= $_POST['exercise_name'];
        $description= $_POST['description'];
        $sql = "INSERT INTO exercises(exercise_name,description,image)
        VALUES ('$exercise_name','$description','$file_name')";    
    mysqli_query( $con, $sql);
    
      
        move_uploaded_file($file_tmp,"images/".$file_name);
        echo "Success"; 
   
    }
    else{
    print_r($errors);
    }
    }
    
    ?>
        <a style= "background-color:yellow"href="exercises.php">Back to Exercises</a>