<?php  

include_once('../dbconfig/config.php');

$previous_Balance = 0;


?>



<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>LMS || Today sales</title>
	<link rel="website icon" type="png" href="../avatars/logobs.png">
	<link rel="stylesheet" type="text/css" href="../bootstrap/bootstrap.css">
      <script type="text/javascript" src="../js/jquery.js"></script>

  <script type="text/javascript">
    
      $(document).ready(function(){
      $("#btncomplete").click(function(){
        $('#thisModal').modal('show');
      }); 
    }); 

  </script>
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

     $sql = "SELECT previousAmount AS total FROM previousbalance ORDER BY Balance_date DESC LIMIT 1";
$res = mysqli_query($conn, $sql);

if (!$res) {
    echo "error in sql" . mysqli_error($conn);
}

$previous_Balance = mysqli_fetch_assoc($res);

// Check if previous balance exists, if not, set it to 0
if (!$previous_Balance || empty($previous_Balance['total'])) {
    $previous_Balance['total'] = 0;
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
              $final_amount = $Amount_remaining + $previous_Balance['total'];


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
  
   <button class="btn btn-md my-5 btn-primary btn-lg fw-semilight fw-semilight " id="btncomplete"  type="button" name="">Complete Daily sales</button>
 
 </div>


  <div class="modal fade" id="thisModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-primary" id="exampleModalLabel">CONFIRM ACTION</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body ">
        Do you really want to complete sales !
      </div>
      <div class="modal-footer">
        <form method="POST" action="today-sales.php">
        <button type="submit" class="btn btn-secondary bg-danger" data-bs-dismiss="modal" name="complete">Yes</button>
        
      </form>
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

</body>
</html>

  <?php  

    if (isset($_POST['complete'])) {
      // code...

      $sql = "INSERT INTO previousbalance(previousAmount) VALUES('$final_amount')";
      $res = mysqli_query($conn, $sql);

      if (!$sql) {
        // code...
        echo "error in sql" . mysqli_error($conn);
        exit;
      }

      echo "<script>window.location.href = 'dashboard.php'</script>";

    }


?>