<!DOCTYPE html>
<html lang="en">
	<head>
		<title>HOME</title>
		<meta charset="utf-8">
		<meta Name="format-detection" content="telephone=no" />
		<link rel="icon" href="images/favicon.ico">
		<link rel="shortcut icon" href="images/favicon.ico" />
		<link rel="stylesheet" href="booking/css/booking.css">
		<link rel="stylesheet" href="css/camera.css">
		<link rel="stylesheet" href="css/owl.carousel.css">
		<link rel="stylesheet" href="css/style.css">
		<script src="js/jquery.js"></script>
		<script src="js/jquery-migrate-1.2.1.js"></script>
		<script src="js/script.js"></script>
		<script src="js/superfish.js"></script>
		<script src="js/jquery.ui.totop.js"></script>
		<script src="js/jquery.equalheights.js"></script>
		<script src="js/jquery.mobilemenu.js"></script>
		<script src="js/jquery.easing.1.3.js"></script>
		<script src="js/owl.carousel.js"></script>
		<script src="js/camera.js"></script>
		<!--[if (gt IE 9)|!(IE)]><!-->
		<script src="js/jquery.mobile.customized.min.js"></script>
		<!--<![endif]-->
		<script src="booking/js/booking.js"></script>
		<script>
			$(document).ready(function(){
			jQuery('#camera_wrap').camera({
				loader: false,
				pagination: false ,
				minHeight: '444',
				thumbnails: false,
				height: '48.375%',
				caption: true,
				navigation: true,
				fx: 'mosaic'
			});
			/*carousel*/
			var owl=$("#owl");
				owl.owlCarousel({
				items : 2, //10 items above 1000px browser width
				itemsDesktop : [995,2], //5 items between 1000px and 901px
				itemsDesktopSmall : [767, 2], // betweem 900px and 601px
				itemsTablet: [700, 2], //2 items between 600 and 0
				itemsMobile : [479, 1], // itemsMobile disabled - inherit from itemsTablet option
				navigation : true,
				pagination : false
				});
			$().UItoTop({ easingType: 'easeOutQuart' });
			});
		</script>
		<!--[if lt IE 8]>
		<div style=' clear: both; text-align:center; position: relative;'>
			<a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode">
				<img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outtimed browser. For a faster, safer browsing experience, upgrade for free today." />
			</a>
		</div>
		<![endif]-->
		<!--[if lt IE 9]>
		<script src="js/html5shiv.js"></script>
		<link rel="stylesheet" media="screen" href="css/ie.css">
		<![endif]-->
	</head>
	<body class="page1" id="top">
<!--==============================header=================================-->
		<header>
			<div class="container_12">
				<div class="grid_12">
					<div class="menu_block">
						<nav class="horizontal-nav full-width horizontalNav-notprocessed">
							<ul class="sf-menu">
								<li class="current"><a href="index.html">HOME</a></li>
								<li><a href="index-1.html">VIP SLOTS</a></li>
								<li><a href="index-2.html">SPECIAL OFFERS</a></li>
								<li><a href="#">PRICING</a></li>
								<li><a href="index-4.html">CONTACTS</a></li>
							</ul>
						</nav>
						<div class="clear"></div>
					</div>
				</div>
				<div class="grid_12">
					<h1>
						<a href="index.html">
							<!-- <img src="images/logo.png" alt="Your Happy Family"> -->
						</a>
					</h1>
				</div>
			</div>
		</header>
		<div class="slider_wrapper">
			<div id="camera_wrap" class="">
				<div data-src="images/slide.jpg">
					<!-- <div class="caption fadeIn">
						<h2>LONDON</h2>
						<div class="price">
							FROM
							<span>$1000</span>
						</div>
						<a href="#">LEARN MORE</a>
					</div> -->
				</div>
				<div data-src="images/slide1.jpg">
					<!-- <div class="caption fadeIn">
						<h2>Maldives</h2>
						<div class="price">
							FROM
							<span>$2000</span>
						</div>
						<a href="#">LEARN MORE</a>
					</div> -->
				</div>
				<div data-src="images/slide2.jpg">
					<!-- <div class="caption fadeIn">
						<h2>Venice</h2>
						<div class="price">
							FROM
							<span>$1600</span>
						</div>
						<a href="#">LEARN MORE</a>
					</div> -->
				</div>
			</div>
		</div>
