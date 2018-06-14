<?php 
include("db.php");
?>




<!DOCTYPE html>
<html lang="en">
<head>

	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<title>Online Test</title>
	<meta name="keywords" content="">
	<meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<!--

Template 2078 Adventure

http://www.tooplate.com/view/2078-adventure

-->
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

	<!-- Bootstrap CSS
   ================================================== -->
	<link rel="stylesheet" href="css/bootstrap.min.css">

	<!-- Animate CSS
   ================================================== -->
	<link rel="stylesheet" href="css/animate.min.css">

	<!-- Font Icons
   ================================================== -->
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/et-line-font.css">

	<!-- Nivo Lightbox CSS
   ================================================== -->
	<link rel="stylesheet" href="css/nivo-lightbox.css">
	<link rel="stylesheet" href="css/nivo_themes/default/default.css">

	<!-- Owl Carousel CSS
   ================================================== -->
   	<link rel="stylesheet" href="css/owl.theme.css">
	<link rel="stylesheet" href="css/owl.carousel.css">

	<!-- BxSlider CSS
   ================================================== -->
   	<link rel="stylesheet" href="css/bxslider.css">

   	<!-- Main CSS
   	================================================== -->
	<link rel="stylesheet" href="css/style.css">

	<!-- Google web font
   ================================================== -->
	<link href='https://fonts.googleapis.com/css?family=Raleway:700' rel='stylesheet' type='text/css'>
	
</head>

<body data-spy="scroll" data-target=".navbar-collapse" data-offset="50">


<!-- Preloader section
================================================== -->
<section  class="preloader">

	<div class="sk-rotating-plane"></div>

</section>


<!-- Navigation section
================================================== -->
<section class="navbar navbar-fixed-top custom-navbar" role="navigation">
	<div class="container">

		<div class="navbar-header">
			<button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
				<span class="icon icon-bar"></span>
				<span class="icon icon-bar"></span>
				<span class="icon icon-bar"></span>
			</button>
			<a href="#home" class="smoothScroll navbar-brand">ONLINE TEST</a>
		</div>
		<div class="collapse navbar-collapse">
			<ul class="nav navbar-nav navbar-right">
            
				<!-- <li><a href="#home" class="smoothScroll">HOME</a></li> -->
                
				<li><a href="#work" class="smoothScroll">WORK</a></li>
				<li><a href="#about" class="smoothScroll">ABOUT</a></li>
<!--				<li><a href="#team" class="smoothScroll">TEAM</a></li>-->
				<li><a href="#portfolio" class="smoothScroll">GALLERY</a></li>
				<li><a href="#plan" class="smoothScroll">PLANS</a></li>
				<li><a href="#contact" class="smoothScroll">CONTACT</a></li>
				<li><a href="" class="smoothScroll"  data-toggle="modal" data-target="#exampleModal">REGISTER</a></li>
			</ul>
		</div>

	</div>
</section>


<!-- Homepage section
================================================== -->
<div id="home">
	<div class="site-slider">
        <ul class="bxslider">
			<li>
                <img src="images/slider/slide1.jpg" alt="slider image 1">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="slider-caption">
                                <h2>Practice</h2>
                                <p class="color-white"></p>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <li>
                <img src="images/slider/slide2.jpg" alt="slider image 2">
                <div class="container caption-wrapper">
                    <div class="slider-caption">
                        <h2>Observation</h2>
                        <p class="color-white"></p>
                    </div>
                </div>
            </li>
            <li>
                <img src="images/slider/slide3.jpg" alt="slider image 3">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="slider-caption">
                                <h2>Time Efficiency</h2>
                                <p class="color-white"></p>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <li>
                <img src="images/slider/slide4.jpg" alt="slider image 4">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="slider-caption">
                                <h2>Want To Improve Then</h2>
                                <p class="color-white"></p>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <li>
                <img src="images/slider/slide5.jpg" alt="slider image 5">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="slider-caption">
                                <h2>Take A Test</h2>
                               <p class="color-white"></p>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
        </ul> <!-- /.bxslider -->
        <div class="bx-thumbnail-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div id="bx-pager">
                            <a data-slide-index="0" href=""><img src="images/slider/thumb1.jpg" alt="thumbnail 1" /></a>
                            <a data-slide-index="1" href=""><img src="images/slider/thumb2.jpg" alt="thumbnail 2" /></a>
                            <a data-slide-index="2" href=""><img src="images/slider/thumb3.jpg" alt="thumbnail 3" /></a>
                            <a data-slide-index="3" href=""><img src="images/slider/thumb4.jpg" alt="thumbnail 4" /></a>
                            <a data-slide-index="4" href=""><img src="images/slider/thumb5.jpg" alt="thumbnail 5" /></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- /.site-slider -->
