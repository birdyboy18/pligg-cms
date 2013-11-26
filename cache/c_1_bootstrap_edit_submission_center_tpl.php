<?php require_once('/Applications/MAMP/htdocs/pligg/plugins/modifier.repeat_count.php'); $this->register_modifier("repeat_count", "tpl_modifier_repeat_count");  require_once('/Applications/MAMP/htdocs/pligg/plugins/function.checkActionsTpl.php'); $this->register_function("checkActionsTpl", "tpl_function_checkActionsTpl");  /* V2.20 Template Lite, 8 March 2008. (c) Mark Dickenson, Jon Langevin. GNU LGPL. 2013-11-24 04:52:18 CET */ ?>


<!-- edit_submission_center.tpl -->
<?php echo '
	<script type="text/javascript">
	function SetState(obj_checkbox, obj_textarea) {
		if(obj_checkbox.checked)
			{ obj_textarea.disabled = false;
		}
		else {
			obj_textarea.disabled = true;
		}
	}
	function textCounter(field, countfield, maxlimit) {
		if (field.value.length > maxlimit) // if too long...trim it!
				field.value = field.value.substring(0, maxlimit);
				// otherwise, update \'characters left\' counter
		else
				countfield.value = maxlimit - field.value.length;
	}
	function counter(text) {
		text.form.text_num.value = text.value.length;
	}
	</script>
'; ?>


<?php echo tpl_function_checkActionsTpl(array('location' => "tpl_pligg_submit_step2_start"), $this);?>
<form action="" method="post" id="thisform" enctype="multipart/form-data" >
	<input type="hidden" name="id" value="<?php echo $this->_vars['submit_id']; ?>
" />
	<?php echo $this->_vars['hidden_token_edit_link']; ?>

	<legend><?php echo $this->_confs['PLIGG_Visual_EditStory_Header']; ?>
: <?php echo $this->_vars['submit_title']; ?>
</legend>
	<strong><?php echo $this->_confs['PLIGG_Visual_Submit2_NewsURL']; ?>
: </strong>
	&nbsp;<a href="<?php echo $this->_vars['submit_url']; ?>
"><?php echo $this->_vars['submit_url']; ?>
</a>
	<?php if ($this->_vars['isAdmin'] == 1): ?>
		<br />
		<input type="text" name="url" id="url" class="form-control col-md-6" <?php if ($this->_vars['submit_url'] != "http://" && $this->_vars['submit_url'] != ""): ?> value ="<?php echo $this->_vars['submit_url']; ?>
"<?php else: ?> placeholder="http://"<?php endif; ?>>
	<?php endif; ?>
	<br />
	
	<strong><?php echo $this->_confs['PLIGG_Visual_Submit2_Title']; ?>
: </strong> 
	<span class="field-description"><?php echo $this->_confs['PLIGG_Visual_Submit2_TitleInstruct']; ?>
</span>
	<br />
	<input type="text" id="title" class="form-control col-md-6" name="title" value="<?php echo $this->_vars['submit_title']; ?>
" maxlength="<?php echo $this->_vars['maxTitleLength']; ?>
" />
	<br />
	<?php if ($this->_vars['isAdmin'] == 1 || $this->_vars['isModerator'] == 1): ?>
		<strong><?php echo $this->_confs['PLIGG_Visual_Change_Link_Submitted_By']; ?>
: </strong>
		<br />
        <select name="author" id="author" class="form-control col-md-6">
			<?php if (isset($this->_sections['nr'])) unset($this->_sections['nr']);
$this->_sections['nr']['name'] = 'nr';
$this->_sections['nr']['loop'] = is_array($this->_vars['userdata']) ? count($this->_vars['userdata']) : max(0, (int)$this->_vars['userdata']);
$this->_sections['nr']['show'] = true;
$this->_sections['nr']['max'] = $this->_sections['nr']['loop'];
$this->_sections['nr']['step'] = 1;
$this->_sections['nr']['start'] = $this->_sections['nr']['step'] > 0 ? 0 : $this->_sections['nr']['loop']-1;
if ($this->_sections['nr']['show']) {
	$this->_sections['nr']['total'] = $this->_sections['nr']['loop'];
	if ($this->_sections['nr']['total'] == 0)
		$this->_sections['nr']['show'] = false;
} else
	$this->_sections['nr']['total'] = 0;