<!--==============================Content=================================-->
		<div class="content"><div class="ic"></div>
			<div class="container_12">
				<div class="grid_4">
					<div class="banner">
						<img src="images/ban_img1.jpg" alt="">
						<div class="label">
							<div class="title"></div>
							<div class="price">FROM<span></span></div>
							<a href="#">LEARN MORE</a>
						</div>
					</div>
				</div>
				<div class="grid_4">
					<div class="banner">
						<img src="images/ban_img2.jpg" alt="">
						<div class="label">
							<div class="title"></div>
							<div class="price">FROM<span></span></div>
							<a href="#">LEARN MORE</a>
						</div>
					</div>
				</div>
				<div class="grid_4">
					<div class="banner">
						<img src="images/ban_img3.jpg" alt="">
						<div class="label">
							<div class="title"></div>
							<div class="price">FROM<span></span></div>
							<a href="#">LEARN MORE</a>
						</div>
					</div>
				</div>
<?php
// define variables and set to empty values
$NameErr = $dateErr =  $EmailErr = $cityErr = $CheckinErr = $CheckoutErr = $slotsErr = $vehicleErr = $MessageErr = "";
$Name =  $date = $Email = $city = $Checkin = $Checkout = $slots = $vehicle = $Message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["Name"])) {
    $NameErr = "Name is required";
  } else {
    $Name = test_input($_POST["Name"]);
    // check if Name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$Name)) {
      $NameErr = "Only letters and white space allowed"; 
    }
  }
  if (empty($_POST["date"])) {
    $dateErr = "date is required";
  } else {
    $date = test_input($_POST["date"]);
    // check if e-mail address is well-formed
    
    }
  
  if (empty($_POST["Email"])) {
    $EmailErr = "Email is required";
  } else {
    $Email = test_input($_POST["Email"]);
    // check if e-mail address is well-formed
    if (!filter_var($Email, FILTER_VALIDATE_Email)) {
      $EmailErr = "Invalid Email format"; 
    }
  }
   if (empty($_POST["city"])) {
    $cityErr = "city is required";
  } else {
    $city = test_input($_POST["city"]);
  }
   
    
  if (empty($_POST["checkin"])) {
    $checkinErr = "checkin is required";
  } else {
    $checkin = test_input($_POST["checkin"]);
  
  }
   if (empty($_POST["checkout"])) {
    $checkoutErr = "checkout is required";
  } else {
    $checkout = test_input($_POST["checkout"]);
  
  }
  if (empty($_POST["slots"])) {
    $slotsErr = "slots is required";
  } else {
    $slots = test_input($_POST["slots"]);
  }
  if (empty($_POST["vehicle"])) {
    $vehicleErr = "vehicle is required";
  } else {
    $vehicle = test_input($_POST["vehicle"]);
  }


  if (empty($_POST["Message"])) {
    $Message = "";
  } else {
    $Message = test_input($_POST["Message"]);
  }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
				<div class="clear"></div>
				<div class="grid_6">
					<h3>Booking Form</h3>
					<form id="bookingForm" action="indexprocess.php" method="post">
						<div class="fl1">
							<div class="tmInput">
								<input name="Name" placeHolder="Name:" type="text" value="<?php echo $Name;?>"><?php echo $NameErr;?>

							</div>
							<div class="tmInput">
								<input name="date" placeHolder="date:" type="date"  value="<?php echo $date;?>"><?php echo $dateErr;?>
							</div>
						</div>
						<div class="fl1">
							<div class="tmInput">
								<input name="Email" placeHolder="Email:" type="text"  value="<?php echo $Email;?>"><?php echo $EmailErr;?>
							</div>
							<div class="tmInput mr0">
								<input name="city" placeHolder="city:" type="text" value="<?php echo $city;?>"><?php echo $cityErr;?>
							</div>
						</div>
						<div class="clear"></div>
						<strong>Check-in</strong>
						<label class="tmtimepicker">
							<input type="time" name="Check-in" placeHolder='' value="<?php echo $Checkin;?>"><?php echo $CheckinErr;?>
						</label>
						<div class="clear"></div>
						<strong>Check-out</strong>
						<label class="tmtimepicker">
							<input type="time" name="Check-out" placeHolder='' value="<?php echo $Checkout;?>"><?php echo $CheckoutErr;?>
						</label>
						<div class="clear"></div>
						
						<div class="clear"></div>
						<div class="fl1 fl2">
							<em>slots</em>
							<select name="slots" class="tmSelect auto" data-class="tmSelect tmSelect2" data-constraints="" value="<?php echo $slots;?>"><?php echo $slotsErr;?>
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
							</select>
							<div class="clear"></div>
							<em>vehicle type</em>
							<select Name="vehicle" class="tmSelect auto" data-class="tmSelect tmSelect2"  value="<?php echo $vehicle;?>"><?php echo $vehicleErr;?>
								<option>4 sheeter</option>
								<option>4 sheeter</option>
								<option>6 sheeter</option>
								<option>8 sheeter</option>
							</select>
						</div>
						
						<div class="clear"></div>
						<div class="tmTextarea">
							<textarea Name="Message" placeHolder="Message" value="<?php echo $Message;?>"><?php echo $Message;?></textarea>
						</div>
						<a href="#" class="btn" data-type="submit">Submit</a>
					</form>
				</div>
				<div class="grid_5 prefix_1">
					<h3>Welcome user</h3>
					<img src="images/page1_img1.png" alt="" class="img_inner fleft">
					<div class="extra_wrapper">
					<button><ul>
 <li><a href="login.php"> log in 
