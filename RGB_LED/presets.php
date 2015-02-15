<?php
define('action', '');
define('speed', '');
define('step', '');
define('delay', '');
define('reverse', '');
define('color1', '');
define('color2', '');
define('color3', '');
define('color4', '');
define('color5', '');
define('color6', '');

?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<link rel="stylesheet" href="style.css" type="text/css" />
    <title>Six Color</title>
    <script type="text/javascript" src="jscolor/jscolor.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=false;">
</head>
<body>
<FORM name="six_color" action="/cgi-bin/command.py" method="GET">
	<p><input type="text" name="action" value="six_color" style="display: none;"></p>
		<table>
			<tr>
				<td colspan="3"><p class="Title">Presets</p></td>
			</tr>
			<tr>
				<td colspan="3"><p><button class="Button"><a href="index.php?action=<?php echo $action ?>&speed=<?php echo $speed ?>&step=<?php echo $step ?>&delay=<?php echo $delay ?>&reverse=<?php echo $reverse ?>&color1=<?php echo $color1 ?>&color2=<?php echo $color2 ?>&color3=<?php echo $color3 ?>&color4=<?php echo $color4 ?>&color5=<?php echo $color5 ?>&color6=<?php echo $color6 ?>">Main Menu</a></button></p></td>
			</tr>
			<tr>
				<td colspan="3"><p><button class="Button"><a href="/cgi-bin/command.py?action=two_color&speed=<?php echo $speed ?>&step=<?php echo $step ?>&delay=<?php echo $delay ?>&reverse=<?php echo $reverse ?>&color1=<?php echo "FF0000" ?>&color2=<?php echo "000000" ?>&color3=<?php echo $color3 ?>&color4=<?php echo $color4 ?>&color5=<?php echo $color5 ?>&color6=<?php echo $color6 ?>">Slow Red Fade</a></button></p></td>
			</tr>
			<tr>
				<td colspan="3"><p><button class="Button"><a href="/cgi-bin/command.py?action=six_color&speed=<?php echo $speed ?>&step=<?php echo $step ?>&delay=<?php echo $delay ?>&reverse=<?php echo $reverse ?>&color1=<?php echo "FF0000" ?>&color2=<?php echo "000000" ?>&color3=<?php echo "00FF00" ?>&color4=<?php echo "000000" ?>&color5=<?php echo "0000FF" ?>&color6=<?php echo "000000" ?>">Slow RGB Fade</a></button></p></td>
			</tr>
			<tr>
				<td colspan="3"><p><button class="Button"><a href="/cgi-bin/command.py?action=one_color&speed=<?php echo $speed ?>&step=<?php echo $step ?>&delay=<?php echo $delay ?>&reverse=<?php echo $reverse ?>&color1=<?php echo "FF0000" ?>">Constant Red 100%</a></button></p></td>
			</tr>
			<tr>
				<td colspan="3"><p><button class="Button"><a href="/cgi-bin/command.py?action=one_color&speed=<?php echo $speed ?>&step=<?php echo $step ?>&delay=<?php echo $delay ?>&reverse=<?php echo $reverse ?>&color1=<?php echo "7F0000" ?>">Constant Red 50%</a></button></p></td>
			</tr>
			<tr>
				<td colspan="3"><p><button class="Button"><a href="/cgi-bin/command.py?action=one_color&speed=<?php echo $speed ?>&step=<?php echo $step ?>&delay=<?php echo $delay ?>&reverse=<?php echo $reverse ?>&color1=<?php echo "0F0000" ?>">Constant Red 10%</a></button></p></td>
			</tr>
			<tr>
				<td colspan="3"><p><button class="Button"><a href="/cgi-bin/command.py?action=one_color&speed=<?php echo $speed ?>&step=<?php echo $step ?>&delay=<?php echo $delay ?>&reverse=<?php echo $reverse ?>&color1=<?php echo "00FF00" ?>">Constant Green 100%</a></button></p></td>
			</tr>
			<tr>
				<td colspan="3"><p><button class="Button"><a href="/cgi-bin/command.py?action=one_color&speed=<?php echo $speed ?>&step=<?php echo $step ?>&delay=<?php echo $delay ?>&reverse=<?php echo $reverse ?>&color1=<?php echo "007F00" ?>">Constant Green 50%</a></button></p></td>
			</tr>
			<tr>
				<td colspan="3"><p><button class="Button"><a href="/cgi-bin/command.py?action=one_color&speed=<?php echo $speed ?>&step=<?php echo $step ?>&delay=<?php echo $delay ?>&reverse=<?php echo $reverse ?>&color1=<?php echo "000F00" ?>">Constant Green 10%</a></button></p></td>
			</tr>
			<tr>
				<td colspan="3"><p><button class="Button"><a href="/cgi-bin/command.py?action=one_color&speed=<?php echo $speed ?>&step=<?php echo $step ?>&delay=<?php echo $delay ?>&reverse=<?php echo $reverse ?>&color1=<?php echo "0000FF" ?>">Constant Blue 100%</a></button></p></td>
			</tr>
			<tr>
				<td colspan="3"><p><button class="Button"><a href="/cgi-bin/command.py?action=one_color&speed=<?php echo $speed ?>&step=<?php echo $step ?>&delay=<?php echo $delay ?>&reverse=<?php echo $reverse ?>&color1=<?php echo "00007F" ?>">Constant Blue 50%</a></button></p></td>
			</tr>
			<tr>
				<td colspan="3"><p><button class="Button"><a href="/cgi-bin/command.py?action=one_color&speed=<?php echo $speed ?>&step=<?php echo $step ?>&delay=<?php echo $delay ?>&reverse=<?php echo $reverse ?>&color1=<?php echo "00000F" ?>">Constant Blue 10%</a></button></p></td>
			</tr>
			<tr>
				<td colspan="3"><p><button class="Button"><a href="/cgi-bin/command.py?action=stop&speed=<?php echo $speed ?>&step=<?php echo $step ?>&delay=<?php echo $delay ?>&reverse=<?php echo $reverse ?>&color1=<?php echo $color1 ?>&color2=<?php echo $color2 ?>&color3=<?php echo $color3 ?>&color4=<?php echo $color4 ?>&color5=<?php echo $color5 ?>&color6=<?php echo $color6 ?>">Turn Off</a></button></p></td>
			</tr>
			
		</TABLE>
	</FORM>
</body>
</html>
