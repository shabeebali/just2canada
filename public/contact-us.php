<?PHP
/*
    Contact Form from HTML Form Guide
    This program is free software published under the
    terms of the GNU Lesser General Public License.
    See this page for more info:
    http://www.html-form-guide.com/contact-form/contact-form-attachment.html
*/
error_reporting(E_ERROR | E_PARSE);
require_once("include/fgquoteform.php");
require_once("include/captcha-creator.php");

$formproc = new FGContactForm();
//$captcha = new FGCaptchaCreator('scaptcha');

//$formproc->EnableCaptcha($captcha);
 
//$formproc->AddRecipient('mdesigner22@gmail.com');
$formproc->SetFromAddress('info@just2canada.ca');
$formproc->AddRecipient('info@just2canada.ca'); 
$formproc->AddRecipient('info@tastechnologies.com'); 
// $formproc->AddRecipient('shabeeboali@gmail.com');
   
if(isset($_POST['email']) && $_POST['email']!='')
	$formproc->AddRecipientToSender($_POST['email'],$_POST['name']);
//1. Add your email address here.
 


//2. For better security. Get a random tring from this link: http://tinyurl.com/randstr
// and put it here
$formproc->SetFormRandomKey('E6bZFICMgOhOnxI');

$formproc->AddFileUploadField('UploadPicture','jpg,jpeg,gif,png,bmp,doc,docx,pdf',2024);
$formproc->AddFileUploadField('UploadPicture1','jpg,jpeg,gif,png,bmp,doc,docx,pdf',2024);
$formproc->AddFileUploadField('UploadPicture2','jpg,jpeg,gif,png,bmp,doc,docx,pdf',2024);
$formproc->AddFileUploadField('UploadPicture3','jpg,jpeg,gif,png,bmp,doc,docx,pdf',2024);



if(isset($_POST['submitted']))
{
    
     
  /*Captcha Validations*/
		if(isset($_POST['g-recaptcha-response'])){
		  $captcha=$_POST['g-recaptcha-response'];
		}
		if(!$captcha){
		  echo '<h2>Please check the the captcha form.</h2>';
		  exit();
		}
		$secretKey = "6LfdOBAdAAAAAJ69TdvtjxrvWAfLSoAIhX3dLEok";
		$ip = $_SERVER['REMOTE_ADDR'];

		
		
		$ch = curl_init();

        curl_setopt_array($ch, [
            CURLOPT_URL => 'https://www.google.com/recaptcha/api/siteverify',
            CURLOPT_POST => true,
            CURLOPT_POSTFIELDS => [
                'secret' => $secretKey,
                'response' => $captcha,
                'remoteip' => $_SERVER['REMOTE_ADDR']
            ],
            CURLOPT_RETURNTRANSFER => true
        ]);
        
        $output = curl_exec($ch);
        curl_close($ch);
        
        $responseKeys = json_decode($output);

		if($responseKeys->{'success'}) {    
				echo '';
		} else {
				echo '<h2>You are spammer ! Google recaptcha verification failed';
				exit();
		}    
         
    $validationData = [
        $_POST['email'],
        $_POST['name'],
        $_POST['phone'],
        $_POST['message']
    ];
    $validated = true;
    foreach ($validationData as $string){
        if($string != strip_tags($string)) {
            $validated = false;
            break;
        }
    }
    if ($validated) {
       //if($formproc->ProcessForm() && $formproc->ProcessFormToSender())
       if($formproc->ProcessFormToSender())
       {
            //$formproc->RedirectToURL("thankyou.html");
            header("Location:thankyou.html");
       }
    } else {
		echo '<h2>You are spammer!!!';
		exit();
	}    
}

?><!DOCTYPE html>
<html lang="en" data-ng-app="website">

 
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Just To Canada</title>

    <!-- Favicon -->
    <link rel="icon" href="images/favicon.png" type="image/x-icon" />
    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Animate CSS -->
    <link href="vendors/animate/animate.css" rel="stylesheet">
    <!-- Icon CSS-->
	<link rel="stylesheet" href="vendors/font-awesome/css/font-awesome.min.css">
    <!-- Camera Slider -->
    <link rel="stylesheet" href="vendors/camera-slider/camera.css">
    <!-- Owlcarousel CSS-->
	<link rel="stylesheet" type="text/css" href="vendors/owl_carousel/owl.carousel.min.css" media="all">
	<link rel="stylesheet" href="vendors/owl_carousel/owl.theme.min.css" media="all">

    <!--Theme Styles CSS-->
	<link rel="stylesheet" type="text/css" href="css/style.css" media="all" />
	
	 <link rel="stylesheet" href="mt-includes/css/assets.min513c.css?_build=1633339793"/>
