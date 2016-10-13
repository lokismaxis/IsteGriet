<!DOCTYPE html/>
<html lang="en" ng-app="ISTE">

<head>

	<!--<base href="/">-->
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<meta charset="utf-8">

	<title>ISTE GRIET</title>
	<link rel="apple-touch-icon" sizes="57x57" href="icons/apple-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="icons/apple-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="72x72" href="icons/apple-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="76x76" href="icons/apple-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="114x114" href="icons/apple-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="120x120" href="icons/apple-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="144x144" href="icons/apple-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="152x152" href="icons/apple-icon-152x152.png">
	<link rel="apple-touch-icon" sizes="180x180" href="icons/apple-icon-180x180.png">
	<link rel="icon" type="image/png" sizes="192x192" href="icons/android-icon-192x192.png">
	<link rel="icon" type="image/png" sizes="32x32" href="icons/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="96x96" href="icons/favicon-96x96.png">
	<link rel="icon" type="image/png" sizes="16x16" href="icons/favicon-16x16.png">

	<link rel="manifest" href="/manifest.json">
	<meta name="msapplication-TileColor" content="#8B1734">
	<meta name="msapplication-TileImage" content="icons/ms-icon-144x144.png">
	<meta name="theme-color" content="#8B1734">

	<link rel="stylesheet" type="text/css" href="libsmin/semantic.min.css">
	<link rel="stylesheet" type="text/css" href="app.min.css">
</head>


