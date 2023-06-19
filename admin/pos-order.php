<?php  
include_once('../dbconfig/config.php');

$sql = 'SELECT * FROM menu';
$res = mysqli_query($conn, $sql);

if (!$res) {
    echo "error in sql" . mysqli_error();
}


    


?>
  
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>LMS || POS</title>
    <link rel="website icon" type="png" href="../avatars/logobs.png">
    <link rel="stylesheet" type="text/css" href="../bootstrap/bootstrap.css">
    <script type="text/javascript" src="../js/jquery.js"></script>
    <script>

        $(document).ready(function(){
            $(".btn-add-item").click(function(){
                let item = $(this).attr("item");
                let id = $(this).attr('id');
                let price = $(this).attr("price");
                let quantity = $(this).closest("tr").find(".form-control").val();
                let telephone = $("input[name='tel']").val();
                let customerName = $("input[name='cus-name']").val();
                 let sex = $("select[name='sex']").val();
                  let paymentMethod = $("select[name='pay-method']").val();
                  let express = $("select[name='express']").val();

                     if (telephone === '' || customerName === '' || paymentMethod == 0 || sex == 0) {
           $('#myModal').modal('show');
            return false;
        }


                $.ajax({
                    url: "../ajax/add_menu.php",
                    method: "POST",
                    data: { 
                        item: item,
                         price: price,
                        quantity: quantity,
                        telephone: telephone,
                        customerName: customerName,
                        sex: sex, 
                        paymentMethod: paymentMethod,
                        id: id,
                        express: express


                    },
                    success:function(data){
                        $(".item_table").html(data);
                    }
                });

            });
        });


    </script>

    <style type="text/css">
        .pos-form {
            position: relative;
            margin: 20px auto;
        }
    
        .pos-form label {
            outline: none;
            margin-left: 90px;
        }

        .searchBtn {
            width: 100px;
            padding-left: 50px;
        }
        
        .pos-form input {
            outline: none;
        }
        
        .form-select {
            max-width: 100px;
        }

        #floatingSelect {
            max-width: 17%;
            height: 40px;
            line-height: 20px;
            padding: 2px;
            margin-right: 130px;
            margin-top: 10px;
        }

        .line {
            margin: 20px auto;    
        }

        hr {
            width: 75%;
        }

        #searchResults {
            z-index: 1;
            background-color: #d9eeef;
            width: 195px;
            margin-left: 85px;
            position: absolute;
            border-radius: 5px;
            overflow: auto;
        }

        #search:focus + #searchResults {
            height: 100px;
            display: block;
        }

        .search {
            outline: none;
        }
        .item_table
        {
            margin: 20px auto;
           
        }
    </style>
</head>
<body>
    <?php include_once('../includes/navbar.php') ?>
    
    <div class="container my-5" style="max-width: 80%;">
        <div class="pos-form ms-4">
            <label for="cus-name" class="ms-">
                Telephone:
                <input type="tel" name="tel" required>
            </label>
            
            <label for="cus-name" class="me-">
                Customer name:
                <input type="text" name="cus-name" required>
            </label>

            <label for="cus-name" class="me-">
                <button class="btn btn-primary btn-search-menu" data-bs-whatever="@mdo" data-bs-toggle="modal" data-bs-target="#menuitem" type="button" style="background-color:blueviolet;">Search menu item</button>
            </label>
        </div>

        <div class="form-floating d-flex justify-content-end my-3 me-3" id="select">
            <select class="form-select" id="floatingSelect" aria-label="Floating label select example" name="pay-method">
                <option value="0" class="text-muted">Payment method</option>
                <option value="MOMO">Momo</option>
                <option value="Cash">Cash</option>
            </select>
        </div>

        <div class="form-floating d-flex justify-content-end my-3 me-3" id="select">
            <select class="form-select" id="floatingSelect" aria-label="Floating label select example" name="sex">
                <option value="0" class="text-muted">Select Sex</option>
                <option value="male">Male</option>
                <option value="female">Female</option>
            </select>
        </div>
        <div class="form-floating d-flex justify-content-end my-3 me-3" id="select">
            <select class="form-select" id="floatingSelect" aria-label="Floating label select example" name="express">
                <option selected class="text-muted" value="0">express</option>
                <option value="50">50 percent</option>
                <option value="60">60 percent</option>
                <option value="70">70 percent</option>
                <option value="80">80 percent</option>
                <option value="90">90 percent</option>
                <option value="100">100 percent</option>
            </select>
        </div>
        
        <div class="ms-5 my-2" style="width:100%; margin-right:20px;">
            <hr>
            
        </div>
         <div >
        <div class="item_table"></div>
        
    </div>

    </div>

   
    <div class="modal fade" id="menuitem" tabindex="-1" aria-labelledby="details" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable">
            <div class="modal-content" style="overflow: auto;">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="details">Add item to cart</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3" style="overflow: auto;">
                        <input type="search" name="search" class="search" placeholder="Search item" style="width: 100%">
                        <table style="margin: 20px auto; border-collapse: collapse; padding: 200px;" class="table table-striped">
                            <thead>
                                <th>Item</th>
                                <th>Quantity</th>
                                <th>Action</th>
                            </thead>
                            <tbody>
                                
                                <?php
                                while ($row = mysqli_fetch_assoc($res)) {
                                ?>
                                <tr>
                                    <td><?php echo $row['item'] ?></td>
                                    <td>
                                        <input type="number" name="quantity" style="width: 70px; outline:none;" class="form-control" value="1">
                                    </td>
                                    <td>
                                        <button style="background-color: blueviolet; width: 100px;" class="btn btn-add-item text-white" item="<?php echo $row['item']; ?>" price="<?php echo $row['price']; ?>" id="<?php echo $row['id']; ?>"  type="submit">Add item</button>
                                    </td>
                                </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

        <!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-danger" id="exampleModalLabel">ERROR IN ORDER</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body text-danger">
        Input fields required. Select sex and payment method
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

            
</body>
</html>
