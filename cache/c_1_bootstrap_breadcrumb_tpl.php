<?php require_once('/Applications/MAMP/htdocs/pligg/plugins/function.checkActionsTpl.php'); $this->register_function("checkActionsTpl", "tpl_function_checkActionsTpl");  /* V2.20 Template Lite, 8 March 2008. (c) Mark Dickenson, Jon Langevin. GNU LGPL. 2013-11-24 00:29:03 CET */ ?>


<!-- breadcrumb.tpl -->
<ul class="breadcrumb">
	<li><a href="<?php echo $this->_vars['my_base_url'];  echo $this->_vars['my_pligg_base']; ?>
"><?php echo $this->_confs['PLIGG_Visual_Home']; ?>
</a></li>
	<?php if ($this->_vars['pagename'] == "404"): ?><li class="active"><?php echo $this->_confs['PLIGG_Visual_404_Error']; ?>
</li><?php endif; ?>
	<?php if ($this->_vars['pagename'] == "submit"): ?><li class="active"><?php echo $this->_confs['PLIGG_Visual_Submit']; ?>
</li><?php endif; ?>
	<?php if ($this->_vars['pagename'] == "submit_groups"): ?><li><a href="<?php echo $this->_vars['URL_groups']; ?>
"><?php echo $this->_confs['PLIGG_Visual_Groups']; ?>
</a></li><li class="active"><?php echo $this->_confs['PLIGG_Visual_Submit_A_New_Group']; ?>
</li><?php endif; ?>
	<?php if ($this->_vars['pagename'] == "groups"): ?><li class="active"><?php echo $this->_confs['PLIGG_Visual_Groups']; ?>
</li><?php endif; ?>
	<?php if ($this->_vars['pagename'] == "editgroup"): ?><li><a href="<?php echo $this->_vars['URL_groups']; ?>
"><?php echo $this->_confs['PLIGG_Visual_Groups']; ?>
</a></li><li><a href="<?php echo $this->_vars['group_story_url']; ?>
"><?php echo $this->_vars['group_name']; ?>
</a></li><li class="active"><?php echo $this->_confs['PLIGG_Visual_Group_Edit']; ?>
</li><?php endif; ?>
	<?php if ($this->_vars['pagename'] == "group_story"): ?><li><a href="<?php echo $this->_vars['URL_groups']; ?>
"><?php echo $this->_confs['PLIGG_Visual_Groups']; ?>
</a></li><li class="active"><?php echo $this->_vars['group_name']; ?>
</li><?php endif; ?>
	<?php if ($this->_vars['pagename'] == "login"): ?><li class="active"><?php echo $this->_confs['PLIGG_Visual_Login']; ?>
</li><?php endif; ?>
	<?php if ($this->_vars['pagename'] == "recover"): ?><li class="active"><?php echo $this->_confs['PLIGG_Visual_Breadcrumb_Recover_Password']; ?>
</li><?php endif; ?>
	<?php if ($this->_vars['pagename'] == "register"): ?><li class="active"><?php echo $this->_confs['PLIGG_Visual_Register']; ?>
</li><?php endif; ?>
	<?php if ($this->_vars['pagename'] == "editlink"): ?><li><a href="<?php echo $this->_vars['my_base_url'];  echo $this->_vars['my_pligg_base']; ?>
/story.php?id=<?php echo $this->_vars['submit_id']; ?>
"><?php echo $this->_vars['submit_title']; ?>
</a></li><li class="active"><?php echo $this->_confs['PLIGG_Visual_LS_Admin_Edit']; ?>
</li><?php endif; ?>
	<?php if ($this->_vars['pagename'] == "rssfeeds"): ?><li class="active"><?php echo $this->_confs['PLIGG_Visual_RSS_Feeds']; ?>
</li><?php endif; ?>
	<?php if ($this->_vars['pagename'] == "topusers"): ?><li class="active"><?php echo $this->_confs['PLIGG_Visual_TopUsers_Statistics']; ?>
</li><?php endif; ?>
	<?php if ($this->_vars['pagename'] == "cloud"): ?><li class="active"><?php echo $this->_confs['PLIGG_Visual_Tags_Tags']; ?>
</li><?php endif; ?>
	<?php if ($this->_vars['pagename'] == "live"): ?><li class="active"><?php echo $this->_confs['PLIGG_Visual_Live']; ?>
