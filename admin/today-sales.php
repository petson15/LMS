<?php  

include_once('../dbconfig/config.php');


?>



<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>LMS || Today sales</title>
	<link rel="website icon" type="png" href="../avatars/logobs.png">
	<link rel="stylesheet" type="text/css" href="../bootstrap/bootstrap.css">
	<style type="text/css">
		

		.table 
   		{
   			max-width: 75%;
   			margin-left: 20px;

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

	<?php include_once('../includes/navbar.php') ?>

	<div class="container"><h4 style=" margin:30px; color: grey; margin-left: 1px;">Today sales</h4></div>

	<div class="container me-5">
		<table class="table table-bordered fw-semilight ms-1 tab-1 ms-5 me-1">
  <thead>
    <tr>
      <th scope="col">Employee</th>
      <th scope="col">completed sales</th>
      <th scope="col">Total</th>
      

    </tr>
  </thead>
  <tbody >
  	<?php  

  	$currentDate = date('Y-m-d');
      $query = "SELECT servedby,initialPayment,
                 SUM(DISTINCT Amount_due) AS total_sum
          FROM orderitems
          WHERE DATE(completed_date) = '$currentDate' AND completed = 1
          GROUP BY servedby";
  	//$sql = "SELECT DISTINCT servedby, SUM(price) AS total FROM orderitems WHERE completed = 1 AND DATE(completed_date) = '$currentDate' GROUP BY servedby";
  	$res = mysqli_query($conn, $query);

  	if (!$res) {
  		// code...
  		echo "error in sql" . mysqli_error($conn);
  	}

  	while ($row = mysqli_fetch_assoc($res)) {
  		// code...
  	
  
  	?>
    <tr >
      <td><?php echo $row['servedby'] ?></td>
      <td><?php echo  $row['total_sum'] ?></td>
      <td><?php echo  $row['total_sum'] ?></td>

    </tr>
        <?php } ?>
  </tbody>

</table>



<table class="table table-bordered fw-semilight ms-1 tab-1 ms-5 me-1">
  <thead>
    <tr>
      <th scope="col">Employee</th>
      <th scope="col">initial sales received</th>
      <th scope="col">Total</th>
      

    </tr>
  </thead>
  <tbody >
    <?php  

    $currentDate = date('Y-m-d');
      $query = "SELECT DISTINCT initialPayment,servedby,order_id,
                 SUM(DISTINCT initialPayment) AS initial_sum
          FROM orderitems
          WHERE DATE(order_date) = '$currentDate'
          GROUP BY servedby";
    //$sql = "SELECT DISTINCT servedby, SUM(price) AS total FROM orderitems WHERE completed = 1 AND DATE(completed_date) = '$currentDate' GROUP BY servedby";
    $res = mysqli_query($conn, $query);

    if (!$res) {
      // code...
      echo "error in sql" . mysqli_error($conn);
    }

    while ($row = mysqli_fetch_assoc($res)) {
      // code...
    
  
    ?>
    <tr >
      <td><?php echo $row['servedby'] ?></td>
      <td>GHC <?php echo  $row['initial_sum'] ?></td>
      <td>GHC <?php echo  $row['initial_sum'] ?></td>

    </tr>
        <?php } ?>
  </tbody>

</table>
</div>

</body>
</html>