<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js" type="text/javascript"></script>
<script type="text/javascript">
//$(document).ready(function (e){
	/*$("#frmContact").on('submit',(function(e){
		e.preventDefault();
		var valid;	
		valid = validateContact();
		if(valid) {
			//alert("hi");
			$.ajax({
				url: "<?php echo base_url().'Loginmodule.php' ?>",
				type: "POST",
				data:  new FormData(this),
				contentType: false,
				cache: false,
				processData:false,
				success: function(data){
				$("#mail-status").html(data);
				$('#loader-icon').hide();
				},
				error: function(){} 	        
			});
		}
	}));*/
	$(document).ready(function(){
		$("#userEmail").change(function(){
			var test = $(this).val();
			$.ajax({
                type: "POST",
                url: "registerdb.php",
                data: {keyword: $(this).val()},
                beforeSend: function () {
                    $("#userEmail-info").css("background", "#FFF url(../assets/images/loader.gif) no-repeat 165px");
                },
                success: function (data) {
                	
                		$("#userEmail-info").show();
	                    $("#userEmail-info").html(data);
	               
                	
                }
            });
		});
		//For Login Form  Validation Puropose
		$('#loginemail').change(function(){
			$.ajax({
                type: "POST",
                url: "logindb.php",
                data: {keyword: $(this).val()},
                beforeSend: function () {
                    $("#userEmail-info").css("background", "#FFF url(../assets/images/loader.gif) no-repeat 165px");
                },
                success: function (data) {
                	
                		$("#email-info").show();
	                    $("#email-info").html(data);
                }
            });
		});
	});
	function validateContact() {
		//alert("IH");
		var valid = true;	
		$(".demoInputBox").css('background-color','');
		$(".info").html('');
		if(!$("#userName").val()) {
			$("#userName-info").html("(required)");
			$("#userName").css('background-color','#FFFFDF');
			valid = false;
		}
		if(!$("#userEmail").val()) {
			$("#userEmail-info").html("(required)");
			$("#userEmail").css('background-color','#FFFFDF');
			valid = false;
		}
		if(!$("#userPassword").val()) {
			$("#userPassword-info").html("(required)");
			$("#userPassword").css('background-color','#FFFFDF');
			valid = false;
		}
		if(!$("#userPassword1").val()) {
			$("#userPassword1-info").html("(required)");
			$("#userPassword1").css('background-color','#FFFFDF');
			valid = false;
		}
		if($("#userPassword").val() != $("#userPassword1").val())
		{
			$(".mismatch").html("(Please enter same password.)");
			$("#userPassword1").css('background-color','#FFFFDF');
			valid = false;
		}
		return valid;
	}

//});
	
