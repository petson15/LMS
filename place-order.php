
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

include_once('./dbconfig/config.php');

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
    $servedby = $_SESSION['employee'];
    $currentDate = date('Y-m-d');
    $itemquantity = $item['quantity'];
     $initial_payment = $_SESSION['initial_payment']; 
    
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
         //echo "<script>window.location.href='orders.php'</script>";
       
    }
}


     $check_query = "SELECT * FROM customers WHERE telephone = '$telephone'";
    $check_result = mysqli_query($conn, $check_query);

    if (!$check_result) {
    // code...
    echo "error in sql" . mysqli_error($conn);
}   


        if (mysqli_num_rows($check_result) == 0) {

    $customer_tag = "SELECT MAX(id) AS max_id FROM customers";
    $tag_result = mysqli_query($conn, $customer_tag);
            if (!$tag_result) {
            // code...
            echo "error in sql" . mysqli_error($conn);
                }
                $row = mysqli_fetch_assoc($tag_result);
                $maxId = $row['max_id'];

                // Increment the customer ID
                $newId = sprintf('%03d', intval($maxId) + 1); 


                $customer_query = "INSERT INTO customers (tagnumber,name, telephone) VALUES('$newId','$customerName', '$telephone')";
                $result = mysqli_query($conn, $customer_query);

                if (!$result) {
                    // code...
                    echo "error in sql" . mysqli_error($conn);
                }
    

}


// Close the database connection
mysqli_close($conn);


        unset($_SESSION['cart']);

   

?>


</body>
</html>
