<style type="text/css">
	p{
		line-height: 25px;
	}
	.toppad{
		padding-top: 10px;
	}
	/* Start by setting display:none to make this hidden.
   Then we position it in relation to the viewport window
   with position:fixed. Width, height, top and left speak
   for themselves. Background we set to 80% white with
   our animation centered, and no-repeating */
.modal {
    display:    none;
    position:   fixed;
    z-index:    1000;
    top:        0;
    left:       0;
    height:     100%;
    width:      100%;
    background: rgba( 255, 255, 255, .8 ) 
                url('http://i.stack.imgur.com/FhHRx.gif') 
                50% 50% 
                no-repeat;
}

/* When the body has the loading class, we turn
   the scrollbar off with overflow:hidden */
body.loading .modal {
    overflow: hidden;   
}

/* Anytime the body has the loading class, our
   modal element will be visible */
body.loading .modal {
    display: block;
}
</style>
<nav class="navbar navbar" style="background-color: #041D51; ">
		<div class="container-fluid">
			<div class="navbar-header">
				<button style="border: 1px solid #FFF;" type="button" class="navbar-toggle" data-toggle="collapse"
					data-target="#myNavbar">
					<span style="background-color: #FFF" class="icon-bar"></span>
					<span style="background-color: #FFF;" class="icon-bar"></span>
					<span style="background-color: #FFF;" class="icon-bar"></span>
				</button>

				<a class="navbar-brand shopname" href="<?php echo base_url().'Welcome' ?>">Nutantech</a>
			</div>
			<div class="collapse navbar-collapse navbar-right" id="myNavbar">
				<ul class="nav navbar-nav">
					<li class="dropdown toppad"><a href="#" class="dropdown-toggle shop" data-toggle="dropdown">Services <b class="caret"></b></a>
						<ul class="dropdown-menu" style="background-color:#041D51; color: #FF5800; ">
							<li class="toppad"><a style="color: #FF5800;" href="<?php echo base_url().'Progressive-Web-App'; ?>">Web Application Development</a></li>
							<li class="divider"></li>
							<li><a style="color: #FF5800;" href="<?php echo base_url().'Web-Applicaion'; ?>">Software Development</a></li>
							<li class="divider"></li>
							<li><a style="color: #FF5800;" href="<?php echo base_url().'Progressive-Web-App'; ?>">Mobile Application Development</a></li>
							<li class="divider"></li>
							<li><a style="color: #FF5800;" href="<?php echo base_url().'Progressive-Web-App'; ?>">Progressive Web App</a></li>
						</ul>
					</li>
					<li class="toppad"><a class="shop" href="<?php echo base_url().'Aboutus' ?>">About Us</a></li>
					<li class="toppad"><a class="shop" href="<?php echo base_url().'Portfolio' ?>">Portfolio</a></li>
					<li class="toppad"><a class="shop" href="<?php echo base_url().'Faq' ?>">FAQ</a></li>
					<li class="toppad"><a class="shop" href="<?php echo base_url().'Contactus' ?>">Contact Us</a></li>
				</ul>
				<ul class="nav navbar-nav navbar-right">
					<!-- <li><a onclick="document.getElementById('id01').style.display='block'" href="#"><span class="glyphicon glyphicon-user"></span>
							Sign Up</a></li> -->
					<?php
					if (isset($_SESSION['nutanuser'])) { ?>
				              <?php
				          if ($_SESSION['nutanuser']['picture'] != '') {
				              $picture = $_SESSION['nutanuser']['picture'];
				          } else {
				              $picture = base_url() . '/assets/images/default-profile-pic.png';
				          }
				          ?>
	                    <li class="dropdown"><a class="shop" href="" class="dropdown-toggle shop" data-toggle="dropdown"><img alt="" class="img-circle" src="<?php echo $picture; ?>" width="30px;">
							<?php echo ucwords($_SESSION['nutanuser']['fullname']); ?></a>
							<ul class="dropdown-menu" style="background-color:#041D51; color: #FF5800; ">
								<li class="toppad"><a style="color: #FF5800;" href="<?php echo base_url().'Loginmodule'; ?>">My Profile</a></li>
								<li class="divider"></li>
								<li><a style="color: #FF5800;" href="<?php echo base_url().'Loginmodule/logout'; ?>">Logout</a></li>
							</ul>
						</li>
	                    <?php } else { ?>
						<li class="toppad"><a class="shop" onclick="document.getElementById('id01').style.display='block'" href="#"><span class="glyphicon glyphicon-log-in shop"></span>
								Login/Sign Up</a>
						</li>
					<?php } ?>
				</ul>
			</div>
		</div>
	</nav>
	<!-- Login Form -->
	<div id="id01" class="modal">
		 <?php $this->load->view('loginmodule'); ?>
	</div>
	<!-- End Login Form -->
<script type="text/javascript">
$('ul.nav li.dropdown').hover(function() {
		$(this).find('.dropdown-menu').stop(true, true).delay(0).fadeIn('slow');
	},
	function() {
		$(this).find('.dropdown-menu').stop(true, true).delay(0).fadeOut('slow');
});
</script>

	<!--Start of Zendesk Chat Script-->
<script type="text/javascript">
window.$zopim||(function(d,s){var z=$zopim=function(c){z._.push(c)},$=z.s=
d.createElement(s),e=d.getElementsByTagName(s)[0];z.set=function(o){z.set.
_.push(o)};z._=[];z.set._=[];$.async=!0;$.setAttribute("charset","utf-8");
$.src="https://v2.zopim.com/?5Sr8NDLMpaGNExDLBc0gRwOCANhgWVBC";z.t=+new Date;$.
type="text/javascript";e.parentNode.insertBefore($,e)})(document,"script");
</script>
<!--End of Zendesk Chat Script-->

