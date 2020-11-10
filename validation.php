<?php

session_start();

$con=mysqli_connect('localhost','root','');

mysqli_select_db($con,'mine');

$Email = $_POST['Email'];
$Password = $_POST['Password'];

$s = "select * from register where Email='$Email' && Password='$Password'";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if($num==1)
{
    $_SESSION['Email']=$Email;
    header('location:home.php');
}
else
{
       echo"login failed";
}


?>