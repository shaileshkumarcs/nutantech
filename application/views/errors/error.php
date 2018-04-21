<!DOCTYPE html>
<html>
<head>
<title>Nutantech | Web Developement, Software Developement, Android application, Project Development, College Project - India</title>
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
	<section>
		<div class="row">
			<div class="col-md-12 text-center">
				<h1 style="color: red;">Sorry ! This Error Page Designed By Nutantech</h1>
				<h3>Please Contact Us!!! </h3>
				<p>Conatct No: +91-9939744337</p>
				<p>We will provide you better solutions</p>

			</div>
		</div>
	</section>

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