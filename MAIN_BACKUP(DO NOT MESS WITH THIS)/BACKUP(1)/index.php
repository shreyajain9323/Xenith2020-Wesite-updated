<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Xenith : Home</title>
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/icon" href="assets/images/favicon.ico"/>
    <!-- Font Awesome -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <!-- Slick slider -->
    <link href="assets/css/slick.css" rel="stylesheet">
    <!-- Theme color -->
    <link id="switcher" href="assets/css/theme-color/black theme.css" rel="stylesheet">

    <!-- Main Style -->
    <link href="style.css" rel="stylesheet">

    <!-- Fonts -->

    <!-- Open Sans for body font -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,600,700,800" rel="stylesheet">
	<!-- Montserrat for title -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
 
 
	
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style>

    	<style>
        #loading {
        background: url('logo.gif') no-repeat center center;
        position: absolute;
        top: 0;
        left: 0;
        height: 100%;
        width: 100%;
        z-index: 9999999;
        display: none;
}
        #loading2 {
        background: url('giphy.gif') no-repeat center center;
        position: absolute;
        top: 0;
        left: 0;
        height: 100%;
        width: 100%;
        z-index: 9999999;
        display: none;
}

		.back{display: flex;
		justify-content: space-around;
		align-items: center;}

		   @media only screen and (max-width: 600px) {
          /* For tablets/mobile: */
          .col-s-1 {width: 8.33%;}
          .col-s-2 {width: 16.66%;}
          .col-s-3 {width: 25%;}
          .col-s-4 {width: 33.33%;}
          .col-s-5 {width: 41.66%;}
          .col-s-6 {width: 50%;}
          .col-s-7 {width: 58.33%;}
          .col-s-8 {width: 66.66%;}
          .col-s-9 {width: 75%;}
          .col-s-10 {width: 83.33%;}
          .col-s-11 {width: 91.66%;}
          .col-s-12 {width: 100%;}
          .back{display: none;}

      }

      	@media only screen and (min-width: 768px) {
          /* For desktop: */
          .col-1 {width: 8.33%;}
          .col-2 {width: 16.66%;}
          .col-3 {width: 25%;}
          .col-4 {width: 33.33%;}
          .col-5 {width: 41.66%;}
          .col-6 {width: 50%;}
          .col-65{width: 54.66%;}
          .col-7 {width: 58.33%;}
          .col-8 {width: 66.66%;}
          .col-9 {width: 75%;}
          .col-10 {width: 83.33%;}
          .col-11 {width: 91.66%;}
          .col-12 {width: 100%;}
          .back1{display: none;}
        }
    </style>
  </head>
  <body >
  	
  	<!-- Start Header -->
	<header id="mu-hero" class="" role="banner">
		<!-- Start menu  -->
		<nav class="navbar navbar-fixed-top navbar-default ">
		  	<div class="container">
			    <!-- Brand and toggle get grouped for better mobile display -->
			    <div class="navbar-header">
			      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
			        <span class="sr-only">Toggle navigation</span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			      </button>

			      <!-- Logo -->
                    <a class="navbar-brand heading" href="index.html"><strong><img src="Logo Final.png" width="30px" height="30px"> XENITH'20</strong></a>

			    </div>

			    <!-- Collect the nav links, forms, and other content for toggling -->
			    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			      	<ul class="nav navbar-nav mu-menu navbar-right">
			      		<li><a href="#mu-hero">Home</a></li>
				        <li><a href="#mu-about">About Us</a></li>
				        <li><a href="#mu-schedule">Schedule</a></li>
				        <li><a href="#mu-speakers">Events</a></li>
			            <li><a href="#mu-contact">Contact</a></li>
			            <li><a href="chatBot.html">Chat</a></li>
			      	</ul>
			    </div><!-- /.navbar-collapse -->
		  	</div><!-- /.container-fluid -->
		</nav>
		<!-- End menu -->
        <div id="loading"></div>
        <div id="loading2"></div>
		<div class="mu-hero-overlay">
			<div class="container">
				<div class="mu-hero-area">

					<!-- Start hero featured area -->
					<div class="mu-hero-featured-area">
						<!-- Start center Logo -->
						<div class="mu-logo-area">
							<!-- text based logo -->
							<a class="mu-logo" href="#">Glitches to Perfection</a>
							<!-- image based logo -->
							<!-- <a class="mu-logo" href="#"><img src="assets/images/logo.jpg" alt="logo img"></a> -->
						</div>
						<!-- End center Logo -->

						<div class="mu-hero-featured-content">

							<h1>WELCOME TO XENITH'20</h1>
                            <h2 style="">The IT fest of <a href="http://xaviers.edu/main/" style="text-decoration: underline; color: white">St.Xavier's College, Mumbai</a></h2>
							<p class="mu-event-date-line">17 - 18 January, 2020. Mumbai, Maharashtra, India</p>

							<div class="mu-event-counter-area">
								<div id="mu-event-counter">
									
								</div>
							</div>

						</div>
					</div>
					<!-- End hero featured area -->

				</div>
			</div>
		</div>
	</header>
	<!-- End Header -->
	
	<!-- Start main content -->
	<main role="main">
		<!-- Start About -->
		<section id="mu-about">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="mu-about-area">
							<!-- Start Feature Content -->
							<div class="row">
								<div class="col-md-6">
									<div class="mu-about-left">
										<img class="" src="assets/images/about.jpg" alt="Men Speaker">
									</div>
								</div>
								<div class="col-md-6">
									<div class="mu-about-right">
										<h2 style="text-align: center; font-weight: bolder">ABOUT THE FEST</h2>
										<p>sehewsnsektgjnh jhgkgbhj e3hd3ehd3e e3d4rhdgjddxe4 f4rrojhgkgbhj e3hd3ehd3e e3d4rhdgjddxe4 f4rrojhgkgbhj e3hd3ehd3e e3d4rhdgjddxe4 f4rrojhgkgbhj e3hd3ehd3e e3d4rhdgjddxe4 f4rrojhgkgbhj e3hd3ehd3e e3d4rhdgjddxe4 f4rrojhgkgbhj e3hd3ehd3e e3d4rhdgjddxe4 f4rrojhgkgbhj e3hd3ehd3e e3d4rhdgjddxe4 f4rrojhgkgbhj e3hd3ehd3e e3d4rhdgjddxe4 f4rro</p>

										<p>kjsfnsekjgnskjgn jhgkgbhj e3hd3ehd3e e3d4rhdgjddxe4 f4rrojhgkgbhj e3hd3ehd3e e3d4rhdgjddxe4 f4rrojhgkgbhj e3hd3ehd3e e3d4rhdgjddxe4 f4rrojhgkgbhj e3hd3ehd3e e3d4rhdgjddxe4 f4rrojhgkgbhj e3hd3ehd3e e3d4rhdgjddxe4 f4rro</p>
									</div>
								</div>
							</div>
							<!-- End Feature Content -->

						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End About -->


		<!-- Start Schedule  -->
		<section id="mu-schedule">
			<div class="container">
				<div class="row">
					<div class="colo-md-12">
						<div class="mu-schedule-area">

							<div class="mu-title-area">
								<h2 class="mu-title">Schedule Detail</h2>
								<p>jhgkgbhj e3hd3ehd3e e3d4rhdgjddxe4 f4rro. jhgkgbhj e3hd3ehd3e e3d4rhdgjddxe4 f4rrojhgkgbhj e3hd3ehd3e e3d4rhdgjddxe4 f4rrojhgkgbhj e3hd3ehd3e e3d4rhdgjddxe4 f4rrojhgkgbhj e3hd3ehd3e e3d4rhdgjddxe4 f4rrojhgkgbhj e3hd3ehd3e e3d4rhdgjddxe4 f4rrojhgkgbhj e3hd3ehd3e e3d4rhdgjddxe4 f4rrojhgkgbhj e3hd3ehd3e e3d4rhdgjddxe4 f4rrojhgkgbhj e3hd3ehd3e e3d4rhdgjddxe4 f4rrojhgkgbhj e3hd3ehd3e e3d4rhdgjddxe4 f4rro</p>
							</div>

							<div class="mu-schedule-content-area">
								<!-- Nav tabs -->
								<ul class="nav nav-tabs mu-schedule-menu" role="tablist">
								    <li role="presentation" class="active"><a href="#first-day" aria-controls="first-day" role="tab" data-toggle="tab">1 Day / 17 Jan</a></li>
								    <li role="presentation"><a href="#second-day" aria-controls="second-day" role="tab" data-toggle="tab">2 Day / 18 Jan</a></li>
								    
								</ul>


								<!-- Tab panes -->
								<div class="tab-content mu-schedule-content">
								    <div role="tabpanel" class="tab-pane fade mu-event-timeline in active" id="first-day">
								    
                                        <ul>
								  
                                            <li>
								    			<div class="mu-single-event">
								    				<img src="assets/images/speaker-1.jpg" alt="event speaker">
								    				<p class="mu-event-time">9:30 AM -  5:00 PM</p>
								    				<h3>Exhibition</h3>
                                                    <span>Location: <strong>GCR</strong></span>
								    			</div>
								    		</li>
                                            <li>
								    			<div class="mu-single-event">
								    				<img src="assets/images/speaker-1.jpg" alt="event speaker">
								    				<p class="mu-event-time">12:30 PM - 2:00 PM</p>
								    				<h3>Talk</h3>
								    				<span>Location: <strong>MMR</strong></span>
								    			</div>
								    		</li>
                                            <li>
								    			<div class="mu-single-event">
								    				<img src="assets/images/speaker-2.jpg" alt="event speaker">
								    				<p class="mu-event-time">1:00 PM - 4:00 PM</p>
								    				<h3>Gameshow</h3>
								    				<span>Location: <strong>Scavi</strong></span>
								    			</div>
								    		</li>
								    		<li>
								    			<div class="mu-single-event">
								    				<img src="assets/images/speaker-3.jpg" alt="event speaker">
								    				<p class="mu-event-time">2:00 PM - 5:00 PM</p>
								    				<h3>Treasure Hunt</h3>
								    				<span>Location: <strong>Seminar Room</strong></span>
								    			</div>
								    		</li>
                                            <li>
								    			<div class="mu-single-event">
								    				<img src="assets/images/speaker-3.jpg" alt="event speaker">
								    				<p class="mu-event-time">3:00 PM - 5:00 PM</p>
								    				<h3>Workshop</h3>
								    				<span>Location: <strong>MMR</strong></span>
								    			</div>
								    		</li>
								    	</ul>
								    	
								    </div>
								    <div role="tabpanel" class="tab-pane fade mu-event-timeline" id="second-day">
								    	<ul>
								  
                                            <li>
								    			<div class="mu-single-event">
								    				<img src="assets/images/speaker-1.jpg" alt="event speaker">
								    				<p class="mu-event-time">8:00 AM -  7:00 PM</p>
								    				<h3>Hackathon</h3>
                                                    <span>Location: <strong>M.Sc(I.T) Lab</strong></span>
								    			</div>
								    		</li>
                                            <li>
								    			<div class="mu-single-event">
								    				<img src="assets/images/speaker-2.jpg" alt="event speaker">
								    				<p class="mu-event-time">10.00 AM - 4:00 PM</p>
								    				<h3>Laser Tag</h3>
								    				<span>Location: <strong>BCR</strong></span>
								    			</div>
								    		</li>
								    		<li>
								    			<div class="mu-single-event">
								    				<img src="assets/images/speaker-1.jpg" alt="event speaker">
								    				<p class="mu-event-time">12:30 PM - 2:00 PM</p>
								    				<h3>Talk</h3>
								    				<span>Location: <strong>MMR</strong></span>
								    			</div>
								    		</li>
								    		<li>
								    			<div class="mu-single-event">
								    				<img src="assets/images/speaker-3.jpg" alt="event speaker">
								    				<p class="mu-event-time">4.00 PM</p>
								    				<h3>Closing Ceremony</h3>
								    				<span>Location: <strong>MMR</strong></span>
								    			</div>
								    		</li>
								    	</ul>
							
								    </div>
								
								</div>
							
							</div>
							
						</div>
					</div>
					

				</div>
						    <!--download schedule button-Desktop-->
							<div class="back col-s-8 col-65" align="center">
			
								<div class="button_base b10_tveffect">
									<div><a href="form.html">Register</a></div>
										<div>
											<div><a href="form.html">Register</a></div>
											<div><a href="form.html">Register</a></div>
											<div><a href="form.html">Register</a></div>
										</div>
									</div>

								<div class="button_base b10_tveffect">
									<div>Download Schedule</div>
										<div>
											<div>Download Schedule</div>
											<div>Download Schedule</div>
											<div>Download Schedule</div>
										</div>
									</div>

							</div>	
							<br>	

							 <!--download schedule button-Mobile-->
							<div class="back1 col-s-8 col-7" align="center">
			
								<div class="button_base b10_tveffect">
									<div>Register</div>
										<div>
											<div>Register</div>
											<div>Register</div>
											<div>Register</div>
										</div>
									</div>
							</div>	
							<br><br>
							<div class="back1 col-s-8 col-7" align="center">
							<div class="button_base b10_tveffect">
									<div>Download Schedule</div>
										<div>
											<div>Download Schedule</div>
											<div>Download Schedule</div>
											<div>Download Schedule</div>
										</div>
									</div>
							</div>
							<br>
			</div>
		</section>
		<!-- End Schedule -->

		<!-- Start Speakers -->
		<section id="mu-speakers">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="mu-speakers-area">

							<div class="mu-title-area">
								<h2 class="mu-title">Events</h2>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis unde, ut sapiente et voluptatum facilis consectetur incidunt provident asperiores at necessitatibus nulla sequi voluptas libero quasi explicabo veritatis minima porro.</p>
							</div>

							<!-- Start Speakers Content -->
							<div class="mu-speakers-content">

								<div class="mu-speakers-slider">

									<!-- Start single speaker -->
									<div class="mu-single-speakers">
										<img src="assets/images/speaker-1.jpg" alt="speaker img">
										<div class="mu-single-speakers-info">
											<h3>Raj Mehta</h3>
											<p>Digital Artist</p>
											<ul class="mu-single-speakers-social">
												<li><a href="#"><i class="fa fa-facebook"></i></a></li>
												<li><a href="#"><i class="fa fa-twitter"></i></a></li>
												<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
											</ul>
										</div>
									</div>
									<!-- End single speaker -->

									<!-- Start single speaker -->
									<div class="mu-single-speakers">
										<img src="assets/images/speaker-2.jpg" alt="speaker img">
										<div class="mu-single-speakers-info">
											<h3>Raj Mehta</h3>
											<p>Business Consultant</p>
											<ul class="mu-single-speakers-social">
												<li><a href="#"><i class="fa fa-facebook"></i></a></li>
												<li><a href="#"><i class="fa fa-twitter"></i></a></li>
												<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
											</ul>
										</div>
									</div>
									<!-- End single speaker -->


									<!-- Start single speaker -->
									<div class="mu-single-speakers">
										<img src="assets/images/speaker-3.jpg" alt="speaker img">
										<div class="mu-single-speakers-info">
											<h3>Raj Mehta</h3>
											<p>UI/UX Specialist</p>
											<ul class="mu-single-speakers-social">
												<li><a href="#"><i class="fa fa-facebook"></i></a></li>
												<li><a href="#"><i class="fa fa-twitter"></i></a></li>
												<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
											</ul>
										</div>
									</div>
									<!-- End single speaker -->


									<!-- Start single speaker -->
									<div class="mu-single-speakers">
										<img src="assets/images/speaker-4.jpg" alt="speaker img">
										<div class="mu-single-speakers-info">
											<h3>Raj Mehta</h3>
											<p>Digital Marketer</p>
											<ul class="mu-single-speakers-social">
												<li><a href="#"><i class="fa fa-facebook"></i></a></li>
												<li><a href="#"><i class="fa fa-twitter"></i></a></li>
												<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
											</ul>
										</div>
									</div>
									<!-- End single speaker -->

									<!-- Start single speaker -->
									<div class="mu-single-speakers">
										<img src="assets/images/speaker-1.jpg" alt="speaker img">
										<div class="mu-single-speakers-info">
											<h3>Raj Mehta</h3>
											<p>Digital Artist</p>
											<ul class="mu-single-speakers-social">
												<li><a href="#"><i class="fa fa-facebook"></i></a></li>
												<li><a href="#"><i class="fa fa-twitter"></i></a></li>
												<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
											</ul>
										</div>
									</div>
									<!-- End single speaker -->

									<!-- Start single speaker -->
									<div class="mu-single-speakers">
										<img src="assets/images/speaker-2.jpg" alt="speaker img">
										<div class="mu-single-speakers-info">
											<h3>Raj Mehta</h3>
											<p>Business Consultant</p>
											<ul class="mu-single-speakers-social">
												<li><a href="#"><i class="fa fa-facebook"></i></a></li>
												<li><a href="#"><i class="fa fa-twitter"></i></a></li>
												<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
											</ul>
										</div>
									</div>
									<!-- End single speaker -->


									<!-- Start single speaker -->
									<div class="mu-single-speakers">
										<img src="assets/images/speaker-3.jpg" alt="speaker img">
										<div class="mu-single-speakers-info">
											<h3>Raj Mehta</h3>
											<p>UI/UX Specialist</p>
											<ul class="mu-single-speakers-social">
												<li><a href="#"><i class="fa fa-facebook"></i></a></li>
												<li><a href="#"><i class="fa fa-twitter"></i></a></li>
												<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
											</ul>
										</div>
									</div>
									<!-- End single speaker -->


									<!-- Start single speaker -->
									<div class="mu-single-speakers">
										<img src="assets/images/speaker-4.jpg" alt="speaker img">
										<div class="mu-single-speakers-info">
											<h3>Raj Mehta</h3>
											<p>Digital Marketer</p>
											<ul class="mu-single-speakers-social">
												<li><a href="#"><i class="fa fa-facebook"></i></a></li>
												<li><a href="#"><i class="fa fa-twitter"></i></a></li>
												<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
											</ul>
										</div>
									</div>
									<!-- End single speaker -->
								</div>
							</div>
							<!-- End Speakers Content -->

						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End Speakers -->

		<!-- Start Venue -->
		<section id="mu-venue">
			<div class="mu-venue-area">
				<div class="row">

					<div class="col-md-6">
						<div class="mu-venue-map">
							<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3773.7459398852097!2d72.82904435028142!3d18.94263638710158!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7b870ba222b0b%3A0xa35fb09925b0951d!2sSt.%20Xaviers%20College!5e0!3m2!1sen!2sin!4v1574604116251!5m2!1sen!2sin" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
						</div>
					</div>

					<div class="col-md-6">
						<div class="mu-venue-address">
							<h2>VENUE <i class="fa fa-chevron-right" aria-hidden="true"></i></h2>
							<h3>St. Xavier's College, Mumbai</h3>
							<h4>5, Mahapalika Marg, Dhobi Talao, Chhatrapati Shivaji Terminus Area, Fort, Mumbai, Maharashtra 400001</h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem reiciendis incidunt accusantium porro amet repellendus hic corporis fugiat officiis, sequi iste distinctio possimus dignissimos, veniam quae delectus. Fuga, modi, perferendis!</p>
						</div>
					</div>

				</div>
			</div>
		</section>
		<!-- End Venue -->

		<!-- Start Sponsors -->
		<section id="mu-sponsors">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="mu-sponsors-area">
							
							<div class="mu-title-area">
								<h2 class="mu-title">Our Sponsors</h2>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint assumenda ut molestias doloremque ipsam, fugit laborum totam, pariatur est cumque at, repudiandae officia ex dolores quas minus optio, iusto soluta?</p>
							</div>
							
							<!-- Start spnonsors brand logo -->
							<div class="mu-sponsors-content">
								<div class="row">
								
									<div class="col-md-2 col-sm-4 col-xs-4">
										<div class="mu-sponsors-single">
											<img src="assets/images/sponsor-logo-1.png" alt="Brand Logo">
										</div>
									</div>

									<div class="col-md-2 col-sm-4 col-xs-4">
										<div class="mu-sponsors-single">
											<img src="assets/images/sponsor-logo-2.png" alt="Brand Logo">
										</div>
									</div>

									<div class="col-md-2 col-sm-4 col-xs-4">
										<div class="mu-sponsors-single">
											<img src="assets/images/sponsor-logo-3.png" alt="Brand Logo">
										</div>
									</div>

									<div class="col-md-2 col-sm-4 col-xs-4">
										<div class="mu-sponsors-single">
											<img src="assets/images/sponsor-logo-4.png" alt="Brand Logo">
										</div>
									</div>

										<div class="col-md-2 col-sm-4 col-xs-4">
										<div class="mu-sponsors-single">
											<img src="assets/images/sponsor-logo-5.png" alt="Brand Logo">
										</div>
									</div>

									<div class="col-md-2 col-sm-4 col-xs-4">
										<div class="mu-sponsors-single">
											<img src="assets/images/sponsor-logo-6.png" alt="Brand Logo">
										</div>
									</div>

									<div class="col-md-2 col-sm-4 col-xs-4">
										<div class="mu-sponsors-single">
											<img src="assets/images/sponsor-logo-7.png" alt="Brand Logo">
										</div>
									</div>

									<div class="col-md-2 col-sm-4 col-xs-4">
										<div class="mu-sponsors-single">
											<img src="assets/images/sponsor-logo-8.png" alt="Brand Logo">
										</div>
									</div>

									<div class="col-md-2 col-sm-4 col-xs-4">
										<div class="mu-sponsors-single">
											<img src="assets/images/sponsor-logo-9.png" alt="Brand Logo">
										</div>
									</div>

										<div class="col-md-2 col-sm-4 col-xs-4">
										<div class="mu-sponsors-single">
											<img src="assets/images/sponsor-logo-1.png" alt="Brand Logo">
										</div>
									</div>

									<div class="col-md-2 col-sm-4 col-xs-4">
										<div class="mu-sponsors-single">
											<img src="assets/images/sponsor-logo-2.png" alt="Brand Logo">
										</div>
									</div>

									<div class="col-md-2 col-sm-4 col-xs-4">
										<div class="mu-sponsors-single">
											<img src="assets/images/sponsor-logo-3.png" alt="Brand Logo">
										</div>
									</div>

								</div>
							</div>
							<!-- End spnonsors brand logo -->

						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End Sponsors -->


		<!-- Start Contact -->
		<section id="mu-contact">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="mu-contact-area">

							<div class="mu-title-area">
								<h2 class="mu-heading-title">Contact Us</h2>
								<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever</p>
							</div>

							<!-- Start Contact Content -->
							<div class="mu-contact-content">
								<div class="row">

								<div class="col-md-12">
									<div class="mu-contact-form-area">
										<div id="form-messages"></div>
											<form id="ajax-contact" method="post" action="mailer.php" class="mu-contact-form">
												<div class="form-group">                
													<input type="text" class="form-control" placeholder="Name" id="name" name="name" required>
												</div>
												<div class="form-group">                
													<input type="email" class="form-control" placeholder="Enter Email" id="email" name="email" required>
												</div>              
												<div class="form-group">
													<textarea class="form-control" placeholder="Message" id="message" name="message" required></textarea>
												</div>
												<button type="submit" class="mu-send-msg-btn"><span>SUBMIT</span></button>
								            </form>
										</div>
									</div>
								</div>
							</div>
							<!-- End Contact Content -->
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End Contact -->

	</main>
	
	<!-- End main content -->	
			
			
	<!-- Start footer -->
	<footer id="mu-footer" role="contentinfo">
			<div class="container">
				<div class="mu-footer-area">
					<div class="mu-footer-top">
						<div class="mu-social-media">
							<a href="#"><i class="fa fa-facebook"></i></a>
							<a href="#"><i class="fa fa-twitter"></i></a>
							<a href="#"><i class="fa fa-google-plus"></i></a>
							<a href="#"><i class="fa fa-linkedin"></i></a>
							<a href="#"><i class="fa fa-youtube"></i></a>
						</div>
					</div>
				
				</div>
			</div>

	</footer>
	<!-- End footer -->

	
	
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <!-- Bootstrap -->
    <script src="assets/js/bootstrap.min.js"></script>
	<!-- Slick slider -->
    <script type="text/javascript" src="assets/js/slick.min.js"></script>
    <!-- Event Counter -->
    <script type="text/javascript" src="assets/js/jquery.countdown.min.js"></script>
    <!-- Ajax contact form  -->
    <script type="text/javascript" src="assets/js/app.js"></script>
  
       
	
    <!-- Custom js -->
	<script type="text/javascript" src="assets/js/custom.js"></script>
          <script>
        function load1()
        {
        $(':not(#loading)').css("filter", "blur(2px)");
            $('#loading').show();

            function hideLoader()
            {
                $('#loading').hide();
                $(':not(#loading)').css("filter", "blur(0px)");
            }
            window.setTimeout( hideLoader, 2000 );
        }
        function load2()
        {
        //$(':not(#loading2)').css("filter", "blur(2px)");
            $('#loading2').show();

            function hideLoader2()
            {
                $('#loading2').hide();
          //      $(':not(#loading2)').css("filter", "blur(0px)");
            }
            window.setTimeout( hideLoader2, 2000 );
        }
    
    </script>
    <?php
        $servername = "localhost";
        $username = "root";        
        $conn = new mysqli($servername, $username,"","number_count");    
        mysqli_query($conn,"insert into counter values(1)");
        $result = mysqli_query($conn,"select * from counter");
        $num=mysqli_num_rows($result);
        echo $num;
        if($num<=6)
        {
            echo "<script>load1()</script>";
        }
            else
            echo "<script>load2()</script>";
    ?>
	
	
    
  </body>
</html>