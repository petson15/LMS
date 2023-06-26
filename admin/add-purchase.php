<?php
include_once('../dbconfig/config.php');
?> 

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>LMS || Add purchase</title>
    <link rel="website icon" type="png" href="../avatars/logobs.png">
    <link rel="stylesheet" type="text/css" href="../bootstrap/bootstrap.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <style type="text/css">
        body {
            font-family: sans-serif;
            font-size: 14px;
            margin: 0;
            padding: 0;
        }
        
        .form {
            margin: 20px auto;
            position: relative;
            display: flex;
            padding: 20px;
        }

        label {
            flex: 20%;
        }

        input {
            outline: none;
            flex: 50%;
        }

        .table {
            max-width: 75%;
            margin: 20px auto;
        }

        .table thead {
            background-color: #515448;
            color: white;
            font-size: 13px;
        }

        .data {
            border: none;
        }

        #tableTotal {
            float: right;
        }

        .tableTotal {
            float: right;
            margin-right: 210px;
        }

        .addbtn {
            float: right;
            margin-right: -120px;
            margin-top: 20px;
            background-color: blueviolet;
            width: 200px;
            padding-top: 4px;
            padding-bottom: 4px;
            border: none;
            border-radius: 10px;
        }

        .btnSave {
            background-color: blueviolet;
            position: relative;
            left: 46%;
            right: 50%;
            top: 30px;
            width: 200px;
            padding-top: 12px;
            padding-bottom: 12px;
            border: none;
            border-radius: 10px;
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

<?php include_once('../includes/navbar.php') ?>

<form method="POST" action="add-purchase.php">
    <div class="container form me-5">
        <label for="supplier">
            Supplier:
            <input type="text" name="supplier" required>
        </label>

        <label for="invoice">
            Invoice no:
            <input type="number" name="invoice" required>
        </label>

        <label for="receipt">
            Receipt no:
            <input type="number" name="receipt" required>
        </label>

        <label for="date">
            Date:
            <input type="date" name="date" required>
        </label>
    </div>

    <table class="table table-bordered fw-semilight my-5" id="myTable">
        <thead>
            <tr>
                <th scope="col">Item</th>
                <th scope="col">Quantity</th>
                <th scope="col">Unit price</th>
                <th scope="col">Total</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><input type="text" name="items[]" class="data"></td>
              <td><input type="number" name="unitprice[]" class="data unitprice" oninput="calculateRowTotal(this)"></td>

                <td><input type="number" name="quantity[]" class="data quantity" oninput="calculateRowTotal(this)"></td>
                <td><input type="number" name="total[]" disabled class="data total" value></td>
                <td><button onclick="deleteRow(this)" class="ms-3"><i class="fas fa-trash text-danger"></i></button></td>
            </tr>
            <tr>
                <td><input type="text" name="items[]" class="data"></td>
                <td><input type="number" name="unitprice[]" class="data unitprice" oninput="calculateRowTotal(this)"></td>
                <td><input type="number" name="quantity[]" class="data quantity" oninput="calculateRowTotal(this)"></td>
                <td><input type="number" name="total[]" disabled class="data total" value></td>
                <td><button onclick="deleteRow(this)" class="ms-3"><i class="fas fa-trash text-danger"></i></button></td>
            </tr>
            <tr>
                <td><input type="text" name="items[]" class="data"></td>
              <td><input type="number" name="unitprice[]" class="data unitprice" oninput="calculateRowTotal(this)"></td>

                <td><input type="number" name="quantity[]" class="data quantity" oninput="calculateRowTotal(this)"></td>
                <td><input type="number" name="total[]" disabled class="data total" value></td>
                <td><button onclick="deleteRow(this)" class="ms-3"><i class="fas fa-trash text-danger"></i></button></td>
            </tr>
            <tr>
                <td><input type="text" name="items[]" class="data"></td>
     <td><input type="number" name="unitprice[]" class="data unitprice" oninput="calculateRowTotal(this)"></td>

                <td><input type="number" name="quantity[]" class="data quantity" oninput="calculateRowTotal(this)"></td>
                <td><input type="number" name="total[]" readonly class="data total" ></td>
                <td><button onclick="deleteRow(this)" class="ms-3"><i class="fas fa-trash text-danger"></i></button></td>
            </tr>
        </tbody>
    </table>

   <b><p class="tableTotal">Table Total: <span id="tableTotal" >0.00</span></p></b><br>
    <button type="button" onclick="addRow()" class="addbtn text-white">Add Row</button>
    <!-- Hidden field to store purchase data -->
    <input type="hidden" name="save" value="save">

    <button class="btnSave my-5 text-white" type="submit"><i class="fa-solid fa-floppy-disk"></i> Save purchase</button>
</form>

<?php


if (isset($_POST['save'])) {
    $total = 0;
    $supplier = mysqli_real_escape_string($conn, $_POST['supplier']);
    $invoice = mysqli_real_escape_string($conn,$_POST['invoice']);
    $receipt = mysqli_real_escape_string($conn,$_POST['receipt']);
    $date = mysqli_real_escape_string($conn,$_POST['date']);
    $items = mysqli_real_escape_string($conn,$_POST['items']);
    $quantity = mysqli_real_escape_string($conn,$_POST['quantity']);
    $unitPrice = mysqli_real_escape_string($conn,$_POST['unitprice']);
    $loggedby = $_SESSION['user'];

    $rowCount = count($items);

    for ($i = 0; $i < $rowCount; $i++) {
        $purchaseData = [
            'supplier' => $supplier, 
            'invoice' => $invoice,
            'receipt' => $receipt,
            'date' => $date,
            'items' => $items[$i],
            'unitprice' => $unitPrice[$i],
            'quantity' => $quantity[$i],
        ];
        $subtotal = $unitPrice[$i] * $quantity[$i];
        $total += $subtotal;

        $sql = "INSERT INTO purchases (items, unitprice, dates, supplier, invoice, receipt_number, quantity, loggedby,total) VALUES ('$items[$i]', '$unitPrice[$i]', '$date', '$supplier', '$invoice', '$receipt', '$quantity[$i]', '$loggedby', '$total')";
        $res = mysqli_query($conn, $sql);

        if (!$res) {
            echo "Error in SQL: " . mysqli_error($conn);
            exit;
        }
        else
        {
              echo '<div class="modals" style="display:block;">
          <div class="modal-contents">
              <b><h5>WELL DONE!</p></h5>
            <i class="fa-solid fa-circle-check text-info" style = "font-size:70px;"></i>
            <b><h5>Purchase Saved</p></h5>
            <button onclick="window.location.href=\'purchase.php\'" class="btn btn-md btn-primary">OK</button>
          </div>
        </div>"';

        }
    }

    mysqli_close($conn);
}


  

?>



<script type="text/javascript">
    function calculateRowTotal(input) {
        var row = input.parentNode.parentNode;
        var quantity = parseFloat(row.querySelector('.quantity').value);
        var unitPrice = parseFloat(row.querySelector('.unitprice').value);

        if (!isNaN(quantity) && !isNaN(unitPrice)) {
            var total = quantity * unitPrice;
            row.querySelector('.total').value = total.toFixed(2);
            calculateTableTotal();
        }
    }

    function calculateTableTotal() {
        var rows = document.querySelectorAll('#myTable tbody tr');
        var tableTotal = 0;

        for (var i = 0; i < rows.length; i++) {
            var quantity = parseFloat(rows[i].querySelector('.quantity').value);
            var unitPrice = parseFloat(rows[i].querySelector('.unitprice').value);

            if (!isNaN(quantity) && !isNaN(unitPrice)) {
                var total = quantity * unitPrice;
                tableTotal += total;
            }
        }

        document.getElementById('tableTotal').innerHTML = tableTotal.toFixed(2);
    }

    function addRow() {
        var table = document.getElementById('myTable');
        var rowCount = table.rows.length;

        var row = table.insertRow(rowCount - 1);
        var cell1 = row.insertCell(0);
        var cell2 = row.insertCell(1);
        var cell3 = row.insertCell(2);
        var cell4 = row.insertCell(3);
        var cell5 = row.insertCell(4);

        cell1.innerHTML = '<input type="text" name="item[]" class="data">';
        cell2.innerHTML = '<input type="number" name="unitprice[]" class="data unitprice" oninput="calculateRowTotal(this)">';
        cell3.innerHTML = '<input type="number" name="quantity[]" class="data quantity" oninput="calculateRowTotal(this)">';
        cell4.innerHTML = '<input type="number" name="total[]" disabled class="data total" ">';
        cell5.innerHTML = '<button onclick="deleteRow(this)" class="ms-3"><i class="fas fa-trash text-danger"></i></button>';

        calculateTableTotal();
    }

    function deleteRow(button) {
        var row = button.parentNode.parentNode;
        row.parentNode.removeChild(row);
        calculateTableTotal();
    }
</script>


</body>
</html>