<link rel="stylesheet" href="mt-demo/93200/93283/mt-content/assets/stylesdd7d.css?_build=1632936756" id="moto-website-style"/>
    <script src="mt-includes/js/website.assets.minc8df.js?_build=1632918612" type="text/javascript" data-cfasync="false"></script>
    <script type="text/javascript" data-cfasync="false">
        var websiteConfig = websiteConfig || {};
        websiteConfig.address = 'index.html';
        websiteConfig.addressHash = '6402f41ce3885394c22d1e8038067d85';
        websiteConfig.apiUrl = 'api.json';
        websiteConfig.preferredLocale = 'en_US';
        websiteConfig.preferredLanguage = websiteConfig.preferredLocale.substring(0, 2);
                websiteConfig.back_to_top_button = {"topOffset":300,"animationTime":500,"type":"theme"};
                websiteConfig.popup_preferences = {"loading_error_message":"The content could not be loaded."};
        websiteConfig.lazy_loading = {"enabled":true};
        websiteConfig.cookie_notification = {"enabled":false,"content":"<p class=\"moto-text_normal\">This website uses cookies to ensure you get the best experience on our website.<\/p>","content_hash":"6610aef7f7138423e25ee33c75f23279","controls":{"visible":"close,accept","accept":{"label":"Got it","preset":"default","size":"medium","cookie_lifetime":365}}};
                angular.module('website.plugins', []);
    </script>
    <script src="mt-includes/js/website.min7b53.js?_build=1632918598" type="text/javascript" data-cfasync="false"></script>
    
	
	<script src='https://www.google.com/recaptcha/api.js' async defer></script>
</head>
<body id="home">
    <!-- Preloader -->
    <!--<div class="preloader"></div> -->
	
	
	<!--<a href="get-appointment.php" class="  btn-fix"><i class="fa-edit fa"></i> Get Appointment</a> -->

	<!-- Header_Area -->
    <nav class="navbar navbar-default header_aera" id="main_navbar"><!-- Top Header_Area -->
	<div class="top_header_area">
	    <div class="container">
            <ul class="nav navbar-nav top_nav">
                <li><a href="tel:14168872557"><i class="fa fa-phone"></i> +1.416.887.2557 </a></li>
                <li><a href="#"><i class="fa fa-envelope"></i> info@just2canada.ca</a></li>
            </ul>
			<a href="https://iccrc-crcic.ca/" target="_blank" rel="noopener"> 
		<img class="iccrc alignnone wp-image-1601 size-full" style="float: left;
