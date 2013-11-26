<?php require_once('/Applications/MAMP/htdocs/pligg/plugins/function.checkActionsTpl.php'); $this->register_function("checkActionsTpl", "tpl_function_checkActionsTpl");  /* V2.20 Template Lite, 8 March 2008. (c) Mark Dickenson, Jon Langevin. GNU LGPL. 2013-11-24 01:40:07 CET */ ?>


<!-- story_center.tpl -->
<?php echo $this->_vars['the_story']; ?>

<ul class="nav nav-tabs" id="storytabs">
	<li class="active"><a data-toggle="tab" href="#comments"><i class="fa fa-comments"></i> <?php echo $this->_confs['PLIGG_Visual_Story_Comments']; ?>
</a></li>
	<?php if (count ( $this->_vars['voter'] ) != 0): ?><li><a data-toggle="tab" href="#who_voted"><i class="fa fa-thumbs-up"></i> <?php echo $this->_confs['PLIGG_Visual_Story_Who_Upvoted']; ?>
</a></li><?php endif; ?>
	<?php if (count ( $this->_vars['downvoter'] ) != 0): ?><li><a data-toggle="tab" href="#who_downvoted"><i class="fa fa-thumbs-down"></i> <?php echo $this->_confs['PLIGG_Visual_Story_Who_Downvoted']; ?>
</a></li><?php endif; ?>
	<?php if (count ( $this->_vars['related_story'] ) != 0): ?><li><a data-toggle="tab" href="#related"><i class="fa fa-tag"></i> <?php echo $this->_confs['PLIGG_Visual_Story_RelatedStory']; ?>
</a></li><?php endif; ?>
	<?php echo tpl_function_checkActionsTpl(array('location' => "tpl_pligg_story_tab_end"), $this);?>
