<?php session_start();


?>
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
        box-shadow: 20px 20px 34px rgba(0,0,0,28%);
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
    #product1 .buttons{
        align-items:center;
        display: flex;
        justify-content: flex-end;
        bottom: 65px;
        position: relative;        
    }
    #product1 .buttons i{
        padding: 0px 8px 0px 8px;
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
            height: 60vh;
            padding: 0 60px;
            background-position: top 30% right 110%;
        }
        #hero1 h4 {
            font-size: 25px;
        }
        #hero1 h1 {
            font-size: 40px;
        }
        #hero1 p {
            font-size: 25px;
            margin: 8px 0 20px 0;
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
            justify-content: space-around;
        }
        #product1 .pro{
            margin:15px;
            width:45%;
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
        .cartamount{                   
            top: 11px;
            right: 66px;
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
        .cartamount {
            top: 6px;
            right: 42px;
        } 
        #hero1 button {
            box-shadow: 3px 3px 5px white;       
            padding: 8px 20px 8px 20px;
            font-size: 14px;
        }    
        #hero1 p {
            text-shadow: 2px 2px 0px rgb(255 251 2);
            font-size: 16px;
            margin: 8px 0 15px 0;
        } 
        #hero1 h1 {
            text-shadow: 3px 3px 2px greenyellow;
            font-size: 25px;
            line-height: 44px;
        } 
        #hero1 h4 {
            text-shadow: 4px 4px 2px black; 
            font-size: 22px;
            padding-bottom: 0px;
        }   
        #hero1 {
            height: 35vh;
            padding: 0px 10px;
            background-position: top 30% right 95%;
        }   
        #feature .fe-box {
            margin: 8px 5px;
            width: 122px;
            box-shadow: 5px 5px 20px rgba(0,0,0,28%);
            padding: 10px 5px;    
        }    
        .section-p1 {
            padding: 20px 8px;
        } 
        #product1 .pro-container {
            display: flex;
            flex-direction: row;
        } 
        #product1 .pro {
            margin: 10px;
            width: 85%;
            min-width: 145px;
            padding: 0px 0px;
            box-shadow: 14px 15px 25px rgba(231, 95, 95, 0.03); 
            border-radius: 15px              
        } 
        #product1 h2{
            font-size: 30px;
            line-height: 20px;
            color: #2fd759;
        } 
        #product1 p{
            font-size: 20px;
        } 
        #product1 .pro img {
            height: 62%;
            border-radius: 15px;
        } 
        #product1 .pro .des {
            padding: 5px 5px;
        } 
        #product1 .pro .des span {
            font-size: 15px;
        } 
        #product1 .pro .des h5 {
            font-size: 12px;
        }   
        #product1 .pro .des i {
            font-size: 10px;
        }  
        #product1 .pro .des a i {
            width: 30px;
            height: 30px;
            line-height: 28px;      
            bottom: 14px;
            right: 14px;
        }  
        #product1 .buttons i {
            padding: 0px 5px 0px 5px;
        } 
        .section-m1 {
            margin: 20px 0;
        } 
        #banner h2{
            line-height:28px;
        }            
    }
    @media (min-width:800px) and (max-width:907px){
        #product1 .pro {
            width: 45%;
        }
        #banner{
            height:25vh;
        }
        #feature{
            gap:20px;
        }
        #feature .fe-box {
            width: 190px;
        }
    }

