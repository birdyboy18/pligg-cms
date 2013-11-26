<?php require_once('/Applications/MAMP/htdocs/pligg/plugins/function.checkActionsTpl.php'); $this->register_function("checkActionsTpl", "tpl_function_checkActionsTpl");  /* V2.20 Template Lite, 8 March 2008. (c) Mark Dickenson, Jon Langevin. GNU LGPL. 2013-11-24 00:29:02 CET */ ?>


<!-- link_summary.tpl -->
<?php echo tpl_function_checkActionsTpl(array('location' => "tpl_link_summary_start"), $this);?>
<div class="stories col-md-4" id="xnews-<?php echo $this->_vars['link_shakebox_index']; ?>
" >
	<?php if ($this->_vars['isadmin'] || $this->_vars['user_logged_in'] == $this->_vars['link_submitter']): ?>
		<div class="btn-group pull-right admin-links">
			<a class="btn btn-default dropdown-toggle" data-toggle="dropdown" href="#">
			  <i class="fa fa-cog"></i>
			  <span class="caret"></span>
			</a>
			<ul class="dropdown-menu">
				<?php if ($this->_vars['user_logged_in'] == $this->_vars['link_submitter'] || $this->_vars['isadmin']): ?><li><a href="<?php echo $this->_vars['story_edit_url']; ?>
"><i class="fa fa-pencil"></i> <?php echo $this->_confs['PLIGG_Visual_LS_Admin_Edit']; ?>
</a></li><?php endif; ?>
				<?php if ($this->_vars['isadmin']): ?>
					<li><a href="<?php echo $this->_vars['story_admin_url']; ?>
"><i class="fa fa-arrows-v"></i> <?php echo $this->_confs['PLIGG_Visual_LS_Admin_Status']; ?>
</a></li>
					<li><a href="<?php echo $this->_vars['my_base_url'];  echo $this->_vars['my_pligg_base']; ?>
/admin/admin_users.php?mode=view&user=<?php echo $this->_vars['link_submitter']; ?>
"><i class="fa fa-user"></i> <?php echo $this->_confs['PLIGG_Visual_Comment_Manage_User']; ?>
 <?php echo $this->_vars['link_submitter']; ?>
</a></li>
				<?php endif; ?>
				<?php echo tpl_function_checkActionsTpl(array('location' => "tpl_link_summary_admin_links"), $this);?>
				<?php if ($this->_vars['link_group_id'] != 0): ?><li><a target="story_status" href="javascript://" onclick="show_hide_user_links(document.getElementById('stories_status-<?php echo $this->_vars['link_shakebox_index']; ?>
'));"><i class="fa fa-group"></i> <?php echo $this->_confs['PLIGG_Visual_Group_Story_Status']; ?>
</a></li><?php endif; ?>
				<?php if ($this->_vars['isadmin']): ?>
					<li><a href="<?php echo $this->_vars['my_pligg_base']; ?>
/admin/admin_users.php?mode=killspam&user=<?php echo $this->_vars['link_submitter']; ?>
"><i class="fa fa-ban"></i> <?php echo $this->_confs['PLIGG_Visual_View_User_Killspam']; ?>
</a></li>
					<li><a href="<?php echo $this->_vars['my_pligg_base']; ?>
/delete.php?link_id=<?php echo $this->_vars['link_id']; ?>
"><i class="fa fa-trash-o"></i> <?php echo $this->_confs['PLIGG_Visual_AdminPanel_Discard']; ?>
</a></li>
				<?php endif; ?>
			</ul>
			
		</div>		
	<?php endif; ?>
	<?php echo tpl_function_checkActionsTpl(array('location' => "tpl_pligg_story_start"), $this);?>
	<!--<div class="source">
		<?php if ($this->_vars['url_short'] != "http://" && $this->_vars['url_short'] != "://"): ?>
					<i class="fa fa-globe"></i>
					<a href="<?php echo $this->_vars['url']; ?>
