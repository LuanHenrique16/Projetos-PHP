<?php
include'connect.php';
if(isset($_POST['sub'])){
    $u=$_POST['user'];
    $p=$_POST['pass'];
    $s= "select * from reg where username='$u' and password= '$p'";   
   $qu= mysqli_query($con, $s);
   if(mysqli_num_rows($qu)>0){
      $f= mysqli_fetch_assoc($qu);
      $_SESSION['id']=$f['id'];
      header ('location:home.php');
   }
   else{
       echo 'username or password does not exist';
   }
  
}
?>
<!DOCTYPE html>
<html lang="en-US" class="no-js">
<head>
<title>Expertum - Free HTML Template by WowThemes.net</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel='stylesheet' href='assets/css/bootstrap.min.css' type='text/css' media='all'/>
<link rel='stylesheet' href='assets/css/animate.min.css' type='text/css' media='all'/>
<link rel='stylesheet' href='style.css' type='text/css' media='all'/>
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans%3A300italic%2C400italic%2C700italic%2C300%2C400%2C700%2C800%7CMontserrat%3A300italic%2C400italic%2C700italic%2C300%2C400%2C700%7CDosis%3A400%2C700&#038;ver=4.5' type='text/css' media='all'/>
<link rel='stylesheet' href='icons/elegantline/style.css' type='text/css' media='all'/>
<link rel='stylesheet' href='assets/css/font-awesome.min.css' type='text/css' media='all' />
<link rel='stylesheet' href='assets/css/flexslider.css' type='text/css' media='all'/>
</head>
<body class="frontpage">
<div class="page-loader">
	<img src="assets/img/loader.gif" alt="loader">
</div>

<!-- Header
================================================== -->
<header id="header">
<div id="mega-menu" class="header header2 header-sticky primary-menu icons-no default-skin zoomIn align-right">
	<nav class="navbar navbar-default redq">
	<div class="container">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar">
			<span class="sr-only">Toggle navigation</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="index.html">
			<img src="assets/img/logo-dark.png" alt="logo">
			</a>
		</div>
		<div class="collapse navbar-collapse" id="navbar">
			<a class="mobile-menu-close"><i class="fa fa-close"></i></a>
			<div class="menu-top-menu-container">
				<ul id="menu-top-menu" class="nav navbar-nav nav-list">
					<li><a href="#home">Home</a></li>
					<li><a href="#about">About</a></li>
					<li><a href="#services">Services</a></li>
					<li><a href="#pricing">Pricing</a></li>
					<li><a href="#blog">Blog</a></li>
					<li><a href="#contact">Contact</a></li>
					<li style="background: rgba(255, 255, 0, 0.51);"><a target="_blank" href="https://www.wowthemes.net/themes/expertum/">WP Version</a></li>
				</ul>
			</div>
		</div>
		<!-- /.navbar-collapse -->
	</div>
	<!-- /.container -->
	</nav>
</div>
</header>	

<!-- INTRO
================================================== -->
<section id="home" style="padding:160px 0;background-image: url(https://unsplash.it/1324/683?random=0); background-position: center; background-repeat: no-repeat;background-size: cover;background-attachment:fixed;">
	<div class="container">
		<div class="textwidget">
			<h1 class="toptitle">CHOOSE OUR EXPERTS for<br/> THE BEST PLAN YOU CAN GET <br/><br/><i class="fa fa-star roundicon"></i>
			</h1>								
			<div class="contactstyle topform">										
			<form method="POST" enctype="multipart/form-data">
            <table>
                
                <tr>
                    <td>
                        Username
                        <input type="text" name="user">
                    </td>
                </tr>
                <tr>
                    <td>
                        password
                        <input type="password" name="pass">
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="submit" name="sub" value="submit">
                    </td>
                </tr>
                <tr>
                    <td>
                        <a href= "reg.php"> Register</a>
                    
                    </td>
                </tr>
            </table>
				<div class="done">
					<div class="alert alert-success">
						<button type="button" class="close" data-dismiss="alert">×</button>
						Your message has been sent. Thank you!
					</div>
				</div>
			</div>								
		</div>
		</div>
</section>