width: 15%;
margin: 0 0 0 2%;" src="images/iccrc.png" alt="" width="300" height="50" /></a>
			<a href="obtain-free-assessment.html" class="btn navbar-right" data-animation="animated fadeInUp">Obtain Free Assessment by RCIC</a>
            <ul class="nav navbar-nav navbar-right social_nav">
                <li><a href="https://www.facebook.com/Just2Canada" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                <li><a href="https://twitter.com/Just2Canada" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                <li><a href="https://www.instagram.com/just2canada/" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                 <li><a href="https://www.linkedin.com/company/just2canada" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                <li><a href="https://just2canada.ca/skilled-worker-assessment-questionnaire/#" target="_blank"><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
				<li><a href="https://api.whatsapp.com/send?phone=+19055860440" target="_blank"><i class="fa-whatsapp fa" aria-hidden="true"></i></a></li>
            </ul>
	    </div>  
	</div>
	<!-- End Top Header_Area -->
        <div class="container">
            <!-- searchForm -->
            <div class="searchForm">
                <form action="#" class="row m0">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-search"></i></span>
                        <input type="search" name="search" class="form-control" placeholder="Type & Hit Enter">
                        <span class="input-group-addon form_hide"><i class="fa fa-times"></i></span>
                    </div>
                </form>
            </div><!-- End searchForm -->
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="col-md-3 p0">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#min_navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.php"><img src="images/logo.png" alt="" class="img-fluid"></a>
                </div>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="col-md-9 p0">
                <div class="collapse navbar-collapse" id="min_navbar">
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <a href="index.php">Home</a>
                        </li>
                        <li>
                            <a class="js-scroll-trigger" href="about-us.html">About Us</a>
						 </li>
						 
						 
                        
                        <li><a class="js-scroll-trigger" href="services.html">Services</a></li>
                        <li>
                            <a class="js-scroll-trigger" href="personal-immigration.html">Personal Immigration</a>
                        </li>
						 
                        <li><a href="business-immigration.html">Business Immigration</a></li>
						<!--<li><a href="contact-us.php">Contact Us</a></li> -->
                         
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div>
        </div><!-- /.container -->
    </nav>
	<!-- End Header_Area -->
	
	
	<!--Slider Section Start-->
		<div id="slider">
			<div id="first-slider">
			  <div id="carousel-example-generic" class="carousel slide carousel-fade">
				<!-- Indicators -->
 <!-- <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
	<li data-target="#carousel-example-generic" data-slide-to="2"></li>
	<li data-target="#carousel-example-generic" data-slide-to="3"></li>
     
	 
     
  </ol> -->
					<!-- Wrapper for slides -->
					<div class="carousel-inner" role="listbox">
						<!-- Item 1 -->
						<div class="item active slide1">
							<img src="images/banner/contact.jpg" alt="">
							 
					  </div> 
						 
					  
					  
					    
						
						
						
					</div>
				  		</div>
			</div>         
		</div>
		<!--start our classes sections -->
	
	  
	
 
	

  

    <!-- About Us Area -->
    <section id="aboutus" class="about_us_area  rs-contact row">
        <div class="container">
            
            <div class="row about_row" style="padding-top:0;">
			 <div class="tittle wow fadeInUpBig " style="text-align:left;">
                 
				<h1 class="welc-text"> 
 Contact Us</h1><br>
 

                
            </div>
			
			
			<div class=" ">
                    <div class="contact-bg">
                        <div class="col-md-5 margin">
                            <div class="contact-address">
							
							<h4>Mississauga: Head Office</h4>
							<div class="address-item">
								
                                    <div class="address-icon">
                                        <i class="fa fa-map-marker"></i>                                    </div>
                                    <div class="address-text">
									<strong>Address </strong><br>

                                     1200 Derry Rd E, Mississauga, ON L5T 1B6, Canada                              </div>
                                </div>
								
								
								
								
                                <div class="address-item">
                                    <div class="address-icon">
                                        <i class="fa fa-phone"></i>                                    </div>
                                    <div class="address-text">
                                        <strong>Phone:</strong> <br>
(905) 586 0440                             </div>
                                </div>
                                <div class="address-item">
                                    <div class="address-icon">
                                        <i class="fa fa-envelope-open-o"></i>                                    </div>
                                    <div class="address-text">
                                        <strong>E-mail:</strong> <br>
                                        info@just2canada.ca                                </div>
                                </div>
								
								<br>
<br>

								
								<h4>British Columbia (Burnaby Office)</h4>
								<div class="address-item">
								
                                    <div class="address-icon">
                                        <i class="fa fa-map-marker"></i>                                    </div>
                                    <div class="address-text">
									<strong> Address </strong><br>

                                    501 – 3292 Production Way

Burnaby, <br>BC V5A 4R4, Canada                             </div>
                                </div>
								
								
								 <div class="address-item">
                                    <div class="address-icon">
                                        <i class="fa fa-phone"></i>                                    </div>
                                    <div class="address-text">
                                        <strong>Toll Free:</strong> <br>
