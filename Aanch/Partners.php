<?php
chdir($_SERVER['DOCUMENT_ROOT']);
require_once('Includes/Main.php');
Menu(false,"Partners - Aanch","#header nav > ul > li > a#menuProjects",".dropotron li a#menuAanch",".dropotron li a#menuAPartners");
?>
<!-- Main -->
			<section id="main" class="container">
				<header>
					<h2>Project Aanch</h2>
					<p>Partners</p>
				</header>
				<section class="box">
<?php
require_once("Includes/ListOutStuff.php");
ListOutStuff("Aanch/Partners.txt","/images/Partners");
?>
				</section>
			</section>
<?php Footer(); ?>
