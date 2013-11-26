<?php require_once('/Applications/MAMP/htdocs/pligg/plugins/function.checkActionsTpl.php'); $this->register_function("checkActionsTpl", "tpl_function_checkActionsTpl");  /* V2.20 Template Lite, 8 March 2008. (c) Mark Dickenson, Jon Langevin. GNU LGPL. 2013-11-25 16:33:33 CET */ ?>


<!-- Start Menu -->
	<ul class="menu">
		<?php if ($this->_vars['user_authenticated'] == true): ?>
			<li><span class="subheading">User</span></li>
			<?php if (isset ( $this->_vars['isadmin'] ) && $this->_vars['isadmin'] == 1): ?>
				<li><a href="<?php echo $this->_vars['URL_admin']; ?>
"><i class="fa fa-asterisk"></i><?php echo $this->_confs['PLIGG_Visual_Header_AdminPanel']; ?>
</a></li>
			<?php endif; ?>
			<li><a href="<?php echo $this->_vars['URL_logout']; ?>
"><i class="fa fa-unlock-alt"></i><?php echo $this->_confs['PLIGG_Visual_Logout']; ?>
</a></li>
			<li><a href="<?php echo $this->_vars['URL_News_Sent']; ?>
"><i class="fa fa-plus"></i><?php echo $this->_confs['PLIGG_Visual_User_NewsSent']; ?>
</a></li>
		<?php endif; ?>
		
		<?php if ($this->_vars['user_authenticated'] != true): ?>
		<li><span class="subheading">User</span></li>
		<li><a data-toggle="modal" href="#loginModal"><i class="fa fa-lock"></i><?php echo $this->_confs['PLIGG_Visual_Login_Title']; ?>
</a></li>
		<li><a href="<?php echo $this->_vars['URL_register']; ?>
"><i class="fa fa-check"></i><?php echo $this->_confs['PLIGG_Visual_Register']; ?>
</a></li>
		<?php endif; ?>

		<li><a href="<?php echo $this->_vars['URL_groups']; ?>
"><i class="fa fa-group"></i><?php echo $this->_confs['PLIGG_Visual_Groups']; ?>
</a></li>
		<li><span class="subheading">Categories</span></li>
		<!-- Start Category Loop -->
			<?php echo tpl_function_checkActionsTpl(array('location' => "tpl_widget_categpries_start"), $this);?>
				<?php if (isset($this->_sections['thecat'])) unset($this->_sections['thecat']);
$this->_sections['thecat']['name'] = 'thecat';
$this->_sections['thecat']['loop'] = is_array($this->_vars['cat_array']) ? count($this->_vars['cat_array']) : max(0, (int)$this->_vars['cat_array']);
$this->_sections['thecat']['show'] = true;
$this->_sections['thecat']['max'] = $this->_sections['thecat']['loop'];
$this->_sections['thecat']['step'] = 1;
$this->_sections['thecat']['start'] = $this->_sections['thecat']['step'] > 0 ? 0 : $this->_sections['thecat']['loop']-1;
if ($this->_sections['thecat']['show']) {
	$this->_sections['thecat']['total'] = $this->_sections['thecat']['loop'];
	if ($this->_sections['thecat']['total'] == 0)
		$this->_sections['thecat']['show'] = false;
} else
	$this->_sections['thecat']['total'] = 0;
if ($this->_sections['thecat']['show']):

		for ($this->_sections['thecat']['index'] = $this->_sections['thecat']['start'], $this->_sections['thecat']['iteration'] = 1;
			 $this->_sections['thecat']['iteration'] <= $this->_sections['thecat']['total'];
			 $this->_sections['thecat']['index'] += $this->_sections['thecat']['step'], $this->_sections['thecat']['iteration']++):
