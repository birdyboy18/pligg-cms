<?php
// the path to the module. the probably shouldn't be changed unless you rename the buttons folder(s)
define('buttons_path', my_pligg_base . '/modules/buttons/');

// the path to the module. the probably shouldn't be changed unless you rename the module_store folder(s)
if(!defined('lang_loc')){
	// determine if we're in root or another folder like admin
	$pos = strrpos($_SERVER["SCRIPT_NAME"], "/");
	$path = substr($_SERVER["SCRIPT_NAME"], 0, $pos);
	if ($path == "/"){$path = "";}
	if($path != my_pligg_base){
		define('lang_loc', '..');
	} else {
		define('lang_loc', '.');
	}
}
	
define('buttons_lang_conf', lang_loc . '/modules/buttons/lang.conf');
define('buttons_pligg_lang_conf', lang_loc . "/languages/lang_" . pligg_language . ".conf");

define('buttons_tpl_path', '../modules/buttons/templates/');

// don't touch anything past this line.
if(isset($main_smarty) && is_object($main_smarty)){
	$main_smarty->assign('buttons_path', buttons_path);
	$main_smarty->assign('buttons_pligg_lang_conf', buttons_pligg_lang_conf);
	$main_smarty->assign('buttons_lang_conf', buttons_lang_conf);
	$main_smarty->assign('buttons_tpl_path', buttons_tpl_path);
	$main_smarty->assign('buttons_places', $buttons_places);
}

?>