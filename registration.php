<?php
session_start();
$con=mysqli_connect('localhost','root','','mine')or die("can't connect database");
$username=$_POST['username'];
$Password=$_POST['Password'];
$Email=$_POST['Email'];
$number=$_POST['number'];
$street=$_POST['street'];
$city=$_POST['city'];
$state=$_POST['state'];
$pincode=$_POST['pincode'];
$plan=$_POST['plan'];


$s="select * from register where username='$username'";

$result=mysqli_query($con,$s)or die("can't fetch");
$num=mysqli_num_rows($result);
if ($num>0)
{
    echo("<script>alert('Something Went Wrong,Try Again!');
          window.location.href = 'signup.html';</script>");

}
else{

    $insert="insert into register (username,Password,Email,number,street,city,state,pincode,plan) values('$username','$Password','$Email','$number','$street','$city','$state','$pincode','$plan') " ;
    mysqli_query($con,$insert)or die('can not');
    echo("<script>alert('Your account has been created');
          window.location.href = 'home.php';</script>");
  
}