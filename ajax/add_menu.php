<?php

	session_start();
	//unset($_SESSION['cart']);


	$item = $_POST['item'];
	$price = $_POST['price'];
	$quantity = $_POST['quantity'];
	$telephone = $_POST['telephone'];
	$customerName = $_POST['customerName'];
	$sex = $_POST['sex'];
	$paymentMethod = $_POST['paymentMethod'];
	$id = $_POST['id'];



if (isset($_POST['item']) && isset($_POST['price']) && isset($_POST['quantity'])) {
    $item = $_POST['item'];
    $price = $_POST['price'];
    $quantity = $_POST['quantity'];
    $telephone = $_POST['telephone'];
    $customerName = $_POST['customerName'];
    $sex = $_POST['sex'];
    $paymentMethod = $_POST['paymentMethod'];
    $id = $_POST['id'];

    $data = [
        'item' => $item,
        'price' => $price,
        'quantity' => $quantity,
        'telephone' => $telephone,
        'customerName' => $customerName,
        'sex' => $sex,
        'paymentMethod' => $paymentMethod,
        'id' => $id
    ];

    // Store the data in the session
    if (!isset($_SESSION['cart'])) {
        $_SESSION['cart'] = [];
    }
    $_SESSION['cart'][] = $data;

    // Output the cart data
   // var_dump($_SESSION['cart']);
}


?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="../fonts/all.css">
	<title></title>
	<style type="text/css"> 
		table {
			margin: 20px auto;
			width: 40%;
		}
	</style>
</head>
<script type="text/javascript">
	
	// Function to unset the session using AJAX
function clearSession() {
    // Create a new XMLHttpRequest object
    var xhr = new XMLHttpRequest();
  
    // Set up the request
    xhr.open('GET', '../ajax/clear-session.php', true);
  
    // Define the callback function 
    xhr.onreadystatechange = function() {
        if (xhr.readyState === XMLHttpRequest.DONE) {
            if (xhr.status === 200) {
                // Success - do something if needed
                 location.reload();
                
            } else {
                // Error - handle appropriately
                console.log('Error clearing session');
            }
        } 
    };
  
    // Send the request
    xhr.send();
}


	// Function to unset a single item from the session using AJAX



</script>
<body>
	<div>
		<?php

		$total = 0;
$output = "";

$output .= "
    <form method='POST' action='pos-order.php'>
    <table class='my-4' style='width: 65%; margin: 100px auto;' >
        <tr>
            <td>Item</td>
            <td>Price</td>
            <td>Quantity</td>
            <td>Total</td>
           
        </tr>
";

if (!empty($_SESSION['cart'])) {
    foreach ($_SESSION['cart'] as $key => $value) {
    $output .= "
    <tr>
        <td>".$value['item']."</td>
        <td>".$value['price']."</td>
        <td>".$value['quantity']."</td>
        <td>".number_format($value['price'] * $value['quantity'])."</td>
        
    </tr>";




        $total += $value['quantity'] * $value['price'];
    }

    $output .= "
        <tr>
            <td colspan='2'></td>
            <td><b>Total</td>
            <td>".number_format($total, 2)."</td>
            <input type='hidden' name='total' value='".$total."'>
            <td>
                <a href='javascript:void(0);' onclick='clearSession();'>
   								 <button type='button' class='btn btn-warning btn-sm text-white' style='width: 80px;'>Clear All</button>
								</a>

            </td>
        </tr>
        <tr>
            <td colspan='1'></td>
            <td>
                <button class='btn text-white' style='background-color: #90ee90;' type='submit' name='place_order'>Place Order</button>
            </td>
        </tr>
    ";
}

echo $output;


		?>
		
	</div>
</body>
</html>
