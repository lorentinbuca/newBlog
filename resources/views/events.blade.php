<!DOCTYPE html>
<html>
<head>
  <!-- Mobirise Free Bootstrap Template, https://mobirise.com -->
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content="Mobirise v2.6.1, mobirise.com">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
  <link href="css/style.css" rel='stylesheet' type='text/css' />
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>


  <link rel="shortcut icon" href="assets/images/logo.png" type="image/x-icon">
  <meta name="description" content="">
  
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:700,400&amp;subset=cyrillic,latin,greek,vietnamese">
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="animate.css/animate.min.css">
  <link rel="stylesheet" href="socicon/css/socicon.min.css">
  <link rel="stylesheet" href="mobirise/css/style.css">
  <link rel="stylesheet" href="mobirise-slider/style.css">
  <link rel="stylesheet" href="mobirise-gallery/style.css">
  <link rel="stylesheet" href="mobirise/css/mbr-additional.css" type="text/css">
  <link rel="stylesheet" href="fullcalendar/fullcalendar.css">
  <link rel="stylesheet" href="fullcalendar/fullcalendar.min.css">
</head>
</body>

<section class="mbr-navbar mbr-navbar--freeze mbr-navbar--absolute mbr-navbar--transparent mbr-navbar--sticky mbr-navbar--auto-collapse" id="menu-74">
  <div class="mbr-navbar__section mbr-section">
    <div class="mbr-section__container container">
      <div class="mbr-navbar__container">
        <div class="mbr-navbar__column mbr-navbar__column--s mbr-navbar__brand">
          <span class="mbr-navbar__brand-link mbr-brand mbr-brand--inline">
          <span class="mbr-brand__logo"><a href="#"><img class="mbr-navbar__brand-img mbr-brand__img" src="images/logo.png" alt="Mobirise"></a></span>
          </span>
          </div>
          <div class="mbr-navbar__hamburger mbr-hamburger text-white"><span class="mbr-hamburger__line"></span></div>
          <div class="mbr-navbar__column mbr-navbar__menu">
          <nav class="mbr-navbar__menu-box mbr-navbar__menu-box--inline-right">
          <div class="mbr-navbar__column">
            <ul class="mbr-navbar__items mbr-navbar__items--right mbr-buttons mbr-buttons--freeze mbr-buttons--right btn-decorator mbr-buttons--active">
                    <ul class="mbr-navbar__items mbr-navbar__items--right mbr-buttons mbr-buttons--freeze mbr-buttons--right btn-decorator mbr-buttons--active">
                      <li class="mbr-navbar__item"><a class="mbr-buttons__link btn text-white" href="/">Home</a></li>
                      <li class="mbr-navbar__item"><a class="mbr-buttons__link btn text-white" href="/about">About us</a></li>
                      <li class="mbr-navbar__item"><a class="mbr-buttons__link btn text-white" href="/events">Events</a></li>
                      <li class="mbr-navbar__item"><a data-toggle="modal" data-target="#signupModal" class="mbr-buttons__link btn text-white" href="">Login</a></li>
                    </ul>       
              </div>
          </nav>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="mbr-box mbr-section mbr-section--relative mbr-section--fixed-size mbr-section--full-height mbr-section--bg-adapted mbr-parallax-background" id="header1-76" style="background-image: url(images/iphone-926663-1920-1920x1280-94.jpg);">
  <div class="mbr-box__magnet mbr-box__magnet--sm-padding mbr-box__magnet--center-left">
      <div class="mbr-overlay" style="opacity: 0.5; background-color: rgb(41, 105, 176);"></div>
        <div class="mbr-box__container mbr-section__container container">
          <div class="mbr-box mbr-box--stretched"><div class="mbr-box__magnet mbr-box__magnet--center-left">
          <div class="row text-center"><div class=" col-sm-12">
            <div class="mbr-hero animated fadeInUp">
              <h1 class="mbr-hero__text">Community Meetup</h1>
              <p class="mbr-hero__subtext">Share with your community at O2Meet.<br></p>
            </div>
          <div class="mbr-buttons btn-inverse mbr-buttons--center"><a class="mbr-buttons__btn btn btn-lg animated fadeInUp delay btn-info" href="#">CREATE AN EVENT</a> <a class="mbr-buttons__btn btn btn-lg btn-default animated fadeInUp delay" href="#">LEARN MORE</a></div>
          </div>
          </div>
          </div>
        </div>
      </div>
    <div class="mbr-arrow mbr-arrow--floating text-center">
    <div class="mbr-section__container container">
    <a class="mbr-arrow__link" href="#features1-77"><i class="glyphicon glyphicon-menu-down"></i></a>
    </div>
    </div>
  </div>
