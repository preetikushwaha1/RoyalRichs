<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<style type="text/css">
  .close
  {
    position:absolute;
    top:15px;
    right:35px;
    color:#f1f1f1;
    font-size:40px;
    font-weight:bold;
    transition: 0.3s;

  }

  .close:hover, .close:focus
  {
    color:#bbb;
    text-decoration:none;
    cursor:pointer;
  }


  #hero1 {
  width: 100%;
  height: 90vh;
  background: url("<?php echo base_url('assets/img/bg2.png');?>") top center;
  background-size: cover;
  position: relative;
}

#hero1:before {
  content: "";
  background: rgba(f, f, f, 0.5);
  position: absolute;
  bottom: 0;
  top: 0;
  left: 0;
  right: 0;
}

#hero1 .container {
  padding-top: 70px;
}

#hero1 h1 {
  margin: 0 0 10px 0;
  font-size: 80px;
  font-weight: 700;
  line-height: 56px;
  text-transform: uppercase;
  color: #fff;
}

#hero1 h2 {
  color: #eee;
  margin-bottom: 30px;
  font-size: 24px;
}

#hero1 .btn-get-started {
  font-family: "Raleway", sans-serif;
  text-transform: uppercase;
  font-weight: 500;
  font-size: 14px;
  letter-spacing: 0.5px;
  display: inline-block;
  padding: 10px 28px;
  transition: 0.5s;
  border: 2px solid black;
  color: black;
}

#hero1 .btn-get-started:hover {
  background: #cc1616;
  border-color: #cc1616;
}

@media (min-width: 1024px) {
  #hero1 {
    background-attachment: fixed;
  }
}

@media (max-width: 768px) {
  #hero1 {
    text-align: center;
  }
  #hero1 .container {
    padding-top: 40px;
  }
  #hero1 h1 {
    font-size: 80px;
    line-height: 36px;
  }
  #hero1 h2 {
    font-size: 18px;
    line-height: 24px;
    margin-bottom: 30px;
  }
}

