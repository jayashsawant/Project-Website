<?php session_start();?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AU-FC SHOP</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    
</head>
<style>
    *{
        padding: 0;
        margin: 0;
        box-sizing: border-box;
        font-family: sans-serif;
    }
    h1{
        font-size: 50px;
        line-height: 64px;
        color:black
    }
    h2{
        font-size: 46px;
        line-height: 46px;
        color:black
    }
    h4{
        font-size: 20px;
        color:black
    }
    h6{
        font-weight: 700;
        font-size: 12px;
    }
    p{
        font-size: 23px;
        color: black;
        margin: 15px 0 20px 0;
    }
    .section-p1{
        padding: 40px 80px;
    }
    .section-m1{
        margin:40px 0;
    }
    button.normal{
        font-size: 14px;
        font-weight: 600;
        padding: 15px 30px;
        color: black;
        background-color: white;
        cursor: pointer;
        border-radius: 6px;
        border: none;
        outline: none;
        transition: .2s;
    }
    #header{
        display:flex;
        align-items: center;
        justify-content: space-between;
        padding: 2px 30px;
        background-color: whitesmoke;
        box-shadow: 0 5px 15px black;
        position: sticky;
        top: 0;
        z-index: 999;
        left:0;

    }
    #header h1{
        text-shadow: 2px 2px 4px red;
        display: flex;
        font-family: ui-monospace;
    }
    
    #navigation{
        display: flex;
        align-items: center;
        justify-content: center;
    }
    #navigation li{
        list-style: none;
        padding: 0 20px;
        position: relative;  
    }
    .aulogo{
        border-radius: 40px;
        height: 70px;
        width: 70px;
    }
    #navigation li a{
        text-decoration: none;
        font-size: 16px;
        font-weight: 600;
        color: black;
        transition: .3s ease;
    }
    #navigation li a:hover, 
    #navigation li a.active{
        color: blue;
    }
    #navigation li a.active::after,
    #navigation li a:hover::after{
        content: "";
        width: 30%;
        height: 2px;
        background: rgb(0, 11, 15);
        position: absolute;
        bottom: -4px;
        left: 20px;
    }
    #mobile{
        display: none;
        align-items: center;
      
    }  
    #close{
        display: none;
       
    }
    #hero1{
        background-image: url("images/backjersey.jpg");
        height: 90vh;
        width: 100%;
        background-position: top 25% right -350px;
        background-size: cover;
        padding: 0 60px;
        display: flex;
        flex-direction: column;
        align-items: flex-start;
        justify-content: center;
        opacity: 0.8;
    }
    #hero1 h4{
        text-shadow: 5px 5px 2px black;
        color: gold;
        font-size: 40px;
        padding-bottom: 15px;
    }
    #hero1 h1{
        text-shadow: 5px 6px 4px white;
        font-size: 85px;
        color: black;
    }
    #hero1 p{
        text-shadow: 3px 3px 3px rgb(255 251 2);
        color: #ff0000;
        font-size: 30px;

    }
    #hero1 button{
        box-shadow: 5px 5px 10px white;
        background-color: #18078d;
        cursor: pointer;
        color: white;
        border: 0;
        padding: 14px 80px 14px 65px;
        font-size: 30px;
        border-radius: 20px;
        font-weight: 700;
    }
    #feature{
        flex-wrap: wrap;
        display: flex;
        align-items: center;
        justify-content: space-between;
    }
    #feature .fe-box{
        width: 180px;
        text-align: center;
        padding: 25px 15px;
        box-shadow: 20px 20px 34px rgba(0,0,0,0.03);
        border: 1px solid #cce7d0;
        border-radius: 4px;
        margin: 15px 0;
    }
    #feature .fe-box:hover{
        box-shadow: 10px 10px 54px rgba(70,62,221,0.1);
    }
    #feature .fe-box img{
        width: 100%;
        margin-bottom: 10px;

    }
    #feature .fe-box h6{
        display: inline-block;
        padding: 9px 8px 6px 8px;
        line-height: 1;
        border-radius: 4px;
        color: #088178;
        background-color: #fddde4;
    }
    #product1{
        text-align: center;
    }
    #product1 .pro-container{
        display: flex;
        justify-content: space-between;
        padding-top: 20px;
        flex-wrap: wrap;
    }
    #product1 .pro{
        width: 23%;
        min-width: 250px;
        padding: 10px 12px;
        border: 2px solid #cce7d0;
        border-radius: 25px;
        cursor: pointer;
        box-shadow: 20px 20px 30px rgba(231, 95, 95, 0.03);
        margin: 15px 0;
        transition: 0.2s ease;
        position: relative;
    }
    #product1 .pro:hover{
        box-shadow: 20px 20px 30px rgba(0,0,0,0.3);
    }

    #product1 .pro img{
        width: 100%;
        height: 70%;
        border-radius: 20px;
    }
    #product1 .pro .des{
        text-align: start;
        padding: 10px 0;
    }
    #product1 .pro .des span{
        color: firebrick;
        font-size: 12px;
    }
   
    #product1 .pro .des h5{
        padding-top: 7px;
        color: blueviolet;
        font-size: 14px;
    }
    #product1 .pro .des i{
        font-size: 12px;
        color: rgb(162, 162, 0);
    }
    #product1 .pro .des h4{
        padding-top: 7px;
        font-size: 15px;
        font-weight: 700;
        color: #088178;
    }
    #product1 .pro .des a i{
        width: 40px;
        height: 40px;
        line-height: 40px;
        border-radius: 50px;
        background-color: #96eae0;
        color: #ff0000;
        font-family: 600;
        border: 2px solid rgb(102, 87, 87);
        position: absolute;
        bottom: 20px;
        right: 10px;
    }
    #banner{
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        text-align: center;
        background-image: url(images/b2.jpg);   
        width: 100%;
        height: 40vh;
        background-size: cover;
        background-position: center;
    }
    #banner h4{
        color: white;
        font: 16px;      
    }
    #banner h2{
        color: white;
        font: 30px;
        padding: 10px 0;      
    }
    #banner h2 span{
        color: rgb(233, 22, 22);         
    }
    #banner button:hover{
        background: #088178;
        color: #fff;
    }
    footer{
        background-image: url(images/footer-bg.jpg);
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
    }
    footer .col{
        display: flex;
        flex-direction: column;
       align-items: flex-start;
       margin-bottom: 20px;        
    }
    footer h4{
        color: chartreuse;
        font-size: 14px;
        padding-bottom: 20px;
    }
    footer p{
        color: white;
        font-size: 13px;
        margin: 0 0 8px 0;
    }
    footer a{
        text-decoration: none;
        color: rgb(255, 253, 253);
        font-size: 13px;
        margin-bottom: 10px;
    }
    footer .follow{
        margin-top: 20px;
    }
    footer .follow i{
        color: #a7a7a7;
        cursor: pointer;
        padding-right: 4px;
    }
    footer .install .row img{
        border: 1px solid rgb(9, 11, 11);
        border-radius: 6px;
    }
    footer .install img{
        margin: 10px 0 15px 0;
    }
    footer .follow i:hover,
    footer a:hover{
        color: rgb(58, 253, 253);
    }
    footer .copy{
        width: 100%;
        text-align: center;
    }

    #page-header{
        background-image: url("images/100.jpeg");
        width:100%;
        height:40vh;
        background-size:cover;
        display:flex;
        justify-content:center;
        text-align: center;
        flex-direction: column;
        padding: 14px;
    }
    #page-header h2{
        color: red;
        font-weight:700;
    }
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
    }
    #about-app{
        text-align:center;
    }
    #about-app .video{
        margin-top:30px;
    }

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
    #form-details form{
        padding:20px;
       width: 65%;
       display:flex;
       flex-direction: column;
       align-items: flex-start; 
    }
    #form-details form input,
    #form-details form textarea{
        width: 100%;
        padding:12px 15px;
        outline:none;
        margin-bottom:20px;
        border:2px solid grey;        
    }
    #form-details form button{
        border-radius:5px;
        width: 100px;
        height: 40px;
        background-color: #088178;
        color:#fff;
    }
    .cartamount{
        top: -12px;
        right:12px;
        position: absolute;
        color:red;
    }

    @media (max-width:799px){
        #navigation{
            display: flex;
            flex-direction: column;
            align-items: flex-start;
            justify-content: flex-start;
            position: fixed;
            top: 0;
            right: -300px;
            height: 100vh;
            width: 300px;
            background-color: wheat;
            box-shadow: 0 40px 60px rgba(0,0,0,0.1);
            padding: 80px 0 0 10px;
            transition: 0.3s;
            
        }
        #navigation.active{
            right:0;
        }
        #navigation li{
            margin-bottom: 25px;
        }
        #mobile{
        display: flex;
        align-items: center;
        }
        #mobile i{
        color: black;
        font-size: 24px;
        padding-left: 20px;
        cursor: pointer;
        }
        #close{
            position: absolute;
            top: 30px;
            left: 30px;
            color:#18078d;
            display: initial;
            
        }
        #lg-bag{
            display: none;
        }
        #hero1{      
            height: 70vh;
            padding: 0 60px;
            background-position: top 30% right 110%;
        }
        #feature{
            justify-content: center;
        }
        #feature .fe-box{
            margin: 15px 15px;
        }
        .section-p1{
            padding: 40px 40px;
        }
        #product1 .pro-container{
            justify-content: center;
        }
        #product1 .pro{
            margin:15px;
        }
        #banner{
            height: 20vh;
        }
        #banner h2{
            font-size: 15px;
            padding: 0;
        }
        #banner h4{
            font-size:14px;
        }
        button.normal {
            font-size: 7px;
            font-weight: 600;
            padding: 9px 22px;
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
    }
    
    
    @media (max-width:450px){
        #header{
            padding: 0px 4px;
        }
        .aulogo {         
            height: 35px;
            width: 35px;
        }
        #header h1 {
            font-size: 18px;
            text-shadow: 1px 1px 2px red;
        }
        #navigation.active {
            right: -113px;
        }
        #navigation li {
            margin-bottom: 15px;
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
        #about-app .video{
            width:100%;
        }
        #about-app .video {
            width:100%;
            height:450px;
        }
        #page-header {
            height: 24vh;
        }
        #page-header h2 {
            color: black;
            font-size: 20px;
        }
        #page-header p {
            color: #ff3c3c;
            font-size: 15px;
        }
        .section-p1 {
            padding: 15px 15px;
        } 
        #about-head img {
            margin-bottom: 30px;
            height: 50vh;
        }
        h1 {
            font-size: 35px;
            line-height: 35px;
            color: #1A237E;
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
         
    }       
