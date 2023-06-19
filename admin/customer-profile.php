<?php 
	
	include_once('../dbconfig/config.php');
	



 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title> LMS || customer-profile</title>
	<link rel="website icon" type="png" href="../avatars/logobs.png">
	<link rel="stylesheet" type="text/css" href="../bootstrap/bootstrap.css">



	<style type="text/css">
			
		body 
		{
			font-family: sans-serif;
			font-size: 14px;
			margin: 0;
			padding: 0;
		}

		.table thead
   		{
   			background-color: #515448;
   			color: white;
   			font-size: 13px;

   		}



	</style>

</head>
<body>

	<?php  include_once('../includes/navbar.php');


	$customerID = $_SESSION['customer_id'];

	$sql = "SELECT * FROM orderitems WHERE id = '$customerID'";
	$res = mysqli_query($conn, $sql);

	if (!$res) {
		// code...
		echo "error in sql" . mysqli_error($conn);
	}

	$row = mysqli_fetch_assoc($res);

	$visit_count = mysqli_num_rows($res);


	?>

	<div class="container"><h4 style=" margin:30px; color: grey; margin-left: 1px;">Customer Profile</h4></div>

	<div class="container">
		
		<h5>Customer Name: <?php echo $row['customer']; ?></h5>
		<h5>Customer Tel: <?php echo $row['telephone']; ?></h5>
		<h5>Sex: <?php echo $row['sex'] ?></h5>
		<h5>Recent visit: <?php echo $row['order_date']; ?></h5>
		<h5>Frequency of viists: <?php echo $visit_count; ?></h5>
		<h5>Average spending: GHC 4000</h5>
		<h5>Total spending: GHC 4000</h5>		


		<h6 class="my-5">Summary of orders:</h6>

		<table class="table table-bordered fw-semilight ms-1 tab-1">
  <thead>
    <tr>
      <th scope="col">Order id</th>
      <th scope="col">Date</th>
      <th scope="col">Items</th>
      <th scope="col">Total Amount</th>
      <th scope="col">Pick up date</th>

    </tr>
  </thead>
  <tbody >
    <tr >
      <td>qwsa42ea23</td>
      <td>12:00 23/23/21</td>
      <td>caftan, singlet, boxers, pants, curtains</td>
      <td>GHC 2000</td>
      <td>23:12 23/23/23</td>
    </tr>
    <tr>
      <td>qwsa42ea23</td>
      <td>12:00 23/23/21</td>
      <td>caftan, singlet, boxers, pants, curtains</td>
      <td>GHC 2000</td>
      <td>23:12 23/23/23</td>
    </tr>
    <tr>
      <td>qwsa42ea23</td>
      <td>12:00 23/23/21</td>
      <td>caftan, singlet, boxers, pants, curtains</td>
      <td>ghc 2000</td>
      <td>23:12 23/23/23</td>
    </tr>
  </tbody>
</table>



	</div>

</body>
</html>