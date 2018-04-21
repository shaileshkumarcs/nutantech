<!DOCTYPE html>
<html lang="en">
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
<link rel="stylesheet" href="<?php echo base_url() . 'assets/css/faq.css';?>" />
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
	<div class="container">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="<?php echo base_url().'Welcome'; ?>">Home</a></li>
				<li class="active"><a href="<?php echo base_url().'Contactus'; ?>">Contact Us</a></li>
			</ol>
		</div>
		<div class="row" style="margin-top: 20px; margin-bottom: 80px;box-shadow: 0 0 15px 1px rgba(0, 0, 0, 0.4); border-radius: 5px;">
			<div class="col-lg-8">
				<form class="form-horizontal" method="POST" action="<?php echo base_url() .'Contactus/enquiryform' ?>">
					<?php if(isset($val)){ 
						?>
						<?php if($val == 0){ ?>
						<div class="alert alert-dismissible alert-danger">
							<button type="button" class="close" data-dismiss="alert">&times;</button>
							<strong>Oh snap!</strong> Change a few things up and try submitting again.
						</div>
						<?php }else{ ?>
						<div class="alert alert-dismissible alert-success">
							<button type="button" class="close" data-dismiss="alert">&times;</button>
							<strong>Well done!</strong> You successfully done. </a>.
						</div>
						<?php } ?>
					<?php } ?>
					<fieldset>
						<legend style="font-family:'Satisfy',cursive;">Enquiry form</legend>
						<div class="form-group">
							<label for="inputName" class="col-lg-2 control-label">Name</label>
							<div class="col-lg-8">
								<input type="text" name="name" class="form-control" id="inputName" placeholder="Name" required>
							</div>
						</div>
						<div class="form-group">
							<label for="inputEmail" class="col-lg-2 control-label">Eamil</label>
							<div class="col-lg-8">
								<input type="email" name="emailid" class="form-control" id="inputEmail" placeholder="Email" required>
							</div>
						</div>
						<div class="form-group">
							<label for="inputContact" class="col-lg-2 control-label">Mobile no</label>
							<div class="col-lg-8">
								<input type="text" name="mobileno" class="form-control" id="inputContact" placeholder="Mobile no" required>
							</div>
						</div>
						<!--<div class="form-group">
							<label for="inputContact" class="col-lg-2 control-label">Subject</label>
							<div class="col-lg-8">
								<input type="text" name="subject" class="form-control" id="inputContact" placeholder="Subject" required>
							</div>
						</div>-->
						<div class="form-group">
							<label for="textArea"  class="col-lg-2 control-label">Message</label>
							<div class="col-lg-8">
								<textarea class="form-control" name="message" rows="3" id="textArea" required></textarea>
								<!--<span class="help-block">A longer block of help text that breaks onto a new line and may extend beyond one line.</span>-->
							</div>
						</div>
						<div class="form-group">
							<div class="col-lg-10 col-lg-offset-2">
								<button type="reset" class="btn btn-default">Cancel</button>
								<button type="submit" class="btn btn-warning">Submit</button>
							</div>
						</div>
					</fieldset>
				</form>
			</div>
			<div class="col-lg-4">
			<div class="jumbot">
			  <h3 style="font-family:'Satisfy',cursive;">Nutantech Technologies Pvt Ltd.</h3>
			  <p><img src="icons/web.png" width="15px;">&nbsp;&nbsp;&nbsp;<a href="http://www.nutantech.online">nutantech.online</a></p>
				<p><span class="glyphicon glyphicon-phone"></span>&nbsp;&nbsp;+91 9939744337</p>
				<p><span class="glyphicon glyphicon-envelope"></span>&nbsp;&nbsp;&nbsp;  contact@nutantech.online</p>
			</div>
			</div>
		</div>
	</div>
</div>

</body>
	<?php $this->load->view('footer'); ?>
</html>