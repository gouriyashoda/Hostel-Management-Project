<!DOCTYPE html>
<html lang="en">
<head>
<title>Hostel Management </title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords"/>
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
		
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" /><!-- bootstrap css -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />

<link href="css/font-awesome.css" rel="stylesheet"> <!-- fontawesome css -->
<!--fonts-->
<link href="//fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet" type="text/css">
<link href="//fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&amp;subset=latin-ext,vietnamese" rel="stylesheet">
<!--//fonts-->

</head>
<body>

	<!-- header -->
	<div class="header" id="home">
		<div class="content white">
			<nav class="navbar navbar-default" role="navigation">
				<div class="container">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
						<a class="navbar-brand" href="index.html">
							<h1>Hostel Management System</h1>
					  </a>
					</div>
                    <br />   <br />					<!--/.navbar-header-->
					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
						<nav>
							<ul class="nav navbar-nav">
								<li><a href="mess_manager_home.php" class="active">Home</a></li>
								<li><a href="menu.php">mess menu</a></li>
                                <li><a href="add_attendence.php">add attendance </a></li>
								<li><a href="mess_bill.php">generate mess bill</a></li>
								<li><a href="enroll_student_view.php">view students</a></li>
								<li><a href="room_details.php">room details</a></li>
                                <li><a href="room_request.php">room request</a></li>	
                                <li><a href="feedback.php">view feedback</a></li>
								<li><a href="guest_details.php.php">update guest details</a></li>
								<li><a href="index.html">logout</a></li>
                                						</ul>
						</nav>
					</div>
					<!--/.navbar-collapse-->
					<!--/.navbar-->
				</div>
			</nav>
		</div>
	</div>
	<!-- //header -->

	<!-- banner slider -->
	<div id="myCarousel" class="carousel slide" data-ride="carousel">
		<!-- Indicators -->
		<ol class="carousel-indicators">
			<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
			<li data-target="#myCarousel" data-slide-to="1" class=""></li>
			<li data-target="#myCarousel" data-slide-to="2" class=""></li>
			<li data-target="#myCarousel" data-slide-to="3" class=""></li>
		</ol>
		<div class="carousel-inner" role="listbox">
			<div class="item active">
				<div class="container">
					<div class="carousel-caption">
						<div class="col-md-6 slider_left">
							<h2>WELCOME TO OUR HOSTEL.</h2>
						  <p>&nbsp;</p>
							</div>
						<div class="col-md-6 slider_right">
							<img src="h1.png" alt="cake1" height="500"/>	
                        </div>
					  <div class="clearfix"></div>
					</div>
				</div>
			</div>
			<div class="item item2">
				<div class="container">
					<div class="carousel-caption">
						<div class="col-md-6 slider_left">
							<h3>WE ARE HERE FOR YOU.</h3>
						</div>
						<div class="col-md-6 slider_right">
							<img src="h2.png" alt="cake1" height="500"/>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
			</div>
			<div class="item item3">
				<div class="container">
					<div class="carousel-caption">
						<div class="col-md-6 slider_left">
							<h3>OUR HOSTEL HAS BEST FACILITIES.</span></h3>
						</div>
						<div class="col-md-6 slider_right">
							<img src="h5.jpg" alt="cake1" height="500"/>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
			</div>
			<div class="item item4">
				<div class="container">
					<div class="carousel-caption">
						<div class="col-md-6 slider_left">
							<h3>JOIN US</h3>
						</div>
						<div class="col-md-6 slider_right">
							<img src="co1.jpg" alt="cake1" height="500"/>
						</div>
						<div class="clearfix"></div>
					</div>
					</div>
			</div>
		</div>
		<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
			<span class="fa fa-chevron-left" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
			<span class="fa fa-chevron-right" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		</a>
		<!-- The Modal -->
	</div>
	<!-- //banner slider -->