" <?php if ($this->_vars['open_in_new_window'] == true): ?> target="_blank"<?php endif; ?>  <?php if ($this->_vars['story_status'] != "published"): ?>rel="nofollow"<?php endif; ?>><?php echo $this->_vars['url_short']; ?>
</a>
				<?php endif; ?>
	</div> -->
	<div class="meta">
		<div class="category">
				<a href="<?php echo $this->_vars['category_url']; ?>
"><?php echo $this->_vars['link_category']; ?>
</a>
				<?php if ($this->_vars['link_additional_cats']): ?>
					<?php if (count((array)$this->_vars['link_additional_cats'])):  foreach ((array)$this->_vars['link_additional_cats'] as $this->_vars['caturl'] => $this->_vars['catname']): ?>
						<a href="<?php echo $this->_vars['caturl']; ?>
"><?php echo $this->_vars['catname']; ?>
</a>
					<?php endforeach; endif; ?>
				<?php endif; ?>
		</div>
	</div>
	<div class="headline">
		<?php if ($this->_vars['Voting_Method'] == 2): ?>
			<h4 id="ls_title-<?php echo $this->_vars['link_shakebox_index']; ?>
">
				<ul class='star-rating<?php echo $this->_vars['star_class']; ?>
' id="xvotes-<?php echo $this->_vars['link_shakebox_index']; ?>
">
					<li class="current-rating" style="width: <?php echo $this->_vars['link_rating_width']; ?>
px;" id="xvote-<?php echo $this->_vars['link_shakebox_index']; ?>
"></li>
					<span id="mnmc-<?php echo $this->_vars['link_shakebox_index']; ?>
" <?php if ($this->_vars['link_shakebox_currentuser_votes'] != 0): ?>style="display: none;"<?php endif; ?>>
						<li><a href="javascript:<?php echo $this->_vars['link_shakebox_javascript_vote_1star']; ?>
" class='one-star'>1</a></li>
						<li><a href="javascript:<?php echo $this->_vars['link_shakebox_javascript_vote_2star']; ?>
" class='two-stars'>2</a></li>
						<li><a href="javascript:<?php echo $this->_vars['link_shakebox_javascript_vote_3star']; ?>
" class='three-stars'>3</a></li>
						<li><a href="javascript:<?php echo $this->_vars['link_shakebox_javascript_vote_4star']; ?>
" class='four-stars'>4</a></li>
						<li><a href="javascript:<?php echo $this->_vars['link_shakebox_javascript_vote_5star']; ?>
" class='five-stars'>5</a></li>
					</span>
					<span id="mnmd-<?php echo $this->_vars['link_shakebox_index']; ?>
" <?php if ($this->_vars['link_shakebox_currentuser_votes'] == 0): ?>style="display: none;"<?php endif; ?>>
						<li class='one-star-noh'>1</li>
						<li class='two-stars-noh'>2</li>
						<li class='three-stars-noh'>3</li>
						<li class='four-stars-noh'>4</li>
						<li class='five-stars-noh'>5</li>
					</span>
				</ul>
			</h4>
		<?php else: ?>
		  <?php if ($this->_vars['story_status'] == "published"): ?>
			<div class="votebox votebox-published">
		  <?php else: ?>
			<div class="votebox votebox-new">
		  <?php endif; ?>			
				<div class="vote">
					<?php echo tpl_function_checkActionsTpl(array('location' => "tpl_pligg_story_votebox_start"), $this);?>
					<div class="votenumber">
						<?php echo $this->_vars['link_shakebox_votes']; ?>

					</div>
					<div id="xvote-<?php echo $this->_vars['link_shakebox_index']; ?>
" class="votebutton">
						<?php if ($this->_vars['anonymous_vote'] == "false" && $this->_vars['user_logged_in'] == ""): ?>
							<a data-toggle="modal" href="#loginModal" class="btn <?php if ($this->_vars['link_shakebox_currentuser_votes'] == 1): ?>btn-success<?php else: ?>btn-default<?php endif; ?>"><i class="fa <?php if ($this->_vars['link_shakebox_currentuser_votes'] == 1): ?>fa-white <?php endif; ?>fa-thumbs-up"></i></a>
							<a data-toggle="modal" href="#loginModal" class="btn <?php if ($this->_vars['link_shakebox_currentuser_reports'] == 1): ?>btn-danger<?php else: ?>btn-default<?php endif; ?>"><i class="fa <?php if ($this->_vars['link_shakebox_currentuser_reports'] == 1): ?>fa-white <?php endif; ?>fa-thumbs-down"></i></a>
                        
                        <?php else: ?>
							<?php if ($this->_vars['link_shakebox_currentuser_votes'] == 0): ?>
								<!-- Vote For It -->
								<a class="btn btn-default linkVote_<?php echo $this->_vars['link_id']; ?>
