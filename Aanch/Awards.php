<?php
chdir($_SERVER['DOCUMENT_ROOT']);
require_once('Includes/Main.php');
Menu(false,"Awards - Aanch","#header nav > ul > li > a#menuProjects",".dropotron li a#menuAanch",".dropotron li a#menuAAwards");
?>
		<!-- Main -->
			<section id="main" class="container">
				<header>
					<h2>Project Aanch</h2>
					<p>Awards</p>
				</header>
				<section class="box">
		<div class="videoWrapper">
			<iframe width="420" height="315" src="//www.youtube.com/embed/zaF4Juy43PE" frameborder="0" allowfullscreen></iframe>
		</div>
		<br><br>
<?php
require_once("Includes/ListOutStuff.php");
ListOutStuff("Aanch/Awards.txt","/images/Awards");
?>
				</section>
			</section>
			
<?php Footer(); ?>
