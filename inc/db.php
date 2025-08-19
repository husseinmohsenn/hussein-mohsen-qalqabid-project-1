<?php 
$conn = mysqli_connect('localhost', 'root', 'root', 'php');

if(!$conn){
    echo 'Error: ' . mysqli_connect_error();
}

?>