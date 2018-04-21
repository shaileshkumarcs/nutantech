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
<link rel="stylesheet" href="<?php echo base_url() . 'assets/css/profile.css';?>" />
<link href='https://fonts.googleapis.com/css?family=Codystar' rel='stylesheet'>
<style>
</style>

<script
	src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script
	src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body class="bodybackgroud">
<?php $this->load->view('header'); ?>
	<!-- Login Form -->
	<div id="id01" class="modal">
		 <?php $this->load->view('loginmodule'); ?>
	</div>
	<!-- End Login Form -->
	<section style="padding: 20px;">
		<div class="container">
		<div class="row">
			<div class="col-md-3 col-xs-12">
				<div class="profile-usermenu">
					
					<?php
						if ($_SESSION['nutanuser']['picture'] != '') {
							$picture = $_SESSION['nutanuser']['picture'];
						} else {
							$picture = base_url() . '/assets/images/default-profile-pic.png';
						} 
					?>
					<li class="dropdown text-center"><img alt="" class="img-circle" src="<?php echo $picture; ?>" width="120px;"></li>
					<li class="text-center"><p style="color: blue;font-size: 20px;"><?php echo ucwords($_SESSION['nutanuser']['fullname']); ?></p></li>
					<div class="profile-usermenu">
						<ul class="nav">
							<li class="active">
								<a href="#">
								<i class="glyphicon glyphicon-home"></i>
								Overview </a>
							</li>
							<li>
								<a href="#">
								<i class="glyphicon glyphicon-user"></i>
								Account Settings </a>
							</li>
							<!--<li>
								<a href="#" target="_blank">
								<i class="glyphicon glyphicon-ok"></i>
								Tasks </a>
							</li>-->
							<li>
								<a href="#">
								<i class="glyphicon glyphicon-flag"></i>
								Help </a>
							</li>
						</ul>
					</div>
			        
				</div>
			</div>
			<div class="col-md-9 col-xs-12">
				<div class="profile-content" style="padding: 20px;">
				
					<div class="row">
					<div class="col-md-6"><span class="profile_heading">Profile Details</span></div>
					<div class="col-md-6">
					<ul class="nav nav-tabs">
					<li class="active"><a data-toggle="tab" href="#home">Profile Information</a></li>
					<li><a data-toggle="tab" href="#menu">Change Image</a></li>
					</ul>
					</div>
					</div>

					<div class="tab-content">
						<div id="home" class="tab-pane fade in active">
							<form action="<?php echo site_url("Loginmodule/updateUserProfile?id=" . $_SESSION['nutanuser']['id']); ?>" method="POST">
								<div class="form-group">
									<label for="name">Full Name:</label>
									<input type="text" class="form-control" id="name" placeholder="Enter full name " name="fullname" value="<?php echo ( $user['fullname'] != '') ? ucwords($user['fullname']) : ''; ?>">
								</div>	
								<div class="form-group">
									<label for="email">Email:</label>
									<input type="email" class="form-control" id="email" placeholder="Enter email" name="emailid" value="<?php echo ( $user['emailid'] != '') ? $user['emailid'] : ''; ?>">
								</div>
								<div class="form-group">
									<label for="mobilenumber">Mobile Number:</label>
									<input type="text" class="form-control" id="mobilenumber" placeholder="Enter contact no" name="contact" value="<?php echo ( $user['contact'] != '') ? $user['contact'] : ''; ?>">
								</div>
								<div class="form-group">
									<label for="econtact">Emergency Conatct:</label>
									<input type="text" class="form-control" id="econtact" placeholder="Enter emergency contact" name="emergency_contact" value="<?php echo ( $user['emergency_contact'] != '') ? $user['emergency_contact'] : ''; ?>">
								</div>
								<div class="form-group">
									<label for="address">Address:</label>
									<textarea class="form-control" rows="3" id="address" name="address"> <?php echo ( $user['address'] != '') ? $user['address'] : ''; ?></textarea>
								</div>
								<input type="submit" class="btn btn-success" value="Save changes">
								<input type="reset" class="btn btn-default" value="Cancel">
							</form>
						</div>
						<div id="menu1" class="tab-pane fade">

							<form action="<?php echo site_url('Loginmodule/updateProfilePicture'); ?>" method="POST" enctype="multipart/form-data">
					            <input type="hidden" name="userid" value="<?php echo $user['id']; ?>" >
					            
					            <img class="thumbnail" src="<?php echo $picture; ?>" alt="" width="200px;"/>
								<input type="file" class="btn btn-default" name="image_upload_file"><br/>
								<span class="label label-danger">NOTE! </span>
								<span>Attached image thumbnail is supported in Latest Firefox, Chrome, Opera, Safari and Internet Explorer 10 only </span><br/><br/>
					            <input type="submit" class="btn btn-warning" value="Submit"> 
					            <a href="<?php echo site_url('Loginmodule'); ?>" class="btn  btn-default">
					                    Cancel </a>
					        </form>
						</div>
					</div>
            	</div>
			</div>
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