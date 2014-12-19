<?php
function GetBranch($a) {
	if ($a=="ME1")
		return "Mechanical Engineering";
	else if ($a=="ME2")
		return "Production & Industrial Engineering";
	else if ($a=="TT")
		return "Textile Technology";
	else if ($a=="CE")
		return "Civil Engineering";
	else if ($a=="BB")
		return "Biochemical Engineering";
	else if ($a=="PH")
		return "Engineering Physics";
	else if ($a=="EE")
		return "Electrical Engineering";
	else if ($a=="MT")
		return "Mathematics & Computing";
	else if ($a=="CH")
		return "Chemical Engineering";
	else if ($a=="CS")
		return "Computer Science";
	else
		return "<br>";		
}

function GetDesig($a) {
		if ($a=="TL")
			return "Team Leader";
		else if ($a=="CTM")
			return "Core Team Member";
		else if ($a=="GTM")
			return "Team Member";			
}

function ListOutStuff($file,$imageDir) {
	echo '<div class="box alt">
							<div class="row no-collapse 50% uniform">';
	$file=fopen($file,"r");
	$line=trim(fgets($file));
	while($line)
		{
		echo("\n\t\t\t\t\t\t\t\t<div class=\"3u 6u(2) 6u(3)\">\n");
		$info=str_getcsv($line,"\t");
		echo("\t\t\t\t\t\t\t\t\t<span class=\"image fit\">\n\t\t\t\t\t\t\t\t");
		//Team.txt hai agar to
		if ($info[4])
			echo("\t\t<a href=\"http://fb.com/$info[4]\" target=\"_blank\">");
		//Get File Name
		$imageFile=str_replace(" ","_",$info[0]);
		echo "\n\t\t\t\t\t\t\t\t\t\t\t<img src=\"$imageDir/$imageFile.jpg\" alt=\"\" class=\"phpSourced\"/>";
		if ($info[4])
			echo "\n\t\t\t\t\t\t\t\t\t\t</a>";
		echo "\n\t\t\t\t\t\t\t\t\t\t<div class=\"info\">\n";
		//Name, Designation, Number visible
		//Alumni - 1 - branch
		echo("\t\t\t\t\t\t\t\t\t\t\t<div class=\"name\">$info[0]");
		if ($info[2]) {
			$Desig=GetDesig($info[2]);
			echo("<br>$Desig");
		}
		if ($info[3])
			echo("<br>+91-$info[3]");
		echo("</div>\n");
		if (count($info)>2) {
			$mail=strtolower(str_replace(" ",".",$info[0]));
			$Branch=GetBranch($info[1]);
			echo "\t\t\t\t\t\t\t\t\t\t\t<div class=\"details\">$Branch<br><a href=\"mailto:$mail@enactusiitd.org\" class=\"mailtoLink\">$mail@enactusiitd.org</a></div>";
		}
			echo "\n\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t</span>\n\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t";
		$line=fgets($file);
		if ($line===false)
			{
			echo "\t</div><hr>";
			break;
			}
		else {
			$line=trim($line);
			if ($line=="")
				{
				echo "\t</div><hr>\n\t\t\t\t\t\t\t<div class=\"row no-collapse 50% uniform\">";
				$line=trim(fgets($file));
				}
		}}
	fclose($file);
	echo '
	<script>
	function equalHeight(group) {
	var tallest = 0;
	group.each(function() {
		var thisHeight = $(this).height();
		if(thisHeight > tallest) {
			tallest = thisHeight;
		}
	});
	group.height(tallest);
	}
	
	$(document).ready(function() {
	equalHeight($(".info"));
	});
	
	$(document).resize(function() {
	equalHeight($(".info"));
	});
	</script>	
	</div>';
}
?>
