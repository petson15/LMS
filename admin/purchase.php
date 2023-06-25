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


$num_per_page = 12;
$start_from = ($page - 1) * $num_per_page;





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
   		.link-btn
   		{
   			position: relative;
   			left: 180px;
   			margin: 2px;
   			bottom: 34px;
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

  	$sql = "SELECT DISTINCT dates, supplier, invoice, loggedby,purchase_date, SUM(unitprice*quantity) AS total FROM purchases GROUP BY dates  LIMIT $start_from, $num_per_page";
  	$res = mysqli_query($conn, $sql);

  	$total_rows_sql = "SELECT COUNT(DISTINCT purchase_date) AS total FROM purchases";
$total_rows_result = mysqli_query($conn, $total_rows_sql);
$total_rows_row = mysqli_fetch_assoc($total_rows_result);
$total_rows = $total_rows_row['total'];
$total_pages = ceil($total_rows/$num_per_page);

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
      <td>GHC <?php echo $row['total'] ?></td>
      <td><?php echo  $row['dates']; ?></td>
      <td><?php echo  $row['loggedby']; ?></td>
      <td><?php echo  $row['purchase_date']; ?></td>
    </tr>
  <?php } ?>
  </tbody>
</table>

</div>

<?php  


	if ($page > 1) {
		// code...
		echo "<a class='btn-sm link-btn btn btn-primary text-primary bg-light' href='purchase.php?page=".($page-1)."'>Previous</a>";

	}


	for ($i=1; $i <=$total_pages ; $i++) { 
		// code...
		echo "<a class='btn-sm btn link-btn btn-primary text-primary bg-light' href='purchase.php?page=$i'>$i</a>";

	}

	if ($page < $total_pages) {
		// code...
		echo "<a class='btn btn-sm link-btn btn-primary text-primary bg-light' href='purchase.php?page=".($page+1)."'>Next</a>";

	}



?>



</body>
</html>