<?php
chdir($_SERVER['DOCUMENT_ROOT']);
require_once('Includes/Main.php');
Menu(false,"Awards","#header nav > ul > li > a#menuTeam",".dropotron li a#menuTAwards");
?>
		<!-- Main -->
			<section id="main" class="container">
				<header>
					<h2>Awards</h2>
				</header>
				<section class="box">
						<?php
						require_once("Includes/ListOutStuff.php");
ListOutStuff("Team/Awards.txt","/images/Awards");
?>
				</section>
			</section>
			
<?php Footer(); ?>
