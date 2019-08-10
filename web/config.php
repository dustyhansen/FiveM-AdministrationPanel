<?php
	// PLEASE READ ALL COMMENTS AFTER PARAMETERS
	// PLEASE READ ALL COMMENTS AFTER PARAMETERS
	// PLEASE READ ALL COMMENTS AFTER PARAMETERS
	

	// DATABASE SETTINGS
	$GLOBALS['mysql_host'] = "localhost";										// MySQL Host
	$GLOBALS['mysql_user'] = "adminpanel";										// MySQL User
	$GLOBALS['mysql_pass'] = "LCRPapproot6970";										// MySQL Password
	$GLOBALS['mysql_db'] = "adminpanel";											// MySQL Database
	
	// CRON SETTINGS
	$GLOBALS['phpbin'] = "/opt/lampstack-7.3.7-1/php/bin"; 	// Used for Multithreading (Set to EXE Location for Windows) (Find Linux Bin via cPanel Info) (Defaulted to ELHostingServices)

	// SITE SETTINGS
	$GLOBALS['domainname'] = "http://app.lakecountyrp.com/staff/";				// URL (and folder if used) with protocol and trailing slash. Example: https://arthurmitchell.xyz/beta/
	$GLOBALS['subfolder'] = ""; 								// If accessing via a sub folder type the sub folder name out like the following: /foldername Example: /staff otherwise leave blank
	$GLOBALS['apikey'] = "2052FB2D69FF4D55477F889B52401F17";								 			// SteamCommunity API Key https://steamcommunity.com/dev/apikey
	date_default_timezone_set('America/Chicago');						// Timezone (http://php.net/manual/en/timezones.php)
	
?>