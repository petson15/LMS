<?php  


  include_once('../dbconfig/config.php');

 

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>LMS || Dashboard</title>
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

		.date 
		{
			padding: 10px;
		}

		#form
		{
			 width: 150px; 
			 margin: 5px; padding: 5px; 
			 border: 1px solid white; 
			 background-color:#fafafa ; 
			 height: 35px; 
			 outline: none;
		}

		.item-count 
		{
     		 max-width: 375px;
    		  height: 90px;
     		 background-color: #515448;
     		 border-radius: 5px;
         margin: 20px auto;

     		
   		 }
   		 .item-count p
   		 {
   		 	margin-bottom: 5px;
   		 	position: relative; 
   		 	top: 12px;
   		 }
   		 .item-count i
   		 {
   		 	padding-top: 18px;
   		 }
   		 .dash-info
   		 {
   		 	position: relative;
   		 	display: flex;
   		 	max-width: 100%;
   		 	z-index: -1;
   		 }
   		 .first-col 
   		 {
   		 	flex: 20%;
   		 }

   		.table 
   		{
   			max-width: 45%;
   		}
   		.table thead
   		{
   			background-color: #515448;
   			color: white;
   			font-size: 13px;

   		}

   		.tab
   		{
   			display: flex;
   		}

	</style>




</head>
<body>

	<?php include_once('../includes/navbar.php'); 

     if ($_SESSION['admin'] != 'true') {
    // code...
    session_destroy();
    echo "<script>window.location.href='../login/login.php'</script>";
  }

  ?>

	<div class=" ms-5">
    <form class="my-3" action="dashboard.php" method="post">
      <h5 style=" margin:30px;">Dashboard Report</h5>
      <div style=" margin:30px;">
        <label for="form" class="date">Start date: </label>
        <input type="date" name  id="form">

        <label for="end" class="date">End date: </label>
        <input type="date" name id="form">
        <button class="btn btn-md btn-primary fw-semilight" type="submit">Get Report</button>
    </form>
</div>

<?php  

  $currentDate = date('Y-m-d');
  $item_count = "SELECT COUNT(item) AS item_count FROM orderitems WHERE DATE(order_date) = '$currentDate' ";
  $count_result = mysqli_query($conn, $item_count);

  if (!$count_result) {
    // code...
    echo "error in sql" . mysqli_error($conn);
  }

  $counts = mysqli_fetch_assoc($count_result);