</li><?php endif; ?>
	<?php if ($this->_vars['pagename'] == "live_unpublished" || $this->_vars['pagename'] == "live_published" || $this->_vars['pagename'] == "live_comments"): ?><li><a href="<?php echo $this->_vars['URL_live']; ?>
"><?php echo $this->_confs['PLIGG_Visual_Breadcrumb_Live']; ?>
</a> <span class="divider">/</span></li><?php endif; ?>
		<?php if ($this->_vars['pagename'] == "live_unpublished"): ?><li class="active"><?php echo $this->_confs['PLIGG_Visual_Breadcrumb_Unpublished']; ?>
</li><?php endif; ?>
		<?php if ($this->_vars['pagename'] == "live_published"): ?><li class="active"><?php echo $this->_confs['PLIGG_Visual_Breadcrumb_Published']; ?>
</li><?php endif; ?>
		<?php if ($this->_vars['pagename'] == "live_comments"): ?><li class="active"><?php echo $this->_confs['PLIGG_Visual_Breadcrumb_Comments']; ?>
</li><?php endif; ?>
	<?php if ($this->_vars['pagename'] == "advancedsearch"): ?><li class="active"><?php echo $this->_confs['PLIGG_Visual_Search_Advanced']; ?>
</li><?php endif; ?>
	<?php if ($this->_vars['pagename'] == "profile"): ?>
		<li><a href="<?php echo $this->_vars['URL_userNoVar']; ?>
"><?php echo $this->_vars['user_login']; ?>
</a></li> 
		<li class="active"><?php echo $this->_confs['PLIGG_Visual_Profile_ModifyProfile']; ?>
</li>
	<?php endif; ?>
	<?php if ($this->_vars['pagename'] == "user"): ?>
		<li><?php if ($this->_vars['user_view'] != 'profile'): ?><a href="<?php echo $this->_vars['user_url_personal_data2']; ?>
"><?php endif;  echo $this->_vars['username'];  if ($this->_vars['user_view'] != 'profile'): ?></a></li> <?php endif; ?>
		<?php if ($this->_vars['user_view'] != 'profile'): ?><li class="active"><?php echo $this->_vars['page_header']; ?>
 <a href="<?php echo $this->_vars['user_rss'].$this->_vars['view_href']; ?>
" target="_blank"><i class="fa fa-rss-square opacity_reset" style="color:#EEA639;"></i></a></li><?php endif; ?>
	<?php endif; ?>
	<?php if ($this->_vars['pagename'] == "published" && $this->_vars['get']['category'] == '' || $this->_vars['pagename'] == "index"): ?><li class="active"><?php echo $this->_confs['PLIGG_Visual_Published_News'];  endif; ?>
	<?php if ($this->_vars['pagename'] == "new" && $this->_vars['get']['category'] == ''): ?><li class="active"><?php echo $this->_confs['PLIGG_Visual_Pligg_Queued'];  endif; ?>
	<?php if ($this->_vars['get']['category']): ?>
		<?php if ($this->_vars['pagename'] == "published" || $this->_vars['pagename'] == "index"): ?><li><a href="<?php echo $this->_vars['my_base_url'];  echo $this->_vars['my_pligg_base']; ?>
"><?php echo $this->_confs['PLIGG_Visual_Published_News']; ?>
</a></li><?php endif; ?>
		<?php if ($this->_vars['pagename'] == "new"): ?><li><a href="<?php echo $this->_vars['URL_new']; ?>
"><?php echo $this->_confs['PLIGG_Visual_Pligg_Queued']; ?>
</a></li><?php endif; ?>
	<?php endif; ?>
	<?php if ($this->_vars['pagename'] == "noresults"): ?><li class="active"><?php echo $this->_vars['posttitle']; ?>

	<?php elseif (isset ( $this->_vars['get']['search'] )): ?><li class="active"><?php echo $this->_confs['PLIGG_Visual_Search_SearchResults']; ?>
 &quot;<?php if ($this->_vars['get']['search']):  echo $this->_vars['get']['search'];  else:  echo $this->_vars['get']['date'];  endif; ?>&quot;<?php endif; ?>
	<?php if (isset ( $this->_vars['get']['q'] )): ?><li class="active"><?php echo $this->_confs['PLIGG_Visual_Search_SearchResults']; ?>
 &quot;<?php echo $this->_vars['get']['q']; ?>
