<?php

   
?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="./fonts/all.css">
     <script type="text/javascript" src="./js/jquery.js"></script>
      <link rel="website icon" type="png" href="./avatars/logobs.png">


    <title></title>
    <style type="text/css"> 
        table {
            margin: 20px auto;
            width: 40%;
        }

         .modals {
      display: none;
      position: fixed;
      z-index: 1;
      left: 0;
      top: 0;
      width: 100%;
      height: 100%;
      overflow: auto;
      background-color: rgba(0, 0, 0, 0.4);
    }
    
    .modal-contents {
      background-color: #fefefe;
      margin: 15% auto;
      padding: 40px;
      border: 1px solid #888;
      width: 550px;
      text-align: center;

    }
    </style>
</head>
<body>

    <?php 
    include_once('navbar.php');
    //unset($_SESSION['cart']);
    include_once('./dbconfig/config.php');
  
  


 

if (isset($_POST['item']) && isset($_POST['price']) && isset($_POST['quantity'])) {
    $item = mysqli_escape_string($conn, $_POST['item']); 
    $price = $_POST['price'];
    $quantity = $_POST['quantity'];
    $telephone = mysqli_escape_string($conn, $_POST['telephone']);
    $customerName = mysqli_escape_string($conn, $_POST['customerName']); 
    $sex = $_POST['sex'];
    $paymentMethod = $_POST['paymentMethod'];


    $id = $_POST['id'];
    $total = 0;

    $data = [
        'item' => $item,
        'price' => $price,
        'quantity' => $quantity,
        'telephone' => $telephone,
        'customerName' => $customerName,
        'sex' => $sex,
        'paymentMethod' => $paymentMethod,
        'id' => $id,


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

     <div class="me-1 my-3 container text-muted ">
          <h4 >Items Cart</h4>

            <?php  
                if (!empty($_SESSION['cart'])) {
                    // code...
                       foreach($_SESSION['cart'] as $key => $value)
                {
                    $name = $value['customerName'];
                    $tel = $value['telephone'];
                    $sex = $value['sex'];
                    $paymentMethod = $value['paymentMethod'];
                }

                echo "<h6>Customer: ". $name. "</h6>";
                echo "<h6>Telephone: ". $tel. "</h6>";
                echo "<h6>Sex: ". $sex. "</h6>";
                echo "<h6>Payment type: ". $paymentMethod. "</h6>";

                echo '
                           <div class="me-1 my-3 container">

           
     </div>
    

                    ';


                }
             

             ?>

     </div>

  
   

    <div>
     <?php

    $total = 0;
    $express =0;
    $output = "";
    $output .= "<form method='POST' action='add_menu.php'>
    <div  class='me-1 my-3 container text-muted '>
     <label for='initial-payment'>initial payment:
                    <input type='number' name='initial_payment' required style='outline: none;'>
                </label><br>
                <label for='express-amount' class='my-2'>express amount:
                    <input type='number' name='express_amount' required  style='outline: none;'>
                </label>
                </div>
        <table class='my-4' style='width: 65%; margin: 100px auto;'>
            <tr>
                <td>Item</td>
                <td>Price</td>
                <td>Quantity</td>
                <td>Total</td>
                <td>Action</td>
            </tr>";

    if (!empty($_SESSION['cart'])) {
        foreach ($_SESSION['cart'] as $key => $value) {
            $output .= "
            <tr>
                <td>".$value['item']."</td>
                <td>".$value['price']."</td>
                <td>".$value['quantity']."</td>
                <td>".number_format($value['price'] * $value['quantity'])."</td>
                <td>

              <a href = 'add_menu.php?delete=remove&id=".$value['id']."' >
              <i title='delete' class='fa-solid fa-trash text-danger'></i>
              </a>

              </td>
            </tr>";
            $total += $value['quantity'] * $value['price'];
        }
        
        $output .= "
            <tr>
                <td colspan='2'></td>
                <td><b>Total</b></td>
                <td>".number_format($total, 2)."</td>
                <input type='hidden' name='total' value='".$total."'>
                <td>
                    <a href = 'add_menu.php?action=clearall'>
                        <button type='button' name ='clear' class='btn btn-warning btn-sm text-white' style='width: 80px;'>Clear All</button>
                    </a>
                </td>
            </tr>
            <tr>
            <td colspa='1'></td>
            
                <td>

    <button class='btn btn-place text-white' style='background-color: blueviolet;'' type='submit' name='place_order'>Place Order</button>


                </td>
            </tr>
        ";
          $output .= "</table></form>";
       echo $output;
 
    }

    else{

echo "<h2 style='text-align: center;' class='text-muted'>no items added</h2>";


    }

  



  


     if (isset($_GET['action']) == "clearall") {
              // code...
                    // code...
                    unset($_SESSION['cart']);
                    $_SESSION['count'] =0;
                    
              echo "<script>window.location.href='pos-order.php'</script>";
                }


              if(isset($_GET['delete'])) {
              // code...

                if ($_GET['delete'] == "remove") {
                  // code...
                   foreach ($_SESSION['cart'] as $key => $value) {
                // code...
                if ($value['id'] == $_GET['id']) {
                  // code...
                  unset($_SESSION['cart'][$key]);
                   $_SESSION['count'] -=1;
                  echo "<script>window.location.href='add_menu.php'</script>";

                }
              }
                }


             

            }



    ?>
       
</div>

<?php

if (isset($_POST['place_order'])) {
        // code...

$id = uniqid();
$initial_payment = $_POST['initial_payment'];
$express_amount = $_POST['express_amount'];
$total = $_POST['total'];
$name = "";
$telephone = "";
foreach ($_SESSION['cart'] as $item) {
    $items = $item['item'];
    $itemCustomerName = $item['customerName'];
    $itemTelephone = $item['telephone'];
    $itemSex = $item['sex'];
    $itemPaymentMethod = $item['paymentMethod'];
    $itemPrice = $item['price'];
    $servedby = $_SESSION['employee'];
    $currentDate = date('Y-m-d');
    $itemquantity = $item['quantity'];
    $name = $item['customerName'];
    $telephone = $item['telephone'];
    
    $sql = "INSERT INTO orderitems (order_id, item, quantity, customer, telephone, sex, paymethod, ExpressAmount, price, total, servedby, Dates, completed, completed_date,initialPayment)
            VALUES ('$id', '$items','$itemquantity', '$itemCustomerName', '$itemTelephone', '$itemSex', '$itemPaymentMethod', '$express_amount', '$itemPrice', '$total', '$servedby', '$currentDate', 0, 0, '$initial_payment')";

    // Execute the SQL query
    $result = mysqli_query($conn, $sql);

    if (!$result) {
        // Error occurred during insertion
          $errorMessage = "Error in SQL: " . mysqli_error($conn);
    echo "error in sql " . mysqli_error($conn);
    exit;
    }
    else
    {        echo '<div class="modals" style="display:block;">
          <div class="modal-contents">
            <p>Your order has been placed successfully.</p>
            <i class="fa-solid fa-circle-check fa-bounce text-info" style = "font-size:70px;"></i>
            <b><p>invoice number #'.$id.'</p></b>
            <button onclick="window.location.href=\'orders.php\'" class="btn btn-primary">OK</button>
          </div>
        </div>';

           unset($_SESSION['cart']);
       
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


                $customer_query = "INSERT INTO customers (tagnumber,name, telephone) VALUES('$newId','$name', '$telephone')";
                $result = mysqli_query($conn, $customer_query);

                if (!$result) {
                    // code...
                    echo "error in sql" . mysqli_error($conn);
                }
    

}


// Close the database connection
mysqli_close($conn);


        unset($_SESSION['cart']);

   
    }


?>
   <div class="modal fade" id="thisModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-danger" id="exampleModalLabel">ERROR IN ORDER</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body text-danger">
        Phone number is incorrect
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
</body>
</html>