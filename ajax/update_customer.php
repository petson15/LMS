<?php 

  
  include_once('../dbconfig/config.php');

  $id = $_POST['id'];
 
  $name = $_POST['name'];
  $telephone = $_POST['telephone'];


  $query = "UPDATE customers SET name = '$name', telephone = '$telephone' WHERE id = '$id'";
  $res = mysqli_query($conn,$query);


  if($res){
     echo "customer profile updated";
     

  }else{
  	echo "failed to update";
  }


  echo "<script>window.location.href='add-customer.php'</script>";



 ?>