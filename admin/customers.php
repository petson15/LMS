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
    <tr >
      <td>Mark</td>
      <td>0556524653</td>
      <td>male</td>
      <td>GHC 2000</td>
      <td><a href="customer-profile.php"><i title = "view" class="fa-solid fa-eye"></i></a></td>
    </tr>
    <tr>
      <td>Mark</td>
      <td>0556524653</td>
      <td>male</td>
      <td>GHC 2000</td>
      <td><a href="customer-profile.php"><i title = "view" class="fa-solid fa-eye"></i></a></td>
    </tr>
    <tr>
      <td>Mark</td>
      <td>0556524653</td>
      <td>male</td>
      <td>GHC 2000</td>
      <td><a href="customer-profile.php"><i title = "view" class="fa-solid fa-eye"></i></a></td>
    </tr>
  </tbody>
</table>


	</div>
	

</body>
</html>