1-866-210-9842                             </div>
                                </div>
                                <div class="address-item">
                                    <div class="address-icon">
                                        <i class="fa fa-envelope-open-o"></i>                                    </div>
                                    <div class="address-text">
                                        <strong>E-mail:</strong> <br>
                                        info@just2canada.ca                                </div>
                                </div>
								
                                
								
								
								
								
								 
								
								
								
                            </div>
                        </div>
                        <div class="margin col-md-7"> 
						 <div class="tittle wow fadeInLeft">
                <h2>Let’s Start a Conversation Today!</h2>
                
            </div>  
                            <div class="contact-form">
                                <div id="form-messages"></div>
                                    <form class="text-left   row-20" action='<?php echo $formproc->GetSelfScript(); ?>' method='post' enctype="multipart/form-data" name="contactus" id='contactus' accept-charset='UTF-8'>    
                
                <input type='hidden' name='submitted' id='submitted' value='1'/>
                
                <input type='hidden' name='<?php echo $formproc->GetFormIDInputName(); ?>' value='<?php echo $formproc->GetFormIDInputValue(); ?>'/>
                
                <input type='hidden'  class='spmhidip' name='<?php echo $formproc->GetSpamTrapInputName(); ?>' />
                
                <div><span class='error'><?php echo $formproc->GetErrorMessage(); ?></span></div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-field">
                                                    <i class="fa fa-address-book-o"></i>
                                                    <input type="text" placeholder="Name" id="name" name="name" required>
                                                </div>                              
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-field">
                                                    <i class="fa fa-envelope-o"></i>
                                                    <input type="email" placeholder="E-Mail" id="email" name="email" required>
                                                </div>                              
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-field">
                                                    <i class="fa fa-phone"></i>
                                                    <input type="text" placeholder="Phone Number" id="phone_number" name="phone" required>
                                                </div>                             
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-field">
                                                     <i class="fa fa-gear"></i>
													<select  placeholder="Service Type" id="website" name="Service Type" required>
												   <option selected="selected">Service Type</option>
												  
                                             
    <option>Working Visas</option>
   <option> Study Visas</option>
   <option> Business Visas</option>
    
    <option>Tourist Visas  </option>
	<option>Enquiry / Message from an Existing client</option>
    

                                             
													</select>
                                                </div>                              
                                            </div>
                                        </div>                        
                                        <div class="form-field">
                                            <textarea placeholder="Your Message Here" rows="4" id="message" name="message" style="margin-bottom:0;" required></textarea>
                                        </div>
                                        <div class="form-button">
										<div class="g-recaptcha" data-sitekey="6LfdOBAdAAAAAJDLvl34HfmepwpwzrE-0wh09EFg"></div>

                                            <button type="submit" class="btn button_all shine-btn" value="Submit">SUBMIT NOW</button>
                                        </div>
                                    </form>
                                </div> 
                            </div>
							
							
							<p class="clear"></p>
							<br>
<br>

<div class="col-md-6">
<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d92352.29514550265!2d-79.680533!3d43.668778!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x1d173613145f3b93!2sJust%20To%20Canada%20Immigration%20Services!5e0!3m2!1sen!2sus!4v1635159775121!5m2!1sen!2sus" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>

</div>

<div class="col-md-6">
<br>
<br>
<br>

 <div class="tittle wow fadeInLeft">
<h2>Got immigration or visa problems?</h2>
</div>

<p>Office hours: 9:00 AM – 5.00 PM (Mon-Fri) except for national holidays. We are always ready to help our clients in need. Contact us now!</p>



</div>

                        </div>               
          </div>
				
				     
			  
			  
			  
			  
			  
			  
            </div>
        </div>
    </section>
    <!-- End About Us Area -->
	
	
	
	  

     
	
	     
	
	
	
	<div class="moto-widget moto-widget-block footer row-fixed moto-bg-color2_3 moto-spacing-top-large moto-spacing-right-auto moto-spacing-bottom-large moto-spacing-left-auto" data-widget="block" data-visible-on="" data-spacing="lala" style="background-image:url(mt-demo/93200/93283/mt-content/uploads/2020/01/mt-1952-contrent-bg07.jpg);background-position:center;background-repeat:no-repeat;background-size:cover;" data-bg-position="center" data-bg-image="2020/01/mt-1952-contrent-bg07.jpg/index.html">
    
    
    <div class="container-fluid">
        <div class="row">
		
		
		<div class="col-md-3">
		
		<img src="images/logo2.png"><br>
