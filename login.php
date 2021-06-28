<!DOCTYPE html>
<html>
<head>
	<title>account-Glamour360</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initail-scale=1"><!--element with name="viewport" makes the website look good on all devices and screen resolutions-->
	<link href="fontawesome-free-5.13.0-web/css/all.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="style1.css">
	<style type="text/css">
		.side
		{
			flex: 33%;
			height: 500px;
		}
		.main
		{
			flex: 67%;
			height: 500px;
		}
		.signout a
		{
			color: white;
			text-decoration: none;
			margin-top: 0px;
			margin-left:90%; 
		}
		.signout a:hover
		{
			opacity: 0.8;
		}
		.social
		{
			top: 0%;
			opacity: 1;
		}
		.flip-box {
			float: left;
  			background-color: transparent;
  			width: 500px;
  			height: 500px;
  			border: 1px solid #f1f1f1;
  			perspective: 1000px;
		}

		.flip-box-inner {
  			position: relative;
  			width: 100%;
  			height: 100%;
  			text-align: center;
  			transition: transform 0.8s;
  			transform-style: preserve-3d;
		}

		.flip-box:hover .flip-box-inner {
  			transform: rotateX(180deg);
		}

		.flip-box-front, .flip-box-back {
  			position: absolute;
  			width: 100%;
  			height: 100%;
  			-webkit-backface-visibility: hidden;
  			backface-visibility: hidden;
		}

		.flip-box-front {
  			background-color: #bbb;
  			color: black;
		}

		.flip-box-back {
  			background-color: dodgerblue;
  			color: white;
  			transform: rotateX(180deg);
		}
		.flip-box-back a
		{
			text-decoration: none;
			font-size: 20px;
			color: white;
		}
		.flip-box-back a:hover
		{
			color: yellow;
		}
		.section a
		{
			color: yellow;
			margin-left: 270px;
		}
	</style>
</head>
<body>
	<div class="header">
		<div class="signout">
			<a href="sign in.html"><i class="fas fa-sign-out-alt"></i>Sign-out</a>
		</div>
		<img src="Slideshow-image/avatar.jpg" style="border-radius: 50%;">
		<h1 style="text-align: center; text-shadow: 2px 2px;">Welcome <?php echo $_POST["name"]; ?><br>Now you log into to your account!</h1>
		<p id="show-pay-method"></p>
		<p id="loyal"></p>
	</div>
	<div class="navbar" >
		<a href="index.html"><i class="fas fa-home"></i>Home</a>
		<a href="team.html">Our Team</a>
		<a href="mv.html">Mission & Vission</a>
		<a href="deals.html">Deals</a>
		<a href="contact.html">Contact Us</a>
		<a href="island shops.html">Island wide shops</a>
		<div class="search-container">
			<form action="">
				<input type="text" placeholder="Search.." name="search">
				<button type="submit"><i class="fas fa-search"></i></button>
			</form>
		</div>
	</div>
	<div class="row">
		<div class="side">
			<p style="text-align: center;">~Other sections~</p>
			<div class="section">
				<a href="women.html">Women</a><br>
				<a href="men.html">Men</a><br>
				<a href="kids.html">kids</a><br>
				<a href="gift.html">Gifts</a><br>
				<a href="watch.html">Watches</a><br>		
			</div>
			<nav class="social">
				<ul>
					<li class="facebook">
						<a href="https://www.facebook.com/" target="blank">Facebook
							<i class="fab fa-facebook" aria-hidden="true"></i>
						</a>
					</li>
				</ul>
				<ul>
					<li class="instagram">
						<a href="https://www.instagram.com/accounts/login/?hl=en" target="blank">Instagram
							<i class="fab fa-instagram" aria-hidden="true"></i>
						</a>
					</li>
				</ul>
				<ul>
					<li class="youtube">
						<a href="https://www.youtube.com/" target="blank">Youtube
							<i class="fab fa-youtube" aria-hidden="true"></i>
						</a>
					</li>
				</ul>
				<ul>
					<li class="twitter">
						<a href="https://twitter.com/hashtag/login?lang=en" target="blank">Twitter
							<i class="fab fa-twitter" aria-hidden="true"></i>
						</a>
					</li>
				</ul>
			</nav>
		</div>
		<div class="main">
			<div class="flip-box">
  				<div class="flip-box-inner">
    				<div class="flip-box-front" style="background-color: orange; color: white;font-size: 50px;">
       					<h2 style="margin-top:10%;"><i class="fas fa-money-check-alt"></i>Add a money payment method!</h2>

    				</div>
    				<div class="flip-box-back">
    					<h4 style="margin-top:40%;">Click on your payment method:-</h4>
      					<ol style="text-align: left;margin-left: 30%;">
      						<li><a href="#" id="pay-type" onclick="document.getElementById('show-pay-method').innerHTML ='Your payement method: Credit card';">Credit-card</a></li>
      						<li><a href="#" id="pay-type" onclick="document.getElementById('show-pay-method').innerHTML ='Your payement method: Debit card';">Debit-card</a></li>
      						<li><a href="#" id="pay-type" onclick="document.getElementById('show-pay-method').innerHTML ='Your payement method: American Express';">American Express</a></li>
      					</ol>
    				</div>
  				</div>
			</div>
			<div class="flip-box">
  				<div class="flip-box-inner">
    				<div class="flip-box-front" style="background-color: green; color: white;font-size: 50px;">
       					<h2 style="margin-top:10%;"><i class="fas fa-star-half-alt"></i>Do you want to apply for loyalty membership???</h2>

    				</div>
    				<div class="flip-box-back">
    					<h4 style="margin-top:40%;">Click on your opinion:-</h4>
      					<ol style="text-align: left;margin-left: 30%;">
      						<li><a href="#" id="pay-type" onclick="document.getElementById('loyal').innerHTML ='~Your applied for loyalty membership~';"><i class="far fa-thumbs-up"></i>Yes</a></li>
      						<li><a href="#" id="pay-type" onclick="document.getElementById('loyal').innerHTML ='~You don\'t want to apply for loyalty membership~';"><i class="far fa-thumbs-down"></i>No</a></li>
      					</ol>
    				</div>
  				</div>
			</div>
		</div>
	</div>
	<div class="footer-main">
		<div class="social-icons">
			<ul>
				<li><a href="https://www.facebook.com/" target="blank"><i class="fab fa-facebook"></i></a></li>
				<li><a href="https://twitter.com/hashtag/login?lang=en" target="blank"><i class="fab fa-twitter"></i></a></li>
				<li><a href="https://www.youtube.com/" target="blank"><i class="fab fa-youtube"></i></a></li>
			</ul>
		</div>
		<div class="footer-bottom">
			<p>Desined by: Deelaka Wejith Kariyawasam</p>
		</div>
	</div>
</body>
</html>