</style>
<body>
  
   <section id="header">
    <a href=""><img src="images/logo1.jpeg" class="aulogo" alt=""> </a>
        <h1>AU SHOP</h1>
    <div>
        <ul id="navigation">
            <li><a class="active" href="shop.php">HOME</a></li>
            <li><a href="contact.php">CONTACT</a></li>
            <li id="lg-bag"><a href="cart.php"><i class="fa-sharp fa-solid fa-cart-shopping"></i><div id="cartamount" class="cartamount">0</div></a></li>
            <li><a href="logout.php"><h1 style="font-size:20px; text-align:center; text-transform:uppercase; line-height: 20px; text-shadow: 2px 1px 2px red;"><?php  echo $_SESSION['loginname'];?><i style="padding-left:10px; "class="fas fa-sign-out"></i></h1></a></li>
            <a href="" id="close"><i class="fa-solid fa-xmark"></i></a>
        </ul>
    </div>
    <div id="mobile">
        <a href="cart.php"><i class="fa-sharp fa-solid fa-cart-shopping"></i><div id="cartamount" class="cartamount">0</div></a>
        <i id="bar1" class="fas fa-bars"></i>
    </div>
   </section> 

   <section id="hero1">
        <h4>Trade-in-offer</h4>
        <h1> Super value deals</h1>
        <p>Save more with coupons & Up to to 70% off!</p>
        <button>Show Now</button>

   </section>

    <section id="feature" class="section-p1">
        <div class="fe-box">
            <img src="images/f1.png" alt="">
            <h6>Free Shipping</h6>
        </div>
        <div class="fe-box">
            <img src="images/f2.png" alt="">
            <h6>Online Order</h6>
        </div>
        <div class="fe-box">
            <img src="images/f3.png" alt="">
            <h6>Save Money</h6>
        </div>
        <div class="fe-box">
            <img src="images/f4.png" alt="">
            <h6>Promotions</h6>
        </div>
        <div class="fe-box">
            <img src="images/f5.png" alt="">
            <h6>Happy Sell</h6>
        </div>
        <div class="fe-box">
            <img src="images/f6.png" alt="">
            <h6>Support</h6>
        </div>

    </section>

    <section id="product1" class="section-p1">
        <h2>Featured Products</h2>
        <p>summer collection</p>
        <div class="pro-container" id="shopfunction">
       

    </div>
    </section>

    <section id="banner" class="section-m1">
        <h4>Jersey's and Shoes</h4>
        <h2>Up to <span>70% Off</span> - All Jersy's and Accessories</h2>
        <button class="normal">Explore More</button>
    </section>

    <section id="product1" class="section-p1">
        <h2>New Arrivals</h2>
        <p>HOME and AWAY JERSYS</p>
        <div class="pro-container" id="shopfunction">
        <div class="pro">
            <img src="images/S1.jpg" alt="">
            <div class="des">
                <span>Adidas</span>
                <h5>product name</h5>
                <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>               
                </div>
                <h4>$78</h4>
                <a href="#"><i  class="fa-sharp fa-solid fa-cart-shopping" style="display: flex; justify-content: center; "></i></a>
                <div class="buttons">
                    <i class="fas fa-plus"></i>
                    <div class="quantity">0</div>
                    <i class="fas fa-minus"></i>
                </div>
            </div>
        </div>

        <div class="pro">
            <img src="images/S2.jpg" alt="">
            <div class="des">
                <span>Adidas</span>
                <h5>product name</h5>
                <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>               
                </div>
                <h4>$78</h4>
                <a href="#"><i  class="fa-sharp fa-solid fa-cart-shopping" style="display: flex; justify-content: center; "></i></a>
                <div class="buttons">
                    <i class="fas fa-plus"></i>
                    <div class="quantity">0</div>
                    <i class="fas fa-minus"></i>
                </div>
            </div>
        </div>

        <div class="pro">
            <img src="images/S3.PNG" alt="">
            <div class="des">
                <span>Adidas</span>
                <h5>product name</h5>
                <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>               
                </div>
                <h4>$78</h4>
                <a href="#"><i  class="fa-sharp fa-solid fa-cart-shopping" style="display: flex; justify-content: center; "></i></a>
                <div class="buttons">
                    <i class="fas fa-plus"></i>
                    <div class="quantity">0</div>
                    <i class="fas fa-minus"></i>
                </div>
            </div>
        </div>

        <div class="pro">
            <img src="images/S10.JPG" alt="">
            <div class="des">
                <span>Adidas</span>
                <h5>product name</h5>
                <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>               
                </div>
                <h4>$78</h4>
                <a href="#"><i  class="fa-sharp fa-solid fa-cart-shopping" style="display: flex; justify-content: center; "></i></a>
                <div class="buttons">
                    <i class="fas fa-plus"></i>
                    <div class="quantity">0</div>
                    <i class="fas fa-minus"></i>
                </div>
            </div>
        </div>

        <div class="pro">
            <img src="images/S9.jpg" alt="">
            <div class="des">
                <span>Adidas</span>
                <h5>product name</h5>
                <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>               
                </div>
                <h4>$78</h4>
                <a href="#"><i  class="fa-sharp fa-solid fa-cart-shopping" style="display: flex; justify-content: center; "></i></a>
                <div class="buttons">
                    <i class="fas fa-plus"></i>
                    <div class="quantity">0</div>
                    <i class="fas fa-minus"></i>
                </div>
            </div>
        </div>

        <div class="pro">
            <img src="images/S4.PNG" alt="">
            <div class="des">
                <span>Adidas</span>
                <h5>product name</h5>
                <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>               
                </div>
                <h4>$78</h4>
                <a href="#"><i  class="fa-sharp fa-solid fa-cart-shopping" style="display: flex; justify-content: center; "></i></a>
                <div class="buttons">
                    <i class="fas fa-plus"></i>
                    <div class="quantity">0</div>
                    <i class="fas fa-minus"></i>
                </div>
            </div>
        </div>

        <div class="pro">
            <img src="images/S7.PNG" alt="">
            <div class="des">
                <span>Adidas</span>
                <h5>product name</h5>
                <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>               
                </div>
                <h4>$78</h4>
                <a href="#"><i  class="fa-sharp fa-solid fa-cart-shopping" style="display: flex; justify-content: center; "></i></a>
                <div class="buttons">
                    <i class="fas fa-plus"></i>
                    <div class="quantity">0</div>
                    <i class="fas fa-minus"></i>
                </div>
            </div>
        </div>

        <div class="pro">
            <img src="images/S6.jfif" alt="">
            <div class="des">
                <span>Adidas</span>
                <h5>product name</h5>
                <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>               
                </div>
                <h4>$78</h4>
                <a href="#"><i  class="fa-sharp fa-solid fa-cart-shopping" style="display: flex; justify-content: center; "></i></a>
                <div class="buttons">
                    <i class="fas fa-plus"></i>
                    <div class="quantity">0</div>
                    <i class="fas fa-minus"></i>
                </div>
            </div>
        </div>

        <div class="pro">
            <img src="images/S5.jfif" alt="">
            <div class="des">
                <span>Adidas</span>
                <h5>product name</h5>
                <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>               
                </div>
                <h4>$78</h4>
                <a href="#"><i  class="fa-sharp fa-solid fa-cart-shopping" style="display: flex; justify-content: center; "></i></a>
                <div class="buttons">
                    <i class="fas fa-plus"></i>
                    <div class="quantity">0</div>
                    <i class="fas fa-minus"></i>
                </div>
            </div>
        </div>

        <div class="pro">
            <img src="images/jerseybackground.jpg" alt="">
            <div class="des">
                <span>Adidas</span>
                <h5>product name</h5>
                <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>               
                </div>
                <h4>$78</h4>
                <a href="#"><i  class="fa-sharp fa-solid fa-cart-shopping" style="display: flex; justify-content: center; "></i></a>
                <div class="buttons">
                    <i class="fas fa-plus"></i>
                    <div class="quantity">0</div>
                    <i class="fas fa-minus"></i>
                </div>
            </div>
        </div>

        <div class="pro">
            <img src="images/S11.PNG" alt="">
            <div class="des">
                <span>Adidas</span>
                <h5>product name</h5>
                <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>               
                </div>
                <h4>$78</h4>
                <a href="#"><i  class="fa-sharp fa-solid fa-cart-shopping" style="display: flex; justify-content: center; "></i></a>
                <div class="buttons">
                    <i class="fas fa-plus"></i>
                    <div class="quantity">0</div>
                    <i class="fas fa-minus"></i>
                </div>
            </div>
        </div>
        <div class="pro">
            <img src="images/keeper.png" alt="">
            <div class="des">
                <span>Adidas</span>
                <h5>product name</h5>
                <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>               
                </div>
                <h4>$78</h4>
                <a href="#"><i  class="fa-sharp fa-solid fa-cart-shopping" style="display: flex; justify-content: center; "></i></a>
                <div class="buttons">
                    <i class="fas fa-plus"></i>
                    <div class="quantity">0</div>
                    <i class="fas fa-minus"></i>
                </div>
            </div>
        </div>
    </div>
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
        <a href="">My WishListTrack My Order</a>
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

