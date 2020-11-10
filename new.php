<html>
    <head>
        <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="new.css">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css" >
        
        <body>
            <div class="navbar">
                <h1>BingeTv</h1>
                <h4>Newly Released</h4>
                <a href="home.php"><h5>Back To Home</h5></a>
            </div>

            <div class="menu2">

                <a href=""><i class="fa fa-search"></i></a>
                
                <a href=""><i class="fa fa-bell"></i></a>
                <a href="login.html">Log-Out</a>
            </div>
            
               
	<div class="container mt-3 mb-3">
	
		
				
				<
		<div class="row">
				<?php
				include("db.php");
					
				$q = "SELECT * FROM upload";

				$query = mysqli_query($conn,$q);
				
				while($row=mysqli_fetch_array($query)) { 

					$name = $row['name'];
					?>

					<div class="col-md-4">
						<video width="100%" controls>
                  <source src="<?php echo 'upload/'.$name;?>">
                </video>
					</div>

				<?php }
            ?>
</div>
				</div>
    
            
        </body>
    </head>
</html>