<body ng-controller="bodyCtrl as bodyvm">
	<!--menu bar-->

	<!--top menu start-->
	<div class="ui fluid container main-menu">
		<div class="ui secondary  menu">
			<a href="#/">
				<li class="item home-tab" ng-class="{'active':bodyvm.activetab == 'home'}">
					<img class="" src="/images/logos/istewhite.png" alt="Home tab">
				</li>
			</a>

			<a href="#/events">
				<li class="item" ng-class="{'active':bodyvm.activetab =='events'}">Events</li>
			</a>
			<a href="#/mela">
				<li class="item" ng-class="{'active':bodyvm.activetab =='mela'}">Mela</li>
			</a>

			<a href="#/team">
				<li class="item" ng-class="{'active':bodyvm.activetab =='team'}">Team</li>
			</a>
			<a href="#/about">
				<li class="item" ng-class="{'active':bodyvm.activetab =='about'}">About</li>
			</a>
			<a href="#/contact">
				<li class="item" ng-class="{'active':bodyvm.activetab =='contactUs'}">Contact</li>
			</a>

			<!--<div class="right menu">
				<div class="item">
					<div class="ui icon input">
						<input type="text" placeholder="Search...">
						<i class="search link icon"></i>
					</div>
				</div>

			</div>-->
		</div>
	</div>
	<!--top menu end-->


	<!--All app renders in this div-->
	<div>
		<!--<ng-view></ng-view>-->
		<!--Above the fold content-->
		<div class="ui fluid container">


			<div class="homeImage">

				<div class="centerAttraction">
					<h2>Welcome to ISTE GRIET SB</h2>


					<h3>Our mission is to bring awareness about the developments in the field of science and technology to students.</h3>
					<!--<div class="hometitles">
				<div ng-class="{'active animated fadeIn':home.title1,'hide':home.hidetitle1}">
					<span class="title ">VISION</span>
					<div class="content">
						SOme awesome Content about our vision! SOme awesome Content about our vision! SOme awesome Content about our vision! SOme
						awesome Content about our vision! SOme awesome Content about our vision!
					</div>
				</div>
				<div ng-class="{'active animated fadeIn':home.title2,'hide':home.hidetitle2}">
					<span class="title">MISSION</span>
					<div class="content">
						To formulate the general goals & responsibilities of technical education.To adjust curriculum & educational processes to
						changing conditions.To develop effective teachers & educational administrators.

					</div>
				</div>
				<div ng-class="{'active animated fadeIn':home.title3,'hide':home.hidetitle3}">
					<span class="title">GOALS</span>
					<div class="content">
						SOme awesome Content about our goals! SOme awesome Content about our vision! SOme awesome Content about our vision! SOme
						awesome Content about our vision! SOme awesome Content about our vision!
					</div>
				</div>
			</div>-->

				</div>


			</div>




			<!--<div class="ui horizontal segments home-events">
		<div class="ui segment ">
			<div class="ui header">Upcoming Events!</div>
			<div class="ui  tertiary attached   inverted  blue   segment"><a href="#/event/mela_main">MELA-The Tech Carnival</a></div>
			<div class="ui  tertiary  attached inverted   yellow  segment"><a href="#/event/Water_Level_Indicator">Technical Talk On 'Water Level Indicator'</a></div>
			<div class="ui  tertiary attached   inverted  blue   segment"><a href="#/event/mela_main">MELA-The Tech Carnival</a></div>
			<div class="ui  tertiary  attached inverted   yellow  segment"><a href="#/event/Water_Level_Indicator">Technical Talk On 'Water Level Indicator'</a></div>
			<div class="ui bottom attached   grey info message">
				<i class="warning icon"></i> <a href="#/events">Click to see All Events!</a>
			</div>
		</div>


		<div class="ui segment ">
			<div class="ui header">Upcoming Events!</div>
			<div class="ui  tertiary attached   inverted  blue   segment"><a href="#/event/mela_main">MELA-The Tech Carnival</a></div>
			<div class="ui  tertiary  attached inverted   yellow  segment"><a href="#/event/Water_Level_Indicator">Technical Talk On 'Water Level Indicator'</a></div>
			<div class="ui  tertiary attached   inverted  blue   segment"><a href="#/event/mela_main">MELA-The Tech Carnival</a></div>
			<div class="ui  tertiary  attached inverted   yellow  segment"><a href="#/event/Water_Level_Indicator">Technical Talk On 'Water Level Indicator'</a></div>
			<div class="ui bottom attached   grey info message">
				<i class="warning icon"></i> <a href="#/events">Click to see All Events!</a>
			</div>
		</div>

	</div>-->

			<div class="recent-events-header center">
				<div class="ui header">Recent Events!</div>
			</div>
			<!--Recent events cards!!-->
			<div class="home-events-showcase">
				<div class="ui six stackable cards">

					<a class="teal card" href="#/event/code_auction">
						<div class="content">
							<div class="header">Code Auction</div>
							<div class="meta">28-SEPT-2016</div>
							<div class="description">
								Coding along with Auctioning is awesome. Dont trust us??? Ummm.. then you need to join with us in Code Auction.
							</div>
						</div>
						<!--<div class="extra content">
					<p>Call : 9700989085</p>
					
				</div>-->
					</a>



					<!--each card-->


					<a class="blue card" href="#/event/industrial_visit_rttc">
						<div class="content">
							<div class="header">Industrial Tour</div>
							<div class="meta">11-AUG-2016</div>
							<div class="description">
								Dont miss the wonderful opprtunity to witness the real time applications by RTTC BSNL.
							</div>
						</div>
						<!--<div class="extra content">
					<p>Call : 9700989085</p>
					<p>
						<a href="https://www.facebook.com/">link</a>
					</p>

				</div>-->
					</a>

					<!--each card end-->

					<a class="violet card" href="#/event/fast_and_furious">
						<div class="content">
							<div class="header">Fast And Furious</div>
							<div class="meta">15-JULY-2016</div>
							<div class="description">
								Hola Mechanical Engineers...! Add a desgin to your dream automobiles and make a difference.
							</div>
						</div>
						<!--<div class="extra content">
					<p>Call : 9700989085</p>
					<p>
						<a href="https://www.facebook.com/">link</a>
					</p>

				</div>-->
					</a>
					<a class="green card" href="#/event/Pic-O-mentry">
						<div class="content">
							<div class="header">Pic-O-mentry</div>
							<div class="meta">25-FEB-2016 - 4-MARCH-2016</div>
							<div class="description">
								Wake up the creative writing skills in you,Choose a picture and show your skills. <br>Get your stories published
								in Metro India, The Hindhu<br>

							</div>
						</div>
						<!--<div class="extra content">
					<p>Call : 97000989085</p>
					<p>
						<a href="https://www.facebook.com/">link</a>
					</p>

				</div>-->
					</a>
					<a class="yellow card" href="#/event/Digital_Marketing">
						<div class="content">
							<div class="header">Digital Marketing</div>
							<div class="meta">13-FEB-2016</div>
							<div class="description">
								Well we here provides you with a platform to quench your thirst of curiosity with the digital marketing sessions!</p>
							</div>
						</div>
						<!--<div class="extra content">
					<p>Call : 9908142041</p>
					<p>
						<a href="https://www.facebook.com/">link</a>
					</p>

				</div>-->
					</a>

					<a class="black card" href="#/event/Arduino_session">
						<div class="content">
							<div class="header">Arduino Session</div>
							<div class="meta">11-FEB-2016</div>
							<div class="description">
								Arduino changed the whole hardware eco-system by showing how real hardware works. Join and explore the arduino world. Free
								hands on Session.
							</div>
						</div>
						<!--<div class="extra content">
					<p>Call : 9908142041</p>
					<p>
						<a href="https://www.facebook.com/">link</a>
					</p>

				</div>-->
					</a>



				</div>
				<!--cards end-->
			</div>
			<!--Recent events cards endd!!-->
		</div>

		<!--Above the fold content end-->
	</div>

	<!--All our app renders in this div-->




	<div class="ui inverted vertical footer segment" style=" position: relative;
    top: 10%;">




		<div class="ui center aligned container">
			<div class="ui stackable inverted divided grid">
				<div class="two wide column">
					<h4 class="ui inverted header"><img class="ui image small" src="images/logos/istelogo.png" alt=""></h4>
					<div class="ui inverted link list">
						<!--<a href="" class="item">Link One</a>-->

					</div>
				</div>

				<div class="eight wide column">
					<h3 class="ui inverted header">Gokaraju Rangaraju Institute of Engineering and Technology</h3>
					<h5 class="ui inverted header">(Approved by AICTE, Autonomous under JNTUH, Hyderabad)</h5>
					<h5 class="ui inverted header">Bachupally, Kukatpally, Hyderabad-500090</h5>
					<div class="ui inverted link list">


					</div>
				</div>
				<div class="six wide column">
					<h4 class="ui inverted header">Social Media</h4>

					<!--social links-->
					<div class="ui horizontal inverted large divided massive link list">
						<a class="item" href="https://www.facebook.com/ISTEGRIETSB/"><i class="icon-facebook"></i></a>
						<a href="https://twitter.com/istegrietsb" class="item"><i class="icon-twitter"></i></a>
						<a href="mailto:istegrietsb@gmail.com" class="item"><i class="icon-mail"></i></a>
						<a href="https://www.instagram.com/istegrietsb/?hl=en" class="item"><i class="icon-instagram"></i></a>
						<a href="#/contact#contactnumber" class="item"><i class="icon-phone"></i> </a>
					</div>
					<!--Social links-->
				</div>
			</div>
			<div class="ui inverted section divider"></div>
			<a href="http://www.griet.ac.in/">
				<img src="images/logos/grietlogo.png" alt="Griet logo" class="ui centered mini image">
			</a>

			<div class="ui horizontal inverted small divided link list">
				<a class="item" href="http://www.griet.ac.in/">GRIET</a>
				<a class="item" href="#/contact">Contact Us</a>
				<a class="item" href="#">Terms and Conditions</a>
				<a class="item" href="#">Privacy Policy</a>
				<a class="item" href="#">All Rights Reserved </a>
			</div>
		</div>



	</div>


	<script async type="text/javascript" src="libsmin/angular/angular.js"></script>
	<script async type="text/javascript" src="app.min.js"></script>
	<!--<script src="app.js"></script>

	
	<script src="services/dataService.js"></script>

	
	<script src="directives/renderDescription.js"></script>
	
	<script src="controllers/homeCtrl.js"></script>
	<script src="controllers/eventsCtrl.js"></script>
	<script src="controllers/eventDetailCtrl.js">
    </script>
	<script src="controllers/teamCtrl.js">
    </script>
	<script src="controllers/aboutCtrl.js">
    </script>
	<script src="controllers/melaCtrl.js"></script>
	<script src="controllers/contactCtrl.js"></script>-->
</body>

</html>