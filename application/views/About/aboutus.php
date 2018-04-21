
<!DOCTYPE html>
<html>
<head>
<title>Nutantech | About Us, Web Development, Software Development, Android application, Project Development,Institute Website, College Project - India</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<meta name="keywords" content="Website Developement, Cheap Price and More Responsible" />
<meta name="description" content="Web Developement, Software Developement, Project Development, College Project - India" />
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
<link rel="stylesheet" href="<?php echo base_url() . 'assets/css/aboutus.css';?>" />
<link href='https://fonts.googleapis.com/css?family=Codystar' rel='stylesheet'>
<style>
</style>

<script
	src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script
	src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<style type="text/css">
</style>
<body>
	<?php $this->load->view('header'); ?>
	<!-- Login Form -->
	<div id="id01" class="modal">
		 <?php $this->load->view('loginmodule'); ?>
	</div>
	<!-- End Login Form -->
		<div class="background" style="background-color: #f2f2f2;">
			<section class="fixed-bg">
				<div class="container">
					<div class="row">
						<div class="titletext">
							<span class="white-text">TRANSFORMING YOUR IDEAS INTO INTELLIGENT WEBSITES & APPLICATION</span>
						</div>
					</div>
				</div>
			</section>
		 	<section>
		 		<div class="container">
		 			<div class="row">
		 				<h1>About Us</h1>
						<ol class="breadcrumb">
							<li><a href="<?php echo base_url().'Welcome' ?>">Home</a></li>
							<li class="active"><a href="<?php echo base_url().'Aboutus' ?>">About Us</a></li>
						</ol>
		 				<hr class="linehr"/>
		 				<div class="col-md-8 col-xs-12">
		 					<h3>About Nutantech</h3>
		 					<p>At Nutantech, the emphasis is always on what the customer wants and we strive at bettering ourselves every single day. We pride ourselves on the quality of our deliverables and work round the clock to ensure that there are no snags or delays from our end. We ensure that there are no gaps in understanding customer requirements and thus the finished product is exactly as per the client’s needs. We have in most cases delivered an end product that not only translates the client’s idea butalso elevates it to an all new level and this has resulted in us enjoying a lot of repeat business.</p>
							<p>Our management team is small and flexible, enabling us to respond quickly and provide personalised customer care, yet big enough to deliver enterprise-level projects for leading brands.</p>
		 					<p>We provide a full spectrum of custom software services, with a focus on web and mobile application development. Our offerings cover all stages of the software development life cycle: from business analysis, design, and prototyping to the actual development, quality assurance, and post-project maintenance and support.</p>
		 				</div>
		 				<div class="col-md-4 col-xs-12">
		 					<div class="aboutpic" style="padding-top: 50px;">	
		 						<img src="<?php echo base_url().'assets/images/webshop-2082844_640.jpg'; ?>" style="width:380px;">
		 					</div>
		 				</div>
		 			</div>
		 		</div>
		 	</section>
		 	<div id="services" class="container-fluid text-center" style="background-color: #FFF;">
				<h2 style="font-weight: bold; ">WE ARE NUTANTECH</h2>
				<h4>=========</h4>
				<br>
				<div class="row slideanim">
					<div class="col-sm-4">
						<span class="glyphicon glyphicon-certificate logo-small"></span>
						<h4>OUR VALUE</h4>
						<!--<p>We Create Outstanding Web Experiences for Desktop, iPad, Mobile devices and the Application.</p>-->
						<p><b>LISTEN</b> to your customers, <b>TRUST</b> them, <b>INNOVATE</b> solutions <b>QUALITY</b> is the key & <b>EXCELLENCE</b> is an attitude.</p>
					</div>
					<div class="col-sm-4">
						<span class="glyphicon glyphicon-road logo-small"></span>
						<h4>OUR MISSION</h4>
						<!--<p>Our goal is always to leverage the power of wbsite and application, to add value to your business.</p>-->
						<p>To deliver impeccable business solutions, that drives innovation which can inspire your dreams.</p>
					</div>
					<div class="col-sm-4">
						<span class="glyphicon glyphicon-eye-open logo-small"></span>
						<h4>OUR VISION</h4>
						<!--<p>We provide a full stack service, from concept Validation, Planning and Design, through to Development and Lunch.</p>-->
						<p>To reach new height by continously improving our service & solutions to achive phenomenal customer satisfaction.</p>
					</div>
				</div>
				<br><br>
				<!--<div class="row slideanim">
					<div class="col-sm-4">
						<span class="glyphicon glyphicon-leaf logo-small"></span>
						<h4>GREEN</h4>
						<p>Lorem ipsum dolor sit amet..</p>
					</div>
					<div class="col-sm-4">
						<span class="glyphicon glyphicon-certificate logo-small"></span>
						<h4>CERTIFIED</h4>
						<p>Lorem ipsum dolor sit amet..</p>
					</div>
					<div class="col-sm-4">
						<span class="glyphicon glyphicon-wrench logo-small"></span>
						<h4 style="color:#303030;">HARD WORK</h4>
						<p>Lorem ipsum dolor sit amet..</p>
					</div>
				</div>-->
			</div>
	   </div>
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



