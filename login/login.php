<?php  

	session_start();
	

	include_once('../dbconfig/config.php');

	$username = $password = "";
	$error = "";

	if (isset($_POST['login'])) {
		// sanitizing user inputs to prevent sql injection

		$username =  mysqli_real_escape_string($conn, $_POST['username']) ;
		$password = mysqli_real_escape_string($conn, $_POST['password']);

		//query to get user details from database
		$sql = "SELECT * FROM admin WHERE username = '$username' AND password = '$password'";
		$query = mysqli_query($conn, $sql);

			if (!$query) {
				// code...
				echo "error in sql". mysqli_connect_error($conn);
			}
		
		 if (mysqli_num_rows($query) == 1) {
          // code...
            $_SESSION['admin'] = 'true';
            

            while($rows = mysqli_fetch_assoc($query))
            {
              $user = $rows['username'];
              $_SESSION['user'] = $user;
            }


          header('Location: ../admin/dashboard.php');
      }
      else
      {
      	$error = "invalid credentials";
      }



	}
	




?>











<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>LMS || Login</title>

	<link rel="website icon" type="png" href="../avatars/logobs.png">
	<link rel="stylesheet" type="text/css" href="../styles/main.css">
	<link rel="stylesheet" type="text/css" href="../bootstrap/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="../fonts/all.css">


</head>
<body style="background-color: #f0f2f5;">


 <div id="landing_page">
 	<!---welcome message--->
 	<div id="message">
 		<h2>BURST CLEAN</h2>
 		<h6>"Elevate Your Laundry Experience: Convenient, Efficient, and Spotless!"</h6>
 	</div>
 	
 	<div id="login">
 		<!--login form-->
 		<form action="login.php" method="post">
      <div class="container">
      <div class="input-group flex-nowrap" id="finput">
       <span class="input-group-text bg-success" id="addon-wrapping"> <i class="fa-regular fa-envelope text-light"></i></span>
      <input type="text" class="form-control" placeholder=" enter username" aria-label="email" aria-describedby="addon-wrapping" name="username" required>
      </div>
        <small class="text-danger" style="margin-left: 110px;"><?php echo $error; ?></small>
      <div class="input-group flex-nowrap" id="sinput">
       <span class="input-group-text bg-warning" id="addon-wrapping"> <i class="fa-solid fa-key text-light"></i></span>
      <input type="password" class="form-control" placeholder=" password" aria-label="password" aria-describedby="addon-wrapping" name="password" required>
     </div>
     <div style=" position: relative; right: -50px; padding: 15px;">
     <button type="submit" class=" btn btn-primary" name="login"><i class="fa-solid fa-right-to-bracket"></i> login</button>
   
      <i class="fa-solid fa-lock text-primary" style=" margin-left: 20px;"></i><a href="" style="text-decoration: none;"> Forgot your password</a>
   </div>

    
</div>
</form>
     </div>

 	</div>

 </div>

 

</body>
</html>