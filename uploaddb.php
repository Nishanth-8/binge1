<?php
$conn = mysqli_connect("localhost","root","","mine");
if(!$conn){
    die("connection failed!");
}
else{
    echo"succes";
}
?>