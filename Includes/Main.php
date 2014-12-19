<?php
function Menu() {
		$args=func_get_args();
		echo '<!DOCTYPE HTML>
<html>
	<head>
		<title>' . $args[1] . ' | Enactus IIT Delhi</title>
		<!--[if lte IE 8]><script src="/css/ie/html5shiv.js"></script><![endif]-->
                <meta name="theme-color" content="#C88A12">
       		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
                <link rel="apple-touch-icon" sizes="57x57" href="/images/favicon/apple-touch-icon-57x57.png">
		<link rel="apple-touch-icon" sizes="114x114" href="/images/favicon/apple-touch-icon-114x114.png">
		<link rel="apple-touch-icon" sizes="72x72" href="/images/favicon/apple-touch-icon-72x72.png">
		<link rel="apple-touch-icon" sizes="144x144" href="/images/favicon/apple-touch-icon-144x144.png">
		<link rel="apple-touch-icon" sizes="60x60" href="/images/favicon/apple-touch-icon-60x60.png">
		<link rel="apple-touch-icon" sizes="120x120" href="/images/favicon/apple-touch-icon-120x120.png">
		<link rel="apple-touch-icon" sizes="76x76" href="/images/favicon/apple-touch-icon-76x76.png">
		<link rel="apple-touch-icon" sizes="152x152" href="/images/favicon/apple-touch-icon-152x152.png">
		<link rel="apple-touch-icon" sizes="180x180" href="/images/favicon/apple-touch-icon-180x180.png">
		<meta name="apple-mobile-web-app-title" content="Enactus IIT Delhi">
		<link rel="shortcut icon" href="/images/favicon/favicon.ico">
		<link rel="icon" type="image/png" href="/images/favicon/favicon-192x192.png" sizes="192x192">
		<link rel="icon" type="image/png" href="/images/favicon/favicon-160x160.png" sizes="160x160">
		<link rel="icon" type="image/png" href="/images/favicon/favicon-96x96.png" sizes="96x96">
		<link rel="icon" type="image/png" href="/images/favicon/favicon-16x16.png" sizes="16x16">
		<link rel="icon" type="image/png" href="/images/favicon/favicon-32x32.png" sizes="32x32">
		<meta name="msapplication-TileColor" content="#2d89ef">
		<meta name="msapplication-TileImage" content="/images/favicon/mstile-144x144.png">
		<meta name="msapplication-config" content="/images/favicon/browserconfig.xml">
		<meta name="application-name" content="Enactus IIT Delhi">';
		require_once("js/jquery.min.php");
		require_once("js/jquery.dropotron.min.php");
		require_once("js/jquery.scrollgress.min.php");
		require_once("js/skel.min.php");
		require_once("js/skel-layers.min.php");
		require_once("js/init-min.php");
		echo'
		<noscript>
			<link rel="stylesheet" href="/css/skel.css" />
			<link rel="stylesheet" href="/css/style.css" />
			<link rel="stylesheet" href="/css/style-wide.css" />
		</noscript>
		<!--[if lte IE 8]><link rel="stylesheet" href="css/ie/v8.css" /><![endif]-->
		';
	require_once('Includes/AnalyticsTracking.php');
	echo'
	</head>
	
	';
	if ($args[0]===true)
		echo '<body class="landing">';
	else
		echo '<body>';
	echo'
		<!-- Header -->
			';
		if ($args[0]===true)
			echo '<header id="header" class="alt">';
		else
			echo '<header id="header" class="skel-layers-fixed">';
			echo '
				<h1><a href="/"><img src="/images/favicon/enactus.svg"> Enactus IIT Delhi</a></h1>
				<nav id="nav">
					<ul>
						<li class="noticon"><a href="/" id="menuHome">Home</a></li>
						<li>
							<a href="" class="icon fa-angle-down" id="menuProjects">Projects</a>
							<ul>
								<li>
									<a href="/Aanch/" id="menuAanch">Aanch</a>
									<ul>
								<li><a href="/Aanch/Concept.php" id="menuAConcept">Concept</a></li>
								<li><a href="/Aanch/Communities.php" id="menuACommunities">Communities</a></li>
								<li><a href="/Aanch/Awards.php" id="menuAAwards">Awards</a></li>
								<li><a href="/Aanch/Partners.php" id="menuAPartners">Partners</a></li>
									</ul>
								</li>
								<li>
									<a href="/Excelsior/" id="menuExcelsior">Excelsior</a>
								</li>
							</ul>
						</li>
						<li>
							<a href="" class="icon fa-angle-down" id="menuTeam">Team</a>
							<ul>
								<li><a href="/Team/Active.php" id="menuTActive">Active</a></li>
								<li><a href="/Team/Alumni.php" id="menuTAlumni">Alumni</a></li>
								<li><a href="/Team/Awards.php" id="menuTAwards">Awards</a></li>
								<li><a href="/Team/Partners.php" id="menuTPartners">Partners</a></li>
							</ul>
						</li>
						<li class="noticon"><a href="/Gallery/" id="menuGallery">Gallery</a></li>
						<li class="noticon"><a href="/Contact/" id="menuContact">Contact</a></li>
					</ul>
				</nav>
			</header>
			<script>
			$(document).ready(function(){';
				for ($i=2; $i<func_num_args(); $i++)
        				echo '
        					$("' . $args[$i] . '").css("font-weight", "bold");';
			echo '
			});
			</script>';
}

function Footer() {
			echo '			<footer id="footer">
				<ul class="icons">
					<li><a href="https://twitter.com/EnactusIITD" class="icon fa-twitter" target="_blank"><span class="label">Twitter</span></a></li>
					<li><a href="https://www.facebook.com/enactusiitdelhi" class="icon fa-facebook" target="_blank"><span class="label">Facebook</span></a></li>
					<li>Theme by <a href="http://html5up.net">HTML5 UP</a></li>
				</ul>
			</footer>
	</body>
</html>';
}
?>
