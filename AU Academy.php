<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>book</title>

   <!-- swiper css link  -->
   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">
   
   <script src="https://kit.fontawesome.com/a076d05399.js" ></script>

</head>
<style>
   .alert{
   width: 100%;
   height: auto;
   font-family: Arial, Helvetica, sans-serif;
   font-weight: 500;
   font-size: 25px;
   text-align: center;
   color: black;
   background: rgb(7, 248, 23);
   border-radius: 5px;
   text-transform: uppercase;
   padding-top:8px;
   }
   

   @media(max-width:500){
      .alert{
         font-size:15px;
      }

   }
</style>
<body>
   
<!-- header section starts  -->
<?php include 'mainhead.php'; ?>


<!-- header section ends -->

<?php

if(isset($_SESSION['status']))
{
   ?>
      <div class="alert alert-warning alert-dismissible fade show" role="alert">
         <strong>HEY!</strong> <?php echo $_SESSION['status'];?>
      </div>
   <?php
   
   unset($_SESSION['status']);
}
?>



<section class="booking">

   <h1 class="heading-title">REGISTER NOW</h1>

   <form action="book_form.php" method="post"  class="book-form" >

      <div class="flex">
         <div class="inputBox">
            <span>name :</span>
            <input type="text" placeholder="Enter your name" name="name">
         </div>
         <div class="inputBox">
            <span>email :</span>
            <input type="email" placeholder="Enter your email" name="email">
         </div>
         <div class="inputBox">
            <span>phone :</span>
            <input type="number" placeholder="Enter your number" name="phone">
         </div>
         <div class="inputBox">
            <span>address :</span>
            <input type="text" placeholder="Enter your address" name="address">
         </div>
         <div class="inputBox">
            <span>Nationality</span>
            <input type="text" placeholder="Nationality " name="Nationality">
         </div>
         <div class="inputBox">
            <span>Gender</span>
            <input type="text" placeholder="Gender" name="Gender">
         </div>
         <div class="inputBox">
            <span>age</span>
            <input type="date" name="age">
         </div>
         <div class="inputBox">
            <span>Height(cm)</span>
            <input type="number" name="Height">
         </div>
      </div>

      <input type="submit" value="submit" class="btn" id="subBtn"  name="send">
     
   </form>

</section>






<!-- footer section starts  -->
<?php  include 'footer.php';  ?>
<!-- footer section ends -->



<!-- swiper js link  -->
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>