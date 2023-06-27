<?php  
 
	include_once('./dbconfig/config.php');


  $searchValue = '';
if (isset($_GET['search'])) {
    $searchValue = $_GET['search'];
}


	$sql = "SELECT * FROM customers  WHERE name LIKE '%$searchValue%'";
  	$result = mysqli_query($conn, $sql);

  if (!$result) {
    // code...
    echo "<script>alert('error in sql')</script>";
  }

$page = 1;

if (isset($_GET['page'])) {
    $page = $_GET['page'];
}


$num_per_page = 12;
$start_from = ($page - 1) * $num_per_page;



  	// Retrieve the latest customer ID from the database
$customer_tag = "SELECT MAX(id) AS max_id FROM customers";
$tag_result = mysqli_query($conn, $customer_tag);
if (!$tag_result) {
	// code...
	echo "error in sql" . mysqli_error($conn);
}
$row = mysqli_fetch_assoc($tag_result);
$maxId = $row['max_id'];

// Increment the customer ID
$newId = sprintf('%03d', intval($maxId) + 1); 

	
	if (isset($_POST['add'])) {
		// code...

		$name = mysqli_real_escape_string($conn, $_POST['customername']);
		$tagnumber = mysqli_real_escape_string($conn, $_POST['tagnumber']);
		$tel = mysqli_real_escape_string($conn, $_POST['tel']);

		$sql = "INSERT INTO customers(tagnumber,name,telephone) VALUES('$tagnumber', '$name', '$tel')";
		$res = mysqli_query($conn, $sql);

		if (!$res) {
			// code...
			echo "error in sql" . mysqli_error($conn);
		}
		header('location: add-customer.php ');
	}


	if (isset($_GET['id'])) {
     // code...
    $id = $_GET['id'];
   $del = "DELETE FROM customers WHERE id = '$id'";
   $del_result = mysqli_query($conn, $del);

     if (!$del_result) {
        echo "error in querry". mysqli_error($conn);
      }

    header('location:add-customer.php');
   }


$total_rows_sql = "SELECT COUNT(DISTINCT telephone) AS total FROM customers WHERE name LIKE '%$searchValue%'";
$total_rows_result = mysqli_query($conn, $total_rows_sql);
$total_rows_row = mysqli_fetch_assoc($total_rows_result);
$total_rows = $total_rows_row['total'];
$total_pages = ceil($total_rows / $num_per_page);



?>






<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>LMS || Add customers</title>
	<link rel="website icon" type="png" href="./avatars/logobs.png">
	<link rel="stylesheet" type="text/css" href="./bootstrap/bootstrap.css">
	<script type="text/javascript" src="./js/jquery.js"></script>

	<style type="text/css">
		
		.fa-solid
        {
            cursor: pointer;
        }
        .table
        {
        	max-width: 75%;
        }
        .table thead
      {
        background-color: #515448;
        color: white;
        font-size: 13px;

      }
       #searchInput {
            float: right;
            display: flex;
            position: relative;
            top: 5px;
            right: 280px;
            outline: none;
        }

         .btnlink  {
            position: relative;
            left: 280px;
            margin: 2px;
            bottom: 34px;
        }



	</style>
</head>
<body>


	<?php include_once('navbar.php') ?>

	<h4 class="me-1 my-3 container text-muted ">Customers</h4>


