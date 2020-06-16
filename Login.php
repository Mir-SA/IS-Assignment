<?php
   require "includes/common.php";
   if (isset($_SESSION['email'])) {
     header('location:products.php');
   }
 ?>

<html>
<head>
    <title>Login</title>

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
          <div class="row row-style">
            <div class="col-xs-4 col-xs-offset-4">
              <div class="panel panel-primary">
                <div class="panel-heading">
                   <p> LOGIN</p>
                </div>
                  <div class="panel-body">
                     <p class="text-warning"><b>Login to make a purchase</b></p>
                    <form method="post" action="login_submit.php">
                      <div class="form-group">
                        <input type="text" class="form-control" name="email" placeholder="Email" required="true"
                        pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$">
                      </div>
                      <div class="form-group">
                        <input type="text" class="form-control" name="password" placeholder="Password"
                        required="true" pattern=".{6,}">
                      </div>
                      <div class="form-group">
                        <?php
                        if(isset($_GET['email_error'])){
                            echo $_GET['email_error'];
                        } ?>
                      </div>
                      <div class="form-group">
                        <button class="btn btn-primary"> Login </button>\
                      </div>
                      <div class="panel-footer">Dont have an account?
                        <a href="signup.html">Register</a>
                      </div>
                    </form>
                 </div>
              </div>
            </div>
          </div>
        </div>
        </div>

       <?php
           include "includes/footer.php"
        ?>


</body>
</html>
