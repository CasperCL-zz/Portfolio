<?php 
require_once('lib/database.php');
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"> 
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

	<title>Casper Eekhof Portfolio | Home</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	
	<link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico">
	<!-- Stylesheets -->
	<link rel="stylesheet" href="css/reset.css" />
	<link rel="stylesheet" href="css/styles.css" />
	
	<!-- Scripts -->
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>
	<script type="text/javascript" src="js/jquery.roundabout-2.4.2.min.js"></script> 
	<script type="text/javascript" src="js/jquery.event.drag-2.0.js"></script> 
	<script type="text/javascript" src="js/jquery.event.drop-2.0.js"></script> 
	<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
	<script type="text/javascript">		
		$(document).ready(function() { //Start up our Featured Project Carosuel
			$('#featured ul').roundabout({
				easing: 'easeOutInCirc',
				duration: 400,
				reflect: true,
				enableDrag: true,
				autoplay: true,
         		autoplayDuration: 4000,
         		autoplayPauseOnHover: true
			});
		});
		</script>  
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
		
		<div id='content' style='opacity:0'>
		<!-- Featured Image Slider -->
		<div id="featured" class="clearfix grid_12">
			<ul class="roundabout-holder"> 
				<?php 
				$query = "SELECT * FROM project ORDER BY project_id DESC";
				if($result = $mysqli->query($query))
				{
					/* fetch associative array */
					while ($row = $result->fetch_assoc()) {
						$id = $row['project_id'];
						$pName = $row['name'];
						$image = $row['image_600x300'];

						// Project skeleton
						echo "
							<li class='roundabout-moveable-item'>
							<a href='portfolio_single?id=". $id . "'>
							<span>" . $pName . "</span>
							<img src='images/600x300/" . $image . ".png' alt='' />
							</a>
							</li>
						";
					}
					
					
				} else {
					// Handle errors
					echo "error: " .$mysqli->error;
					$errors[$query] = $mysqli->error;
				}
				/* free result set */
				$result->free();
				$mysqli->close();
				?>
			</ul> 
		</div>
		<div class="hr grid_12 clearfix">&nbsp;</div>

		<!-- Caption Line -->
		<h2 class="grid_12 caption clearfix" align='center'>Hi there!<br>Welcome! This is my <span>portfolio</span>, here you will found all about me and what I've accomplised in my <span>Hard and Software</span> career.</h2><br>
		
		<div class="hr grid_12 clearfix">&nbsp;</div>

	</div>
		<!-- Footer -->
		<p class="grid_12 footer clearfix">
		</p>
		
	</div><!--end wrapper-->
</body>
</html>
