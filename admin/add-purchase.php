<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>LMS || Add purchase</title>
	<link rel="website icon" type="png" href="../avatars/logobs.png">
	<link rel="stylesheet" type="text/css" href="../bootstrap/bootstrap.css">
	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
	<script>
	
        $(document).ready(function() {
            // Calculate total when user clicks outside an input field
            $('input[name="quantity"], input[name="unitprice"]').on('change', function() {
                calculateTotal();
            });

            // Function to calculate total
            function calculateTotal() {
                var quantity = parseFloat($('input[name="quantity"]').val());
                var unitPrice = parseFloat($('input[name="unitprice"]').val());

                if (!isNaN(quantity) && !isNaN(unitPrice)) {
                    var total = quantity * unitPrice;
                    $('input[name="total"]').val(total.toFixed(2));
                }
            }
        });


</script>

	<style type="text/css">
		body
		{
			font-family: sans-serif;
			font-size: 14px;
			margin: 0;
			padding: 0;
		}
		
		.form
		{
			margin: 20px auto;
			position: relative;
			display: flex;
			padding: 20px;
			z-index: -1;

		}
		label
		{
			flex: 20%;
		}
		input 
		{
			outline: none;
			flex: 50%;
		}

		.table
		{
			max-width: 75%;
			margin: 20px auto;
			
		}

		.table thead
   		{
   			background-color: #515448;
   			color: white;
   			font-size: 13px;

   		}
   		.data
   		{
   			border: none;
   		}
   		#tableTotal
   		{
   			float: right;

   		}
   		.tableTotal
   		{
   			float: right;
   			margin-right: 210px;
   		}
   		.addbtn
   		{
   			float: right;
   			margin-right: -120px;
   			margin-top: 20PX;
   			background-color: blueviolet;
   			width: 200px;
   			padding-top: 8px;
   			padding-bottom: 8px;
   			border: none;
   			border-radius: 10px;
   			font-weight: bold;
   		}

	</style>


</head>
<body>

<?php include_once('../includes/navbar.php') ?>

<form>
  <div class="container form me-5">
    <label for="supplier">
      Supplier:
      <input type="text" name="supplier">
    </label>

    <label for="invoice">
      Invoice no:
      <input type="number" name="invoice">
    </label>

    <label for="receipt">
      Receipt no:
      <input type="number" name="receipt">
    </label>

    <label for="date">
      Date:
      <input type="date" name="date">
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
        <td><input type="text" name="item[]" class="data"></td>
        <td><input type="number" name="unitprice[]" class="data unit-price" oninput="calculateRowTotal(this)"></td>
        <td><input type="number" name="quantity[]" class="data quantity" oninput="calculateRowTotal(this)"></td>
        <td><input type="number" name="total[]" disabled class="data total" value="0.00"></td>
        <td><button onclick="deleteRow(this)" class="ms-3"><i class="fas fa-trash text-danger"></i></button></td>
      </tr>
    </tbody>
  </table>

  <b><p class="tableTotal">Table Total: <span id="tableTotal">0.00</span></p></b><br>
  <button type="button" onclick="addRow()" class="addbtn text-white">Add Row</button>
</form>

	<script type="text/javascript">
		function calculateRowTotal(input) {
  var row = input.parentNode.parentNode;
  var quantity = parseFloat(row.querySelector('.quantity').value);
  var unitPrice = parseFloat(row.querySelector('.unit-price').value);

  if (!isNaN(quantity) && !isNaN(unitPrice)) {
    var total = (quantity * unitPrice).toFixed(2);
    row.querySelector('.total').value = total;
    calculateTableTotal();
  }
}

function calculateTableTotal() {
  var rows = document.querySelectorAll('#myTable tbody tr');
  var tableTotal = 0;

  for (var i = 0; i < rows.length; i++) {
    var quantity = parseFloat(rows[i].querySelector('.quantity').value);
    var unitPrice = parseFloat(rows[i].querySelector('.unit-price').value);

    if (!isNaN(quantity) && !isNaN(unitPrice)) {
      var total = (quantity * unitPrice);
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
  cell2.innerHTML = '<input type="number" name="unitprice[]" class="data unit-price" oninput="calculateRowTotal(this)">';
  cell3.innerHTML = '<input type="number" name="quantity[]" class="data quantity" oninput="calculateRowTotal(this)">';
  cell4.innerHTML = '<input type="number" name="total[]" disabled class="data total" value="0.00">';
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