<!-- welcome -->
<div class="welcome"> 
	<div class="container">
		<div class="col-md-6 welcome-w3lright">
			<div class="video-grid-single-page-agileits">
				<div data-video="XWIxzq4SxGQ" id="video"> <img src="h1.png" alt="" class="img-responsive" /> </div>
		  </div>
		</div> 
		<div class="col-md-6 welcome_left">
			<h3 class="agileits-title">Welcome To Hostel </h3>
		  <h4>JSS Ladies Hostel </h4>
		  <p>The hostel was started in the year 1998 to provide accommodation to the student of JSS SMI UG and PG Studies Vidyagiri,Dharwad.
		    The hostel  is located at the convenient location from the city,our hostel provides the best possible comfort  needed for the students at affordable prices.
		    The hostel was grown day by day from it inception.
		    Total rooms  available in the hostel are 190 with a total capacity of  468.
		    Our hostel has best security and strict rules</p>
		</div>
		<div class="clearfix"> </div>
	</div> 
</div>
<!-- //welcome -->

<!-- /about -->
	<div class="about">
		<div class="container">
			<div class="wthree_head_section">
				<h3 class="heading">Know More About Our Hostel</h3>
		  </div>
			<div class="agile_wthree_inner_grids">
			  <div class="clearfix"></div>
			</div>
	  </div>
	</div>
<!--//about -->
	
<!-- Popular cakes -->
<!-- //Popular cakes -->

<!-- team -->
<div class="team" id="team">
	   <div class="agile_dot_info two">
		<div class="container">
		<h3 class="heading">Our Staff</h3>
			<div class="agileits_team_grids">
				<div class="col-md-3">
				<div class="agileits_team_grid">
					<div class="agileits_team_grid_figure">
						<img src="w2.jpg" alt=" " class="img-responsive" />					</div>
				  <h4>Preeti</h4>
					<div class="social-icon">
						<a href="#" class="social-button facebook"><i class="fa fa-facebook"></i></a> 
						<a href="#" class="social-button twitter"><i class="fa fa-twitter"></i></a>
						<a href="#" class="social-button google"><i class="fa fa-google-plus"></i></a> 
						<a href="#" class="social-button dribbble"><i class="fa fa-dribbble"></i></a> 
					</div>
				</div>
				</div>
				<div class="col-md-3">
				<div class="agileits_team_grid">
					<div class="agileits_team_grid_figure">
						<img src="w3.jpg" alt=" " class="img-responsive" />					</div>
					<h4>Anusha</h4>
			  <div class="social-icon">
						<a href="#" class="social-button facebook"><i class="fa fa-facebook"></i></a> 
						<a href="#" class="social-button twitter"><i class="fa fa-twitter"></i></a>
						<a href="#" class="social-button google"><i class="fa fa-google-plus"></i></a> 
						<a href="#" class="social-button dribbble"><i class="fa fa-dribbble"></i></a> 
					</div>
				</div>
				</div>
				<div class="col-md-3">
				<div class="agileits_team_grid">
					<div class="agileits_team_grid_figure">
						<img src="w1.jpg" alt=" " class="img-responsive" />					</div>
					<h4>Reka</h4>
			  <div class="social-icon">
						<a href="#" class="social-button facebook"><i class="fa fa-facebook"></i></a> 
						<a href="#" class="social-button twitter"><i class="fa fa-twitter"></i></a>
						<a href="#" class="social-button google"><i class="fa fa-google-plus"></i></a> 
						<a href="#" class="social-button dribbble"><i class="fa fa-dribbble"></i></a> 
					</div>
				</div>
				</div>
				<div class="col-md-3">
				<div class="agileits_team_grid">
					<div class="agileits_team_grid_figure">
						<img src="w4.jpg" alt=" " class="img-responsive" />					</div>
					<h4>Soumya</h4>
			  <div class="social-icon">
						<a href="#" class="social-button facebook"><i class="fa fa-facebook"></i></a> 
						<a href="#" class="social-button twitter"><i class="fa fa-twitter"></i></a>
						<a href="#" class="social-button google"><i class="fa fa-google-plus"></i></a> 
						<a href="#" class="social-button dribbble"><i class="fa fa-dribbble"></i></a> 
					</div>
				</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
