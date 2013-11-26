<?php require_once('/Applications/MAMP/htdocs/pligg/plugins/modifier.sanitize.php'); $this->register_modifier("sanitize", "tpl_modifier_sanitize");  require_once('/Applications/MAMP/htdocs/pligg/plugins/modifier.truncate.php'); $this->register_modifier("truncate", "tpl_modifier_truncate");  /* V2.20 Template Lite, 8 March 2008. (c) Mark Dickenson, Jon Langevin. GNU LGPL. 2013-11-24 00:29:03 CET */ ?>


<!-- meta.tpl -->
<meta http-equiv="Pragma" content="no-cache" />
<meta http-equiv="expires" content="0" />
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />	
<?php if ($this->_vars['meta_description'] != ""): ?>
	<meta name="description" content="<?php echo $this->_run_modifier($this->_vars['meta_description'], 'truncate', 'plugin', 1, "300"); ?>
" />
<?php elseif ($this->_vars['pagename'] == "search"): ?>
	<meta name="description" content="<?php echo $this->_confs['PLIGG_Visual_Search_SearchResults']; ?>
 <?php echo $this->_run_modifier($this->_run_modifier($_GET['search'], 'sanitize', 'plugin', 1, 2), 'stripslashes', 'PHP', 1); ?>
" />
<?php else: ?>
	<meta name="description" content="<?php echo $this->_run_modifier($this->_confs['PLIGG_Visual_What_Is_Pligg_Text'], 'htmlentities', 'PHP', 1); ?>
" />
<?php endif;  if ($this->_vars['meta_keywords'] != ""): ?>
	<meta name="keywords" content="<?php echo $this->_vars['meta_keywords']; ?>
" />
<?php elseif ($this->_vars['pagename'] == "search"): ?>
	<meta name="keywords" content="<?php echo $this->_run_modifier($this->_run_modifier($_GET['search'], 'sanitize', 'plugin', 1, 2), 'stripslashes', 'PHP', 1); ?>
" />
<?php else: ?>
	<meta name="keywords" content="<?php echo $this->_confs['PLIGG_Visual_Meta_Keywords']; ?>
" />
<?php endif; ?>
<meta name="Language" content="<?php echo $this->_confs['PLIGG_Visual_Meta_Language']; ?>
" />
<meta name="Robots" content="All" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="generator" content="Pligg" />
<!--/meta.tpl -->