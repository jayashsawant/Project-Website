<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>About</title>

   <!-- swiper css link  -->
   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">
   

</head>
<style>

    .upcoming-match{
        width: 100%;
        height: auto;
        display:flex;
    }

    .upcoming-match .next-match{
        width: 100%;
        height: 100%;
        background-color:lightblue; 
        display: flex;
        justify-content:center;
        padding: 15px; 
        margin-inline:auto;
        border:5px solid black;
        border-radius: 5px;    
    }
    .content11{   
        width: 100%;
        font-size:30px;
    }
    .timer{
        display: flex;
        padding-left: 15px;
        padding-right: 15px;
        justify-content: center;
    }
    .timer div{
        flex-basis:150px ;
        text-align:center;
    }
        
    h1 {
        color: crimson;
        display: block;
        font-size: 45px;
        margin-block-start: 4px;
        margin-block-end: 10px;
        font-weight: bold;
        text-align:center;
    }
    .match{
        font-weight: 600;
        font-size:45px;
        text-align:center;
        padding-top:15px;
        border-top:2px solid ;
    }
    .big-text{
        color: crimson;
        font-size:60px;
        margin: 25px;
        border: 2px solid;
    }

    .competition-quick__content{
        display: flex;
        align-items: center;
        justify-content: space-between;
        margin: 30px;       
    }

    /* .competition-quick--entitlement .competition-quick__information {
        flex: 1 0 45%;
        max-width: 45%;
    } */
    .competition-quick__information {
        max-width: 60rem;
        margin: 0 auto;
        text-align: center;
    }
    .competition-quick__title {
        color: #fffc00;
        font-family: fcb-extra-bold,Arial,Helvetica Neue,Helvetica,sans-serif;
        font-weight: 700;
        font-size: 4.5rem;
        margin-bottom: -17.4rem;
        line-height: 1;
        text-shadow: 4px 5px black;
    }
    .competition-quick__description {
        color: black;
        font-size: 2.5rem;
        margin-bottom: 0.8rem;
        line-height: 1.2;
        font-weight: 800;
    }
    .competition-quick__form {
        max-width: 50rem;
        margin: 0 auto;
        box-shadow: 0 2px 6px 0 rgb(0 0 0 / 50%);
        background: hsl(178deg 100% 54% / 43%);
        padding: 2.4rem;
    }
    .user-entitlement {
        text-align: center;
    }
    .user-entitlement__title {
        font-size: 3.0rem;
        line-height: 1.2;
        color:white;
        margin-bottom: 1.5rem;
        text-shadow: 3px 3px black;
    }
    .user-entitlement__description {
        margin-bottom: 2.5rem;
        font-size: 1.8rem;
        color:yellow;
        text-shadow: 2px 2px black;
    }
    .button {
        min-width: 14.8rem;
        position: relative;
        display: inline-block;
        padding: 0 1.6rem;
        line-height: 3.2rem;
        border-radius: 3px;
        border: none;
        text-transform: uppercase;
        text-decoration: none;
        text-align: center;
        color: #fff;
        box-shadow: 0 0.2rem 0.6rem 0.1rem rgb(0 0 0 / 20%);
        font-size: 1.2rem;
        font-family: fcb-bold,Arial,Helvetica Neue,Helvetica,sans-serif;
        font-weight: 400;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
        will-change: transform;
        transform: translateY(0);
        cursor: pointer;
        pointer-events: all;
        transition: color .2s ease,box-shadow .2s ease,transform .2s ease;
    }
    .button--large {
        min-width: 25rem;
        padding-top: 1.6rem;
        padding-bottom: 1.6rem;
        font-size: 1.2rem;
        line-height: 1.2rem;
    }
    .button:before {
        background: linear-gradient(270deg,#154284,#cd122d);
        content: "";
        position: absolute;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
        border-radius: 0.3rem;
        z-index: -1;
        -webkit-backface-visibility: hidden;
        backface-visibility: hidden;
    }
    .button:after {
        content: "";
        position: absolute;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
        border-radius: 0.3rem;
        z-index: -1;
        -webkit-backface-visibility: hidden;
        backface-visibility: hidden;
    }
    .user-entitlement__separator {
        margin: 2rem 0;
        position: relative;
        color:white;
        font-size:18px;
    }
    .user-entitlement__separator:before {
        content: "";
        height: 3px;
        max-width: 20rem;
        width: 40%;
        background: black;
        position: absolute;
        top: 50%;
    }
    .user-entitlement__separator:after {
        content: "";
        height: 3px;
        max-width: 20rem;
        width: 40%;
        background: black;
        position: absolute;
        top: 50%;
    }
    .user-entitlement__separator:before {
        right: calc(50% + 2rem);
    }
    .user-entitlement__separator:after {
        left: calc(50% + 2rem);
    }
    .user-entitlement__already-registered {
        font-family: fcb-bold,Arial,Helvetica Neue,Helvetica,sans-serif;
        font-weight: 400;
        font-size: 1.3rem;
        display: inline-block;
        margin: 0.8rem 2rem;
        color:white;
    }
    .freetickets{
        background:url(images/100.jpeg);
        margin: 1px;
    }
    /* map styling */
    #contact-details{
        display:flex;
        align-items: center;
        justify-content:space-between;
    }
    #contact-details .details{
        width: 40%;
    }
    #contact-details .details span,
    #form-details form span{
        font-size:15px;
    }
    #contact-details .details h2,
    #form-details form h2{
        font-size:26px;
        line-height:35px;
        padding:20px 0;
    }
    #contact-details .details h3{
        font-size:16px;
        padding-bottom:15px;
    }
    #contact-details .details li{
        list-style:none;
        display: flex;
        padding:10px 0;
    }
    #contact-details .details li i{
        padding-right:22px;
        font-size:14px;
    }
    #contact-details .details li p{
        margin:0;
        font-size:17px;
    }
    #contact-details .map{
        width:55%;
        height:400px;
    }
    #contact-details .map iframe{
        width: 100%;
        height:100%;
    }
    .marquee-container{
        padding-left:30px;
        padding-right:30px;

    }
    marquee{
    font-size: 22px;
    display: flex;
    height: 30px;
    text-align: center;
    justify-content: center;
    padding: 6px 30px 5px 0px;
    }
    /* map styling */
    #about-head {
        display:flex;
        align-items:center;
    }
    #about-head img{
        width: 50%;
        height:70vh;
    }
    #about-head div{
        padding-left:40px;
    }
    #about-head div p{
        font-size: 28px;
    }
    #about-head div h2{
        color:red;
        font-size:30px;
    }


    @media (max-width:475px){
        .timer {
        flex-direction: column;
        }
        .content11 h1{
            font-size:25px;
        }
        .match{
            font-size:25px;
        }
        .big-text {
        font-size: 30px;
        margin: 0px;
        }
        .timer div {
        display: contents;
        }
        .match {
        padding-bottom: 30px;
        }
        .competition-quick__content{
            flex-direction: column;
            margin: 5px;
            margin-top: 5px;
        }
        .competition-quick__title{
            margin-bottom: 1.6rem;
            font-size:3rem;
            text-shadow: 3px 3px black;
        }
        .user-entitlement__title{
            text-shadow: 2px 2px black;
        }
        .user-entitlement__already-registered{
            color:white;
        }
        .user-entitlement__separator {
        margin: 1rem 0;
        }
        .competition-quick__description {
        color: wheat;
        }
        #contact-details {
            flex-direction: column;           
        }
        #contact-details .details {
            width: 90%;
        }
        #contact-details .map {
            width: 95%;
            height: 350px;
        }
        #form-details form {
            padding: 20px;
            width: 100%;    
        }  
        #contact-details .details li p {
            margin: 0;
            font-size: 15px;
        } 
        #about-head{
            flex-direction:column;
        }
        #about-head img{
            width:100%;
            margin-bottom:20px;
        }
        #about-head div{
            padding-left:0px;
        }
        #about-head div p {
            font-size: 20px;           
        }
        .section-p1 {
            padding: 15px 15px;
        } 
    }

    @media(min-width:480px) and (max-width:800px){
        .competition-quick__content{
            flex-direction: column;
        }
        .competition-quick__title{
            margin-bottom: 1.6rem;
        }
        .section-p1 {
            padding: 25px 25px;
        }
        #about-head div{
            padding-left: 25px;
        }
        #about-head div h2 {
            font-size: 30px;
            line-height:24px;
        }
        #about-head div h2 {
            font-size: 25px;
            line-height: 15px;
        }
        #about-head div p {
            font-size: 20px;
        }
        #about-head img {
            height: 62vh;
        }
        .section-p1 {
            padding: 25px 25px;
        }
    }

