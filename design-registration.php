       <?php
         session_start();
         $allErrs = $nameErr = $emailErr = $contactnoErr = $cityErr = $typeOfSerrvicesErr = $allpostval = $allapproxbudget1 = $alltypeOfServices =  "" ;

         if(isset($_SESSION['errors'])){
           $allErrs = $_SESSION['errors'];
         }
         if(isset($_SESSION['postval'])){
           $allpostval =$_SESSION['postval'];
         }

         // if(isset($_SESSION['approxbudget1'])){
         //   $allapproxbudget1 =$_SESSION['approxbudget1'];
         // }

         if(isset($_SESSION['services'])){
           $alltypeOfServices =$_SESSION['services'];
         }

         if(isset($allpostval['enquirysource'])){
           $enquirysource=$allpostval['enquirysource'];

         }

         if (isset($allErrs['project'])) {
           $projectErr = $allErrs['project'];
         }

         if(isset($allErrs['name'])){
           $nameErr = $allErrs['name'];
         }

         if(isset($allErrs['email'])){
           $emailErr = $allErrs['email'];
         }
         if(isset($allErrs['contactno'])){
           $contactnoErr = $allErrs['contactno'];
         }
         if(isset($allErrs['city'])){
           $cityErr = $allErrs['city'];
         }
         // if(isset($allErrs['location'])){
         //   $locationErr = $allErrs['location'];
         // }

         // if(isset($allErrs['enquirysource'])){
         //   $enquirysourceErr = $allErrs['enquirysource'];
         // }
         if(isset($allErrs['services'])){
           $typeOfSerrvicesErr = $allErrs['services'];
         }?>

         <!DOCTYPE html>
         <html lang="en">

         <head>
           <meta charset=utf-8>
           <meta name="viewport" content="width=device-width, initial-scale=1.0">
           <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
           <title>Legal | Hat</title>
           <!-- Load Roboto font -->
           <!-- <link href='http://fonts.googleapis.com/css?family=Roboto:400,300,700&amp;subset=latin,latin-ext' rel='stylesheet' type='text/css'> -->
           <!-- Load css styles -->
           <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
           <!-- Bootstrap CSS -->
           <link rel="stylesheet" href="css1/bootstrap.min.css">
           <!-- custom CSS -->
           <!-- <link rel="stylesheet" type="text/css" href="css/bootstrap-responsive.css" /> -->
           <!-- <link rel="stylesheet" type="text/css" href="css/style.css" /> -->

           <link rel="stylesheet" href="./form/style.css">

           <!-- awesone fonts css-->
           <link href="css1/font-awesome.css" rel="stylesheet" type="text/css">
           <!-- owl carousel css-->
           <link rel="stylesheet" href="owl-carousel/assets/owl.carousel.min.css" type="text/css">
           <!-- Bootstrap CSS -->

           <!-- custom CSS -->
           <link rel="stylesheet" href="css1/style.css">
         
           <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"/>

           <link rel="stylesheet" href="owl-carousel/assets/owl.carousel.min.css" type="text/css">
           <!-- <link rel="stylesheet" type="text/css" href="css/pluton.css" /> -->
           <!-- [if IE 7]> -->
           <!-- <link rel="stylesheet" type="text/css" href="css/pluton-ie7.css" /> -->
           <!-- <![endif]--> 
             <link rel="stylesheet" type="text/css" href="css/jquery.cslider.css" />
             <link rel="stylesheet" type="text/css" href="css/jquery.bxslider.css" />
             <link rel="stylesheet" type="text/css" href="css/animate.css" />
             <!-- Fav and touch icons -->

             <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

             <link rel="shortcut icon" href="images/ico/favicon.ico">


            
           </head>


           <body>



             <header id="header" >
                    
                <div class="container">
                    
                     <nav class="navbar navbar-expand-lg navbar-light ">
                       <a class="navbar-brand" href="#"><img src="images/logo.png"width="170"height="50" alt=""></a>
                       <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                         <span class="navbar-toggler-icon"></span>
                       </button>

                       <div class="collapse navbar-collapse" id="navbarSupportedContent">
                         <ul class="navbar-nav ml-lg-auto">
                           <li class="nav-item ">
                             <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                           </li>
                           <li class="nav-item">
                             <a class="nav-link" href="#">About Us</a>
                           </li>
                           <li class="nav-item dropdown">
                             <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                               Services
                             </a>
                             <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                               <a class="dropdown-item" href="#">IPR Services</a>
                               <!-- <a class="dropdown-item" href="#">Private Limited Company</a> -->
                               <div class="dropdown-divider"></div>
                               <a class="dropdown-item" href="#">Compony Formantion</a>
                               <div class="dropdown-divider"></div>
                               <a class="dropdown-item" href="#">Iso Registration</a>
                               <div class="dropdown-divider"></div>
                               <a class="dropdown-item" href="#">Food License</a>
                               <div class="dropdown-divider"></div>
                               <a class="dropdown-item" href="#">GST registration</a>
                               <div class="dropdown-divider"></div>
                               <a class="dropdown-item" href="#">Make in india Certificattion</a>
                               <div class="dropdown-divider"></div>
                               <a class="dropdown-item" href="#">Other Registraion</a>
                             </div>
                           </li>
                           <li class="nav-item dropdown">
                             <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                               Registration
                             </a>
                             <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                               <a class="dropdown-item" href="#">Private Limited Company</a>
                               <!-- <a class="dropdown-item" href="#">Private Limited Company</a> -->
                               <div class="dropdown-divider"></div>
                               <a class="dropdown-item" href="#">LIMITED LIABILITY PARTNERSHIP</a>
                             </div>
                           </li>
                           <li class="nav-item">
                             <a class="nav-link " href="#">Contact Us</a>
                           </li>
                         </ul>
                         
                       </div>
                     </nav>


                </div>   

               </header>


         <!-- Start home section -->
         <div id="home">
           <!-- Start cSlider -->
           <div id="da-slider" class="da-slider">
             <!-- <div class="triangle"></div> -->
             <!-- mask elemet use for masking background image -->
             <div class="mask"></div>
             <!-- All slides centred in container element -->
             <div class="container">
               <!-- Start first slide -->
               <div class="da-slide">
                 <h2 class="fittext2">Trademark</h2>
                 <!-- <h4>Trademark</h4> -->
                 <p>A trademark, trade mark, or trade-mark is a distinctive 
                   sign or indicator used by an individual, business 
                   organization, or other legal entity to identify that the 
                   products or services to consumers with which the 
                   trademark appears originate from a unique source, 
                   designated for a specific market, and is used to 
                   distinguish its products or services from those of other 
                 entities.</p>
                 <a href="#" class="da-link button">Read more</a>
                 <div class="da-img">
                  <!-- <a href="https://icons8.com/illustrations/author/JTmm71Rqvb2T">Dani Grapevine</a> from <a href="https://icons8.com/illustrations">Ouch!</a> -->
                  <img src="images/3d.png" alt="image01">
                </div>
              </div> 
              <!-- End first slide -->
              <!-- Start second slide -->
              <div class="da-slide">
               <h2>Copyright</h2>
               <!-- <h4>Copyright</h4> -->
               <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
               <a href="#" class="da-link button">Read more</a>
               <div class="da-img">
                 <img src="images/anime.gif" width="320" alt="image02">
               </div>
             </div>
             <!-- End second slide -->
             <!-- Start third slide -->
             <div class="da-slide">
               <h2>Patent Registration</h2>
               <!-- <h4>Patent</h4> -->
               <p>Patent is a major part of Intellectual Property which grants its' 
                 inventor, the right of exploiting its object exclusively, during a 
               given time period.</p>
               <a href="#" class="da-link button">Read more</a>
               <div class="da-img">
                 <img src="images/patent.gif" width="320" alt="image03">
               </div>
             </div>
             <div class="da-slide">
               <h2>Company Formation</h2>
               <!-- <h4>Company Formation</h4> -->
               <p>Company formation is the term for the process of incorporation 
                 of a business. It is also sometimes referred to as 
                 company registration. Under company law and most 
                 international law a company or corporation is considered to be 
                 an entity that is separate from the people who own or operate 
               the company.</p>
               <a href="#" class="da-link button">Read more</a>
               <div class="da-img">
                 <img src="images/Compani.png" width="320" alt="image03">
               </div>
             </div>
             <div class="da-slide">
               <h2>ISO</h2>
               <!-- <h4>ISO</h4> -->
               <p>ISO's work makes a positive difference to the world we live in. 
                 ISO standards add value to all types of business operations. 
                 They contribute to making the development, manufacturing 
                 and supply of products and services more efficient, safer 
                 and cleaner. They make trade between countries easier and 
                 fairer. ISO standards also serve to safeguard consumers and 
                 users of products and services in general - as well as making 
               their lives simpler.</p>
               <a href="#" class="da-link button">Read more</a>
               <div class="da-img">
                 <img src="images/iso.png" width="320" alt="image03">
               </div>
             </div>
             <div class="da-slide">
               <h2>Website Design</h2>
               <!-- <h4>Website Design</h4> -->
               <p>A Web service is a method of communication between two 
                 electronic devices over the Web. It includes website 
                 development and various online services required for 
               set up of a enterpreneurship.</p>
               <a href="#" class="da-link button">Read more</a>
               <div class="da-img">
                 <img src="images/Web.png" width="320" alt="image03">
               </div>
             </div>
             <!-- Start third slide -->
             <!-- Start cSlide navigation arrows -->
             <div class="da-arrows">
               <span class="da-arrows-prev"></span>
               <span class="da-arrows-next"></span>
             </div>
             <!-- End cSlide navigation arrows -->
           </div>
         </div>
       </div>
       <!-- End home section -->
       <!-- Service section start -->

       <div class="container">                  
       <nav aria-label="breadcrumb">
         <ol class="breadcrumb">
           <li class="breadcrumb-item"><a href="#">Home</a></li>
           <!-- <li class="breadcrumb-item"><a href="#">Design Registration</a></li> -->
           <li class="breadcrumb-item active" aria-current="page">Design Registration</li>
         </ol>
       </nav>
        </div>

 <section class="design-process-section" id="process-tab">
   <div class="container">
     <div >
       <div class="col-lg-12 col-sm-6"> 
       
         <ul class="nav nav-tabs process-model more-icon-preocess" role="tablist">
           <li role="presentation" class="active"><a href="#discover" aria-controls="discover" role="tab" data-toggle="tab" data-target="#discove"><i class="fa fa-search" aria-hidden="true"></i>
             <p>Discover</p>
         </a></li>
         <li role="presentation"><a href="#strategy" aria-controls="strategy" role="tab" data-toggle="tab" data-target="#Strateg"><i class="fa fa-send-o" aria-hidden="true"></i>
             <p>Strategy</p>
         </a></li>
         <li role="presentation"><a href="#optimization" aria-controls="optimization" role="tab" data-toggle="tab" data-target="#optimizatio"><i class="fa fa-qrcode" aria-hidden="true"></i>
             <p>Optimization</p>
         </a></li>
         <li role="presentation"><a href="#content" aria-controls="content" role="tab" data-toggle="tab" data-target="#conten"><i class="fa fa-newspaper-o" aria-hidden="true"></i>
             <p>Content</p>
         </a></li>
         <li role="presentation"><a href="#reporting" aria-controls="reporting" role="tab" data-toggle="tab"data-target="#reportin"><i class="fa fa-clipboard" aria-hidden="true"></i>
             <p>Reporting</p>
         </a></li>
     </ul>
    
     <div class="tab-content">
       <div role="tabpanel" class="tab-pane  show active" id="discove">
         <div class="design-process-content">
           <h3 class="semi-bold">Discovery</h3>
           <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincid unt ut laoreet dolore magna aliquam erat volutpat</p>
       </div>
   </div>
   <div role="tabpanel" class="tab-pane" id="Strateg">
     <div class="design-process-content">
       <h3 class="semi-bold">Strategy</h3>
       <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincid unt ut laoreet dolore magna aliquam erat volutpat</p>
   </div>
 </div>
 <div role="tabpanel" class="tab-pane" id="optimizatio">
     <div class="design-process-content">
       <h3 class="semi-bold">Optimization</h3>
       <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincid unt ut laoreet dolore magna aliquam erat volutpat</p>
   </div>
 </div>
 <div role="tabpanel" class="tab-pane" id="conten">
     <div class="design-process-content">
       <h3 class="semi-bold">Content</h3>
       <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincid unt ut laoreet dolore magna aliquam erat volutpat</p>              
   </div>
 </div>
 <div role="tabpanel" class="tab-pane" id="reportin">
     <div class="design-process-content">
       <h3>Reporting</h3>
       <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincid unt ut laoreet dolore magna aliquam erat volutpat. </p>
   </div>
 </div>
 </div>
 </div>
 </div>
 </section>



    <br><br><br>
    <div class="row-fluid content">   
      <div class="container" style="display: flex;" >    
      <div class="col-lg-3 col-sm-6" data-aos="fade-right"data-aos-offset="350"data-aos-easing="ease-in-sine"> 
        <div class="menu" id="menu" style="position: sticky; top: 100px;" >
          <a href="#topic1" style="text-decoration: none;" >
            <div class="list"><span class="light"></span><span>Design Registration </span></div>
          </a>
          <a href="#topic2" style="text-decoration: none;">
            <div class="list"><span class="light"></span><span>Benefits</span></div>
          </a>
          <a href="#topic3" style="text-decoration: none;">
            <div class="list"><span class="light"></span><span>Requirements</span></div>
          </a>
          <a href="#topic4" style="text-decoration: none;">
            <div class="list"><span class="light"></span><span>Design Registration Rights</span></div>
          </a>
          <a href="#topic5" style="text-decoration: none;">
            <div class="list"><span class="light"></span><span>Procedure</span></div>
          </a>
          <a href="#topic6" style="text-decoration: none;">
            <div class="list"><span class="light"></span><span>Validity</span></div>
          </a><br>

        </div> 
      </div>
      <div class="col-lg-6"  data-aos="fade-up"data-aos-duration="2000" data-aos-offset="350"data-aos-easing="ease-in-sine">
        <div id="topic1">
          <h4> What is Design Registration ? </h4>
          <p>Under Design Act, 2000, A design must be some shape, configuration, pattern or omamentation or composition of lines or colors applied to such article in any form by any industrial process or means but does not include any mode or principle of construction or anything which is in Trade or Property mark or artistic work.</p>
          <p>Industrial designs refer to creative activity which result in the omamental or formal
            appearance of a product and design right refers to a novel or original design that is
            accorded to the proprietor of a validly registered design. Industrial designs are an
            element of intellectual property.
          </p>

        </div>
        <div id="topic2">
          <h4> Benefits </h4>
          <ul> <li>        
            Design registration in India gives the owner, a monopoly on his or her product, Le the right for a limited period to stop others from making, using or selling the product without their permission and is additional to any design right or copyright protection that may exist automatically in the design.
          </li></ul>
          <ul><li>
           Designs should not be seen as an alternative to patents but as a complementary protection.
         </li></ul> 
         <ul><li>
          Design registration is cheaper to obtain than patent protection and the application process is short.
        </li></ul>

      </div>
      <div id="topic3">
        <h4>Design Registration Rights</h4>

        <p>A registered design brings the exclusive right to make, offer, put on the market import, export, and use of stock any product to which the design has been applied or is incorporated, or to let others use the design under terms agreed with the registered owner, in the UK and the Isle of Man.</p>


      </div>
      <div id="topic4">
        <h4>Requirements</h4>
        <p>The Application for Design Registration is to be filed at Kolkata : </p> 
        <div class="row"> 
          <div class="container text-center">
           <div class="row align-items-center">
             <div class="col" >
               <div>
                 <img src="images1/camera.png">
               </div>
               <h5>Photos: 7 sets from five or six different angles depending on the product</h5>
             </div>
             <div class="col" >
               <div>
                 <img src="images1/noc.png">
               </div>
               <h5>From 1 (six copies) for each design registration. </h5>
             </div>

           </div>
         </div>
       </div>   
     </div><br>
     <div id="topic5">
      <h4>Procedure</h4>
      <ul>
       <li> <b>Application - </b>  Preparation of Application for Design Registration and submission along with the necessary documents Attending to the proceedings and obtaining Provisional Papers after necessary follow up
        Publication in official journal
      </li>
    </ul>
    <ul>
      <li><b>Opposition</b>, if any Examination</li>
    </ul>
    <ul>
     <li><b>Acceptance</b></li>
   </ul> 
   <ul>
     <li><b>Registration Certificate</b> </li>
   </ul>

 </div>
 <br>
 <div id="topic6">
  <h4>Validity</h4>
  <p>A design registration will initially last for 10 years from the filing date of the application and may be extended to further for a second period of 5 years. </p>
  <p>Thus the maximum period of registered design is 15 years.</p>
