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
			Cistem Aperio | CP Digital Darkroom's Lab
		</title>
		<meta name="viewport" content="initial-scale=1, maximum-scale=1, user-scalable=0">
		
		<link rel="stylesheet" type="text/css" href="css/layoutNew.css">
	</head>

	<body>
		<div class="outer">
		<div class="middle">
		<div id="container">
		
			<div id="contentSingle">
			
				<img class="repoDescription" src="images/cistemIcon.png">
				<h2 class="repoDescriptionHeader">&nbsp;&nbsp;Cistem Aperio</h3>
			
			</div><!--Close Package Header Div-->
			
			<div id="<?php echo $compatabilityDiv?>">
			
				<p><center><?php echo "<b>" . $compatabilityNotice . "</b>"; ?></center></p>
			
			</div><!--Close Package Header Div-->
			
			<div id="contentSingle">
				<h3 class="textHeaderLabel">In This Update</h3>
			</div>
			<div id="contentBottom">
				<ul>
					<li><p>Added A Preference Bundle, You'll Have To Enable the Tweak</p></li>
					<li><p>Added three choices of blur style</p></li>
					<li><p>Should play nice on all iPhones</p></li>
					<li><p>Should play nice with upscale and little brother</p></li>
				</ul>			
			</div><!--Close Package Header Div-->
			
			<div id="contentSingle">
				<h3 class="textHeaderLabel">Description</h3>
			</div>
			<div id="contentBottom">
				<ul>
					<li><p>You like blur? Have some blur! Cistem Aperio blurs the unused space when raising Control Center.<br><br>I know for sure it works on iPhone 6. I haven't tested on other devices since I made this quickly after work. You are welcome to test it and let me know. I'll add custimizable settings in the next update as well as add compatibility with all iPhones (if they're broken, if not then YAY!) <br><br>If you find a new bug, please report it by tapping the &ldquo;Author&rdquo; button above.</p></li>
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
				</ul>			
			</div><!--Close Package Header Div-->
			
		</div><!--Close Container Div-->
		</div>
		</div>
	</body>
	
</html>