<!-- ABOUT
================================================== -->
<section id="about" class="whitetext" style="padding:60px;background-color:#50dcc9;" >
	<div class="container">
		<div class="so-widget-sow-headline">
			<div class="sow-headline">
				<h1 class="whitetext">YOUR EXPERTS SINCE 1997</h1>
			</div>
		</div>
		<br/>
		<div class="w960 text-center">
		<p>
			 Praesent vestibulum aenean nonummy hendrerit mauris. Cum sociis natoque penatibus et magnis dis parturient montes ascetur ridiculusmus. Nulla dui. Fusce feugiat. Praesent vestibulum aenean nonummy hendrerit mauris. Cum sociis natoque penatibus et magnis dis parturient montes.
		</p>
		<p>
			Fusce feugiat Praesent vestibulum aenean nonummy hendrerit mauris. Cum sociis natoque penatibus et magnis dis parturient montes ascetur ridiculusmus. Nulla dui. Fusce feugiat. Fusce feugiat Praesent vestibulum aenean nonummy hendrerit mauris. Cum sociis natoque penatibus et magnis dis parturient montes ascetur ridiculusmus. Nulla dui. Fusce feugiat.
		</p>
		<p>
			Praesent vestibulum aenean nonummy hendrerit mauris. Cum sociis natoque penatibus et magnis dis parturient montes ascetur ridiculusmus. Nulla dui. Fusce feugiat. Fusce feugiat Praesent vestibulum aenean nonummy hendrerit mauris. Cum sociis natoque penatibus et magnis dis parturient montes ascetur ridiculusmus.
		</p>
		</div>
							
	</div>
</section>

<!-- TEAM
================================================== -->
<section id="team" class="panel-grid">
	<div class="nopadding">
		<!-- #person1 -->
		<div class="col-md-4" style="background:#141414;">
			<div class="team-boxes">
				<div class="team-thumb overlay-image view-overlay">
					<img src="https://unsplash.it/600/400?random=1" alt="" class="img-responsive">
					<div class="clear">
					</div>
					<div class="mask team_quote">
						<div class="port-zoom-link">
							<p>
								 Its is great to work in such company, some other projects will be started in the same format!
							</p>
						</div>
					</div>
				</div>
				<div class="team-info">
					<h2>BEVERLY GARCIA</h2>
					<p>
						Volunteer Work
					</p>
				</div>
				<div class="separator">
				</div>
				<div class="team-social">
					<a href="#"><i class="fa fa-twitter"></i></a>
					<a href="#"><i class="fa fa-linkedin"></i></a>
					<a href="#"><i class="fa fa-google-plus"></i></a>
					<a href="#"><i class="fa fa-skype"></i></a>
				</div>
			</div>
		</div>
		<!-- #person2 -->
		<div class="col-md-4" style="background:#50dbc8;">
			<div class="team-boxes">
				<div class="team-thumb overlay-image view-overlay">
					<img src="https://unsplash.it/600/400?random=2" alt="" class="img-responsive">
					<div class="clear">
					</div>
					<div class="mask team_quote">
						<div class="port-zoom-link">
							<p>
								 Its is great to work in such company, some other projects will be started in the same format!
							</p>
						</div>
					</div>
				</div>
				<div class="team-info">
					<h2>MARY LACOSTE</h2>
					<p>
						Expertum Founder
					</p>
				</div>
				<div class="separator">
				</div>
				<div class="team-social">
					<a href="#"><i class="fa fa-linkedin"></i></a>
					<a href="#"><i class="fa fa-facebook"></i></a>
					<a href="#"><i class="fa fa-google-plus"></i></a>
					<a href="#"><i class="fa fa-skype"></i></a>
				</div>
			</div>	
		</div>
		<!-- #person3 -->
		<div class="col-md-4" style="background:#141414;">
			<div class="team-boxes">
				<div class="team-thumb overlay-image view-overlay">
					<img src="https://unsplash.it/600/400?random=3" alt="" class="img-responsive">
					<div class="clear">
					</div>
					<div class="mask team_quote">
						<div class="port-zoom-link">
							<p>
								 Its is great to work in such company, some other projects will be started in the same format!
							</p>
						</div>
					</div>
				</div>
				<div class="team-info">
					<h2>CAROL STEPHENS</h2>
					<p>
						Public Relations
					</p>
				</div>
				<div class="separator">
				</div>
				<div class="team-social">
					<a href="#"><i class="fa fa-twitter"></i></a>
					<a href="#"><i class="fa fa-linkedin"></i></a>
					<a href="#"><i class="fa fa-google-plus"></i></a>
					<a href="#"><i class="fa fa-skype"></i></a>
				</div>
			</div>
		</div>
		<!-- end #3 -->
		<div class="clearfix"></div>
	</div>
</section>

