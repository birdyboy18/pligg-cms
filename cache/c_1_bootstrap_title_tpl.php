<?php /* V2.20 Template Lite, 8 March 2008. (c) Mark Dickenson, Jon Langevin. GNU LGPL. 2013-11-24 00:29:03 CET */ ?>

<!-- title.tpl -->
<?php if (preg_match ( '/index.php$/' , $_SERVER['SCRIPT_NAME'] )): ?>
	<?php if ($this->_vars['get']['category']): ?>
		<?php if ($this->_vars['get']['page'] > 1): ?>
			<title><?php echo $this->_vars['navbar_where']['text2']; ?>
 | <?php echo $this->_confs['PLIGG_Page_Title']; ?>
 <?php echo $this->_vars['get']['page']; ?>
 | <?php echo $this->_confs['PLIGG_Visual_Breadcrumb_Published_Tab']; ?>
 | <?php echo $this->_confs['PLIGG_Visual_Name']; ?>
</title>
		<?php else: ?>
			<title><?php echo $this->_vars['navbar_where']['text2']; ?>
 | <?php echo $this->_confs['PLIGG_Visual_Breadcrumb_Published_Tab']; ?>
 | <?php echo $this->_confs['PLIGG_Visual_Name']; ?>
</title>
		<?php endif; ?>
	<?php elseif ($this->_vars['get']['page'] > 1): ?>
		<title><?php echo $this->_confs['PLIGG_Visual_Breadcrumb_Published_Tab']; ?>
 | <?php echo $this->_confs['PLIGG_Page_Title']; ?>
 <?php echo $this->_vars['get']['page']; ?>
 | <?php echo $this->_confs['PLIGG_Visual_Name']; ?>
</title>
	<?php else: ?>
		<title><?php echo $this->_confs['PLIGG_Visual_Name']; ?>
 - <?php echo $this->_confs['PLIGG_Visual_RSS_Description']; ?>
</title>
	<?php endif;  elseif (preg_match ( '/new.php$/' , $_SERVER['SCRIPT_NAME'] )): ?>
	<?php if ($this->_vars['get']['category']): ?>
		<?php if ($this->_vars['get']['page'] > 1): ?>
			<title><?php echo $this->_vars['navbar_where']['text2']; ?>
 | <?php echo $this->_confs['PLIGG_Page_Title']; ?>
 <?php echo $this->_vars['get']['page']; ?>
 | <?php echo $this->_confs['PLIGG_Visual_Breadcrumb_Unpublished_Tab']; ?>
 | <?php echo $this->_confs['PLIGG_Visual_Name']; ?>
</title>
		<?php else: ?>
			<title><?php echo $this->_vars['navbar_where']['text2']; ?>
 | <?php echo $this->_confs['PLIGG_Visual_Breadcrumb_Unpublished_Tab']; ?>
 | <?php echo $this->_confs['PLIGG_Visual_Name']; ?>
</title>
		<?php endif; ?>
	<?php elseif ($this->_vars['get']['page'] > 1): ?>
		<title><?php echo $this->_confs['PLIGG_Visual_Breadcrumb_Unpublished_Tab']; ?>
 | <?php echo $this->_confs['PLIGG_Page_Title']; ?>
 <?php echo $this->_vars['get']['page']; ?>
 | <?php echo $this->_confs['PLIGG_Visual_Name']; ?>
</title>
	<?php else: ?>
		<title><?php echo $this->_confs['PLIGG_Visual_Breadcrumb_Unpublished_Tab']; ?>
 | <?php echo $this->_confs['PLIGG_Visual_Name']; ?>
</title>
	<?php endif;  elseif (preg_match ( '/submit.php$/' , $_SERVER['SCRIPT_NAME'] )): ?>
	<title><?php echo $this->_confs['PLIGG_Visual_Submit']; ?>
 | <?php echo $this->_confs['PLIGG_Visual_Name']; ?>
</title>
<?php elseif (preg_match ( '/live.php$/' , $_SERVER['SCRIPT_NAME'] )): ?>
	<title><?php echo $this->_confs['PLIGG_Visual_Live']; ?>
 | <?php echo $this->_confs['PLIGG_Visual_Name']; ?>
</title>
<?php elseif (preg_match ( '/live_unpublished.php$/' , $_SERVER['SCRIPT_NAME'] )): ?>
	<title><?php echo $this->_confs['PLIGG_Visual_Live']; ?>
 <?php echo $this->_confs['PLIGG_Visual_Breadcrumb_Unpublished']; ?>
 | <?php echo $this->_confs['PLIGG_Visual_Name']; ?>
</title>
<?php elseif (preg_match ( '/live_published.php$/' , $_SERVER['SCRIPT_NAME'] )): ?>
	<title><?php echo $this->_confs['PLIGG_Visual_Live']; ?>
 <?php echo $this->_confs['PLIGG_Visual_Breadcrumb_Published']; ?>
 | <?php echo $this->_confs['PLIGG_Visual_Name']; ?>
</title>
<?php elseif (preg_match ( '/live_comments.php$/' , $_SERVER['SCRIPT_NAME'] )): ?>
	<title><?php echo $this->_confs['PLIGG_Visual_Live']; ?>
 <?php echo $this->_confs['PLIGG_Visual_Comments']; ?>
 | <?php echo $this->_confs['PLIGG_Visual_Name']; ?>