" <?php if ($this->_vars['vote_from_this_ip'] != 0 && $this->_vars['user_logged_in'] == ""): ?> data-toggle="modal" href="#LoginModal" <?php else: ?> href="javascript:<?php echo $this->_vars['link_shakebox_javascript_vote']; ?>
" <?php endif; ?> title="<?php echo $this->_vars['title_short']; ?>
" ><i class="fa fa-thumbs-up"></i></a>
							<?php elseif ($this->_vars['link_shakebox_currentuser_votes'] == 1): ?>
								<!-- Already Voted -->
								<a class="btn btn-success linkVote_<?php echo $this->_vars['link_id']; ?>
" href="javascript:<?php echo $this->_vars['link_shakebox_javascript_unvote']; ?>
" title="<?php echo $this->_vars['title_short']; ?>
"><i class="fa fa-white fa-thumbs-up"></i></a>
							<?php endif; ?>
							<?php if ($this->_vars['link_shakebox_currentuser_reports'] == 0): ?>
								<!-- Bury It -->
								<a class="btn btn-default linkVote_<?php echo $this->_vars['link_id']; ?>
" <?php if ($this->_vars['report_from_this_ip'] != 0 && $this->_vars['user_logged_in'] == ""): ?> data-toggle="modal" href="#LoginModal" <?php else: ?> href="javascript:<?php echo $this->_vars['link_shakebox_javascript_report']; ?>
" <?php endif; ?> title="<?php echo $this->_vars['title_short']; ?>
" ><i class="fa fa-thumbs-down"></i></a>
							<?php elseif ($this->_vars['link_shakebox_currentuser_reports'] == 1): ?>
								<!-- Already Buried -->
								<a class="btn btn-danger linkVote_<?php echo $this->_vars['link_id']; ?>
"   href="javascript:<?php echo $this->_vars['link_shakebox_javascript_unbury']; ?>
" title="<?php echo $this->_vars['title_short']; ?>
" }><i class="fa fa-white fa-thumbs-down"></i></a>
							<?php endif; ?>
						<?php endif; ?>
						<!-- Votes: <?php echo $this->_vars['link_shakebox_currentuser_votes']; ?>
 Buries: <?php echo $this->_vars['link_shakebox_currentuser_reports']; ?>
 -->
					</div><!-- /.votebutton -->
				<?php echo tpl_function_checkActionsTpl(array('location' => "tpl_pligg_story_votebox_end"), $this);?>
				</div><!-- /.vote -->
			</div><!-- /.votebox -->
		<?php endif; ?>
		<div class="title" id="title-<?php echo $this->_vars['link_shakebox_index']; ?>
">
			<h2>
				<?php echo tpl_function_checkActionsTpl(array('location' => "tpl_pligg_story_title_start"), $this);?>
				<?php if ($this->_vars['use_title_as_link'] == true): ?>
					<?php if ($this->_vars['url_short'] != "http://" && $this->_vars['url_short'] != "://"): ?>
						<a href="<?php echo $this->_vars['url']; ?>
" <?php if ($this->_vars['open_in_new_window'] == true): ?> target="_blank"<?php endif; ?> <?php if ($this->_vars['story_status'] != "published"): ?>rel="nofollow"<?php endif; ?>><?php echo $this->_vars['title_short']; ?>
</a>
					<?php else: ?>
						<a href="<?php echo $this->_vars['story_url']; ?>
" <?php if ($this->_vars['open_in_new_window'] == true): ?> target="_blank"<?php endif; ?>><?php echo $this->_vars['title_short']; ?>
</a>
					<?php endif; ?>
				 <?php else: ?>
					<?php if ($this->_vars['pagename'] == "story" && $this->_vars['url_short'] != "http://" && $this->_vars['url_short'] != "://"): ?>
						<a href="<?php echo $this->_vars['url']; ?>
