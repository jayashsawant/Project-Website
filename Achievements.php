<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>package</title>

   <!-- swiper css link  -->
   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">
  

</head>
<style>

.footer-trophies{
   height:auto;
   margin: 0px 15px 10px;
}
.footer-trophies__container {
    width: auto;
    height: auto;
    background-color: #e5ff2278;
    padding: 30px 1.6rem;
    border-radius: 0 0 1.6rem 1.6rem;
    border: 1px solid #262b47;
    display: flex;
    justify-content: space-around;
    align-items: center;
    user-select: none;
    text-decoration: none;
    flex-wrap:wrap;
    row-gap:40px;
    margin-top:10px;
}
.footer-trophies__trophy {
    position: relative;
    height: 10rem;
    width: 40%;
    border: 0.1rem solid #000;
    margin: 0 0.8rem;
    box-shadow: 0 0.6rem 0.7rem 0 rgb(0 0 0 / 75%);
    border-radius: 0.6rem;
    overflow: hidden;
}
.footer-trophies__background-pattern {
    background-color: #154284;
    background-image: url(../i/bg-elements/horizontal-flash.jpg);
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
}
.footer-trophies__trophy-text-background {
    width: 100%;
    height: 3.8rem;
    background: #000;
    position: absolute;
    top: 50%;
    z-index: 10;
    transform: translateY(-50%);
}
.footer-trophies__trophy-descriptor {
    display: flex;
    align-items: center;
    justify-content: center;
    height: 100%;
    color: #fff;
}
.footer-trophies__competition-name {
    font-family: fcb-bold,Arial,Helvetica Neue,Helvetica,sans-serif;
    font-weight: 400;
    font-size: 1.2rem;
    z-index: 20;
    -webkit-user-select: none;
    -moz-user-select: none;
    user-select: none;
    line-height: 1.4rem;
    margin-right: 0.4rem;
}
.footer-trophies__trophy-image {
    position: static;
    height: 5rem;
    width: 5.8rem;
    fill: #fdc52c;
    z-index: 20;
}
svg:not(:root) {
    overflow: hidden;
}
.footer-trophies__trophy-count {
    font-family: fcb-extra-bold,Arial,Helvetica Neue,Helvetica,sans-serif;
    font-weight: 400;
    font-size: 6.2rem;
    line-height: 7.5rem;
    color: #fdc52c;
    margin: 0 0.8rem;
    z-index: 20;
    -webkit-user-select: none;
    -moz-user-select: none;
    user-select: none;
}
.footer-trophies__competition-type {
    font-family: fcb-bold,Arial,Helvetica Neue,Helvetica,sans-serif;
    font-weight: 400;
    font-size: 1.2rem;
    z-index: 20;
    -webkit-user-select: none;
    -moz-user-select: none;
    user-select: none;
    text-transform: uppercase;
}
.home{
   padding: 5px 1%;
}
.home .swiper-slide img{
   height: 80vh;
    width: 100%;
}



@media (max-width: 600px){
   .footer-trophies__trophy {
         width: 100%;
      }
      .footer-trophies__container{
         row-gap: 25px;
         padding: 18px 5px;
      }
      .footer-trophies__trophy-image{
         width: 3.8rem;
      }
      .home .swiper-slide img{
         height: 34vh;
         width: 100%;
      }
      .footer-trophies {
         margin: 0px 2px 10px;
      }
      .footer-trophies__competition-name{
         padding-left: 5px;
      }
      .footer-trophies__competition-type{
         padding-right: 5px;
      }
}


</style>
<body>
   
<!-- header section starts  -->

<?php include 'mainhead.php'; ?>

<!-- header section ends -->
<section class="home">
<div class="swiper mySwiper">
    <div class="swiper-wrapper">
      <div class="swiper-slide"><img src="images/1.jpeg" alt=""></div>
      <!-- <div class="swiper-slide"><img src="images/2.jpeg" alt=""></div>
      <div class="swiper-slide"><img src="images/6.jpeg" alt=""></div>
      <div class="swiper-slide"><img src="images/11.jpeg" alt=""></div>
      <div class="swiper-slide"><img src="images/13.jpeg" alt=""></div>
      <div class="swiper-slide"><img src="images/16.jpeg" alt=""></div> -->
      
   </div>
    <!-- <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
    <div class="swiper-pagination"></div> -->
  </div>  


</section>

<!-- <div class="heading" style="background:url(images/16.jpeg) no-repeat">
   
</div> -->

