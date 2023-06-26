<?php  

session_start();
include_once('../dbconfig/config.php');

$id =  $_SESSION['uniqueID'];
$order_id = "";

$sql = "SELECT DISTINCT order_id, order_date, servedby,id, paymethod, total, telephone, customer,initialPayment
        FROM orderitems WHERE id = '$id'
        GROUP BY order_id DESC";
$res = mysqli_query($conn, $sql);

if (!$res) {
    echo  mysqli_error($conn);
}

$row = mysqli_fetch_assoc($res);
$tel = $row['telephone'];

$search_tagnumber = "SELECT * FROM customers WHERE telephone = '$tel' ";
$search_result = mysqli_query($conn, $search_tagnumber);

if (!$search_result) {
 	// code...
 	echo "error sql " . mysqli_error($conn);
 } 

 $fetch = mysqli_fetch_assoc($search_result);

?>



<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>LMS || RECEIPT</title>
	<link rel="website icon" type="png" href="../avatars/logobs.png">
	<link rel="stylesheet" type="text/css" href="../bootstrap/bootstrap.css">

	<style type="text/css">
		p 
		{
			font-size:13px;
		}
	</style>
</head>
<body>

<img src="../avatars/logobs.png" style="width: 150px; height: 120px;" class="ms-5 my-3">

<div class="ms-4 my-3">
	
<p>For Enquiries call -Philip: 0201482964</p>
<p>busrtcleanlaundry@gmail.com</p>
<b><P>Address: Occansey Adjacent Presec Basic</P></b>
<b><p>Invoice ID: <?php echo $row['order_id'] ?></p></b>
<b><P>Order Date: <?php echo $row['order_date'] ?></P></b>
<b><P>Expected Pickup Date: <?php echo date('Y-m-d', strtotime( $row['order_date'] . ' +3 days'))?></P></b>
<b><P>Customer Name: <?php echo $row['customer'] ?></P></b>
<b><P>Customer TagNumber: <?php echo $fetch['tagnumber'] ?></P></b>
<b><P>Tel: <?php echo $row['telephone'] ?></P></b>
<?php $order_id = $row['order_id']; ?>

	<table style="font-size:14px" class="my-1">

		<tr>
			<th>item</th>
			<th>quantity</th>
			<th>price</th>
		</tr>
		<?php 



		$sql = "SELECT servedby,item, price, total,initialPayment,quantity
        FROM orderitems WHERE order_id = '$order_id'";
		$res = mysqli_query($conn, $sql);

			while ($rows = mysqli_fetch_assoc($res)) {
				// code...
			


		 ?>
		<tr>
			<td><?php echo $rows['item'] ?></td>
			<td align="center"><?php echo $rows['quantity'] ?></td>
			<td align="center" ><?php echo $rows['price'] ?></td>
		</tr>
	<?php } ?>
	
	</table>

	<?php  

		$sql = "SELECT total, initialPayment FROM orderitems WHERE order_id = '$order_id'";
		$res = mysqli_query($conn, $sql);
		$row = mysqli_fetch_assoc($res);
		?>

	<b><p class="my-4" style="margin-left:140px;">Total: <?php echo $row['total'] ?></p></b>
	<b><p style="margin-left:77px; margin-bottom: 20px;">Initial Payment: <?php echo $row['initialPayment'] ?></p></b>
	<b><p style="margin-left:77px; margin-bottom: 20px;">Amount Due: <?php echo $row['total'] -$row['initialPayment'] ?></p></b>


	<p><b>Disclaimer:</b></p>

	<small style="font-size:12px"><b>THANKS FOR YOU PATRONAGE</b></small><br>
	<small style="font-size:12px"><b>powered by PETSON</b></small>

</div>


<script type="text/javascript">
	
	window.onload = function() {
  window.print();
	};
</script>
		


</body>
</html>