</div>
</div>
<div class="col-lg-3 col-sm-6" data-aos="fade-left"data-aos-offset="350"data-aos-easing="ease-in-sine">
 <div class="container "style="position: sticky; top: 100px;" >
  <div class="row">

    <form method="post" action="send.php" class="form-horizontal" role="form" id="LeadsForm" >
      <!-- <i class="fas fa-paper-plane"></i> -->
      <!-- <span class="text-success"style="display: flex;justify-content: center;"><?php if($_SESSION['success']){echo $_SESSION['success'];} ?></span> -->
      <div class="input-group">
        <!-- <label>Full Name</label> -->
        <input type="text" name="name" placeholder="Enter your name"  id="contact_name" onkeyup="validatName()" >
        <span id="name_error"><?php echo $nameErr; ?></span>
      </div>

      <div class="input-group">
        <!-- <label>Phone No.</label> -->
        <input type="tel" name="contactno" placeholder="123 456 7890" id="contact_phone" onkeyup="validatPhone()" >
        <span id="phone_error"class="text-danger"><?php echo $contactnoErr; ?></span>
      </div>

      <div class="input-group">
        <!-- <label>Email Id</label> -->
        <input type="email" name="email" placeholder="Enter Email" id="contact_email" onkeyup="validatEmail()" >
        <span id="email_error"class="text-danger"><?php echo $emailErr; ?></span>
      </div>   
      <br>
      <div class="input-group" style="max-width:88% ;">
       <!-- <label class="">Services </label> -->
       <!-- <div class="col-lg-12"> -->
         <select  name="services[]" class="form-control">
           <option value="">--Please choose an option--</option>
           <option value="Trademark" <?php if(in_array('Trademark',$alltypeOfServices)) {  echo "selected";}else{echo "";}  ?>>Trademark</option>
           <option value="Copyright" <?php if(in_array('Copyright',$alltypeOfServices)) {  echo "selected";}else{echo "";}  ?>>Copyright</option>
           <option value="Patent" <?php if(in_array('Patent',$alltypeOfServices)) {  echo "selected";}else{echo "";}  ?>>Patent</option>
           <option value="Company Formation" <?php if(in_array('Company Formation',$alltypeOfServices)) {  echo "selected";}else{echo "";}  ?>>Company Formation</option>
           <option value="ISO" <?php if(in_array('ISO',$alltypeOfServices)) {  echo "selected";}else{echo "";}  ?>>ISO</option>
           <option value="Website Design" <?php if(in_array('Website Design',$alltypeOfServices)) {  echo "selected";}else{echo "";}  ?>>Website Design</option>

         </select>
         <span class="text-danger"><?php echo $typeOfSerrvicesErr; ?></span>
         <!-- </div> -->
       </div>
       <!-- <br> -->

       <div class="input-group">
        <!-- <label>City</label> -->
        <input type="text" name="city" placeholder="Enter City name"  id="contact_name" onkeyup="validatCity()" >
        <span id="city_error"class="text-danger"><?php echo $cityErr; ?></span>
      </div>   

          <!-- <div class="input-group">
            <label>Your Message</label>
            <textarea rows="5" placeholder="Enter your message" id="contact_massage" onkeyup="validatMassage()"></textarea>
            <span id="massage_error"></span>
          </div> -->

          <div class="input-group">
            <!-- <label for="location" class="col-sm-3 control-label">Generate OTP:</label> -->
            <!-- <div class="col-sm-12"> -->
             <!-- <input type="text" id="otp" name="otp" placeholder="otp" class="form-control"  >
             <span><strong>Note : </strong> Please Verify Mobile No. To submit the form. <a href="javascript:void(0)" onclick="SendOtp()">Verify</a></span>
             <span class="text-danger"><?php echo $otpErr; ?></span> -->
             <!-- <br>
               <br> -->
               <!-- <div   class="col-sm-12" > -->
                <input id="button" type="submit" name="save" class="" value="Submit">
                <!-- </div> -->

              </div>

              <!-- <button>Submit</button> -->
              <span id="submit-error" id="contact_submit" onkeyup="validatSubmit()"></span>

            </form>
          </div>
        </div>
      </div>
    </div> 
  </div>     