</style>
<body>
  
   <section id="header">
    <a href=""><img src="images/logo1.jpeg" class="aulogo" alt=""> </a>
        <h1>AU SHOP</h1>
    <div>
        <ul id="navigation">
            <li><a  href="shop.php">HOME</a></li>
            <li><a class="active" href="contact.php">CONTACT</a></li>
            <li id="lg-bag"><a href="cart.php"><i class="fa-sharp fa-solid fa-cart-shopping"></i><div id="cartamount" class="cartamount">0</div></a></li>
            <li><a href="logout.php"><h1 style="font-size:20px; text-align:center; text-transform:uppercase; line-height: 20px; text-shadow: 2px 1px 2px red;"><?php  echo $_SESSION['loginname'];?><i style="padding-left:10px; "class="fas fa-sign-out"></i></h1></a></li>
            <a href="" id="close"><i class="fa-solid fa-xmark"></i></a>
        </ul>
    </div>
    <div id="mobile">
        <a href="cart.php"><i class="fa-sharp fa-solid fa-cart-shopping"></i></a>
        <i id="bar1" class="fas fa-bars"></i>
    </div>
   </section> 

<section id="page-header">
    <h2>#LET'S TALK</h2>
    <P>LEAVE A MESSAGE, We love to hear from you!</P>