</style>

<body>  
<!-- header section starts  -->
<?php include 'mainhead.php'; ?>

<!-- header section ends -->
<section class="freetickets">
    <div class="competition-quick__content">
         <div class="competition-quick__information">
            <h3 class="competition-quick__title" wz_dt_ref="true">WIN 2 TICKETS FOR NEXT MATCH</h3>
            <p class="competition-quick__description">Come and support AU FC!</p>
            </div>
                <div class="competition-quick__form js-competition-quick-form">
                    <div class="user-entitlement"> 
                        <div class="user-entitlement__title">SIGN UP NOW AND ENTER THE DRAW</div> 
                        <div class="user-entitlement__description">Join the Club and score your first goal with all the benefits of being a Culer!</div> 
                        <div class="user-entitlement__cta">
                           <a href="bar.php"> <button class="button button--secondary button--large user-entitlement__register js-register-btn"> Register for free </button> <div class="user-entitlement__separator"></a>
                                <span style= 'font-size=16px;' >OR</span>
                            </div> 
                                <span class="user-entitlement__already-registered">Already registered? Log in now...</span>
                           <a href="bar.php"><button class="button button--primary button--large user-entitlement__login js-login-btn"> Login </button></a>
                    </div>            
                </div> 
            </div>

    </div>
   
