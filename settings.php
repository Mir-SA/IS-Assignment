<?php
   require "includes/common.php";

 ?>

<html>
<head>
    <title>Settings</title>

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

        <div class="container">
          <div class="row row-style2">
            <div class="col-xs-4 col-xs-offset-4">
             <h3>Change Password</h3>
             <form action="includes/settings_script" method="POST">
                 <div class="form-group">
                   <label for="oldPassword">Old Password</label>
                   <input type="text" class="form-control" name="oldPassword" required>
                 </div>
                 <div class="form-group">
                   <label for="newPassword">New Password</label>
                   <input type="text" class="form-control" name="newPassword" required>
                 </div>
                 <div class="form-group">
                   <label for="newPasswordRe">Re-type New Password</label>
                   <input type="text" class="form-control" name="newPasswordRe" required>
                 </div>
                 <?php
                   if(isset($_GET['m1'])){
                     echo $_GET['m1'];
                   }
                   ?>
                   <button class="btn btn-primary">Change</button>
                 </div>
              </form>
            </div>
          </div>
        </div>

         <footer>
             <div class="footer">
               <p> <center>Copyright © Lifestyle Store. All Rights Reserved | Contact Us: +91 90000 00000</center> </p>
             </div>
          </footer>


</body>
</html>
