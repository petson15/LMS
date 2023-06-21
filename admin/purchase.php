<?php  

	include_once('../dbconfig/config.php');



?>



<!DOCTYPE html>
<html> 
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title> LMS || Purchase</title>
	<link rel="website icon" type="png" href="../avatars/logobs.png">
	<link rel="stylesheet" type="text/css" href="../bootstrap/bootstrap.css">


	<style type="text/css">
		
		.table
		{
			max-width: 80%;
			margin: 20px auto;
			
		}
		.add-btn
		{
			background-color: blueviolet;
			position: relative;
			float: right;
			right: 160px;
			top: 25px;
			width: 100px;
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


	<?php include_once('../includes/navbar.php'); ?>

	<a href="add-purchase.php" ><button class="btn btn-md add-btn text-white" style="background-color: blueviolet;">Add</button></a>
	<div class="py-4">
	<table class="table table-bordered fw-semilight my-5">

  <thead>
    <tr>
      <th scope="col">Supplier</th>
      <th scope="col">Invoice number</th>
      <th scope="col">Total Amount</th>
      <th scope="col">Date</th>
      <th scope="col">Logged by</th>
      <th scope="col">Time logged</th>
    </tr>
  </thead>
  <?php  

  	$sql = "SELECT DISTINCT dates, supplier, invoice, loggedby,purchase_date FROM purchases GROUP BY dates";
  	$res = mysqli_query($conn, $sql);

  	if (!$res) {
  		// code...

  		echo "errror in sql " . mysqli_error($conn);
  	}


  ?>
  <tbody>
  	<?php  
  			while ($row = mysqli_fetch_assoc($res)) {
  				// code...
  			

  	?>
    <tr>
      <td><?php echo  $row['supplier']; ?></td>
      <td><?php echo  $row['invoice']; ?></td>
      <td>GHC 600</td>
      <td><?php echo  $row['dates']; ?></td>
      <td><?php echo  $row['loggedby']; ?></td>
      <td><?php echo  $row['purchase_date']; ?></td>
    </tr>
  <?php } ?>
  </tbody>
</table>

</div>





</body>
</html>