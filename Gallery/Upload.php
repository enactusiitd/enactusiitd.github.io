<?php
chdir($_SERVER['DOCUMENT_ROOT']);
require_once('Includes/Main.php');
Menu(false,"Gallery","#header nav > ul > li > a#menuGallery");
?>

<section id="main" class="container">
	<header>
		<h2>Gallery</h2>
		<p>Upload files</p>
	</header>
	<section class="box">
		<div class="box alt">
			<form action="UHelper.php" method="post" enctype="multipart/form-data">
				<div class="row no-collapse 50% uniform">
					<div class="12u">
						<input name="file[]" type="file" class="button alt fit" multiple/><br />
					</div>
					<div class="4u"></div>
					<div class="4u">
						<input type="Submit" class="button special"/><br />
					</div>
					<div class="4u"></div>
				</div>
			</form>
		</div>
	</section>
</section>

<?php Footer(); ?>
