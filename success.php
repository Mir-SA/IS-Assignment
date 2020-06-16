<?php
   require "includes/common.php";
   if (!isset($_SESSION['email'])) {
       header('location: index.php');
   }
   $user_id = $_SESSION['user_id'];
   $item_ids_string = $_GET['itemsid'];

   //We will change the status of the items purchased by the user to 'Confirmed'
   $query = "UPDATE users_items SET status='Confirmed' WHERE user_id=" . $user_id . " AND item_id IN (" . $item_ids_string . ") and status='Added to cart'";
   mysqli_query($con, $query) or die($mysqli_error($con));
 ?>

<html>
<head>
    <title></title>

           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
           <link rel="stylesheet" type="text/css" href="style.css">
           <meta name="viewport" content="width=device-width, initial-scale=1.0">
           <style>
              body{ margin-top:250px;
                        }
           </style>
</head>
<body>

    <?php
    include "includes/header.php" ?>

    <div class="content">
    <div class="container">
      <div class="col-sm-8 col-sm-offset-2">
      <div class="alert alert-success text-center">
        <h3>Your order is confirmed!</h3>
        <p> Thank you for shopping with us.
        <a href="products.php"> Click here</a>
               to purchase any other items.
        </p>
        </div>
      </div>
     </div>
   </div>


        <?php
        include "includes/footer.php"
         ?>

</body>
</html>
