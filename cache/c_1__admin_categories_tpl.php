<?php require_once('/Applications/MAMP/htdocs/pligg/plugins/modifier.repeat_count.php'); $this->register_modifier("repeat_count", "tpl_modifier_repeat_count");  /* V2.20 Template Lite, 8 March 2008. (c) Mark Dickenson, Jon Langevin. GNU LGPL. 2013-11-24 04:16:45 CET */ ?>

﻿<!-- categories.tpl -->
<legend><?php echo $this->_confs['PLIGG_Visual_AdminPanel_Category_Manage']; ?>
</legend>
<br />
<?php echo '
<script>
function showdel(id)
{
    document.getElementById(\'del\'+id).style.display=\'block\'; 
    var content = document.getElementById(\'test\'+id+\'-content\');
    var height = content.style.height;
    content.style.height = (parseInt(height.substr(0,height.indexOf(\'p\')))+180)+\'px\';
}
</script>
'; ?>

<div class="tabbable tabs-left"><!--Parent of the Accordion--> 
	<ul class="nav nav-tabs">
		<?php if (isset($this->_sections['thecat'])) unset($this->_sections['thecat']);
$this->_sections['thecat']['name'] = 'thecat';
$this->_sections['thecat']['loop'] = is_array($this->_vars['cat_array']) ? count($this->_vars['cat_array']) : max(0, (int)$this->_vars['cat_array']);
$this->_sections['thecat']['start'] = (int)1;
$this->_sections['thecat']['show'] = true;
$this->_sections['thecat']['max'] = $this->_sections['thecat']['loop'];
$this->_sections['thecat']['step'] = 1;
if ($this->_sections['thecat']['start'] < 0)
	$this->_sections['thecat']['start'] = max($this->_sections['thecat']['step'] > 0 ? 0 : -1, $this->_sections['thecat']['loop'] + $this->_sections['thecat']['start']);
else
	$this->_sections['thecat']['start'] = min($this->_sections['thecat']['start'], $this->_sections['thecat']['step'] > 0 ? $this->_sections['thecat']['loop'] : $this->_sections['thecat']['loop']-1);
if ($this->_sections['thecat']['show']) {
	$this->_sections['thecat']['total'] = min(ceil(($this->_sections['thecat']['step'] > 0 ? $this->_sections['thecat']['loop'] - $this->_sections['thecat']['start'] : $this->_sections['thecat']['start']+1)/abs($this->_sections['thecat']['step'])), $this->_sections['thecat']['max']);
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
				<li class="<?php if ($this->_sections['thecat']['index'] == 1): ?>active<?php endif; ?>"><a data-toggle="tab" href="#cat-<?php echo $this->_vars['cat_array'][$this->_sections['thecat']['index']]['auto_id']; ?>
"><?php echo $this->_vars['cat_array'][$this->_sections['thecat']['index']]['name']; ?>
</a></li>
			<?php endif; ?>
		<?php endfor; endif; ?>
		<li class="add_new_category_tab"><a data-toggle="tab" href="#AddNew"><?php echo $this->_confs['PLIGG_Visual_AdminPanel_Category_Add']; ?>
</a></li>
	</ul>
	<br />
	<div class="tab-content">
		<?php if (isset($this->_sections['thecat'])) unset($this->_sections['thecat']);
$this->_sections['thecat']['name'] = 'thecat';
$this->_sections['thecat']['loop'] = is_array($this->_vars['cat_array']) ? count($this->_vars['cat_array']) : max(0, (int)$this->_vars['cat_array']);
$this->_sections['thecat']['start'] = (int)1;
$this->_sections['thecat']['show'] = true;
$this->_sections['thecat']['max'] = $this->_sections['thecat']['loop'];
$this->_sections['thecat']['step'] = 1;
if ($this->_sections['thecat']['start'] < 0)
	$this->_sections['thecat']['start'] = max($this->_sections['thecat']['step'] > 0 ? 0 : -1, $this->_sections['thecat']['loop'] + $this->_sections['thecat']['start']);
else
	$this->_sections['thecat']['start'] = min($this->_sections['thecat']['start'], $this->_sections['thecat']['step'] > 0 ? $this->_sections['thecat']['loop'] : $this->_sections['thecat']['loop']-1);
if ($this->_sections['thecat']['show']) {
	$this->_sections['thecat']['total'] = min(ceil(($this->_sections['thecat']['step'] > 0 ? $this->_sections['thecat']['loop'] - $this->_sections['thecat']['start'] : $this->_sections['thecat']['start']+1)/abs($this->_sections['thecat']['step'])), $this->_sections['thecat']['max']);
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
				<div id="cat-<?php echo $this->_vars['cat_array'][$this->_sections['thecat']['index']]['auto_id']; ?>
" class="tab-pane <?php if ($this->_sections['thecat']['index'] == 1): ?>active<?php endif; ?> fade in">
					<form method='post'>
						<?php echo $this->_vars['hidden_token_category_manager']; ?>

						<input type='hidden' name='auto_id' value='<?php echo $this->_vars['cat_array'][$this->_sections['thecat']['index']]['auto_id']; ?>
'>
						<input type='hidden' name='action' value='save'>
						<table class="table table-bordered table-striped">
							<tbody>
								<tr>
									<td><?php echo $this->_confs['PLIGG_Visual_AdminPanel_Category_Name']; ?>
</td>
									<td><input name="name" class="form-control" value="<?php echo $this->_vars['cat_array'][$this->_sections['thecat']['index']]['name']; ?>
" type="text"></td>
								</tr>
								<tr>
									<td><?php echo $this->_confs['PLIGG_Visual_AdminPanel_Category_URL']; ?>
</td>
									<td><input name="safename" class="form-control" value="<?php echo $this->_vars['cat_array'][$this->_sections['thecat']['index']]['safename']; ?>
" type="text"></td>
								</tr>
								<tr>
									<td><?php echo $this->_confs['PLIGG_Visual_AdminPanel_Category_ID']; ?>
</td>
									<td><?php echo $this->_vars['cat_array'][$this->_sections['thecat']['index']]['id']; ?>
</td>
								</tr>
								<tr>
									<td><?php echo $this->_confs['PLIGG_Visual_AdminPanel_Category_Meta_Desc']; ?>
</td>
									<td><input name="description" class="form-control" value="<?php echo $this->_vars['cat_array'][$this->_sections['thecat']['index']]['description']; ?>
" type="text"></td>
								</tr>
								<tr>
									<td><?php echo $this->_confs['PLIGG_Visual_AdminPanel_Category_Meta_Keywords']; ?>
</td>
									<td><input name="keywords" class="form-control" value="<?php echo $this->_vars['cat_array'][$this->_sections['thecat']['index']]['keywords']; ?>
" type="text"></td>
								</tr>
								<tr>
									<td><?php echo $this->_confs['PLIGG_Visual_AdminPanel_Category_Author_Level']; ?>
</td>
									<td>
										<select name="level" class="form-control">
											<option value="normal" <?php if ($this->_vars['cat_array'][$this->_sections['thecat']['index']]['authorlevel'] == 'normal'): ?>selected<?php endif; ?>>Normal</option>
											<option value="moderator" <?php if ($this->_vars['cat_array'][$this->_sections['thecat']['index']]['authorlevel'] == 'moderator'): ?>selected<?php endif; ?>>Moderator</option>
											<option value="admin" <?php if ($this->_vars['cat_array'][$this->_sections['thecat']['index']]['authorlevel'] == 'admin'): ?>selected<?php endif; ?>>Admin</option>
										</select>
									</td>
								</tr>
								<tr>
									<td><?php echo $this->_confs['PLIGG_Visual_AdminPanel_Category_Author_Group']; ?>
</td>
									<td><input name="group" class="form-control" value="<?php echo $this->_vars['cat_array'][$this->_sections['thecat']['index']]['authorgroup']; ?>
" type="text"></td>
								</tr>
								<tr>
									<td><?php echo $this->_confs['PLIGG_Visual_AdminPanel_Category_Votes']; ?>
</td>
									<td><input name="votes" class="form-control" value="<?php echo $this->_vars['cat_array'][$this->_sections['thecat']['index']]['votes']; ?>
" type="text"></td>
								</tr>
								<tr>
									<td><?php echo $this->_confs['PLIGG_Visual_AdminPanel_Category_Karma']; ?>
</td>
									<td><input name="karma" class="form-control" value="<?php echo $this->_vars['cat_array'][$this->_sections['thecat']['index']]['karma']; ?>
" type="text"></td>
								</tr>
								<tr>
									<td><?php echo $this->_confs['PLIGG_Visual_AdminPanel_Category_Parent']; ?>
</td>
									<td>
									<select name="parent" class="form-control">
									  <option value="0"> --- </option>
									  <?php if (count((array)$this->_vars['cat_array'])):  foreach ((array)$this->_vars['cat_array'] as $this->_vars['cat']): ?>
										  <?php if ($this->_vars['cat']['auto_id'] != 0 && $this->_vars['cat']['auto_id'] != $this->_vars['cat_array'][$this->_sections['thecat']['index']]['auto_id'] && $this->_vars['cat_array'][$this->_sections['thecat']['index']]['auto_id'] != $this->_vars['cat']['parent']): ?>
										<option value="<?php echo $this->_vars['cat']['auto_id']; ?>
" <?php if ($this->_vars['cat_array'][$this->_sections['thecat']['index']]['parent'] == $this->_vars['cat']['auto_id']): ?>selected<?php endif; ?>><?php echo $this->_vars['cat']['name']; ?>
</option>
										  <?php endif; ?>
									  <?php endforeach; endif; ?>
									</select>
									</td>
								</tr>
								<tr>
									<td><input onclick="showdel(<?php echo $this->_vars['cat_array'][$this->_sections['thecat']['index']]['auto_id']; ?>
)" value="<?php echo $this->_confs['PLIGG_Visual_AdminPanel_Category_Delete']; ?>
" <?php if (sizeof ( $this->_vars['cat_array'] ) <= 2): ?>disabled<?php endif; ?> type="button" class="btn btn-danger"></td> 
									<td valign='top'><input value="<?php echo $this->_confs['PLIGG_Visual_AdminPanel_Category_Update']; ?>
" type="submit" class="btn btn-primary"></td>
								</tr>
							</tbody>
						</table>
						<div id="del<?php echo $this->_vars['cat_array'][$this->_sections['thecat']['index']]['auto_id']; ?>
" class="alert alert-error" style="display:none;">
							<p><strong><?php echo $this->_confs['PLIGG_Visual_AdminPanel_Category_Select']; ?>
</strong></p>
							<input type="radio" name="sub" value="move" onclick="this.form.delete1.disabled=false;"> <?php echo $this->_confs['PLIGG_Visual_AdminPanel_Category_Move']; ?>
:
								<select name="move">
								<?php if (count((array)$this->_vars['cat_array'])):  foreach ((array)$this->_vars['cat_array'] as $this->_vars['cat']): ?>
								  <?php if ($this->_vars['cat']['auto_id'] != 0 && $this->_vars['cat']['auto_id'] != $this->_vars['cat_array'][$this->_sections['thecat']['index']]['auto_id']): ?>
									<option value="<?php echo $this->_vars['cat']['auto_id']; ?>
"><?php echo $this->_vars['cat']['name']; ?>
</option>
								  <?php endif; ?>
								<?php endforeach; endif; ?>
								</select><br />
							<input type="radio" name="sub" value="delete" onclick="this.form.delete1.disabled=false;"> <?php echo $this->_confs['PLIGG_Visual_AdminPanel_Category_Delete_Stories']; ?>
<br /><br />
							<input type="radio" name="sub1" value="move" checked> <?php echo $this->_confs['PLIGG_Visual_AdminPanel_Subcategory_Move']; ?>
<br />
							<input type="radio" name="sub1" value="delete"> <?php echo $this->_confs['PLIGG_Visual_AdminPanel_Subcategory_Delete']; ?>
<br /><br />
							<input onclick="if (confirm('<?php echo $this->_confs['PLIGG_Visual_View_User_Reset_Pass_Confirm']; ?>
')) document.location.href='admin_categories.php?action=remove&id=<?php echo $this->_vars['cat_array'][$this->_sections['thecat']['index']]['auto_id']; ?>
&sub='+(this.form.sub[0].checked ? 'move' : 'delete')+'&move='+this.form.move.options[this.form.move.selectedIndex].value+'&sub1='+(this.form.sub1[0].checked ? 'move' : 'delete')+'&token='+this.form.token.value;" value="<?php echo $this->_confs['PLIGG_Visual_AdminPanel_Category_Delete']; ?>
" disabled name='delete1' type="button" class="btn btn-danger">
							<input onclick="document.getElementById('del<?php echo $this->_vars['cat_array'][$this->_sections['thecat']['index']]['auto_id']; ?>
').style.display='none';" value="<?php echo $this->_confs['PLIGG_Visual_AdminPanel_Category_Cancel']; ?>
" type="button" class="btn btn-default">
						</div>
					</form>
				</div>
			<?php endif; ?>
		<?php endfor; endif; ?>
		<div id="AddNew" class="tab-pane fade in">
			<form method='post'>
				<?php echo $this->_vars['hidden_token_category_manager']; ?>

				<input type='hidden' name='action' value='save'>
				<table class="table table-bordered table-striped">
					<tbody>
						<tr>
							<td><?php echo $this->_confs['PLIGG_Visual_AdminPanel_Category_Name']; ?>
</td>
							<td><input name="name" class="form-control" placeholder="New Category" type="text"></td>
						</tr>
						<tr>
							<td><?php echo $this->_confs['PLIGG_Visual_AdminPanel_Category_URL']; ?>
</td>
							<td><input name="safename" class="form-control" value="" type="text"></td>
						</tr>
						<tr>
							<td><?php echo $this->_confs['PLIGG_Visual_AdminPanel_Category_Meta_Desc']; ?>
</td>
							<td><input name="description" class="form-control" value="" type="text"></td>
						</tr>
						<tr>
							<td><?php echo $this->_confs['PLIGG_Visual_AdminPanel_Category_Meta_Keywords']; ?>
</td>
							<td><input name="keywords" class="form-control" value="" type="text"></td>
						</tr>
						<tr>
							<td><?php echo $this->_confs['PLIGG_Visual_AdminPanel_Category_Author_Level']; ?>
</td>
							<td>
							<select name="level" class="form-control">
								<option value="normal">Normal</option>
								<option value="moderator">Moderator</option>
								<option value="admin">Admin</option>
							</select>
							</td>
						</tr>
						<tr>
							<td><?php echo $this->_confs['PLIGG_Visual_AdminPanel_Category_Author_Group']; ?>
</td>
							<td><input name="group" class="form-control" value="" type="text"></td>
						</tr>
						<tr>
							<td><?php echo $this->_confs['PLIGG_Visual_AdminPanel_Category_Votes']; ?>
</td>
							<td><input name="votes" class="form-control" value="" type="text"></td>
						</tr>
						<tr>
							<td><?php echo $this->_confs['PLIGG_Visual_AdminPanel_Category_Karma']; ?>
</td>
							<td><input name="karma" class="form-control" value="" type="text"></td>
						</tr>
						<tr>
							<td><?php echo $this->_confs['PLIGG_Visual_AdminPanel_Category_Parent']; ?>
</td>
							<td>
								<select name="parent" class="form-control">
									<option value="0"> --- </option>
									<?php if (count((array)$this->_vars['cat_array'])):  foreach ((array)$this->_vars['cat_array'] as $this->_vars['cat']): ?>
										<?php if ($this->_vars['cat']['auto_id'] != 0): ?>
											<option value="<?php echo $this->_vars['cat']['auto_id']; ?>
"><?php echo $this->_vars['cat']['name']; ?>
</option>
										<?php endif; ?>
									<?php endforeach; endif; ?>
								</select>
							</td>
						</tr>
						<tr>
							<td></td>
							<td><input value="<?php echo $this->_confs['PLIGG_Visual_AdminPanel_Category_Add']; ?>
" type="submit" class="btn btn-primary"></td>
						</tr>
					</tbody>
				</table>
			</form>
		</div><!--/#AddNew -->
	</div><!--/.tab-content -->
</div><!--/.tabbable-->
<div style="clear:both;margin-top:50px;">
	<hr />
	<legend><?php echo $this->_confs['PLIGG_Visual_AdminPanel_Category_Order']; ?>
</legend>
	<p><?php echo $this->_confs['PLIGG_Visual_AdminPanel_Category_Order_Description']; ?>
</p>
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
			<?php if ($this->_vars['cat_array'][$this->_sections['thecat']['index']]['spacercount'] < $this->_vars['submit_lastspacer']): ?>
				<?php echo $this->_run_modifier($this->_vars['cat_array'][$this->_sections['thecat']['index']]['spacerdiff'], 'repeat_count', 'plugin', 1, '</ol>'); ?>

			<?php endif; ?>
			<?php if ($this->_vars['cat_array'][$this->_sections['thecat']['index']]['spacercount'] > $this->_vars['submit_lastspacer']): ?><ol class="category_list"></li><?php endif; ?>
			<li id='cat<?php echo $this->_vars['cat_array'][$this->_sections['thecat']['index']]['auto_id']; ?>
'><?php echo $this->_vars['cat_array'][$this->_sections['thecat']['index']]['name']; ?>

				<a class="category_position" id='up<?php echo $this->_vars['cat_array'][$this->_sections['thecat']['index']]['auto_id']; ?>
' onclick="moveup(<?php echo $this->_vars['cat_array'][$this->_sections['thecat']['index']]['auto_id']; ?>
)" <?php if ($this->_vars['cat_array'][$this->_sections['thecat']['index']]['first']): ?>style='display:none;'<?php endif; ?>><span class="fa fa-angle-up"></span></a>
				<a class="category_position" id='down<?php echo $this->_vars['cat_array'][$this->_sections['thecat']['index']]['auto_id']; ?>
' onclick="movedown(<?php echo $this->_vars['cat_array'][$this->_sections['thecat']['index']]['auto_id']; ?>
)" <?php if ($this->_vars['cat_array'][$this->_sections['thecat']['index']]['last']): ?>style='display:none;'<?php endif; ?>><span class="fa fa-angle-down"></span></a>
			<?php $this->assign('submit_lastspacer', $this->_vars['cat_array'][$this->_sections['thecat']['index']]['spacercount']); ?>
		<?php endif; ?>
	<?php endfor; endif; ?>
</div>
<hr />
<p>Pligg allows users to select what categories they see from their profile settings page. If you add a new category after users have de-selected a category, they won't be able to see that new category. To make it so that all users category settings are reset to see all cateogires, click on the button below.</p> 
<a href="admin_categories.php?action=reset" class="btn btn-warning"><?php echo $this->_confs['PLIGG_Visual_Categories_Reset']; ?>
</a>
<div style="clear:both;"> </div>
<!--/categories.tpl -->