</div>
<!-- //team -->

<!-- testimonials -->
	<div class="testimonials">
		<div class="container">
		<h3 class="heading">Our Hostelist reviews</h3>
	  <div class="testimonials-grids">
				<div class="wmuSlider example1 animated wow slideInUp" data-wow-delay=".5s">
					<div class="wmuSliderWrapper">
						<article style="position: absolute; width: 100%; opacity: 0;"> 
							<div class="banner-wrap">
								<div class="testimonials-grid">
									<div class="testimonials-grid-left">
										<img src="s2.jpg" alt=" " class="img-responsive" />
									</div>
									<div class="testimonials-grid-right">
										<p>I stayed here for 4 years ,hostel facilities are good and high security is provided.   </p>
										<h4>Savitha</h4>
									</div>
									<div class="clearfix"> </div>
								</div>
							</div>
		        </article>
						<article style="position: absolute; width: 100%; opacity: 0;"> 
							<div class="banner-wrap">
								<div class="testimonials-grid">
									<div class="testimonials-grid-left">
										<img src="s3.jpg" alt=" " class="img-responsive" />
									</div>
									<div class="testimonials-grid-right">
										<p>I found such a beautiful hostel in this univercity,they provide good food.</p>
										<h4>Vidya</h4>
									</div>
									<div class="clearfix"> </div>
								</div>
							</div>
		        </article>
						<article style="position: absolute; width: 100%; opacity: 0;"> 
							<div class="banner-wrap">
								<div class="testimonials-grid">
									<div class="testimonials-grid-left">
										<img src="s3.jpg" alt=" " class="img-responsive" />
									</div>
									<div class="testimonials-grid-right">
										<p>Hostel has good environment,managers take good care of us,i feel happy.</p>
										<h4>Rukumini</h4>
									</div>
									<div class="clearfix"> </div>
								</div>
							</div>
		        </article>
						<article style="position: absolute; width: 100%; opacity: 0;"> 
							<div class="banner-wrap">
								<div class="testimonials-grid">
									<div class="testimonials-grid-left">
										<img src="s1.jpg" alt=" " class="img-responsive" />									</div>
									<div class="testimonials-grid-right">
										<p>Hostel provides all facilities for students ,they even conduct many types of events.</p>
										<h4>Bhagya</h4>
									</div>
								  <div class="clearfix"> </div>
								</div>
							</div>
						</article>
					</div>
				</div>
			</div>
		</div>
	</div>
<!-- //testimonials -->

<!-- subscribe -->
<div class="subscribe"></div>
<!-- //subscribe -->