</section>
<!-- Modal -->
<!-- Modal -->
    <div class="modal fade" id="signupModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="myModalLabel">Sign up</h4>
          </div>
          <div class="modal-body"> 
            
        <!-- Nav tabs -->
            <ul class="nav nav-tabs" role="tablist">
            <li role="presentation"><a href="#login-tab" aria-controls="login-tab" role="tab" data-toggle="tab">Login</a></li>
            <li role="presentation" class="active"><a href="#signup-tab" aria-controls="signup-tab" role="tab" data-toggle="tab">Create an account</a></li>
              
            </ul>

        <!-- Tab panes -->
             <div class="tab-content signup-form">
              <div role="tabpanel" class="tab-pane active" id="signup-tab">
              <form action="/register" method="post">
                  <input type="text" class="form-control" id="fullname" name="fullname" placeholder="Enter Name">
                  <input type="email" class="form-control" id="email" name="email" placeholder="Enter email">
                  <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                  <button type="submit" class="btn btn-info">Sign up</button>
                </form>
              </div>

             <div role="tabpanel" class="tab-pane" id="login-tab">
               <form action="/login">
                 <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                 <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                 <button type="button" class="btn btn-info">Login</button>
               <form>
             </div>
           </div>
          </div>
        </div>
      </div>
    </div>
<div class="main" id="features1-77">
  <div class="shop_top">
  <div class="container">
<div class="row ex_box">

<h3 class="m_2" style="color: black;">EVENTS</h3>
  <div class="col-md-4 team1">
    <a href="#features1-77"></a>
    <div class="img_section magnifier2">
    <a class="fancybox" href="images/e1.jpg" data-fancybox-group="gallery" title="Lorem ipsum dolor sit amet"><img src="images/e1.jpg" class="img-responsive" alt=""><span> </span>
  <div class="img_section_txt">
    
  	Duis aute irure dolor
</div>
</a></div>
</div>
  <div class="col-md-4 team1">
    <div class="img_section magnifier2">
    <a class="fancybox" href="images/e2.jpg" data-fancybox-group="gallery" title="Lorem ipsum dolor sit amet"><img src="images/e2.jpg" class="img-responsive" alt=""><span> </span>
  <div class="img_section_txt">
  	Duis aute irure dolor
</div>
</a></div>
</div>
  <div class="col-md-4 team1">
    <div class="img_section magnifier2">
    <a class="fancybox" href="images/e3.jpg" data-fancybox-group="gallery" title="Lorem ipsum dolor sit amet"><img src="images/e3.jpg" class="img-responsive" alt=""><span> </span>
  <div class="img_section_txt">
  	Duis aute irure dolor
</div>
</a></div>
</div>
</div>
  <div class="row ex_box">
    <div class="col-md-4 team1">
    <div class="img_section magnifier2">
    <a class="fancybox" href="images/e4.jpg" data-fancybox-group="gallery" title="Lorem ipsum dolor sit amet"><img src="images/e4.jpg" class="img-responsive" alt=""><span> </span>
  <div class="img_section_txt">
  	Duis aute irure dolor
</div>
</a></div>
</div>
  <div class="col-md-4 team1">
    <div class="img_section magnifier2">
    <a class="fancybox" href="images/e5.jpg" data-fancybox-group="gallery" title="Lorem ipsum dolor sit amet"><img src="images/e5.jpg" class="img-responsive" alt=""><span> </span>
    <div class="img_section_txt">
  	Duis aute irure dolor
</div>
</a></div>
</div>
  <div class="col-md-4 team1">
    <div class="img_section magnifier2">
    <a class="fancybox" href="images/e6.jpg" data-fancybox-group="gallery" title="Lorem ipsum dolor sit amet"><img src="images/e6.jpg" class="img-responsive" alt=""><span> </span>
  <div class="img_section_txt">
  	Duis aute irure dolor
</div>
</a></div>
</div>
</div>
  <div class="row ex1_box">
  <div class="col-md-4 team1">
    <div class="img_section magnifier2">
    <a class="fancybox" href="images/e7.jpg" data-fancybox-group="gallery" title="Lorem ipsum dolor sit amet"><img src="images/e7.jpg" class="img-responsive" alt=""><span> </span>
  <div class="img_section_txt">
  	Duis aute irure dolor
</div>
</a></div>
</div>
  <div class="col-md-4 team1">
    <div class="img_section magnifier2">
    <a class="fancybox" href="images/e8.jpg" data-fancybox-group="gallery" title="Lorem ipsum dolor sit amet"><img src="images/e8.jpg" class="img-responsive" alt=""><span> </span>
  <div class="img_section_txt">
  	Duis aute irure dolor
