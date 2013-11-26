<?php require_once('/Applications/MAMP/htdocs/pligg/plugins/function.checkActionsTpl.php'); $this->register_function("checkActionsTpl", "tpl_function_checkActionsTpl");  /* V2.20 Template Lite, 8 March 2008. (c) Mark Dickenson, Jon Langevin. GNU LGPL. 2013-11-24 00:29:03 CET */ ?>


<!-- index_center.tpl -->

<?php if (! $this->_vars['link_summary_output'] && $this->_vars['pagename'] == 'index' && count ( $_GET ) == 0): ?>
	
	<div class="well blank_index">
		<h2>Welcome to Pligg CMS!</h2>
		<p style="font-size:1.0em;">It looks like you've just set up a new Pligg website. Now would be a good time to submit your first article and then publish it to the homepage.</p>
		<p><a href="submit.php" class="btn btn-primary">Submit Your First Entry</a></p>
	</div>
<?php endif; ?>

<?php echo $this->_vars['link_summary_output']; ?>


<?php echo tpl_function_checkActionsTpl(array('location' => "tpl_pligg_pagination_start"), $this); echo $this->_vars['link_pagination']; ?>

<?php echo tpl_function_checkActionsTpl(array('location' => "tpl_pligg_pagination_end"), $this);?>
<!--/index_center.tpl -->