<?php
	require_once('lib/database.php');
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"> 
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>Casper Eekhof | Portfolio >> Projects</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	
	<link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico">
	<!-- Stylesheets -->
	<link rel="stylesheet" href="css/reset.css" />
	<link rel="stylesheet" href="css/styles.css" />
	
	<!-- Scripts -->
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.1/jquery.min.js"></script>

	<script type="text/javascript">
		$(function(){
			$('#content').hide();
			$('#content').fadeIn(1000);
		});

	</script>
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

<body class="portfolio">

	<div id="wrapper" class="container_12 clearfix">

		<?php include('header.php') ?>
		
			
			<div id='content'>	
			<!-- Catch Line and Link -->
			<h2 class="grid_12 caption clearfix">My <span>portfolio</span>, home to our latest, and greatest work.</h2>
			
			<div class="pr grid_12 clearfix">&nbsp;</div>
			
			<!-- Portfolio Items -->
			
			<!-- Section 1 -->
			<div class="catagory_1 clearfix">
			<!-- Row 1 -->
			<div class="grid_3 textright" >
				<span class="meta">iPhone & iPad Apps</span>
				<h4 class="title ">iOS Apps</h4>
				<div class="hr clearfix dotted">&nbsp;</div>
				<p>My latest iOS Applications. Apple had moved the Telephone market by introducing this wonderful mobile OS, iOS, which is currently the second most used mobile OS out there. On the right you see applications I built for companies for this beautiful OS..</p>
			</div>
				<div class="grid_9">
					<?php 

						$query = "SELECT * FROM project WHERE category='iOS' ORDER BY project_id DESC";
						if($result = $mysqli->query($query))
						{
							/* fetch associative array */
							while ($row = $result->fetch_assoc()) {
								$id = $row['project_id'];
								$pName = $row['name'];
								$image = $row['image_600x300'];
								echo "<a class=\"portfolio_item float alpha\" href=\"portfolio_single?id=$id\">
										<span>$pName</span>
										<img class=\"\" src=\"images/600x300/$image.png\"  alt=\"\" height='112' width='223'/>
									</a>";
							}
						}
					?>
			<div class="clear"></div>
			</div>
			</div>
			<div class="pr clearfix grid_12">&nbsp;</div>
			
			<div class="catagory_1 clearfix">
				<!-- Row 1 -->
				<div class="grid_3 textright" >
					<span class="meta">All Screen Sizes</span>
					<h4 class="title ">Android Apps</h4>
					<div class="hr clearfix dotted">&nbsp;</div>
					<p>Here is where you find my apps that run on the currently most used Mobile OS around the world.</p>
				</div>
				<div class="grid_9">
					<?php 
						$query = "SELECT * FROM project WHERE category='Android' ORDER BY project_id DESC";
						if($result = $mysqli->query($query))
						{
							/* fetch associative array */
							while ($row = $result->fetch_assoc()) {
								$id = $row['project_id'];
								$pName = $row['name'];
								$image = $row['image_600x300'];
								echo "<a class=\"portfolio_item float alpha\" href=\"portfolio_single?id=$id\">
										<span>$pName</span>
										<img class=\"\" src=\"images/600x300/$image.png\"  alt=\"\" height='112' width='223'/>
									</a>";
							}
						}
					?>
				<div class="clear"></div>
				</div>
			</div>
			<div class="pr clearfix grid_12">&nbsp;</div>
			
			<div class="catagory_1 clearfix">
				<!-- Row 1 -->
				<div class="grid_3 textright" >
					<span class="meta">Hardware Projects</span>
					<h4 class="title ">Hardware</h4>
					<div class="hr clearfix dotted">&nbsp;</div>
					<p>This is where my heart lies.. Hardware projects! Hardware has fascinated me when I was little and it still does..</p>
				</div>
				<div class="grid_9">
					<?php 

						$query = "SELECT * FROM project WHERE category='Hardware' ORDER BY project_id DESC";
						if($result = $mysqli->query($query))
						{
							/* fetch associative array */
							while ($row = $result->fetch_assoc()) {
								$id = $row['project_id'];
								$pName = $row['name'];
								$image = $row['image_600x300'];
								echo "<a class=\"portfolio_item float alpha\" href=\"portfolio_single?id=$id\">
										<span>$pName</span>
										<img class=\"\" src=\"images/600x300/$image.png\"  alt=\"\" height='112' width='223'/>
									</a>";
							}
						}
					?>
				<div class="clear"></div>
				</div>
			</div>
			<div class="pr clearfix grid_12">&nbsp;</div>

			<div class="catagory_1 clearfix">
				<!-- Row 1 -->
				<div class="grid_3 textright" >
					<span class="meta">Cross-browser tested</span>
					<h4 class="title ">Web Development</h4>
					<div class="hr clearfix dotted">&nbsp;</div>
					<p>All my web development projects.</p>
				</div>
			<div class="grid_9">
				<?php 
					$query = "SELECT * FROM project WHERE category='Web' ORDER BY project_id DESC";
					if($result = $mysqli->query($query))
					{
						/* fetch associative array */
						while ($row = $result->fetch_assoc()) {
							$id = $row['project_id'];
							$pName = $row['name'];
							$image = $row['image_600x300'];
							echo "<a class=\"portfolio_item float alpha\" href=\"portfolio_single?id=$id\">
									<span>$pName</span>
									<img class=\"\" src=\"images/600x300/$image.png\"  alt=\"\" height='112' width='223'/>
								</a>";
						}
					}
				?>
				<div class="clear"></div>
				</div>
				
			<div class="hr grid_12 clearfix">&nbsp;</div>

			<div class="catagory_1 clearfix">
				<!-- Row 1 -->
				<div class="grid_3 textright" >
					<span class="meta">Courses I followed</span>
					<h4 class="title ">Certificates</h4>
					<div class="hr clearfix dotted">&nbsp;</div>
					<p>All my certificates.</p>
				</div>
			<div class="grid_9">

				<div class="clear"></div>


					<?php

					$di = new RecursiveDirectoryIterator('images/certificates/');
					foreach (new RecursiveIteratorIterator($di) as $filename => $file) {
						if(endsWith($file, ".png"))
						echo "<a class=\"portfolio_item float alpha\">
					 				<span>" . basename($filename, '.png') . "</span>
					 				<img class=\"\" src=\"$filename\"  alt=\"\" height='112' width='223'/>
					 			</a>";
					}

					function endsWith($haystack, $needle)
					{
					    return $needle === "" || substr($haystack, -strlen($needle)) === $needle;
					}
					?>
				</div>
				
			<div class="hr grid_12 clearfix">&nbsp;</div>
			<?php include('footer.php');?>
		</div>
		
	</div><!--end wrapper-->

</body>
</html>