?>
		
	<div class="dash-info">
	 <div class="item-count my-3 ms-5 me-5 first-col">
      <div>
        <i class="fa-solid fa-cart-shopping fa-lg d-flex justify-content-center text-white"></i>
        <p class="text-white d-flex justify-content-center"><?php echo $counts['item_count']; ?></p>
        <p class="text-white d-flex justify-content-center" >Item Count</p>
      </div>
    </div>
    <?php  
      $currentDate = date('Y-m-d');
      $sales_Sum = "SELECT SUM(price) AS sales_total FROM orderitems WHERE DATE(completed_date) = '$currentDate'";
      $sales_result = mysqli_query($conn, $sales_Sum);

      if (!$sales_result) {
        // code...
        echo "error in sql" . mysqli_error($conn);
      }

      $salesTotal = mysqli_fetch_assoc($sales_result);


    ?>

    <div class="item-count my-3 ms-5  first-col">
      <div>
        <i class="fa-solid fa-money-bill-trend-up fa-lg d-flex justify-content-center text-white"></i>
        <p class="text-white d-flex justify-content-center">GHC <?php echo $salesTotal['sales_total']; ?></p>
        <p class="text-white d-flex justify-content-center" >Total sales daily</p>
      </div>


       <?php  

    $customer_count = "SELECT COUNT(DISTINCT telephone) AS total_customers FROM orderitems";
    $customer_result = mysqli_query($conn, $customer_count);

    if (!$customer_result) {
      // code...
      echo "errror in sql". mysqli_error($conn);
    }

    $total_customers = mysqli_fetch_assoc($customer_result);



 ?>


    </div>
     <div class="item-count my-3 ms-4 first-col">
      <div>
        <i class="fa-solid fa-user-group fa-lg d-flex justify-content-center text-white"></i>
        <p class="text-white d-flex justify-content-center"><?php  echo $total_customers['total_customers']; ?></p>
        <p class="text-white d-flex justify-content-center" >Customers</p>
      </div>
    </div>
 </div>

 <?php  

  $pending_sales = "SELECT SUM(price) AS pending_total FROM orderitems WHERE completed =0 ";
  $pending_sales_result = mysqli_query($conn, $pending_sales);

  if (!$pending_sales_result) {
    // code...
    echo "error in sql" . mysqli_error($conn);
  }

  $pending_sales = mysqli_fetch_assoc($pending_sales_result); 



 ?>


  <div class="dash-info">
   <div class="item-count my-3 ms-5 me-5 first-col">
      <div>
      <i class="fa-solid fa-money-bill-trend-up fa-lg d-flex justify-content-center text-white"></i>
        <p class="text-white d-flex justify-content-center ">GHC <?php echo $pending_sales['pending_total']; ?></p>
        <p class="text-white d-flex justify-content-center " >Total pending orders</p>
      </div>
    </div>
     <?php  

  $completed = "SELECT SUM(price) AS completed_total FROM orderitems WHERE completed =1 ";
  $completed_sales_result = mysqli_query($conn, $completed);

  if (!$completed_sales_result) {
    // code...
    echo "error in sql" . mysqli_error($conn);
  }

  $completed_sales = mysqli_fetch_assoc($completed_sales_result); 



 ?>

    <div class="item-count my-3 ms-5  first-col">
      <div>
        <i class="fa-solid fa-money-bill-trend-up fa-lg d-flex justify-content-center text-white"></i>
        <p class="text-white d-flex justify-content-center">GHC <?php echo $completed_sales['completed_total']; ?></p>
        <p class="text-white d-flex justify-content-center" >Total completed orders</p>
      </div>
    </div>
     <div class="item-count my-3 ms-4 first-col">
      <div>
        <i class="fa-solid fa-money-bill-trend-up fa-lg d-flex justify-content-center text-white"></i>
        <p class="text-white d-flex justify-content-center"><?php echo $completed_sales['completed_total'] + $pending_sales['pending_total'] ; ?></p>
        <p class="text-white d-flex justify-content-center" >Overall total sales</p>
      </div>
    </div>
 </div>

 	<div class="my-5 tab">

 		<table class="table table-bordered fw-semilight ms-3 tab-1">
  <thead>
       <tr>
      <th colspan="3">Highest order item by Quantity</th>
    </tr>
    <tr>
      <th scope="col">Item</th>
      <th scope="col">Quantity</th>
      <th scope="col">Amount</th>
    </tr>
  </thead>

    <?php  
                  

       $sql = "SELECT item, price, SUM(quantity) AS total_quantity, price * SUM(quantity) AS amount
        FROM orderitems
        WHERE DATE(order_date) = '$currentDate'
        GROUP BY item
        ORDER BY amount DESC";


                        $result = mysqli_query($conn, $sql);
                        if (!$result) {
                          // code...
                          echo "error in sql" . mysqli_error($conn);
                        }

                        while ($row = mysqli_fetch_assoc($result)) {

                ?>
  <tbody>
    <tr>
      <td><?php echo $row['item']; ?></td>
      <td><?php echo $row['total_quantity']; ?></td>
      <td><?php echo $row['amount']; ?></td>
    </tr>
  </tbody>
<?php } ?>
</table>



		<table class="table table-bordered fw-semilight ms-5 tab-2">
  <thead>
    <tr>
      <th colspan="3">Highest order item by price</th>
    </tr>
    <tr>
      <th scope="col">item</th>
      <th scope="col">price</th>
      <th scope="col">quantity</th>
    </tr>
  </thead>
  <tbody>
     <?php  

              $sql = "SELECT item,price,quantity
                        FROM orderitems WHERE date(dates) = '$currentDate'
                        GROUP BY item
                        ORDER BY price DESC ";


                        $result = mysqli_query($conn, $sql);

                        if (!$result) {
                          // code...
                          echo "error in sql" . mysqli_error($conn);
                        }

                        while ($row = mysqli_fetch_assoc($result)) {

            ?>

    <tr>
      <td><?php echo $row['item']; ?></td>
      <td><?php echo $row['price']; ?></td>
      <td><?php echo $row['quantity']; ?></td>
    </tr>
  </tbody>
<?php } ?>
</table>
	

 	</div>






<?php include_once('../includes/footer.php'); ?>
</body>
</html>