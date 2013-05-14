<header>
<!-- Text Logo -->
<a href="/"><h1 id="logo" class="grid_4">Casper Eekhof</h1></a>


<!-- Navigation Menu -->
<ul id="navigation" class="grid_8">
	<?php $currentFile = strtolower((substr($_SERVER['SCRIPT_NAME'], 1))); ?>
	<li><a href="contact" <?php if(!strcmp('contact', $currentFile)) echo "class='current'"?>><span class='meta'>Get in touch</span><br />Contact Me</a></li>
<!-- 
	<li><a href="latest.php"<?php if(!strcmp('latest', $currentFile)) echo "class='current'"?>><span class="meta">Latest work</span><br />Latest</a></li>
	<li><a href="portfolio.php"<?php if(!strcmp('portfolio', $currentFile)) echo "class='current'"?>><span class="meta">Finished work</span><br />Portfolio</a></li>
	
 -->

	<li><a href="about"<?php if(!strcmp('about', $currentFile)) echo "class='current'"?>><span class="meta">Who am I?</span><br />About</a></li>
	<li><a href="/"<?php if(!strcmp('index', $currentFile)) echo "class='current'"?>><span class="meta">Homepage</span><br />Home</a></li>
</ul>

<div class="hr grid_12">&nbsp;</div>
<div class="clear"></div>
</header>