</section>

<!-- about section starts  -->

<section class="upcoming-match">
    <div class="next-match" background-color="green">
    
        <div class="content11">
            <h1>NEXT MATCH</h1>
            <p class="match">Ambernath United-Atlanta FC vs Aztecs FC</p>
            <div class="timer">
            <div> 
                <p id="days" class="big-text">00</p>
                <span>Days</span>
            </div> 
            <div> 
                <p id="hours" class="big-text">00</p>
                <span>Hours</span>
            </div> 
            <div> 
                <p id="min" class="big-text">00</p>
                <span>Minutes</span>
            </div> 
            <div> 
                <p id="sec" class="big-text">00</p>
                <span>Seconds</span>
            </div>
            </div>  
        </div>
    
    </div>
</section>

<!-- about section ends -->
<section id="contact-details" class="section-p1">
    <div class="details">
        <span>GET IN TOUCH</span>
        <h2>VISIT OUR TRAINING CAMP </h2>
        <h3>HOME GROUND</h3>
        <div>
            <li>
            <i class="fas fa-map"></i>
            <p>Cooparage Football Ground, Bandra, Mumbai , India.</p>
            </li>
            <li>
            <i class="fas fa-envelope"></i>
            <p>ambernathunited@gmail.com</p>
            </li>
            <li>
            <i class="fas fa-phone"></i>
            <p>ambernathunited@gmail.com</p>
            </li>
            <li>
            <i class="fas fa-clock"></i>
            <p>Monday to Saturday: 9.00am to 16.00pm.</p>
            </li>
        </div>
    </div>
    <div class="map">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3774.158588561926!2d72.8261291748696!3d18.924373282249228!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7d1c1eff3499b%3A0x8898b47d944defe3!2sCooperage%20Football%20Ground!5e0!3m2!1sen!2sin!4v1681535224846!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

    </div>
</section>

<div class="marquee-container">
    <marquee bgcolor="lightgreen" loop="-1" scrollamount="5" height:"10px" width="100%">Similique animi reiciendis ea eligendi officiis, inventore optio natus consectetur quo mollitia unde, porro adipisci fuga.</marquee>
</div>

<section id="about-head" class="section-p1">
    <img src="images/17.jpeg">
    <div>
        <h2>AMBERNATH FC Mumbai Knight's</h2><br>
        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sunt tempora iste eligendi nobis enim molestiae voluptatum id optio hic ipsum voluptates dolorum fugiat eveniet neque accusantium quidem , at odio! Similique animi reiciendis ea eligendi officiis, porro adipisci fuga. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo vero dicta mollitia optio repudiandae, cupiditate possimus quos in minima nostrum.</p>
        <br><br>
        
    </div>
</section>

<section id="about-head" class="section-p1">
    <img src="images/11.jpeg">
    <div>
        <h2>AMBERNATH FC Women's Team</h2>
        <br>
        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sunt tempora iste eligendi nobis enim molestiae voluptatum id optio hic ipsum voluptates dolorum fugiat eveniet neque accusantium quidem , at odio! Similique animi reiciendis ea eligendi officiis, porro adipisci fuga. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo vero dicta mollitia optio repudiandae, cupiditate possimus quos in minima nostrum.</p>
        <br><br>
        <marquee bgcolor="lightblue" loop="-1" scrollamount="5" width="100%">Similique animi reiciendis ea eligendi officiis, inventore optio natus consectetur quo mollitia unde, porro adipisci fuga.</marquee>
    </div>
</section>

<section id="about-head" class="section-p1">
    <img src="images/12.jpeg">
    <div>
        <h2>AMBERNATH FC Veteran's Team</h2><br>
        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sunt tempora iste eligendi nobis enim molestiae voluptatum id optio hic ipsum voluptates dolorum fugiat eveniet neque accusantium quidem , at odio! Similique animi reiciendis ea eligendi officiis, porro adipisci fuga. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo vero dicta mollitia optio repudiandae, cupiditate possimus quos in minima nostrum.</p>
        <br><br>
       
</section>



<!-- footer section starts  -->

<?php  include 'footer.php';    ?>

<!-- footer section ends -->






<script>
 var countDownDate = new Date("May 1, 2023 00:00:00").getTime();

// Update the count down every 1 second
var x = setInterval(function() {

  // Get today's date and time
  var now = new Date().getTime();
    
  // Find the distance between now and the count down date
  var distance = countDownDate - now;
    
  // Time calculations for days, hours, minutes and seconds
  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);
    
  // Output the result in an element with id="demo"
  document.getElementById("days").innerHTML = days;
  document.getElementById("hours").innerHTML = hours;
  document.getElementById("min").innerHTML = minutes;
  document.getElementById("sec").innerHTML = seconds;
  
  // If the count down is over, write some text 
  if (distance < 0) {
    clearInterval(x);
    
  }
}, 1000);

</script>


<!-- swiper js link  -->
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->


<script src="js/script.js"></script>
</body>
</html>