<?php
	include 'config.php';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"> 
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title><?php echo $full_name;?> Portfolio | Contact Me</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	
	<link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico">
	<!-- Stylesheets -->
	<link rel="stylesheet" href="css/reset.css" />
	<link rel="stylesheet" href="css/styles.css" />
	
	<!-- Scripts -->
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.1/jquery.min.js"></script>
	<script type="text/javascript"  src="js/contact.js"></script>
	<script type="text/javascript"  src="js/smoothy.js"></script>

	<!--[if IE 6]>
	<script src="js/DD_belatedPNG_0.0.8a-min.js"></script>
	<script>
	  /* EXAMPLE */
	  DD_belatedPNG.fix('.button');
	  
	  /* string argument can be any CSS selector */
	  /* .png_bg example is unnecessary */
	  /* change it to what suits you! */
	</script>
	<![endif]-->
</head>

<body onload="fadein(document.getElementById('content'))">

	<div id="wrapper" class="container_12 clearfix">

		<?php include('header.php') ?>
			
		<div  id='content' style="opacity:0;">
			<!-- Caption Line -->
			<h2 class="grid_12 caption clearfix">Enjoyed looking at my work? Don't hesitate to <span>contact me</span>!</h2>
			
			<div class="hr grid_12 clearfix">&nbsp;</div>

			<!-- Column 1 / Content -->
			<div class="grid_8">
				<!-- Contact Form -->
				<form action='/' method='post' id='contact_form'>
						<h3>Contact Form</h3>
					<div class="hr dotted clearfix">&nbsp;</div>
					<ul>						
						<li class="clearfix"> 
							<label for="name">Naam</label>
							<input type='text' name='name' id='name' />
							<div class="clear"></div>
							<p id='name_error' class='error'>Vul hier uw naam in</p>
						</li> 
						<li class="clearfix"> 
							<label for="email">Emailadres</label>
							<input type='text' name='email' id='email' />
							<div class="clear"></div>
							<p id='email_error' class='error'>Geef een valide emailadres op</p>
						</li> 
						<li class="clearfix"> 
							<label for="subject">Onderwerp</label>
							<input type='text' name='subject' id='subject' />
							<div class="clear"></div>
							<p id='subject_error' class='error'>Vul a.u.b. een onderwerp in</p>
						</li> 
						<li class="clearfix"> 
							<label for="message">Bericht</label>
							<textarea name='message' id='message' rows="30" cols="30"></textarea>
							<div class="clear"></div>
							<p id='message_error' class='error'>Vul het bericht</p>
						</li> 
						<li class="clearfix"> 
							
						<p id='mail_success' class='success'>Bedankt! U hoort snel van mij!</p>
						<p id='mail_fail' class='error'>Whoops! Er is iets fout gegaan. Probeer later opnieuw of <a href="mailto:contact@wieiscasper.nl">mail mij direct via contact@wieiscasper.nl</a></p>
						<div id="button">
						<input type='submit' id='send_message' class="button" value='Verzenden' />
						</div>
						</li> 
					</ul> 
				</form>  
			</div>
			
			<!-- <img src='/images/contact.png' style='margin-left: auto;margin-right: auto;'/> -->
			<!-- Column 2 / Sidebar -->
			<div class="grid_4 contact">
			
				<!-- Adress and Phone Details -->
				<h4>Contact Info</h4> 
				<div class="hr dotted clearfix">&nbsp;</div>
				<ul> 
					<li> 
						<strong><?php echo $full_name;?></strong><br />  
						<?php echo $city;?>, <?php echo $postalCode;?><br /> 
						<?php echo $country;?><br /><br /> 
					</li> 
					<li>
					<?php 
						echo "Email  - <a href=\"mailto:$contact\">$contact";
					?>
					</a></li>
				</ul> 
				
					 
					
				<!-- Social Profile Links
				<h4>Social Profiles</h4> 
				<div class="hr dotted clearfix">&nbsp;</div>
				<ul> 
					<li class="float"><a href="#"><img alt="" src="images/twitter.png" title="Twitter" /></a></li> 
					<li class="float"><a href="#"><img alt="" src="images/facebook.png" title="Facebook" /></a></li> 
					<li class="float"><a href="#"><img alt="" src="images/stumbleupon.png" title="StumbleUpon" /></a></li> 
					<li class="float"><a href="#"><img alt="" src="images/flickr.png" title="Flickr" /></a></li> 
					<li class="float"><a href="#"><img alt="" src="images/delicious.png" title="Delicious" /></a></li> 
				</ul> 
				 -->
			</div>
		</div>
		<div class="hr grid_12 clearfix">&nbsp;</div>
		
		<!-- Footer -->
		<p class="grid_12 footer clearfix"/>
		
	</div><!--end wrapper-->

</body>
</html>