if ($this->_sections['nr']['show']):

		for ($this->_sections['nr']['index'] = $this->_sections['nr']['start'], $this->_sections['nr']['iteration'] = 1;
			 $this->_sections['nr']['iteration'] <= $this->_sections['nr']['total'];
			 $this->_sections['nr']['index'] += $this->_sections['nr']['step'], $this->_sections['nr']['iteration']++):
$this->_sections['nr']['rownum'] = $this->_sections['nr']['iteration'];
$this->_sections['nr']['index_prev'] = $this->_sections['nr']['index'] - $this->_sections['nr']['step'];
$this->_sections['nr']['index_next'] = $this->_sections['nr']['index'] + $this->_sections['nr']['step'];
$this->_sections['nr']['first']	  = ($this->_sections['nr']['iteration'] == 1);
$this->_sections['nr']['last']	   = ($this->_sections['nr']['iteration'] == $this->_sections['nr']['total']);
?>
				<option value="<?php echo $this->_vars['userdata'][$this->_sections['nr']['index']]['user_id']; ?>
" <?php if ($this->_vars['userdata'][$this->_sections['nr']['index']]['user_id'] == $this->_vars['author']): ?> selected <?php endif; ?> ><?php echo $this->_vars['userdata'][$this->_sections['nr']['index']]['user_login']; ?>
</option>
			<?php endfor; endif; ?>      
        </select>
        
		
		
		<br />
	<?php endif; ?>
	<?php if ($this->_vars['enable_tags']): ?>
		<strong><?php echo $this->_confs['PLIGG_Visual_Submit2_Tags']; ?>
: </strong> 
		<span class="field-description"><?php echo $this->_confs['PLIGG_Visual_Submit2_Tags_Inst1']; ?>
 <?php echo $this->_confs['PLIGG_Visual_Submit2_Tags_Example']; ?>
 <?php echo $this->_confs['PLIGG_Visual_Submit2_Tags_Inst2']; ?>
</span>
		<input tabindex="10" type="text" id="tags" class="form-control col-md-6" name="tags" data-mode="multiple" value="<?php echo $this->_vars['tags_words']; ?>
" maxlength="<?php echo $this->_vars['maxTagsLength']; ?>
" data-source="[&quot;.net&quot;,&quot;ajax&quot;,&quot;arts&quot;,&quot;apple&quot;,&quot;blog&quot;,&quot;books&quot;,&quot;business&quot;,&quot;celebrity&quot;,&quot;clothing&quot;,&quot;cms&quot;,&quot;coldfusion&quot;,&quot;computer&quot;,&quot;console&quot;,&quot;contest&quot;,&quot;css&quot;,&quot;deal&quot;,&quot;decorating&quot;,&quot;design&quot;,&quot;DIY&quot;,&quot;download&quot;,&quot;education&quot;,&quot;election&quot;,&quot;entertainment&quot;,&quot;enviroment&quot;,&quot;firefox&quot;,&quot;flash&quot;,&quot;food&quot;,&quot;forums&quot;,&quot;free software&quot;,&quot;funny&quot;,&quot;gadget&quot;,&quot;gallery&quot;,&quot;games&quot;,&quot;gifts&quot;,&quot;Google&quot;,&quot;hacking&quot;,&quot;handheld&quot;,&quot;hardware&quot;,&quot;health&quot;,&quot;howto&quot;,&quot;html&quot;,&quot;humor&quot;,&quot;images&quot;,&quot;international&quot;,&quot;internet&quot;,&quot;javascript&quot;,&quot;jobs&quot;,&quot;lifestyle&quot;,&quot;linux&quot;,&quot;mac&quot;,&quot;Microsoft&quot;,&quot;mobile&quot;,&quot;mods&quot;,&quot;money&quot;,&quot;movies&quot;,&quot;music&quot;,&quot;mysql&quot;,&quot;Nintendo&quot;,&quot;open source&quot;,&quot;pc&quot;,&quot;php&quot;,&quot;photoshop&quot;,&quot;Playstation&quot;,&quot;podcast&quot;,&quot;politics&quot;,&quot;portfolio&quot;,&quot;programming&quot;,&quot;rumor&quot;,&quot;science&quot;,&quot;security&quot;,&quot;SEO&quot;,&quot;shopping&quot;,&quot;software&quot;,&quot;space&quot;,&quot;sports&quot;,&quot;technology&quot;,&quot;television&quot;,&quot;templates&quot;,&quot;themes&quot;,&quot;tools&quot;,&quot;toys&quot;,&quot;travel&quot;,&quot;tutorial&quot;,&quot;typography&quot;,&quot;usability&quot;,&quot;video&quot;,&quot;video game&quot;,&quot;web&quot;,&quot;webdesign&quot;,&quot;Wii&quot;,&quot;work&quot;,&quot;Xbox&quot;,&quot;XHTML&quot;,&quot;Yahoo&quot;]" data-items="4" data-delimiter="," data-provide="typeahead">
		<br />
	<?php endif; ?>
	<strong><?php echo $this->_confs['PLIGG_Visual_Submit2_Description']; ?>