</div>


<!-- Work section
================================================== -->
<section id="work" class="parallax-section">
	<div class="container">
		<div class="row">

			<!-- Section title
			================================================== -->
			<div class="col-md-offset-2 col-md-8 col-sm-offset-2 col-sm-8">
				<div class="section-title">
					<h5 class="wow bounceIn">Online Test</h5>
					<h1 class="heading">WHAT WE DO</h1>
					<hr>
					<p>Practice Makes You Perfect</p>
				</div>
			</div>


			<!-- Work Owl Carousel section
			================================================== -->
			<div id="owl-work" class="owl-carousel">

				<div class="item col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
					<i class="icon-tools medium-icon"></i>
						<h3>LEVELWISE TEST</h3>
						<hr>
						<p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
				</div>

				<div class="item col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="0.6s">
					<i class="icon-tablet medium-icon"></i>
						<h3>MCQ</h3>
						<hr>
						<p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
				</div>

				<div class="item col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="0.9s">
					<i class="icon-bike medium-icon"></i>
						<h3>QUICK RESULTS</h3>
						<hr>
						<p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
				</div>

				<div class="item col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="0.9s">
					<i class="icon-flag medium-icon"></i>
						<h3>EXPLORE REPORTS</h3>
						<hr>
						<p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
				</div>

				<div class="item col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="0.9s">
					<i class="icon-basket medium-icon"></i>
						<h3>IMPROVE YOURSELF</h3>
						<hr>
						<p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
				</div>

			</div>

		</div>
	</div>
</section>


<!-- About section
================================================== -->
<section id="about" class="parallax-section">
	<div class="container">
		<div class="row">

			<!-- Section title
			================================================== -->
			<div class="col-md-offset-2 col-md-8 col-sm-offset-2 col-sm-8">
				<div class="section-title">
					<h5 class="wow bounceIn">ACTIVE PEOPLE</h5>
					<h1 class="heading color-white">WHO WE ARE</h1>
					<hr>
					<p class="color-white">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteu sunt in culpa qui officia deserunt.</p>
				</div>
			</div>

			<div class="col-md-6 col-sm-12">
				<h3 class="color-white">OUR STORY</h3>
				<h2>ONLINE TEST</h2>
				<p class="color-white">Phasellus odio lacus, posuere vel sodales a, facilisis vitae ligula. Pellentesque leo ligula, lobortis ut sapien blandit, convallis pulvinar nisi. Proin tempor congue nibh. Nam non maximus metus, nec tincidunt nulla.</p>
				<p class="color-white">Excepteu sunt in culpa qui officia deserunt mollit anim id. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
			</div>

			<div class="col-md-6 col-sm-12">
				<h2 class="mobile-top">WHY CHOOSE US?</h2>
				<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">

  					<div class="panel panel-default">
   						<div class="panel-heading" role="tab" id="headingOne">
      						<h4 class="panel-title">
        						<a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          							Very Quick Response
        						</a>
      						</h4>
    					</div>
   						<div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
      						<div class="panel-body">
        						<p>Phasellus odio lacus, posuere vel sodales a, facilisis vitae ligula. Pellentesque leo ligula, lobortis ut sapien blandit, convallis pulvinar nisi. Proin tempor congue nibh. Nam non maximus metus, nec tincidunt nulla.</p>
      						</div>
   						 </div>
 					 </div>

    				<div class="panel panel-default">
   						<div class="panel-heading" role="tab" id="headingTwo">
      						<h4 class="panel-title">
        						<a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
          							High Quality Team
        						</a>
      						</h4>
    					</div>
   						<div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
      						<div class="panel-body">
        						<p>Nullam vehicula tincidunt ultrices. Curabitur id magna velit. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Ut pretium tortor ultrices ligula dictum placerat. Donec eget augue sapien. Curabitur vel orci magna. Sed id eros consequat nibh congue euismod.</p>
      						</div>
   						 </div>
 					 </div>

 					 <div class="panel panel-default">
   						<div class="panel-heading" role="tab" id="headingThree">
      						<h4 class="panel-title">
        						<a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
          							Special Awards
        						</a>
      						</h4>
    					</div>
   						<div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
      						<div class="panel-body">
        						<p>Morbi pellentesque nisl at sapien congue facilisis. Proin consequat pharetra hendrerit. Aliquam vulputate, ligula ut pellentesque molestie, dolor nisi semper augue, sit amet porta risus sem non sapien. Cras vel pulvinar sapien, in consequat purus. Aliquam at varius augue.</p>
      						</div>
   						 </div>
 					 </div>

 				 </div>
			</div>

			<div class="col-md-3 col-sm-3 col-xs-6">
				<div class="about-fact border-right">
					<span>3200</span>
					<h4>REGISTRTIONS</h4>
				</div>
			</div>
            
            <div class="col-md-3 col-sm-3 col-xs-6">
				<div class="about-fact border-right">
					<span>128</span>
					<h4>TOPPERS</h4>
				</div>
			</div>
            
			<div class="col-md-3 col-sm-3 col-xs-6">
				<div class="about-fact border-right">
					<span>16</span>
					<h4>AWARDS</h4>
				</div>
			</div>

			

			<div class="col-md-3 col-sm-3 col-xs-6">
				<div class="about-fact">
					<span>1000</span>
					<h4>TEST</h4>
				</div>
			</div>

		</div>
	</div>