</ul>
<script language="javascript">
var story_link="<?php echo $this->_vars['story_url']; ?>
";
<?php echo '

	$(function () {
		$(\'#storytabs a[href="#who_voted"]\').tab(\'show\');
		$(\'#storytabs a[href="#who_downvoted"]\').tab(\'show\');
		$(\'#storytabs a[href="#related"]\').tab(\'show\');
		$(\'#storytabs a[href="#comments"]\').tab(\'show\');
	});

'; ?>


<?php if ($this->_vars['urlmethod'] == 2): ?>
    <?php echo '
        function show_comments(id){
			document.location.href=story_link+\'/\'+id+\'#comment-\'+id;
        }
        function show_replay_comment_form(id){
           document.location.href=story_link+\'/reply/\'+id+\'#comment-reply-\'+id;
        }
    '; ?>

<?php else: ?>
    <?php echo '
        function show_comments(id){
			document.location.href=story_link+\'&comment_id=\'+id+\'#comment-\'+id;
        }
        function show_replay_comment_form(id){
           document.location.href=story_link+\'&comment_id=\'+id+\'&reply=1#comment-reply-\'+id;
        }
    '; ?>

<?php endif; ?>
</script>

<div id="tabbed" class="tab-content">

	<div class="tab-pane fade active in" id="comments" >
		<?php echo tpl_function_checkActionsTpl(array('location' => "tpl_pligg_story_comments_start"), $this);?>
		<h3><?php echo $this->_confs['PLIGG_Visual_Story_Comments']; ?>
</h3>
		<a name="comments" href="#comments"></a>
		<ol class="media-list comment-list">
			<?php echo tpl_function_checkActionsTpl(array('location' => "tpl_pligg_story_comments_individual_start"), $this);?>
				<?php echo $this->_vars['the_comments']; ?>

			<?php echo tpl_function_checkActionsTpl(array('location' => "tpl_pligg_story_comments_individual_end"), $this);?>
			<?php if ($this->_vars['user_authenticated'] != ""): ?>
				<?php $_templatelite_tpl_vars = $this->_vars;
echo $this->_fetch_compile_include($this->_vars['the_template']."/comment_form.tpl", array());
$this->_vars = $_templatelite_tpl_vars;
unset($_templatelite_tpl_vars);
 ?>
			<?php else: ?>
				<?php echo tpl_function_checkActionsTpl(array('location' => "anonymous_comment_form_start"), $this);?>
				<div align="center" class="login_to_comment">
					<br />
					<h3><a href="<?php echo $this->_vars['login_url']; ?>
"><?php echo $this->_confs['PLIGG_Visual_Story_LoginToComment']; ?>
</a> <?php echo $this->_confs['PLIGG_Visual_Story_Register']; ?>
 <a href="<?php echo $this->_vars['register_url']; ?>
"><?php echo $this->_confs['PLIGG_Visual_Story_RegisterHere']; ?>
</a>.</h3>
				</div>
				<?php echo tpl_function_checkActionsTpl(array('location' => "anonymous_comment_form_end"), $this);?>
			<?php endif; ?>
		</ol>
		<?php echo tpl_function_checkActionsTpl(array('location' => "tpl_pligg_story_comments_end"), $this);?>
	</div>
	
	<?php if (count ( $this->_vars['voter'] ) != 0): ?>
		<div class="tab-pane fade" id="who_voted">
			<h3><?php echo $this->_confs['PLIGG_Visual_Story_WhoVoted']; ?>
</h3>
			<?php echo tpl_function_checkActionsTpl(array('location' => "tpl_pligg_story_who_voted_start"), $this);?>
			<div class="whovotedwrapper whoupvoted">
				<ul>			
					<?php if (isset($this->_sections['upvote'])) unset($this->_sections['upvote']);
$this->_sections['upvote']['name'] = 'upvote';
$this->_sections['upvote']['loop'] = is_array($this->_vars['voter']) ? count($this->_vars['voter']) : max(0, (int)$this->_vars['voter']);
$this->_sections['upvote']['show'] = true;
$this->_sections['upvote']['max'] = $this->_sections['upvote']['loop'];
$this->_sections['upvote']['step'] = 1;
$this->_sections['upvote']['start'] = $this->_sections['upvote']['step'] > 0 ? 0 : $this->_sections['upvote']['loop']-1;
if ($this->_sections['upvote']['show']) {
	$this->_sections['upvote']['total'] = $this->_sections['upvote']['loop'];
	if ($this->_sections['upvote']['total'] == 0)
		$this->_sections['upvote']['show'] = false;
} else
	$this->_sections['upvote']['total'] = 0;
if ($this->_sections['upvote']['show']):

		for ($this->_sections['upvote']['index'] = $this->_sections['upvote']['start'], $this->_sections['upvote']['iteration'] = 1;
			 $this->_sections['upvote']['iteration'] <= $this->_sections['upvote']['total'];
			 $this->_sections['upvote']['index'] += $this->_sections['upvote']['step'], $this->_sections['upvote']['iteration']++):
$this->_sections['upvote']['rownum'] = $this->_sections['upvote']['iteration'];
$this->_sections['upvote']['index_prev'] = $this->_sections['upvote']['index'] - $this->_sections['upvote']['step'];
$this->_sections['upvote']['index_next'] = $this->_sections['upvote']['index'] + $this->_sections['upvote']['step'];
$this->_sections['upvote']['first']	  = ($this->_sections['upvote']['iteration'] == 1);
$this->_sections['upvote']['last']	   = ($this->_sections['upvote']['iteration'] == $this->_sections['upvote']['total']);
?>
						<li>
							<?php if ($this->_vars['UseAvatars'] != "0"): ?>
								<a href="<?php echo $this->_vars['URL_user'].$this->_vars['voter'][$this->_sections['upvote']['index']]['user_login']; ?>
" rel="tooltip" title="<?php echo $this->_vars['voter'][$this->_sections['upvote']['index']]['user_login']; ?>
" class="avatar-tooltip"><img src="<?php echo $this->_vars['voter'][$this->_sections['upvote']['index']]['Avatar_ImgSrc']; ?>
" alt="" align="top" title="" /></a>
							<?php else: ?>
								<a href="<?php echo $this->_vars['URL_user'].$this->_vars['voter'][$this->_sections['upvote']['index']]['user_login']; ?>
"><?php echo $this->_vars['voter'][$this->_sections['upvote']['index']]['user_login']; ?>
</a>
							<?php endif; ?>
						</li>
					<?php endfor; endif; ?>
				</ul>
			</div>
			<?php echo tpl_function_checkActionsTpl(array('location' => "tpl_pligg_story_who_voted_end"), $this);?>
		</div>
	<?php endif; ?>
	<?php if (count ( $this->_vars['downvoter'] ) != 0): ?>
		<div class="tab-pane fade" id="who_downvoted">
			<h3><?php echo $this->_confs['PLIGG_Visual_Story_Who_Downvoted_Story']; ?>
</h3>
			<?php echo tpl_function_checkActionsTpl(array('location' => "tpl_pligg_story_who_downvoted_start"), $this);?>
			<div class="whovotedwrapper whodownvoted">
				<ul>
					<?php if (isset($this->_sections['downvote'])) unset($this->_sections['downvote']);
$this->_sections['downvote']['name'] = 'downvote';
$this->_sections['downvote']['loop'] = is_array($this->_vars['downvoter']) ? count($this->_vars['downvoter']) : max(0, (int)$this->_vars['downvoter']);
$this->_sections['downvote']['show'] = true;
$this->_sections['downvote']['max'] = $this->_sections['downvote']['loop'];
$this->_sections['downvote']['step'] = 1;
$this->_sections['downvote']['start'] = $this->_sections['downvote']['step'] > 0 ? 0 : $this->_sections['downvote']['loop']-1;
if ($this->_sections['downvote']['show']) {
	$this->_sections['downvote']['total'] = $this->_sections['downvote']['loop'];
	if ($this->_sections['downvote']['total'] == 0)
		$this->_sections['downvote']['show'] = false;
} else
	$this->_sections['downvote']['total'] = 0;
if ($this->_sections['downvote']['show']):

		for ($this->_sections['downvote']['index'] = $this->_sections['downvote']['start'], $this->_sections['downvote']['iteration'] = 1;
			 $this->_sections['downvote']['iteration'] <= $this->_sections['downvote']['total'];
			 $this->_sections['downvote']['index'] += $this->_sections['downvote']['step'], $this->_sections['downvote']['iteration']++):
$this->_sections['downvote']['rownum'] = $this->_sections['downvote']['iteration'];
$this->_sections['downvote']['index_prev'] = $this->_sections['downvote']['index'] - $this->_sections['downvote']['step'];
$this->_sections['downvote']['index_next'] = $this->_sections['downvote']['index'] + $this->_sections['downvote']['step'];
$this->_sections['downvote']['first']	  = ($this->_sections['downvote']['iteration'] == 1);
$this->_sections['downvote']['last']	   = ($this->_sections['downvote']['iteration'] == $this->_sections['downvote']['total']);
?>
						<li>
							<?php if ($this->_vars['UseAvatars'] != "0"): ?>
								<a href="<?php echo $this->_vars['URL_user'].$this->_vars['downvoter'][$this->_sections['downvote']['index']]['user_login']; ?>
" rel="tooltip" title="<?php echo $this->_vars['downvoter'][$this->_sections['downvote']['index']]['user_login']; ?>
" class="avatar-tooltip"><img src="<?php echo $this->_vars['downvoter'][$this->_sections['downvote']['index']]['Avatar_ImgSrc']; ?>
" alt="" align="top" title="" /></a>
							<?php endif; ?>
							<?php if ($this->_vars['UseAvatars'] == "0"): ?><a href="<?php echo $this->_vars['URL_user'].$this->_vars['downvoter'][$this->_sections['downvote']['index']]['user_login']; ?>
"><?php echo $this->_vars['downvoter'][$this->_sections['downvote']['index']]['user_login']; ?>
</a><?php endif; ?>
						</li>
					<?php endfor; endif; ?>
				</ul>
			</div>
			<div style="clear:both;"></div>
			<?php echo tpl_function_checkActionsTpl(array('location' => "tpl_pligg_story_who_downvoted_end"), $this);?>
		</div>
	<?php endif; ?>
	<?php if (count ( $this->_vars['related_story'] ) != 0): ?>
		<div class="tab-pane fade" id="related">
			<h3><?php echo $this->_confs['PLIGG_Visual_Story_RelatedStory']; ?>
</h3>
			<?php echo tpl_function_checkActionsTpl(array('location' => "tpl_pligg_story_related_start"), $this);?>
			<ol>
				
				<?php if (count ( $this->_vars['related_story'] ) > 10):  $this->assign('related_count', "10");  else:  $this->assign('related_count', $this->_vars['related_story']);  endif; ?>
				<?php if (isset($this->_sections['related'])) unset($this->_sections['related']);
$this->_sections['related']['name'] = 'related';
$this->_sections['related']['loop'] = is_array($this->_vars['related_count']) ? count($this->_vars['related_count']) : max(0, (int)$this->_vars['related_count']);
$this->_sections['related']['show'] = true;
$this->_sections['related']['max'] = $this->_sections['related']['loop'];
$this->_sections['related']['step'] = 1;
$this->_sections['related']['start'] = $this->_sections['related']['step'] > 0 ? 0 : $this->_sections['related']['loop']-1;
if ($this->_sections['related']['show']) {
	$this->_sections['related']['total'] = $this->_sections['related']['loop'];
	if ($this->_sections['related']['total'] == 0)
		$this->_sections['related']['show'] = false;
} else
	$this->_sections['related']['total'] = 0;
if ($this->_sections['related']['show']):

		for ($this->_sections['related']['index'] = $this->_sections['related']['start'], $this->_sections['related']['iteration'] = 1;
			 $this->_sections['related']['iteration'] <= $this->_sections['related']['total'];
			 $this->_sections['related']['index'] += $this->_sections['related']['step'], $this->_sections['related']['iteration']++):
$this->_sections['related']['rownum'] = $this->_sections['related']['iteration'];
$this->_sections['related']['index_prev'] = $this->_sections['related']['index'] - $this->_sections['related']['step'];
$this->_sections['related']['index_next'] = $this->_sections['related']['index'] + $this->_sections['related']['step'];
$this->_sections['related']['first']	  = ($this->_sections['related']['iteration'] == 1);
$this->_sections['related']['last']	   = ($this->_sections['related']['iteration'] == $this->_sections['related']['total']);
?>
					<li><a href = "<?php echo $this->_vars['related_story'][$this->_sections['related']['index']]['url']; ?>
"><?php echo $this->_vars['related_story'][$this->_sections['related']['index']]['link_title']; ?>
</a></li> 
				<?php endfor; endif; ?>
			</ol>
			<?php echo tpl_function_checkActionsTpl(array('location' => "tpl_pligg_story_related_end"), $this);?>
		</div>
	<?php endif; ?>
	<?php echo tpl_function_checkActionsTpl(array('location' => "tpl_pligg_story_tab_end_content"), $this);?>
</div>
<!--/story_center.tpl -->

