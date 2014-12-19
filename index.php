<?php
chdir($_SERVER['DOCUMENT_ROOT']);
require_once('Includes/Main.php');
Menu(true,"Home","#header nav > ul> li > a#menuHome");
?>
		<!-- Banner -->
			<section id="banner">
				<h2>Enactus IIT Delhi</h2>
				<p>Not just another club.</p>
			</section>

		<!-- Main -->
			<section id="main" class="container">
		
				<section class="box special">
					<header class="major">
						<h2>See opportunity, Take action, Enable Progress<br></h2>
						<p>Enactus is a community of student, academic and business leaders committed<br>to bring positive change in the society by the power of entrepreneurial action.</p>
					</header>
					<span class="image featured"><img src="/images/Banner.jpg" alt="" class="news"><p>Enactus IIT Delhi were the runners up in the Enactus India National Competition 2014.</p></span>
				</section>
						
				<section class="box special features">
					<div class="features-row">
						<section>
							<span class="icon major fa-bolt accent2"></span>
							<h3>Inspired</h3>
							<p>We are committed to improve the lives of the benefeciaries of our projects through perseverance.</p>
						</section>
						<section>
							<span class="icon major fa-area-chart accent3"></span>
							<h3>Results</h3>
							<p>Consistent performance is key to changing lives.</p>
						</section>
					</div>
				</section>
					
				<div class="row">
					<div class="6u 12u(2)">

						<section class="box special">
							<a href="/Aanch/"><span class="image featured"><img src="/images/Aanch/Logo.jpg" alt=""/></span>
							<h3>Project Aanch</h3></a>
							<p>Counter the catastrophic problem of Indoor Air Pollution in rural areas with the help of a community manufactured award winning cookstove.</p>
							<ul class="actions">
								<li><a href="/Aanch/" class="button special">Learn More</a></li>
							</ul>
						</section>
						
					</div>
					<div class="6u 12u(2)">

						<section class="box special">
							<a href="/Excelsior/"><span class="image featured"><img src="/images/Excelsior/Logo.jpg" alt=""/></span>
							<h3>Excelsior</h3></a>
							<p>Recycled cardboard makes good for a bag, easily foldable into a sturdy desk, giving increased education access to those in need.</p>
							<ul class="actions">
								<li><a href="/Excelsior/" class="button special">Learn More</a></li>
							</ul>
						</section>

					</div>
				</div>

			</section>
<?php Footer(); ?>
