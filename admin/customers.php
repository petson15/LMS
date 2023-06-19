<?php  

  include_once('../dbconfig/config.php');

  $sql = 'SELECT DISTINCT customer, id, sex, telephone, AVG(price) AS average_spending FROM orderitems GROUP BY customer DESC';
  $res = mysqli_query($conn, $sql);

  if (!$res) {
    // code...
    echo "errror in sql". mysqli_error($conn);
  }
  

?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>LMS || Customers</title>
	<link rel="website icon" type="png" href="../avatars/logobs.png">
	<link rel="stylesheet" type="text/css" href="../bootstrap/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="../fonts/all.css">
</head>

<style type="text/css">
	

	body
		{
			font-family: sans-serif;
			font-size: 15px;
			margin: 0;
			padding: 0;
		}
		.table 
   		{
   			max-width: 90%;

   		}
		
		.table thead
   		{
   			background-color: #515448;
   			color: white;
   			font-size: 13px;

   		}
   		.fa-eye
   		{
   			margin-left: 30px;
   		}


</style>
<body>

	<?php include_once('../includes/navbar.php') ?>

	<div class="container"><h4 style=" margin:30px; color: grey;">Customers</h4></div>

	<div class="container">
		
		<table class="table table-bordered fw-semilight ms-5 tab-1">
  <thead>
    <tr>
      <th scope="col">Name</th>
      <th scope="col">Telephone number</th>
      <th scope="col">Sex</th>
      <th scope="col">Average spending</th>
      <th scope="col" style="width: 100px">View profile</th>

    </tr>
  </thead>
  <tbody >
    <?php  

      while ($rows = mysqli_fetch_assoc($res)) {
        // code...
      

    ?>
    <tr >
      <td><?php echo $rows['customer'] ?></td>
      <td><?php echo $rows['telephone'] ?></td>
      <td><?php echo $rows['sex'] ?></td>
      <td><?php echo $rows['average_spending'] ?></td>
      <td><a href="customers.php?id= <?php echo $rows['id']; ?>"><i title = "view" class="fa-solid fa-eye"></i></a></td>
    </tr>
    
  </tbody>
<?php } ?>
</table>


	</div>

  <?php 

    if (isset($_GET['id'])) {
      // code...
      $_SESSION['customer_id'] = $_GET['id'];
      echo "<script>window.location.href='customer-profile.php'</script>";
    }

   ?>
	

</body>
</html>