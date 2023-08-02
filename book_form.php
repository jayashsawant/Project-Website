<?php
session_start();
   $connection = mysqli_connect('localhost','root','','book_db');

   if(isset($_POST['send'])){
      $name = $_POST['name'];
      $email = $_POST['email'];
      $phone = $_POST['phone'];
      $address = $_POST['address'];
      $Nationality = $_POST['Nationality'];
      $Gender = $_POST['Gender'];
      $age = $_POST['age'];
      $Height = $_POST['Height'];

      $request = " insert into book_form(name, email, phone, address, Nationality, Gender, age, Height) values('$name','$email','$phone','$address','$Nationality','$Gender','$age','$Height') ";
      $requesrt_run = mysqli_query($connection, $request);
      if($requesrt_run)
      {         
         $_SESSION['status']= "Thanks for Registering";
         header("location:AU Academy.php"); 
      }
      else{
         echo 'something went wrong please try again!';
      }

   }

   
?>