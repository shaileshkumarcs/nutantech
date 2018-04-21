
<!DOCTYPE html>
<html>
<head>
<title>Nutantech | Web Application Development, Web Development, Software Development, Android application, Project Development,Institute Website, College Project - India</title>
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
<link rel="stylesheet" href="<?php echo base_url() . 'assets/css/services.css';?>" />
<link href='https://fonts.googleapis.com/css?family=Codystar' rel='stylesheet'>
<style>
.close_contact{
	position: absolute;
    right: -25px;
    top: -55px;
    color: #000;
    font-size: 35px;
    font-weight: bold;
    background-color: #FFFFFF;
    padding-right: 5px;
    padding-left: 5px;
    border-radius: 100%;
    z-index: 10000;
}
.modal-lg{
	width: 100vw;
}
.modal-header {
	border-bottom:  0px solid #e5e5e5;
}
.modal-footer{
	border-top: 0px solid #e5e5e5;
}
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
							<span class="white-text">WEB APPLICATION SERVICES</span>
						</div>
					</div>
				</div>
			</section>	
			<section class="descriptionweb">
				<div class="container">
					<div class="row">
						<!--h1>Web Application Development</h1>-->
						<ol class="breadcrumb">
							<li><a href="<?php echo base_url().'Welcome' ?>">Home</a></li>
							<li><a> Services</a></li>
							<li class="active"><a href="<?php echo base_url().'Services/webapplicaion' ?>">Web Application Development</a></li>
						</ol>
		 				<hr class="linehr"/>
					</div>
					<div class="row">
						<div class="col-md-12 col-xs-12 paddetails">
							<h3>Web Development</h3>
							<p class="pfonts">Nutantech is a web development company with<b> 1+ years of exprience </b> in building web application. Our dedicated web app developers have successfully completed more then 10 projects for variety of industries and business domains, including e-Commerce, School management, Library Management more.</p>
							<p class="pfonts">Through the years, we have perfected our delivery processes and workflows to cope with constantly changing requirements and tight deadlines that are the hallmark of complex web development projects. Our Scrum expertise was instrumental in successfully building new products for e-Commerce, School management, Library Management.</p>
						</div>
					</div>
				</div>
			</section> 
			<section class="webdetails">
				<div class="container">
					<div class="col-xs-12 col-md-6 paddetails">
						<h3>Custom Web Application Development</h3>
						<p class="pfonts">The advantage of custom web applications is that they are tailored exactly to the way your business works. Whether you need to build a custom web app from scratch, migrate your legacy backend, or streamline existing front-end functionality, we can accomplish that in an efficient and cost-effective manner.</p>
					</div>
					<div class="col-xs-12 col-md-6 paddetails">
						<h3>Mobile-Friendly Website Development</h3>
						<p class="pfonts">The pervasive nature of portable devices make mobile web design a necessity. Our team of usabilty experts, graphic designers, and veteran front-end professionals will make sure your website looks and works great — no matter the screen size or resolution.</p>
					</div>
				</div>
			</section>
			<section class="contactbtn">
				<div class="container">
					<div class="text-center">
						<h3>Let’s Get Started!</h3>
						<p class="pfonts">Ready to start? Contact us, and a web development expert will get back to you shortly.</p>
					</div>
					<div class="text-center">
						<!--<a class="btn btncolor" href="<?php echo base_url().'Contactus'; ?>">Contact Us</a>-->
						<button type="button" class="btn btncolor" data-toggle="modal" data-target="#myModal">Contact Us</button>
					</div>
				</div>
			</section>
			<!--Modal Design Started -->
			<div class="modal fade" id="myModal" role="dialog">
				<div class="modal-dialog modal-lg">
					<!-- Modal content-->
					<div class="modal-content">
						<div class="modal-header text-center">
							<button type="button" class="close_contact" data-dismiss="modal">&times;</button>
							<h4 class="modal-title">Quick Contact</h4>
						</div>
						<div class="modal-body">
							<form id="frmContact" action="<?php echo base_url().'Contactus/enquiryform'; ?>"  method="POST">
								<div class="form-group">
									<input type="text" class="form-control" placeholder="Enter full name" name="name" required>
								</div>
								<div class="form-group">
									<input type="email" class="form-control" placeholder="Enter email" name="emailid" required>
								</div>
								<div class="form-group">
									<input type="text" class="form-control" placeholder="Enter phone no" name="mobileno" required>
								</div>
								<div class="form-group">
									<textarea class="form-control" rows="5" name="message" placeholder="Quick comment"></textarea>
								</div>
								<input type="submit" value="Submit" class="btn btn-warning">	
								<input type="reset" value="Clear" class="btn btn-default">							
							</form>
						</div>
						<!--<div class="modal-footer">
							<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
						</div>-->
					</div>
				</div>
			</div>



			<!--Model Design Ended -->
				  		
		</div>
	<!-- End service Part of our shop -->
	<?php $this->load->view('footer'); ?>
</body>
</html>
<script type="text/javascript">
	$(document).ready(function(){
		$('#frmContact').on('submit',function(e){
			var test = $(this).val();
			alert(test);
		});
	});
</script>
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




