<?php
   // always include the class2.php file - this is the main e107 file
   require_once("../../class2.php");
   
   define('GW2 Events','GW2 Events');
 	
   // this generates all the HTML up to the start of the main section
   require_once(HEADERF);
   //e107::js('GW2HoTEventTimer','js.js','jquery');
   // Include plugin language file, check first for site's preferred language
   //include_lan(e_PLUGIN."myplugin/languages/myplugin_".e_LANGUAGE.".php");
//<script type='text/javascript' src='http://www.moongate.pl/event-timers/common.js'></script>
	//<script type='text/javascript' src='http://www.moongate.pl/event-timers/jquery.js'></script>
	//<script type='text/javascript' src='http://www.moongate.pl/event-timers/moment.min.js'></script>
   //
   // write your PHP code to generate the required HTML here
   $text = "
   	<link href='".e_PLUGIN."GW2EventTimer/style.css' rel='stylesheet' type='text/css' />
   	<script src='".e_PLUGIN."GW2EventTimer/js/js.js'></script>
   	<script type='text/javascript' src='http://www.moongate.pl/event-timers/jquery.js'></script>
	<script type='text/javascript' src='http://www.moongate.pl/event-timers/moment.min.js'></script>
	
	
	<div id='event-wrapper' class='event-wrapper'>
	<div class='event-limit'><span class='event-limit-text'>Nächste</span></div>
	<div class='event-pointer'><span class='event-pointer-time'>00:00 UTC</span></div>
	<div style='height:10px; width:100%;'></div>
	</div>";
   //$text .= "more HTML for our plugin";

   // Ensure the pages HTML is rendered using the theme layout.
   $ns->tablerender("Guild Wars 2 - Events", $text);

   // this generates all the HTML (menus etc.) after the end of the main section
   require_once(FOOTERF);
?>