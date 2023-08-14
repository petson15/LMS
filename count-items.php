<?php
session_start();
$counts = 0;
if (!empty($_SESSION['cart'])) {
    $counts = count($_SESSION['cart']); // Use the count() function to get the number of items in the cart
}
echo $counts; // Return the count as the response to the AJAX request
?>