" <?php if ($this->_vars['open_in_new_window'] == true): ?> target="_blank"<?php endif; ?> <?php if ($this->_vars['story_status'] != "published"): ?>rel="nofollow"<?php endif; ?>><?php echo $this->_vars['title_short']; ?>
</a>
					<?php else: ?> 
					  <a href="<?php echo $this->_vars['story_url']; ?>
"><?php echo $this->_vars['title_short']; ?>
</a>
					<?php endif; ?>
				<?php endif; ?>
				<?php echo tpl_function_checkActionsTpl(array('location' => "tpl_pligg_story_title_end"), $this);?>
			</h2>
			<span class="tags clearfix">
				<!--<?php if ($this->_vars['UseAvatars'] != "0"): ?><span id="ls_avatar-<?php echo $this->_vars['link_shakebox_index']; ?>
"><img src="<?php echo $this->_vars['Avatar_ImgSrcs']; ?>
" width="16px" height="16px" alt="" title="Avatar" /></span><?php else: ?><i class="fa fa-user"></i><?php endif; ?>
				<a href="<?php echo $this->_vars['submitter_profile_url']; ?>
"><?php echo $this->_vars['link_submitter'];  if ($this->_vars['submitter_rank'] != ''): ?> (#<?php echo $this->_vars['submitter_rank']; ?>
)<?php endif; ?></a>
				<i class="fa fa-time"></i>
				<?php echo $this->_vars['link_submit_timeago']; ?>
 <?php echo $this->_confs['PLIGG_Visual_Comment_Ago']; ?>
 -->
				
				<?php if ($this->_vars['enable_tags']): ?>
					<?php if ($this->_vars['tags']): ?>
						<?php if (isset($this->_sections['thistag'])) unset($this->_sections['thistag']);
$this->_sections['thistag']['name'] = 'thistag';
$this->_sections['thistag']['loop'] = is_array($this->_vars['tag_array']) ? count($this->_vars['tag_array']) : max(0, (int)$this->_vars['tag_array']);
$this->_sections['thistag']['show'] = true;
$this->_sections['thistag']['max'] = $this->_sections['thistag']['loop'];
$this->_sections['thistag']['step'] = 1;
$this->_sections['thistag']['start'] = $this->_sections['thistag']['step'] > 0 ? 0 : $this->_sections['thistag']['loop']-1;
if ($this->_sections['thistag']['show']) {
	$this->_sections['thistag']['total'] = $this->_sections['thistag']['loop'];
	if ($this->_sections['thistag']['total'] == 0)
		$this->_sections['thistag']['show'] = false;
} else
	$this->_sections['thistag']['total'] = 0;
if ($this->_sections['thistag']['show']):

		for ($this->_sections['thistag']['index'] = $this->_sections['thistag']['start'], $this->_sections['thistag']['iteration'] = 1;
			 $this->_sections['thistag']['iteration'] <= $this->_sections['thistag']['total'];
			 $this->_sections['thistag']['index'] += $this->_sections['thistag']['step'], $this->_sections['thistag']['iteration']++):
$this->_sections['thistag']['rownum'] = $this->_sections['thistag']['iteration'];
$this->_sections['thistag']['index_prev'] = $this->_sections['thistag']['index'] - $this->_sections['thistag']['step'];
$this->_sections['thistag']['index_next'] = $this->_sections['thistag']['index'] + $this->_sections['thistag']['step'];
$this->_sections['thistag']['first']	  = ($this->_sections['thistag']['iteration'] == 1);
$this->_sections['thistag']['last']	   = ($this->_sections['thistag']['iteration'] == $this->_sections['thistag']['total']);
?>
							<?php if ($this->_vars['tag_array'][$this->_sections['thistag']['index']] != ''): ?>
								<a href="<?php echo $this->_vars['tags_url_array'][$this->_sections['thistag']['index']]; ?>
