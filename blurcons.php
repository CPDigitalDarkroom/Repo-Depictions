<?php

if(strpos($_SERVER['HTTP_USER_AGENT'], 'iPhone') || strpos($_SERVER['HTTP_USER_AGENT'],'iPad' ) || strpos($_SERVER['HTTP_USER_AGENT'], 'iPod' ) !== false){
    if (strpos($_SERVER['HTTP_USER_AGENT'], 'OS 8_1_1') || strpos($_SERVER['HTTP_USER_AGENT'], 'OS 8_1_0')  || strpos($_SERVER['HTTP_USER_AGENT'], 'OS 8_1')  || strpos($_SERVER['HTTP_USER_AGENT'], 'OS 8_0')  == true) {
    	$compatabilityNotice = "Your iOS version is compatible :)";
    	$compatabilityDiv = "compatibileDiv";
    }
    else{
    	$compatabilityNotice = "Your firmware is not supported yet. You can check back later or follow package updates via the 'Change Package Settings' button";
    	$compatabilityDiv = "notCompatibileDiv";
    	}
    
    }

else {
    $compatabilityNotice = "Visit this site on your iOS device to view compatibility information";
    $compatabilityDiv = "notCompatibileDiv";
}

?>
<!DOCTYPE html>
<html>
	<head>
		<title>
			BlurCons | CP Digital Darkroom's Lab
		</title>
		<meta name="viewport" content="initial-scale=1, maximum-scale=1, user-scalable=0">
		
		<link rel="stylesheet" type="text/css" href="css/layoutNew.css">
	</head>

	<body>
		<div class="outer">
		<div class="middle">
		<div id="container">
		
			<div id="contentSingle">
			
				<img class="repoDescription" src="images/tweaks.png">
				<h2 class="repoDescriptionHeader">&nbsp;&nbsp;BlurCons</h3>
			
			</div><!--Close Package Header Div-->
			
			<div id="<?php echo $compatabilityDiv?>">
			
				<p><center><?php echo "<b>" . $compatabilityNotice . "</b>"; ?></center></p>
			
			</div><!--Close Package Header Div-->
			
			<div id="contentSingle">
				<h3 class="textHeaderLabel">In This Update</h3>
			</div>
			<div id="contentBottom">
				<ul>
					<li><p>New repo depictions, had to update to include them. Next update has suggested improvements.</p></li>
				</ul>			
			</div><!--Close Package Header Div-->
			
			<div id="contentSingle">
				<h3 class="textHeaderLabel">Description</h3>
			</div>
			<div id="contentBottom">
				<ul>
					<li><p>BlurCons adds a circular blur around every icon. Icons are also slightly resized for a nicer view. You can configure blur style and icon size in the settings panel.<br><br>If you find a new bug, please report it by tapping the &ldquo;Author&rdquo; button above.</p></li>
					<hr>
					<li>
						<a href="https://twitter.com/intent/follow?screen_name=cpdigidarkroom" target="_blank">Follow @CPDigiDarkroom on Twitter</a>
					</li>
					<hr>
					<li>
						<a href="https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=VC8TZ96V6V6WJ">Donate to Developer</a>
					</li>
				</ul>			
			</div><!--Close Package Header Div-->
			
			<div id="contentSingle">
				<h3 class="textHeaderLabel">Compatibility</h3>
			</div>
			<div id="contentBottom">
				<ul>
					<li><p>iOS 8.x</p></li>
				</ul>			
			</div><!--Close Package Header Div-->
			
			<div id="contentSingle">
				<h3 class="textHeaderLabel">Dependencies</h3>
			</div>
			<div id="contentBottom">
				<ul>
					<li><p>mobilesubstrate (CydiaSubstrate)</p></li>
					<li><p>preferenceloader (Preference Loader)</p></li>
				</ul>			
			</div><!--Close Package Header Div-->
			
		</div><!--Close Container Div-->
		</div>
		</div>
	</body>
	
</html>