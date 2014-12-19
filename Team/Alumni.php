<?php
chdir($_SERVER['DOCUMENT_ROOT']);
require_once('Includes/Main.php');
Menu(false,"Alumni","#header nav > ul > li > a#menuTeam",".dropotron li a#menuTAlumni");
?>
		<!-- Main -->
			<section id="main" class="container">
				<header>
					<h2>Alumni</h2>
				</header>
				<section class="box">
						<?php
						require_once("Includes/ListOutStuff.php");
ListOutStuff("Team/Alumni.txt","/images/Alumni");
?>
				</section>
			</section>
			
<?php Footer(); ?>