"><?php echo $this->_vars['tag_array'][$this->_sections['thistag']['index']]; ?>
</a>
							<?php endif; ?>
						<?php endfor; endif; ?>
					<?php endif; ?>
				<?php endif; ?>
			</span>
		</div><!-- /.title -->
	</div> <!-- /.headline -->
	<div class="storycontent">
		<?php echo tpl_function_checkActionsTpl(array('location' => "tpl_link_summary_pre_story_content"), $this);?>
		<?php if ($this->_vars['pagename'] == "story"):  echo tpl_function_checkActionsTpl(array('location' => "tpl_pligg_story_body_start_full"), $this); else:  echo tpl_function_checkActionsTpl(array('location' => "tpl_pligg_story_body_start"), $this); endif; ?>
		<?php if ($this->_vars['viewtype'] != "short"): ?>
			<div class="news-body-text" id="ls_contents-<?php echo $this->_vars['link_shakebox_index']; ?>
">
				<p>
				<?php if ($this->_vars['show_content'] != 'FALSE'): ?>
					<?php if ($this->_vars['pagename'] == "story"): ?>
						
						<?php echo $this->_run_modifier($this->_vars['story_content'], 'nl2br', 'PHP', 1); ?>

					<?php else: ?>
						
						<?php echo $this->_run_modifier($this->_vars['story_content'], 'nl2br', 'PHP', 1); ?>

					<?php endif; ?>
				<?php endif; ?>
				
				
				<div class="clearboth"></div> 
			</div>
			<?php if ($this->_vars['pagename'] == "story"):  echo tpl_function_checkActionsTpl(array('location' => "tpl_pligg_story_body_end_full"), $this); else:  echo tpl_function_checkActionsTpl(array('location' => "tpl_pligg_story_body_end"), $this); endif; ?>
		<?php endif; ?>
	</div><!-- /.storycontent -->
	<div class="storyfooter">
		<div class="story-tools-left">
			<?php echo tpl_function_checkActionsTpl(array('location' => "tpl_pligg_story_tools_start"), $this);?>
			<span id="ls_comments_url-<?php echo $this->_vars['link_shakebox_index']; ?>
" class="footer-action">
				<?php if ($this->_vars['story_comment_count'] == 0): ?>
					<i class="fa fa-comment"></i> <span id="linksummaryDiscuss"><a href="<?php echo $this->_vars['story_url']; ?>
#discuss" class="comments"><?php echo $this->_confs['PLIGG_MiscWords_Discuss']; ?>
</a>&nbsp;</span>
				<?php endif; ?>
				<?php if ($this->_vars['story_comment_count'] == 1): ?>
					<i class="fa fa-comment"></i> <span id="linksummaryHasComment"><a href="<?php echo $this->_vars['story_url']; ?>
#comments" class="comments2"><?php echo $this->_vars['story_comment_count']; ?>
 <?php echo $this->_confs['PLIGG_MiscWords_Comment']; ?>
</a>&nbsp;</span>
				<?php endif; ?>
				<?php if ($this->_vars['story_comment_count'] > 1): ?>
					<i class="fa fa-comment"></i> <span id="linksummaryHasComment"><a href="<?php echo $this->_vars['story_url']; ?>
#comments" class="comments2"><?php echo $this->_vars['story_comment_count']; ?>
 <?php echo $this->_confs['PLIGG_MiscWords_Comments']; ?>
</a>&nbsp;</span>
				<?php endif; ?>
			</span> 
			<?php if ($this->_vars['user_logged_in']): ?>  
				<iframe height="0px;" width="0px;" frameborder="0" name="add_stories"></iframe>
				<?php if ($this->_vars['link_mine'] == 0): ?>
					<span class="footer-action">
						<i class="fa fa-star"></i> <span id="linksummarySaveLink">
						<a id="add" linkid="<?php echo $this->_vars['link_id']; ?>
" title="<?php echo $this->_vars['title_short']; ?>
" class="favorite" ><?php echo $this->_confs['PLIGG_MiscWords_Save_Links_Save']; ?>
</a>
					</span>
				<?php else: ?>
				<span class="footer-action">
					<i class="fa fa-star-o"></i> <span id="linksummaryRemoveLink">
					<a id="remove" linkid="<?php echo $this->_vars['link_id']; ?>
