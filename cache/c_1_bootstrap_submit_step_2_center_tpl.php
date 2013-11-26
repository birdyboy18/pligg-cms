<?php require_once('/Applications/MAMP/htdocs/pligg/plugins/modifier.repeat_count.php'); $this->register_modifier("repeat_count", "tpl_modifier_repeat_count");  require_once('/Applications/MAMP/htdocs/pligg/plugins/function.checkActionsTpl.php'); $this->register_function("checkActionsTpl", "tpl_function_checkActionsTpl");  /* V2.20 Template Lite, 8 March 2008. (c) Mark Dickenson, Jon Langevin. GNU LGPL. 2013-11-24 04:08:40 CET */ ?>


<!-- submit_step_2_center.tpl -->
<div class="submit_page">
	<legend><?php echo $this->_confs['PLIGG_Visual_Submit2_Details']; ?>
</legend>
	<?php echo tpl_function_checkActionsTpl(array('location' => "tpl_pligg_submit_step2_start"), $this);?>
	<form class="form-horizontal" action="<?php echo $this->_vars['URL_submit']; ?>
" method="post" name="thisform" id="thisform" enctype="multipart/form-data" onsubmit="return checkForm()">
		<div class="col-md-6 submit_step_2_left">
			<div class="control-group">
				<label for="input01" class="control-label"><?php echo $this->_confs['PLIGG_Visual_Submit2_Title']; ?>
</label>
				<div class="controls">
					<input type="text" id="title" class="form-control title col-md-4" tabindex="1" name="<?php echo $_SESSION['titlename']; ?>
" value="<?php if ($this->_vars['submit_title']):  echo $this->_vars['submit_title'];  else:  echo $this->_vars['submit_url_title'];  endif; ?>" size="54" maxlength="<?php echo $this->_vars['maxTitleLength']; ?>
" />
					<p class="help-inline"><?php echo $this->_confs['PLIGG_Visual_Submit2_TitleInstruct']; ?>
</p>
				</div>
			</div>
			<div class="control-group">
				<label for="input01" class="control-label"><?php echo $this->_confs['PLIGG_Visual_Submit2_Category']; ?>
</label>
				<div class="controls">
					<?php if ($this->_vars['Multiple_Categories']): ?>
						<?php if (isset($this->_sections['thecat'])) unset($this->_sections['thecat']);
$this->_sections['thecat']['name'] = 'thecat';
$this->_sections['thecat']['loop'] = is_array($this->_vars['submit_cat_array']) ? count($this->_vars['submit_cat_array']) : max(0, (int)$this->_vars['submit_cat_array']);
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
							<?php echo $this->_run_modifier($this->_vars['submit_cat_array'][$this->_sections['thecat']['index']]['spacercount'], 'repeat_count', 'plugin', 1, '&nbsp;&nbsp;&nbsp;&nbsp;'); ?>

								 <input type="checkbox" class="form-control" name="category[]" value="<?php echo $this->_vars['submit_cat_array'][$this->_sections['thecat']['index']]['id']; ?>
" <?php if ($this->_vars['submit_cat_array'][$this->_sections['thecat']['index']]['auto_id'] == $this->_vars['submit_category'] || in_array ( $this->_vars['cat_array'][$this->_sections['thecat']['index']]['auto_id'] , $this->_vars['submit_additional_cats'] )): ?>checked<?php endif; ?>> <?php echo $this->_vars['submit_cat_array'][$this->_sections['thecat']['index']]['name']; ?>
<br />							
						<?php endfor; endif; ?>
					<?php else: ?>
						<select id="category" class="form-control category" tabindex="2" name="category" onchange="if ($('#category option:selected').val()>0) $('#lp-category').text($('#category option:selected').text()); else $('#lp-category').text('');">
							<option value=""><?php echo $this->_confs['PLIGG_Visual_Submit2_CatInstructSelect']; ?>
</option>
							<?php if (isset($this->_sections['thecat'])) unset($this->_sections['thecat']);