</style>


 <!-- ======= Hero Section ======= -->
  <section id="hero1" class="d-flex align-items-center">

    <div class="container position-relative" data-aos="fade-up" data-aos-delay="500">
      <h1 style="color: black"><b>RoyalRichs</b></h1>
      <h2  style="color: black"><b>Welcome In The World Of FINANCIALLY FREEDOM Account...</b></h2>
      <a href="#services" class="btn-get-started scrollto"><b>Get Started</b></a>
    </div>

     <div class="owl-carousel portfolio-details-carousel col-lg-6">
            <img src="<?php echo base_url('assets/img/stock.png');?>" class="img-fluid" alt="" 
            style="height:380px;width:800px">
            <img src="<?php echo base_url('assets/img/robot.png');?>" class="img-fluid" alt=""
            style="height:380px;width:800px">
            <img src="<?php echo base_url('assets/img/Trading.png');?>" class="img-fluid" alt=""
            style="height:380px;width: 800px">
          </div>
  </section><!-- End Hero -->


  <main id="main">

      <!-- ======= Services Section ======= -->
    <section id="services" class="services">
      <div class="container">

        <div class="section-title">
          <span>Our Services</span>
          <h2>Our Services</h2>
          <p></p>
        </div>

        <div class="row">
          <div class="col-lg-6 col-md-6 d-flex align-items-stretch mt-lg-5" data-aos="fade-up">
            <div class="icon-box">
              <img src="<?php echo base_url('assets/img/laptop.jpg');?>" style="width:400px">
              <h4><a href=""><br>ALGO/ROBO/MT4</a></h4>
              <p>signal/vps/server trades</p><br>
    
              <button>  <a href="<?php echo site_url('Main_controller/Robo_controller');?>" class="cta-btn"style="color:black;">Read More</a></button>
          
            </div>
          </div>

          <div class="col-lg-6 col-md-6 d-flex align-items-stretch mt-4 mt-md-5" data-aos="fade-up" data-aos-delay="150">
            <div class="icon-box">
               <img src="<?php echo base_url('assets/img/Training_and_workshop.jpg');?>" style="width:400px">
              <h4><a href=""><br>TRAiNING & WORKSHOP</a></h4>
              <p>Online Courses</p><br>

                <button>  <a href="<?php echo site_url('Main_controller/Training_controller');?>" class="cta-btn"style="color:black;  ">Read More</a></button>
    
            </div>
          </div>

          <div class="col-lg-6 col-md-6 d-flex align-items-stretch mt-4 mt-lg-5" data-aos="fade-up" data-aos-delay="300">
            <div class="icon-box">
             <img src="<?php echo base_url('assets/img/university.png');?>" style="height:200px;width:400px">
              <h4><a href="">DEMATE A/C (ALICE BLUE)</a></h4>
              <p>(Alice Blue , Profit Mart, Zerodha & Nirmal Bang)</p><br>

                <button>  <a href="<?php echo site_url('Main_controller/Demate_controller');?>" class="cta-btn"style="color:black; ">Read More</a></button>
    
            </div>
          </div>

          <div class="col-lg-6 col-md-6 d-flex align-items-stretch mt-4 mt-lg-5" data-aos="fade-up" data-aos-delay="450">
            <div class="icon-box">
             <img src="<?php echo base_url('assets/img/donate.jpg');?>" style="height:160px;width:400px">
              <h4><a href=""><br>DONATE PLANTS & HELP NEEDY</a></h4>
              <p>Save Earth</p><br>

                <button>  <a href="<?php echo site_url('Main_controller/Donate_plants_controller');?>" class="cta-btn"style="color:black; ">Read More</a></button>
    
            </div>
          </div>

    </section><!-- End Services Section -->



    <!-- ======= Why us  Section ======= -->
    <section >
      <div class="container">

         <div class="section-title">
          <span>Why Us</span>
          <h2>Why US</h2>
          <p></p>
        </div>

        <div class="row">
          <div class="col-lg-5 order-1 order-lg-2" data-aos="fade-left">
            <img src="<?php echo base_url('assets/img/stock.png');?>" style="height:235px" class="img-fluid" alt="">
          </div>
      <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content" data-aos="fade-right">
         <section id="why-us" class="why-us">
            <div class="container">

              <div class="row">

                <div class="col-lg-10" data-aos="fade-up">
                  <div class="box">
                    <h4>Stock Live Updates</h4>
                    <p>It Is Possible To Make a Decent Living Doing Intraday Trading...?</p>
                     <p>
                    Yes It's Possible.!!!
                  </p>
                    <!--div class="text-center" style="float:right" ><button type="submit">Read More</button></div>
                  </div-->
                </div>
    
               </div>
            </div>

           </section>
         </div>
      </div>


      <div class="row">
          <div class="col-lg-5 order-1 order-lg-2" data-aos="fade-left">
            <img src="<?php echo base_url('assets/img/robot.png');?>" style="height:235px" class="img-fluid" alt="">
          </div>
      <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content" data-aos="fade-right">
         <section id="why-us" class="why-us">
            <div class="container">

              <div class="row">

                <div class="col-lg-10" data-aos="fade-up">
                  <div class="box">
                    <h4>Services</h4>
                    <p>Services –– Algo/Robo/mt4/signal/vps/server trades Featues:
                      <br>Real and paper trading  mode.</p>
                  
                    <!--div class="text-center" style="float:right" ><button type="submit">Read More</button></div>
                  </div-->
              </div>
    
            </div>
         </div>

       </section>
     </div>
</div>


    <div class="row">
          <div class="col-lg-5 order-1 order-lg-2" data-aos="fade-left">
            <img src="<?php echo base_url('assets/img/Trading.png');?>" style="height:235px" class="img-fluid" alt="">
          </div>
      <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content" data-aos="fade-right">
         <section id="why-us" class="why-us">
            <div class="container">

              <div class="row">

                <div class="col-lg-10" data-aos="fade-up">
                  <div class="box">
                    <h4>Trading Club</h4>
                    <p>Welcome in the world of Financially FREEDOM Account...</p>
                  
                    <!--div class="text-center" style="float:right" ><button type="submit">Read More</button></div>
                  </div-->
              </div>
    
            </div>
         </div>

       </section>
     </div>
