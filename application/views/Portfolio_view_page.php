<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<style type="text/css">
    .Approach {
  padding-top: 0;
}

.Approach .box {
  padding: 50px 30px;
  box-shadow: 0px 10px 15px rgba(0, 0, 0, 0.1);
  transition: all ease-in-out 0.3s;
}

.Approach .box span {
  display: block;
  font-size: 28px;
  font-weight: 700;
  color: #ed5b5b;
}

.Approach .box h4 {
  font-size: 24px;
  font-weight: 600;
  padding: 0;
  margin: 20px 0;
  color: #191919;
}

.Approach .box p {
  color: black;
  font-size: 15px;
  margin: 0;
  padding: 0;
}

.Approach .box:hover {
  background: #cc1616;
  padding: 30px 30px 70px 30px;
  box-shadow: 10px 15px 30px rgba(0, 0, 0, 0.18);
}

.Approach .box:hover span, .Approach .box:hover h4, .Approach .box:hover p {
  color: #fff;
}

.button {
  background-color: #004A7F;
  -webkit-border-radius: 10px;
  border-radius: 10px;
  border: none;
  color: #FFFFFF;
  cursor: pointer;
  display: inline-block;
  font-family: Arial;
  font-size: 20px;
  padding: 5px 10px;
  text-align: center;
  text-decoration: none;
  -webkit-animation: glowing 1500ms infinite;
  -moz-animation: glowing 1500ms infinite;
  -o-animation: glowing 1500ms infinite;
  animation: glowing 1500ms infinite;
}
@-webkit-keyframes glowing {
  0% { background-color: #B20000; -webkit-box-shadow: 0 0 3px #B20000; }
  50% { background-color: #FF0000; -webkit-box-shadow: 0 0 40px #FF0000; }
  100% { background-color: #B20000; -webkit-box-shadow: 0 0 3px #B20000; }
}

@-moz-keyframes glowing {
  0% { background-color: #B20000; -moz-box-shadow: 0 0 3px #B20000; }
  50% { background-color: #FF0000; -moz-box-shadow: 0 0 40px #FF0000; }
  100% { background-color: #B20000; -moz-box-shadow: 0 0 3px #B20000; }
}

@-o-keyframes glowing {
  0% { background-color: #B20000; box-shadow: 0 0 3px #B20000; }
  50% { background-color: #FF0000; box-shadow: 0 0 40px #FF0000; }
  100% { background-color: #B20000; box-shadow: 0 0 3px #B20000; }
}

@keyframes glowing {
  0% { background-color: #B20000; box-shadow: 0 0 3px #B20000; }
  50% { background-color: #FF0000; box-shadow: 0 0 40px #FF0000; }
  100% { background-color: #B20000; box-shadow: 0 0 3px #B20000; }
}
</style>
<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <ol>
          <li><a href="<?php echo site_url('Main_controller/index');?>">Home</a></li>
          <li>Portfolio</li>
        </ol>
        <h2>Portfolio</h2>

      </div>
    </section><!-- End Breadcrumbs -->


      <section id="portfolio" class="portfolio">
      <div class="container">

        <div class="row" data-aos="fade-up">
          <div class="col-lg-12 d-flex justify-content-center">
	            <ul id="portfolio-flters">
	            </ul>
          </div>
        </div>

        <div class="row portfolio-container" data-aos="zoom-in" data-aos-delay="150">

          <div class="col-lg-8 col-md-6 portfolio-item filter-card">
            <img src="<?php echo base_url('assets/img/portfolio/slide1.png');?>" class="img-fluid" alt="" style="height:350px;width:800px">
            <div class="portfolio-info">
              <h4>Profit Sharing Ats System</h4>
              <p>Profit Sharing Ats System</p>
              <a href="<?php echo base_url('assets/img/portfolio/slide1.png');?>" data-gall="portfolioGallery" class="preview-link " title="Profit Sharing Ats System"><i class="bx bx-plus"></i></a>
            </div>
          </div>
         </div>


         <div class="section-title">
          <span>Business with us: profit-sharing club</span>
          <h2>Business with us: profit-sharing club</h2>
        </div>


          <div class="col-lg-12" data-aos="fade-up">
              <div class="box">
                <span><b><h5>Welcome in the world of FINANCIALLY FREEDOM</h5></b></span><br>
              <div class="col-lg-12 mt-4 mt-lg-0 order-1 order-lg-2" data-aos="fade-left" data-aos-delay="200">
                <p style="color:red">Account Ticket Size 2 lakh++ AliceBlueOnline/Profit Mart  Only.</p>
             	<p>Registration Fee: <span style="color:#FF4500">2999/-(One time Only– Deductible fee ).<br></span></p>
             	<p>Instruments: <span style="color:#FF4500">Nifty, Banknifty, Reliance, Suntv, Maruti, Hdfc/Hdfc Bank few more & Crude oil.</span></p>
             	<p>Minimum Balance: <span style="color:#FF4500">2 lakh+ rs(For NIFTY/BANK NIFTY fut) For Equity Future/index (BNF 2 OF MULTIPLE LACS) or 1 lac rs for Crude oil.</span><br>
             	Instrument Equity Futures or Crude oil Futures (Positional-Swing) Only Performance-based Profit-Sharing fee.</p><br>

             	<p style="color:green">Joining Fee =2999/-</p><br>
             	<p>100% Deductible fee of Rs.2999 only is taken as fee to start your service. This refundable fee is only for checking genuineness of the member. As mentioned
             	there are no advanced fees but only profit sharing of 30% only. (More on call-Business with US)</p></div>
            </div> 
          </div><br>

          <div class="col-lg-12 mt-4 mt-lg-0 order-1 order-lg-2" data-aos="zoom-in" data-aos-delay="200">
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <button type="submit" class="button">Join Now</button></div><br>

			<div class="col-lg-12 mt-4 mt-lg-0 order-1 order-lg-2" data-aos="fade-up" data-aos-delay="200">
			 <p>20% profit sharing fee on NET PROFITS Only.<br>
			 Profit Sharing amount is calculated Net Profits only; that is any losses made are deducted from profits before arriving at net profits.<br><br>
			Reporting by WhatsApp Only/mail/sms as NSE/Stock Broker will update.<br>
			Every day, daily net and total position details will be sent to you by WhatsApp/mails.<br>
			The holding duration of Positional Trades will depend on trend/at times intra as well.</p></div></p><br>

	  
         <div class="col-lg-12 mt-4 mt-lg-0 order-1 order-lg-2" data-aos="fade-right" data-aos-delay="200">
        <h5> Payment of our Share of Profit/Performance based fee.</h5><br>
  
              <p>1. The member is required to deposit our share of profit next day after 1 months/quarter as per profit in order to continue his service.</p>
              <p>2. Trading Calls method will INTRA DAY or POSITIONAL.</p>
              <p>3. All trades will be put in terminal with Clear Entry and Trailing Stop loss.</p>
              <p>4. Equity F&O: 1 Lots (MINIMUM) OR in cash equity </p>
              <p>5. Crude oil fut.: 5 mini lots(MINIMUM) OR mega 1 lot </p>
        </div>
        <br>

         <div class="col-lg-12 mt-4 mt-lg-0 order-1 order-lg-2" data-aos="fade-left" data-aos-delay="200">
        <h5> BENEFITS OF PROFIT-SHARING CLUB</h5><br>
  
              <p>1. You will be added in a group of professional traders, it will help you to maintain your psychology. We all trade in a same setup like a family & we all are making money.</p>
              <p>2. No fixed fee & No fixed returns.</p>
              <p>3. Earn first then pay Next.</p>
              <p>4. Individual attention through personal what’s app number/mails. </p>
        </div><br>
     

       <section id="Approach" class="Approach">
      <div class="container">
        <div class="row">
	  <div class="col-lg-12" data-aos="fade-up">
              <div class="box">
                <span>Disclaimer</span>
              <div class="col-lg-12 mt-4 mt-lg-0 order-1 order-lg-2" data-aos="fade-right" data-aos-delay="200">
                 <p style="font-style: italic;">Trading is risky nothing here for as fixed returns we are trying with lot of afford to make good accuracy for good returns, for good health-wealth and making equity/derivatives/commodity etc trades/investments. As per historical data analysis as of now good accuracy. The impact of seasonal and geographitical events is already factored into market price. Trading club neither guarantees nor makes any representations or warranties, express or implied, with respect to all fairness, correctness, accuracy, adequacy, reasonableness, viability for any particular purpose or completeness of the information and opinions. Our value are Honesty,Transparacy,Customer satisfaction, Financial wealth & we Strong believe in our Tag line – Royal Richs –BE FINANCIAL FREEDOM..</p>
          </div>
    	  </div>
  		</div>
		</div>
	</div>

	</section>

	     <div class="section-title">
          <span>BE CROREPATI @ RETIREMENT & MONTHLY INCOME</span>
          <h2>BE CROREPATI @ RETIREMENT & MONTHLY INCOME</h2>
        </div>

		<div class="portfolio-details-container">
          <div class="col-lg-12 col-md-6" data-aos="zoom-in" data-aos-delay="150">
            <img src="<?php echo base_url('assets/img/portfolio/Mutual_funds.png');?>"  class="img-fluid" alt="" style="height:350px;width:800px">
            <br>
         </div><br>


     <section id="Approach" class="Approach">
      <div class="container">
        <div class="row">
	  <div class="col-lg-4" data-aos="fade-up">
              <div class="box">
               <a href=" "> <span>Contact us</span></a>
          </div>
    	  </div>
  		</div>
		</div>
	</section>




          <div class="col-lg-12" data-aos="fade-up">
              <div class="box">
                <span><b><h6>For investments ,retirement and monthly income details …</h6></b></span><br>
              <div class="col-lg-12 mt-4 mt-lg-0 order-1 order-lg-2" data-aos="fade-left" data-aos-delay="200">
                <p>1. Invest 21000 ONCE and get 3 crores after … years @ retirement.</p>
             	<p>2. This investment can gift @ birth of anyone or 1st salary …</p>
             	<p>3. Do SIP for few years and make life SUHAANA SAFAR!!. </p>
             	<p>4. Even monthly returns as MIP services is here.</p><br>

             </div>
            </div> 
          </div><br>



	     <div class="section-title">
          <span>Term Plan is madatory for every body</span>
          <h2>Term Plan is madatory for every body</h2>
        </div>


		<div class="portfolio-details-container">
          <div class="col-lg-12 col-md-6" data-aos="zoom-in" data-aos-delay="150">
            <img src="<?php echo base_url('assets/img/portfolio/insurance.png');?>"  class="img-fluid" alt="" style="height:350px;width:800px">
            <br>
         </div><br>

          <div class="col-lg-12" data-aos="fade-up">
              <div class="box">
                <span style="color:green"><b><h6>We also deals in INSURANCE but mainly for TERM PLAN only.</h6></b></span><br>
              <div class="col-lg-12 mt-4 mt-lg-0 order-1 order-lg-2" data-aos="fade-left" data-aos-delay="200">
                <p>1. Invest 21000 ONCE and get 3 crores after … years @ retirement.</p>
             	<p>2. This investment can gift @ birth of anyone or 1st salary …</p>
             	<p>3. Do SIP for few years and make life SUHAANA SAFAR!!. </p>
             	<p>4. Even monthly returns as MIP services is here.</p><br>

             </div>
            </div> 
          </div><br>


           <h4><b>What is Term Life Insurance?</b></h4><br>
          <div class="col-lg-12 mt-4 mt-lg-0 order-1 order-lg-2" data-aos="fade-up" data-aos-delay="250">
       		<p>Term Life insurance is the purest and most cost effective form of life insurance. This type of life insurance provides financial protection to the nominee in case policyholder dies during policy term. Term Insurance policies provide high life cover at lower premiums. For eg: Premium for `1 Cr Term Insurance cover could be as low as 490** p.m. These fixed premiums can be paid at once or at regular intervals for the entire policy term or for a limited period of time. Premium amount varies basis the type of the premium payment method opted by the buyer.</p><br>


          <p><b>Why do you need Term Insurance?</b></p>

         <div class="col-lg-12 mt-4 mt-lg-0 order-1 order-lg-2" data-aos="fade-left" data-aos-delay="200">

           <p><b>1. Your family depends on you:</b>The term insurance money can be used to meet your family’s monthly expenses and important goals like your child’s education.</p>
        </div><br>

         <div class="col-lg-12 mt-4 mt-lg-0 order-1 order-lg-2" data-aos="fade-right" data-aos-delay="200">
           <p><b>2. Your assets need protection:</b>You may take loans for assets like a house or a car. However, if something happens to you, your loved ones might be burdened with loan repayments. In such a situation, the term insurance payout which your family will receive can be utilized in paying off outstanding loans.</p>
        </div><br>

        <div class="col-lg-12 mt-4 mt-lg-0 order-1 order-lg-2" data-aos="fade-left" data-aos-delay="200">
           <p><b>3. Lifestyle risks:</b>Modern day lifestyle problems can lead to a host of ailments. Some term insurance plans don’t just protect your family after death but also during your lifetime by offering critical illness  protection. This feature pays out on the diagnosis of certain critical ailments like cancer or heart attack.</p>
        </div><br>

        <p style="color:green">-  For more feel free Get in touch for FREE CONSULTATION and we’ll get back to you as soon as we can.</p>
    
      <div class="container">
        <div class="row">
          <div class="col-lg-6 col-md-6 d-flex align-items-stretch mt-lg-5" data-aos="zoom-in">
            <div class="icon-box">
              <img src="<?php echo base_url('assets/img/portfolio/Screenshot_4.png');?>" style="width:500px">
              Protect Earth-Loving Nature

            </div>
          </div>

          <div class="col-lg-6 col-md-6 d-flex align-items-stretch mt-4 mt-md-5" data-aos="zoom-in" data-aos-delay="150">
            <div class="icon-box">
               <img src="<?php echo base_url('assets/img/portfolio/caveri.jpg');?>" style="width:500px;  height:320px">
               Help Needy & Donate Trees
            </div>
          </div>
      </div>
 	 </div>


	</div>

	</section>
	

	 </div>
     </div>
</main>
