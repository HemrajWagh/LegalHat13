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
<div class="row content">   
 <div class="container" style="display: flex;" >    
    <div class="col-lg-3 col-sm-6"> 
        <div class="menu" id="menu"style="position: sticky; top: 60px;" >
            <a href="#topic1" style="text-decoration: none;" >
                <div class="list"><span class="light"></span><span>Patent</span></div>
            </a>
            <a href="#topic2" style="text-decoration: none;">
                <div class="list"><span class="light"></span><span>Importance Of Patent</span></div>
            </a>
            <a href="#topic3" style="text-decoration: none;">
                <div class="list"><span class="light"></span><span>Benefits Of Patent</span></div>
            </a>

        </div> 
    </div>
    <div class="col-lg-6 col-sm-6" >
        <div id="topic1" style="margin-top:20px;">
            <h4>What is Patent ? </h4>
            <p>Patent is a major part of Intellectual Property which grants its
                inventor, the right of exploiting its object exclusively, during a given
            time period.</p>
            
        </div>

        <div id="topic2">
            <h4>Importance Of Patent</h4>
            <p>It helps in stimulating the development of new technologies and
                also guarantees the investor's exploitation rights. It also promotes
                new era and various modifications required in the existing systems
            and process.</p>
            <p>The patent provides the user exclusive rights over his
                object; and this right is ultimately incorporated to the assets of a
                company. It is really helpful to the company for defining market
            strategies needed to hit the public target.</p>
            <p>However, patent rights
                are granted, only on the fulfillment of some requirements such as:
                Industrial applicability, inventive act and novelty with regard to the
            technological knowledge already disclosed.</p><p>Due to the creative
                efforts in the technical field, the inventor who opts for Patent
                Registration also holds the temporary exploitation monopoly of his
            creation; which ultimately guarantees him a sort of market reserve.</p>
        </div><div id="topic3">
            <h4>Benefits Of Patent</h4>
            <p>● A patent gives you the right to stop others from copying,
                manufacturing, selling, and importing your invention without your
                permission. The existence of your patent may be enough on its
                own to stop others from trying to exploit your invention. If it does
                not, it gives you the right to take legal action to stop them exploiting
            your invention and to claim damages.</p>
            <p>●The patent also allows you to:
                sell the invention and all the intellectual property (IP) rights
                license the invention to someone else but retain all the IP rights
                discuss the invention with others in order to set up a business
            based around the invention.</p>
        </div>
    </div>
    <div class="col-lg-3">  </div>
</div>    
<!-- </div>   -->
<br><br><br>
<div class="row-fluid">
    <div class="container-fluid"style="display:flex;">
        <div class="col-lg-6 col-sm-6" >
            <h3 style="text-align: center;">Patent Registratoin Steps</h3>
            <img src="images1/PatentSteps870_440.png" alt="">
        </div>
        <div class="col-lg-6 col-sm-6">
            <h3 style="text-align: center;">Patent Registratoin Process</h3>
            <img src="images1/patentProcess.png" alt=""></div>
         </div>
