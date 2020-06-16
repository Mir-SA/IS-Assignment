<?php
   require "includes/common.php";
   $email=$_POST['email'];
   $regex_email="/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/";
   if (!preg_match($regex_email, $email)) {
     header('location: Login.php?email_error=Enter valid email');
   }
   $password=$_POST['password'];
   //$password=md5($password);
   if (strlen($password)<8) {
     header('location: Login.php?password_error=enter correct pssword');
   }
   $email=mysqli_real_escape_string($con, $email);
   $password=md5(mysqli_real_escape_string($con, $password));

   $select_query="SELECT id, email FROM users WHERE email='$email'
   AND password='$password'";
   $select_query_result=mysqli_query($con, $select_query) or die(mysqli_error($con));
   $row=mysqli_num_rows;

   if($row==0){
     header('location: Login.php?wrong_id=User not found');
   }
   else {
     $rows_fetched=mysqli_fetch_array;
     $_SESSION['email']=$email;
     $_SESSION['id']=$row['id'];
     header('location: products.php');
   }
 ?>