&quot;<?php endif; ?> 
	<?php if ($this->_vars['pagename'] == "index" || $this->_vars['pagename'] == "published" || $this->_vars['pagename'] == "new" || isset ( $this->_vars['get']['search'] ) || isset ( $this->_vars['get']['q'] )): ?>
		<?php if (isset ( $this->_vars['navbar_where']['link2'] ) && $this->_vars['navbar_where']['link2'] != ""): ?> <li> <a href="<?php echo $this->_vars['navbar_where']['link2']; ?>
"><?php echo $this->_vars['navbar_where']['text2']; ?>
</a> </li> <?php elseif (isset ( $this->_vars['navbar_where']['text2'] ) && $this->_vars['navbar_where']['text2'] != ""): ?> <li> <?php echo $this->_vars['navbar_where']['text2']; ?>
 </li> <?php endif; ?>
		<?php if (isset ( $this->_vars['navbar_where']['link3'] ) && $this->_vars['navbar_where']['link3'] != ""): ?> <li> <a href="<?php echo $this->_vars['navbar_where']['link3']; ?>
"><?php echo $this->_vars['navbar_where']['text3']; ?>
</a> </li> <?php elseif (isset ( $this->_vars['navbar_where']['text3'] ) && $this->_vars['navbar_where']['text3'] != ""): ?> <li> <?php echo $this->_vars['navbar_where']['text3']; ?>
 </li> <?php endif; ?>
		<?php if (isset ( $this->_vars['navbar_where']['link4'] ) && $this->_vars['navbar_where']['link4'] != ""): ?> <li> <a href="<?php echo $this->_vars['navbar_where']['link4']; ?>
"><?php echo $this->_vars['navbar_where']['text4']; ?>
</a> </li> <?php elseif (isset ( $this->_vars['navbar_where']['text4'] ) && $this->_vars['navbar_where']['text4'] != ""): ?> <li> <?php echo $this->_vars['navbar_where']['text4']; ?>
 </li> <?php endif; ?>
		</li>
	<?php endif; ?>
	<?php if ($this->_vars['posttitle'] != "" && $this->_vars['pagename'] == "page"): ?><li><?php echo $this->_vars['posttitle']; ?>
</li><?php endif; ?>
	<?php echo tpl_function_checkActionsTpl(array('location' => "tpl_pligg_breadcrumb_end"), $this);?>
	<?php if ($this->_vars['pagename'] == "published" || $this->_vars['pagename'] == "index" || $this->_vars['pagename'] == "new" || $this->_vars['pagename'] == "cloud" || $this->_vars['pagename'] == "groups" || $this->_vars['pagename'] == "live" || $this->_vars['pagename'] == "live_published" || $this->_vars['pagename'] == "live_unpublished" || $this->_vars['pagename'] == "live_comments" || $this->_vars['pagename'] == "search"): ?>
		
		<div class="btn-group pull-right breadcrumb-right">
			<ul class="nav nav-pills">
				<li class="dropdown pull-right">
					<a href="#" data-toggle="dropdown" class="dropdown-toggle">Sort <span class="caret"></span></a>
					<ul class="dropdown-menu" id="menu1">
						<?php if ($this->_vars['pagename'] == "published" || $this->_vars['pagename'] == "index" || $this->_vars['pagename'] == "new" || $this->_vars['pagename'] == "search"): ?>
						
							<?php if ($this->_vars['setmeka'] == "" || $this->_vars['setmeka'] == "recent"): ?>
								<li id="active"><a id="current" href="<?php echo $this->_vars['index_url_recent']; ?>
"><span class="active"><?php echo $this->_confs['PLIGG_Visual_Recently_Pop']; ?>
</span></a></li>
							<?php else: ?>
								<li><a href="<?php echo $this->_vars['index_url_recent']; ?>
"><?php echo $this->_confs['PLIGG_Visual_Recently_Pop']; ?>
</a></li>
							<?php endif; ?>
							
							
								<?php if ($this->_vars['setmeka'] == "upvoted"): ?>
									<li id="active" href="<?php echo $this->_vars['index_url_upvoted']; ?>