$this->_sections['thecat']['rownum'] = $this->_sections['thecat']['iteration'];
$this->_sections['thecat']['index_prev'] = $this->_sections['thecat']['index'] - $this->_sections['thecat']['step'];
$this->_sections['thecat']['index_next'] = $this->_sections['thecat']['index'] + $this->_sections['thecat']['step'];
$this->_sections['thecat']['first']	  = ($this->_sections['thecat']['iteration'] == 1);
$this->_sections['thecat']['last']	   = ($this->_sections['thecat']['iteration'] == $this->_sections['thecat']['total']);
?>
					<?php if ($this->_vars['cat_array'][$this->_sections['thecat']['index']]['auto_id'] != 0): ?>
						<li><a href="<?php echo $this->_vars['URL_maincategory'].$this->_vars['cat_array'][$this->_sections['thecat']['index']]['safename']; ?>
"><?php echo $this->_vars['cat_array'][$this->_sections['thecat']['index']]['name']; ?>
</a></li>
					<?php endif; ?>
				<?php endfor; endif; ?>
			<?php echo tpl_function_checkActionsTpl(array('location' => "tpl_widget_categories_end"), $this);?>
		<!-- End Category Loop -->
		<li><span class="subheading">Search</span></li>
		<li><a href="<?php echo $this->_vars['URL_advancedsearch']; ?>
"><i class="fa fa-search"></i><?php echo $this->_confs['PLIGG_Visual_Search_Advanced']; ?>
</a></li>
	</ul>
<!-- End Menu-->
<!-- Start sidebar_menu.tpl -->
<?php if ($this->_vars['pagename'] == "published" || $this->_vars['pagename'] == "index" || $this->_vars['pagename'] == "new" || $this->_vars['pagename'] == "cloud" || $this->_vars['pagename'] == "groups" || $this->_vars['pagename'] == "live" || $this->_vars['pagename'] == "live_published" || $this->_vars['pagename'] == "live_unpublished" || $this->_vars['pagename'] == "live_comments"): ?>
<ul class="sort-menu">

	<?php if ($this->_vars['setmeka'] == "" || $this->_vars['setmeka'] == "recent"): ?>
		<li class="active"><a href="<?php echo $this->_vars['index_url_recent']; ?>
"><i class="fa fa-clock-o"></i></a></li>
	<?php else: ?>
		<li><a href="<?php echo $this->_vars['index_url_recent']; ?>
"><i class="fa fa-clock-o"></i></a></li>
	<?php endif; ?>

	<?php if ($this->_vars['setmeka'] == "upvoted"): ?>
		<li class="active"><a href="<?php echo $this->_vars['index_url_upvoted']; ?>
"><i class="fa fa-thumbs-o-up"></i></a></li>
	<?php else: ?>
		<li><a href="<?php echo $this->_vars['index_url_upvoted']; ?>
"><i class="fa fa-thumbs-o-up"></i></a></li>
	<?php endif; ?>

	<?php if ($this->_vars['setmeka'] == "downvoted"): ?>
		<li class="active"><a href="<?php echo $this->_vars['index_url_downvoted']; ?>
"><i class="fa fa-thumbs-o-down"></i></a></li>
	<?php else: ?>
		<li><a href="<?php echo $this->_vars['index_url_downvoted']; ?>
"><i class="fa fa-thumbs-o-down"></i></a></li>
	<?php endif; ?>

	<?php if ($this->_vars['setmeka'] == "commented"): ?>
		<li class="active"><a href="<?php echo $this->_vars['index_url_commented']; ?>
"><i class="fa fa-comments-o"></i></a></li>
	<?php else: ?>
		<li><a href="<?php echo $this->_vars['index_url_commented']; ?>
"><i class="fa fa-comments-o"></i></a></li>
	<?php endif; ?>

	<?php if ($this->_vars['setmeka'] == "today"): ?>
		<li class="active"><a href="<?php echo $this->_vars['index_url_today']; ?>
"><i class="fa fa-star-o"></i></a></li>
	<?php else: ?>
		<li><a href="<?php echo $this->_vars['index_url_today']; ?>
