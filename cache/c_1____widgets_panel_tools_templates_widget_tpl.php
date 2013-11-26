<?php require_once('/Applications/MAMP/htdocs/pligg/plugins/function.checkActionsTpl.php'); $this->register_function("checkActionsTpl", "tpl_function_checkActionsTpl");  /* V2.20 Template Lite, 8 March 2008. (c) Mark Dickenson, Jon Langevin. GNU LGPL. 2013-11-24 01:00:50 CET */ ?>

<ul>
	<?php echo tpl_function_checkActionsTpl(array('location' => "tpl_pligg_panel_tools_start"), $this);?>
	<li><a href="<?php echo $this->_vars['my_pligg_base']; ?>
/admin/admin_delete_cache.php" data-toggle="modal"><?php echo $this->_confs['PLIGG_Visual_AdminPanel_Delete_Cache']; ?>
</a></li>
	<li><a href="<?php echo $this->_vars['my_pligg_base']; ?>
/admin/admin_delete_comments.php" data-toggle="modal"><?php echo $this->_confs['PLIGG_Visual_AdminPanel_Delete_Comments']; ?>
</a></li>
	<li><a href="<?php echo $this->_vars['my_pligg_base']; ?>
/admin/admin_delete_stories.php" data-toggle="modal"><?php echo $this->_confs['PLIGG_Visual_AdminPanel_Delete_Stories']; ?>
</a></li>
	<li><a href="<?php echo $this->_vars['my_pligg_base']; ?>
/admin/admin_optimize_database.php" data-toggle="modal"><?php echo $this->_confs['PLIGG_Visual_AdminPanel_Optimize']; ?>
</a></li>
	<?php echo tpl_function_checkActionsTpl(array('location' => "tpl_pligg_panel_tools_end"), $this);?>
</ul>