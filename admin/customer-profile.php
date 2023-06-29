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
    <link rel="stylesheet" type="text/css" href="../fonts/all.css">



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

	$sql = "SELECT * FROM orderitems WHERE id = '$customerID' GROUP BY order_date DESC";
	$res = mysqli_query($conn, $sql);

	if (!$res) {
		// code...
		echo "error in sql" . mysqli_error($conn);
	}

	$row = mysqli_fetch_assoc($res);



	$telephone = $row['telephone'];

	$query = "SELECT AVG(price) AS average_spending FROM orderitems WHERE telephone = '$telephone'";

	$result = mysqli_query($conn, $query);

	if (!$result) {
		// code...
		echo "error in sql".mysqli_error($conn);
	}

	$fetch = mysqli_fetch_assoc($result);

	$total_spending  = "SELECT SUM(price) AS total_spending FROM orderitems WHERE telephone ='$telephone'";
	$total_spending_result = mysqli_query($conn, $total_spending);

	if (!$total_spending_result) {
		// code...
		echo "error in sql" . mysqli_error($conn);
	}

	$total_spending_row = mysqli_fetch_assoc($total_spending_result);
	

		$visit_query = "SELECT telephone,order_id FROM orderitems WHERE telephone = '$telephone' GROUP BY order_id";
		$visit_Result = mysqli_query($conn, $visit_query);

		$visit_count = mysqli_num_rows($visit_Result);

		$output = "";
		$output .= ' <i class="fa-solid fa-star fa-beat text-warning"></i>';
	
	?>

	<div class="container"><h4 style=" margin:30px; color: grey; margin-left: 1px;">Customer Profile</h4></div>

	<div class="container">
		
<h6>Customer Name: <b><?php echo $row['customer']; ?></b></h6>
		<h6>Customer Tel: <b><?php echo $row['telephone']; ?></b></h6>
		<h6>Sex: <b><?php echo $row['sex'] ?></b></h6>
		<h6>Recent visit: <b><?php echo $row['order_date']; ?></b></h6>
		<h6>Frequency of viists: <b><?php echo $visit_count; ?></b></h6>
		<h6>Average spending: <b><?php echo  $fetch['average_spending'];?></b></h6>
		<h6>Total spending: <b><?php echo $total_spending_row['total_spending']; ?></b></h6>
		<h6>Rating <?php
    $star_count = floor($visit_count / 10);
    for ($i = 0; $i < $star_count; $i++) {
        echo $output; 
    }
    ?></h6>

		



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
  	<?php  

  		$query = "SELECT telephone, order_id, total, order_date, completed_date, GROUP_CONCAT(item SEPARATOR ', ') AS items FROM orderitems WHERE telephone = '$telephone' GROUP BY order_id";

  		$result = mysqli_query($conn, $query);

  		while ($rows = mysqli_fetch_assoc($result)) {
  			// code...
  		

  	?>
    <tr >
      <td><?php echo $rows['order_id']; ?></td>
      <td><?php echo $rows['order_date']; ?></td>
      <td><?php echo $rows['items']; ?></td>
      <td><?php echo $rows['total']; ?></td>
      <td><?php echo $rows['completed_date']; ?></td>
    </tr>
<?php } ?>
  </tbody>

</table>



	</div>





</body>
</html>