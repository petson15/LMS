<?php  
  
  include_once('../dbconfig/config.php');


  $sql = 'SELECT * FROM menu';
  $result = mysqli_query($conn, $sql);
 
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
      <link rel="website icon" type="png" href="../avatars/logobs.png">
    <link rel="stylesheet" type="text/css" href="../bootstrap/bootstrap.css">
  <script type="" src="../js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" type="text/css" href="../fonts/all.css">
      <script type="text/javascript" src="../js/jquery.js"></script>



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
    </style>

</head>

<body>

    <?php include_once('../includes/navbar.php') ?>




    </div>

    </div>

    <h4 class="me-1 my-3 container text-muted ">Menu Items</h4>
        <button style="float: right; margin-right: 120px;" class="btn btn-sm bg-primary text-white"
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

  




    <script type="text/javascript">
        




        $(document).ready(function(){

               $(".edit_p").click(function(){
                  let id = $(this).attr("id");
                

                $("#edit").modal("show");
                 
                  $.ajax({
                    url: "../ajax/load_edit.php",
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
                    url: "../ajax/uodate_item.php",
                    method: "POST",
                  //  dataType: "JSON",
                    data: {id,item,price},
                    success:function(data){
                        $(".load_edit_info").html(data);

                    }
                  })
               })

        })
    </script>
    
</body>


</html>