"><a href="<?php echo $this->_vars['index_url_upvoted']; ?>
" id="current"><span class="active">Most <?php echo $this->_confs['PLIGG_Visual_UpVoted']; ?>
</span></a></li>
								<?php else: ?>
									<li><a href="<?php echo $this->_vars['index_url_upvoted']; ?>
">Most <?php echo $this->_confs['PLIGG_Visual_UpVoted']; ?>
</a></li>
								<?php endif; ?>
								
								<?php if ($this->_vars['setmeka'] == "downvoted"): ?>
									<li id="active" href="<?php echo $this->_vars['index_url_downvoted']; ?>
"><a href="<?php echo $this->_vars['index_url_downvoted']; ?>
" id="current"><span class="active">Most <?php echo $this->_confs['PLIGG_Visual_DownVoted']; ?>
</span></a></li>
								<?php else: ?>
									<li><a href="<?php echo $this->_vars['index_url_downvoted']; ?>
">Most <?php echo $this->_confs['PLIGG_Visual_DownVoted']; ?>
</a></li>
								<?php endif; ?>
								
								<?php if ($this->_vars['setmeka'] == "commented"): ?>
									<li id="active" href="<?php echo $this->_vars['index_url_commented']; ?>
"><a href="<?php echo $this->_vars['index_url_commented']; ?>
" id="current"><span class="active">Most <?php echo $this->_confs['PLIGG_Visual_User_NewsCommented']; ?>
</span></a></li>
								<?php else: ?>
									<li><a href="<?php echo $this->_vars['index_url_commented']; ?>
">Most <?php echo $this->_confs['PLIGG_Visual_User_NewsCommented']; ?>
</a></li>
								<?php endif; ?>
							
						<?php endif; ?>
							
						<?php if ($this->_vars['pagename'] == "published" || $this->_vars['pagename'] == "index" || $this->_vars['pagename'] == "new"): ?>
							<?php if ($this->_vars['setmeka'] == "today"): ?>
								<li id="active" href="<?php echo $this->_vars['index_url_today']; ?>
"><a href="<?php echo $this->_vars['index_url_today']; ?>
" id="current"><span class="active"><?php echo $this->_confs['PLIGG_Visual_Top_Today']; ?>
</span></a></li>
							<?php else: ?>
								<li><a href="<?php echo $this->_vars['index_url_today']; ?>
"><?php echo $this->_confs['PLIGG_Visual_Top_Today']; ?>
</a></li>
							<?php endif; ?>
								
							<?php if ($this->_vars['setmeka'] == "yesterday"): ?>
								<li id="active"><a id="current" href="<?php echo $this->_vars['index_url_yesterday']; ?>
"><span class="active"><?php echo $this->_confs['PLIGG_Visual_Yesterday']; ?>
</span></a></li>
							<?php else: ?>
								<li><a href="<?php echo $this->_vars['index_url_yesterday']; ?>
"><?php echo $this->_confs['PLIGG_Visual_Yesterday']; ?>
</a></li>
							<?php endif; ?>
								
							<?php if ($this->_vars['setmeka'] == "week"): ?>
								<li id="active"><a id="current" href="<?php echo $this->_vars['index_url_week']; ?>
"><span class="active"><?php echo $this->_confs['PLIGG_Visual_This_Week']; ?>
</span></a></li>
							<?php else: ?>
								<li><a href="<?php echo $this->_vars['index_url_week']; ?>
"><?php echo $this->_confs['PLIGG_Visual_This_Week']; ?>
</a></li>
							<?php endif; ?>
							
							<?php if ($this->_vars['setmeka'] == "month"): ?>
								<li id="active"><a id="current" href="<?php echo $this->_vars['index_url_month']; ?>
"><span class="active"><?php echo $this->_confs['PLIGG_Visual_This_Month']; ?>
</span></a></li>
							<?php else: ?>
								<li><a href="<?php echo $this->_vars['index_url_month']; ?>
"><?php echo $this->_confs['PLIGG_Visual_This_Month']; ?>
</a></li>
							<?php endif; ?>
							
							<?php if ($this->_vars['setmeka'] == "year"): ?>
								<li id="active"><a id="current" href="<?php echo $this->_vars['index_url_year']; ?>