$this->_sections['thecat']['name'] = 'thecat';
$this->_sections['thecat']['loop'] = is_array($this->_vars['submit_cat_array']) ? count($this->_vars['submit_cat_array']) : max(0, (int)$this->_vars['submit_cat_array']);
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
								<option value = "<?php echo $this->_vars['submit_cat_array'][$this->_sections['thecat']['index']]['auto_id']; ?>
" <?php if ($this->_vars['submit_cat_array'][$this->_sections['thecat']['index']]['auto_id'] == $this->_vars['submit_category'] || in_array ( $this->_vars['cat_array'][$this->_sections['thecat']['index']]['auto_id'] , $this->_vars['submit_additional_cats'] )): ?>selected<?php endif; ?>>
									<?php if ($this->_vars['submit_cat_array'][$this->_sections['thecat']['index']]['spacercount'] < $this->_vars['submit_lastspacer']):  echo $this->_run_modifier($this->_vars['submit_cat_array'][$this->_sections['thecat']['index']]['spacerdiff'], 'repeat_count', 'plugin', 1, '');  endif; ?>
									<?php if ($this->_vars['submit_cat_array'][$this->_sections['thecat']['index']]['spacercount'] > $this->_vars['submit_lastspacer']):  endif; ?>
									<?php echo $this->_run_modifier($this->_vars['submit_cat_array'][$this->_sections['thecat']['index']]['spacercount'], 'repeat_count', 'plugin', 1, '&nbsp;&nbsp;&nbsp;'); ?>

									<?php echo $this->_vars['submit_cat_array'][$this->_sections['thecat']['index']]['name']; ?>

									&nbsp;&nbsp;&nbsp;
									<?php $this->assign('submit_lastspacer', $this->_vars['submit_cat_array'][$this->_sections['thecat']['index']]['spacercount']); ?>
								</option>
							<?php endfor; endif; ?>
						</select>
					<?php endif; ?>
					<p class="help-inline"><?php echo $this->_confs['PLIGG_Visual_Submit2_CatInstruct']; ?>
</p>
				</div>
			</div>
			<?php if ($this->_vars['enable_group'] && $this->_vars['output'] != ''): ?>
				<div class="control-group">
					<label for="input01" class="control-label"><?php echo $this->_confs['PLIGG_Visual_Group_Submit_story']; ?>
</label>
					<div class="controls">
						<?php echo $this->_vars['output']; ?>

					</div>
				</div>
			<?php endif; ?>
			<?php echo tpl_function_checkActionsTpl(array('location' => "tpl_header_admin_main_comment_subscription"), $this);?>
			
			<?php if ($this->_vars['enable_tags']): ?>
				<div class="control-group">
					<label for="input01" class="control-label"><?php echo $this->_confs['PLIGG_Visual_Submit2_Tags']; ?>
</label>
					<div class="controls">
						<input tabindex="10" type="text" id="tags" class="form-control tags col-md-4" name="tags" data-mode="multiple" value="<?php echo $this->_vars['tags_words']; ?>
