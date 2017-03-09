<?php
/*
+ ----------------------------------------------------------------------------+
|     Guild Wars 2 HoT Event Timer
|
|     Niklas Grieger
|     http://blutigeklingen.de
| 	  blut.homepage@gmail.com
+----------------------------------------------------------------------------+
*/

// Plugin info -------------------------------------------------------------------------------------------------------
$eplug_name = "GW2 Event Timer";
$eplug_version = "1.0";
$eplug_author = "Niklas Grieger";
$eplug_url = "http://blutigeklingen.de";
$eplug_email = "blut.homepage@gmail.de";
$eplug_description = "Das ist eine Gesamtübersicht über die Events in Guild Wars 2";
$eplug_compatible = "e107v0.7+";
$eplug_readme = "admin_readme.php";

// Name of the plugin's folder -------------------------------------------------------------------------------------
$eplug_folder = "GW2EventTimer";

// Name of menu item for plugin ----------------------------------------------------------------------------------
//$eplug_menu_name = "";

// Name of the admin configuration file --------------------------------------------------------------------------
$eplug_conffile = "admin_config.php";


// Icon image and caption text ------------------------------------------------------------------------------------
$eplug_icon = $eplug_folder."/img/gw2_icon_32.png";
$eplug_icon_small = $eplug_folder."/img/gw2_icon_16.png";
$eplug_caption = "GW2 Event Timer";

// List of preferences -----------------------------------------------------------------------------------------------
//$eplug_prefs = array();

// List of table names -----------------------------------------------------------------------------------------------
//$eplug_table_names = array("poll2s");

// List of comment_type ids used by this plugin. -----------------------------
//$eplug_comment_ids = array(4);

// List of sql requests to create tables -----------------------------------------------------------------------------
//$eplug_tables = 

// Create a link in main menu (yes=TRUE, no=FALSE) -------------------------------------------------------------
$eplug_link = TRUE;
$eplug_link_name = "Event Timer";
$eplug_link_url = e_PLUGIN."GW2EventTimer/myplugin.php";

// Text to display after plugin successfully installed ------------------------------------------------------------------
$eplug_done = "Installation Successful...";


?>