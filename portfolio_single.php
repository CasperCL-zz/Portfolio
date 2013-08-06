<?php
if(isset($_GET['id']))
	$id = $_GET['id'];
require_once('lib/database.php');
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"> 
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>Casper Eekhof | Portfolio >> Project</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	
	<!-- Stylesheets -->
	<link rel="stylesheet" href="css/reset.css" />
	<link rel="stylesheet" href="css/styles.css" />
	<link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico">
	
	<!-- Scripts -->
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.1/jquery.min.js"></script>
	<script type="text/javascript" src="js/jquery.roundabout-1.0.min.js"></script> 
	<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
	<script type="text/javascript" src="js/jquery.roundabout-shapes-1.1.js"></script>
	<script type="text/javascript">			
		$(document).ready(function() { //Start up our Project Preview Carosuel
			$('ul#folio_scroller').roundabout({
				easing: 'easeOutInCirc',
				shape: 'waterWheel',
				duration: 600
			});
		});
		</script>  
	<SCRIPT TYPE="text/javascript" src='js/smoothy.js'></SCRIPT>
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

<body onload="fadein(document.getElementById('content'))" onunload="fadein(document.getElementById('content'))">

	<div id="wrapper" class="container_12 clearfix">
		<?php  
			include('header.php');
		
		echo "<div id='content' style='opacity:0'>";
		if(isset($id)) {
		$id = mysqli_real_escape_string($mysqli, $id);
			$query = "SELECT * FROM project WHERE project_id='" . $id ."'";
			if($result = $mysqli->query($query)){
			$num_results = mysqli_num_rows($result);
			if($num_results > 0){
				$row = $result->fetch_assoc();
				$name = $row['name'];
				$description = $row['description'];
				$description2 = $row['description_2'];
				$site = $row['site'];
				$image = $row['image_600x300'];
				$github_link = $row['github_link'];
				
				echo "
			<!-- Catch Line and Link -->
			<h2 class='grid_12 caption clearfix'>My <span>portfolio</span>, home to my latest, and greatest finished work.</h2>

			<div class='hr grid_12 clearfix'>&nbsp;</div>
			<!-- Column 1 / Project Information -->
			<div class='grid_4'>
			<h4 class='title'>" . $name . "</h4>
			<div class='hr dotted clearfix'>&nbsp;</div>
			<p>" . $description . "</p>
			<p class='clearfix'>
			<!-- <a href='portfolio.php' class='button float'>&lt;&lt; Back to Portfolio</a> -->
			";
			if(!empty($site))
			echo "
			<a href='#' class='button float right'>Visit Site</a>";
			echo "
			</p>
			</div>
			
			<!-- Column 2 / Image Carosuel -->
			<div id='folio_scroller_container' class='grid_8 cleafix'>
			<ul id='folio_scroller'> 
			<li><a href='images/600x300/" . $image . "_1.png'><img alt='' src='images/600x300/" . $image . "_1.png' /></a></li> 
			<li><a href='images/600x300/" . $image . ".png'><img  alt='' src='images/600x300/" . $image . ".png' /></a></li> 
			<li><a href='images/600x300/" . $image . "_2.png'><img alt='' src='images/600x300/" . $image . "_2.png' /></a></li> 
			</ul> 
			";
			if(!empty($description2)) 
			echo "
			<div class='hr dotted clearfix'>&nbsp;</div>
			<p>" . $description2 . "</p>
			";
			echo"
			</div>
			<div class='hr grid_12 clearfix'>&nbsp;</div>

			<!-- Client pickup line -->
			<h2 class='grid_12 caption'>Like my work? <a href='contact'><span>Get in touch...</span></a></h2>

			<div class='hr grid_12 clearfix'>&nbsp;</div>
			";
				
				
				} else {
				echo "<h2 class='grid_12 caption'>I'm sorry but there is no such item... <a onclick='javascript:history.go(-1)'>go back</a></span></a></h2>";
				echo "<div class='hr grid_12 clearfix'>&nbsp;</div>";}
			} else {
			
				echo "<h2 class='grid_12 caption'>I'm sorry but there is no such item... <a onclick='javascript:history.go(-1)'>go back</a></span></a></h2>";
				echo "<div class='hr grid_12 clearfix'>&nbsp;</div>";
			}

		} else {
			echo "<h2 class='grid_12 caption'>I'm sorry but there is no such item... <a onclick='javascript:history.go(-1)'>go back</a></span></a></h2>";
			echo "<div class='hr grid_12 clearfix'>&nbsp;</div>";
		}
		
		/* free result set */
				$result->free();
				$mysqli->close();
		?>
		
		
		</div>
		
		<!-- Footer -->
		<p class="grid_12 footer clearfix">
		</p>
		
	</div><!--end wrapper-->

</body>
</html>
	
