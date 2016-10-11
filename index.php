<html ng-app="ISTE">

<head>
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<link rel="stylesheet" type="text/css" href="libsmin/semantic.min.css">
	<link rel="stylesheet" type="text/css" href="appFonts.css">
	<link rel="stylesheet" type="text/css" href="app.css">
</head>


<body ng-controller="bodyCtrl as bodyvm">
	<!--menu bar-->

	<!--top menu start-->
	<div class="ui fluid container main-menu">
		<div class="ui secondary  menu">
			<a href="#/">
				<li class="item" ng-class="{'active':bodyvm.activetab == 'home'}">Home</li>
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

	<div>
		<ng-view></ng-view>
	</div>




	<div class="ui inverted vertical footer segment" style=" position: relative;
    top: 10%;">


		<!--<div class="ui center aligned container">
            <div class="ui stackable inverted divided grid">
                <div class="three wide column">
                    <h4 class="ui inverted header">Group 1</h4>
                    <div class="ui inverted link list">
                        <a href="#" class="item">Link One</a>

                    </div>
                </div>
                <div class="three wide column">
                    <h4 class="ui inverted header">Group 2</h4>
                    <div class="ui inverted link list">
                        <a href="#" class="item">Link One</a>

                    </div>
                </div>
                <div class="three wide column">
                    <h4 class="ui inverted header">Group 3</h4>
                    <div class="ui inverted link list">
                        <a href="#" class="item">Link One</a>

                    </div>
                </div>
                <div class="seven wide column">
                    <h4 class="ui inverted header">Footer Header</h4>
                    <p>Awesomeness babe.</p>
                </div>
            </div>
            <div class="ui inverted section divider"></div>
            <img src="assets/images/logo.png" class="ui centered mini image">
            <div class="ui horizontal inverted small divided link list">
                <a class="item" href="#">GRIET</a>
                <a class="item" href="#">Contact Us</a>
                <a class="item" href="#">Terms and Conditions</a>
                <a class="item" href="#">Privacy Policy</a>
            </div>
        </div>-->

		<div class="ui center aligned container">
			<div class="ui stackable inverted divided grid">
				<div class="two wide column">
					<h4 class="ui inverted header"><img class="ui image small" src="images/logos/istelogo.png" alt=""></h4>
					<div class="ui inverted link list">
						<!--<a href="#" class="item">Link One</a>-->

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
					<div class="ui horizontal inverted small divided link list">
						<a class="item" href="https://www.facebook.com/ISTEGRIETSB/"><i class="icon-facebook"></i></a>
						<a href="https://twitter.com/istegrietsb" class="item"><i class="icon-twitter"></i></a>
						<a href="mailto:istegrietsb@gmail.com" class="item"><i class="icon-mail"></i></a>
						<a href="https://www.instagram.com/istegrietsb/?hl=en" class="item"><i class="icon-instagram"></i></a>
						<a href="#/contact#contact-number" class="item"><i class="icon-phone"></i> </a>
					</div>
					<!--Social links-->
				</div>
			</div>
			<div class="ui inverted section divider"></div>
			<img src="images/logos/grietlogo.png" class="ui centered mini image">
			<div class="ui horizontal inverted small divided link list">
				<a class="item" href="http://www.griet.ac.in/">GRIET</a>
				<a class="item" href="#/contact">Contact Us</a>
				<a class="item" href="#">Terms and Conditions</a>
				<a class="item" href="#">Privacy Policy</a>
				<a class="item" href="#">All Rights Reserved </a>
			</div>
		</div>



	</div>


	<script src="libsmin/angular/angular.min.js"></script>
	<script src="libsmin/angular/angular-route.min.js"></script>


	<script src="app.js"></script>

	<!--services-->
	<script src="services/dataService.js"></script>

	<!--directives-->

	<script src="directives/renderDescription.js"></script>
	<!--controllers-->
	<script src="controllers/homeCtrl.js"></script>
	<script src="controllers/eventsCtrl.js"></script>
	<script src="controllers/eventDetailCtrl.js">
    </script>
	<script src="controllers/teamCtrl.js">
    </script>
	<script src="controllers/aboutCtrl.js">
    </script>
	<script src="controllers/melaCtrl.js"></script>
	<script src="controllers/contactCtrl.js"></script>
</body>

</html>