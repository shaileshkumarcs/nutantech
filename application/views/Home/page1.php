
<!DOCTYPE html>
<html>
<head>
<title>Nutantech | Prograssive Web Application, Web Developement, Software Developement, Android application, Project Development, College Project - India</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<meta name="keywords" content="Prograssive Web App, Website Developement, Cheap Price and More Responsible" />
<meta name="description" content="Prograssive Web App, Web Developement, Software Developement, Project Development, College Project - India" />
<meta name="author" content="Nutantech">
<meta name="robots" content="index" />
<!-- Favicon -->
<link rel="shortcut icon" href="<?php echo base_url() . 'assets/favicon.ico' ?>">


<link rel="stylesheet"
	href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<!-- navbar css -->
<link rel="stylesheet" href="<?php echo base_url() . 'assets/css/home.css'; ?>" />
<link rel="stylesheet" href="<?php echo base_url() . 'assets/css/footer.css';?>" />
<link rel="stylesheet" href="<?php echo base_url() . 'assets/css/loginform.css';?>" />
<link href='https://fonts.googleapis.com/css?family=Codystar' rel='stylesheet'>
<link href='https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css' rel='stylesheet'>

<style>
.prograssive:hover {
-webkit-transform:scale(1.2);
transform:scale(1.2);
}
.prograssive {
-webkit-transition: all 0.7s ease;
transition: all 0.7s ease;
}
</style>

<script
	src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script
	src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
	<?php if(isset($value)){ ?>
	<?php if($value === 0){ ?>
		<div class="alert alert-dismissible alert-warning">
			<div class="text-center">
			<button type="button" class="close" data-dismiss="alert">&times;</button>
			<h4>Email already registed!</h4>
			<p>It's Seems like your email already registered. Please go to login section.</p>
			</div>
		</div>
	<?php }else{ ?>
		<div class="alert alert-dismissible alert-success">
			<div class="text-center">
			<button type="button" class="close" data-dismiss="alert">&times;</button>
			<strong>Thank you, Well done!!!</strong> <p>You successfully registed, You will get all latest update.</p>
			</div>
		</div>
	<?php } ?>
	<?php } ?>
	<?php if(isset($val)){ ?>
	<?php if($val === 1){ ?>
		<div class="alert alert-dismissible alert-warning">
			<button type="button" class="close" data-dismiss="alert">&times;</button>
			<div class="text-center">
			<h4>You Already suscribed!!!</h4>
			<p>It's Seems like your email already suscribed. You will get all update with same email.</p>
			</div>
		</div>
	<?php }else if($val === 2){ ?>
	<div class="alert alert-dismissible alert-warning">
		<div class="text-center">
		<button type="button" class="close" data-dismiss="alert">&times;</button>
		<h4>Your entered password wrong!</h4>
		<p>Please SignUp.</p>
		</div>
	</div>
	<?php }else{ ?>
		<div class="alert alert-dismissible alert-success">
			<div class="text-center">
			<button type="button" class="close" data-dismiss="alert">&times;</button>
			<strong>Well done!!!</strong> <p>You successfully suscribe, You will get all latest update.</p>
			</div>
		</div>
	<?php } ?>
	<?php } ?>
	<?php $this->load->view('header'); ?>
	<!-- Login Form -->
	<div id="id01" class="modal">
		 <?php $this->load->view('loginmodule'); ?>
	</div>
	<!-- End Login Form -->
	<!-- carousel Start -->
	<div id="myCarousel" class="carousel slide" data-ride="carousel">
		<!-- Indicators -->
		<ol class="carousel-indicators">
			<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
			<li data-target="#myCarousel" data-slide-to="1"></li>
			<li data-target="#myCarousel" data-slide-to="2"></li>
			<li data-target="#myCarousel" data-slide-to="3"></li>
		</ol>
		<!-- Wrapper for slides -->
		<div class="carousel-inner">

			<div class="item">
				<img src="<?php echo base_url().'assets/images/idea.jpg' ?>"
					alt="Explore Your Dream" style="width: 100%;height:300px;">
				<div class="carousel-caption">
					<h3 style="color: #4056aa;">Product</h3>
					<p style="color: #4056aa;">Verified & Tested Product</p>
					
				</div>
			</div>

			<div class="item">
				<img src="<?php echo base_url().'assets/images/web-1935737_640.png' ?>"
					alt="Software Development" style="width: 100%;height:300px;">
				<div class="carousel-caption">
					<!--<h3 style="color: blue;">Web Development</h3>
					<p style="color: #FF5800;">We Develope Our Experience And Your Requirement</p>-->
				</div>
			</div>
			<div class="item active">
				<img src="<?php echo base_url().'assets/images/nutantech_pwa.png' ?>"
					alt="Prograssive Web App" style="width: 100%;height:300px;">
				<div class="carousel-caption">
					<h3 style="color: blue;">Prograssive Web App</h3>
					<p style="color: blue;">Web development with mobile application</p>
				</div>
			</div>
			<div class="item">
				<img src="<?php echo base_url().'assets/images/Carsoul/nutan2.jpg' ?>"
					alt="nutantech web development" style="width: 100%;height:300px;">
				<div class="carousel-caption">
					
					<h3 style="color: #4056aa;">Explore, Dream, Discover</h3>
					<p style="color: #4056aa;">Various Plateform</p>
				</div>
			</div>

			
		</div>

		<!-- Left and right controls -->
		<a class="left carousel-control" href="#myCarousel" data-slide="prev">
			<span class="glyphicon glyphicon-chevron-left"></span> <span
			class="sr-only">Previous</span>
		</a> <a class="right carousel-control" href="#myCarousel"
			data-slide="next"> <span
			class="glyphicon glyphicon-chevron-right"></span> <span
			class="sr-only">Next</span>
		</a>
	</div>
	<!-- Short details about our SHOP -->
	<div class="about">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-xs-12">
					<h2 class="text-center">Our Focus</h2>
					<ul>
						<li><p>As a company we focus on maintaining integrity and compilance in everything we do. We have explored our potentials and have successfully achieved outstanding results.</p></li>
						<li><p>The phenomenal products given by us is a result of our consistent practice in latest technologies</p></li>
						<li><p>Software Development in various plateform. <b>Web Application, Prograssive WEB App, MOBILE APPLICATION DEVELOPMENT.</b> </p></li>
						
						<li><p>At <b>Nutantech</b> we keep thinking the ‘unthinkable thoughts’ and learn to explore all the options and possibilities of technology in order to be better than the best.</p></li>
						<li><p><b>Development Services:</b> We provide Software service for Web Applications, Mobile Applications and Desktop Applications.</p></li>
						<!--<li><p>Since our beginning in 2002, we have grown in size and scale. We are providing good service according to our customers.</p></li>
						<li><p>We have more then 2000 products for Hardware shop and More then 500 type of decoration in Tent House.</p></li>
						<li><p>We are selling quality of product, where we assured that product will worthy according to your investment.</p></li>
						<li><p>Our customer are valuable for us. We are taking care about his requirement.</p></li>-->
					</ul>
				</div>
				<div class="col-md-4 col-xs-12 text-center">
					<span class="glyphicon glyphicon-signal logo"></span>
				</div>
			</div>
		</div>
	</div>
	<!-- ENd Short details -->
	<!-- Start Service in our shop -->
	<div id="services" class="container-fluid text-center">
		<h2>SOLUTIONS</h2>
		<h4>=========</h4>
		<br>
		<div class="row slideanim">
			<div class="col-sm-4">
				<span class="glyphicon glyphicon-asterisk logo-small"></span>
				<h1 style="font-size:18px">Ecommerce Website</h4>
				<p>Responsive web mobile,Desktop,laptop...</p>
			</div>
			<div class="col-sm-4">
				<span class="glyphicon glyphicon-home logo-small"></span>
				<h1 style="font-size:18px">e-Office & Library Automation</h4>
				<p>You can manage your Library and office...</p>
			</div>
			<div class="col-sm-4">
				<!--<span class="glyphicon glyphicon-education logo-small"><i class="fa fa-superpowers" aria-hidden="true"></i></span>-->
				<i class="fa fa-superpowers" style="font-size:50px;color:red;margin-top: 20px;"></i>