"><span class="active"><?php echo $this->_confs['PLIGG_Visual_This_Year']; ?>
</span></a></li>
							<?php else: ?>
								<li><a href="<?php echo $this->_vars['index_url_year']; ?>
"><?php echo $this->_confs['PLIGG_Visual_This_Year']; ?>
</a></li>
							<?php endif; ?>
							
							<?php if ($this->_vars['setmeka'] == "alltime"): ?>
								<li id="active"><a id="current" href="<?php echo $this->_vars['index_url_alltime']; ?>
"><span class="active"><?php echo $this->_confs['PLIGG_Visual_This_All']; ?>
</span></a></li>
							<?php else: ?>
								<li><a href="<?php echo $this->_vars['index_url_alltime']; ?>
"><?php echo $this->_confs['PLIGG_Visual_This_All']; ?>
</a></li>
							<?php endif; ?>
							
						<?php elseif ($this->_vars['pagename'] == "groups"): ?>
							
							<li <?php if ($this->_vars['sortby'] == "members"): ?>id="active"<?php endif; ?>>
								<?php if ($this->_vars['sortby'] == "members"): ?>
									<a id="current" href="<?php echo $this->_vars['group_url_members']; ?>
">
										<span class="active"><?php echo $this->_confs['PLIGG_Visual_Group_Sort_Members']; ?>
</span>
									</a>
								<?php else: ?>
									<a href="<?php echo $this->_vars['group_url_members']; ?>
"><?php echo $this->_confs['PLIGG_Visual_Group_Sort_Members']; ?>
</a>
								<?php endif; ?>
							</li>							
							<li <?php if ($this->_vars['sortby'] == "name"): ?>id="active"<?php endif; ?>>
								<?php if ($this->_vars['sortby'] == "name"): ?>
									<a id="current" href="<?php echo $this->_vars['group_url_name']; ?>
">
										<span class="active"><?php echo $this->_confs['PLIGG_Visual_Group_Sort_Name']; ?>
</span>
									</a>
								<?php else: ?>
									<a href="<?php echo $this->_vars['group_url_name']; ?>
"><?php echo $this->_confs['PLIGG_Visual_Group_Sort_Name']; ?>
</a>
								<?php endif; ?>
							</li>
							<li <?php if ($this->_vars['sortby'] == "newest"): ?>id="active"<?php endif; ?>>
								<?php if ($this->_vars['sortby'] == "newest"): ?>
									<a id="current" href="<?php echo $this->_vars['group_url_newest']; ?>
">
										<span class="active"><?php echo $this->_confs['PLIGG_Visual_Group_Sort_Newest']; ?>
</span>
									</a>
								<?php else: ?>
									<a href="<?php echo $this->_vars['group_url_newest']; ?>
"><?php echo $this->_confs['PLIGG_Visual_Group_Sort_Newest']; ?>
</a>
								<?php endif; ?>
							</li>
							<li <?php if ($this->_vars['sortby'] == "oldest"): ?>id="active"<?php endif; ?>>
								<?php if ($this->_vars['sortby'] == "oldest"): ?>
									<a id="current" href="<?php echo $this->_vars['group_url_oldest']; ?>
">
										<span class="active"><?php echo $this->_confs['PLIGG_Visual_Group_Sort_Oldest']; ?>
</span>
									</a>
								<?php else: ?>
									<a href="<?php echo $this->_vars['group_url_oldest']; ?>
"><?php echo $this->_confs['PLIGG_Visual_Group_Sort_Oldest']; ?>
</a>
								<?php endif; ?>
							</li>
							
						<?php elseif ($this->_vars['pagename'] == "live" || $this->_vars['pagename'] == "live_published" || $this->_vars['pagename'] == "live_unpublished" || $this->_vars['pagename'] == "live_comments"): ?>
						
							<li <?php if ($this->_vars['pagename'] == "live"): ?>id="active"<?php endif; ?>>
								<a href="<?php echo $this->_vars['URL_live']; ?>
">
									<span <?php if ($this->_vars['pagename'] == "live"): ?>class="active"<?php endif; ?>><?php echo $this->_confs['PLIGG_Visual_Breadcrumb_All']; ?>
</span>
								</a>
							</li>
							<li <?php if ($this->_vars['pagename'] == "live_published"): ?>id="active"<?php endif; ?>>
								<a href="<?php echo $this->_vars['URL_published']; ?>