</script>
<style type="text/css">
	.demoInputBox{padding:10px; border:#F0F0F0 1px solid;border-radius:4px;background-color:#FFF;width:50%;}
	.error{background-color:#FF6600;border:#AA4502 1px solid;padding:5px 10px;color:#FFFFFF;border-radius:4px;}
.success{background-color:#12CC1A;border:#0FA015 1px solid;padding:5px 10px;color:#FFFFFF;border-radius:4px;}
.info{font-size:.8em;color:#FF6600;letter-spacing:2px;padding-left:5px;}
.btnAction{background-color:orange;border:0;padding:10px 40px;color:#FFF;border:#F0F0F0 1px solid;border-radius:4px;}
</style>
<div class="modal-content animate">

			<div class="imgcontainer">
				 <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
				<!-- <img src="${pageContext.request.contextPath }/resources/images/Store1.jpg" alt="Avatar" class="avatar"> -->
			</div>
			
			<div id="loginview" class="row modelbody" style="margin-bottom:5px;">
				<div class="col-md-6" style="border-right:1px solid #f1f1f1;">
					<h4>Login with your account</h4>
					<form action="<?php echo base_url().'Loginmodule/loginform'; ?>" method="POST">
						<label>User Name *</label>
						<span id="email-info" class="info"></span>
						<input class="form-control something" type="email" id="loginemail" name="username" required/>
						<label>Password *</label>
						<span id="password-info" class="info"></span>
						<input class="form-control something" type="password"  name="password" required/><br/>
						<input type="checkbox" name="rememberme" checked="checked"/> Remember me
						<button class="pull-right submitbtn" id="submitlogin" type="submit">Login<b>&rarr;</b></button>
					</form>
				</div>
				<div class="col-md-6">
					<h4>Or login with</h4>
					<a href="#" class="btn btn-primary">FACEBOOK</a>
					<a href="#" class="pull-right btn btn-primary">GOOGLE+</a>	
					<hr/>
					<h4>Forget your password?</h4>
					<p>no worries, click here to <a onclick="resetform()" href="#">reset</a> your password.</p>
					Don't have an account yet ?  <a onclick="showform()" href="#">Create an account</a>	
				</div>
			</div>
			<div id="signupview" class="row modelbody">
				<div class="col-md-6" style="border-right:1px solid #f1f1f1;padding-bottom:5px;">
					<h4>Sign Up</h4>
					<!--action="<?php //echo base_url().'Loginmodule/formsignup' ?>"-->
					<p class="mismatch info"></p>
					<p>Enter your details below</p>
					<!--<?php if($value == 1){ 
						//echo "HElLO";
					}
					else{
						//	echo "HI";
					}
						?>-->
					
					<form id="frmContact" onsubmit="return validateContact()" action="<?php echo base_url().'Loginmodule/formsignup' ?>" method="POST">
						<label>Full Name *</label>
						<span id="userName-info" class="info"></span>
						<input class="form-control" type="text" id="userName" name="name" class="demoInputBox" />
						<label lass="demoInputBox">Email *</label>
						<span id="userEmail-info" class="info"></span>
						<input class="form-control" type="email" id="userEmail" name="emailid" class="demoInputBox" />
						<label lass="demoInputBox">Password *</label>
						<span id="userPassword-info" class="info"></span>
						<input class="form-control" type="password" id="userPassword" name="password" class="demoInputBox" />
						<label lass="demoInputBox">Retype Password *</label>
						<span id="userPassword1-info" class="info"></span>
						<input class="form-control" type="password" id="userPassword1" name="pssword1" class="demoInputBox"/>
						<a class="submitbtn btn" onclick="backform()" href="#"><b>&larr;</b>Back</a>
						<input class="pull-right submitbtn" id="submitt" type="submit" value="SignUp"/>
					</form>
				</div>
				<div class="col-md-6">
					<h4>Or login with</h4>
					<a href="#" class="btn btn-primary">FACEBOOK</a>
					<a href="#" class="pull-right btn btn-primary">GOOGLE+</a>	
					<hr/>
					<h4>Forget your password?</h4>
					<p>no worries, click here to <a onclick="resetform()" href="#">reset</a> your password.</p>
					Don't have an account yet ?  <a onclick="showform()" href="#">Create an account</a>	
				</div>
			</div>
			<div id="resetview" class="row modelbody">
				<div class="col-md-6" style="border-right:1px solid #f1f1f1;padding-bottom:5px;">
					<h4>Forget Password?</h4>
					<p>Enter your e-mail address below to reset your password.</p>
					<form action="" method="POST">
						<input class="form-control" 
										type="text" placeholder="Enter Username" name="uname" required/><br/>
						<a class="submitbtn btn" onclick="backform()" href="#"><b>&larr;</b>Back</a>
						<button class="pull-right submitbtn" type="submit">Submit<b>&rarr;</b></button>
					</form>
				</div>
				<div class="col-md-6">
					<h4>Or login with</h4>
					<a href="#" class="btn btn-primary">FACEBOOK</a>
					<a href="#" class="pull-right btn btn-primary">GOOGLE+</a>	
					<hr/>
					<h4>Forget your password?</h4>
					<p>no worries, click here to <a onclick="resetform()" href="#">reset</a> your password.</p>
					Don't have an account yet ?  <a onclick="showform()" href="#">Create an account</a>	
				</div>
			</div>
			<div class="containerr">
				<p class="text-center">Thanks for being our part</p>
			</div>
		</div>
<script type="text/javascript">
		$(document).ready(function(){
			$("#signupview").hide();
			$("#resetview").hide();
		});
		function showform(){
			$("#loginview").hide();
			$("#resetview").hide();
			$("#signupview").show();
		}
		function backform(){
			$("#loginview").show();
			$("#signupview").hide();
			$("#resetview").hide();
		}
		function resetform(){
			$("#loginview").hide();
			$("#signupview").hide();
			$("#resetview").show();
		}
	
</script>
