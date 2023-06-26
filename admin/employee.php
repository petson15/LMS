<?php  
	include_once('../dbconfig/config.php');

	$sql = "SELECT * FROM employee";
  	$result = mysqli_query($conn, $sql);

  if (!$result) {
    // code...
    echo "<script>alert('error in sql')</script>";
  }


  	if (isset($_POST['add'])) {
  		// code...

  		$firstname = mysqli_real_escape_string($conn, $_POST['firstname']);
  		$secondname = mysqli_real_escape_string($conn, $_POST['secondname']);
  		$DOB = mysqli_real_escape_string($conn, $_POST['DOB']); //date of birth
  		$telephone = mysqli_real_escape_string($conn, $_POST['telephone']);
  		$username = mysqli_real_escape_string($conn, $_POST['username']);
  		$password = mysqli_real_escape_string($conn, $_POST['password']);

  		$sql = "INSERT INTO employee(firstname,secondname,DOB,telephone,username,password) VALUES('$firstname', '$secondname', '$DOB', '$telephone', '$username', '$password')";
  		$res = mysqli_query($conn, $sql);

  		if (!$res) {
			// code...
			echo "error in sql" . mysqli_error($conn);
		}
		header('location: employee.php ');
  	}
	
	if (isset($_GET['id'])) {
     // code...
    $id = $_GET['id'];
   $del = "DELETE FROM employee WHERE id = '$id'";
   $del_result = mysqli_query($conn, $del);

     if (!$del_result) {
        echo "error in querry". mysqli_error($conn);
      }

    header('location:employee.php');
   }





?>



<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>LMS || employees</title>
	<link rel="stylesheet" type="text/css" href="../fonts/all.css">
	<link rel="website icon" type="png" href="../avatars/logobs.png">
      <script type="text/javascript" src="../js/jquery.js"></script>


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


	</style>


</head>
<body>

	<?php include_once('../includes/navbar.php') ?>


	<h4 class="me-1 my-3 container text-muted ">Employees</h4>



	<button style="float: right; margin-right: 280px;" class="btn btn-sm bg-primary text-white"
        data-bs-whatever="@mdo" data-bs-toggle="modal" data-bs-target="#addemployee" type="button">Add employee</button>


	 <div class="container d-flex justify-content-center sales my-5">
        <table class="table table-bordered text-center fw-lighter" id="order-table">
            <thead class=" text-center fw-lighter">
                <tr>
                    <th scope="col" class="fw-lighter">Firstname</th>
                    <th scope="col" class="fw-lighter">secondname</th>
                    <th scope="col" class="fw-lighter">DOB</th>
                    <th scope="col" class="fw-lighter">Telephone</th>
                    <th scope="col" class="fw-lighter">Action</th>
                </tr>
            </thead>
            <tbody>
                
                  <?php 

                    while ($rows = mysqli_fetch_assoc($result)) 
                    {
                  ?><tr>
                      <td scope="col" class="fw-lighter"><?php echo $rows['firstname']; ?></td>
                    <td><?php echo $rows['secondname']; ?></td>
                    <td><?php echo $rows['DOB']; ?></td>
                    <td><?php echo $rows['telephone']; ?></td>
                    <td class="edit_p" id="<?php echo $rows['id']; ?>"><i title="edit" class="fa-solid fa-edit text-primary " 
                    data-bs-whatever="@mdo" type="button"></i> 
                    
                        <a href="employee.php?id=<?php echo $rows['id']; ?>"><i title="delete" class="fa-solid fa-trash text-danger"></i>
                   </td> 
                   </tr>
   <div class="modal fade" id="addemployee" tabindex="-1" aria-labelledby="details" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="details">Add employee</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form method="POST" action="employee.php">
          <div class="mb-3">
            <label for="firstname" class="col-form-label">FirstName:</label>
            <input type="text" class="form-control" required name="firstname">
          </div>
          <div class="mb-3">
            <label for="secondname" class="col-form-label">SecondName:</label>
            <input type="text" class="form-control" required name="secondname"> 
          </div>
           <div class="mb-3">
            <label for="DOB" class="col-form-label">DOB:</label>
            <input type="date" class="form-control" required name="DOB"> 
          </div>
          <div class="mb-3">
            <label for="telephone" class="col-form-label">Telephone:</label>
            <input type="tel" class="form-control" required name="telephone"> 
          </div>
          <div class="mb-3">
            <label for="usernmae" class="col-form-label">Username:</label>
            <input type="tel" class="form-control" required name="username"> 
          </div>
           <div class="mb-3">
            <label for="password" class="col-form-label">Password:</label>
            <input type="password" class="form-control" required name="password"> 
          </div>
          <div class="modal-footer justify-content-center" style=" margin: 10px" >
        <button type="submit" name = "add" class="btn addbtn btn-primary">Add Employee</button>
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
        <h1 class="modal-title fs-5" id="details">Update Employee</h1>
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


<script type="text/javascript">
        

		$(document).ready(function() {

			$(".addbtn").click(function() {

				let tel = $("input[name ='telephone']").val();

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
                    url: "../ajax/load_employee_edit.php",
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
                let firstname = $("#firstname_name_p").val();
                let secondname = $("#second_name_p").val();
                let DOB = $("#DOB").val();
                let telephone = $("#telephone").val();
                let username = $("#username"+id).val();

             

                   $.ajax({
                    url: "../ajax/update_employee.php",
                    method: "POST",
                  //  dataType: "JSON",
                    data: {id,firstname,secondname,DOB,telephone,username},
                    success:function(data){
                        $(".load_edit_info").html(data);

                    }
                  })
               })

        })
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