</section>


<!-- team section
================================================== -->
<!--
<section id="team" class="parallax-section">
	<div class="container">
		<div class="row">
-->

			<!-- Section title
			================================================== -->
<!--
			<div class="col-md-offset-2 col-md-8 col-sm-offset-2 col-sm-8">
				<div class="section-title">
					<h5 class="wow bounceIn">WE ARE READY</h5>
					<h1 class="heading">OUR TEAM</h1>
					<hr>
					<p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteu sunt in culpa qui officia deserunt.</p>
				</div>
			</div>

			<div class="col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="0.9s">
				<div class="team-wrapper">
					<img src="images/team1.jpg" class="img-responsive" alt="team img">
						<div class="team-des">
							<h4>George Chan</h4>
							<h3>Trip Planner</h3>
							<ul class="social-icon">
								<li><a href="#" class="fa fa-facebook wow fadeIn" data-wow-delay="0.3s"></a></li>
								<li><a href="#" class="fa fa-twitter wow fadeIn" data-wow-delay="0.6s"></a></li>
								<li><a href="#" class="fa fa-dribbble wow fadeIn" data-wow-delay="0.6s"></a></li>
								<li><a href="#" class="fa fa-behance wow fadeIn" data-wow-delay="0.6"></a></li>
							</ul>
						</div>
				</div>
			</div>

			<div class="col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="1.3s">
				<div class="team-wrapper">
					<img src="images/team2.jpg" class="img-responsive" alt="team img">
						<div class="team-des">
							<h4>Kitty Sandar</h4>
							<h3>Trip Manager</h3>
							<ul class="social-icon">
								<li><a href="#" class="fa fa-facebook wow fadeIn" data-wow-delay="0.3s"></a></li>
								<li><a href="#" class="fa fa-twitter wow fadeIn" data-wow-delay="0.6s"></a></li>
								<li><a href="#" class="fa fa-dribbble wow fadeIn" data-wow-delay="0.6s"></a></li>
								<li><a href="#" class="fa fa-behance wow fadeIn" data-wow-delay="0.6"></a></li>
							</ul>
						</div>
				</div>
			</div>

			<div class="col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="1.6s">
				<div class="team-wrapper">
					<img src="images/team3.jpg" class="img-responsive" alt="team img">
						<div class="team-des">
							<h4>Johnny Lynn</h4>
							<h3>Location Explorer</h3>
							<ul class="social-icon">
								<li><a href="#" class="fa fa-facebook wow fadeIn" data-wow-delay="0.3s"></a></li>
								<li><a href="#" class="fa fa-twitter wow fadeIn" data-wow-delay="0.6s"></a></li>
								<li><a href="#" class="fa fa-dribbble wow fadeIn" data-wow-delay="0.6s"></a></li>
								<li><a href="#" class="fa fa-behance wow fadeIn" data-wow-delay="0.6"></a></li>
							</ul>
						</div>
				</div>
			</div>

		</div>
	</div>