</section>

<hr>

<section id="about-head" class="section-p1">
    <img src="images/img.jpg">
    <div>
        <h2>AMBERNATH FC</h2>
        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sunt tempora iste eligendi nobis enim molestiae voluptatum id optio hic ipsum voluptates dolorum fugiat eveniet neque accusantium quidem perferendis quibusdam animi, at odio minima porro! Similique animi reiciendis ea eligendi officiis, inventore optio natus consectetur quo mollitia unde, porro adipisci fuga.</p>
        <br><br>
        <marquee bgcolor="lightgreen" loop="-1" scrollamount="5" width="100%">Similique animi reiciendis ea eligendi officiis, inventore optio natus consectetur quo mollitia unde, porro adipisci fuga.</marquee>
    </div>
</section>

<hr>

<section id="about-app" class="section-p1">
    <h1>WATCH NOW</h1>
    <div class="video">
        <iframe width="100%" height="460px" src="https://www.youtube.com/embed/-pMJ1zkyrJY" title="CR7 jersey unboxing🔥// #shorts #cr7 #cr7jersey" frameborder="0" allow="accelerometer; autoplay;  clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
    </div>
</section>

<hr>

<section id="contact-details" class="section-p1">
    <div class="details">
        <span>GET IN TOUCH</span>
        <h2>Visit one of our store. </h2>
        <h3>HEAD OFFICE</h3>
        <div>
            <li>
            <i class="fas fa-map"></i>
            <p>56 Glassford Street G1 Bandra, Mumbai , India.</p>
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
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3770.873929440801!2d72.86763751469736!3d19.069279787091823!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7c985c283b8b5%3A0x1c6d4de1655715bf!2sFootball%20jersys!5e0!3m2!1sen!2sin!4v1680851081284!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
</section>

