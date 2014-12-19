<?php
chdir($_SERVER['DOCUMENT_ROOT']);
require_once('Includes/Main.php');
Menu(false,"Active Team","#header nav > ul > li > a#menuTeam",".dropotron li a#menuTActive");
?>
		<!-- Main -->
			<section id="main" class="container">
				<header>
					<h2>Active Team</h2>
				</header>
				<section class="box">
						<?php
						require_once("Includes/ListOutStuff.php");
ListOutStuff("Team/Active.txt","/images/Team");
?>
				</section>
			</section>
			
<?php Footer(); ?>
