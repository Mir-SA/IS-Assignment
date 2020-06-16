<?php
   require "includes/common.php";
   if (isset($_SESSION['email'])) {
     header('location:products.php');
   }
 ?>


<html>
<head>
    <title>SignUp</title>

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


        <div class="content">
        <div class="container">
          <div class="row row-style1">
            <div class="col-xs-4 col-xs-offset-4">
             <h3>SIGN UP</h3>
             <form method="post" action="signup_script.php">
                 <div class="form-group">
                   <input type="text" class="form-control" name="name" placeholder="Name">
                 </div>
                 <div class="form-group">
                   <input type="text" class="form-control" name="email" placeholder="Email">
                   <?php
                   if(isset($_GET["m1"])){
                    echo $_GET['m1'];
                   }
                   ?>
                 </div>
                 <div class="form-group">
                   <input type="text" class="form-control" name="password" placeholder="Password">
                 </div>
                 <div class="form-group">
                   <input type="number" class="form-control" name="contact" placeholder="Contact">
                   <?php
                   if(isset($_GET["m2"])){
                    echo $_GET['m2'];
                   }
                   ?>
                 </div>
                 <div class="form-group">
                  <input type="text" class="form-control" name="city" placeholder="City">
                 </div>
                 <div class="form-group">
                   <input type="text" class="form-control" name="address" placeholder="Address">
                 </div>
                 <div class="form-group">
                   <button class="btn btn-primary">Submit</button>
                 </div>
              </form>
            </div>
          </div>
        </div>
      </div>

      <?php
          include "includes/footer.php"
       ?>

</body>
</html>