<!-- SERVICES
================================================== -->		
<section id="services" class="services margintop60">
	<div class="container">
		<div class="sow-headline">
			<h1>SERVICES</h1>
			<div class="decoration">
				<div class="decoration-inside">
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-6">
				<h3>01. Central Processing</h3>
				 Collaboratively administrate empowered markets via plug-and-play networks. Dynamically procrastinate B2C users after installed base benefits. Dramatically visualize customer directed convergence without revolutionary ROI.
				<h3>02. Real Schemas</h3>
				 Efficiently unleash cross-media information without cross-media value. Quickly maximize timely deliverables for real-time schemas. Dramatically maintain clicks-and-mortar solutions without functional solutions.
				<h3>03. Customer Service</h3>
				 Completely synergize resource taxing relationships via premier niche markets. Professionally cultivate one-to-one customer service with robust ideas. Dynamically innovate resource-leveling customer service for state of the art customer service.
			</div>
			<div class="col-md-6">
				<h3>04. Data Cover</h3>
				 Collaboratively administrate empowered markets via plug-and-play networks. Dynamically procrastinate B2C users after installed base benefits. Dramatically visualize customer directed convergence without revolutionary ROI.
				<h3>05. Time Management</h3>
				 Efficiently unleash cross-media information without cross-media value. Quickly maximize timely deliverables for real-time schemas. Dramatically maintain clicks-and-mortar solutions without functional solutions.
				<h3>06. One-to-one Business</h3>
				 Completely synergize resource taxing relationships via premier niche markets. Professionally cultivate one-to-one customer service with robust ideas. Dynamically innovate resource-leveling customer service for state of the art customer service.
			</div>
		</div>
	</div>
</section>
	
<!-- COUNTERS
================================================== -->
<section id="counters" class="margintop60 paddingtop100 paddingbottom100" style="background-image:url(https://unsplash.it/1400/600?random=4);background-size:cover;background-attachment:fixed;">
	<div class="container">	
		<!-- #1 -->
		<div class="col-md-4">
			<div class="funfacts text-center">
				<div class="icon">
					<span class="sow-icon-elegantline" data-sow-icon=""></span>
				</div>
				<h2 class="counter" style="color: #ffffff">823</h2>
				<h4>Pictures Taken</h4>
			</div>
		</div>	
		<!-- #2 -->
		<div class="col-md-4">
			<div class="funfacts text-center">
				<div class="icon">
					<span class="sow-icon-elegantline" data-sow-icon=""></span>
				</div>
				<h2 class="counter" style="color: #ffffff">354</h2>
				<h4>Lovely Customers</h4>
			</div>
		</div>	
		<!-- #3 -->
		<div class="col-md-4">
			<div class="funfacts text-center">
				<div class="icon">
					<span class="sow-icon-elegantline" data-sow-icon=""></span>
				</div>
				<h2 class="counter" style="color: #ffffff">637</h2>
				<h4>Hearts Sent</h4>
			</div>
		</div>	
		<!-- #end3 -->
	</div>			
</section>

