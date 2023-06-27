<?php  
  
  include_once('./dbconfig/config.php');

 
  

  $page = 1;
  if (isset($_GET['page'])) {
  $page = $_GET['page'];
} else {
  $page = 1;
}

  $start_from = ($page - 1) * 12;
$num_per_page = 12;

  $searchValue = '';
if (isset($_GET['search'])) {
    $searchValue = $_GET['search'];
}



$sql = "SELECT * FROM menu WHERE item LIKE '%$searchValue%' LIMIT $start_from, $num_per_page ";
  $result = mysqli_query($conn, $sql);

  if (!$result) {
    // code...
    echo "<script>alert('error in sql')</script>";
  }

$total_rows_sql = "SELECT COUNT(item) AS total FROM menu WHERE item LIKE '%$searchValue%'";
$total_rows_result = mysqli_query($conn, $total_rows_sql);
$total_rows_row = mysqli_fetch_assoc($total_rows_result);
$total_rows = $total_rows_row['total'];
$total_pages = ceil($total_rows / $num_per_page);

 
  if (isset($_POST['add'])) { 

      $name = $_POST['name'];
      $price = $_POST['price'];
      
      $sql = "INSERT INTO menu(item,price) VALUES('$name', '$price')";
       $res = mysqli_query($conn, $sql);

      if (!$result) {
        echo "error in querry". mysqli_error($conn);
      }
      else
      {
        header('Location:menu.php'); 
      }
 
      }

      if (isset($_GET['id'])) {
     // code...
    $id = $_GET['id'];
   $del = "DELETE FROM menu WHERE id = '$id'";
   $del_result = mysqli_query($conn, $del);

     if (!$del_result) {
        echo "error in querry". mysqli_error($conn);
      }

    header('location:menu.php');
   }

 ?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>LMS || Menu </title>
      <link rel="website icon" type="png" href="./avatars/logobs.png">
    <link rel="stylesheet" type="text/css" href="./bootstrap/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="./fonts/all.css">
      <script type="text/javascript" src="./js/jquery.js"></script>



    <style type="text/css">
       
        .fa-solid
        {
            cursor: pointer;
        }
        .table thead
      {
        background-color: #515448;
        color: white;
        font-size: 13px;

      }

     .btnPaginition {
    position: relative;
    left: 150px;
    margin: 2px;
    bottom: 50px;
  }

   #searchInput {
            float: right;
            display: flex;
            position: relative;
            top: 5px;
            right: 120px;
            outline: none;
        }

    </style>

</head>

<body>

    <?php include_once('navbar.php') ?>




    </div>

    </div>

    <h4 class="me-1 my-3 container text-muted ">Menu Items</h4>



        <input type="text" name="search" class="search" placeholder="Search" id="searchInput" value="<?php echo $searchValue; ?>" onkeyup="startSearchTimer()">
        <button style="float: right; margin-right: 130px;" class="btn btn-sm bg-primary text-white"
        data-bs-whatever="@mdo" data-bs-toggle="modal" data-bs-target="#additem" type="button">Add item</button>

    <div class="container d-flex justify-content-center sales my-5">
        <table class="table table-bordered text-center fw-lighter" id="order-table">
            <thead class=" text-center fw-lighter">
                <tr>
                    <th scope="col" class="fw-lighter">Menu item</th>
                    <th scope="col" class="fw-lighter">Price</th>
                    <th scope="col" class="fw-lighter">Action</th>
                </tr>
            </thead>
            <tbody>
                
                  <?php 

                    while ($rows = mysqli_fetch_assoc($result)) 
                    {
                  ?><tr>
                      <td scope="col" class="fw-lighter"><?php echo $rows['item']; ?></td>
                    <td><?php echo "GHC  ". $rows['price']; ?></td>
                    <td class="edit_p" id="<?php echo $rows['id']; ?>"><i title="edit" class="fa-solid fa-edit text-primary " 
                    data-bs-whatever="@mdo" type="button"></i> 
                        <a href="menu.php?id=<?php echo $rows['id']; ?>"><i title="delete" class="fa-solid fa-trash text-danger"></i>
                   </td> 
                   </tr>
                    <div class="modal fade" id="additem" tabindex="-1" aria-labelledby="details" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="details">Add menu item</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form method="POST" action="menu.php">
          <div class="mb-3">
            <label for="item-name" class="col-form-label">Item Name:</label>
            <input type="text" class="form-control" id="item-name" required name="name">
          </div>
          <div class="mb-3">
            <label for="Price" class="col-form-label">Price:</label>
            <input type="number" class="form-control" id="price" required name="price"> 
          </div>
          <div class="modal-footer justify-content-center" style=" margin: 10px" >
        <button type="submit" name = "add" class="btn btn-primary">Add item</button>
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
        <h1 class="modal-title fs-5" id="details">Update menu item</h1>
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
<?php  

  if ($page > 1) {
    echo "<a class='btn-sm btnPaginition btn btn-primary text-primary bg-light' href='menu.php?page=" . ($page - 1) . "'>Previous</a>";
  }

  for ($i = 1; $i <= $total_pages; $i++) {
    echo "<a class='btn-sm btnPaginition btn btn-primary text-primary bg-light' href='menu.php?page=$i'>$i</a>";
  }

  if ($page < $total_pages) {
    echo "<a class='btn btn-sm btn-primary btnPaginition text-primary bg-light' href='menu.php?page=" . ($page + 1) . "'>Next</a>";
  }

?>
  




    <script type="text/javascript">
        




        $(document).ready(function(){

               $(".edit_p").click(function(){
                  let id = $(this).attr("id");
                

                $("#edit").modal("show");
                 
                  $.ajax({
                    url: "load_edit.php",
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
                let item = $("#item_name_p").val();
                let price = $("#item_price"+id).val();

             

                   $.ajax({
                    url: "uodate_item.php",
                    method: "POST",
                  //  dataType: "JSON",
                    data: {id,item,price},
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
            window.location.href = 'menu.php?search=' + encodeURIComponent(searchValue);
        }

    </script>
    
</body>


</html>