</div>                                                                   

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



                           <!--  <div id="contact" class="contact">
                                <div class="section secondary-section">
                                    <div class="container">
                                        <div class="title">
                                            <h1>Contact Us</h1>
                                            <p>Duis mollis placerat quam, eget laoreet tellus tempor eu. Quisque dapibus in purus in dignissim.</p>
                                        </div>
                                    </div>
                                    <div class="map-wrapper">
                                        <div class="map-canvas" id="map-canvas">Loading map...</div>
                                        <div class="container">
                                            <div class="row-fluid">
                                                <div class="span5 contact-form centered">
                                                    <h3>Say Hello</h3>
                                                    <div id="successSend" class="alert alert-success invisible">
                                                        <strong>Well done!</strong>Your message has been sent.</div>
                                                        <div id="errorSend" class="alert alert-error invisible">There was an error.</div>
                                                        <form id="contact-form" action="php/mail.php">
                                                            <div class="control-group">
                                                                <div class="controls">
                                                                    <input class="span12" type="text" id="name" name="name" placeholder="* Your name..." />
                                                                    <div class="error left-align" id="err-name">Please enter name.</div>
                                                                </div>
                                                            </div>
                                                            <div class="control-group">
                                                                <div class="controls">
                                                                    <input class="span12" type="email" name="email" id="email" placeholder="* Your email..." />
                                                                    <div class="error left-align" id="err-email">Please enter valid email adress.</div>
                                                                </div>
                                                            </div>
                                                            <div class="control-group">
                                                                <div class="controls">
                                                                    <textarea class="span12" name="comment" id="comment" placeholder="* Comments..."></textarea>
                                                                    <div class="error left-align" id="err-comment">Please enter your comment.</div>
                                                                </div>
                                                            </div>
                                                            <div class="control-group">
                                                                <div class="controls">
                                                                    <button id="send-mail" class="message-btn">Send message</button>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="container">
                                            <div class="span9 center contact-info">
                                                <p>123 Fifth Avenue, 12th,Belgrade,SRB 11000</p>
                                                <p class="info-mail">ourstudio@somemail.com</p>
                                                <p>+11 234 567 890</p>
                                                <p>+11 286 543 850</p>
                                                <div class="title">
                                                    <h3>We Are Social</h3>
                                                </div>
                                            </div>
                                            <div class="row-fluid centered">
                                                <ul class="social">
                                                    <li>
                                                        <a href="">
                                                            <span class="icon-facebook-circled"></span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="">
                                                            <span class="icon-twitter-circled"></span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="">
                                                            <span class="icon-linkedin-circled"></span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="">
                                                            <span class="icon-pinterest-circled"></span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="">
                                                            <span class="icon-dribbble-circled"></span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="">
                                                            <span class="icon-gplus-circled"></span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div> -->
                                <!-- Contact section edn -->
                                <!-- Footer section start -->
                                <!-- <div class="footer">
                                    <pShared by <i class="fa fa-love"></i><a href="#">hemraj</a>
                                    </p>
                                </div> -->
                                <!-- Footer section end -->
                                <!-- ScrollUp button start -->
                                <div class="scrollup">
                                    <a href="#">
                                        <i class="icon-up-open"></i>
                                    </a>
                                </div>



                                <!-- ScrollUp button end -->
                                <!-- Include javascript -->
                                <script src="js/jquery.js"></script>
                                <script type="text/javascript" src="js/jquery.mixitup.js"></script>
                                <!-- <script type="text/javascript" src="js/bootstrap.js"></script> -->
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

           <!--     <script src="dropdown-19/js/jquery-3.3.1.min.js"></script>
               <script src="dropdown-19/js/popper.min.js"></script>
               <script src="dropdown-19/js/bootstrap.min.js"></script>
               <script src="dropdown-19/js/owl.carousel.min.js"></script>
               <script src="dropdown-19/js/main.js"></script> -->


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

            <!-- <script src="https://code.jquery.com/jquery-3.6.1.js"></script> -->
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
         <script src="js1/jquery-3.3.1.slim.min.js"></script>
         <script src="js1/popper.min.js"></script>
         <script src="owl-carousel/owl.carousel.min.js"></script>
         <script src="js1/bootstrap.min.js"></script>
         <script src="js1/main.js"></script>

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
// Acc
    $(document).on("click", " .menu div", function() {
        var numberIndex = $(this).index();

        if (!$(this).is("active")) {
            $(" .menu div").removeClass("active");
        // $("  ul li").removeClass("active");

            $(this).addClass("active");
        // $(" ul").find("li:eq(" + numberIndex + ")").addClass("active");

    //     var listItemHeight = $(".naccs ul")
    //         .find("li:eq(" + numberIndex + ")")
    //         .innerHeight();
    //     $(" ul").height(listItemHeight + "px");
    // }
        };
    </script>



<script type="text/javascript">// script for tab steps
$('a[data-toggle="tab"]').on('shown.bs.tab', function (e) {

    var href = $(e.target).attr('href');
    var $curr = $(".process-model  a[href='" + href + "']").parent();

    $('.process-model li').removeClass();

    $curr.addClass("active");
    $curr.prevAll().addClass("visited");
});
</script>

<!--  -->
</body>
</html>