<br><br><br>


      <section id="info1">
      <div class="row">
        <div class="container">
          <div class="col-lg-6 col-sm-6" >
            <h3 style="text-align: center;">Patent Registratoin Steps</h3>
            <img src="images1/PatentSteps870_440.png" alt="">
          </div>
          <div class="col-lg-6 col-sm-6">
            <h3 style="text-align: center;">Patent Registratoin Process</h3>
            <img src="images1/patentPrcesure.png" alt=""></div>
          </div>
        </div> 
      </section> 
      <br><br><br>        



      <section id="info2">
        <div class="row">
          <div class="container">
            <div class="main_history fadeInUp">
              <div class="col-lg-6 col-sm-6" data-aos="fade-right"data-aos-offset="300"data-aos-easing="ease-in-sine">
                <div class="single_history_img">
                  <img width="100%" src="images1/patentPrcesure.png">
                </div>
              </div>

              <div class="col-lg-6 col-sm-6 "data-aos="fade-left"data-aos-offset="300"data-aos-easing="ease-in-sine">
                <div class="single_history_content">
                  <div class="head_title"style="margin-right:0px; border-left:4px solid #ffb900;" >
                    <h2 style="margin-left: 20px;" >A GOLDEN LEGACY OF OVER <br> 5 DECADES</h2>
                  </div>
                  <p>A trademark is typically a name, word, phrase, logo, symbol, design, image, or a combination of these elements.</p>
                  <p>There is also a range of non-conventional trademarks comprising marks which do not fall into these standard categories, such as those based on Color, smell, or sound. </p>
                  <a href="" class="btn btn-lg shadowbtn txtshadow"style="margin-right:0px; border-left:4px solid #ffb900;">BROWSE OUR WORK</a>
                </div>
              </div>
            </div>
          </div>
        </div> 
      </section>         


        <br><br><br><br>
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="section-title text-center wow zoomIn">
                <h1>Frequently Asked Questions</h1>
                <span></span>
                <p>If you have any doubts regarding Trademark then this article based on FAQs on Trademark Registration in India will clear all your doubts.</p>
              </div>
            </div>
          </div>
          <div class="row">               
            <div class="col-md-12">
              <div class="panel-group accordion" id="accordion" role="tablist" aria-multiselectable="true">
                <div class="panel panel-default">
                  <div class="panel-heading" role="tab" id="headingOne">
                    <h4 class="panel-title">
                      <a role="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                        What is Trademark?
                      </a>
                    </h4>                    

                  </div>

                  <div id="collapseOne" class="collapse show" data-parent="#accordion" data-parent="#accordion">
                    <div class="panel-body">
                      <p>The term ‘Trademark’ refers to the brand or logo which represents the business. It is a visual symbol of a signature, name, device, label, numerals or combination of colors used by the owner of the trademark for goods or services or any other articles of commerce. Moreover, it is meant to differentiate among the similar products or services originated from the different business. A trademark can be a word, wrapper, packaging labels or a tagline or a combination of these. For example Coca-Cola and Pepsi.
                      </p>
                    </div>
                  </div>
                </div>            
                <div class="panel panel-default">
                  <div class="panel-heading" role="tab" id="headingTwo">
                    <h4 class="panel-title">
                      <a class="collapsed" role="button" data-toggle="collapse" data-target="#collapseTwo" >
                       Who can apply for the Trademark?
                     </a>
                   </h4>
                 </div>
                 <div id="collapseTwo" class="panel-collapse collapse"  data-parent="#accordion">
                  <div class="panel-body">
                    <p>Any Individual, Company, Proprietor or legal entity who can claim to be an owner of the Trademark can apply for it. The trademark Registration formalities can be done in 18 to 24 months after that you can start using the ‘TM’ symbol. Once your trademark registry is done and registration certificate is issued then you may use ® (registered symbol) next to your trademark. The validity of a registered trademark is for 10 years from the date of filing and that can be renewed from time to time. </p>
                  </div>
                </div>
              </div>
              <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headingThree">
                  <h4 class="panel-title">
                    <a class="collapsed" role="button" data-toggle="collapse" data-target="#collapseThree">
                      What are the types of Trademark?
                    </a>
                  </h4>
                </div>
                <div id="collapseThree" class="panel-collapse collapse" data-parent="#accordion">
                  <div class="panel-body">
                    <p>There are several types of Trademark which are given below:
                    </p>
                    <p>
                      A name of a person or surname or predecessor in business or the signature of the person.
                      The coined word or an invented word or any dictionary words that are not being directly descriptive of the character.
                      Alphanumeric or letter or any combination thereof.
                      Image, symbol, monograms, 3-dimensional shapes etc
                      Sound marks in audio format
                    </p>
                  </div>
                </div>
              </div>
              <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headingFour">
                  <h4 class="panel-title">
                    <a class="collapsed" role="button" data-toggle="collapse" data-target="#collapseFour">
                      What are the functions of Trademark?
                    </a>
                  </h4>
                </div>
                <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour" data-parent="#accordion">
                  <div class="panel-body">
                    <p>Following are the functions of Trademark </p>
                    <p>It identifies the product or the services and its sources. </p>
                    <p>It provides a guarantee for its quality </p>
                    <p>It helps in advertising the products and services. </p>
                    <p>Read more : Classes of Trademark Goods and Services </p>
                  </div>
                </div>
              </div>
              <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headingFive">
                  <h4 class="panel-title">
                    <a class="collapsed" role="button" data-toggle="collapse" data-target="#collapseFive">
                      What are the documents required for Trademark Registration?
                    </a>
                  </h4>
                </div>
                <div id="collapseFive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFive" data-parent="#accordion">
                  <div class="panel-body">
                    <p>Following are the documents which are required for the Trademark registration: </p>
                    <p>Copy of Trademark or logo </p>
                    <p>Applicant details like name, address, and nationality and for the company it requires the state of incorporation </p>
                    <p>Goods or services to register </p>
                    <p>Date of first use of the trademark in India. </p>
                    <p>Power of attorney which is to be signed by the applicant. </p>
                  </div>
                </div>
              </div>
            </div>
          </div><!--- END COL -->     
        </div><!--- END ROW -->        

      </div>

    </div>


