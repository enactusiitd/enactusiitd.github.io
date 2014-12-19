<?php
chdir($_SERVER['DOCUMENT_ROOT']);
require_once('Includes/Main.php');
Menu(false,"Communities - Aanch","#header nav > ul > li > a#menuProjects",".dropotron li a#menuAanch",".dropotron li a#menuACommunities");
?>
<!-- Main -->
			<section id="main" class="container">
				<header>
					<h2>Project Aanch</h2>
					<p>Communities</p>
				</header>
				<div class="box">
					<span class="image fit">
						<img src="/images/Aanch/Communities.jpg" alt="" id="comm">
					</span>
					Our stove improves the lives and households of these communities
					<ul>
						<li>Bhatti, Delhi</li>
						<li>Mandi, Himachal Pradesh</li>
						<li>Assam</li>
						<li>Lucknow, Uttar Pradesh</li>
						<li>Muzafarnagar, UP</li>
						<li>Ranchi, Jharkhand</li>
					</ul>
				</div>
			</section>
<?php Footer(); ?>
