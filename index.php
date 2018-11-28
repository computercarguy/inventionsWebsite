<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
	<title>Inventions by Eric Ingamells</title>
	<link rel="stylesheet" type="text/css" href="style.css" />
	<script type="text/javascript" src="functs.js"></script>
</head>
<body class="body">

<table style="width:100%;margin-left:auto;margin-right:auto;">
	<tr>
		<td style="text-align:left;vertical-align:top;width:1%">
		<table style="width:100%">
			<tr>
				<td style="width:100%;white-space:nowrap;">
					<h1><a href="index.php" style="color:#aaaaaa">Inventions</a></h1>
				</td>
			</tr>
			<tr>
				<td style="white-space:nowrap;">
					<h3><a href="http://www.intensecomputers.com/portfolio/" 
					rel="external" style="color:#aaaaaa">By Eric Ingamells</a></h3>
				</td>
			</tr>
			<tr>

<?php
echo navigationSetup();
?>

				<td class="menu" id="other" onclick="navigation('other', 'otherintro')">
					Other Stuff
				</td>
			</tr>
			<tr>
				<td class="alignleft\" id="otherOptions"></td>
			</tr>
		</table>
		</td>
		<td id="table2" style="width:100px">&nbsp;</td>
		<td class="topcenter" id="showProductPage"></td>
	</tr>
	<tr>
		<td class="aligncenter" colspan="3"><table style="width:100%"><tr>
			<td class="center33">Eric Ingamells</td>
			<td class="center34">Inventor/Innovator/DIYer/Jack of all trades</td>
			<td class="center33">
				<a href="mailto:Inventions&#64;IntenseComputers.com">
				Inventions&#64;IntenseComputers.com</a>
			</td>
		</tr></table>
		</td>
	</tr>
	<tr>
		<td colspan="3" style="text-align:center;font-size:small" class="link" 
			onclick="nonProductNavigation('legal')">
			Legal Notice
		</td>
	</tr>
</table>
<div id="imageDisplay" class="imageDisplay" onclick="hideImageDisplay()"></div>
</body>
</html>

<?php
function navigationSetup()
{
	$menuOptions = array(
		array("minisnowplow", "Mini Snow Plow"),
		array("ani", "Ani: The Android Chassis"),
		array("shortshot", "Short Shot Dispensers"),
		array("jigsaw", "Jigsaw Miter Box"),
		array("rotatingtoy", "Rotating Toy"));
	
	$htmlCode = "";
	for ($i = 0; $i < count($menuOptions); $i++)
	{
		$htmlCode .= "	<td class=\"menu\" id=\"".$menuOptions[$i][0]."\" ".Chr(13);
		$htmlCode .= "onclick=\"navigation('".$menuOptions[$i][0]."','overview')\">";
		$htmlCode .= $menuOptions[$i][1]."</td>".Chr(13);
		$htmlCode .= "	</tr><tr>".Chr(13);
		$htmlCode .= "	<td class=\"alignleft\" id=\"".$menuOptions[$i][0]."Options\"></td>".Chr(13);
		$htmlCode .= "	</tr><tr>".Chr(13);
	}
	return $htmlCode;
}
?>