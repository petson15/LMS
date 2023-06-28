<?php  
	
	include_once('../dbconfig/config.php');


	$error_message = "";
	$success_message = "";





?>







<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>LMS || Change Password</title>
	<link rel="website icon" type="png" href="../avatars/logobs.png">


    <style type="text/css">
  
    form {
        max-width: 70%;
        margin: 20px auto;
   
    }

    .center-button {
        text-align: center; 
        margin-top: 20px; 
    }


 	

    </style>


</head>
<body>


	<?php include_once('../includes/navbar.php'); ?>

	<?php  

		$username = $_SESSION['user'];

	$sql = "SELECT * FROM admin WHERE username = '$username'";

	$res = mysqli_query($conn, $sql);

	if (!$res) {
		// code...
		echo "error in sql" . mysqli_error($conn);
	}

	$row = mysqli_fetch_assoc($res);

	$currentPassword = $row['password'];
	$id = $row['id'];

	if (isset($_POST['change'])) {
		// code...
		$passwordcurrent = mysqli_real_escape_string($conn, $_POST['currentPassword']);
		$newPassword = mysqli_real_escape_string($conn, $_POST['newPassword']);
		$confirmPasssword = mysqli_real_escape_string($conn, $_POST['confirmPassword']);

		if ($currentPassword != $passwordcurrent) {
			// code...
			$error_message = "Currrent Password do not Match";
		}
		else if ($newPassword != $confirmPasssword) {
			// code...
			$error_message = "New Password and Confirm Password do not Match";
		}
		else
		{
			$sql = "UPDATE admin SET password = '$newPassword' WHERE id = '$id'";
			$res = mysqli_query($conn, $sql);

			if (!$res) {
				// code...
				echo "error in sql" . mysqli_error($conn);
			}

			$success_message = "Password Updated Succesfully";
		}
	}







	?>



	<div class="container mb-5"><h4 style=" margin:30px; color: grey; margin-left: 1px;">Change Password</h4></div>

	<div style="padding-left: 200px;" class="text-danger "><?php echo $error_message; ?></div>
	<div style="padding-left: 200px;" class="text-info "><?php echo $success_message; ?></div>

	<div class="container my-4">
    <form method="POST" action="change-password.php" class="my-5">
        <label for="currentPassword">
            enter current password:</label>
        <input type="password" name="currentPassword" class="form-control my-2">

        <label for="newPassword">
            enter new password:</label>
        <input type="password" name="newPassword" class="form-control my-2">

        <label for="confirmPassword">
            confirm new password:</label>
        <input type="password" name="confirmPassword" class="form-control my-2">

        <div class="center-button"> 
            <button class="btn btn-primary btn-md my-4" type="submit" name="change">
                Update changes
            </button>
        </div>
    </form>
</div>







</body>
</html>