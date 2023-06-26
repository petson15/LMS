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
$start_from = ($page - 1) * 12;

$searchValue = '';
if (isset($_GET['search'])) {
    $searchValue = $_GET['search'];
}


$sql = "SELECT DISTINCT order_id, order_date, servedby,id, paymethod, total, telephone, customer,initialPayment
        FROM orderitems WHERE customer LIKE '%$searchValue%' OR telephone LIKE '%$searchValue%' OR paymethod LIKE '%$searchValue%' OR order_id LIKE '%$searchValue%' 
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
	<title>LMS || All orders</title>
	<link rel="website icon" type="png" href="../avatars/logobs.png">
	<link rel="stylesheet" type="text/css" href="../bootstrap/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="../fonts/all.css">

	<style type="text/css">
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

   		 #searchInput 
   		 {
            float: right;
            display: flex;
            position: relative;
            top: -5px;
            right: 20px;
            outline: none;
        }

	</style>

</head>
<body>


	<?php include_once('../includes/navbar.php'); 


$total_rows_sql = "SELECT COUNT(DISTINCT order_id) AS total FROM orderitems WHERE customer LIKE '%$searchValue%' OR telephone LIKE '%$searchValue%' OR paymethod LIKE '%$searchValue%' OR order_id LIKE '%$searchValue%' ";
$total_rows_result = mysqli_query($conn, $total_rows_sql);
$total_rows_row = mysqli_fetch_assoc($total_rows_result);
$total_rows = $total_rows_row['total'];
$total_pages = ceil($total_rows/$num_per_page);

	?>

	<div class="container"><h4 style=" margin:30px; color: grey; margin-left: 1px;">Order Management</h4></div>

	<div class="container">
		<input type="text" name="search" class="search" placeholder="Search" id="searchInput" value="<?php echo $searchValue; ?>" onkeyup="startSearchTimer()">
		<table class="table table-bordered fw-semilight my-5">

  <thead>
    <tr>
      <th scope="col">OrderID</th>
      <th scope="col">Customer</th>
      <th scope="col">Telephone</th>
      <th scope="col">Payment method</th>
      <th scope="col">Total</th>
       <th scope="col">Initial payment</th>
      <th scope="col">Amount Due</th>
      <th scope="col">Order date</th>
      <th scope="col">Served by</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  	<?php  
  		while ($rows = mysqli_fetch_assoc($res)) {
  			// code...
  	
		?>

    <tr>
      <td><?php echo $rows['order_id']; ?> </td>
      <td><?php echo $rows['customer']; ?> </td>
      <td><?php echo $rows['telephone']; ?> </td>
      <td><?php echo $rows['paymethod']; ?> </td>
      <td>GHC <?php echo $rows['total']; ?>  </td>
      <td>GHC <?php echo $rows['initialPayment'] ?></td>
      <td>GHC <?php echo $rows['total'] - $rows['initialPayment'] ?></td>
      <td><?php echo $rows['order_date']; ?>  </td>
      <td><?php echo $rows['servedby']; ?>  </td>
      <td ><a href="orders.php?id=<?php echo $rows['id']; ?>"><i title = "print" class="fa-solid fa-eye ms-3 text-primary"></i></a></td>
    </tr>
  </tbody>	
<?php } ?>

</table>
		
	</div>


	<?php  


	if ($page > 1) {
		// code...
		echo "<a class='btn-sm btn btn-primary text-primary bg-light' href='all-orders.php?page=".($page-1)."'>Previous</a>";

	}


	for ($i=1; $i <=$total_pages ; $i++) { 
		// code...
		echo "<a class='btn-sm btn btn-primary text-primary bg-light' href='all-orders.php?page=$i'>$i</a>";

	}

	if ($page < $total_pages) {
		// code...
		echo "<a class='btn btn-sm btn-primary text-primary bg-light' href='all-orders.php?page=".($page+1)."'>Next</a>";

	}


	if (isset($_GET['id'])) {
		// code...
		$_SESSION['orderID'] = $_GET['id'];

		echo "<script>window.location.href='order-details.php'</script>";
	}

?>


 <script type="text/javascript">
             var searchTimer;

        function startSearchTimer() {
            clearTimeout(searchTimer);
            searchTimer = setTimeout(performSearch, 500); // Adjust the delay here (in milliseconds)
        }

        function performSearch() {
            var searchValue = document.getElementById('searchInput').value;
            window.location.href = 'all-orders.php?search=' + encodeURIComponent(searchValue);
        }
    </script>

</body>
</html>