" maxlength="<?php echo $this->_vars['maxTagsLength']; ?>
" data-source="[&quot;.net&quot;,&quot;ajax&quot;,&quot;arts&quot;,&quot;apple&quot;,&quot;blog&quot;,&quot;books&quot;,&quot;business&quot;,&quot;celebrity&quot;,&quot;clothing&quot;,&quot;cms&quot;,&quot;coldfusion&quot;,&quot;computer&quot;,&quot;console&quot;,&quot;contest&quot;,&quot;css&quot;,&quot;deal&quot;,&quot;decorating&quot;,&quot;design&quot;,&quot;DIY&quot;,&quot;download&quot;,&quot;education&quot;,&quot;election&quot;,&quot;entertainment&quot;,&quot;enviroment&quot;,&quot;firefox&quot;,&quot;flash&quot;,&quot;food&quot;,&quot;forums&quot;,&quot;free software&quot;,&quot;funny&quot;,&quot;gadget&quot;,&quot;gallery&quot;,&quot;games&quot;,&quot;gifts&quot;,&quot;Google&quot;,&quot;hacking&quot;,&quot;handheld&quot;,&quot;hardware&quot;,&quot;health&quot;,&quot;howto&quot;,&quot;html&quot;,&quot;humor&quot;,&quot;images&quot;,&quot;international&quot;,&quot;internet&quot;,&quot;javascript&quot;,&quot;jobs&quot;,&quot;lifestyle&quot;,&quot;linux&quot;,&quot;mac&quot;,&quot;Microsoft&quot;,&quot;mobile&quot;,&quot;mods&quot;,&quot;money&quot;,&quot;movies&quot;,&quot;music&quot;,&quot;mysql&quot;,&quot;Nintendo&quot;,&quot;open source&quot;,&quot;pc&quot;,&quot;php&quot;,&quot;photoshop&quot;,&quot;Playstation&quot;,&quot;podcast&quot;,&quot;politics&quot;,&quot;portfolio&quot;,&quot;programming&quot;,&quot;rumor&quot;,&quot;science&quot;,&quot;security&quot;,&quot;SEO&quot;,&quot;shopping&quot;,&quot;software&quot;,&quot;space&quot;,&quot;sports&quot;,&quot;technology&quot;,&quot;television&quot;,&quot;templates&quot;,&quot;themes&quot;,&quot;tools&quot;,&quot;toys&quot;,&quot;travel&quot;,&quot;tutorial&quot;,&quot;typography&quot;,&quot;usability&quot;,&quot;video&quot;,&quot;video game&quot;,&quot;web&quot;,&quot;webdesign&quot;,&quot;Wii&quot;,&quot;work&quot;,&quot;Xbox&quot;,&quot;XHTML&quot;,&quot;Yahoo&quot;]" data-items="4" data-delimiter="," data-provide="typeahead">
						<p class="help-inline"><?php echo $this->_confs['PLIGG_Visual_Submit2_Tags_Example']; ?>
 <?php echo $this->_confs['PLIGG_Visual_Submit2_Tags_Inst2']; ?>
</p>
					</div>
				</div>
			<?php endif; ?>
			<?php echo tpl_function_checkActionsTpl(array('location' => "tpl_pligg_submit_step2_middle"), $this);?>
			<div class="control-group">
				<label for="input01" class="control-label"><?php echo $this->_confs['PLIGG_Visual_Submit2_Description']; ?>
</label>
				<div class="controls">
					<textarea name="<?php echo $_SESSION['bodyname']; ?>
" tabindex="15" rows="6" class="form-control bodytext col-md-4" id="bodytext" maxlength="<?php echo $this->_vars['maxStoryLength']; ?>
" WRAP="SOFT"><?php if ($this->_vars['submit_url_description']):  echo $this->_vars['submit_url_description'];  endif;  echo $this->_vars['submit_content']; ?>
</textarea>
					<br />
					<p class="help-inline"><?php echo $this->_confs['PLIGG_Visual_Submit2_DescInstruct']; ?>
</p>
				</div>
			</div>
			<?php if ($this->_vars['SubmitSummary_Allow_Edit'] == 1): ?>
				<div class="control-group">
					<label for="input01" class="control-label"><?php echo $this->_confs['PLIGG_Visual_Submit2_Summary']; ?>
</label>
					<div class="controls">
						
						<textarea name="summarytext" rows="5" maxlength="<?php echo $this->_vars['maxSummaryLength']; ?>
" id="summarytext" class="col-md-4" WRAP="SOFT"><?php echo $this->_vars['submit_summary']; ?>
</textarea>
						<br />
						<p class="help-inline">
							<?php echo $this->_confs['PLIGG_Visual_Submit2_SummaryInstruct']; ?>

							<?php echo $this->_confs['PLIGG_Visual_Submit2_SummaryLimit']; ?>

							<?php echo $this->_vars['StorySummary_ContentTruncate']; ?>

							<?php echo $this->_confs['PLIGG_Visual_Submit2_SummaryLimitCharacters']; ?>

						</p>
					</div>
				</div>
			<?php endif; ?>
			
			<?php echo tpl_function_checkActionsTpl(array('location' => "submit_step_2_pre_extrafields"), $this);?>
			<?php $_templatelite_tpl_vars = $this->_vars;