<div class="footer-trophies">
        <a href="#" class="footer-trophies__container">
        <div class="footer-trophies__trophy footer-trophies__trophy--la-liga">
            <div class="footer-trophies__background-pattern"></div>
            <div class="footer-trophies__trophy-text-background"></div>
            <div class="footer-trophies__trophy-descriptor footer-trophies__trophy-descriptor--la-liga">
                <span class="footer-trophies__competition-name">MFA ELITE LEAGUE</span>
                <svg class="footer-trophies__trophy-image" viewBox="0 0 38 50"><path d="M34 4.45a34.62 34.62 0 01-2.33 10.21 25.63 25.63 0 01-7.25 10.63 9.06 9.06 0 01-1.33.86c0-.41-.1-.71 0-.84.51-.6.3-1.32.41-2s.16-1.58.34-2.36a16.37 16.37 0 013.29-6.57 8.37 8.37 0 002-3.66A19.35 19.35 0 0029.65 5a8.11 8.11 0 010-1H34zm-19.08 21.7a9.06 9.06 0 01-1.33-.86 25.63 25.63 0 01-7.25-10.63A34.62 34.62 0 014 4.45V4h4.36a8.11 8.11 0 010 1 19.35 19.35 0 00.56 5.77 8.37 8.37 0 002 3.66A16.37 16.37 0 0114.16 21c.18.78.22 1.58.34 2.36s-.1 1.39.41 2c.09.08.01.38.01.79zm14.55-25c-.09-.37-.17-.68-.24-1L26.49 0h-15L8.77.13c-.08.31-.15.62-.24 1H0c.34 1.12.68 2.18 1 3.25.72 2.85 1.33 5.73 2.13 8.56 1.37 4.81 4.41 8.48 8.08 11.66a38.2 38.2 0 003.2 2.4c.36.25.58.47.53.94s0 .75 0 1.12c-.08.69.08 1.15.92 1.14a4.83 4.83 0 01-3.31 3.53c-.92.26-1.83.57-2.73.89A2.52 2.52 0 008 37.09c-.08 2.11-.16 4.21-.23 6.32 0 .43.06.88-.44 1.16-.15.08-.17.4-.26.65a15.2 15.2 0 01-1.55.23c-.55 0-.9.16-.76.83l-.85.27v1.7A60 60 0 0019 50a60.06 60.06 0 0015.08-1.75v-1.7l-.85-.27c.14-.67-.21-.81-.76-.83a15.2 15.2 0 01-1.55-.23c-.09-.25-.11-.57-.26-.65-.5-.28-.43-.73-.44-1.16-.08-2.11-.15-4.21-.23-6.32a2.52 2.52 0 00-1.79-2.47c-.9-.32-1.81-.63-2.73-.89a4.82 4.82 0 01-3.31-3.53c.83 0 1-.45.91-1.14v-1.12c0-.37.17-.69.53-.94a39.87 39.87 0 003.24-2.4c3.67-3.18 6.71-6.85 8.08-11.66.8-2.83 1.41-5.71 2.13-8.56.28-1.07.62-2.13 1-3.26z" fill-rule="evenodd"></path></svg>
                <span class="footer-trophies__trophy-count">2</span>
                <span class="footer-trophies__competition-type">Titles</span>
            </div>
        </div>
        <div class="footer-trophies__trophy footer-trophies__trophy--champions-league">
            <div class="footer-trophies__background-pattern"></div>
            <div class="footer-trophies__trophy-text-background"></div>
            <div class="footer-trophies__trophy-descriptor footer-trophies__trophy-descriptor--champions-league">
                <span class="footer-trophies__competition-name">HARWOOD PREMIER LEAGUE</span>
                <svg class="footer-trophies__trophy-image" viewBox="0 0 33 50"><path d="M5.29 6.67a17.76 17.76 0 00-.06 1.86 1.57 1.57 0 00.51 1.27.68.68 0 00.43.16A5.65 5.65 0 007 11.57a1.86 1.86 0 01-.56.49l-.19.1a13.86 13.86 0 01-1.73.92 1.62 1.62 0 00-1 1.77l.07.87c0 .5.07 1 .11 1.52a42.53 42.53 0 01-1.45-5.44A18.46 18.46 0 012 4.46a3.76 3.76 0 011.39-2.37 1.48 1.48 0 012.45 1.25 7 7 0 01-.27 1.84 11.56 11.56 0 00-.28 1.49zm20.32 3.09a3.23 3.23 0 00.45-2.67v-.32c-.06-.51-.15-1-.25-1.52a15.28 15.28 0 01-.26-1.58 1.59 1.59 0 01.89-1.85 1.77 1.77 0 012 .68 6.11 6.11 0 011.17 4.06 31.3 31.3 0 01-1.59 9.82c-.09.29-.19.57-.28.86v-.52c0-.68.1-1.36.16-2a1.45 1.45 0 00-.9-1.56 20.43 20.43 0 01-2.06-1.11 1.32 1.32 0 01-.59-.6 5.18 5.18 0 00.73-1.45h.05a.63.63 0 00.48-.24zM27.68.07a3.74 3.74 0 00-3.05 3.71A9.92 9.92 0 0025.12 7l-.4-.08a53.77 53.77 0 00-7.8-.73H15.6a32 32 0 00-7.41.74L7.88 7a13.39 13.39 0 00.42-1.8 4.82 4.82 0 00-.89-4A3.43 3.43 0 004.72 0 4 4 0 001.5 1.66 8.24 8.24 0 000 6.9a32.51 32.51 0 00.85 6.7 94.25 94.25 0 002.95 9.67c.3.83.59 1.66.87 2.5l.74 2.13 1 2.68a21.35 21.35 0 002.9 6c.2.25.41.5.62.74a6.47 6.47 0 011.24 1.82 2.89 2.89 0 001.24 1.61c-.06.27-.16.4-.55.5l-1.47.34A5 5 0 007 44.36a2.86 2.86 0 001 3.79 8 8 0 001.92.85 19.66 19.66 0 006.34 1 31.07 31.07 0 003.59-.22 12.13 12.13 0 005-1.55 2.83 2.83 0 001.12-4 5.05 5.05 0 00-3.42-2.68c-.38-.08-.75-.18-1.12-.28l-.53-.14c-.09 0-.13 0-.24-.39a1.45 1.45 0 00.6-.6 4.49 4.49 0 001-1.46 4 4 0 01.51-.84 20.41 20.41 0 003.16-4.64 28.06 28.06 0 001.89-6c1-2.56 1.91-5.34 2.9-8.5A45.4 45.4 0 0033 7.64a9.19 9.19 0 00-1.44-5.93A4 4 0 0027.68.07z" fill-rule="evenodd"></path></svg>
                <span class="footer-trophies__trophy-count">5</span>
                <span class="footer-trophies__competition-type">Trophies</span>
            </div>
        </div>
        <div class="footer-trophies__trophy footer-trophies__trophy--club-world-cup">
            <div class="footer-trophies__background-pattern"></div>
            <div class="footer-trophies__trophy-text-background"></div>
            <div class="footer-trophies__trophy-descriptor footer-trophies__trophy-descriptor--club-world-cup">
                <span class="footer-trophies__competition-name">I-LEAGUE 2nd DIVISION</span>
                <svg class="footer-trophies__trophy-image" viewBox="0 0 21.91 58"><path d="M10.53 14.91a7.27 7.27 0 01-5.34-2.85C8 19 10.81 31.27 5.4 46.88a37.54 37.54 0 013.75-.3c.64-3.98 1.76-13.75 1.38-31.67zM11 58c-6.09 0-11-1.22-11-2.07a.23.23 0 01.07-.16l3.2-8.14c0-.18.32-.35.88-.5C5.51 43.92 12.77 24.79 1 6.39l.81-.82A26.61 26.61 0 013.8 9a7 7 0 01-.16-1.53A7.38 7.38 0 0110.94 0a7.35 7.35 0 017.23 6.38c.1-.21.16-.32.16-.32L19.46 5a3.14 3.14 0 011.36 1.39C8.43 26.29 16.5 43.92 18.27 47.3c.24.11.37.22.37.33l3.21 8.14a.27.27 0 01.06.16C21.91 56.78 17 58 11 58z" fill-rule="evenodd"></path></svg>
                <span class="footer-trophies__trophy-count">3</span>
                <span class="footer-trophies__competition-type">Trophies</span>
            </div>
        </div>
        <div class="footer-trophies__trophy footer-trophies__trophy--copa-del-rey">
            <div class="footer-trophies__background-pattern"></div>
            <div class="footer-trophies__trophy-text-background"></div>
            <div class="footer-trophies__trophy-descriptor footer-trophies__trophy-descriptor--copa-del-rey">
                <span class="footer-trophies__competition-name">Copa Del Rey</span>
                <svg class="footer-trophies__trophy-image" viewBox="0 0 29.44 50"><path d="M6.53 16.86c-3.11 0-4.89-5.45-5.05-15.39h3.71v2.34l.57.44.24.18.53.41zm16.38-12l.75-.59.56-.44V1.47H28c-.15 9.94-1.93 15.38-5.05 15.39zm-6.41 19c3.34 0 6.41-5.49 6.41-5.49 3.74 0 6.53-4.65 6.53-18.32h-6.66V3.1l-.23.18a54.5 54.5 0 00-7.83-.88 54.71 54.71 0 00-7.83.88l-.22-.18V0H0c0 13.67 2.79 18.32 6.54 18.32 0 0 3.06 5.49 6.4 5.49v2a9 9 0 01.28 2.12c0 3.8-7.72 6.91-7.72 8.65V44A1.91 1.91 0 004 46.07C4 47.9 9 50 14.72 50s10.71-2.1 10.71-3.93A1.91 1.91 0 0023.94 44v-7.42c0-1.74-7.72-4.85-7.72-8.65a9 9 0 01.28-2.12z" fill-rule="evenodd"></path></svg>
                <span class="footer-trophies__trophy-count">31</span>
                <span class="footer-trophies__competition-type">Trophies</span>
            </div>
        </div>
        </a>
