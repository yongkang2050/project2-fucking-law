<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Home | E-Shopper</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/price-range.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
	<link href="css/main.css" rel="stylesheet">
	<link href="css/responsive.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="https://i.pinimg.com/originals/90/46/e7/9046e7e309713f8d8d5118541ab93f1d.png">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->

<body>
	<header id="header"><!--header-->
		<div class="header_top"><!--header_top-->
			<div class="container">
				<div class="row">
					<div class="col-sm-6">
						<div class="contactinfo">
							<ul class="nav nav-pills">
								<li><a href="#"><i class="fa fa-phone"></i>  019-2233456</a></li>
								<li><a href="#"><i class="fa fa-envelope"></i> heheboi@gmail.com</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header_top-->
		
		<div class="header-middle"><!--header-middle-->
			<div class="container">
				<div class="row">
					<div class="col-sm-4">
						<div class="logo pull-left">
							<a href="index.html"><img src="https://iconape.com/wp-content/files/yv/352801/svg/352801.svg" width="100" height="50"/></a>
						</div>
					
					</div>
					
				</div>
			</div>
		</div><!--/header-middle-->
	
		<div class="header-bottom"><!--header-bottom-->
			<div class="container">
				<div class="row">
					<div class="col-sm-9">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div>
						<div class="mainmenu pull-left">
							<ul class="nav navbar-nav collapse navbar-collapse">
								<li><a href="index.html" class="active">Contact</a></li>
								<li class="dropdown"><a href="#">Shop<i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">
                                        <li><a href="shop.html">Products</a></li>
										<li><a href="product-details.html">Product Details</a></li> 

                                    </ul>
                                </li> 
								<li><a href="contact-us.php">Contact</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-3">
					</div>
				</div>
			</div>
		</div><!--/header-bottom-->
	</header><!--/header-->
	 
	 <div id="contact-page" class="container">
    	<div class="bg">
	    	<div class="row">    		
	    		<div class="col-sm-12">    			   			
					<h2 class="title text-center">Contact <strong>Us</strong></h2>    			    				    				
					<div id="gmap" class="contact-map">
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3984.399143510591!2d101.79057135036295!3d2.9865988978142197!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31cdcb841d3762c7%3A0x4dc97330d731c530!2z5paw57qq5YWD5aSn5a2m5a2m6Zmi!5e0!3m2!1szh-CN!2smy!4v1628234745763!5m2!1szh-CN!2smy" width="1100" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
					</div>
				</div>			 		
			</div>    	
			

    		<div class="row">  	
	    		<div class="col-sm-8">
				<?php

				if (isset($_POST["submit"]))
				{
					
					if (file_exists('user_data.json'))
					{
						$current_data = file_get_contents('user_data.json');
						$array_data = json_decode($current_data, true);
						$extra = array(
							'id' => $_POST['id'],
							'name' => $_POST['name'],
							'email' => $_POST['email'],
							'subject' => $_POST['subject'],
							'message' => $_POST['message']
						);
						$array_data[] = $extra;
						
						$final_data = json_encode($array_data, JSON_PRETTY_PRINT);

						if (file_put_contents('user_data.json', $final_data))
						{
							$message = "<label class = 'text-success'>Message Sent Successfully</p>";
						}
						else
						{
						$error = 'JSON File not exists';
						}
					}
					
				}
				
				
				?>
			<form method="post">
				<?php
				if (isset($error))
				{
					echo $error;
				}
				?>
	    			<div class="contact-form">
	    				<h2 class="title text-center">Get In Touch</h2>
	    				<div class="status alert alert-success" style="display: none"></div>
				    	<form id="main-contact-form" class="contact-form row" name="contact-form" method="post">
						<div class="form-group col-md-6">
				                <input type="text" name="id" class="form-control" placeholder="user id">
				            </div>
				            <div class="form-group col-md-6">
				                <input type="text" name="name" class="form-control" placeholder="Name">
				            </div>
				            <div class="form-group col-md-6">
				                <input type="email" name="email" class="form-control" placeholder="Email">
				            </div>
				            <div class="form-group col-md-12">
				                <input type="text" name="subject" class="form-control" placeholder="Subject">
				            </div>
				            <div class="form-group col-md-12">
				                <textarea name="message" id="message" class="form-control" rows="8" placeholder="Your Message Here"></textarea>
				            </div>                        
				            <div class="form-group col-md-12">
				                <input type="submit" name="submit" class="btn btn-primary pull-right" value="Submit">
				            </div>
							<?php
								if (isset($message))
								{
									echo $message;
								}
							?>
				        </form>
	    			</div>
	    		</div>
				<div class="col-sm-4">
	    			<div class="contact-info">
	    				<h2 class="title text-center">Contact Info</h2>
	    				<address>
	    					<p>Itamiyokanjiro Inc.</p>
							<p>12, Jalan Bagistan ,Taman Samseng</p>
							<p>Selangor Malaysia</p>
							<p>Mobile: +019 23456789</p>
							<p>Fax: +03 2341 5578</p>
							<p>Email: info@e-shopper.com</p>
	    				</address>
	    			
	    			</div>
    			</div>    			
	    	</div>  
    	</div>	
    </div><!--/#contact-page-->
	
	<footer id="footer"><!--Footer-->
		
		<div class="footer-widget">
			<div class="container">
				<div class="row">
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>Service</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="contact-us.php">Contact Us</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>Policies</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="terms of use.html">Terms of Use</a></li>
								<li><a href="privecy policy.html">Privecy Policy</a></li>
							</ul>
						</div>
					</div>		
					
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>JQuery Checking </h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="privecy policy.html">Privecy Policy</a></li>
								<li><a href="index.html">Index</a></li>
								<li><a href="shop.html">Shop</a></li>
							</ul>
						</div>
					</div>		
				</div>
			</div>
		</div>
		
		<div class="footer-bottom">
			<div class="container">
				<div class="row">
					<p class="pull-left">Copyright © 2021 AD-Web G1. All rights reserved.</p>
					<p class="pull-right">Designed by <span>Prodigal Eye</span></p>
				</div>
			</div>
		</div>
		
	</footer><!--/Footer-->
	
	
	
	
	<script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script>
	<script type="text/javascript" src="js/gmaps.js"></script>
	<script src="js/contact.js"></script>
	<script src="js/price-range.js"></script>
	<script src="js/jquery.scrollUp.min.js"></script>
	<script src="js/jquery.prettyPhoto.js"></script>
	<script src="js/main.js"></script>
	</body>
	</html>