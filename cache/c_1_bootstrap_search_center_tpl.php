<?php require_once('/Applications/MAMP/htdocs/pligg/plugins/function.checkActionsTpl.php'); $this->register_function("checkActionsTpl", "tpl_function_checkActionsTpl");  /* V2.20 Template Lite, 8 March 2008. (c) Mark Dickenson, Jon Langevin. GNU LGPL. 2013-11-24 01:51:29 CET */ ?>


<!-- search_center.tpl -->
<?php echo $this->_vars['link_summary_output']; ?>

<br />
<?php echo tpl_function_checkActionsTpl(array('location' => "tpl_pligg_pagination_start"), $this);?>
<?php echo $this->_vars['search_pagination']; ?>

<?php echo tpl_function_checkActionsTpl(array('location' => "tpl_pligg_pagination_end"), $this);?>
<!--/search_center.tpl -->