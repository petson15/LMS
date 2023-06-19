<?php
session_start();

include_once('../dbconfig/config.php');

$id = uniqid();
$telephone = $_POST['telephone'];
$paymentMethod = $_POST['paymentMethod'];
$customerName = $_POST['customerName'];
$sex = $_POST['sex'];
$express = $_POST['express'];

foreach ($_SESSION['cart'] as $item) {
    $itemId = $item['item'];
    $itemCustomerName = $item['customerName'];
    $itemTelephone = $item['telephone'];
    $itemSex = $item['sex'];
    $itemPaymentMethod = $item['paymentMethod'];
    $itemExpressAmount = $item['express'];
    $itemPrice = $item['price'];
    $total = $_SESSION['total'];
    $servedby = $_SESSION['user'];
    $currentDate = date('Y-m-d');
    $sql = "INSERT INTO orderitems (order_id, item, customer, telephone, sex, paymethod, ExpressAmount, price, total, servedby, Dates, completed)
            VALUES ('$id', '$itemId', '$itemCustomerName', '$itemTelephone', '$itemSex', '$itemPaymentMethod', '$itemExpressAmount', '$itemPrice', '$total', '$servedby', '$currentDate', 0)";

    // Execute the SQL query
    $result = mysqli_query($conn, $sql);

    if (!$result) {
        // Error occurred during insertion
         echo "error in sql" . mysqli_error($conn);
        exit;
    }
}

// Close the database connection
mysqli_close($conn);

unset($_SESSION['cart']);

echo "<script>window.location.href='orders.php'</script>";



?>