</section>
-->


<!-- Portfolio section
================================================== -->
<section id="portfolio" class="parallax-section">
	<div class="container">
		<div class="row">

			<!-- Section title
			================================================== -->
			<div class="col-md-offset-2 col-md-8 col-sm-offset-2 col-sm-8">
				<div class="section-title">
					<h5 class="wow bounceIn">WE ARE DELIGENT</h5>
					<h1 class="heading">SHOWCASE</h1>
					<hr>
					<p>Pellentesque mollis purus ipsum. Fusce tristique ante et est placerat dignissim. Curabitur tincidunt risus non dui vulputate tincidunt.</p>
				</div>
			</div>

            <div class="col-md-4 col-sm-6">
				<div class="grid">
              		<figure class="effect-zoe">
						<img src="images/portfolio-img1.jpg" alt="portfolio img"/>
							<figcaption>
								<h2>Mobile App</h2>
								<p class="icon-links">
									<a href="images/portfolio-img1.jpg" data-lightbox-gallery="portfolio-gallery"><span class="icon icon-attachment"></span></a>
								</p>
							</figcaption>			
					</figure>
				</div>
            </div>   

            <div class="col-md-4 col-sm-6">
				<div class="grid">
              		<figure class="effect-zoe">
						<img src="images/portfolio-img2.jpg" alt="portfolio img"/>
							<figcaption>
								<h2>Trip Planning</h2>
								<p class="icon-links">
									<a href="images/portfolio-img2.jpg" data-lightbox-gallery="portfolio-gallery"><span class="icon icon-attachment"></span></a>
								</p>
							</figcaption>			
					</figure>
				</div>
            </div> 

            <div class="col-md-4 col-sm-6">
				<div class="grid">
              		<figure class="effect-zoe">
						<img src="images/portfolio-img3.jpg" alt="portfolio img"/>
							<figcaption>
								<h2>Scheduling</h2>
								<p class="icon-links">
									<a href="images/portfolio-img3.jpg" data-lightbox-gallery="portfolio-gallery"><span class="icon icon-attachment"></span></a>
								</p>
							</figcaption>			
					</figure>
				</div>
            </div> 
          	
          	<div class="col-md-4 col-sm-6">
				<div class="grid">
              		<figure class="effect-zoe">
						<img src="images/portfolio-img4.jpg" alt="portfolio img"/>
							<figcaption>
								<h2>Arranging</h2>
								<p class="icon-links">
									<a href="images/portfolio-img4.jpg" data-lightbox-gallery="portfolio-gallery"><span class="icon icon-attachment"></span></a>
								</p>
							</figcaption>			
					</figure>
				</div>
            </div> 

            <div class="col-md-4 col-sm-6">
				<div class="grid">
              		<figure class="effect-zoe">
						<img src="images/portfolio-img5.jpg" alt="portfolio img"/>
							<figcaption>
								<h2>Organizing</h2>
								<p class="icon-links">
									<a href="images/portfolio-img5.jpg" data-lightbox-gallery="portfolio-gallery"><span class="icon icon-attachment"></span></a>
								</p>
							</figcaption>			
					</figure>
				</div>
            </div> 

            <div class="col-md-4 col-sm-6">
				<div class="grid">
              		<figure class="effect-zoe">
						<img src="images/portfolio-img6.jpg" alt="portfolio img"/>
							<figcaption>
								<h2>Grouping</h2>
								<p class="icon-links">
									<a href="images/portfolio-img6.jpg" data-lightbox-gallery="portfolio-gallery"><span class="icon icon-attachment"></span></a>
								</p>
							</figcaption>			
					</figure>
				</div>
            </div> 

            <!-- Portfolio bottom section
			================================================== -->
            <div class="col-md-offset-2 col-md-8 col-sm-12">
            	<div class="portfolio-bottom">
            		<h2>INTERESTED?</h2>
					<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet. Lorem ipsum dolor sit 	amet.</p>
					<a href="#plan" class="smoothScroll btn btn-default">LET'S GO!</a>
            	</div>
            </div>    

		</div>
	</div>
