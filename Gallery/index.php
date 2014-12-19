<?php
chdir($_SERVER['DOCUMENT_ROOT']);
require_once('Includes/Main.php');
Menu(false,"Gallery","#header nav > ul > li > a#menuGallery");
?>
<script src="/js/jquery.mobile.custom.min.js"></script>
		<!-- Main -->
			<section id="main" class="container">
				<header>
					<h2>Gallery</h2>
					<p>Stalk Us</p>
				</header>
				<span class="galleryContainer">
					<img src="/images/Gallery/1.jpg" alt="" class="gallery"/>
					<p class="caption">My test caption</p>
					<i class="fa fa-arrow-left fa-lg disabled" id="prevButton"></i>
					<i class="fa fa-arrow-right fa-lg" id="nextButton"></i>
				</span>
				<p style="text-align:center;"><br><br>You can use the arrow keys/swipe to navigate, too!</p>
			</section>
			
<script>var index;$(document).ready(function(){function t(){if(!$("#nextButton").hasClass("disabled")){++index;$("span.galleryContainer img.gallery").attr("src","/images/Gallery/"+index+".jpg");e(index);$("#prevButton").removeClass("disabled");imgPath="/images/Gallery/"+(index+1)+".jpg";if(imgPath.fileExists());else $("#nextButton").addClass("disabled")}}function n(){if(!$("#prevButton").hasClass("disabled")){--index;$("span.galleryContainer img.gallery").attr("src","/images/Gallery/"+index+".jpg");e(index);$("#nextButton").removeClass("disabled");imgPath="/images/Gallery/"+(index-1)+".jpg";if(imgPath.fileExists());else $("#prevButton").addClass("disabled")}}$(document).keydown(function(e){switch(e.which){case 37:case 38:e.preventDefault();n();break;case 39:case 40:e.preventDefault();t();break;default:return}});String.prototype.fileExists=function(){filename=this.trim();var e=jQuery.ajax({url:filename,type:"HEAD",async:false}).status;return e!="200"?false:true};var e=function(e){$.get("Helper.php",{Index:e},function(e){$(".caption").text(e);console.log(e)})};index=1;imgPath="/images/Gallery/2.jpg";if(imgPath.fileExists());else $("#nextButton").addClass("disabled");e(index);$("#nextButton").on("click",function(){t()});$("#prevButton").on("click",function(){n()});$("span.galleryContainer").on("swiperight",function(){n()});$("span.galleryContainer").on("swipeleft",function(){t()})})</script>
<?php Footer(); ?>