<br>

		 <p><a href="https://www.mbot.com/" target="_blank" rel="noopener"> <img class="mbot alignnone wp-image-2688 size-full" src="images/mbot.jpg" alt="" style="float:left; width:36.5%"   /> 
		 </a></p>
		 <p><a href="https://www.capic.ca/" target="_blank" rel="noopener">
		<img class="capic alignnone wp-image-2687 size-medium" src="images/capic-logo-300x75.jpg" alt="" style="float: left;
width: 61%;
margin: 0 0 2% 2%;" width="300" height="75" /> </a></p>
		
		<p><a href="https://iccrc-crcic.ca/" target="_blank" rel="noopener"> 
		<img class="iccrc alignnone wp-image-1601 size-full" style="float: left;
width: 61%;
margin: 0 0 0 2%;" src="images/iccrc.png" alt="" width="300" height="61" /></a></p>
<div class="clearfix"></div>
<br>

<!--<a href="https://just2canada.ca/product/make-payment/" target="_blank" class="btn">Make Payment</a> -->
		</div>
		
		
		<div class="col-md-3">
		<h2>Navigation</h2>
		<ul class="list inner clearfix">
		<li><a href=" ">Home</a></li>
		<li><a href="">About Us</a></li>
		<li><a href="">Testimonials</a></li>
		<li><a href="">Services</a></li>
		<li><a href=" ">Business Immigration</a></li>
		<li><a href=" ">Personal Immigration</a></li>
		<li><a href="contact-us.php">Contact Us</a></li>
		</ul>
		</div>
		<div class="col-md-3">
		<h2>Immigration</h2>
		<ul class="list inner clearfix">
		<li><a href="">Skilled Worker</a></li>
		<li><a href="">Business Immigration</a></li>
		<li><a href="">Senior Managers</a></li>
		<li><a href="contact-us.php">Contact Us</a></li>
		</ul>
		</div>
		<div class="col-md-3">
		<h2>Useful Links</h2>
		
		<ul class="list inner clearfix">
		<li><a href="">Privacy Policy</a></li>
		<li><a href="">Refund Policy</a></li>
		<li><a href="https://ca.jooble.org/jobs-canada-jobs-for-immigrants" target="_blank" rel="nofollow">Jobs for Canadian Immigrants/Residents</a></li>
		<li><a href="https://www.canada.ca/en/immigration-refugees-citizenship/corporate/publications-manuals/operational-bulletins-manuals/updates.html" target="_blank" rel="nofollow">Latest Immigration Updates</a></li></ul>
		
		</div>
		
		
		
            <div class="moto-cell col-sm-12" data-container="container">
                
            <div id="wid_1578904989_x05fo5w3o" data-widget-id="wid_1578904989_x05fo5w3o" class="moto-widget moto-widget-social-links-extended moto-preset-default moto-align-center moto-spacing-top-auto moto-spacing-right-auto moto-spacing-bottom-medium moto-spacing-left-auto  " data-widget="social_links_extended" data-preset="default">
        <ul class="moto-widget-social-links-extended__list">
                <li class="moto-widget-social-links-extended__item moto-widget-social-links-extended__item-1">
            <a href="https://www.facebook.com/Just2Canada" class="moto-widget-social-links-extended__link" target="_blank">
                                    <span class="moto-widget-social-links-extended__icon fa"></span>
                            </a>
        </li>
                <li class="moto-widget-social-links-extended__item moto-widget-social-links-extended__item-2">
            <a href="https://twitter.com/Just2Canada" class="moto-widget-social-links-extended__link" target="_blank">
                                    <span class="moto-widget-social-links-extended__icon fa"></span>
                            </a>
        </li>
                <li class="moto-widget-social-links-extended__item moto-widget-social-links-extended__item-3">
            <a href="https://www.instagram.com/just2canada/" class="moto-widget-social-links-extended__link" target="_blank">
                                    <span class="moto-widget-social-links-extended__icon fa"><i class="fa-instagram fa"></i></span>
                            </a>
        </li>
                <li class="moto-widget-social-links-extended__item moto-widget-social-links-extended__item-4">
            <a href="https://www.linkedin.com/company/just2canada" class="moto-widget-social-links-extended__link" target="_blank">
                                    <span class="moto-widget-social-links-extended__icon fa"></span>
                            </a>
        </li>
                <li class="moto-widget-social-links-extended__item moto-widget-social-links-extended__item-5">
            <a href="https://just2canada.ca/business-immigration-assessment-questionnaire/#" class="moto-widget-social-links-extended__link" target="_blank">
                                    <span class="moto-widget-social-links-extended__icon fa"></span>
                            </a>
        </li>
            </ul>
    <style type="text/css">
                                                                    </style>
    </div><div class="moto-widget moto-widget-text moto-preset-default moto-spacing-top-auto moto-spacing-right-medium moto-spacing-bottom-auto moto-spacing-left-medium" data-widget="text" data-preset="default" data-spacing="amam" data-visible-on="-" data-animation="">
    <div class="moto-widget-text-content moto-widget-text-editable"><p class="moto-text_system_10" style="text-align: center;"><span class="moto-color5_5">©Copyright | Just To Canada 2021. All Right Reserved</span></p></div>