" title="<?php echo $this->_vars['title_short']; ?>
" class="favorite" ><?php echo $this->_confs['PLIGG_MiscWords_Save_Links_Remove']; ?>
</a>
				</span>
				<?php endif; ?>
				</span>&nbsp;
				<span id="stories-<?php echo $this->_vars['link_shakebox_index']; ?>
" class="label label-success" style="display:none;line-height:1em;"><?php echo $this->_confs['PLIGG_MiscWords_Save_Links_Success']; ?>
</span>
			<?php endif; ?>
			<?php if ($this->_vars['link_shakebox_currentuser_votes'] == 1 && $this->_vars['link_shakebox_currentuser_reports'] == 1): ?>
				<i class="fa fa-minus-sign"></i> 
				<span id="linksummaryUnvote"><a href="javascript:<?php echo $this->_vars['link_shakebox_javascript_unvote']; ?>
"><?php echo $this->_confs['PLIGG_Visual_Unvote_For_It']; ?>
</a></span>&nbsp; 
			<?php endif; ?>
			<?php if ($this->_vars['enable_group'] == "true" && $this->_vars['user_logged_in']): ?>
				<span class="group-tool-wrapper footer-action">
					<i class="fa fa-group"></i> 
					<span class="group_sharing"><a href="javascript://" onclick="<?php if ($this->_vars['get_group_membered']): ?>var replydisplay=document.getElementById('group_share-<?php echo $this->_vars['link_shakebox_index']; ?>
').style.display ? '' : 'none';document.getElementById('group_share-<?php echo $this->_vars['link_shakebox_index']; ?>
').style.display = replydisplay;<?php else: ?>alert('<?php echo $this->_confs['PLIGG_Visual_No_Groups']; ?>
');<?php endif; ?>"><?php echo $this->_confs['PLIGG_Visual_Group_Share']; ?>
</a></span>
					<span id = "group_share-<?php echo $this->_vars['link_shakebox_index']; ?>
" style="display:none;">
						<div class="group-share-popup"><?php echo $this->_vars['get_group_membered']; ?>
</div>
					</span>
				</span>
			<?php endif; ?>
			<?php echo tpl_function_checkActionsTpl(array('location' => "tpl_pligg_story_tools_end"), $this);?>
			<iframe height="0" width="0" frameborder="0" name="story_status" class="invisible"></iframe>
			<span id="stories_status-<?php echo $this->_vars['link_shakebox_index']; ?>
" style="display:none;">
				<a target="story_status" href="<?php echo $this->_vars['group_story_links_publish']; ?>
" onclick="show_hide_user_links(document.getElementById('story_status_success-<?php echo $this->_vars['link_shakebox_index']; ?>
'))"><?php echo $this->_confs['PLIGG_Visual_AdminPanel_Published']; ?>
</a>
				<a target="story_status" href="<?php echo $this->_vars['group_story_links_new']; ?>
" onclick="show_hide_user_links(document.getElementById('story_status_success-<?php echo $this->_vars['link_shakebox_index']; ?>
'))"><?php echo $this->_confs['PLIGG_Visual_AdminPanel_New']; ?>
</a>
				<a target="story_status" href="<?php echo $this->_vars['group_story_links_discard']; ?>
" onclick="show_hide_user_links(document.getElementById('story_status_success-<?php echo $this->_vars['link_shakebox_index']; ?>
'))"><?php echo $this->_confs['PLIGG_Visual_AdminPanel_Discard']; ?>
</a>
			</span>
			<span id="story_status_success-<?php echo $this->_vars['link_shakebox_index']; ?>
" class="label label-success" style="display:none;">
				<?php echo $this->_confs['PLIGG_MiscWords_Save_Links_Success']; ?>

			</span>
		</div>
		<div style="clear:both;"></div>
	</div><!-- /.storyfooter -->
	<?php echo tpl_function_checkActionsTpl(array('location' => "tpl_link_summary_end"), $this);?>
</div><!-- /.stories -->
<?php echo tpl_function_checkActionsTpl(array('location' => "tpl_pligg_story_end"), $this);?>
<!--/link_summary.tpl -->
