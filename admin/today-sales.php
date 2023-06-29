<?php  

include_once('../dbconfig/config.php');

$previous_Balance = 0;
$Amount_remaining = 0;

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
        padding-top: 15px;
       }
       .dash-info
       {
        position: relative;
        display: flex;
        margin: 20px auto;
        max-width: 90%;
        z-index: -1;
       }
       .first-col 
       {
        flex: 20%;
       }
       .completebtn
       {
        text-align: center;
       }

	</style>
</head>
<body>

	<?php include_once('../includes/navbar.php') ?>

  <?php 
     $currentDate = date('Y-m-d');
    $sql = "SELECT DISTINCT purchase_date, SUM(unitprice*quantity) AS total FROM purchases WHERE DATE(purchase_date) = '$currentDate'";
    $res = mysqli_query($conn, $sql);

    if (!$res) {
      // code...
      echo "error in sql" . mysqli_error($conn);
    }

    $expenses_Total = mysqli_fetch_assoc($res);

     $previousDate = date('Y-m-d', strtotime('-1 day'));
              $sql = "SELECT previousAmount AS total FROM previousbalance WHERE DATE(Balance_date) = '$previousDate'";
              $res = mysqli_query($conn, $sql);

              $previous_Balance = mysqli_fetch_assoc($res);

              if (!$res) {
                // code...
                echo "error in sql" . mysqli_error($conn);
              }


   ?>

	<div class="container"><h4 style=" margin:30px; color: grey; margin-left: 1px;">Today sales</h4></div>

	<div class="dash-info ms-5">
   <div class="item-count my-3 ms-5 me- first-col">
      <div>
        <i class="fa-solid fa-hand-holding-dollar fa-lg d-flex pb-2 py-3 justify-content-center text-white"></i>
        <p class="text-white d-flex justify-content-center">GHC <?php echo $previous_Balance['total'] ?></p>
        <p class="text-white d-flex justify-content-center" >Previous Balance</p>
      </div>
    </div>
      <?php  
      $currentDate = date('Y-m-d');
      $sales_Sum = "SELECT SUM(DISTINCT Amount_due ) AS sales_total FROM orderitems WHERE DATE(completed_date) = '$currentDate' AND completed=1";
      $sales_result = mysqli_query($conn, $sales_Sum);

      if (!$sales_result) {
        // code...
        echo "error in sql" . mysqli_error($conn);
      }

      $daily_sales = mysqli_fetch_assoc($sales_result);
     


      $initial_Sum = "SELECT SUM(DISTINCT initialPayment) AS sales_total FROM orderitems WHERE DATE(order_date) = '$currentDate'";
      $initial_result = mysqli_query($conn, $initial_Sum);

      if (!$initial_Sum) {
        // code...
        echo "error in sql" . mysqli_error($conn);
      }

      $initial_sales = mysqli_fetch_assoc($initial_result);



    ?>

    <div class="item-count my-3 ms-5  first-col">
      <div>
        <i class="fa-solid fa-solid fa-hand-holding-dollar fa-lg d-flex pb-2 py-3 justify-content-center text-white"></i>
        <p class="text-white d-flex justify-content-center">GHC <?php echo $initial_sales['sales_total'] + $daily_sales['sales_total'] ?></p>
        <p class="text-white d-flex justify-content-center" >Total sales daily</p>
      </div>


    
    </div>
     <div class="item-count my-3 ms-4 first-col">
      <div>
        <i class="fa-solid fa-money-bill-trend-up fa-lg d-flex justify-content-center pb-2 py-3 text-white"></i>
        <?php  

              $Amount_remaining = ($initial_sales['sales_total'] + $daily_sales['sales_total'] ) - $expenses_Total['total'];



        ?>
        <p class="text-white d-flex justify-content-center">GHC <?php echo  $Amount_remaining + $previous_Balance['total'];?></p>
        <p class="text-white d-flex justify-content-center" >Amount remaining</p>
      </div>
    </div>

     <div class="item-count my-3 ms-4 first-col">
      <div>
        <i class="fa-solid fa-money-bill-trend-up fa-lg d-flex justify-content-center pb-2 py-3 text-white"></i>
        <p class="text-white d-flex justify-content-center">GHC <?php echo $expenses_Total['total'] ?></p>
        <p class="text-white d-flex justify-content-center" >Expenses</p>
      </div>
    </div>
 </div>
 <div class=" completebtn ">
  <form method="POST" action="today-sales.php">
   <button class="btn btn-md my-5 btn-primary btn-lg fw-semilight fw-semilight" type="submit" name="complete">Complete Daily sales</button>
 </form>
 </div>

</body>
</html>

  <?php  

    if (isset($_POST['complete'])) {
      // code...

      $sql = "INSERT INTO previousbalance(previousAmount) VALUES('$Amount_remaining')";
      $res = mysqli_query($conn, $sql);

      if (!$sql) {
        // code...
        echo "error in sql" . mysqli_error($conn);
      }
    }



?>