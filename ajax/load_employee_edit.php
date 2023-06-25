<?php  
  
  include_once('../dbconfig/config.php');

 
   $id = $_POST['id'];
   $sql = "SELECT * FROM employee WHERE id ='$id'";
  $result = mysqli_query($conn, $sql);

  $row = mysqli_fetch_assoc($result);

  

  $output = ' <form action="employee.php" action="post">
          <div class="mb-3">
            <label for="item-name" class="col-form-label">FirstName:</label>
            <input type="text"name ="uname" class="form-control "  id="firstname_name_p" required value="'.$row["firstname"].'">
          </div>
           <div class="mb-3">
            <label for="item-name" class="col-form-label">SecondName:</label>
            <input type="text"name ="uname" class="form-control "  id="second_name_p" required value="'.$row["secondname"].'">
          </div>
          <div class="mb-3">
            <label for="item-name" class="col-form-label">DOB:</label>
            <input type="date"name ="uname" class="form-control "  id="DOB" required value="'.$row["DOB"].'">
          </div>
          <div class="mb-3">
            <label for="item-name" class="col-form-label">Telephone:</label>
            <input type="tel"name ="uname" class="form-control "  id="telephone" required value="'.$row["telephone"].'">
          </div>
           <div class="mb-3">
            <label for="item-name" class="col-form-label">username:</label>
            <input type="tel"name ="uname" class="form-control "  id="username'.$row['id'].'" required value="'.$row["username"].'">
          </div>
          <div class="modal-footer justify-content-center" style=" margin: 10px" >
        <button name="update" class="btn btn-primary update" id="'.$row['id'].'" type="submit">Update</button>';


        echo $output;



 ?>