
<!DOCTYPE html>
<html>
<head>
<title>Nutantech | Careers, Web Developement, Software Developement, Android application, Project Development, College Project - India</title>
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
		<div class="background">
		 <div class="container">
	        <div class="row">
	            <div class="col-md-8 col-xs-12" style="box-shadow: 0 0 15px 1px rgba(0, 0, 0, 0.4);">
	            	<h3 class="text-center">Currently No Openings</h3>

	            	<h1></h1>
	                <!--<h3 style="color: #FFFFFF;">Front-end (UI/UX) developer</h3>
	                <p>Experience 0-3 Years&nbsp;&nbsp;&nbsp;&nbsp;</p>
	                <hr/>
	                <ul>
	                <li>
	                <b>Nutantech Technologies Private Limited</b> (http://www.nutantech.online) is a company serving customers in the field of website development, Software development and Android application. We are looking for a strong individual to join our team of talented developers. This an opportunity to develop using the latest technologies and create smooth and responsive UI.</li><br/>
	                <li><b>Position:</b> Front-end (UI/UX) developer. </li><br/>
	                <li><b>BASIC QUALIFICATIONS:</b> Any Graduate. No academic percentage bar.</li><br/>
	                <li><b>SKILLS:</b> Good knowledge of HTML 5, CSS 3, JavaScript, jQuery, Responsive Web design, CSS frame works like Bootstrap.</li><br/>
	                <li><b>Added advantage:</b> Angular JS, Java Script frameworks, AJAX, MySQL, REST API.</li><br/>
	                <li><b>EXPERIENCE:</b> Freshers (Highly knowledgeable on Front End Technologies) - 2 Years.</li> <br/>
	                <li><b>Job Type:</b> Full-time</li><br/>
	                <li><b>Salary:</b> Not disclose</li><br/>
	                <li>Interested Candidate forward resume to: careers@nutantech.online</li><br/>
	                </ul>-->
	            </div>
	            <div class="col-md-4 hidden-xs" style="display: none;" >
	                <div class="text-center" style="margin-top: 150px;">
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
	                            <img src="<?php echo base_url() .'assets/images/office-594132_640.jpg' ?>" width="400px;"; height="400px;">
	                          </div>

	                          <div class="item">
	                            <img src="<?php echo base_url() .'assets/images/man-76202_640.jpg' ?>" width="400px"; height="400px;">
	                          </div>
	                        
	                          <div class="item">
	                            <img src="<?php echo base_url() .'assets/images/stonehenge-2287980_640.jpg' ?>" width="400px"; height="400px;">
	                          </div>
	                      
	                        </div>

	                      </div>


	                <!--<a href="<?php echo base_url() .'assets/images/office-594132_640.jpg'?>"> <img src="<?php echo base_url() .'assets/images/office-594132_640.jpg' ?>" width="300px;"></a>-->
	                </div>
	            </div>
	        </div>
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


