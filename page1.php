
<!DOCTYPE html>
<html>
<head>
<title>Nutantech | Web Developement, Software Developement, Project Development, College Project - India</title>
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
	<!-- carousel Start -->
	<div id="myCarousel" class="carousel slide" data-ride="carousel">
		<!-- Indicators -->
		<ol class="carousel-indicators">
			<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
			<li data-target="#myCarousel" data-slide-to="1"></li>
			<li data-target="#myCarousel" data-slide-to="2"></li>
		</ol>
		<!-- Wrapper for slides -->
		<div class="carousel-inner">

			<div class="item active">
				<img src="<?php echo base_url().'assets/images/idea.jpg' ?>"
					alt="Nuts Volts" style="width: 100%;height:300px;">
				<div class="carousel-caption">
					<h3 style="color: #4056aa;">Explore, Dream, Discover</h3>
					<p style="color: #4056aa;">Various Plateform</p>
					
				</div>
			</div>

			<div class="item">
				<img src="<?php echo base_url().'assets/images/code-944499_1280.jpg' ?>"
					alt="paits" style="width: 100%;height:300px;">
				<div class="carousel-caption">
					<h3 >Web Development</h3>
					<p>We Develope Our Experience And Your Requirement</p>
				</div>
			</div>
			<div class="item">
				<img src="<?php echo base_url().'assets/images/Carsoul/nutan2 .jpg' ?>"
					alt="paits" style="width: 100%;height:300px;">
				<div class="carousel-caption">
					<h3 style="color: #4056aa;">Product</h3>
					<p style="color: #4056aa;">Verified & Tested Product</p>
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
						<li><p>As a company we focus on maintaining intigrity and compilance in everything we do. We have explored our potentials and have successfully achieved outstanding results.</p></li>
						<li><p>The phenomenal products given by us is a result of our consistent practice in latest technologies</p></li>
						<p>Software Developement in various plateform. <b>WEB DEVELOPEMENT, MOBILE APPLICATION DEVELOPEMENT.</b> </p></li>
						<li><p>Customer requirement, We full fill our customer requirement on thire time.</p></li>
						<li><p>At <b>Nutan Tech</b> we keep thinking the ‘unthinkable thoughts’ and learn to explore all the options and possibilities of technology in order to be better than the best.</p></li>
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
		<h2>SERVICES</h2>
		<h4>=========</h4>
		<br>
		<div class="row slideanim">
			<div class="col-sm-4">
				<span class="glyphicon glyphicon-asterisk logo-small"></span>
				<h4>Ecommerce Website</h4>
				<p>Responsive web mobile, tablet, laptop.....</p>
			</div>
			<div class="col-sm-4">
				<span class="glyphicon glyphicon-home logo-small"></span>
				<h4>Institute Website</h4>
				<p>You can manage your institute</p>
			</div>
			<div class="col-sm-4">
				<span class="glyphicon glyphicon-education logo-small"></span>
				<h4>College Project</h4>
				<p>Engineering , MBA...</p>
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


