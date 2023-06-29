<?php  

    session_start();
    include_once('../dbconfig/config.php');
    


    $searchValue = '';
if (isset($_GET['search'])) {
    $searchValue = $_GET['search'];
}


    $sql = "SELECT * FROM orderitems WHERE customer LIKE '%$searchValue%' OR order_id LIKE '%$searchValue%' ORDER BY order_date ";
    $res = mysqli_query($conn, $sql);

    if (!$res) {
      // code...    
      echo "error in sql" . mysqli_error($conn);
    }

    
 



?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="website icon" type="png" href="../avatars/logobs.png">
	<link rel="stylesheet" type="text/css" href="../bootstrap/bootstrap.css">
  <script type="" src="../js/bootstrap.bundle.min.js"></script>
	<script type="text/javascript" src="../js/jquery.js"></script>
	<title> LMS || Order screen</title>


	<script type="text/javascript">
	$(document).ready(function() {
  $(".complete-btn").click(function() {
    var id = $(this).data("id");
    var item = $(this).data("item");
    var servedby = $(this).data("servedby");
    var price = $(this).data("price");
    $.ajax({
      url: "order-screen.php",
      method: "GET",
      data: {
       id: id,
       item: item,
       servedby: servedby,
       price: price 
     },
      success: function(response) {
        $('#myModal').modal('show');
      },
      error: function(xhr, status, error) {
        console.log(error);
      }
    });
  });

  $('#myModal').on('hidden.bs.modal', function () {
    location.reload();
  });
});




</script>


	<style type="text/css">
		img
		{
			width: 100px;
		}

		.img
		{
			float: right;
		}
		.table
    {
    	max-width: 90%;
    	margin-top: 200px;
    	margin: 20px auto;
    }

     .table thead
      {
        background-color: #515448;
        color: white;
        font-size: 13px;

      }
        #searchInput 
       {
            float: right;
            display: flex;
            position: relative;
            top: -5px;
            right: 80px;
            outline: none;
        }

	</style>

 <script type="text/javascript">
 var searchTimer;

        function startSearchTimer() {
            clearTimeout(searchTimer);
            searchTimer = setTimeout(performSearch, 500); // Adjust the delay here (in milliseconds)
        }

        function performSearch() {
            var searchValue = document.getElementById('searchInput').value;
            window.location.href = 'order-screen.php?search=' + encodeURIComponent(searchValue);
        }
</script>

</head>
<body>


	<nav style="background-color: #f7fdfe;">
	<img src="../avatars/logobs.png">
	<img src="../avatars/logobs.png" class="img">


</nav>
	<div class="my-5">
     <input type="text" name="search" class="Search"  placeholder="Search item"  id="searchInput" value="<?php echo $searchValue; ?>" onkeyup="startSearchTimer()">


	<table class="table table-bordered text-center fw-lighter my-5 " id="ordertable">
  <thead class="t text-center ">
    <tr>
      <th scope="col" class="fw-lighter">#invoice number</th>
      <th scope="col" class="fw-lighter">Item</th>
      <th scope="col" class="fw-lighter">Customer</th>
      <th scope="col" class="fw-lighter">Quantity</th>
      <th scope="col" class="fw-lighter">Timer</th>
      <th scope="col" class="fw-lighter">served by</th>
      <th scope="col" class="fw-lighter">Action</th>
    </tr>
  </thead>
  <tbody >
    <?php 

        while ($rows = mysqli_fetch_assoc($res)) 
          // code...
        {
         $startTime = new DateTime($rows['order_date']);
          $currentTime = new DateTime();
           $elapsedTime = $currentTime->diff($startTime);

             $timer = $elapsedTime->format('%a:%H:%I:%S');

     ?>
    <tr >
    	<?php if ($rows['completed'] != 1): ?>
    		<?php $order_id = $rows['order_id']; ?>
      <td scope="row" style="width: 150px;" class="fw-lighter"><?php echo $rows['order_id']; ?></td>
      <td><?php echo $rows['item']; ?></td>
      <td><?php echo $rows['customer']; ?></td>
      <td><?php echo $rows['quantity']; ?></td>
      <td style="color: red;" ><?php echo $timer ?></td>
      <td><?php echo $rows['servedby'];?></td>
      <td>
        <button class="btn bg-primary text-white complete-btn" data-id="<?php echo $rows['id']; ?>" data-items="<?php echo $rows['item'] ?>" data-price ="<?php echo $rows['price'] ?>" data-servedby="<?php echo $rows['servedby'] ?>" style="width:150px">
        Complete</button>
      </td>
    </tr>
  <?php endif ?>
  </tbody>
    <?php } ?>
</table>

</div>

 <?php  

    if (isset($_GET['id'])) {
      // code...

      $id = $_GET['id'];
      $tt = date('Y-m-d, H:i:s');

      $sql_update = "UPDATE orderitems SET completed=1, completed_date ='$tt'  WHERE id=$id";
      $res_update = mysqli_query($conn, $sql_update);

      if(!$res_update)
      {
             echo "error in code". mysqli_error($conn);
      }

    }

    



    ?>


    <div class="modal fade" id="myModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-primary" id="exampleModalLabel">COMPLETED ORDER STATUS</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body text-primary">
        Order completed successfully
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>


  

</body>
</html>