<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <title>LOGIN AND REGISTER</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1" />
  <!-- Link Swiper's CSS -->
  
  

 
</head>
<style>
  *{
    padding:0;
    margin:0;
    font-family:sans-serif;
  }
  .hero{
    
    height:100%;
    width: 100%;
    background-image:url(images/14.jpeg);
    background-position:center;
    background-size:cover;
    position: absolute;
    opacity:0.7;
  }
  .form-box{
    width: 380px;
    height: 480px;
    position: relative;
    margin:8% auto;
    background:#fff;
    padding:5px;
    overflow: hidden;
  }

  .button-box{
    width:220px;
    margin: 35px auto;
    position: relative;
    box-shadow: 0 0 20px 9px #ff61241f;
    border-radius:30px;
  }

  .toggle-btn{
    padding:10px 30px;
    cursor: pointer;
    background:transparent;
    border:0;
    outline:none;
    position: relative;  
  }
  #btn{
    top:0;
    left:0;
    position: absolute;
    width:110px;
    height:100%;
    background:linear-gradient(to right, #ff105f, #ffad06);
    border-radius:30px;
    transition:0.5s;
  }
  .input-group{
    top: 180px;
    position:absolute;
    width: 280px;
    transition:.5s;   
  }
  .input-field{
    width:100%;
    padding:10px 0;
    margin:5px 0;
    border-left:0;
    border-right:0;
    border-top:0;
    border-bottom:1px solid #999;
    outline:none;
    background:transparent;
  }
  .submit-btn{
    width:85%;
    padding:10px 30px;
    cursor:pointer;
    display:block;
    margin:auto;
    background:linear-gradient(to right, #ff105f, #ffad06);
    border:0;
    outline:none;
    border-radius:30px;
  }
  .check-box{
    margin: 20px 8px 6px 1px;
  }
  span{
    color:#777;
    font-size: 12px;
    bottom:42px;
    position:absolute;
  }
  #login{
    left:50px;
  }
  #signin{
    left:450px;
  }
  .backbtn{
    width: 129px;
    height: 34px;
    background-color: transparent;
    float: right;
    margin: 11px 40px;
  }
  .backbtn a{
    color: white;
    text-decoration: none;
    justify-content: center;
    display: flex;
    align-items: center;
    height: 100%;
    text-shadow: 4px 4px black;
    font-weight: 800;
    font-size: 35px;
  }
  @media (min-width:200px) and (max-width: 400px){
    html{
      font-size:40%;
    }
    .backbtn {
    width: 100%;  
  }
  .backbtn a {   
    font-size: 20px;
    justify-content: right;
    display: flex;
  }
  .form-box{
    display:flex;
    width: auto;
    height: 60vh;
    margin: 25% 2%;
  }
  .button-box {
    height: 35px;
    width: 222px;
  }
  #login{
    display: flex;
    left: 30px;
    flex-direction: column;
  }
  .input-group {
    top: 127px;
    left: 20px;
  }
  .input-field {
    display:flex;
    width:65%;
    padding: 15px 0;
  }
  span{
    bottom:82px;
  }
  .submit-btn{
    font-size: 15px;
    width:55%;
    margin:15px 10px;
  }
  .check-box {
    margin: 15px 2px 13px 0px;
  }
  .alert{
    font-size: 16px;
  }
}
@media (min-width:300px) and (max-width: 400px){
    #login{
    left: 60px;
  }
  #signin{
    left:400px;
  }
  
}
.alert{
   width: 100%;
   height: auto;
   font-family: Arial, Helvetica, sans-serif;
   font-weight: 500;
   font-size: 20px;
   text-align: center;
   color: white;
   background: rgb(255, 0, 0);
   border-radius: 5px;
   text-transform: uppercase;
   padding-top:8px;
}
.alert-message{
  width:auto;
  display:flex;
  justify-content:center;
  align-items: center;
}
.message{
  position:sticky;
  top:0;
  width:auto;
  display:flex;
  justify-content:center;
  align-items: center;
}

</style>
<body>
  <div class= "alert-message">
  <?php

    if(isset($_SESSION['status1']))
    {
      ?>
          <div class="alert alert-warning alert-dismissible fade show" role="alert">
              <?php echo $_SESSION['status1'];?>
          </div>
      <?php
      
      unset($_SESSION['status1']);
    }
    ?>

  </div>



<div class="hero">
<div class="backbtn">
    <a href="home.php">BACK</a>
</div>
  <div class="form-box">
    <div class="button-box">
      <div id="btn"></div>
        <button type="button" class="toggle-btn" onclick="login()">LOG IN</button>
        <button type="button" class="toggle-btn" onclick="signin()">SIGN IN</button>      
      </div>


      <form  id ="login" action="login.php" method="post" class="input-group">
          <input type="text" name="name" class="input-field" placeholder="User Id" required>

          <input type="password" name="password" class="input-field" placeholder="Enter Password" required>

          <input type="checkbox" class="check-box"><span>Remember passsword</span>

          <button type="submit" class="submit-btn"> Log in</button>
      </form>



      <form id ="signin" action="signup.php" method="post" class="input-group">
          <input type="text" name="name" class="input-field" placeholder="User Id" required>

          <input type="email" name="email" class="input-field" placeholder="Email Id" required>

          <input type="password" name="password" 
          class="input-field" placeholder="Enter Password" required>

          <input type="checkbox" class="check-box"><span> I agree to all terms and conditions</span>

          <button type="submit" class="submit-btn"> Sign up</button>
      </form>
    </div>
    

  </div>








<script>
var x =document.getElementById("login");
var y =document.getElementById("signin");
var z =document.getElementById("btn");

function signin(){
    x.style.left = "-400px";
    y.style.left = "50px";
    z.style.left = "110px";
  }
  function login(){
    x.style.left = "50px";
    y.style.left = "450px";
    z.style.left = "0px";
  }
</script>

<script>



// localStorage.setItem("name", JSON.stringify(name));
// console.log(name);





</script>



</body>


</html>