</div>
    </section><!-- End Why us Section -->


   
    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
      <div class="container">

        <div class="section-title">
          <span>Our Portfolio</span>
          <h2>Our Portfolio</h2>
          <p></p>
        </div>

        <div class="row" data-aos="fade-up">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="portfolio-flters">
              <!--li data-filter="*" class="filter-active">All</li-->
              <!--li data-filter=".filter-app">App</li-->
              <!--li data-filter=".filter-card">Card</li-->
              <!--li data-filter=".filter-web">Web</li-->
            </ul>
          </div>
        </div>

        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="150">

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <img src="<?php echo base_url('assets/img/portfolio/slide1.png');?>" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Profit Sharing Ats System</h4>
              <p>Profit Sharing Ats System</p>
              <a href="<?php echo base_url('assets/img/portfolio/slide1.png');?>" data-gall="portfolioGallery" class="preview-link " title="Profit Sharing Ats System"><i class="bx bx-plus"></i></a>
              <a href="<?php echo site_url('Main_controller/Portfolio_view_page_controller');?>" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <img src="<?php echo base_url('assets/img/portfolio/Screenshot_4.png');?>" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>BE CROREPATI @ RETIREMENT & MONTHLY INCOME</h4>
              <p>BE CROREPATI @ RETIREMENT & <br>MONTHLY INCOME</p>
              <a href="<?php echo base_url('assets/img/portfolio/Screenshot_4.png');?>" data-gall="portfolioGallery" class="preview-link" title="BE CROREPATI @ RETIREMENT & MONTHLY INCOME"><i class="bx bx-plus"></i></a>
              <a href="<?php echo site_url('Main_controller/Portfolio_view_page_controller');?>" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <img src="<?php echo base_url('assets/img/portfolio/caveri.jpg');?>" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>PROTECT EARTH - <br>LOVING NATURE</h4>
              <p>PROTECT EARTH - LOVING NATURE</p>
              <a href="<?php echo base_url('assets/img/portfolio/caveri.jpg');?>" data-gall="portfolioGallery" class="preview-link" title="PROTECT EARTH- LOVING NATURE"><i class="bx bx-plus"></i></a>
              <a href="<?php echo site_url('Main_controller/Portfolio_view_page_controller');?>" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>


      </div>
    </section><!-- End Portfolio Section -->

    <!-- ======= Pricing Section ======= -->
    <section id="pricing" class="pricing">
      <div class="container">

        <div class="section-title">
          <span>TESTIMONIAL</span>
          <h2>TESTIMONIAL</h2>
          <p></p>
        </div>

        <div class="row">

          <div class="col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="150">
            <div class="box">
              <div class="col-lg-12 col-md-12 portfolio-item filter-card">
            <img src="<?php echo base_url('assets/img/Screenshot_211-342x231.png');?>" class="img-fluid" alt=""
             style="height:230px; width:300px">
            <div class="portfolio-info">
              <a href="<?php echo base_url('assets/img/Screenshot_211-342x231.png');?>" data-gall="portfolioGallery" class="preview-link" title="PROTECT EARTH- LOVING NATURE"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div> 
              
          
             
            </div>
          </div>

        <div class="col-lg-4 col-md-6 mt-4 mt-md-0" data-aos="zoom-in">
            <div class="box">
              <div class="col-lg-12 col-md-12 portfolio-item filter-card">
            <img src="<?php echo base_url('assets/img/Screenshot_35.png');?>" class="img-fluid" alt=""
             style="height:230px; width:300px">
            <div class="portfolio-info">
              <a href="<?php echo base_url('assets/img/Screenshot_35.png');?>" data-gall="portfolioGallery" class="preview-link" title="PROTECT EARTH- LOVING NATURE"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div> 
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mt-4 mt-lg-0" data-aos="zoom-in" data-aos-delay="150">
             <div class="box">
              <div class="col-lg-12 col-md-12 portfolio-item filter-card">
            <img src="<?php echo base_url('assets/img/Screenshot_34.png');?>" class="img-fluid" alt=""
             style="height:230px; width:300px">
            <div class="portfolio-info">
              <a href="<?php echo base_url('assets/img/Screenshot_34.png');?>" data-gall="portfolioGallery" class="preview-link" title="PROTECT EARTH- LOVING NATURE"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div> 
          </div>

        </div>

      </div>
    </section><!-- End Pricing Section -->


     <!-- ======= Cta Section ======= -->
    <section id="cta" class="cta">
      <div class="container" data-aos="zoom-in">

        <div class="text-left">
          <h3>BEST INVESTMENT PLAN EVER!... LET CREATE AN AWESOME TRADING COMMUNITY BY WORKING TOGETHER!</h3>
          <p> We use Price Action to trade in Equity and Derivative Markets and we believe in Money Management with Proper Risk Reward Ratio which is the key ingredient in our well tested optimal strategies that accommodate spending minimal time in monitoring. We conduct Webinars and one-to-one sessions to help and educate our clients.</p>
          <div style="float:right;"><a class="cta-btn" href="#" >Get Started Now</a></div>
        </div>

      </div>
    </section><!-- End Cta Section -->


  

  </main><!-- End #main -->