<hr>

<section id="form-details">
    <form action="">
        <span>LEAVE A MESSAGE</span>
        <h2>We love to hear from you</h2>
        <input type="text" placeholder="Your Name">
        <input type="text" placeholder="Email ">
        <input type="text" placeholder="Subject ">
        <textarea name="" id="" cols="30" rows="10" placeholder="Your Message"></textarea>
        <button>SUBMIT</button>
    </form>
</section>







<footer class="section-p1">
    <div class="col">
        <h4>contact</h4>
        <p><strong>Address</strong>13/421 Vidhyavihar (east) Mumbai-400071  </p>
        <p><strong>Phone</strong> +01 2222 365/(+91) 01 2345 6789</p>
        <p><strong>Hours</strong>10:00 - 18:00, Mon - Sat</p>
        <div class="follow">
            <h4>Follow Us</h4>
            <div class="icon">
                <i class="fab fa-facebook-f"></i>
                <i class="fab fa-twitter"></i>
                <i class="fab fa-instagram"></i>
                <i class="fab fa-pinterest-p"></i>
                <i class="fab fa-youtube"></i>
            </div>
        </div>
    </div>

    <div class="col">
        <h4>About</h4>
        <a href="about.php">About Us</a>
        <a href="">Delivery Information</a>
        <a href="">Privacy policy</a>
        <a href="">Terms & Conditions</a>
        <a href="">Countact Us</a>
    </div>

    <div class="col">
        <h4>My Account</h4>
        <a href="">Sign In</a>
        <a href="">View Cart</a>
        <a href="">Track My Order</a>
        <a href="">Help</a>   
    </div>

    <div class="col install">
        <h4>Install App</h4>
        <p>From Appstore or Google Playstore</p>
        <div class="row">
            <img src="images/app.jpg" alt="appstore">
            <img src="images/play.jpg" alt="playstore">
        </div>
        <p>Secured Payment Gateways</p>
        <img src="images/pay.png" alt="">
    </div>

    <div class="copy">
        <p>© 2023 Jayash Sawant. All Rights Reserved.</p>
    </div>

</footer>






















<script>
    const bar1 = document.getElementById('bar1');
    const nav = document.getElementById('navigation');

    if(bar1){
        bar1.addEventListener('click', () =>{
            nav.classList.add('active')
    })
    }

    if(close){
            close.addEventListener('click', () =>{
            nav.classList.remove('active')
      
    })
}
</script>



<script>
    let basket = JSON.parse(localStorage.getItem("data")) || [];

    let update = (id)=> {

    let search = basket.find((x)=>x.id ===id);
    // console.log(search.item);
    document.getElementById(id).innerHTML =search.item;
    calculation();
    };


    let calculation =()=>{
    let cartIcon = document.getElementById("cartamount");
    cartIcon.innerHTML = basket.map((x)=> x.item).reduce((x,y)=>x+y,0);
   
    };

    calculation();
</script>
   
</body>
</html>