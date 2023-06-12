<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>LMS || Dashboard</title>
	<link rel="website icon" type="png" href="../avatars/logobs.png">
	<link rel="stylesheet" type="text/css" href="../bootstrap/bootstrap.css">


	<style type="text/css">
		
		body
		{
			font-family: sans-serif;
			font-size: 14px;
			margin: 0;
			padding: 0;
		}

		.date 
		{
			padding: 10px;
		}

		#form
		{
			 width: 150px; 
			 margin: 5px; padding: 5px; 
			 border: 1px solid white; 
			 background-color:#fafafa ; 
			 height: 35px; 
			 outline: none;
		}

		.item-count 
		{
     		 max-width: 375px;
    		  height: 90px;
     		 background-color: #515448;
     		 border-radius: 5px;

     		
   		 }
   		 .item-count p
   		 {
   		 	margin-bottom: 5px;
   		 	position: relative; 
   		 	top: 12px;
   		 }
   		 .item-count i
   		 {
   		 	padding-top: 18px;
   		 }
   		 .dash-info
   		 {
   		 	position: relative;
   		 	display: flex;
   		 	max-width: 100%;
   		 	z-index: -1;
   		 }
   		 .first-col 
   		 {
   		 	flex: 20%;
   		 }

   		.table 
   		{
   			max-width: 45%;
   		}
   		.table thead
   		{
   			background-color: #515448;
   			color: white;
   			font-size: 13px;

   		}

   		.tab
   		{
   			display: flex;
   		}

	</style>




</head>
<body>

	<?php include_once('../includes/navbar.php'); ?>

	<div class=" ms-5">
    <form class="my-3">
      <h5 style=" margin:30px;">Dashboard Report</h5>
      <div style=" margin:30px;">
        <label for="form" class="date">Start date: </label>
        <input type="date" name  id="form">

        <label for="end" class="date">End date: </label>
        <input type="date" name id="form">
        <button class="btn btn-md btn-primary fw-semilight" type="submit">Get Report</button>
    </form>
</div>
		
	<div class="dash-info">
	 <div class="item-count my-3 ms-3 first-col">
      <div>
        <i class="fa-solid fa-cart-shopping fa-lg d-flex justify-content-center text-white"></i>
        <p class="text-white d-flex justify-content-center">6</p>
        <p class="text-white d-flex justify-content-center" >Item Count</p>
      </div>
    </div>

    <div class="item-count my-3 ms-5 first-col">
      <div>
        <i class="fa-solid fa-money-bill-trend-up fa-lg d-flex justify-content-center text-white"></i>
        <p class="text-white d-flex justify-content-center">GHC 600</p>
        <p class="text-white d-flex justify-content-center" >Total sales</p>
      </div>
    </div>
     <div class="item-count my-3 ms-5 first-col">
      <div>
        <i class="fa-solid fa-user-group fa-lg d-flex justify-content-center text-white"></i>
        <p class="text-white d-flex justify-content-center">600</p>
        <p class="text-white d-flex justify-content-center" >Customers</p>
      </div>
    </div>
 </div>

 	<div class="my-5 tab">
 		<table class="table table-bordered fw-semilight ms-3 tab-1">
  <thead>
    <tr>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Handle</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <td>Larry the Bird</td>
      <td>Larry the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody>
</table>

		<table class="table table-bordered fw-semilight ms-5 tab-2">
  <thead>
    <tr>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Handle</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <td>Larry the Bird</td>
      <td>Larry the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody>
</table>
	

 	</div>



</body>
</html>