</div>
</a></div>
</div>
  <div class="col-md-4 team1">
    <div class="img_section magnifier2">
    <a class="fancybox" href="images/e9.jpg" data-fancybox-group="gallery" title="Lorem ipsum dolor sit amet"><img src="images/e9.jpg" class="img-responsive" alt=""><span> </span>
  <div class="img_section_txt">
  	Duis aute irure dolor
        </div>
        </a>
      </div>
     </div>
    </div>
   </div>
  </div>
</div>
<div class="footer">
<div class="container">
<div class="row">
<div class="col-md-3">
	<ul class="footer_box">
		<h4>Products</h4>
		<li><a href="#">Mens</a></li>
		<li><a href="#">Womens</a></li>
		<li><a href="#">Youth</a></li>
	</ul>
</div>
<div class="col-md-3">
	<ul class="footer_box">
		<h4>About</h4>
		<li><a href="#">Careers and internships</a></li>
		<li><a href="#">Sponserships</a></li>
		<li><a href="#">team</a></li>
		<li><a href="#">Catalog Request/Download</a></li>
	</ul>
</div>
<div class="col-md-3">
	<ul class="footer_box">
		<h4>Customer Support</h4>
		<li><a href="#">Contact Us</a></li>
		<li><a href="#">Shipping and Order Tracking</a></li>
		<li><a href="#">Easy Returns</a></li>
		<li><a href="#">Warranty</a></li>
		<li><a href="#">Replacement Binding Parts</a></li>
	</ul>
</div>
<div class="col-md-3">
	<ul class="footer_box">
		<h4>Newsletter</h4>
		<div class="footer_search">
  		   <form>
  			<input type="text" value="Enter your email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Enter your email';}">
  			<input type="submit" value="Go">
  		   </form>
        </div>
		<ul class="social">	
		  <li class="facebook"><a href="#"><span> </span></a></li>
		  <li class="twitter"><a href="#"><span> </span></a></li>
		  <li class="instagram"><a href="#"><span> </span></a></li>	
		  <li class="pinterest"><a href="#"><span> </span></a></li>	
		  <li class="youtube"><a href="#"><span> </span></a></li>										  				
	    </ul>
			</ul>
     </div>
    </div>	
	</div>
</div>
<section class="mbr-section mbr-section--relative mbr-section--fixed-size" id="contacts2-90"style="background-color: rgb(60, 60, 60);">
  <div class="mbr-section__container container">
    <div class="mbr-contacts mbr-contacts--wysiwyg row">
      <div class="col-sm-6">
        <figure class="mbr-figure mbr-figure--wysiwyg mbr-figure--full-width mbr-figure--no-bg">
        <div class="mbr-figure__map mbr-figure__map--short mbr-google-map">
          <p class="mbr-google-map__marker" data-coordinates="47.5978498,-122.2253175"></p>
          </div>
      </figure>
      </div>
      <div class="col-sm-6">
      <div class="row">
        <div class="col-sm-5 col-sm-offset-1">
            <p class="mbr-contacts__text"><strong>ADDRESS</strong><br>
              1122 8th St NE<br>
              Bellevue, WA 98005<br><br>
              <strong>CONTACTS</strong><br>
              Email: support@02meet.com<br>
              Phone: +1 (0) 000 0000 001<br>
              Fax: +1 (0) 000 0000 002</p>
        </div>
        <div class="col-sm-6"><p class="mbr-contacts__text">
            <strong>LINKS</strong></p>
            <ul class="mbr-contacts__list">
            <li><a href="#" class="text-gray">Community Meet Starts HERE</a></li></ul></div>
        </div>
      </div>
    </div>
  </div>
</section>

<footer class="mbr-section mbr-section--relative mbr-section--fixed-size" id="footer1-91" style="background-color: rgb(68, 68, 68);">
    <div class="mbr-section__container container">
        <div class="mbr-footer mbr-footer--wysiwyg row">
            <div class="col-sm-12">
              <p class="mbr-footer__copyright"></p><p>Copyright (c) 2015 Company Name. <a href="#" class="text-gray">License</a></p><p></p>
            </div>
        </div>
    </div>
</footer>
  <script src="jquery/jquery.min.js"></script>
  <script src="bootstrap/js/bootstrap.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js"></script>
  <script src="smooth-scroll/SmoothScroll.js"></script>
  <script src="jarallax/jarallax.js"></script>
  <script src="bootstrap-carousel-swipe/bootstrap-carousel-swipe.js"></script>
  <script src="masonry/masonry.pkgd.min.js"></script>
  <script src="imagesloaded/imagesloaded.pkgd.min.js"></script>
  <script src="social-likes/social-likes.js"></script>
  <script src="mobirise/js/script.js"></script>
  <script src="mobirise-gallery/script.js"></script>
  <script src="fullcalendar/fullcalendar.min.js"></script>
  <script src="fullcalendar/fullcalendar.js"></script>
</body>
</html>