<input type="text" name="search" class="search" placeholder="Search" id="searchInput" value="<?php echo $searchValue; ?>" onkeyup="startSearchTimer()">
<button style="float:left; margin-left: 61%;" class="btn btn-sm bg-primary text-white"
        data-bs-whatever="@mdo" data-bs-toggle="modal" data-bs-target="#addcustomer" type="button">Add customer</button>


	 <div class="container d-flex justify-content-center sales my-5">
        <table class="table table-bordered text-center fw-lighter" id="order-table">
            <thead class=" text-center fw-lighter">
                <tr>
                    <th scope="col" class="fw-lighter">Tagnumber #</th>
                    <th scope="col" class="fw-lighter">Name</th>
                    <th scope="col" class="fw-lighter">Telephone</th>
                    <th scope="col" class="fw-lighter">Action</th>
                </tr>
            </thead>
            <tbody>
                
                  <?php 

                    while ($rows = mysqli_fetch_assoc($result)) 
                    {
                  ?><tr>
                      <td scope="col" class="fw-lighter"><?php echo $rows['tagnumber']; ?></td>
                    <td><?php echo $rows['name']; ?></td>
                    <td><?php echo $rows['telephone']; ?></td>
                    <td class="edit_p" id="<?php echo $rows['id']; ?>"><i title="edit" class="fa-solid fa-edit text-primary " 
                    data-bs-whatever="@mdo" type="button"></i> 
                    
                        <a href="add-customers.php?id=<?php echo $rows['id']; ?>"><i title="delete" class="fa-solid fa-trash text-danger"></i>
                   </td> 
                   </tr>
   <div class="modal fade" id="addcustomer" tabindex="-1" aria-labelledby="details" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="details">Add customer</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form method="POST" action="add-customer.php">
          <div class="mb-3">
            <label for="item-name" class="col-form-label">Customer Name:</label>
            <input type="text" class="form-control" required name="customername">
          </div>
          <div class="mb-3">
            <label for="Price" class="col-form-label">Tagnumber:</label>
            <input type="number" class="form-control" readonly required name="tagnumber" value="<?php echo $newId ?>"> 
          </div>
          <div class="mb-3">
            <label for="tel" class="col-form-label">Telephone:</label>
            <input type="tel" class="form-control" required name="tel"> 
          </div>
          <div class="modal-footer justify-content-center" style=" margin: 10px" >
        <button type="submit" name = "add" class="btn addbtn btn-primary">Add customer</button>
      </div>
        </form>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="edit" tabindex="-1" aria-labelledby="details" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="details">Update customer</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body load_edit_info">
       
      </div>
        </form>
      </div>
      
    </div>
  </div>
</div>

                   <?php  } ?>
                   
                
            </tbody>
        </table>
    </div>
<?php ?>

 <?php
    if ($page > 1) {
        echo "<a class='btn-sm btn btn-primary btnlink text-primary bg-light' href='add-customers.php?page=".($page-1)."'>Previous</a>";
    }

    for ($i = 1; $i <= $total_pages; $i++) {
        echo "<a class='btn-sm btn btn-primary btnlink  text-primary bg-light' href='add-customers.php?page=$i'>$i</a>";
    }

    if ($page < $total_pages) {
        echo "<a class='btn btn-sm btn-primary btnlink  text-primary bg-light' href='add-customers.php?page=".($page+1)."'>Next</a>";
    }

    if (isset($_GET['id'])) {
        $_SESSION['orderID'] = $_GET['id'];
        echo "<script>window.location.href='add-customers.php'</script>";
    }
    ?>


		 <script type="text/javascript">
        

          $(document).ready(function() {

      $(".addbtn").click(function() {

        let tel = $("input[name ='tel']").val();

        if (tel.length != 10) {
          $("#myModal").modal("show");
          return false;
        }
      })
    });



        $(document).ready(function(){

               $(".edit_p").click(function(){
                  let id = $(this).attr("id");
                

                $("#edit").modal("show");
                 
                  $.ajax({
                    url: "load_customer_edit.php",
                    method: "POST",
                  //  dataType: "JSON",
                    data: {id},
                    success:function(data){
                        $(".load_edit_info").html(data);

                    }
                  })
               });





               $(document).on("click",".update",function(e){
                e.preventDefault();

                let id = $(this).attr("id");
                let name = $("#customer_name_p").val();
                let telephone = $("#customer_telephone"+id).val();

             

                   $.ajax({
                    url: "update_customer.php",
                    method: "POST",
                  //  dataType: "JSON",
                    data: {id,name,telephone},
                    success:function(data){
                        $(".load_edit_info").html(data);

                    }
                  })
               })

        })


           var searchTimer;

        function startSearchTimer() {
            clearTimeout(searchTimer);
            searchTimer = setTimeout(performSearch, 500); // Adjust the delay here (in milliseconds)
        }

        function performSearch() {
            var searchValue = document.getElementById('searchInput').value;
            window.location.href = 'add-customers.php?search=' + encodeURIComponent(searchValue);
        }


    </script>


<div class="modal fade" id="myModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-danger" id="exampleModalLabel">ERROR IN FORM</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body text-danger">
        Incorrect telephone number
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>


</body>
</html>