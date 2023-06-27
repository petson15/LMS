<?php  


  include_once('./dbconfig/config.php');
  $employee ="";
 

?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>LMS || Dashboard</title>
  <link rel="website icon" type="png" href="./avatars/logobs.png">
  <link rel="stylesheet" type="text/css" href="./bootstrap/bootstrap.css">
  <style type="text/css">
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
        padding-top: 15px;
       }
  </style>
</head>
<body>

  <?php include_once('navbar.php') ?>

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


    <?php  
    $employee = $_SESSION['employee'];
  $currentDate = date('Y-m-d');
  $item_count = "SELECT COUNT(item) AS item_count FROM orderitems WHERE DATE(order_date) = '$currentDate' AND servedby = '$employee' ";
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
        <i class="fa-solid fa-cart-shopping fa-lg d-flex pb-2 py-3 justify-content-center text-white"></i>
        <p class="text-white d-flex justify-content-center"><?php echo $counts['item_count']; ?></p>
        <p class="text-white d-flex justify-content-center" >Item Count</p>
      </div>
    </div>




</body>
</html>