<?php
session_start();
   $connection = mysqli_connect('localhost','root','','book_db');

   if(isset($_POST['send1'])){
      $name = $_POST['name'];
      $mobile = $_POST['mobile'];
      $email = $_POST['email'];
      $address = $_POST['address'];
      $city = $_POST['city'];
      $state = $_POST['state'];
      $zip = $_POST['zip'];
      

      $request = " insert into checkout_form(name, mobile, email, address, city, state, zip) values('$name','$mobile','$email','$address','$city','$state','$zip') ";
      $requesrt_run = mysqli_query($connection, $request);
      if($requesrt_run)
      {         
         $_SESSION['checkout']= "ORDER PLACED";
         header("location:payment.html"); 
      }
      else{
         echo 'something went wrong please try again!';
      }

   }

   
?>