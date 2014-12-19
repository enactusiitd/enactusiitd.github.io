<?php
chdir($_SERVER['DOCUMENT_ROOT']);
require_once('Includes/Main.php');
Menu(false,"Project Aanch","#header nav > ul > li > a#menuProjects",".dropotron li a#menuAanch");
?>
		<!-- Main -->
			<section id="main" class="container">
				<header>
					<h2>Project Aanch</h2>
					<p>Because cooking shouldn't kill.</p>
				</header>
				<div class="box">
					<div class="row no-collapse 50% uniform">
						<div class="6u 12u(2)">
							<a href="Concept.php" class="listLink">Concept</a>
						</div>
						<div class="6u 12u(2)">
							<a href="Communities.php" class="listLink">Communities</a>
						</div>
						<div class="6u 12u(2)">
							<a href="Awards.php" class="listLink">Awards</a>
						</div>
						<div class="6u 12u(2)">
							<a href="Partners.php" class="listLink">Partners</a>
						</div>
					</div>
				</div>
			</section>	
<?php Footer(); ?>
