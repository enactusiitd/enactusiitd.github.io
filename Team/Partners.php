<?php
chdir($_SERVER['DOCUMENT_ROOT']);
require_once('Includes/Main.php');
Menu(false,"Partners","#header nav > ul > li > a#menuTeam",".dropotron li a#menuPartners");
?>
		<!-- Main -->
			<section id="main" class="container">
				<header>
					<h2>Partners</h2>
				</header>
				<section class="box">
						<?php
						require_once("Includes/ListOutStuff.php");
ListOutStuff("Team/Partners.txt","/images/Partners");
?>
				</section>
			</section>
			
<?php Footer(); ?>
