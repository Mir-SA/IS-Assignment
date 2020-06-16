<?php
   require "includes/common.php";
   $email=$_POST['email'];
   $email=mysqli_real_escape_string($con, $_POST['email']);

   $password=$_POST['password'];
   $password=mysqli_real_escape_string($con, $_POST['password']);
   $password = MD5($password);

   // Query checks if the email and password are present in the database.
   $select_query="SELECT id, email from users  WHERE email='$email' AND password='$password'";
   $select_query_result=mysqli_query($con, $select_query) or die(mysqli_error($con));
   $rows=mysqli_num_rows($select_query_result);

   if($rows ==0 ){
     $error= "<span class='red'>User not found</span>";
     header('location:Login.php?email_error='.$error);
   }
   else {
     $rows_fetch=mysqli_fetch_array($select_query_result);
     $_SESSION['email']=$rows_fetch['email'];
     $_SESSION['user_id']=$rows_fetch['id'];
     header('location:products.php');
   }
 ?>