</div></div>
        </div>
    </div>
</div>


<!-- Mobile Icons -->

<div class="mobile-icon-box">

<a href="obtain-free-assessment.html"><div class="mobile-icons">
<i class="fa-edit fa"></i><br>

Assessments
</div></a>

<a href="book-appointment.html"><div class="mobile-icons">
<i class="fa-calendar fa"></i><br>

Appointment
</div></a>

<a href="https://wa.me/%2B14168872557?text=hello%20I%20have%20some%20question" target="_blank"><div class="mobile-icons">
<i class="fa-whatsapp fa"></i><br>

Whatsup
</div></a>
<div class="clearfix"></div>

</div>

<!-- Mobile Icons -->
	
 
		<!--[if lt IE 9]-->
    <script src="js/html5shiv.min.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
	
	 <!--<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> -->
    <script type="text/javascript" src="js/jquery.ripple.js"></script>
    <script type="text/javascript">
    $(function() {
        $('#ripple').ripple();
    })
    </script>	
         
				
	<!-- jquery latest version -->
       <!-- <script src="js/jquery.min.js"></script> -->
        <!-- bootstrap js -->
         
	
	
    <!-- jQuery JS -->
    <!--<script src="js/jquery-1.12.0.min.js"></script> -->
	
	
	<!--<script src="js/jquery.min.js"></script> -->
<script src="js/jquery.ripples.js"></script>
<script>
$(document).ready(function() {
	try {
		$('.a,.b,.c').ripples({
			resolution: 256,
			perturbance: 0.04
		});
	}
	catch (e) {
		$('.error').show().text(e);
	}
});
</script>

<style>
 
.water { position:fixed;
	 
	font-family: "Helvetica Neue","Helvetica","Arial",sans-serif; z-index:999999999;
}

.a {
	left: 0;
	top: 0;
	right: 51%;
	bottom: 51%;
	background-size: cover;
}

.b {
	left: 51%;
	top: 25.5%;
	right: 0;
	bottom: 25.5%;
	background-attachment: fixed;
}

.c {
	left: 0;
	top: 51%;
	right: 51%;
	bottom: 0;
	background-size: cover;
}

.error {
	position: fixed;
	bottom: 0;
	left: 0;
	right: 0;
	background: rgba(0,0,0,0.8);
	color: #eee;
	padding: 20px;
	display: none;
}
</style>
	
	
    <!-- Bootstrap JS -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Animate JS -->
    <script src="vendors/animate/wow.min.js"></script>
    <!-- Camera Slider -->
    <script src="vendors/camera-slider/jquery.easing.1.3.js"></script>
    <script src="vendors/camera-slider/camera.min.js"></script>
    <!-- Isotope JS -->
    <script src="vendors/isotope/imagesloaded.pkgd.min.js"></script>
    <script src="vendors/isotope/isotope.pkgd.min.js"></script>
    <!-- Progress JS -->
    <script src="vendors/Counter-Up/jquery.counterup.min.js"></script>
    <script src="vendors/Counter-Up/waypoints.min.js"></script>
    <!-- Owlcarousel JS -->
    <script src="vendors/owl_carousel/owl.carousel.min.js"></script>
    <!-- Stellar JS -->
    <script src="vendors/stellar/jquery.stellar.js"></script>
    <!-- Theme JS -->
    <script src="js/theme.js"></script>
	

	<!-- Start of LiveChat (www.livechatinc.com) code --