</div>


<!-- packages section starts  -->

<section class="packages">
<h1 class="heading-title">GALLERY</h1>

   <div class="box-container">

      <div class="box">
      <div class="image">
           <a href="images/19.jpeg"> <img src="images/19.jpeg" alt=""></a> 
         </div>
         
      </div>

      <div class="box">
         <div class="image">
           <a href="images/5.jpeg"> <img src="images/5.jpeg" alt=""></a> 
         </div>
         
      </div>

      <div class="box">
         <div class="image">
           <a href="images/1.jpeg"> <img src="images/1.jpeg" alt=""></a> 
         </div>
         
      </div>

      <div class="box">
         <div class="image">
           <a href="images/12.jpeg"> <img src="images/12.jpeg" alt=""></a> 
         </div>
         
      </div>

      <div class="box">
         <div class="image">
            <a href="images/16.jpeg"><img src="images/16.jpeg" alt="">  </a>
         </div>
         
      </div>

      <div class="box">
         <div class="image">
            <a href="images/6.jpeg"><img src="images/6.jpeg" alt=""></a> 
         </div>
         
      </div>

      <div class="box">
         <div class="image">
           <a href="images/10.jpeg"> <img src="images/10.jpeg" alt=""></a> 
         </div>
        
      </div>

      <div class="box">
         <div class="image">
           <a href="images/11.jpeg"> <img src="images/11.jpeg" alt=""></a> 
         </div>
        
      </div>

      <div class="box">
         <div class="image">
           <a href="images/13.jpeg"> <img src="images/13.jpeg" alt=""></a> 
         </div>
         
      </div>

      <div class="box">
         <div class="image">
           <a href="images/17.jpeg"> <img src="images/17.jpeg" alt=""></a> 
         </div>
         
      </div>

      <div class="box">
         <div class="image">
           <a href="images/4.jpeg"> <img src="images/4.jpeg" alt=""></a> 
         </div>
         
      </div>

      <div class="box">
         <div class="image">
           <a href="images/21.jpeg"> <img src="images/21.jpeg" alt=""></a> 
         </div>
         
      </div>

      <div class="box">
         <div class="image">
           <!-- <a href="images/21.jpeg"> <img src="images/21.jpeg" alt=""></a>  -->
           <iframe width="100%" height="100%" src="https://www.youtube.com/embed/8pA60Hsqm3g" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>

         </div>
         
      </div>
      <div class="box">
         <div class="image">
           <!-- <a href="images/21.jpeg"> <img src="images/21.jpeg" alt=""></a>  -->
           <iframe width="100%" height="100%" src="https://www.youtube.com/embed/4NIC2yun7Ms" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>

         </div>
         
      </div>
      <div class="box">
         <div class="image">
           <!-- <a href="images/21.jpeg"> <img src="images/21.jpeg" alt=""></a>  -->
           <iframe width="100%" height="100%" src="https://www.youtube.com/embed/8ZbQ1hXb2z4" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>

         </div>
         
      </div>
      <div class="box">
         <div class="image">
           <!-- <a href="images/21.jpeg"> <img src="images/21.jpeg" alt=""></a>  -->
           <iframe width="100%" height="100%" src="https://www.youtube.com/embed/i1dosZZlznM" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>

         </div>
         
      </div>
      <div class="box">
         <div class="image">
           <!-- <a href="images/21.jpeg"> <img src="images/21.jpeg" alt=""></a>  -->
           <iframe width="100%" height="100%" src="https://www.youtube.com/embed/psbhRZK-mCM" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>

         </div>
         
      </div>
      <div class="box">
         <div class="image">
           <!-- <a href="images/21.jpeg"> <img src="images/21.jpeg" alt=""></a>  -->
           <iframe width="100%" height="100%" src="https://www.youtube.com/embed/4hy_5X50Wrs" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>

         </div>
         
      </div>
      <div class="box">
         <div class="image">
           <!-- <a href="images/21.jpeg"> <img src="images/21.jpeg" alt=""></a>  -->
           <iframe width="100%" height="100%" src="https://www.youtube.com/embed/HwCYbL5eiwE" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>

         </div>
         
      </div>

   </div>

   <div class="load-more"><span class="btn">load more</span></div>

</section>

<!-- packages section ends -->








    






<!-- footer section starts  -->
<?php  include 'footer.php';    ?>

<!-- footer section ends -->









<!-- swiper js link  -->
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>