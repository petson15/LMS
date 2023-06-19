<?php  
include_once('../dbconfig/config.php');
$page = 1;
if (isset($_GET['page'])) {
	// code...
	$page = $_GET['page'];
}
else
{
	$page = 1;
}
$start_from =0;

$num_per_page = 12;
$start_from = ($page-1)*12;




$sql = "SELECT DISTINCT order_id, order_date, servedby, paymethod, total, telephone, customer
        FROM orderitems
        GROUP BY order_id DESC
        LIMIT $start_from, $num_per_page";
$res = mysqli_query($conn, $sql);

if (!$res) {
    echo  mysqli_error($conn);
}





?>



<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="website icon" type="png" href="../avatars/logobs.png">
	<link rel="stylesheet" type="text/css" href="../bootstrap/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="../fonts/all.css">
	<title>LMS || My Orders</title>

	<style type="text/css">
		
			.table
		{
			max-width: 80%;
			margin: 20px auto;
			
		}

		.table thead
   		{
   			background-color: #515448;
   			color: white;
   			font-size: 13px;

   		}
   		.btn
   		{
   			position: relative;
   			left: 180px;
   			margin: 2px;
   			bottom: 34px;
   		}



	</style>



</head>
<body>

	<?php include_once('../includes/navbar.php') ?>


	<table class="table table-bordered fw-semilight my-5">

  <thead>
    <tr>
      <th scope="col">OrderID</th>
      <th scope="col">Customer</th>
      <th scope="col">Telephone</th>
      <th scope="col">Payment method</th>
      <th scope="col">Total</th>
      <th scope="col">Order date</th>
      <th scope="col">Served by</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  	<?php 

  		while ($row = mysqli_fetch_assoc($res)) {
  			// code...
  			

  	 ?>
    <tr>
      <td><?php echo $row['order_id'] ?></td>
      <td><?php echo $row['customer'] ?></td>
      <td><?php echo $row['telephone'] ?></td>
      <td><?php echo $row['paymethod'] ?></td>
      <td><?php echo $row['total'] ?></td>
      <td><?php echo $row['order_date'] ?></td>
      <td><?php echo $row['servedby'] ?></td>
      <td ><a href="orders.php?id=<?php //echo $rows['id']; ?>"><i title = "print" class="fa-solid fa-eye ms-4 text-primary"></i></a></td>
    </tr>
  </tbody>
<?php } ?>

	

</table>
<?php  

	$sql = "SELECT * FROM orderitems";
	$res = mysqli_query($conn, $sql);

	$total_rows = mysqli_num_rows($res);
	$total_pages = ceil($total_rows/$num_per_page);

	if ($page > 1) {
		// code...
		echo "<a class='btn-sm btn btn-primary text-primary bg-light' href='orders.php?page=".($page-1)."'>Previous</a>";

	}


	for ($i=1; $i <=$total_pages ; $i++) { 
		// code...
		echo "<a class='btn-sm btn btn-primary text-primary bg-light' href='orders.php?page=$i'>$i</a>";

	}

	if ($i > $page) {
		// code...
		echo "<a class='btn btn-sm btn-primary text-primary bg-light' href='orders.php?page=".($page+1)."'>Next</a>";

	}

?>



</body>
</html>