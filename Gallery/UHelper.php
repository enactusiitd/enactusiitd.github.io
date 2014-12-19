<?php
function reArrayFiles(&$file_post) {
    $file_ary = array();
    $file_count = count($file_post['name']);
    $file_keys = array_keys($file_post);
    for ($i=0; $i<$file_count; $i++) {
        foreach ($file_keys as $key) {
            $file_ary[$i][$key] = $file_post[$key][$i];
        }
    }
    return $file_ary;
}
chdir($_SERVER['DOCUMENT_ROOT']);
require_once('Includes/Main.php');
Menu(false,"Gallery","#header nav > ul > li > a#menuGallery");
$FilesArray=reArrayFiles($_FILES['file']);
echo '<section class="box">
	<div class="box alt">
		<div class="row no-collapse 50% uniform">';
foreach($FilesArray as $File) {
	try {
		if (!isset($File['error']))
			throw new RuntimeException('Invalid parameters.');
		
		switch($File['error']) {
		case UPLOAD_ERR_OK:break;
		case UPLOAD_ERR_PARTIAL:throw new RuntimeException('Only partial upload');
	        case UPLOAD_ERR_NO_FILE:throw new RuntimeException('No file sent.');
	        case UPLOAD_ERR_INI_SIZE:throw new RuntimeException('Exceeded filesize limit.');
	        case UPLOAD_ERR_CANT_WRITE:throw new RuntimeException('Could not write to disk.');
	        default:throw new RuntimeException('Unknown errors.');
		}
		
		if ($File['size'] > 1000000)
			throw new RuntimeException('Exceeded filesize limit.');
		
		$finfo=finfo_open(FILEINFO_MIME_TYPE);
		if (finfo_file($finfo,$File['tmp_name'])!='image/jpeg')
			throw new RuntimeExcveption('Not jpeg file');
		echo	'<div class="3u 6u(2) 6u(3)">
				<span class="image fit">
					<img src="' . $File["tmp_name"] . '" alt="" class="phpSourced"/>
				</span>
			</div>';
					
		//if (!move_uploaded_file($File['tmp_name'],"/images/Gallery/" . ".jpg");
    }
    catch (RuntimeException $e) {
	    }
}
echo '</div></div></section>';
Footer();
?>
