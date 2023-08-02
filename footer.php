<style>

.footer{
   background: url(images/footer-bg.jpg) no-repeat;
   background-size: cover;
   background-position: center;
}

.footer .box-container{
   display: grid;
   grid-template-columns: repeat(auto-fit, minmax(25rem, 1fr));
   gap: 3rem;
}

.footer .box-container .box h3{
   color:var(--white);
   font-size: 3.5rem;
   padding-bottom: 2rem;
}

.footer .box-container .box a{
   color:var(--light-white);
   font-size: 1.5rem;
   padding-bottom: 1.5rem;
   display: block;
}

.footer .box-container .box a i{
   color:var(--main-color);
   padding-right: .5rem;
   transition: .2s linear;
}

.footer .box-container .box a:hover i{
   padding-right: 2rem;
}

.footer .credit{
   text-align: center;
   padding-top: 3rem;
   margin-top: 3rem;
   border-top: .1rem solid var(--light-white);
   font-size: 2rem;
   color:var(--white);
}

.footer .credit span{
   color:var(--main-color);
}

@media(max-width:475px){
   .footer .box-container {
    margin: 12px;
    flex-flow: wrap;
    display: inline-flex;
    column-gap: 43px;
   }
   .footer .box-container .box a {
    font-size: 2rem;
   }
   .footer .box-container .box h3 {
    font-size: 3.5rem;
   
   }
}



</style>
<section class="footer">

   <div class="box-container">

      <div class="box">
         <h3>quick links</h3>
         <a href="home.php"> <i class="fas fa-angle-right"></i> home</a>
         <a href="about.php"> <i class="fas fa-angle-right"></i> about</a>
         <a href="Achievements.php"> <i class="fas fa-angle-right"></i> Achievements</a>
         <a href="AU Academy.php"> <i class="fas fa-angle-right"></i> AU Academy</a>
      </div>

      <div class="box">
         <h3>extra links</h3>
         <a href="#"> <i class="fas fa-angle-right"></i> ask questions</a>
         <a href="#"> <i class="fas fa-angle-right"></i> about us</a>
         <a href="#"> <i class="fas fa-angle-right"></i> privacy policy</a>
         <a href="#"> <i class="fas fa-angle-right"></i> terms of use</a>
      </div>

      <div class="box">
         <h3>contact info</h3>
         <a href="#"> <i class="fas fa-phone"></i> 9075743554 </a>
         <a href="#"> <i class="fas fa-phone"></i> +111-222-3333 </a>
         <a href="#"> <i class="fas fa-envelope"></i> jayash007@gmail.com </a>
         <a href="#"> <i class="fas fa-map"></i> Mumbai, India - 400104 </a>
      </div>

      <div class="box">
         <h3>follow us</h3>
         <a href="#"> <i class="fab fa-facebook-f"></i> facebook </a>
         <a href="#"> <i class="fab fa-twitter"></i> twitter </a>
         <a href="https://instagram.com/jayash_sawant?igshid=ZDdkNTZiNTM="> <i class="fab fa-instagram"></i> instagram </a>
         <a href="#"> <i class="fab fa-linkedin"></i> linkedin </a>
      </div>

   </div>

   <div class="credit"> created by <span>MR. JAYASH SAWANT</span>  </div>

</section>