"><i class="fa fa-star-o"></i></a></li>
	<?php endif; ?>

	<?php if ($this->_vars['setmeka'] == "yesterday"): ?>
		<li class="active"><a href="<?php echo $this->_vars['index_url_yesterday']; ?>
"><i class="fa fa-reply"></i></a></li>
	<?php else: ?>
		<li><a href="<?php echo $this->_vars['index_url_yesterday']; ?>
"><i class="fa fa-reply"></i></a></li>
	<?php endif; ?>

	<?php if ($this->_vars['setmeka'] == "week"): ?>
		<li class="active"><a href="<?php echo $this->_vars['index_url_week']; ?>
"><i class="fa fa-reply-all"></i></a></li>
	<?php else: ?>
		<li><a href="<?php echo $this->_vars['index_url_week']; ?>
"><i class="fa fa-reply-all"></i></a></li>
	<?php endif; ?>

	<?php if ($this->_vars['setmeka'] == "month"): ?>
		<li class="active"><a href="<?php echo $this->_vars['index_url_month']; ?>
"><i class="fa fa-calendar"></i></a></li>
	<?php else: ?>
		<li><a href="<?php echo $this->_vars['index_url_month']; ?>
"><i class="fa fa-calendar"></i></a></li>
	<?php endif; ?>
</ul>
<?php endif; ?>

<?php if ($this->_vars['pagename'] == "story" || $this->_vars['pagename'] == "submit" || $this->_vars['pagename'] == "user" || $this->_vars['pagename'] == "register" || $this->_vars['pagename'] == "advancedsearch"): ?>
<ul class="sort-menu">
	<li><a href="<?php echo $this->_vars['my_base_url'];  echo $this->_vars['my_pligg_base']; ?>
"><i class="fa fa-home"></i></a></li>
</ul>
<?php endif; ?>

<?php if ($this->_vars['pagename'] == "search" || $this->_vars['pagename'] == "noresults"): ?>
<ul class="sort-menu">
	<li><a href="<?php echo $this->_vars['my_base_url'];  echo $this->_vars['my_pligg_base']; ?>
"><i class="fa fa-home"></i></a></li>

	<?php if ($this->_vars['setmeka'] == "" || $this->_vars['setmeka'] == "recent"): ?>
		<li class="active"><a href="<?php echo $this->_vars['index_url_recent']; ?>
"><i class="fa fa-clock-o"></i></a></li>
	<?php else: ?>
		<li><a href="<?php echo $this->_vars['index_url_recent']; ?>
"><i class="fa fa-clock-o"></i></a></li>
	<?php endif; ?>

	<?php if ($this->_vars['setmeka'] == "upvoted"): ?>
		<li class="active"><a href="<?php echo $this->_vars['index_url_upvoted']; ?>
"><i class="fa fa-thumbs-o-up"></i></a></li>
	<?php else: ?>
		<li><a href="<?php echo $this->_vars['index_url_upvoted']; ?>
"><i class="fa fa-thumbs-o-up"></i></a></li>
	<?php endif; ?>

	<?php if ($this->_vars['setmeka'] == "downvoted"): ?>
		<li class="active"><a href="<?php echo $this->_vars['index_url_downvoted']; ?>
"><i class="fa fa-thumbs-o-down"></i></a></li>
	<?php else: ?>
		<li><a href="<?php echo $this->_vars['index_url_downvoted']; ?>
"><i class="fa fa-thumbs-o-down"></i></a></li>
	<?php endif; ?>

	<?php if ($this->_vars['setmeka'] == "commented"): ?>
		<li class="active"><a href="<?php echo $this->_vars['index_url_commented']; ?>
"><i class="fa fa-comments-o"></i></a></li>
	<?php else: ?>
		<li><a href="<?php echo $this->_vars['index_url_commented']; ?>
"><i class="fa fa-comments-o"></i></a></li>
	<?php endif; ?>
</ul>
<?php endif; ?>
<!-- End sidebar_menu.tpl -->