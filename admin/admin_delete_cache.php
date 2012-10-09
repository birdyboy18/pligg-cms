﻿<?php

include_once('../internal/Smarty.class.php');
$main_smarty = new Smarty;

include('../config.php');
include(mnminclude.'html1.php');
include(mnminclude.'link.php');
include(mnminclude.'user.php');
include(mnminclude.'smartyvariables.php');

check_referrer();

// require user to log in
force_authentication();

// restrict access to admins
$canIhaveAccess = 0;
$canIhaveAccess = $canIhaveAccess + checklevel('admin');

if($canIhaveAccess == 0){	
	header("Location: " . getmyurl('admin_login', $_SERVER['REQUEST_URI']));
	die();
}

// ------------ lixlpixel recursive PHP functions -------------
// recursive_remove_directory( directory to delete, empty )
// expects path to directory and optional TRUE / FALSE to empty
// of course PHP has to have the rights to delete the directory
// you specify and all files and folders inside the directory
// ------------------------------------------------------------

// to use this function to totally remove a directory, write:
// recursive_remove_directory('path/to/directory/to/delete');

// to use this function to empty a directory, write:
// recursive_remove_directory('path/to/full_directory',TRUE);

function recursive_remove_directory($directory, $empty=TRUE)
{
	// if the path has a slash at the end we remove it here
	if(substr($directory,-1) == '../cache')
	{
		$directory = substr($directory,0,-1);
	}

	// if the path is not valid or is not a directory ...
	if(!file_exists($directory) || !is_dir($directory))
	{
		// ... we return false and exit the function
		return FALSE;

	// ... if the path is not readable
	}elseif(!is_readable($directory))
	{
		// ... we return false and exit the function
		return FALSE;

	// ... else if the path is readable
	}else{

		// we open the directory
		$handle = opendir($directory);

		// and scan through the items inside
		while (FALSE !== ($item = readdir($handle)))
		{
			//print $item."\n";
			
			// if the filepointer is not the current directory
			// or the parent directory
			if($item != '.' && $item != '..' && $item != '.htaccess' && $item != 'log.php' && $item != 'index.html')
			{
				// we build the new path to delete
				$path = $directory.'/'.$item;

				// if the new path is a directory
				if(is_dir($path)) 
				{
					// we call this function with the new path
					recursive_remove_directory($path);

				// if the new path is a file
				}else{
					// we remove the file
					unlink($path);
				}
			}
		}
		// close the directory
		closedir($handle);

		// if the option to empty is not set to true
		if($empty == FALSE)
		{
			// try to delete the now empty directory
			if(!rmdir($directory))
			{
				// return false if not possible
				return FALSE;
			}
		}

			
		// return success
		return TRUE;
	}
}
// ------------------------------------------------------------

recursive_remove_directory('../cache',TRUE);

?>
<div class="modal-header">
	<a class="close" data-dismiss="modal">&times;</a>
	<h3><?php echo $main_smarty->get_config_vars('PLIGG_Visual_AdminPanel_Cleared_Cache') ?></h3>
</div>
<div class="modal-body">
	<p><?php echo $main_smarty->get_config_vars('PLIGG_Visual_AdminPanel_Cleared_Cache_Message') ?></p>
</div>
<div class="modal-footer">
	<a class="btn btn-primary" data-dismiss="modal">Close</a>
	<!-- <?php echo $main_smarty->get_config_vars('PLIGG_Visual_AdminPanel_Return_Admin') ?> -->
</div>