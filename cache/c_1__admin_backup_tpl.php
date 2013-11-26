<?php /* V2.20 Template Lite, 8 March 2008. (c) Mark Dickenson, Jon Langevin. GNU LGPL. 2013-11-24 04:16:49 CET */ ?>

<!-- backup.tpl -->
<?php if ($this->_vars['isAdmin'] == 1): ?>
	<?php 
	$canIhaveAccess = 0;
	$canIhaveAccess = $canIhaveAccess + checklevel('admin');
	if($canIhaveAccess == 1) {
		if($_REQUEST['dobackup'] == "files"){
			include ('../libs/backup/file_backup/backup.php');
			$FileBackup = new FileBackup;
			$FileBackup->MakeBackup();
			//echo "<HR>";
			header("Location: admin_backup.php");
			die();
		}
		if($_REQUEST['dobackup'] == "avatars"){
			include ('../libs/backup/file_backup/backup.php');
			$FileBackup = new FileBackup;
			$FileBackup->MakeAvatarBackup();
			//echo "<HR>";
			header("Location: admin_backup.php");
			die();
		}
		if($_REQUEST['dobackup'] == "database"){
			require("../libs/backup/mysql_backup/backup.php");
		}
		if($_REQUEST['dobackup'] == "clearall"){
			// http://www.phpbbstyles.com/viewtopic.php?t=2278
			$files = array();  
			$dir = opendir('./backup'); 
			while(($file = readdir($dir)) !== false) {
				if($file !== '.' && $file !== '..' && !is_dir($file) && $file !== 'index.htm') {
					$files[] = $file;
				}
			}
			closedir($dir);
			sort($files);
			for($i=0; $i<count($files); $i++) {
				unlink('./backup/'.$files[$i]);
			}
			header("Location: admin_backup.php");
			die();
		}
		// Output the data
		echo "<legend>";  echo $this->_confs['PLIGG_Visual_AdminPanel_Backup'];  echo "</legend>";
		// Check to see if you have permission to write backup files to the /admin/backup directory.
		$backup_permissions = substr(sprintf('%o', fileperms('./backup')), -4);
		if ($backup_permissions !== '0777'){
			echo "<div class='alert'>The /admin/backup/ directory does not have the correct CHMOD permissions to write backup files.<br />Please change the CHMOD status from ".$backup_permissions." to 0777.</div>";
		} else {
			echo '<a class="btn btn-default" style="margin-bottom:6px;" href="?dobackup=files">';  echo $this->_confs['PLIGG_Visual_View_Backup_Files'];   echo'</a>';
			echo '&nbsp; <a class="btn btn-default" style="margin-bottom:6px;" href="?dobackup=avatars">';  echo $this->_confs['PLIGG_Visual_View_Backup_Avatars'];  echo'</a>';
			echo '&nbsp; <a class="btn btn-default" style="margin-bottom:6px;" href="?dobackup=database">';  echo $this->_confs['PLIGG_Visual_View_Backup_Database'];  echo'</a>';

			// http://www.phpbbstyles.com/viewtopic.php?t=2278
			$files = array();
			$dir = opendir('./backup');
			while(($file = readdir($dir)) !== false) {
				if($file !== '.' && $file !== '..' && !is_dir($file) && $file !== 'index.htm') {
					$files[] = $file;  
				}
			}
			closedir($dir);  
			sort($files);  
			if (count($files) != '0'){
				echo '&nbsp; <a class="btn btn-danger" style="margin-bottom:6px;" href="?dobackup=clearall">';  echo $this->_confs['PLIGG_Visual_View_Backup_Remove'];  echo'</a>';
				echo "<p>";  echo $this->_confs['PLIGG_Visual_View_Backup_Previous'];  echo"</p>";
				echo '<table class="table table-striped table-condensed"><tbody>';
				for($i=0; $i<count($files); $i++) {
					echo '<tr><td colspan="4"><a href="./backup/' . $files[$i] . '"><i class="fa fa-download"></i> ' . $files[$i] . '</a></td></tr>';  
				}
				echo '</tbody></table>';
			}else{
				echo '<p>';
				 ?>
				<?php echo $this->_confs['PLIGG_Visual_AdminPanel_Backup_None']; ?>

				<?php 
				echo '</p>';
			}
		}
	} else {
		echo "Access denied";
	}
	 ?>
<?php else: ?>
	<?php echo $this->_confs['PLIGG_Visual_Header_AdminPanel_NoAccess']; ?>

<?php endif; ?>
<!--/backup.tpl -->