: </strong>
	<span class="field-description"><?php echo $this->_confs['PLIGG_Visual_Submit2_DescInstruct']; ?>
</span>
	<br />
	<textarea name="bodytext" rows="10" id="bodytext" class="form-control" WRAP="SOFT"><?php echo $this->_vars['submit_content']; ?>
</textarea>
	<?php if ($this->_vars['Story_Content_Tags_To_Allow'] != "" && $this->_vars['enable_tags']): ?>
		<span class="help-inline">
			<?php echo $this->_confs['PLIGG_Visual_Submit2_HTMLTagsAllowed']; ?>
: <?php echo $this->_vars['Story_Content_Tags_To_Allow']; ?>

		</span>
	<?php endif; ?>
	<br />
	<?php if ($this->_vars['SubmitSummary_Allow_Edit'] == 1): ?>
		<br />
		<strong><?php echo $this->_confs['PLIGG_Visual_Submit2_Summary']; ?>
: </strong>
		<span class="field-description">
			<?php echo $this->_confs['PLIGG_Visual_Submit2_SummaryInstruct']; ?>

			<?php echo $this->_confs['PLIGG_Visual_Submit2_SummaryLimit']; ?>

			<?php echo $this->_vars['StorySummary_ContentTruncate']; ?>

			<?php echo $this->_confs['PLIGG_Visual_Submit2_SummaryLimitCharacters']; ?>

		</span>
		<br />
		<textarea name="summarytext" rows="5" id="summarytext" class="form-control" WRAP="SOFT"><?php echo $this->_vars['submit_summary']; ?>
</textarea>
		<br />
	<?php endif; ?>
	<br />
	<strong><?php echo $this->_confs['PLIGG_Visual_Submit2_Category']; ?>
: </strong>
	<span class="field-description"><?php echo $this->_confs['PLIGG_Visual_Submit2_CatInstruct']; ?>
</span>
	<br />
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

				 <input type="checkbox" class="form-control" name="category[]" value="<?php echo $this->_vars['submit_cat_array'][$this->_sections['thecat']['index']]['auto_id']; ?>
