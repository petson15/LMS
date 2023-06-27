<?php
include_once('./dbconfig/config.php');

$user = "";
$page = 1;
if (isset($_GET['page'])) {
    $page = $_GET['page'];
}

$num_per_page = 12;
$start_from = ($page - 1) * $num_per_page;

$searchValue = '';
if (isset($_GET['search'])) {
    $searchValue = $_GET['search'];
}

$sql = "SELECT DISTINCT id, order_id, order_date, servedby, paymethod, total, telephone, customer, initialPayment
        FROM orderitems
        WHERE customer LIKE '%$searchValue%' OR telephone LIKE '%$searchValue%' OR paymethod LIKE '%$searchValue%' OR order_id LIKE '%$searchValue%' 
        GROUP BY order_id DESC
        LIMIT $start_from, $num_per_page";

$res = mysqli_query($conn, $sql);

if (!$res) {
    echo mysqli_error($conn);
}

$total_rows_sql = "SELECT COUNT(DISTINCT order_id) AS total FROM orderitems WHERE servedby = '$user' AND (customer LIKE '%$searchValue%' OR telephone LIKE '%$searchValue%' OR paymethod LIKE '%$searchValue%')";
$total_rows_result = mysqli_query($conn, $total_rows_sql);
$total_rows_row = mysqli_fetch_assoc($total_rows_result);
$total_rows = $total_rows_row['total'];
$total_pages = ceil($total_rows / $num_per_page);
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="website icon" type="png" href="./avatars/logobs.png">
    <link rel="stylesheet" type="text/css" href="./bootstrap/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="./fonts/all.css">
    <title>LMS || My Orders</title>

    <style type="text/css">
        .table {
            max-width: 80%;
            margin: 20px auto;
        }

        .table thead {
            background-color: #515448;
            color: white;
            font-size: 13px;
        }

        .btn {
            position: relative;
            left: 180px;
            margin: 2px;
            bottom: 34px;
        }

        #searchInput {
            float: right;
            display: flex;
            position: relative;
            top: 20px;
            right: 150px;
            outline: none;
        }
    </style>
</head>
<body>
    <?php include_once('navbar.php'); 


    $user =$_SESSION['employee'];
    ?>

    <input type="text" name="search" class="search" placeholder="Search" id="searchInput" value="<?php echo $searchValue; ?>" onkeyup="startSearchTimer()">


    <table class="table table-bordered fw-semilight my-5" id="orderTable">
        <thead>
            <tr>
                <th scope="col">OrderID</th>
                <th scope="col">Customer</th>
                <th scope="col">Telephone</th>
                <th scope="col">Payment method</th>
                <th scope="col">Total</th>
                <th scope="col">Initial payment</th>
                <th scope="col">Amount Due</th>
                <th scope="col">Order date</th>
                <th scope="col">Served by</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            while ($row = mysqli_fetch_assoc($res)) {
                if ($row['servedby'] == $_SESSION['employee']) {
            ?>
            <tr>
                <td><?php echo $row['order_id']; ?></td>
                <td><?php echo $row['customer']; ?></td>
                <td><?php echo $row['telephone']; ?></td>
                <td><?php echo $row['paymethod']; ?></td>
                <td>GHC <?php echo $row['total']; ?></td>
                <td>GHC <?php echo $row['initialPayment']; ?></td>
                <td>GHC <?php echo $row['total'] - $row['initialPayment']; ?></td>
                <td><?php echo $row['order_date']; ?></td>
                <td><?php echo $row['servedby']; ?></td>
                <td><a href="orders.php?id=<?php echo $row['id']; ?>"><i title="print" class="fa-solid fa-eye ms-3 text-primary"></i></a></td>
            </tr>
            <?php
                }
            }
            ?>
        </tbody>
    </table>

    <?php
    if ($page > 1) {
        echo "<a class='btn-sm btn btn-primary text-primary bg-light' href='orders.php?page=".($page-1)."'>Previous</a>";
    }

    for ($i = 1; $i <= $total_pages; $i++) {
        echo "<a class='btn-sm btn btn-primary text-primary bg-light' href='orders.php?page=$i'>$i</a>";
    }

    if ($page < $total_pages) {
        echo "<a class='btn btn-sm btn-primary text-primary bg-light' href='orders.php?page=".($page+1)."'>Next</a>";
    }

    if (isset($_GET['id'])) {
        $_SESSION['orderID'] = $_GET['id'];
        echo "<script>window.location.href='order-details.php'</script>";
    }
    ?>

    <script type="text/javascript">
             var searchTimer;

        function startSearchTimer() {
            clearTimeout(searchTimer);
            searchTimer = setTimeout(performSearch, 500); // Adjust the delay here (in milliseconds)
        }

        function performSearch() {
            var searchValue = document.getElementById('searchInput').value;
            window.location.href = 'orders.php?search=' + encodeURIComponent(searchValue);
        }
    </script>
</body>
</html>