<script>
    window.__lc = window.__lc || {};
    window.__lc.license = 13225764;
    ;(function(n,t,c){function i(n){return e._h?e._h.apply(null,n):e._q.push(n)}var e={_q:[],_h:null,_v:"2.0",on:function(){i(["on",c.call(arguments)])},once:function(){i(["once",c.call(arguments)])},off:function(){i(["off",c.call(arguments)])},get:function(){if(!e._h)throw new Error("[LiveChatWidget] You can't use getters before load.");return i(["get",c.call(arguments)])},call:function(){i(["call",c.call(arguments)])},init:function(){var n=t.createElement("script");n.async=!0,n.type="text/javascript",n.src="https://cdn.livechatinc.com/tracking.js",t.head.appendChild(n)}};!n.__lc.asyncInit&&e.init(),n.LiveChatWidget=n.LiveChatWidget||e}(window,document,[].slice))
</script>
<noscript><a href="https://www.livechatinc.com/chat-with/13225764/" rel="nofollow">Chat with us</a>, powered by <a href="https://www.livechatinc.com/?welcome" rel="noopener nofollow" target="_blank">LiveChat</a></noscript>
<!-- End of LiveChat code -->




<?php 

/* controls Id for Form fields
1 -- textbox,
2 -- dropdown
3 -- checkbox
4 -- textarea */


$arrLablesNmandatory=[ 
                        ['label' => 'txtName' ,'mandatory' =>1,'controlid' => 1 ],
                        ['label' => 'txtTelephone' ,'mandatory' =>1,'controlid' => 1 ],
                        ['label' => 'txtEmail' ,'mandatory' =>1,'controlid' => 1 ],
                        ['label' => 'txtEventdate' ,'mandatory' =>1,'controlid' => 1 ],
                        ['label' => 'txtGuestnumber' ,'mandatory' =>1,'controlid' => 1 ],
                        ['label' => 'txtOccasion' ,'mandatory' =>1,'controlid'=>1 ],
                        ['label' => 'txtMessage' ,'mandatory'=>1,'controlid'=>4]
                        
];
    
$vformName='contactus';    
    
    
echo fClientvalidateForm($arrLablesNmandatory,$vformName);    
    


/*function for Dynamic validations*/
function fClientvalidateForm($arrLablesNmandatory,$vformName){
		$stringLabel='';
		$stringControlId='';
	
	
		foreach($arrLablesNmandatory as $data) {
			if($data['mandatory']!='') {
				$stringLabel.=$data['label'].',';
				$stringControlId.=$data['controlid'].',';
			}
		}			
		/*remove last character*/
        $stringLabel=substr($stringLabel, 0, -1);
		$stringControlId=substr($stringControlId, 0, -1);
		
		$stringJavascript='<script>
								var vString="'.$stringLabel.'";	
								var vControlIds="'.$stringControlId.'";
								var vformName="'.str_replace(" ","",$vformName).'";		

								
								$(document).ready(function(){
									
									
									var arrString=vString.split(",");
									
									var arrControlIds=vControlIds.split(",");
									
									console.log(arrControlIds);
									console.log(arrString);
									
									$("#"+vformName).submit(function(event){
										
										
										
										for(var i=0;i<arrString.length;i++) {
										
										 if(Number(arrControlIds[i])!=3 && Number(arrControlIds[i])!=5) {
											 if($("#"+arrString[i]).val()=="") {
												
												console.log(arrControlIds[i]);
												
												alert("\'"+arrString[i].substring(3,arrString[i].length)+"\' Field is Mandatory");
												return false;
											 }
											 
											}
										
										 else {
											  	if(!$("."+arrString[i]).is(":checked"))	{
													
													console.log(arrControlIds[i]);
													
													alert("\'"+arrString[i].substring(3,arrString[i].length)+"\' Field is Mandatory");
													return false;
												}

										 }											 
										
										}
										
										if($(".g-recaptcha-response").val()=="")
										{
											alert("Please check recaptcha!");
											return false;
										}
										
									}); 
									
									
									
								});
		
		
		
					      </script>';
		
	   return $stringJavascript;
	 	
}

												
												
												
?>
	 
</body>
 
</html>
