<?php  

		include_once('./dbconfig/config.php');


?>



 


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>LMS || Order details</title>
	<link rel="website icon" type="png" href="./avatars/logobs.png">
	<link rel="stylesheet" type="text/css" href="./bootstrap/bootstrap.css">

	<style type="text/css">
			
		.table thead
   		{
   			background-color: #515448;
   			color: white;
   			font-size: 13px;

   		}
   		a .btnPrint
   		{
 		 background-color: blueviolet;
		}

	



	</style>


</head>
<body>

	<?php
	include_once('navbar.php');
	$id = $_SESSION['orderID']; 

	$query = "SELECT DISTINCT order_id,customer,price,order_date,paymethod,telephone,servedby,total FROM orderitems WHERE id ='$id' ";
	$result = mysqli_query($conn, $query);

	if (!$result) {
		// code...
		echo "error in sql". mysqli_error($conn);
	}

	$fetch = mysqli_fetch_assoc($result);
	$invoiceID = $fetch['order_id'];

	?>


	<div class="container my-5">
		<a href="order-details.php?id=<?php echo $id; ?>"><button class="btn btn-md btn-secondary btnPrint text-white" type="button" style="float: right;">Print</button></a>
		<h6>Customer Name: <b><?php echo $fetch['customer']; ?></b></h6>
		<h6>Customer Tel: <b><?php echo $fetch['telephone']; ?></b></h6>
		<h6>Payment Method: <b><?php echo $fetch['paymethod']; ?></b></h6>
		<h6>Invoice ID: <b><?php echo $fetch['order_id'] ?></b></h6>
		<h6>Order Date: <b><?php echo $fetch['order_date']; ?></b></h6>
		<h6>Served By: <b><?php echo $fetch['servedby']; ?></b></h6>
		<h6>Total: <b><?php echo $fetch['total']; ?></b></h6>

	<table class="table table-bordered fw-semilight my-5">

  <thead>
    <tr>
      <th scope="col">Item ID #</th>
      <th scope="col">Items</th>
      <th scope="col">Price</th>
    </tr>
  </thead>
  <tbody>
  	<?php 

  		$query = "SELECT item,price,order_id FROM orderitems WHERE order_id = '$invoiceID' ";
  		$result = mysqli_query($conn,$query);

  		while ($row = mysqli_fetch_assoc($result)) {
  			// code...


  	 ?>
    <tr>
      <td><?php echo $row['order_id'] ?></td>
      <td><?php echo $row['item'] ?></td>
      <td>GHC <?php echo $row['price'] ?></td>
    </tr>
    <?php } ?>
  </tbody>

<?php  

	if (isset($_GET['id'])) {
		// code...
		$_SESSION['uniqueID'] = $_GET['id'];

		echo "<script>window.location.href='receipt.php'</script>";
	}



?>


	</div>

</body>
</html>