" <?php if ($this->_vars['submit_cat_array'][$this->_sections['thecat']['index']]['auto_id'] == $this->_vars['submit_category'] || in_array ( $this->_vars['submit_cat_array'][$this->_sections['thecat']['index']]['auto_id'] , $this->_vars['submit_additional_cats'] )): ?>checked<?php endif; ?>> <?php echo $this->_vars['submit_cat_array'][$this->_sections['thecat']['index']]['name']; ?>
<br />							
		<?php endfor; endif; ?>
	<?php else: ?>
		<select class="form-control" <?php if ($this->_vars['Multiple_Categories']): ?>name="category[]" multiple size=10<?php else: ?>name="category"<?php endif; ?>>
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
"<?php if ($this->_vars['submit_cat_array'][$this->_sections['thecat']['index']]['auto_id'] == $this->_vars['submit_category'] || in_array ( $this->_vars['submit_cat_array'][$this->_sections['thecat']['index']]['auto_id'] , $this->_vars['submit_additional_cats'] )): ?> selected="selected"<?php endif; ?>>
				<?php if ($this->_vars['submit_cat_array'][$this->_sections['thecat']['index']]['spacercount'] < $this->_vars['lastspacer']):  echo $this->_run_modifier($this->_vars['submit_cat_array'][$this->_sections['thecat']['index']]['spacerdiff'], 'repeat_count', 'plugin', 1, '');  endif; ?>
				<?php if ($this->_vars['submit_cat_array'][$this->_sections['thecat']['index']]['spacercount'] > $this->_vars['lastspacer']):  endif; ?>
				<?php echo $this->_run_modifier($this->_vars['submit_cat_array'][$this->_sections['thecat']['index']]['spacercount'], 'repeat_count', 'plugin', 1, '&nbsp;&nbsp;&nbsp;'); ?>

				<?php echo $this->_vars['submit_cat_array'][$this->_sections['thecat']['index']]['name']; ?>
 
				&nbsp;&nbsp;&nbsp;       
				<?php $this->assign('lastspacer', $this->_vars['submit_cat_array'][$this->_sections['thecat']['index']]['spacercount']); ?>					
				</option>
			<?php endfor; endif; ?>
		</select>
	<?php endif; ?>
	<br />
	<?php if ($this->_vars['canIhaveAccess'] == 1): ?>
		<strong><?php echo $this->_confs['PLIGG_Visual_EditStory_Notify']; ?>
: </strong>
		<br />
		&nbsp; <input type="checkbox" name="notify" value="yes"> <?php echo $this->_confs['PLIGG_Visual_EditStory_NotifyText']; ?>

		<ul class="notify_option_list">
			<li><input type="radio" name="reason" value="typo" onclick="notify.checked = 'true';"><?php echo $this->_confs['PLIGG_Visual_EditStory_Reason_typo']; ?>
</li>
			<li><input type="radio" name="reason" value="category" onclick="notify.checked = 'true';"><?php echo $this->_confs['PLIGG_Visual_EditStory_Reason_category']; ?>
</li>
			<li><input type="radio" name="reason" value="tags" onclick="notify.checked = 'true';"><?php echo $this->_confs['PLIGG_Visual_EditStory_Reason_tags']; ?>
</li>
			<li><input type="radio" name="reason" value="foul" onclick="notify.checked = 'true';"><?php echo $this->_confs['PLIGG_Visual_EditStory_Reason_foul']; ?>
</li>
			<li>
				<input type="radio" name="reason" value="other" onclick="notify.checked = 'true';"><?php echo $this->_confs['PLIGG_Visual_EditStory_Reason_other']; ?>
 
				<input type="text" name="otherreason" class="form-control" size="50">
			</li>
		</ul>
	<?php endif; ?>
	<?php echo tpl_function_checkActionsTpl(array('location' => "submit_step_2_pre_extrafields"), $this);?>
	<?php $_templatelite_tpl_vars = $this->_vars;
echo $this->_fetch_compile_include($this->_vars['tpl_extra_fields'].".tpl", array());
$this->_vars = $_templatelite_tpl_vars;
unset($_templatelite_tpl_vars);
 ?>
	<br />
	<input type="submit" value="<?php echo $this->_confs['PLIGG_Visual_Submit2_Continue']; ?>
" class="btn btn-primary" />
</form>
<?php echo tpl_function_checkActionsTpl(array('location' => "tpl_pligg_submit_step2_after_form"), $this);?>
<!--/edit_submission_center.tpl -->