<?php  
session_start();
include_once('../dbconfig/config.php');

if (isset($_SESSION['admin']) == 'true') {
    // code...


 
 
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="../bootstrap/bootstrap.css">

	<script type="" src="../js/bootstrap.bundle.min.js"></script>
	<link rel="stylesheet" type="text/css" href="../fonts/all.css">
	<title></title>

    <!-- ...existing HTML code... -->

<script type="text/javascript">
    document.addEventListener("DOMContentLoaded", function() {
        // Get the badge element
        const badge = document.querySelector('.btn');

        // Check if the current page is the change password page
        const isChangePasswordPage = window.location.pathname.includes('change-password.php');

        // Hide the badge if the current page is the change password page
        if (isChangePasswordPage) {
            badge.style.display = 'none';
        }
    });
</script>

<!-- ...remaining HTML code... -->


	<style type="text/css">
		body
		{
			font-family: sans-serif;
			font-size: 15px;
			margin: 0;
			padding: 0;
		}
			
		.navbar
		{
			background-color:  #4267b2;
		}
		.dropdown-toggle
		{
			margin-right: 90px;
		}

		 .nav-side {
            position: relative;
            top: -49px;
            background-color: #4267b2;
            width: 50px;
            transition: width 0.000001s;

        }

        .nav-side .links
        {

    		display: none;
        }

        .sidebar
        {
        	background-color:  #4267b2;
        	
        }

        .nav-side:hover
        {
        	width: 180px;

        }
        .links
        {
        	padding: 2px;
        	font-size: 12px;
        }

        .nav-side:hover .links
        {
        	display: inline;
        	
        }

        .sidebar li .submenu {
            list-style: none;
            margin: 0;
            padding: 0;
            padding-left: 0rem;
            padding-right: 0rem;
       
        }

        .push-nav {
            z-index: 1;
        }




	</style>




</head>
<body>
<?php 
    
    $currentDate = date('Y-m-d');
  $item_count = "SELECT COUNT(item) AS item_count FROM orderitems WHERE DATE(order_date) = '$currentDate' ";
  $count_result = mysqli_query($conn, $item_count);

  if (!$count_result) {
    // code...
    echo "error in sql" . mysqli_error($conn);
  }

  $counts = mysqli_fetch_assoc($count_result);


 ?>


		<nav class="navbar navbar navbar-expand-lg navbar-dark push-nav">
        <div class="container-fluid">
            <a class="navbar-brand ms-4" href="../admin/dashboard.php"><img src="../avatars/logobs.png" style=" height: 30px; width: 30px;"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse ms-5 ps-2" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="dashboard.php">Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="../order screen/order-screen.php" target="_blank">order screen</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Inventory
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="purchase.php">Add Expenses</a></li>
                              <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="today-sales.php">Today sales</a></li>
                          

                        </ul>
                    </li>
                </ul>
                <button type="button" class="btn  position-relative me-5">
                    <i class="fa-solid fa-cart-shopping text-white"></i>
                    <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                                    <?php echo $counts['item_count']; ?>
                                </span>
                                </button>
                <form class="d-flex me-4" role="search" >
                    <div class="dropdown"  >
                        <a class="nav-link dropdown-toggle " href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" >
                            <img src="../avatars/avatar.jpeg"  style=" height: 25px; width: 25px; border-radius: 50%; ">
                        </a>

                        <ul class="dropdown-menu ">
                            <li><a class="dropdown-item" href="change-password.php">Change password</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="dashboard.php?action=logout">Logout</a></li>
                        </ul>
                    </div>
                    <span class=" text-white"><small class="ms-"><?php echo $_SESSION['user']; ?></small></span>
                </form>
            </div>
        </div>
    </nav>

    <?php  

        if (isset($_GET['action'])) {
            // code...
            if ($_GET['action'] == 'logout') {
                // code...
                session_destroy();
                echo "<script>window.location.href='../login/login.php'</script>";
            }
        }


    ?>

<div style="height: 120vh; float: left; position: fixed; display: block;" class="text-white nav-side">

        <div class="sidebar card py-4 mb-1 my-5">
            <ul class="nav flex-column text-white" id="nav_accordion" style="padding-top: 55px;">
                <li class="nav-item ">
                    <a class="nav-link  text-white" href="dashboard.php"> <i class="fa-brands fa-windows"></i><span class="links ms-1">Dashboard</span></a>
                </li>
                <li class="nav-item has-submenu my-2">
                    <a class="nav-link text-white" href="#"> <i class="fa-sharp fa-solid fa-warehouse"></i><span class="links ms-1">Inventory</span></a>
                    <ul class="submenu collapse">
                        <li><a class="nav-link text-white" href="purchase.php"><i class="fa-solid fa-cart-shopping"></i><span class="links ms-1"> Add expenses</span></a></li>
                        <li><a class="nav-link text-white" href="today-sales.php"><i class="fa-sharp fa-solid fa-money-bill"></i><span class="links ms-1">Today sales</span></a></li>
                    </ul>
                </li>
                <li class="nav-item has-submenu my-2">
                    <a class="nav-link text-white" href="#"><i class="fa-solid fa-user-group"></i><span class="links">customer management</a></span>
                    <ul class="submenu collapse">
                        <li><a class="nav-link text-white" href="customers.php"><i class="fa-solid fa-user"></i><span class="links ms-1">customers</span></a></li>
                        <li><a class="nav-link text-white" href="add-customer.php"><i class="fa-solid fa-user"></i><span class="links ms-1">Add customers</span></a></li>
                      
                    </ul>
                </li>
                <li class="nav-item my-2">
                    <a class="nav-link text-white" href=""><i class="fa-solid fa-desktop"></i><span class="links ms-1">POS</span></a>
                    <ul class="submenu collapse">
                        <li><a class="nav-link text-white" href="pos-order.php"><i class="fa-solid fa-desktop"></i><span class="links ms-1">POS-order</span></a></li>
                        <li><a class="nav-link text-white" href="orders.php"><i class="fa-solid fa-desktop"></i><span class="links ms-1">My orders</span></a></li>
                    </ul>
                </li>
                <li class="nav-item my-2">
                    <a class="nav-link text-white" href=""><i class="fa-solid fa-bars"></i><span class="links ms-1">Order management</span></a>
                    <ul class="submenu collapse">
                        <li><a class="nav-link text-white" href="all-orders.php"><i class="fa-solid fa-list"></i><span class="links ms-1">orders</span></a></li>
                    </ul>
                </li>
                <li class="nav-item my-2">
                    <a class="nav-link text-white" href="menu.php"><i class="fa-solid fa-ellipsis"></i><span class="links ms-1">Menu Items</span></a>
                </li>
                 <li class="nav-item my-2">
                    <a class="nav-link text-white" href=""><i class="fa-solid fa-solid fa-users"></i><span class="links ms-1">ERP</span></a>
                    <ul class="submenu collapse">
                        <li><a class="nav-link text-white" href="employee.php"><i class="fa-solid fa-user-tag"></i><span class="links ms-1">Employees</span></a></li>
                    </ul>
                </li>
                <li class="nav-item my-2">
                    <a class="nav-link text-white" href=""><i class="fa-solid fa-user"></i><span class="links ms-1">Profile</span></a>
                    <ul class="submenu collapse">
                        <li><a class="nav-link text-white" href="change-password.php"><i class="fa-solid fa-lock"></i><span class="links ms-1">Change password</span></a></li>
                        <li><a class="nav-link text-white" href="dashboard.php?action=logout"><i class="fa-solid fa-right-from-bracket"></i><span class="links ms-1">Logout</span></a></li>
                    </ul>

                </li>
            </ul>
        </div>



    </div>

    </div>



     
    </script> <script type="text/javascript">
        document.addEventListener("DOMContentLoaded", function() {
            document.querySelectorAll('.sidebar .nav-link').forEach(function(element) {

                element.addEventListener('click', function(e) {

                    let nextEl = element.nextElementSibling;
                    let parentEl = element.parentElement;

                    if (nextEl) {
                        e.preventDefault();
                        let mycollapse = new bootstrap.Collapse(nextEl);

                        if (nextEl.classList.contains('show')) {
                            mycollapse.hide();
                        } else {
                            mycollapse.show();
                            // find other submenus with class=show
                            var opened_submenu = parentEl.parentElement.querySelector('.submenu.show');
                            // if it exists, then close all of them
                            if (opened_submenu) {
                                new bootstrap.Collapse(opened_submenu);
                            }
                        }
                    }
                }); // addEventListener
            }) // forEach
        });
        // DOMContentLoaded  end
    </script>

<?php } 

else
{
    echo "<script>window.location.href='../login/login.php'</script>";
}


?>
</body>
</html>