<!-- footer -->
	<div class="footer">
		<div class="container">
			<div class="w3_agile_footer_grids">
			  <div class="clearfix">
			    <div class="container">
                  <div class="w3_agile_footer_grids">
                    <ul class="col-md-3 col-xs-6 w3_agile_footer_grid right">
                      <h3>Hotsel Opening and Closing Hours</h3>
                      <li><span class="fa fa-clock-o" aria-hidden="true"></span>Monday <span>6:00 - 7:30</span></li>
                      <li><span class="fa fa-clock-o" aria-hidden="true"></span>Tuesday <span>6:00 - 7:30</span></li>
                      <li><span class="fa fa-clock-o" aria-hidden="true"></span>Wednesday <span>6:00 - 7:30</span></li>
                      <li><span class="fa fa-clock-o" aria-hidden="true"></span>Thursday <span>6:00 - 7:30</span></li>
                      <li><span class="fa fa-clock-o" aria-hidden="true"></span>Friday <span>6:00 - 7:30</span></li>
                      <li><span class="fa fa-clock-o" aria-hidden="true"></span>Saturday <span>6:00 - 7:30</span></li>
                      <li><span class="fa fa-clock-o" aria-hidden="true"></span>Sunday <span>6:00-8.30PM</span></li>
                    </ul>
                    <div class="col-md-3 col-xs-6 w3ls_address_mail_footer_grids w3_agile_footer_grid">
                      <h3>Contact Us</h3>
                      <div class="w3ls_footer_grid_left">
                        <div class="w3l-icon"> <span class="fa fa-map-marker" aria-hidden="true"></span> </div>
                        <p><strong>VidyaGiri Dharwad</strong>, <span>580004.</span> </p>
                        <div class="clearfix"></div>
                      </div>
                      <div class="w3ls_footer_grid_left">
                        <div class="w3l-icon"> <span class="fa fa-phone" aria-hidden="true"></span> </div>
                        <p>0836-222980 <span>0836-2344567</span> </p>
                        <div class="clearfix"></div>
                      </div>
                      <div class="w3ls_footer_grid_left">
                        <div class="w3l-icon"> <span class="fa fa-envelope-o" aria-hidden="true"></span> </div>
                        <p> <a href="mailto:info@example.com">jssdwd@gmail.com</a> <span> <a href="mailto:info@example.com"></a> </span> </p>
                        <div class="clearfix"></div>
                      </div>
                    </div>
                    <div class="agileinfo_copyright">
                      <p>© 2022 Hostel Management System. All Rights Reserved </p>
                    </div>
                  </div>
		        </div>
			    <!-- //footer -->
                <!-- Supportive js -->
                <script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
                <!-- //Supportive js -->
                <!-- banner bottom video script -->
                <script src="js/simplePlayer.js"></script>
                <script>
				$("document").ready(function() {
					$("#video").simplePlayer();
				});
                </script>
                <!-- //banner bottom video script -->
                <!-- testimonials plugin script -->
                <script src="js/jquery.wmuSlider.js"></script>
                <script>
		$('.example1').wmuSlider();         
	            </script>
                <!-- testimonials plugin script -->
                <!-- smooth scrolling js -->
                <script src="js/SmoothScroll.min.js"></script>
                <!-- smooth scrolling js -->
                <!-- start-smooth-scrolling -->
                <script type="text/javascript" src="js/move-top.js"></script>
                <script type="text/javascript" src="js/easing.js"></script>
                <script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
                </script>
                <!-- here starts scrolling icon -->
                <script type="text/javascript">
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/
								
			$().UItoTop({ easingType: 'easeOutQuart' });
								
			});
	            </script>
                <!-- //here ends scrolling icon -->
                <!-- move to top-js-files -->
                <script type="text/javascript" src="js/move-top.js"></script>
                <script type="text/javascript" src="js/easing.js"></script>
</div>
		  </div>
			
		</div>
	</div>
<!-- //footer -->

<!-- Supportive js -->
<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
<!-- //Supportive js -->

<!-- banner bottom video script -->
<script src="js/simplePlayer.js"></script>
			<script>
				$("document").ready(function() {
					$("#video").simplePlayer();
				});
</script>
<!-- //banner bottom video script -->

<!-- testimonials plugin script -->
	<script src="js/jquery.wmuSlider.js"></script> 
	<script>
		$('.example1').wmuSlider();         
	</script> 
<!-- testimonials plugin script -->

<!-- smooth scrolling js -->
<script src="js/SmoothScroll.min.js"></script>
<!-- smooth scrolling js -->

<!-- start-smooth-scrolling -->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>

	<!-- here starts scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/
								
			$().UItoTop({ easingType: 'easeOutQuart' });
								
			});
	</script>
	<!-- //here ends scrolling icon -->

<!-- move to top-js-files -->
	<script type="text/javascript" src="js/move-top.js"></script>
	<script type="text/javascript" src="js/easing.js"></script>
<!-- //move to top-js-files -->

<script type="text/javascript" src="js/bootstrap.js"></script><!-- bootstrap js file -->

</body>
</html>