</title>
<?php elseif (preg_match ( '/editlink.php$/' , $_SERVER['SCRIPT_NAME'] )): ?>	
	<title><?php echo $this->_confs['PLIGG_Visual_EditStory_Header']; ?>
: <?php echo $this->_vars['submit_title']; ?>
 | <?php echo $this->_confs['PLIGG_Visual_Name']; ?>
</title>
<?php elseif (preg_match ( '/advancedsearch.php$/' , $_SERVER['SCRIPT_NAME'] )): ?>
	<title><?php echo $this->_confs['PLIGG_Visual_Search_Advanced']; ?>
 | <?php echo $this->_confs['PLIGG_Visual_Name']; ?>
</title>
<?php elseif (preg_match ( '/rssfeeds.php$/' , $_SERVER['SCRIPT_NAME'] )): ?>
	<title><?php echo $this->_confs['PLIGG_Visual_RSS_Feeds']; ?>
 | <?php echo $this->_confs['PLIGG_Visual_Name']; ?>
</title>
<?php elseif (preg_match ( '/search.php$/' , $_SERVER['SCRIPT_NAME'] )): ?>
	<title><?php echo $this->_confs['PLIGG_Visual_Search_SearchResults']; ?>
 &quot;<?php if ($this->_vars['get']['search']):  echo $this->_vars['get']['search'];  else:  echo $this->_vars['get']['date'];  endif; ?>&quot; | <?php echo $this->_confs['PLIGG_Visual_Name']; ?>
</title>
<?php elseif (preg_match ( '/groups.php$/' , $_SERVER['SCRIPT_NAME'] )): ?>
	<?php if ($this->_vars['get']['page'] > 1): ?>
		<title><?php echo $this->_confs['PLIGG_Visual_Groups']; ?>
 | <?php echo $this->_confs['PLIGG_Page_Title']; ?>
 <?php echo $this->_vars['get']['page']; ?>
 | <?php echo $this->_confs['PLIGG_Visual_Name']; ?>
</title>
	<?php else: ?>
		<title><?php echo $this->_confs['PLIGG_Visual_Groups']; ?>
 | <?php echo $this->_confs['PLIGG_Visual_Name']; ?>
</title>
	<?php endif;  elseif (preg_match ( '/editgroup.php$/' , $_SERVER['SCRIPT_NAME'] )): ?>
	<title><?php echo $this->_vars['group_name']; ?>
 | <?php echo $this->_confs['PLIGG_Visual_Name']; ?>
</title>
<?php elseif (preg_match ( '/group_story.php$/' , $_SERVER['SCRIPT_NAME'] )): ?>
	<?php if ($this->_vars['groupview'] != 'published'): ?>
		<?php if ($this->_vars['groupview'] == "new"): ?>
			<?php $this->assign('tview', $this->_confs['PLIGG_Visual_Group_New']); ?>
		<?php elseif ($this->_vars['groupview'] == "shared"): ?>
			<?php $this->assign('tview', $this->_confs['PLIGG_Visual_Group_Shared']); ?>
		<?php elseif ($this->_vars['groupview'] == "members"): ?>
			<?php $this->assign('tview', $this->_confs['PLIGG_Visual_Group_Member']); ?>
		<?php endif; ?>

		<?php if ($this->_vars['get']['page'] > 1): ?>
			<title><?php echo $this->_vars['group_name']; ?>
 | <?php if ($this->_vars['get']['category']):  echo $this->_vars['navbar_where']['text2']; ?>
 | <?php endif;  echo $this->_vars['tview']; ?>
 | <?php echo $this->_confs['PLIGG_Page_Title']; ?>
 <?php echo $this->_vars['get']['page']; ?>
 | <?php echo $this->_confs['PLIGG_Visual_Name']; ?>
</title>
		<?php else: ?>
			<title><?php echo $this->_vars['group_name']; ?>
 | <?php if ($this->_vars['get']['category']):  echo $this->_vars['navbar_where']['text2']; ?>
 | <?php endif;  echo $this->_vars['tview']; ?>
 | <?php echo $this->_confs['PLIGG_Visual_Name']; ?>
</title>
		<?php endif; ?>
	<?php elseif ($this->_vars['get']['page'] > 1): ?>
		<title><?php echo $this->_vars['group_name']; ?>
 | <?php echo $this->_confs['PLIGG_Page_Title']; ?>
 <?php echo $this->_vars['get']['page']; ?>
 | <?php echo $this->_confs['PLIGG_Visual_Name']; ?>
</title>
	<?php else: ?>
		<title><?php echo $this->_vars['group_name']; ?>
 - <?php echo $this->_vars['group_description']; ?>
 | <?php echo $this->_confs['PLIGG_Visual_Name']; ?>
</title>
	<?php endif;  elseif ($this->_vars['pagename'] == "register_complete"): ?>
	<title><?php echo $this->_confs['PLIGG_Validate_user_email_Title']; ?>
 | <?php echo $this->_confs['PLIGG_Visual_Name']; ?>
</title>
<?php elseif ($this->_vars['pagename'] == "404"): ?>
	<title><?php echo $this->_confs['PLIGG_Visual_404_Error']; ?>
 | <?php echo $this->_confs['PLIGG_Visual_Name']; ?>
</title>
<?php else: ?>	
	<title><?php echo $this->_vars['posttitle']; ?>
 | <?php echo $this->_vars['pretitle']; ?>
 <?php echo $this->_confs['PLIGG_Visual_Name']; ?>
</title>
<?php endif; ?>
<!-- /title.tpl -->