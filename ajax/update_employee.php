<?php 

  
  include_once('../dbconfig/config.php');

  $id = $_POST['id'];
 
  $firstname = $_POST['firstname'];
  $secondname = $_POST['secondname'];
  $telephone = $_POST['telephone'];
  $DOB = $_POST['DOB'];
  $telephone = $_POST['telephone'];
  $username = $_POST['username'];


  $query = "UPDATE employee SET firstname = '$firstname',secondname = '$secondname',DOB = '$DOB', telephone = '$telephone', username = '$username' WHERE id = '$id'";
  $res = mysqli_query($conn,$query);


  if($res){
     echo "employee profile updated";

     

  }else{
  	echo "failed to update";
    exit;
  }


  echo "<script>window.location.href='employee.php'</script>";



 ?>