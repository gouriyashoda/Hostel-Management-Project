<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="en">
<head>
<title>Hostel Management</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content=" Bakery In Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
		
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" /><!-- bootstrap css -->
<link href="css/services.css" rel="stylesheet" type="text/css" media="all" /><!-- services css -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />

<link href="css/font-awesome.css" rel="stylesheet"><!-- fontawesome css --> 
<!--fonts-->
<link href="//fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet" type="text/css">
<link href="//fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&amp;subset=latin-ext,vietnamese" rel="stylesheet">
<!--//fonts--></head>
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
							<h1 style="font-size:24px;">Hostel Management System</h1>
						</a>
					</div>
					<!--/.navbar-header--><br><br>
					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
						<nav>
							<ul class="nav navbar-nav">
								<li><a href="index.html" class="active">Home</a></li>
								<li><a href="rules.html">Rules </a></li>
								<li><a href="services.html">Services</a></li>
								<li><a href="gallery.html">Gallery</a></li>
								<li><a href="menu_view.jsp">Mess menu</a></li>
                                <li><a href="login.jsp">Login</a></li>							</ul>
						</nav>
					</div>
					<!--/.navbar-collapse-->
					<!--/.navbar-->
				</div>
			</nav>
		</div>
	</div>
	<!-- //header -->

<!-- innerpages_banner -->
	<div class="innerpages_banner">
		<img src="images/login.png" height="300px">
</div>
<!-- //innerpages_banner -->

<!-- Services -->
<div class="popular-section-wthree ">
	<div class="container">	
			<h3 class="heading">Login Here</h3>
<div class="service_top_grids" style=" margin-left:260px;">
			  <div class="col-md-4 service-grid1" style="margin-left:120px;">
			    <form name="form1" method="post" action="logcheck.jsp">
			      <table width="581" height="221" border="0" align="center">
                    <tr>
                      <td width="280" height="68"><em><strong>Username</strong></em></td>
                      <td width="291"><label>
                        <input type="text" name="t1" id="t1" style="width:200px" required>
                      </label></td>
                    </tr>
                    <tr>
                      <td height="37"><em><strong>Password</strong></em></td>
                      <td><input type="password" name="t2" id="t2" style="width:200px" required></td>
                    </tr>
                    <tr>
                      <td height="53">&nbsp;</td>
                      <td><label>
                        <input type="submit" name="s1" id="s1" value="Login" style="background-color:#FFCC00; color:#FFFFFF; width:100px;">
                      
                      <input type="reset" name="s2" id="s2" value="Reset" style="background-color: #00CC00; color:#FFFFFF; width:100px;">
</label></td>
                    </tr>
                    <tr>
                      <td height="53"><a href="reg.php">New User</a></td>
                      <td><a href="forgotpass.php">Forgot Password</a></td>
                    </tr>
                  </table>
			      <label></label>
			    </form>
			   
			  </div>
			  <div class="clearfix"> </div>
				</div>

  </div>
</div>


<!-- footer -->
<div class="footer">
		
				
				
					
					
				
					
					
			<div class="agileinfo_copyright">
				<p>© 2018 Online Hostel Management. All Rights Reserved  <a href="https://w3layouts.com/"></a>
				</p>
			</div>
		</div>
	</div>
<!-- //footer -->

<!-- Supportive js -->
<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
<!-- //Supportive js -->

<!-- stats -->
	<script src="js/jquery.waypoints.min.js"></script>
	<script src="js/jquery.countup.js"></script>
		<script>
			$('.counter').countUp();
		</script>
<!-- //stats -->

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

<script type="text/javascript" src="js/bootstrap.js"></script>
<!-- bootstrap js file -->

</body>
</html>