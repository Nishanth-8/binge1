<html>
<head>
<title>search</title>
<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="home.css">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css" >
</head>
<body>


<div class="navbar">
                <h1>BingeTv</h1>
                <h4>Movies</h4>
                <a href="home.php"><h5>Back To Home</h5></a>
            </div>

<?php
    
$search = $_POST['search'];

session_start();

$conn=mysqli_connect('localhost','root','');

mysqli_select_db($conn,'mine');
					

if($conn->connect_error){
    die("failed".$conn->connect_error);
}

$sql = "select * from upload where name like '%$search%'";

$result = $conn->query($sql);


if ($result->num_rows > 0){

while($row = $result->fetch_assoc()) { 
    $name = "upload/".$row['name'];
    echo $row["name"];
?>
    <video width="100%" class="vid" controls>
    <source src="<?php echo $name;?>">
    </video>

<?php

}
}


$conn->close();

?>
</body>
</html>
 
     
