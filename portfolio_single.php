<?php
include 'config.php';
if(isset($_GET['id']))
	require_once('lib/database.php');
	if(!empty($_GET['id']))
		$id = $mysqli->real_escape_string($_GET['id']);
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"> 
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title><?php echo $full_name; ?> | Portfolio >> Project</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	
	<!-- Stylesheets -->
	<link rel="stylesheet" href="css/reset.css" />
	<link rel="stylesheet" href="css/styles.css" />
	<link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico">
	
	<!-- Scripts -->
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script type="text/javascript" src="js/jquery.roundabout-1.0.min.js"></script> 
	<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
	<script type="text/javascript" src="js/jquery.roundabout-shapes-1.1.js"></script>

	<!-- Fancy box -->
	<script type="text/javascript" src="/js/fancybox/jquery.fancybox.js?v=2.1.5"></script>
	<link rel="stylesheet" type="text/css" href="/js/fancybox/jquery.fancybox.css?v=2.1.5" media="screen" />

	<script type="text/javascript" src='/js/fancybox/helpers/onload.js'></script>
	<script type="text/javascript">			
		   $(function() {
		      $('#folio_scroller').roundabout({
		         shape: 'waterWheel',
				autoplay: true,
         		autoplayDuration: 4000,
         		autoplayPauseOnHover: true
		      });
		      $("#content").hide();
		      $("#content").fadeIn(1000);

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

<body>

	<div id="wrapper" class="container_12 clearfix">
		<?php  
			include('header.php');
		
		echo "<div id='content'";
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
				$image = $row['image'];
				$github_link = $row['github_link'];
				$appstore_link = $row['appstore_link'];
				$googleplay_link = $row['googleplay_link'];
				
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
			<a href='portfolio.php' class='button float'>&lt;&lt; Back to Portfolio</a>
			";
			if(!empty($site))
			echo "
			<a href='$site' target='_blank' class='button float right'>Visit Site</a>";
			else
			if(!empty($github_link))
			echo "
			<a href='$github_link' target='_blank' class='button float right'>View Source</a>";
			else
			if(!empty($appstore_link))
			echo "
			<a href='$appstore_link' target='_blank' class='button float right'>Appstore</a>";
			else
			if(!empty($googleplay_link))
			echo "
			<a href='$googleplay_link' target='_blank' class='button float right'>Google Play</a>";
			echo "
			</p>
			</div>
			
			<!-- Column 2 / Image Carosuel -->
			<div id='folio_scroller_container' class='grid_8 cleafix'>
			<ul id='folio_scroller'> ";
			$bigImage1 = "images/projects/1200x600/$image/" . $image . ".png";
			$bigImage2 = "images/projects/1200x600/$image/" . $image . "_1.png";
			$bigImage3 = "images/projects/1200x600/$image/" . $image . "_2.png";

			$smallImage1 = "images/projects/600x300/$image/" . $image . ".png";
			$smallImage2 = "images/projects/600x300/$image/" . $image . "_1.png";
			$smallImage3 = "images/projects/600x300/$image/" . $image . "_2.png";

			echo "
				<li><a class=\"fancybox\" data-fancybox-group=\"gallery\" href='" . (file_exists($bigImage1) ? $bigImage1 : $smallImage1) . "'><img alt='' src='" . $smallImage1 . "' /></a></li> 
				<li><a class=\"fancybox\" data-fancybox-group=\"gallery\" href='" . (file_exists($bigImage2) ? $bigImage2 : $smallImage2) . "'><img alt='' src='" . $smallImage2 . "' /></a></li> 
				<li><a class=\"fancybox\" data-fancybox-group=\"gallery\" href='" . (file_exists($bigImage2) ? $bigImage3 : $smallImage3) . "'><img alt='' src='" . $smallImage3 . "' /></a></li> 
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
	
