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
    body{
        background-image:url('images/checkout.jpeg');
        background-repeat:no-repeat;
        background-attachment:fixed;
        background-size:100% 100%;
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
    .textcenter{
        margin-top: 20px;
        text-align:center;
        margin-bottom: 20px;
    }
    .HomeBtn,   
    .removeAll{
        background-color:#212529;
        color:white;
        border:none;
        padding:6px;
        border-radius:3px;
        cursor: pointer;
        margin-top:10px;
    }
    #paynowbtn{
        /* background-color:#212529; */
        color:white;
        border:none;
        padding:6px;
        border-radius:3px;
        cursor: pointer;
        margin-top:10px;
        background-color: #41ef01;
    }
    #paynowbtn a{
        text-decoration:none;
    }
    .removeAll{
        background-color: red;
    }
    .shoppingcart{
        display: grid;
        grid-template-columns: repeat(1, 320px);
        justify-content: center;
        gap: 15px;
    }
    .cartitem{
        border:2px solid #212529;
        border-radius: 5px;
        display: flex;
    }
    .title-price-x{
        height: 50px;
        width: 200px;
        display: flex;
        align-items: center;
        justify-content: space-between;
        
    }
    .title-price{
        display: flex;
        align-items: center;
        gap:10px;
    }
    .cart-item-price{
        background-color: #212529;
        color: white;
        border-radius: 4px;
        padding: 3px 6px;
    }
    .details{
        padding: 0px 5px 5px 5px;
    }
    .title-price p{
        font-size: 15px;   
         margin: 10px 0 10px 0;
    }
    .details .buttons{
        display: flex;
        align-items: center;
        gap: 10px;
    }
    #paynow{
        display: flex;
        justify-content: center;
        padding: 20px 0px 50px 0px;
    }
    #paynow button{
        display: flex;
        justify-content: center;
        padding: 2px 0px 0px 0px;
        width: 100px;
        height: 25px;
        background-color: #18eb18;
        border-radius: 5px;
        border: 2px solid #18eb18;
    }
    #paynow button a{
        text-decoration:none;
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
        #label h2{
            font-size:26px;
        } 
        .shoppingcart {
            display: grid;
            grid-template-columns: repeat(1, 266px);
        }   
        .title-price-x {
           
            width: 152px;
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
            <li><a  href="contact.php">CONTACT</a></li>
            <li id="lg-bag"><a class="active" href="cart.php"><i class="fa-sharp fa-solid fa-cart-shopping"></i><div id="cartamount" class="cartamount">0</div></a></li>
            <li><a href="logout.php"><h1 style="font-size:20px; text-align:center; text-transform:uppercase; line-height: 20px; text-shadow: 2px 1px 2px red;">
                <?php  echo $_SESSION['loginname'];?><i style="padding-left:10px; "class="fas fa-sign-out"></i></h1></a></li>
            <a href="" id="close"><i class="fa-solid fa-xmark"></i></a>
        </ul>
    </div>
    <div id="mobile">
        <a href="cart.php"><i class="fa-sharp fa-solid fa-cart-shopping"></i></a>
        <i id="bar1" class="fas fa-bars"></i>
    </div>
   </section> 



<div id="label" class="textcenter">


</div>
<div class="shoppingcart" id="shoppingcart"></div>

<!-- <div class="checkbutton"  id="payNow">
   <button id="paynowbtn" >  <a href="checkout.php"  >Pay Now</a></button>
</div> -->

<!-- <script>
    let basket = JSON.parse(localStorage.getItem("data")) || [];

    function remove(){
        var x = document.getElementById("payNow");
        var y = document.getElementById("shoppingCart");
        if(basket.length === 0){
            x.style.display = 'none';
            y.style.display = 'block';
        }else{
            x.style.display = 'block';
        }
    }

    remove();
</script> -->


<!-- <script>
    let generateCartItems = () => {
        if(basket.length !==0){
            return (shoppingcart.innerHTML = basket.map((x)=>{
                let {id, item} = x;
                let search = shopItemsData.find((y)=>y.id === id) || [];
                let {img,name,price} = search;
                return `
                <div class="cartitem">
                <img width="100" src=${search.img} alt="" />
                  <div class="details">
                    <div class="title-price-x">
                        <h4 class="title-price">
                           <p>${name}</p>
                           <p class="cart-item-price">$ ${price}</p>
                        </h4>
                        <i onclick ="removeItem(${id})" class="fa-solid fa-xmark"></i>
                    </div>
                    <div class="buttons">
                        <i onclick="increment(${id})" class="fas fa-plus"></i>
                        <div id=${id} class="quantity">${item}</div>
                        <i onclick="decrement(${id})" class="fas fa-minus"></i>
                    </div>
                    <h3>$ ${item * search.price}</h3>
                  </div>
                </div>
                `;
            }).join(""));    
        } else {
            shoppingcart.innerHTML = ``;
            label.innerHTML = `
            <h2> Cart is Empty<h2>
            <a href="shop.php">
            <button class="HomeBtn">Back to home</button>
            </a>
           `;
        }
    };  
</script>    -->


<script>
    const bar1 = document.getElementById('bar1');
    const nav = document.getElementById('navigation');

    if(bar1){
        bar1.addEventListener('click', () =>{
            nav.classList.add('active');
    });
    };

    if(close){
            close.addEventListener('click', () =>{
            nav.classList.remove('active');
      
        });
    };



</script>

   <script src="js/cart.js"></script>
   <script src="js/data.js"></script>
</body>
</html>