<!-- <div class="row">
    <div class="container" style="display: flex;"      >
        <div class="col-lg-6 ">
            <ul class="accordian">
                <li>
                    <input type="radio" name="accordian" id="first" checked>
                    <label for="first">Products</label>
                    <div class="content">
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Tempore nam provident fuga.
                        </p>
                    </div>
                </li>

                <li>
                    <input type="radio" name="accordian" id="second">
                    <label for="second">Products</label>
                    <div class="content">
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Tempore nam provident fuga.
                        </p>
                    </div>
                </li>
                <li>
                    <input type="radio" name="accordian" id="third">
                    <label for="third">Products</label>
                    <div class="content">
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Tempore nam provident fuga.
                        </p>
                    </div>
                </li>
            </ul>
        </div>
        <div class="col-lg-6 col-sm-12 "   >
                <img src="images1/trademark-doc.webp "width="500"   alt="">
        </div>
    </div>
  </div> -->

  <br><br>
  <section id="about" class="about roomy-100" style="background-image: url(images1/BK.jpg);">

    <div class="container">
      <div class="row" >    
        <div class="col-lg-12" style="display:flex; flex-direction: column; align-items: center;justify-content: center; ">
          <!-- <h1>What We Do?</h1> -->
          <!-- Section's title goes here -->
          <h5>DIFFERENT TYPES OF TRADEMARKS THAT CAN BE REGISTERED IN INDIA</h5>
          <hr class="new1">
          <!--Simple description for section goes here. -->
        </div> 
      </div>
    </div> 

    <div class="container">
      <div class="row-fluid">
                    <!-- <div class="linebtn" > 
                        <div class="col-lg-12 col-md-8 col-sm-12 ">
                            <ul>
                                <li class="list active" data-filter="all"><strong>All</strong></li>
                                <li class="list" data-filter="2022"><strong>YEAR 2021-22</strong></li>
                                <li class="list" data-filter="2023"><strong>YEAR 2022-23</strong></li>
                            </ul>
                        </div>
                      </div> -->

                      <div class="row line" style="margin-bottom: 50px;">

                        <div class="col-md-3 col-sm-12">
                          <div class="card11 card-1 itemBox 2023" >
                            <a href="assets/doc/Financial_Results/Covering Letter_Reg 52_Financial Results_compressed.pdf" target="_blank" style="text-decoration: none;" rel="noopener">
                              <h3 class="txtshadow zoom-in">TRADEMARK REGISTRATION</h3>
                            </a>  
                          </div>
                        </div>  


                        <div class="col-md-3 col-sm-12">
                          <div class="card11 card-1 itemBox 2022" >
                            <a href="assets/doc/Financial_Results/Covering Letter along with Financial Results_Reg 52.pdf" target="_blank" style="text-decoration: none;" rel="noopener">
                              <h3 class="txtshadow zoom-in">COPYRIGHT REGISTRATION</h3>
                            </a>  
                          </div>
                        </div>


                        <div class="col-md-3 col-sm-12">
                          <div class="card11 card-1 itemBox 2022" >
                            <a href="assets/doc/Financial_Results/Covering Letter along with Financial Results.pdf" target="_blank" style="text-decoration: none;" rel="noopener">
                              <h3 class="txtshadow zoom-in">DESIGN REGISTRATION</h3>
                            </a>  
                          </div>
                        </div>

                        <div class="col-md-3 col-sm-12">
                          <div class="card11 card-1 itemBox 2022" >
                            <a href="assets/doc/Financial_Results/Covering Letter_Reg 52_Financial Results_organized_compressed.pdf" target="_blank" style="text-decoration: none;" rel="noopener">
                              <h3 class="txtshadow zoom-in">PATENT REGISTRATION</h3>
                            </a>  
                          </div>
                        </div>

                        <div class="col-md-3 col-sm-12">
                          <div class="card11 card-1 itemBox 2022" >
                            <a href="assets/doc/Financial_Results/Covering Letter_Reg 52_Financial Results_organized_compressed.pdf" target="_blank" style="text-decoration: none;" rel="noopener">
                              <h3 class="txtshadow zoom-in">ISO REGISTRATION</h3>
                            </a>  
                          </div>
                        </div>

                        <div class="col-md-3 col-sm-12">
                          <div class="card11 card-1 itemBox 2022" >
                            <a href="assets/doc/Financial_Results/Covering Letter_Reg 52_Financial Results_organized_compressed.pdf" target="_blank" style="text-decoration: none;" rel="noopener">
                              <h3 class="txtshadow zoom-in">FORMATION OF COMPANIES</h3>
                            </a>  
                          </div>
                        </div>


                      </div>
                    </div>
                  </div>
                </div>
              </div>


              <!-- Contact section edn -->
              <!-- Footer section start -->
                                    <!-- <div class="footer">
                                        <pShared by <i class="fa fa-love"></i><a href="#">hemraj</a>
                                        </p>
                                      </div> -->
                                      <!-- Footer section end -->
                                      <!-- ScrollUp button start -->

                                      <footer class="container-fluid" id="gtco-footer">
                                        <div class="container">
                                          <div class="row">
                                            <div class="col-lg-6" id="contact">
                                              <h4> Contact Us </h4>
                                              <input type="text" class="form-control" placeholder="Full Name">
                                              <input type="email" class="form-control" placeholder="Email Address">
                                              <textarea class="form-control" placeholder="Message"></textarea>
                                              <a href="#" class="submit-button">READ MORE <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                                            </div>
                                            <div class="col-lg-6">
                                              <div class="row">
                                                <div class="col-6">
                                                  <h4>Company</h4>
                                                  <ul class="nav flex-column company-nav">
                                                    <li class="nav-item"><a class="nav-link" href="#">Home</a></li>
                                                    <li class="nav-item"><a class="nav-link" href="#">Services</a></li>
                                                    <li class="nav-item"><a class="nav-link" href="#">About</a></li>
                                                    <li class="nav-item"><a class="nav-link" href="#">News</a></li>
                                                    <li class="nav-item"><a class="nav-link" href="#">FAQ's</a></li>
                                                    <li class="nav-item"><a class="nav-link" href="#">Contact</a></li>
                                                  </ul>
                                                  <h4 class="mt-5">Fllow Us</h4>
                                                  <ul class="nav follow-us-nav">
                                                    <li class="nav-item"><a class="nav-link pl-0" href="#"><i class="fa fa-facebook"
                                                      aria-hidden="true"></i></a></li>
                                                      <li class="nav-item"><a class="nav-link" href="#"><i class="fa fa-twitter"
                                                       aria-hidden="true"></i></a></li>
                                                       <li class="nav-item"><a class="nav-link" href="#"><i class="fa fa-google"
                                                         aria-hidden="true"></i></a></li>
                                                         <li class="nav-item"><a class="nav-link" href="#"><i class="fa fa-linkedin"
                                                           aria-hidden="true"></i></a></li>
                                                         </ul>
                                                       </div>
                                                       <div class="col-6">
                                                        <h4>Services</h4>
                                                        <ul class="nav flex-column services-nav">
                                                          <li class="nav-item"><a class="nav-link" href="#">Trademark Registration</a></li>
                                                          <li class="nav-item"><a class="nav-link" href="#">Copyright Registration</a></li>
                                                          <li class="nav-item"><a class="nav-link" href="#">Design Registration</a></li>
                                                          <li class="nav-item"><a class="nav-link" href="#">Patent Registration</a></li>
                                                          <li class="nav-item"><a class="nav-link" href="#">ISO Registration</a></li>
                                                          <li class="nav-item"><a class="nav-link" href="#">Formation OF Company</a></li>
                                                          <li class="nav-item"><a class="nav-link" href="#">Web Servieces</a></li>
                                                          <li class="nav-item"><a class="nav-link" href="#">Branding Services</a></li>
                                                          <li class="nav-item"><a class="nav-link" href="#">Other Registration Services</a></li>
                                                        </ul>
                                                      </div>
                                                      <div class="col-12">
                                                        <p>&copy; 2023. All Rights Reserved.</p>
                                                      </div>
                                                    </div>
                                                  </div>
                                                </div>
                                              </div>
                                            </footer>                           
                                            <div class="scrollup">
                                              <a href="#">
                                                <i class="icon-up-open"></i>
                                              </a>
                                            </div>



                                            <!-- ScrollUp button end -->
                                            <!-- Include javascript -->
                                            <script src="js/jquery.js"></script>
                                            <script type="text/javascript" src="js/jquery.mixitup.js"></script>
                                            <script type="text/javascript" src="js/bootstrap.js"></script>
                                            <script type="text/javascript" src="js/modernizr.custom.js"></script>
                                            <script type="text/javascript" src="js/jquery.bxslider.js"></script>
                                            <script type="text/javascript" src="js/jquery.cslider.js"></script>
                                            <script type="text/javascript" src="js/jquery.placeholder.js"></script>
                                            <script type="text/javascript" src="js/jquery.inview.js"></script>
                                            <!-- Load google maps api and call initializeMap function defined in app.js -->
                                            <script async="" defer="" type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false&callback=initializeMap"></script>
                                            <!-- css3-mediaqueries.js for IE8 or older -->
                <!--[if lt IE 9]>
                    <script src="js/respond.min.js"></script>
                  <![endif]-->
                   <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script> -->

                   <script type="text/javascript" src="js/app.js"></script>

                   <script src="dropdown-19/js/jquery-3.3.1.min.js"></script>
                   <script src="dropdown-19/js/popper.min.js"></script>
                   <script src="dropdown-19/js/bootstrap.min.js"></script>
                   <script src="dropdown-19/js/owl.carousel.min.js"></script>
                   <script src="dropdown-19/js/main.js"></script>


                   <script>window.onscroll = function() {
                     stickyHeader();
                   };

                   var header = document.getElementById("header");
                   var sticky = header.offsetTop;

                   function stickyHeader() {
                     if (window.pageYOffset > sticky) {
                       header.classList.add("sticky");
                     } else {
                       header.classList.remove("sticky");
                     }
                   }

                 </script>

                 <script type="text/javascript">
                   (function($) {
                     'use strict';

                     jQuery(document).on('ready', function(){

                       $('a.page-scroll').on('click', function(e){
                         var anchor = $(this);
                         $('html, body').stop().animate({
                           scrollTop: $(anchor.attr('href')).offset().top - 50
                         }, 1500);
                         e.preventDefault();
                       });     

                     });                       
                   })(jQuery);
                 </script>

                 <script type="text/javascript">
                   // Acc
                   $(document).on("click", ".naccs .menu div", function() {
                    var numberIndex = $(this).index();

                    if (!$(this).is("active")) {
                      $(".naccs .menu div").removeClass("active");
                      $(".naccs ul li").removeClass("active");

                      $(this).addClass("active");
                      $(".naccs ul").find("li:eq(" + numberIndex + ")").addClass("active");

                      var listItemHeight = $(".naccs ul")
                      .find("li:eq(" + numberIndex + ")")
                      .innerHeight();
                      $(".naccs ul").height(listItemHeight + "px");
                    }
                  });
                </script> 


                <script type="text/javascript">
                  class FibonacciSphere {
                    #points;

                    get points() {
                      return this.#points;
                    }

                    constructor(N) {
                      this.#points = [];

                      const goldenAngle = Math.PI * (3 - Math.sqrt(5));

                      for (let i = 0; i < N; i++) {
                        const y = 1 - (i / (N - 1)) * 2;
                        const radius = Math.sqrt(1 - y ** 2);
                        const a = goldenAngle * i;
                        const x = Math.cos(a) * radius;
                        const z = Math.sin(a) * radius;

                        this.#points.push([x, y, z]);
                      }
                    }
                  }


                  class TagsCloud {
                    #root;
                    #size;
                    #sphere;
                    #tags;
                    #rotationAxis;
                    #rotationAngle;
                    #rotationSpeed;
                    #frameRequestId;

                    constructor(root) {
                      this.#root = root;
                      this.#size = this.#root.offsetWidth;
                      this.#tags = root.querySelectorAll('.tag');
                      this.#sphere = new FibonacciSphere(this.#tags.length);
                      this.#rotationAxis = [1, 0, 0];
                      this.#rotationAngle = 0;
                      this.#rotationSpeed = 0;

                      this.#updatePositions();
                      this.#initEventListeners();
                      this.#root.classList.add('-loaded');
                    }

                    #initEventListeners() {
                      window.addEventListener('resize', this.#updatePositions.bind(this));
                      document.addEventListener('mousemove', this.#onMouseMove.bind(this));
                    }

                    #updatePositions() {
                      const sin = Math.sin(this.#rotationAngle);
                      const cos = Math.cos(this.#rotationAngle);
                      const ux = this.#rotationAxis[0];
                      const uy = this.#rotationAxis[1];
                      const uz = this.#rotationAxis[2];

                      const rotationMatrix = [
                        [
                          cos + (ux ** 2) * (1 - cos),
                          ux * uy * (1 - cos) - uz * sin,
                          ux * uz * (1 - cos) + uy * sin,
                          ],
                        [
                          uy * ux * (1 - cos) + uz * sin,
                          cos + (uy ** 2) * (1 - cos),
                          uy * uz * (1 - cos) - ux * sin,
                          ],
                        [
                          uz * ux * (1 - cos) - uy * sin,
                          uz * uy * (1 - cos) + ux * sin,
                          cos + (uz ** 2) * (1 - cos)
                          ]
                        ];

                      const N = this.#tags.length;

                      for (let i = 0; i < N; i++) {
                        const x = this.#sphere.points[i][0];
                        const y = this.#sphere.points[i][1];
                        const z = this.#sphere.points[i][2];

                        const transformedX =
                        rotationMatrix[0][0] * x
                        + rotationMatrix[0][1] * y
                        + rotationMatrix[0][2] * z;
                        const transformedY =
                        rotationMatrix[1][0] * x
                        + rotationMatrix[1][1] * y
                        + rotationMatrix[1][2] * z;
                        const transformedZ =
                        rotationMatrix[2][0] * x
                        + rotationMatrix[2][1] * y
                        + rotationMatrix[2][2] * z;

                        const translateX = this.#size * transformedX / 2;
                        const translateY = this.#size * transformedY / 2;
                        const scale = (transformedZ + 2) / 3;
                        const transform =
                        `translateX(${translateX}px) translateY(${translateY}px) scale(${scale})`;
                        const opacity = (transformedZ + 1.5) / 2.5;

                        this.#tags[i].style.transform = transform;
                        this.#tags[i].style.opacity = opacity;
                      }
                    }

                    #onMouseMove(e) {
                      const rootRect = this.#root.getBoundingClientRect();
                      const deltaX = e.clientX - (rootRect.left + this.#root.offsetWidth / 2);
                      const deltaY = e.clientY - (rootRect.top + this.#root.offsetHeight / 2);
                      const a = Math.atan2(deltaX, deltaY) - Math.PI / 2;
                      const axis = [Math.sin(a), Math.cos(a), 0];
                      const delta = Math.sqrt(deltaX ** 2 + deltaY ** 2);
                      const speed = delta / Math.max(window.innerHeight, window.innerWidth) / 10;

                      this.#rotationAxis = axis;
                      this.#rotationSpeed = speed;
                    }

                    #update() {
                      this.#rotationAngle += this.#rotationSpeed;

                      this.#updatePositions();
                    }

                    start() {
                      this.#update();

                      this.#frameRequestId = requestAnimationFrame(this.start.bind(this));
                    }

                    stop() {
                      cancelAnimationFrame(this.#frameRequestId);
                    }
                  }


                  function main() {
                    {
                      const root = document.querySelector('.tags-cloud');
                      const cloud = new TagsCloud(root);

                      cloud.start();
                    }

                    {
                      const cursor = document.getElementById('cursor');
                      const isActivated = false;

                      document.addEventListener('mousemove', (e) => {
                        if (!isActivated) {
                          cursor.classList.add('-activated');
                        }

                        cursor.style.transform =
                        `translateX(${e.clientX}px) translateY(${e.clientY}px)`;
                      });
                    }
                  }


                  document.addEventListener('DOMContentLoaded', () => {
                    main();
                  });

                </script>    

                <script src="https://code.jquery.com/jquery-3.6.1.js"></script>
                <!-- <script src="assets/js/jquery-1.9.1.min.js"></script> -->
                <script type="text/javascript">
                  $(document).ready(function(){
                   $('.list').click(function(){
                    const value = $(this).attr('data-filter');
                    if(value == 'all'){
                      $('.itemBox').show('1000');
                    }
                    else{
                      $('.itemBox').not('.'+value).hide('1000');
                      $('.itemBox').filter('.'+value).show('1000');
                    }
                  }); 

                   $('.list').click(function(){
                    $(this).addClass('active').siblings().removeClass('active');
                  });
                 });
               </script>

               <script src="js1/bootstrap.min.js"></script>
               <script src="./form/script.js"></script>
               <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
               <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
               <script>
                 AOS.init();
               </script>

             </body> 
             <?php 
             unset($_SESSION['errors']);
             unset($_SESSION['notmatched']);
             unset($_SESSION['postval']);
             unset($_SESSION['typeofflat1']);
             unset($_SESSION['approxbudget1']);
             session_destroy();

             ?>
             </html>