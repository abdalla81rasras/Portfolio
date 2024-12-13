<?php 

$conn = mysqli_connect("localhost" , "root" , "" , "satner");

if(!$conn){
    die("Error connection !" . mysqli_connect_error($conn));
}

?>