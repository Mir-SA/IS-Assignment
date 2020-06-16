<?php
   require "includes/common.php";
   if (isset($_SESSION['email'])) {
     header('location:products.php');
   }
 ?>


<html>
<head>
    <title>Lifestyle Store</title>

           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
           <link rel="stylesheet" type="text/css" href="style.css">
           <meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>
<body>

        <?php
             include "includes/header.php"
          ?>


        <div class="banner_img">
           <div class="container">
              <div class="banner-content">
                <h3>We Sell Lifestyle</h3>
                <p>Flat 40% Off on Premium Brands</p>
                <button class="btn btn-danger btn-lg active">
                   <a href="products.html"> Shop Now</a>
                </button>
              </div>
           </div>
        </div>

       <?php
            include "includes/footer.php"
         ?>


</body>
</html>
