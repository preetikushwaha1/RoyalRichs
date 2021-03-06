<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<main>

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <ol>
          <li><a href="<?php echo site_url('Main_controller/index');?>">Home</a></li>
          <li>Contact us</li>
        </ol>
        <h2>Contact us</h2>

      </div>
    </section><!-- End Breadcrumbs -->

 <!-- ======= Contact Section ======= -->
 <section id="contact" class="contact">
      <div class="container">

        <div class="section-title">
          <span>Contact us </span>
          <h2>Contact us</h2>
      
        </div>

         <div class="container">

        <div class="row">
          <div class="col-lg-12 order-1 order-lg-2" data-aos="fade-down">
            <img src="<?php echo base_url('assets/img/contact_us.png');?>" class="img-fluid" alt="" style="width:1000px; height:400px">
          </div>
         </div><br>


          <div class="row" data-aos="fade-left">
          <div class="col-lg-12">
            <div class="info-box mb-4">
             
              <h3>Timing (Mon-Sat , 10 am to 7 pm)</h3>
              <p>Get in touch and we’ll get back to you as soon as we can.  We look forward to hearing from you!</p>
            </div>
          </div>
        </div>


        <div class="row" data-aos="fade-up" style="float:right">
          <!--div class="col-lg-6">
            <div class="info-box mb-4">
              <i class="bx bx-map"></i>
              <h3>Our Address</h3>
              <p>A108 Adam Street, New York, NY 535022</p>
            </div>
          </div-->

          <div class="col-lg-12 col-md-6">
            <div class="info-box  mb-6">
              <i class="bx bx-envelope"></i>
              <h3>Email Us</h3>
              <p> info@royalrichs.com </p>
            </div>
          </div><br>

          <div class="col-lg-12 col-md-6">
            <div class="info-box  mb-6">
              <i class="bx bx-phone-call"></i>
              <h3>Call Us</h3>
              <p>+91 7020009117</p>
            </div>
          </div>

        </div>

   

          <!--div class="col-lg-6 ">
            <iframe class="mb-4 mb-lg-0" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" style="border:0; width: 100%; height: 384px;" allowfullscreen></iframe>
          </div-->


          <div class="col-lg-8">
            <div class="info-box mb-6 ">


          <div class="col-lg-12" data-aos="zoom-in">
     
            <form action="<?php echo site_url('Main_controller/Contact_us_save_controller');?>" method="post" >

               <?php if($this->session->flashdata('success')){?>
                  <div class="alert alert-success" role="alert">
                    <p><?php echo $this->session->flashdata('success');?></p>
                  </div>
                  <?php }?>
              <div class="form-row">
                <div class="col-lg-6 col-md-6 form-group">
                  <input type="text" name="name" class="input100" id="name" name="name" placeholder="Your Name" required/>
                 
                </div>
                <div class="col-md-6  col-md-6 form-group">
                  <input type="email" class=" input100" name="email" id="email" name="email" placeholder="Your Email" required />
                 
                </div>
              </div>
              <div class="form-group">
                <input type="text" class=" input100" name="subject" id="subject" name="subject" placeholder="Subject" required  />
               
              </div>
              <div class="form-group">
                <textarea class=" input100" name="message" id="message"  rows="5" placeholder="Message" required></textarea>
          
              </div>
                

              <button type="submit" name="btn_message" id="btn_message" class="btn-primary" style="height:50px;width:150px">Send Message
              </button><br>

              <span id="error_message" class="text-danger"></span>
              <span id="success_message" class="text-success"></span>
            </form>
          </div>
        </div>
      </div><br>

          <div class="col-lg-4 col-md-6 footer-newsletter">
            <p style="font-size:16px">Whatsapp:
            <a href="https://api.whatsapp.com/send?phone=+917020009117" title="Whatspp" target="_blank" rel="noopener noreferrer">
            <img src="https://royalrichs.com/wp-content/uploads/2020/05/whatsapp.png" style="width:30px;vertical-align:middle;"><b>7020009117</b></a></p>
            <!--form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form-->

          
          <div class="contact-info mr-auto">
            <p style="font-size:16px">Email: 
            <i class="icofont-envelope"></i> <a href="mailto:info@royalrichs.com"><span style="color:black">info@royalrichs.com</span></a></p>
        </div>

          <div class="contact-info mr-auto">
            <p style="font-size:16px">Branches: 1. Nagpur &nbsp; &nbsp;2. Delhi/Noida </p>
         
          </div>
        </div>
      </div>
    </div>

      </div>
    </section><!-- End Contact Section -->