echo $this->_fetch_compile_include($this->_vars['tpl_extra_fields'].".tpl", array());
$this->_vars = $_templatelite_tpl_vars;
unset($_templatelite_tpl_vars);
 ?>
			<?php if (isset ( $this->_vars['register_step_1_extra'] )): ?>
				<?php echo $this->_vars['register_step_1_extra']; ?>

			<?php endif; ?>
			<?php echo tpl_function_checkActionsTpl(array('location' => "tpl_pligg_submit_step2_end"), $this);?>
			<div class="form-actions">            
				<input type="hidden" name="url" id="url" value="<?php echo $this->_vars['submit_url']; ?>
" />
				<input type="hidden" name="phase" value="2" />
				<input type="hidden" name="randkey" value="<?php echo $this->_vars['randkey']; ?>
" />
				<input type="hidden" name="id" value="<?php echo $this->_vars['submit_id']; ?>
" />
				<button class="btn btn-default" tabindex="30" ONCLICK="history.go(-1)">Cancel</button>
				<input class="btn btn-primary" tabindex="31" type="submit" value="<?php echo $this->_confs['PLIGG_Visual_Submit2_Continue']; ?>
" />
			</div>
		</div>
		
		<div class="col-md-6 submit_step_2_right" id="dockcontent">
			<?php echo tpl_function_checkActionsTpl(array('location' => "tpl_pligg_submit_preview_start"), $this);?>			
			<div class="stories" id="xnews-<?php echo $this->_vars['link_shakebox_index']; ?>
">
				<?php echo tpl_function_checkActionsTpl(array('location' => "tpl_pligg_story_start"), $this);?>
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
						<div class="votebox votebox-published">
							<div class="vote">
								<?php echo tpl_function_checkActionsTpl(array('location' => "tpl_pligg_story_votebox_start"), $this);?>
								<div class="votenumber">1</div>
								<div id="xvote-<?php echo $this->_vars['link_shakebox_index']; ?>
" class="votebutton">
									<!-- Already Voted -->
									<a class="btn btn-success"><i class="fa fa-white fa-thumbs-up"></i></a>
									<!-- Bury It -->
									<a class="btn btn-default linkVote_<?php echo $this->_vars['link_id']; ?>
"><i class="fa fa-thumbs-down"></i></a>
								</div><!-- /.votebutton -->
								<?php echo tpl_function_checkActionsTpl(array('location' => "tpl_pligg_story_votebox_end"), $this);?>
							</div><!-- /.vote -->
						</div><!-- /.votebox -->
					<?php endif; ?>
					<div class="title" id="title-<?php echo $this->_vars['link_shakebox_index']; ?>
">
						<h2>
							<?php echo tpl_function_checkActionsTpl(array('location' => "tpl_pligg_story_title_start"), $this);?>
							<span class="story_title">&nbsp;</span>
							<?php echo tpl_function_checkActionsTpl(array('location' => "tpl_pligg_story_title_end"), $this);?>
						</h2>
						<span class="subtext">
							<?php 
								global $main_smarty, $current_user;
								if ($current_user->user_id > 0 && $current_user->authenticated) {
									$login=$current_user->user_login;
								}
								// Read the users information from the database
								$user=new User();
								$user->username = $login;
								// Assign smarty variables to use in the template.
								$main_smarty->assign('link_submitter', $user->username);
								$main_smarty->assign('submitter_profile_url', getmyurl('user2', $login, 'profile'));
								$main_smarty->assign('Avatar_ImgSrc', get_avatar('small', $user->avatar_source, $user->username));
							 ?>
							
							<?php if ($this->_vars['UseAvatars'] != "0"): ?><span id="ls_avatar-<?php echo $this->_vars['link_shakebox_index']; ?>
"><img src="<?php echo $this->_vars['Avatar_ImgSrc']; ?>
" width="16px" height="16px" alt="" title="Avatar" /></span><?php else: ?><i class="fa fa-user"></i><?php endif; ?>
							<a href="<?php echo $this->_vars['submitter_profile_url']; ?>