</a>
 </li>
</ul>
</button>
<button>
	<ul>
 <li><a href="signup.php"> sign in
 </a>
</li>
</ul>
</button>
					</div>
					<div class="clear cl1"></div>
					<p>This is the single online gate way to our service.</p>
					<p><span class="col1"> Here the common user can get the information about the services which are arranged in your city.one can choose the plans and the services are according to the plans the user choosed ,
						<br>
					"enjoy our services"</span></p>
					<h4>Clients’ Quotes</h4>
					<blockquote class="bq1">
						<img src="images/page1_img2.jpg" alt="" class="img_inner noresize fleft">
						<div class="extra_wrapper">
							<p></p>
							<div class="alright">
								<div class="col1">Ansuman sahoo</div>
								<a href="#" class="btn">More</a>
							</div>
						</div>
					</blockquote>
				</div>
				<div class="grid_12">
					<h3 class="head1">Latest News</h3>
				</div>
				<div class="grid_4">
					<div class="block1">
						<time timetime="2014-01-01">10<span>Jan</span></time>
						<div class="extra_wrapper">
							<div class="text1 col1"><a href="#">Aliquam nibh</a></div>
						
						</div>
					</div>
				</div>
				<div class="grid_4">
					<div class="block1">
						<time timetime="2014-01-01">21<span>Jan</span></time>
						<div class="extra_wrapper">
							<div class="text1 col1"><a href="#">Etiam dui eros</a></div>
							
						</div>
					</div>
				</div>
				<div class="grid_4">
					<div class="block1">
						<time timetime="2014-01-01">15<span>Feb</span></time>
						<div class="extra_wrapper">
							<div class="text1 col1"><a href="#">uamnibh Edeto</a></div>
							
						</div>
					</div>
				</div>
			</div>
		</div>
<!--==============================footer=================================-->
		<footer>
			<div class="container_12">
				<div class="grid_12">
					<div class="socials">
						<a href="#" class="fa fa-facebook"></a>
						<a href="#" class="fa fa-twitter"></a>
						<a href="#" class="fa fa-google-plus"></a>
					</div>
					<!-- <div class="copy">
						Your Trip (c) 2014 | <a href="#">Privacy Policy</a> | Website Template Designed by <a href="http://www.templatemonster.com/" rel="nofollow">TemplateMonster.com</a>
					</div> -->
				</div>
			</div>
		</footer>
		<script>
			$(function (){
				$('#bookingForm').bookingForm({
					ownerEmail: '#'
				});
			})
			$(function() {
				$('#bookingForm input, #bookingForm textarea').placeholder();
			});
		</script>
	</body>
</html>

