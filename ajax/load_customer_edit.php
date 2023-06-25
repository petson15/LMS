<?php 
  
  include_once('../dbconfig/config.php');

 
   $id = $_POST['id'];
   $sql = "SELECT * FROM customers WHERE id ='$id' ";
  $result = mysqli_query($conn, $sql);

  $row = mysqli_fetch_assoc($result);

  

  $output = ' <form action="add-customer.php" action="post">
          <div class="mb-3">
            <label for="item-name" class="col-form-label">Customer Name:</label>
            <input type="text"name ="uname" class="form-control "  id="customer_name_p" required value="'.$row["name"].'">
          </div>
          <div class="mb-3">
            <label for="Price" class="col-form-label">Telephone:</label>
            <input class="form-control" name="uprice" id="customer_telephone'.$row['id'].'" required value="'.$row["telephone"].'" >
          </div>
          <div class="modal-footer justify-content-center" style=" margin: 10px" >
        <button name="update" class="btn btn-primary update" id="'.$row['id'].'" type="submit">Update</button>';


        echo $output;



 ?>