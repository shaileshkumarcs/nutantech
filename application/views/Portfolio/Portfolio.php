
<!DOCTYPE html>
<html>
<head>
<title>Nutantech | Portfolio, Web Development, Software Development, Android application, Project Development,Institute Website, College Project - India</title>
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
<link rel="stylesheet" href="<?php echo base_url() . 'assets/css/portfolio.css';?>" />
<link href='https://fonts.googleapis.com/css?family=Codystar' rel='stylesheet'>
<style>
</style>

<script
	src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script
	src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
	<?php $this->load->view('header'); ?>
	<!-- Login Form -->
	<div id="id01" class="modal">
		 <?php $this->load->view('loginmodule'); ?>
	</div>
	<!-- End Login Form -->
		<div class="background">
			<section class="portfoliobg">
				<div class="container">
					<div class="row">
						<div class="titletext">
							<span class="white-text">TRANSFORMING YOUR IDEAS INTO INTELLIGENT WEBSITES & APPLICATION</span>
						</div>
					</div>
				</div>
			</section>	
			<section style="background-color: #ddd;">
				<div class="container">
					<div class="row">
						<h1>Portfolio</h1>
						<ol class="breadcrumb">
							<li><a href="<?php echo base_url().'Welcome' ?>">Home</a></li>
							<li class="active"><a href="<?php echo base_url().'Portfolio' ?>">Portfolio</a></li>
						</ol>
		 				<hr class="linehr"/>
		 				<h3>Our Clients Are</h3>
		 				<div class="col-md-3 col-xs-6 red-tooltip"  data-toggle="tooltip" data-placement="top" title="Tech Saabri Mission is To incorporate novel ideas in software developments projects and deliver valuable services that can exponentially fuel the growth of business enterprise and our economy as a whole.">

							<div class="thumbnail">
								<a href="http://www.techsaabri.com" target="_blank" >
									<img class="img thumbnail" src="<?php echo base_url(). 'assets/images/techsaabri.jpg';  ?>" alt="Nutantech-techsaabri" style="width:100% ; height: 200px;">
									<div class="caption text-center">
										<p>Tech Saabri Software Development.</p>
									</div>
								</a>
								
							</div>
		 				</div>
		 				<div class="col-md-3 col-xs-6" data-toggle="tooltip" data-placement="top" title="Nutantech Value is LISTEN to your customers, TRUST them, INNOVATE solutions QUALITY is the key & EXCELLENCE is an attitude.">
							<div class="thumbnail"  >
								<a href="http://www.nutantech.online" target="_blank" >
									<img class="img thumbnail" src="<?php echo base_url(). 'assets/images/nutan.png';  ?>" alt="Nutantech-" style="width:100% ; height: 200px;">
									<div class="caption text-center">
										<p>Nutantech</p>
									</div>
								</a>
							</div>
		 				</div>
		 				<div class="col-md-3 col-xs-6">
		 				</div>
					</div>
					<div class="row">
		 				<hr class="linehr"/>
		 				<h3>Our Technical Team Working On</h3>
		 				<div class="col-md-3 col-xs-6" data-toggle="tooltip" data-placement="top" title="Tripme Technologies is the one of Tours and Travel leading company in india.">
							<div class="nutanthumbnail">
								<a href="http://www.tripme.co.in" target="_blank" >
									<img class="img nutanthumbnail" src="<?php echo base_url(). 'assets/images/tripme.png';  ?>" alt="Tripme technologies private Limited" style="width:100%;">
									<div class="caption text-center">
										<p>Trip Me Technologies Private Limited.</p>
									</div>
								</a>
							</div>
		 				</div>
		 				<div class="col-md-4 col-xs-6">
		 				</div>
		 				<div class="col-md-4 col-xs-6">
		 				</div>
					</div>
				</div>
			</section> 




					
				  		
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
<script>
$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip(); 

});
</script>