<!-- PRICING
================================================== -->
<section id="pricing" class="margintop60 ow-pt-columns-atom">
	<div class="container">
		<div class="sow-headline">
			<h1><b>PRICING</b></h1>
		</div>
		<br/>			
		<!-- #1 -->
		<div class="col-md-4 ow-pt-column ow-pt-first ow-pt-even">
			<div class="ow-pt-title">
				 EXPERTUM THEME
				<div class="ow-pt-subtitle">
					One Page WordPress
				</div>
			</div>
			<div class="ow-pt-details">
				<div class="ow-pt-price">
					$35
				</div>
				<div class="ow-pt-per">
					One Time
				</div>
			</div>
			<div class="ow-pt-features">
				<div class="ow-pt-feature ow-pt-feature-even">
					<span class="sow-icon-fontawesome" data-sow-icon="&#xf00c;"></span>
					<p>
						 Wordpress Theme
					</p>
				</div>
				<div class="ow-pt-feature ow-pt-feature-odd">
					<span class="sow-icon-fontawesome" data-sow-icon="&#xf00c;"></span>
					<p>
						 One Page
					</p>
				</div>
				<div class="ow-pt-feature ow-pt-feature-even">
					<span class="sow-icon-fontawesome" data-sow-icon="&#xf00c;"></span>
					<p>
						 Page Builder
					</p>
				</div>
			</div>
			<div class="ow-pt-button">
				<a href='https://www.wowthemes.net/themes/expertum/' class="ow-pt-link">Buy Now</a>
			</div>
		</div>
		
		<!-- #2 -->
		<div class="col-md-4 ow-pt-column ow-pt-featured ow-pt-odd">
			<div class="ow-pt-title">
				 ALL THEMES PACKAGE
				<div class="ow-pt-subtitle">
					by WowThemes.net
				</div>
			</div>
			<div class="ow-pt-details">
				<div class="ow-pt-price">
					$89
				</div>
				<div class="ow-pt-per">
					Per Year
				</div>
			</div>
			<div class="ow-pt-features">
				<div class="ow-pt-feature ow-pt-feature-even">
					<span class="sow-icon-fontawesome" data-sow-icon="&#xf00c;"></span>
					<p>
						 Yours Forever
					</p>
				</div>
				<div class="ow-pt-feature ow-pt-feature-odd">
					<span class="sow-icon-fontawesome" data-sow-icon="&#xf00c;"></span>
					<p>
						 1 Year Support
					</p>
				</div>
				<div class="ow-pt-feature ow-pt-feature-even">
					<span class="sow-icon-fontawesome" data-sow-icon="&#xf00c;"></span>
					<p>
						 1 Year Updates
					</p>
				</div>
				<div class="ow-pt-feature ow-pt-feature-odd">
					<span class="sow-icon-fontawesome" data-sow-icon="&#xf00c;"></span>
					<p>
						 All Themes
					</p>
				</div>
			</div>
			<div class="ow-pt-button">
				<a target="_blank" href='https://www.wowthemes.net/themes/all-themes-package/' class="ow-pt-link">Join Membership</a>
			</div>
		</div>
		
		<!-- #3 -->
		<div class="col-md-4 ow-pt-column ow-pt-last ow-pt-even">
		<div class="ow-pt-title">
				 EXPERTUM THEME
				<div class="ow-pt-subtitle">
					One Page WordPress
				</div>
			</div>
			<div class="ow-pt-details">
				<div class="ow-pt-price">
					$35
				</div>
				<div class="ow-pt-per">
					One Time
				</div>
			</div>
			<div class="ow-pt-features">
				<div class="ow-pt-feature ow-pt-feature-even">
					<span class="sow-icon-fontawesome" data-sow-icon="&#xf00c;"></span>
					<p>
						 Wordpress Theme
					</p>
				</div>
				<div class="ow-pt-feature ow-pt-feature-odd">
					<span class="sow-icon-fontawesome" data-sow-icon="&#xf00c;"></span>
					<p>
						 One Page
					</p>
				</div>
				<div class="ow-pt-feature ow-pt-feature-even">
					<span class="sow-icon-fontawesome" data-sow-icon="&#xf00c;"></span>
					<p>
						 Page Builder
					</p>
				</div>
			</div>
			<div class="ow-pt-button">
				<a href='https://www.wowthemes.net/themes/expertum/' class="ow-pt-link">Buy Now</a>
			</div>
		</div>
	</div>
</section>
		

<!-- TESTIMONIAL
================================================== -->
<section id="testimonial" class="margintop60 paddingtop100 paddingbottom100" style="background-image:url(https://unsplash.it/1400/600?random=5);background-size:cover;background-attachment:fixed;">
	<div class="container">
		<div class="sow-testimonials">
			<div class="flexslider testimonials-wrapper text-center">
				<ul class="slides">
					<li>
					<div class="sow-round-image-frame" style="background-image: url(https://unsplash.it/120/120?random=6); width:120px; height:120px">
					</div>
					<p>
						Phosfluorescently engage worldwide methodologies with web-enabled technology. Interactively coordinate proactive e-commerce via process-centric "outside the box" thinking. Completely pursue scalable customer service through sustainable potentialities.
					</p>
					<strong class="signature">- Chad Sugg, <a>Monsters Under Your Head</a></strong>
					</li>
					<li>
					<div class="sow-round-image-frame" style="background-image: url(https://unsplash.it/120/120?random=7); width:120px; height:120px">
					</div>
					<p>
						Collaboratively administrate turnkey channels whereas virtual e-tailers. Objectively seize scalable metrics whereas proactive e-services. Seamlessly empower fully researched growth strategies and interoperable internal or "organic" sources.
					</p>
					<strong class="signature">- William W. Purkey, <a></a></strong>
					</li>
				</ul>
			</div>
		</div>
		<br/>
		<div class="text-center whitetext">
			<h1>BECOME OUR NEXT CLIENT</h1>
			<h2 style="margin-top:10px;">Call Us - (088) 347 281</h2>
		</div>
	</div>
</section>