<br>
				<h1 style="font-size:18px">Prograssive Web App</h4>
				<p>It's new technologies for <b>Web & Mobile Application</b></p>
			</div>
		</div>
		<br><br>
	</div>
	<section>
		<div class="contain">
			<div class="container text-center">
				<div class="offered">
					<p class="whitetext">Get a fully-integrated online store!</p><br/>
					<p class="paratext">Now, sell your products online through a fully-integrated ecommerce portal built by the best web development company in India. Our affordable ecommerce package comes loaded with advanced features such as multi-criteria product filtering, personal wishlist, one-click checkout, coupons management, product view report and many more.</p>
				</div>
			</div>
		</div>
	</section>
	<section>
		<div class="container">
			<div class="row" style="padding: 10px;">
				<div class="col-md-5 col-xs-12 center">
					<img class="img-thumbnail prograssive" src="<?php echo base_url().'assets/images/nutantech_prograssive.jpg' ?>" alt="nutantech-prograssive" style="margin-top: 40px;width:400px;">
				</div>
				<div class="col-md-7 col-xs-12">
					<h1 style="font-size:18px;"><u>Progressive Web Apps (PWA)</u></h1>
					<p>Progressive Web Apps or PWA is the latest entrant in the world of app development. Progressive Web Apps, also known as Installable Web Apps or Hybrid Web Apps, are regular web pages or websites, but can appear to the user like traditional applications or native mobile applications.The application type attempts to combine features offered by most modern browsers with the benefits of mobile experience.</p>
					<br/>
					<p>As the providers of the Best Web and Mobile App Solutions, we can confidently say that Progressive Web Apps (PWA) are set to revolutionize the way users and companies interact. From the development aspect, opting for a progressive web app (PWA) for your company will result in a rapidly deployable product that is highly responsive and matches up to the user experience of having a specifically created native app.</p>
				</div>
			</div>
		</div>
	</section>
	<!-- End service Part of our shop -->
	<?php $this->load->view('footer'); ?>
</body>
</html>
<script type="text/javascript">
// Get the modal
var modal = document.getElementById('id01');
// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>