</section>		


<!-- Plan section
================================================== -->
<section id="plan" class="parallax-section">
	<div class="container">
		<div class="row">

			<!-- Section title
			================================================== -->
			<div class="col-md-offset-2 col-md-8 col-sm-offset-2 col-sm-8 wow fadeInUp">
				<div class="section-title">
					<h5 class="wow bounceIn">UNIQUE TEST</h5>
					<h1 class="heading color-white">TEST LEVEL PLANS</h1>
					<hr>
					<p class="color-white">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteu sunt in culpa qui officia deserunt.</p>
				</div>
			</div>

			<div class="col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
				<div class="plan">
					<h2 class="plan-title">EASY</h2>
					<div class="plan-price">
						<h1 class="plan-price-title"> &#x20B9; 50 / <small>Test</small></h1>
					</div>
					<ul class="plan-list">
<!--
						<li>4 days 3 nights</li>
						<li>Explore Forest</li>
						<li>Visit Waterfalls</li>
						<li>Group of 10 people</li>
-->
					</ul>
					<div class="plan-button">
						<button class="btn btn-default">CHOOSE PLAN</button>
					</div>
				</div>
			</div>

			<div class="col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="0.6s">
				<div class="plan">
					<h2 class="plan-title">HARD</h2>
					<div class="plan-price">
						<h1 class="plan-price-title"> &#x20B9; 80 / <small>Test</small></h1>
					</div>
					<ul class="plan-list">
<!--
						<li>8 days 7 nights</li>
						<li>Explore Mountains</li>
						<li>Touring Villages</li>
						<li>Group of 15 people</li>
-->
					</ul>
					<div class="plan-button">
						<button class="btn btn-default">CHOOSE PLAN</button>
					</div>
				</div>
			</div>

			<div class="col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="0.9s">
				<div class="plan">
					<h2 class="plan-title">PRO</h2>
					<div class="plan-price">
						<h1 class="plan-price-title"> &#x20B9; 100 / <small>Test</small></h1>
					</div>
					<ul class="plan-list">
<!--
						<li>12 days 11 nights</li>
						<li>Multiple Cities</li>
						<li>Unique Experiences</li>
						<li>Group of 20 people</li>
-->
					</ul>
					<div class="plan-button">
						<button class="btn btn-default">CHOOSE PLAN</button>
					</div>
				</div>
			</div>

		</div>
	</div>
</section>


<!-- Contact section
================================================== -->
<section id="contact" class="parallax-section">
	<div class="container">
		<div class="row">

			<!-- Section title
			================================================== -->
			<div class="col-md-offset-2 col-md-8 col-sm-offset-2 col-sm-8">
				<div class="section-title">
					<h5 class="wow bounceIn">PLAN YOUR TEST</h5>
					<h1 class="heading">CONTACT US</h1>
					<hr>
					<p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla. Excepteu sunt in culpa qui officia deserunt mollit.</p>
				</div>
			</div>

			<!-- Contact form section
			================================================== -->
			<div class="col-md-offset-1 col-md-10 col-sm-12">
				<form action="#" method="post" class="wow fadeInUp" data-wow-delay="0.6s">
					<div class="col-md-4 col-sm-6">
						<input type="text" class="form-control" placeholder="Name" name="name">
					</div>
					<div class="col-md-4 col-sm-6">
						<input type="email" class="form-control" placeholder="Email" name="email">
					</div>
					<div class="col-md-4 col-sm-12">
						<input type="text" class="form-control" placeholder="Subject" name="subject">
					</div>
					<div class="col-md-12 col-sm-12">
						<textarea class="form-control" placeholder="Message" rows="7" name"message"></textarea>
					</div>
					<div class="col-md-offset-2 col-md-8 col-sm-offset-2 col-sm-8">
						<input type="submit" class="form-control" value="SHOOT MESSAGE">
					</div>
				</form>
			</div>

			<!-- Contact detail section
			================================================== -->
			<div class="contact-detail col-md-12 col-sm-12">
				<div class="col-md-6 col-sm-6">
					<h3><i class="icon-envelope medium-icon wow bounceIn" data-wow-delay="0.6s"></i> EMAIL</h3>
					<p>contact@company.com</p>
				</div>
				<div class="col-md-6 col-sm-6">
					<h3><i class="icon-phone medium-icon wow bounceIn" data-wow-delay="0.6s"></i> PHONES</h3>
					<p>030-030-0330 | 070-070-7777</p>
				</div>
			</div>

		</div>
	</div>
