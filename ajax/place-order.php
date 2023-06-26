

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>

    

</head>
<body>
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
    $itemquantity = $item['quantity'];
    $initial_payment = $item['initialPay']; 
    $sql = "INSERT INTO orderitems (order_id, item, quantity, customer, telephone, sex, paymethod, ExpressAmount, price, total, servedby, Dates, completed, completed_date,initialPayment)
            VALUES ('$id', '$itemId','$itemquantity', '$itemCustomerName', '$itemTelephone', '$itemSex', '$itemPaymentMethod', '$itemExpressAmount', '$itemPrice', '$total', '$servedby', '$currentDate', 0, 0, '$initial_payment')";

    // Execute the SQL query
    $result = mysqli_query($conn, $sql);

    if (!$result) {
        // Error occurred during insertion
          $errorMessage = "Error in SQL: " . mysqli_error($conn);
    echo "error in sql " . mysqli_error($conn);
    exit;
    }
    else
    {
         echo "<script>window.location.href='orders.php'</script>";
       
    }
}

// Close the database connection
mysqli_close($conn);


        unset($_SESSION['cart']);

   

?>


</body>
</html>