<!-- shop-function -->

<script>

    let shopfunction = document.getElementById("shopfunction");

let shopItemsData = [{
        id:"a",
        name:"Barca",
        price:25,
        img: "images/jersey.png",
    },
    {
        id:"b",
        name:"RealMadrid",
        price:45,
        img: "images/jersey1.png",
    },
    {
        id:"c",
        name:"Juventus",
        price:55,
        img: "images/jersey2.png",
    },
    {
        id:"d",
        name:"AC Milan",
        price:75,
        img: "images/jersey3.png",
    },
    {
        id:"e",
        name:"AU FC",
        price:45,
        img: "images/jersey5.png",
    },
    {
        id:"f",
        name:"Aztecs FC",
        price:15,
        img: "images/jersey6.png",
    },
    {
        id:"g",
        name:"SVFC",
        price:35,
        img: "images/jerseymain.jpeg",
    },
    {
        id:"h",
        name:"FC LISBAN",
        price:75,
        img: "images/jersey8.png",
    },
    {
        id:"i",
        name:"PSG",
        price:65,
        img: "images/jersey9.jpg",
    },
    {
        id:"j",
        name:"AC Milan",
        price:65,
        img: "images/jersey10.jpg",
    },
    {
        id:"k",
        name:"Milan",
        price:65,
        img: "images/jersey.png",
    },
    {
        id:"l",
        name:"Milan",
        price:65,
        img: "images/jersey1.png",
    },
];