">
									<span <?php if ($this->_vars['pagename'] == "live_published"): ?>class="active"<?php endif; ?>><?php echo $this->_confs['PLIGG_Visual_Breadcrumb_Published_Tab']; ?>
</span>
								</a>
							</li>
							<li <?php if ($this->_vars['pagename'] == "live_unpublished"): ?>id="active"<?php endif; ?>>
								<a href="<?php echo $this->_vars['URL_unpublished']; ?>
">
									<span <?php if ($this->_vars['pagename'] == "live_unpublished"): ?>class="active"<?php endif; ?>><?php echo $this->_confs['PLIGG_Visual_Breadcrumb_Unpublished_Tab']; ?>
</span>
								</a>
							</li>
							<li <?php if ($this->_vars['pagename'] == "live_comments"): ?>id="active"<?php endif; ?>>
								<a href="<?php echo $this->_vars['URL_comments']; ?>
">
									<span <?php if ($this->_vars['pagename'] == "live_comments"): ?>class="active"<?php endif; ?>><?php echo $this->_confs['PLIGG_Visual_Breadcrumb_Comments']; ?>
</span>
								</a>
							</li>
							
						<?php elseif ($this->_vars['pagename'] == "cloud"): ?>
							<?php if (isset($this->_sections['i'])) unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['start'] = (int)0;
$this->_sections['i']['loop'] = is_array($this->_vars['count_range_values']) ? count($this->_vars['count_range_values']) : max(0, (int)$this->_vars['count_range_values']);
$this->_sections['i']['step'] = ((int)1) == 0 ? 1 : (int)1;
$this->_sections['i']['show'] = true;
$this->_sections['i']['max'] = $this->_sections['i']['loop'];
if ($this->_sections['i']['start'] < 0)
	$this->_sections['i']['start'] = max($this->_sections['i']['step'] > 0 ? 0 : -1, $this->_sections['i']['loop'] + $this->_sections['i']['start']);
else
	$this->_sections['i']['start'] = min($this->_sections['i']['start'], $this->_sections['i']['step'] > 0 ? $this->_sections['i']['loop'] : $this->_sections['i']['loop']-1);
if ($this->_sections['i']['show']) {
	$this->_sections['i']['total'] = min(ceil(($this->_sections['i']['step'] > 0 ? $this->_sections['i']['loop'] - $this->_sections['i']['start'] : $this->_sections['i']['start']+1)/abs($this->_sections['i']['step'])), $this->_sections['i']['max']);
	if ($this->_sections['i']['total'] == 0)
		$this->_sections['i']['show'] = false;
} else
	$this->_sections['i']['total'] = 0;
if ($this->_sections['i']['show']):

		for ($this->_sections['i']['index'] = $this->_sections['i']['start'], $this->_sections['i']['iteration'] = 1;
			 $this->_sections['i']['iteration'] <= $this->_sections['i']['total'];
			 $this->_sections['i']['index'] += $this->_sections['i']['step'], $this->_sections['i']['iteration']++):
$this->_sections['i']['rownum'] = $this->_sections['i']['iteration'];
$this->_sections['i']['index_prev'] = $this->_sections['i']['index'] - $this->_sections['i']['step'];
$this->_sections['i']['index_next'] = $this->_sections['i']['index'] + $this->_sections['i']['step'];
$this->_sections['i']['first']	  = ($this->_sections['i']['iteration'] == 1);
$this->_sections['i']['last']	   = ($this->_sections['i']['iteration'] == $this->_sections['i']['total']);
?>
								<?php if ($this->_sections['i']['index'] == $this->_vars['current_range']): ?>
									<li id="active"><a href="#"><span class="active"><?php echo $this->_vars['range_names'][$this->_sections['i']['index']]; ?>
</span></a></li>
								<?php else: ?>	
									<li><a href="<?php echo $this->_vars['URL_tagcloud_range'].$this->_sections['i']['index']; ?>
"><span><?php echo $this->_vars['range_names'][$this->_sections['i']['index']]; ?>
</span></a></li>
								<?php endif; ?>
							<?php endfor; endif; ?>
						<?php endif; ?>
						
					</ul>
				</li>
			</ul>
		</div>
	<?php endif; ?>
</ul>
<!--/breadcrumb.tpl -->