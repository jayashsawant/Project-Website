 <?php
session_start();

?> 



<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>home</title>

   <!-- swiper css link  -->
   <!-- <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" /> -->
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" />
   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<style>
     html,
    body {
      position: relative;
      height: 100%;
      box-sizing:border-box;
    }

    body {
      background-color: ;
      font-family: Helvetica Neue, Helvetica, Arial, sans-serif;
      font-size: 14px;
      color: #000;
      
    }
   
   .swiper {
      width: 100%;
      height: 80vh;
    }

   .swiper-slide {
      text-align: center;
      font-size: 18px;
      background: #fff;
      display: flex;
      justify-content: center;
      align-items: center;
   }

   .swiper-slide img {
      display: block;
      width: 100%;
      height: 99%;
      object-fit: fill;
   }
   .swiper-button-next:after{
      font-size: 60px;
    content: 'next';
    color: black;
    font-weight: 800;
   }
   .swiper-button-prev:after{
      font-size: 60px;
    content: 'prev';
    color: black;
    font-weight: 800;
   
   }
    
.home{
   padding:0rem 1%;
}   

.services .box-container{
   display: grid;
   grid-template-columns: repeat(auto-fit, minmax(35rem, 1fr));
   gap: 1.5rem;
}
.services .box-container .box{
   padding: 75px 0.5rem;
   text-align: center;
   background: var(--#58f3e9);
   cursor: pointer;
}
.services .box-container .box:hover{
   background: var(--black);
}
.services .box-container .box img{
   height: 40rem;
}
.services .box-container .box h3{
   color:var(--white);
   font-size: 1.7rem;
   padding-top: 1rem;
}
.home-about{  
   display: flex;
   align-items: stretch;
   flex-wrap: wrap;
   gap: 5px
}
.home-about .image{
   flex:1 1 41rem;
   border-radius: 10px;
   border: 3px solid
   
}
.home-about .image img{
   width: 100%;
   height: 100%;
   border-radius: 10px;
   
}
.home-about .content{
   flex:1 1 41rem;
   padding:2rem;
   background: var(--light-bg);
   text-align: left
}
.home-about .content h3{
   font-size: 3rem;
   color:var(--black);
}
.home-about .content p{
   font-size: 2rem;
   padding:1rem 0;
   line-height: 2;
   color:var(--black);
}
.home-packages{
   background: var(--light-bg);
}
.home-packages .box-container{
   display: grid;
   grid-template-columns: repeat(auto-fit, minmax(30rem, 1fr));
   gap: 2rem;
}
.home-packages .box-container .box{
   border:var(--border);
   box-shadow: var(--box-shadow);
   background: var(--white);
}
.home-packages .box-container .box:hover .image img{
   transform: scale(1.1);
}
.home-packages .box-container .box .image{
   height: 25rem;
   overflow: hidden;
}
.home-packages .box-container .box .image img{
   height: 100%;
   width: 100%;
   object-fit: cover;
   transition: .2s linear;
}
.home-packages .box-container .box .content{
   padding:2rem;
   text-align: center;
}
.home-packages .box-container .box .content h3{
   font-size: 2.5rem;
   color:var(--black);
}
.home-packages .box-container .box .content p{
   font-size: 1.5rem;
   color:var(--light-black);
   line-height: 2;
   padding:1rem 0;
}
.home-packages .load-more{
   text-align: center;
   margin-top: 2rem;
}
.home-offer{
   text-align: center;
}
.home-offer .content{
   max-width:70rem;
   margin:0 auto;
}
.home-offer .content h3{
   font-size: 3.5rem;
   text-transform: uppercase;
   color:var(--black);
}
.home-offer .content p{
   font-size: 1.5rem;
   color:var(--light-black);
   line-height: 2;
   padding:1rem 0;
}

/* login signin */
.quicklinks--is-active {
    opacity: 1;
    transform: translate(-50%);
}
.quicklinks {
    position: fixed;
    width:75%;
    bottom: 0.1rem;
    left: 50%;
    transform:tanslate(-50%,10rem)
    opacity:0;
    transition: transform .6s ease-out,opacity .6s ease-out;
    z-index: 50;
    backface-visibility: hidden;
}
.quicklinks__container {
    height: 6rem;
    display: flex;
    justify-content: space-around;
    align-items: center;
    margin: 0px auto;
    padding: 0 2.5rem;
    border-radius: 2.8rem;
    background-image: linear-gradient(90deg,#fd0eff,#00f6d1);
    box-shadow: 0 1.2rem 0.8rem 0 rgb(0 0 0 / 100%);
    font-family: Arial,Helvetica ,Helvetica sans-serif;
    font-weight: 400;
    border: 5px groove mediumblue;   
}
.signin{
   width: 30%;
   margin: 3px;
   font-size: 30px;
   color: white;
   font-family: fantasy;
   font-weight: bolder;
   display: flex;
   justify-content: center;
}
.login{
   display: flex;
   width:30%;
   margin: 10px;
   font-size: 30px;
   color: white;
   font-family: fantasy;
   font-weight:bolder;
   justify-content:center;
}
.login a:hover{
   color:white;
   text-decoration:overline;
   padding-right:35px;
}
.signin a:hover{
  color:white;
  text-decoration:overline;
  padding-left:35px;
}
.search-box{ 
   width:auto;
   position: relative;
   display: flex;
   justify-content: center;
   align-items: center;
}
.searchText{
   background: linear-gradient(0deg, #000000d6);
   font-weight:900;
   width:0rem;
   border-radius: 5rem;
   border:none;
   color: black;
   outline:none;
   transition: all 0.3s linear;
}
.searchText:focus{
   outline:none;
}
.searchBtn{
    width: 3rem;
    height: 3rem;
    background-color: white;
    color: #000;
    position: absolute;
    display: grid;
    place-items: center;
    right: 1rem;
    border-radius: 50%;
} 
.search-box:hover > .searchText{
  width:25rem;
  padding:1rem; 
}
.marquee-container{
   height:30px;
}


/* media query */
@media (min-width:200px) and (max-width: 400px){
   .swiper {
    height: auto;
   }
   .home .slide .content .btn {
    font-size: 10px;
   }
   .quicklinks{
      width: 95%;
   }
   .quicklinks__container{
      height:5rem;
      padding: 0px 0.5rem;
   }
   .signin{
      margin: 5px;
      justify-content: flex-start;
      font-size: 14px;
   }
   .login{
      justify-content: flex-start;
      margin: 0px;
      font-size: 14px;
   }
   .search-box{
      margin-right:0px;
   }
   .search-box:hover > .searchText {
    width: 15rem;
    padding: 1rem;
   }
   .searchBtn{
      width: 2.5rem;
      height: 2.5rem;
      right:0.3rem;
   }
   .searchText {
    font-size: 10px;
   }
   .home-about .content p {
    font-size: 1.5rem;
   }
    .home-about .content h3 {
    font-size: 2.5rem;
   }
}
@media (min-width:400px) and (max-width: 500px){
   .swiper {
    height: auto;
   }
   .quicklinks__container {
    height: 6.5rem;
    padding: 0 0.5rem;
    border-radius:4rem;
   }
   .signin {
    font-size: 18px;
   }
   .login {
    margin: 3px;
    font-size: 18px;
   }
   .search-box:hover > .searchText {
    width: 22rem;
   }
   .quicklinks {    
      width: 90%;
   }
}
@media (min-width:500px) and (max-width: 800px){
   .swiper {
    height: auto;
   }
   .home .slide .content .btn {
    font-size: 15px;
   }
   .signin {
    font-size: 20px;
   }
   .login {
    margin: 3px;
    font-size: 20px;
   }
   .search-box:hover > .searchText {
    width: 25rem;
   }
   .search-box {
    margin-left: 0px;
   }
   .quicklinks {    
      width: 90%;
   }
   .quicklinks__container {
    height: 6.5rem;
    border-radius:4rem;
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
         <strong>Hey!</strong> <?php echo $_SESSION['status'];?>
         <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
   <?php
   
   unset($_SESSION['status']);
}
?>
<!-- home section starts  -->

<section class="home">
<div class="swiper mySwiper">
    <div class="swiper-wrapper">
      <div class="swiper-slide"><img src="images/1.jpeg" alt=""></div>
      <div class="swiper-slide"><img src="images/2.jpeg" alt=""></div>
      <div class="swiper-slide"><img src="images/6.jpeg" alt=""></div>
      <div class="swiper-slide"><img src="images/11.jpeg" alt=""></div>
      <div class="swiper-slide"><img src="images/13.jpeg" alt=""></div>
      <div class="swiper-slide"><img src="images/16.jpeg" alt=""></div>
      
    </div>
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
    <div class="swiper-pagination"></div>
  </div>


</section>

<!-- home section ends -->



<!-- home about section starts  -->

<section class="home-about">

   <div class="image">
      <img src="images/5.jpeg" alt="">
   </div>

   <div class="content">
      <h3>Ambernath United Atlanta FC</h3>
      <p>Ambernath United Atlanta Football Club is an Indian professional football club based in Mumbai, Maharashtra. It currently competes in MFA Elite Division top division of Mumbai Football League, and will compete in I-League 2nd Division after winning the Elite League. <br>
          Ambernath United Atlanta FC is created by a merger between Deepu K.'s Ambernath United and Allen Contractor's Atlanta FC in 2022.[6] Atlanta FC[7] was playing in Elite Division before the merger while Ambernath United was playing in local tournaments.[8] Ambernath United Atlanta won the MFA Elite Division in their first year with a very dominant performance under coach Steven Dias.</p>
      <a href="https://en.wikipedia.org/wiki/Ambernath_United_Atlanta_FC" class="btn">read more</a>
   </div>

   <div class="image">
      <img src="images/20.jpeg" alt="">
   </div>

   <div class="content">
      <h3>WOMEN TEAM </h3>
      <p>Ambernath United's women team plays in MDFA Women's League, under the name Mumbai Knights FC.</p>
      <a href="https://www.instagram.com/reel/CjKnC86Ouud/?igshid=YmMyMTA2M2Y=" class="btn">WATCH</a>
   </div>

   <div class="image">
      <img src="images/2.jpeg" alt="">
   </div>

   <div class="content">
      <h3>RECORD BREAKING TEAM </h3>
      <p>Ambernath United - Atlanta FC broke all the records of Mumbai Football League as the won all the 15 matches of MDFA Elite Division with total of 71 goals. </p>
      <a href="https://www.google.com/amp/s/www.freepressjournal.in/amp/sports/15-games-15-wins-and-71-goals-heres-how-this-mumbai-football-team-is-ruling-the-elite-premier-league" class="btn">read more</a>
      
   </div>

</section>

<!-- home about section ends -->

<!-- home packages section starts  -->

<section class="home-packages">

   <h1 class="heading-title"> OUR TEAM </h1>

   <div class="box-container">

      <div class="box">
         <div class="image">
            <a href="images/owner.jpeg"><img src="images/owner.jpeg" alt=""></a>
         </div>
         <div class="content">
            <h3>OWNER</h3>
            <p>DEEPU K. The owner andback bone of Ambernath United FC </p>
            <a href="about.php" class="btn">Know MORE</a>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <a href="images/co-owners.jpeg"><img src="images/co-owners.jpeg" alt=""></a>
         </div>
         <div class="content">
            <h3>CO-OWNERS</h3>
            <p>Another backbone of Atlanta FC’s success is co-owner Aditya Kerkar and Allen Contracter</p>
            <a href="about.php" class="btn">Know MORE</a>
         </div>
      </div>

      <div class="box">
         <div class="image">
           <a href="images/head coach.jpeg"> <img src="images/head coach.jpeg" alt=""></a>
         </div>
         <div class="content">
            <h3>COACHES</h3>
            <p>Former Indian International Player Steven Dias. </p>
            <a href="about.php" class="btn">Know MORE</a>
         </div>
      </div>
      
      <div class="box">
         <div class="image">
            <a href="images/pysio.jpeg"><img src="images/pysio.jpeg" alt=""></a>
         </div>
         <div class="content">
            <h3>PHYSIO</h3>
            <p>Pooja Bhowad our young, talented, beautiful physiotherapist</p>
            <a href="https://instagram.com/poojabhowad?igshid=YmMyMTA2M2Y=" class="btn"> Know More</a>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <a href="images/G coach.jpeg"><img src="images/G coach.jpeg" alt=""></a>
         </div>
         <div class="content">
            <h3>GOAL-KEPEER COACH</h3>
            <p>Manoj Sir ,Our very talented and expirenced goalkepeer caoch</p>
            <a href="about.php" class="btn"> Know More</a>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <a href="images/A manager.jpg"><img src="images/A manager.jpg" alt=""></a>
         </div>
         <div class="content">
            <h3>ASSISTANT MANAGER</h3>
            <p>Vimal KS, our Assistant manager</p>
            <a href="about.php" class="btn"> Know More</a>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <a href="images/S and C.jpg"><img src="images/S and C.jpg" alt=""></a>
         </div>
         <div class="content">
            <h3>STRENGTH AND CONDITIONING COACH</h3>
            <p>Manuel Dsouza, the young talented focused strength and conditioning coach.</p>
            <a href="https://instagram.com/manueldsouzaofficial?igshid=YmMyMTA2M2Y=" class="btn"> Know More</a>
         </div>
      </div>

   </div>

   

</section>

<!-- home packages section ends -->
<div class="marquee-container">
    <marquee bgcolor="lightgreen" loop="-1" scrollamount="5" height:"30px" width="100%">Login to shop AU FC Merchandise, Jersey's, Football shoes etc.</marquee>
</div>


<section class="quicklinks quicklinks--has-user quicklinks--is-active" data-script="fcb_navigation" data-widget="quicklinks">
  <div class="quicklinks__container" id="isLogin">
    <div class="signin">
    <a href="bar.php">SIGN IN</a>  
    </div>
    
    <div class="login">
      <a href="bar.php">LOGIN</a>    
    </div>
    <div class="search-box">
      <input type="text" class="searchText" placeholder="Type to Search.." autocomplete="off">
      <button class="searchBtn"><i class="fa-solid fa-magnifying-glass"></i></button>
      
      </a>
       
    </div>
    
  </div>
    </section>



<!-- footer section starts  -->

<?php  include 'footer.php';    ?>

<!-- footer section ends -->









<!-- swiper js link  -->
<!-- <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script> -->
 <!-- Swiper JS -->
 <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

<!-- Initialize Swiper -->
<script>
  var swiper = new Swiper(".mySwiper", {
    cssMode: true,
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
    pagination: {
      el: ".swiper-pagination",
    },
    mousewheel: true,
    keyboard: true,
  });
</script>
<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>