"><?php echo $this->_vars['link_submitter']; ?>
</a> 
							<i class="fa fa-time"></i>
							Being Submitted Now
							<?php if ($this->_vars['url_short'] != "http://" && $this->_vars['url_short'] != "://"): ?>
								<i class="fa fa-globe"></i>
								<a href="<?php echo $this->_vars['url']; ?>
" <?php if ($this->_vars['open_in_new_window'] == true): ?> target="_blank"<?php endif; ?>  <?php if ($this->_vars['story_status'] != "published"): ?>rel="nofollow"<?php endif; ?>><?php echo $this->_vars['url_short']; ?>
</a>
							<?php endif; ?>
						</span>
					</div><!-- /.title -->
				</div> <!-- /.headline -->
				<div class="storycontent">
					<?php echo tpl_function_checkActionsTpl(array('location' => "tpl_link_summary_pre_story_content"), $this);?>
					<?php if ($this->_vars['pagename'] == "story"):  echo tpl_function_checkActionsTpl(array('location' => "tpl_pligg_story_body_start_full"), $this); else:  echo tpl_function_checkActionsTpl(array('location' => "tpl_pligg_story_body_start"), $this); endif; ?>
					<?php if ($this->_vars['viewtype'] != "short"): ?>
						<span class="news-body-text" id="ls_contents-<?php echo $this->_vars['link_shakebox_index']; ?>
">
							<span class="bodytext">&nbsp;</span>
							<div class="clearboth"></div> 
						</span>
						<?php echo tpl_function_checkActionsTpl(array('location' => "tpl_pligg_story_body_end"), $this);?>
					<?php endif; ?>
				</div><!-- /.storycontent -->
				<div class="storyfooter">
					<div class="story-tools-left">
						<?php echo tpl_function_checkActionsTpl(array('location' => "tpl_pligg_story_tools_start"), $this);?>
						<span id="ls_comments_url-<?php echo $this->_vars['link_shakebox_index']; ?>
">
							<i class="fa fa-comment"></i> <span id="linksummaryDiscuss"><a class="comments"><?php echo $this->_confs['PLIGG_MiscWords_Discuss']; ?>
</a>&nbsp;</span>
						</span> 
						<i class="fa fa-star"></i> <span id="linksummarySaveLink"><a id="add" class="favorite" ><?php echo $this->_confs['PLIGG_MiscWords_Save_Links_Save']; ?>
</a></span>&nbsp;
						<span id="stories-<?php echo $this->_vars['link_shakebox_index']; ?>
" class="label label-success" style="display:none;line-height:1em;"><?php echo $this->_confs['PLIGG_MiscWords_Save_Links_Success']; ?>
</span>
						<?php if ($this->_vars['enable_group'] == "true" && $this->_vars['user_logged_in']): ?>
							<i class="fa fa-group"></i> <span class="group_sharing"><a><?php echo $this->_confs['PLIGG_Visual_Group_Share']; ?>
</a></span>
						<?php endif; ?>
						<?php echo tpl_function_checkActionsTpl(array('location' => "tpl_pligg_story_tools_end"), $this);?>
					</div>
					<div class="story-tools-right">
						<i class="fa fa-folder"></i> <a><span class="category">&nbsp;</span></a>
						<?php if ($this->_vars['enable_tags']): ?>
							<i class="fa fa-tag"></i> <a><span class="tags"></span></a>
						<?php endif; ?>	
					 </div><!-- /.story-tools-right -->
					 <div style="clear:both;"></div>
				</div><!-- /.storyfooter -->
				<?php echo tpl_function_checkActionsTpl(array('location' => "tpl_link_summary_end"), $this);?>
			</div><!-- /.stories -->
			<?php echo tpl_function_checkActionsTpl(array('location' => "tpl_pligg_story_end"), $this);?>
		</div>
		
	</form>
	<?php echo tpl_function_checkActionsTpl(array('location' => "tpl_pligg_submit_step2_after_form"), $this);?>
</div>
<?php echo '
	<script type="text/javascript">
		var dock0=new dockit("dockcontent", 0);
	</script>
'; ?>

<!--/submit_step_2_center.tpl -->