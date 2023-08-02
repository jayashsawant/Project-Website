
<style>
   .heading{
   background-size: cover !important;
   background-position: center !important;
   padding-top: 15rem;
   padding-bottom:55rem;
   display: flex;
   align-items: center;
   justify-content: center;
}
.heading h1{
   font-size: 6rem;
   text-transform: uppercase;
   color:var(--black);
   text-shadow: var(--text-shadow);
}
.btn{
   display: inline-block;
   background:rgb(0 0 0 / 81%);
   margin-top: 1rem;
   color:var(--white);
   font-size: 1.7rem;
   padding:1rem 3rem;
   cursor: pointer;
   border-radius: 10px;
   text-transform: uppercase;
}
.btn:hover{
   background: var(--main-color);
}
.heading-title{
   text-align: center;
   margin-bottom: 3rem;
   font-size: 6rem;
   text-transform: uppercase;
   color:var(--black);
}
.header{
   position: sticky;
   top:0; left:0; right:0;
   z-index: 1000;
   background-color: #2563f3;
   display: flex;
   padding-top: 0.3rem;
   padding-bottom: 0.3rem;
   box-shadow: var(--box-shadow);
   align-items: center;
   justify-content: space-between;
   padding-left: 5px;
   padding-right: 10px;
}
.logo {
   width: 75px;
   height: 75px;
   margin-left: 15px;
}
.logo img{
   width: 100%;
   height: 100%;
   border: 2px;
   border-radius: 50px;
}
#menu-btn{
   font-size: 2.5rem;
   cursor: pointer;
   color:var(--black);
   display: none;
}
.logomain{
   text-shadow: 4px 2px 3px black;
   font-size: 35px;
   color: rgb(255, 255, 255);
   text-align: center;
}
.header .navbar a{
   font-size: 25px;
   margin-left: 1.0rem;
   margin-right: 2.0rem;
   text-transform: uppercase;
   color: #fcfcfc;
}
.header .navbar a:hover{
   color:var(--main-color);
}

@media (max-width:768px){

   .logomain{
      font-size: 25px;
   }
   .logo {
    width: 55px;
    height: 55px;
    margin-left: 10px;
}
   .heading h1{
      font-size: 4rem;
   }
   #menu-btn{
      font-size: 25px;
      display: inline-block;
      transition: .2s linear;
   }
   #menu-btn.fa-times{
      transform: rotate(180deg);
   }
   .header .navbar{
      position: absolute;
      top:99%; 
      left:0; 
      right:0;
      background-color: var(--white);
      border-top: var(--border);
      padding:2rem;
      transition: .2s linear;
      clip-path: polygon(0 0, 100% 0, 100% 0, 0 0);
   }
   .header .navbar.active{
      clip-path: polygon(0 0, 100% 0, 100% 100%, 0 100%);
      background: #000000a8;
   }
   .header .navbar a{
      color:white;
      display: block;
      margin:2rem;
      text-align: center;
   }

}
@media (min-width:770px) and (max-width: 1200px)  {
   
   html{
      font-size: 60%;
   }
   .heading-title{
      font-size: 4rem;
   }  
   .logo{
      width: 62px;
      height: 60px;
      margin-left: 5px;
   }   
   .logo img{
      width: 100%;
      height: 100%;
   }   
   .logomain{
      font-size: 30px;
   }   
   .heading{
      width: 100%;
      height: 20vh;
   }
   .header .navbar a{
      display:inline-flex;
      margin:1.2rem;
      text-align: center;
      font-size: 15px;
      margin-left: 0.5rem;
      margin-right: 1rem;
      text-transform: uppercase;
      color: #fcfcfc;
   }  
}

@media (max-width:450px){ 
   html{
      font-size: 50%;
   }
   .heading-title{
      font-size: 3.5rem;
   }   
   .logo{
      width: 35px;
      height: 35px;
      margin-left: 5px;
   }   
   .logo img{
      width: 100%;
      height: 100%;
   }   
   .logomain{
      font-size: 15px;
   }   
   .heading{
      width: 100%;
      height: 25vh;
   }
   #menu-btn {
    font-size: 18px;
   }
   .header .navbar a {
      margin: 1rem;
      font-size: 15px;
   }
}

</style>



<section class="header">

   <div class="logo"><img src="images/logo1.jpeg" alt="logo"></div>
   <a href="home.php" class="logomain">AMBERNATH UNITED FC</a>

   <nav class="navbar">
      <a href="home.php">home</a>
      <a href="about.php">about</a>
      <a href="Achievements.php">Achievements</a>
      <a href="AU Academy.php">AU Academy</a>
       
   </nav>
   

   <div id="menu-btn" class="fas fa-bars"></div>

</section>