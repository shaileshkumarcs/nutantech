
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

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link href='https://fonts.googleapis.com/css?family=Codystar' rel='stylesheet'>
<style>
	.emailsuccess{
		background-color: #a2e07e;
		color:#df55d8;
		border-radius: 5px;
		padding: 5px;
	}
	.backgroundcolor{
		background-color: #041D51;
		color: #FFF;
		display: block;
		border-radius: 5px;
		padding: 5px;
	}
	.idside{
		background-color: #bff3f5;
		border-radius: 5px;
		padding: 5px;
	}
</style>

<script
	src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script
	src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="emailsuccess">
				<h3 class="text-center">Thank you for Suscribstion</h3>
			</div>
		</div>
		<div class="row">
			<ul>
				<li>We are looking forward for your suscribtion.</li>
				<li>We will provide you all updates and news related to our company.</li>
				<li>You will get latest update of all software related things.</li>
				<li>We are focus to develop website, android application and different type of software.</li>
				<li>As a company our responsibility to maintain our standard.</li>
			</ul>
		</div>
		<div class="row">
			<div class="backgroundcolor text-center">
				<p>Copyright 2017 - <span id="datee"></span> Nutantech Technologies Private Limited. All right
					reserved.</p>

			</div>
		</div>
	</div>
</body>
</html>
<script>
$(document).ready(function(){ 
    var d = new Date();
    var n = d.getFullYear();
    document.getElementById("datee").innerHTML = n;
});
</script>