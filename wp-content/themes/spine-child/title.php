<?php 
	// make first word of title styled
	$sitetitle =  bloginfo( 'name' );;	
	settype($sitetitle, "string");
	$sitetitle_plain = trim(strip_tags($sitetitle)); 
	$sitetitle_first = current(preg_split('/\s+/', $sitetitle_plain)); 
	$sitetitle = preg_replace("/$sitetitle_first/", "<span id='first'>$sitetitle_first</span>", $sitetitle, 1); 
	echo $sitetitle; 
?>