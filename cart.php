<?php
   require "includes/common.php";
 ?>

<html>
<head>
    <title>Cart</title>
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
       include "includes/header.php";
   ?>


      <div class="content"
      <div class="container">
      <div class="col-sm-6 col-sm-offset-3">
       <table class="table table-responsive">
         <?php
           $sum=0;
           $user_id=$_SESSION['user_id'];
           $query = "SELECT items.price AS Price, items.id, items.name AS Name  FROM users_items JOIN items ON users_items.item_id = items.id WHERE users_items.user_id='$user_id' and status='Added To Cart'";
           $result = mysqli_query($con, $query)or die(mysqli_error($con));
           $num=mysqli_num_rows($result);
           if ($num ==0 ) {
             echo "<h2>Add items to cart first!</h2>";
           } else {
           ?>

         <thead>
         <tr>
            <th>Item Number</th>
            <th>Item Name</th>
            <th>Price</th>
            <th></th>
         </tr>
        </thead>

        <tbody>
           <?php
             while ($row=mysqli_fetch_array($result)) {
               $sum+= $row["Price"];
               $id="";
               $id .= $row["id"].",";
               echo "<tr>
                         <td>" . "#" . $row["id"] . "</td>
                         <td>" . $row["Name"] . "</td>
                         <td>Rs " . $row["Price"] . "</td>
                         <td><a href='cart-remove.php?id={$row['id']}' class='remove_item_link'> X </a></td>
                     </tr>";
           }
           $id = rtrim($id, ",");
           echo "<tr>
                     <td></td>
                     <td>Total</td>
                     <td>Rs " . $sum . "</td>
                     <td><a href='success.php?itemsid=".$id ."'class='btn btn-primary'>Confirm Order</a></td>
                     </tr>";
             }
            ?>

         </tbody>
       </table>
      </div>
      </div>
    </div>

    <?php
        include "includes/footer.php"
     ?>


</body>
</html>
