<?php
$conn=mysqli_connect("localhost","enactstz_DBUser","7C9FJtNycfPh");
mysqli_select_db($conn,"enactstz_Gallery");
$string=mysqli_real_escape_string($conn,$_GET['Index']);
$query="Select Caption from TableCaptions where Pic=" . $string;
$result=mysqli_query($conn,$query);
$row=mysqli_fetch_assoc($result);
mysqli_free_result($result);
$var=$row['Caption'];
mysqli_close($conn);		
echo $var;
?>