<!-- BLOG
================================================== -->
<section id="blog" class="margintop60">
	<div class="container">			
		<div class="sow-headline">
			<h1><b>BLOG</b></h1>
		</div>
		<br/>
		<div class="so-widget-sow-post-carousel so-widget-sow-post-carousel-base">
			<ul class="tline-holder">
				<!-- tline ITEM-->
				<li>
				<div class="tline-item-content">
					<a href="#">
					<div class="date-icon fa fa-link">
					</div>
					</a>
					<div class="tline-item-txt">
						<div class="meta">
							 November 22, 2016
						</div>
						<h3><a href="#">HTML Tags and Formatting</a></h3>
						<p>
							 Blockquotes Single line blockquote: Stay hungry. Stay foolish. Multi line blockquote with a cite ref ...
						</p>
					</div>
				</div>
				</li>
				<!-- /tline-->
				<!-- tline ITEM-->
				<li>
				<div class="tline-item-content">
					<a href="#">
					<div class="date-icon fa fa-link">
					</div>
					</a>
					<div class="tline-item-txt">
						<div class="meta">
							 November 22, 2016
						</div>
						<h3><a href="#">Text Alignement</a></h3>
						<p>
							 Default This is a paragraph. It should not have any alignment of any kind. It should just flow like ...
						</p>
					</div>
				</div>
				</li>
				<!-- /tline-->
				<!-- tline ITEM-->
				<li>
				<div class="tline-item-content">
					<a href="#">
					<div class="date-icon fa fa-link">
					</div>
					</a>
					<div class="tline-item-txt">
						<div class="meta">
							 November 22, 2016
						</div>
						<h3><a href="#">Who could have thought?</a></h3>
						<p>
							 People think focus means saying yes to the thing you've got to focus on. But that's not what it ...
						</p>
					</div>
				</div>
				</li>
				<!-- /tline-->
				<li class="tline-start">
				<div class="tline-start-content">
					<div class="tline-start-icon">
					</div>
					<a href="#" class="btn btn-inverse wow zoomIn">More</a>
				</div>
				</li>
			</ul>
		</div>
	</div>
</section>
		
<!-- CONTACT
================================================== -->
<section id="contact" class="margintop60 nopadding" style="background:#292929;">
		<div class="col-md-6 whitetext" style="padding: 60px;">
			<div class="textwidget">
				<div class="bookarea">
					 CONTACT<br>
					<span class="bordered">Tucson 5301 E Grant Rd </span><br>
					<span class="call">(349) 376-9275</span>
				</div>
			</div>
		</div>
		<div class="col-md-6 whitetext" style="padding: 60px; background-color: #50dcc9;">
			<div class="textwidget">
				<h2 class="box">Say <b>Hello</b></h2>						
				<div class="bottomform">										
					<form method="post" action="contact/bottomcontact.php" id="bottomcontactform">
						<div class="form">
							<div class="row">
								<span class="col-md-6">
									<input type="text" name="namebottom" placeholder="Name *">
								</span>
								
								<span class="col-md-6">
									<input type="text" name="emailbottom" placeholder="E-mail *">
								</span>
									
							</div>
							<div class="clearfix"></div>
							<textarea name="comment" rows="7" placeholder="Message *"></textarea>
							<input type="submit" id="submit2" class="clearfix btn" value="Send">
						</div>
					</form>
					<div class="done2">
						<div class="alert alert-success">
							<button type="button" class="close" data-dismiss="alert">×</button>
							Your message has been sent. Thank you!
						</div>
					</div>
				</div>						
			</div>
		</div>
		<div class="clearfix"></div>
</section>
<!-- THE END OF SECTIONS -->	
	
<!-- FOOTER
================================================== -->
<footer id="footer" class="footer2">
	<div class="copyright">
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<small>
					&copy; <a href="https://www.wowthemes.net/">
							  Expertum - Free HTML Template by WowThemes.net
							</a>
					</small>
				</div>
				<div class="col-md-6 text-right">
					<div class="footer-menu">
						<ul id="menu-footer-links" class="menu">
							<li><a href="#"><i class="fa fa-facebook"></i> Like us on Facebook</a></li>
							<li><a href="#"><i class="fa fa-twitter"></i> Follow us on Twitter</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</footer>

<!-- SCRIPTS
================================================== -->
<script src="assets/js/jquery.js"></script>
<script src="assets/js/plugins.js"></script>
<script src="contact/topvalidate.js"></script>
<script src="contact/bottomvalidate.js"></script>

</body>
</html>
