<?php
chdir($_SERVER['DOCUMENT_ROOT']);
require_once('Includes/Main.php');
Menu(false,"404 not found");
?>
		<!-- Main -->
			<section id="main" class="container">
				<header>
					<h2>Error 404</h2>
					<p>Sorry, we couldn't find what you were looking for. Unless you were looking for this error page. <br>In which case, congratulations! You found it.<br><br>
					Coming here from Google? Perhaps you're looking for our porjects - <a href="/Aanch/">Aanch</a> or <a href="/Excelsior/">Excelsior</a>?<br>
					Maybe our <a href="/Team/Active.php">active team</a>, our <a href="/Team/Alumni.php">alumni</a>, or just looking to <a href="/Contact/">contact us?</a><br><br>
					Something else? Have a look at the menu above, or click to <a href="/">go back home.</a></p>
				</header>
			</section>
<?php Footer(); ?>
