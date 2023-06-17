<?php
include_once('../dbconfig/config.php');

// Check if the search term is provided
if (isset($_POST['search'])) {
  $searchTerm = $_POST['search'];

  // Perform the search query
  $query = "SELECT * FROM menu WHERE item LIKE '%$searchTerm%'";
  $result = mysqli_query($conn, $query);

  // Display the search results
  if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
      echo '<p class="ms-2 py-1" id="' . $row['id'] . '" item="' . $row['item'] . '" price="' . $row['price'] . '">' . $row['item'] . '</p><hr>';
      echo " <input type='hidden' name='item' '".$row['item']."'>";
      echo  " <input type='hidden' name='price' ".$row['price']."'>";

    }
  } else {
    echo 'No results found.';
  }
  exit(); // Terminate script execution after displaying search results
}

// Close the database connection
mysqli_close($conn);




?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link rel="stylesheet" type="text/css" href="../bootstrap/bootstrap.css">
	<style type="text/css">
		


	</style>
 

</head>
<body>

	<form method="post" action="search,php">
  <input type="text" id="search" placeholder="Search">

</form>




</body>
</html>