let basket = JSON.parse(localStorage.getItem("data")) || [];

let generateShop =()=>{
    return (shopfunction.innerHTML= shopItemsData.map((x)=>{
        let{id, name, price, img} = x;
        let search =basket.find((x)=>x.id === id) || [];
        return `
    <div id=product-id-${id} class="pro">
            <img src=${img} alt="">
            <div class="des">
                <span>Adidas</span>
                <h5>${name}</h5>
                <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>               
                </div>
                <h4>$ ${price}</h4>
                <a href="#"><i onclick="javascript:window.location.href='cart.php'" class="fa-sharp fa-solid fa-cart-shopping" style="display: flex; justify-content: center; "></i></a>
                <div class="buttons">
                    <i onclick="increment(${id})" class="fas fa-plus"></i>
                    <div id=${id} class="quantity">
                    ${search.item === undefined? 0: search.item}
                    </div>
                    <i onclick="decrement(${id})" class="fas fa-minus"></i>
                </div>
            </div>
        </div>
    `;
    }).join(""));
};
generateShop();

let increment = (id)=> {
    let selectedItem = id;
    let search = basket.find((x)=> x.id === selectedItem.id);

    if(search === undefined){
        basket.push({
        id: selectedItem.id,
        item:1,
      });
    } 
    else{
      search.item += 1;
    }
    localStorage.setItem("data", JSON.stringify(basket));
    // console.log(basket);
    update(selectedItem.id);
};

let decrement = (id)=> {
    let selectedItem = id;
    let search = basket.find((x)=> x.id === selectedItem.id);

    if(search === undefined)return;
    else if(search.item === 0)return;
    else{
      search.item -= 1;
    }
    update(selectedItem.id);
    basket = basket.filter((x)=>x.item !==0);
    // console.log(basket);
    

    localStorage.setItem("data", JSON.stringify(basket));
};


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