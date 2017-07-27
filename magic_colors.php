<?php
$page = $_SERVER['PHP_SELF'];
$sec = "1";
?>
<!DOCTYPE html>
<html lang="en">
<head id="refresh">
	<meta charset="utf-8">
	<meta http-equiv="refresh" content="<?php echo $sec?>;URL='<?php echo $page?>'">
	
</head>
<body>
<?php 
	// $rand = dechex(rand(0x000000, 0xFFFFFF));
	// $color_code = '#' . $rand;
	// echo "<span style='color:$color_code'><h1>Shriram Bisen</h1></span></br>";
?>
<table>
<?php

$colors = array();
while (true) {
   $color          = substr(str_shuffle('ABCDEF0123456789'), 0, 6);
   $colors[] = '#' . $color;
   if ( count($colors) == 1000 ) {
			break;
   }
}

$newarray=array_chunk($colors,'25');
$arraycount = count($colors);

$counter=0;
for($i=0;$i<$arraycount;$i++)
{   echo '<tr>';
		for($j=0;$j<25;$j++)
		{
		?>
	<td><div style='height:50px;width:50px; background-color:<?php echo $newarray[$i][$j];?>;'></div></td>
	<?php	
		$counter++;
		if($counter>=count($colors))break;
		}
	if($counter>=count($colors))break;
	echo "</tr>";
}
?>
</table>



</body>
</html>