</section>


<!-- Footer section
================================================== -->
<footer>
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-sm-12">

				<h2 class="wow bounceIn">ONLINE TEST</h2>
				<ul class="social-icon">
					<li><a href="#" class="fa fa-facebook wow fadeIn" data-wow-delay="0.3s"></a></li>
					<li><a href="#" class="fa fa-twitter wow fadeIn" data-wow-delay="0.6s"></a></li>
					<li><a href="#" class="fa fa-dribbble wow fadeIn" data-wow-delay="0.9s"></a></li>
					<li><a href="#" class="fa fa-behance wow fadeIn" data-wow-delay="1s"></a></li>
					<li><a href="#" class="fa fa-github wow fadeIn" data-wow-delay="1.3s"></a></li>
					<li><a href="#" class="fa fa-tumblr wow fadeIn" data-wow-delay="1.6s"></a></li>
				</ul>
				<p>Copyright &copy; 2018 ONLINE TEST
                
                | Design: <a rel="nofollow" href="http://www.tooplate.com/free-templates" target="_parent">COEP</a></p>

			</div>
		</div>
	</div>
</footer>
<!-- Modal -->
    <form id="Register1">
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <center><h5 class="modal-title" id="exampleModalLabel">Register</h5></center>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!-- <form  action="register.php"  method="post">
                    <div class="input-group">
                      <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                      <input id="name" type="text" class="form-control" name="name" placeholder="Full Name">
                     </div>
                      <br/>
                    <div class="input-group">
                      <span class="input-group-addon"><i class="glyphicon glyphicon-phone"></i></span>
                      <input id="mobile" type="text" class="form-control" name="mobile" placeholder="Mobile">
                      </div>
                      <br/>
                    <div class="input-group">
                      <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                      <input id="email" type="email" class="form-control" name="email" placeholder="Email">
                    </div>
                    <br/>
                    <div class="input-group">
                      <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                      <input id="password" type="password" class="form-control" name="password" placeholder="Password">
                    </div>
                    <br>
                    <div class="input-group">
                      <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                      <input id="cpassword" type="password" class="form-control" name="cpassword" placeholder="Confirm Password">
                    </div>
                    <br>
                     <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" name="register" class="btn btn-primary"> Save </button>
                    </div>
                </form>-->
				
				 <center> 


                
                <fieldset>
               
                <div class="form-group">
                <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                <input type="text" class="form-control" name="fname" placeholder="Full Name">
                </div>
                </div> 
  
                <div class="form-group">
                <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-phone"></i></span>
                <input type="text" class="form-control" name="mobile" placeholder="Contact No">
                </div>
                </div> 
            
             
                <div class="form-group">
                <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                <input id="email" type="email" class="form-control" name="email" placeholder="Email">
                </div>
                </div> 
               
               
                <div class="form-group">
                <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                <select class="form-control" name="gender">
                <option disabled>--Gender--</option>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
                </select>
                </div>
                </div> 
                
                <div class="form-group">
                <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                <input type="text" class="form-control" name="password" placeholder="Password">
                </div>
                </div> 
               
                <div class="form-group">
                <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                <input type="email" class="form-control" name="cpassword" placeholder="Confirm Password">
                </div>
                </div> 
                
                </fieldset>
               
                </center>
            </div>
            <div class="modal-footer" >
           <center> 
            <button type="submit" name="register" class="btn btn-primary">Submit</button>
                 <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancle</button>
               </center>
            </div>
                
        </div>
    </div>
</div>
           
 </form> 
<!-- Javascript 
================================================== -->
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/smoothscroll.js"></script>
<script src="js/nivo-lightbox.min.js"></script>
<script src="js/jquery.easing-1.3.js"></script>
<script src="js/plugins.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/jquery.parallax.js"></script>
<script src="js/wow.min.js"></script>
<script src="js/custom.js"></script>

</body>
</html>