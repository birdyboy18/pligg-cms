<?php require_once('/Applications/MAMP/htdocs/pligg/plugins/modifier.truncate.php'); $this->register_modifier("truncate", "tpl_modifier_truncate");  require_once('/Applications/MAMP/htdocs/pligg/plugins/function.checkActionsTpl.php'); $this->register_function("checkActionsTpl", "tpl_function_checkActionsTpl");  require_once('/Applications/MAMP/htdocs/pligg/plugins/modifier.sanitize.php'); $this->register_modifier("sanitize", "tpl_modifier_sanitize");  /* V2.20 Template Lite, 8 March 2008. (c) Mark Dickenson, Jon Langevin. GNU LGPL. 2013-11-24 00:27:59 CET */ ?>

<!-- submissions.tpl -->
<?php echo '
<script type="text/javascript" language="javascript">
function submit_list_form(){
	
	if($(".enabled_disable:checked").length==0) {
		alert("Please select news");
		return false;
	}
	
	val_action=$("#admin_action").val();
	
	if(val_action=="spam"){
		var usernames ="";
		$(\'.enabled_disable:checked\').each(function(i){
			usernames += $(this).attr("usernameval")+", ";
		});
		if(confirm("Are you sure that you want to killspam these users: "+usernames)){
        
		} else {
			return false;
		}
	}
	
	document.getElementById("user_list_form").submit();
	
	//for(x in document.getElementById("user_list_form"))
	//alert(x);
	//alert(document.getElementById("user_list_form"));
}

$(function(){
	// add multiple select / deselect functionality
	$("#selectall_user_ed").click(function () {
		  $(\'.enabled_disable\').attr(\'checked\', this.checked);
	});
	// if all checkbox are selected, check the selectall checkbox
	// and viceversa
	$(".enabled_disable").click(function(){
		if($(".enabled_disable").length == $(".enabled_disable:checked").length) {
			$("#selectall_user_ed").attr("checked", "checked");
		} else {
			$("#selectall_user_ed").removeAttr("checked");
		}
	});
});

function set_admin_action(acc){
	$("#admin_action").val(acc);
	submit_list_form(); 
}

function validate_all_user_action(){
	if($("#admin_action").val()==""){
		alert("select news list");
		return false;
	}
}
</script>
'; ?>

<legend>
	<?php if ($_GET['user']): ?>
		<?php echo $this->_run_modifier($_GET['user'], 'sanitize', 'plugin', 1, 2); ?>
's <?php echo $this->_confs['PLIGG_Visual_TopUsers_TH_News']; ?>

	<?php else: ?>
		<?php echo $this->_confs['PLIGG_Visual_AdminPanel_Links']; ?>

	<?php endif; ?>
</legend>
<?php if ($this->_vars['moderated_submissions_count'] != "0"): ?>
	<div class="alert alert-warning">
		There <?php if ($this->_vars['moderated_submissions_count'] == "1"): ?>is<?php else: ?>are<?php endif; ?> <strong><?php echo $this->_vars['moderated_submissions_count']; ?>
 <?php if ($this->_vars['moderated_submissions_count'] == "1"): ?>story<?php else: ?>stories<?php endif; ?></strong> awaiting moderation.<br />
		<a href="admin_links.php?filter=other">Click here to review <?php if ($this->_vars['moderated_submissions_count'] == "1"): ?>it<?php else: ?>them<?php endif; ?>.</a>
	</div>
<?php endif; ?>

<div class="row management-tools">
	<div class="col-md-3">
		<div class="btn-group pull">
			<a class="btn btn-default dropdown-toggle" href="#" data-toggle="dropdown">
				<i id="selected_action"></i> <?php echo $this->_confs['PLIGG_Visual_AdminPanel_Apply_Changes']; ?>
 <span class="caret"></span>
			</a>
			<ul class="dropdown-menu">
				<li><a onclick="set_admin_action('published')" href="#"><i class="fa fa-level-up"></i><?php echo $this->_confs['PLIGG_Visual_AdminPanel_Publish']; ?>
</a></li>
				<li><a onclick="set_admin_action('new')" href="#"><i class="fa fa-level-down"></i><?php echo $this->_confs['PLIGG_Visual_AdminPanel_New']; ?>
</a></li>
				<li><a onclick="set_admin_action('discard')" href="#"><i class="fa fa-trash-o"></i><?php echo $this->_confs['PLIGG_Visual_AdminPanel_Discard']; ?>
</a></li>
				<li><a onclick="set_admin_action('spam')" href="#"><i class="fa fa-ban"></i><?php echo $this->_confs['PLIGG_Visual_AdminPanel_Spam']; ?>
</a></li>
			</ul>
		</div>
	</div>
	<form action="<?php echo $this->_vars['my_base_url'];  echo $this->_vars['my_pligg_base']; ?>
/admin/admin_links.php" method="get" class="form-search search-bar">
		<div class="col-md-3">
			<div class="input-append">
				<input type="hidden" name="mode" value="search">
				<?php if (isset ( $_GET['keyword'] ) && $_GET['keyword'] != ""): ?>
					<?php $this->assign('searchboxtext', $this->_run_modifier($_GET['keyword'], 'sanitize', 'plugin', 1, 2)); ?>
				<?php else: ?>
					<?php $this->assign('searchboxtext', $this->_confs['PLIGG_Visual_Search_SearchDefaultText']); ?>			
				<?php endif; ?>
				<input type="hidden" name="user" value="<?php echo $this->_run_modifier($_GET['user'], 'sanitize', 'plugin', 1, 2); ?>
">
				<input type="text" class="form-control search-query" name="keyword" placeholder="<?php echo $this->_vars['searchboxtext']; ?>
">
				<button type="submit" class="btn btn-primary search-button"><?php echo $this->_confs['PLIGG_Visual_Search_Go']; ?>
</button>
			</div>
		</div>
		<div class="col-md-3">
			<select name="filter" class="form-control" id="submission_filter" onchange="this.form.submit()">
				<option value="all" <?php if ($_GET['filter'] == "all"): ?> selected="selected" <?php endif; ?>><?php echo $this->_confs['PLIGG_Visual_AdminPanel_All']; ?>
</option>
				<option value="published" <?php if ($_GET['filter'] == "published"): ?> selected="selected" <?php endif; ?>><?php echo $this->_confs['PLIGG_Visual_AdminPanel_Published']; ?>
</option>
				<option value="new" <?php if ($_GET['filter'] == "new"): ?> selected="selected" <?php endif; ?>><?php echo $this->_confs['PLIGG_Visual_AdminPanel_New']; ?>
</option>
				<option value="discard" <?php if ($_GET['filter'] == "discard"): ?> selected="selected" <?php endif; ?>><?php echo $this->_confs['PLIGG_Visual_AdminPanel_Discarded']; ?>
</option>
				<option value="spam" <?php if ($_GET['filter'] == "spam"): ?> selected="selected" <?php endif; ?>><?php echo $this->_confs['PLIGG_Visual_AdminPanel_Spam']; ?>
</option>
				<option value="all">   ---   </option>
				<option value="today" <?php if ($_GET['filter'] == "today"): ?> selected="selected" <?php endif; ?>><?php echo $this->_confs['PLIGG_Visual_AdminPanel_Today']; ?>
</option>
				<option value="yesterday" <?php if ($_GET['filter'] == "yesterday"): ?> selected="selected" <?php endif; ?>><?php echo $this->_confs['PLIGG_Visual_AdminPanel_Yesterday']; ?>
</option>
				<option value="week" <?php if ($_GET['filter'] == "week"): ?> selected="selected" <?php endif; ?>><?php echo $this->_confs['PLIGG_Visual_AdminPanel_Week']; ?>
</option>
			</select>
		</div>
		<div class="col-md-3">
			<select name="pagesize" class="form-control" id="submission_sort" onchange="this.form.submit()">
				<option value="15" <?php if (isset ( $this->_vars['pagesize'] ) && $this->_vars['pagesize'] == 15): ?>selected<?php endif; ?>>Show 15</option>
				<option value="30" <?php if (isset ( $this->_vars['pagesize'] ) && $this->_vars['pagesize'] == 30): ?>selected<?php endif; ?>>Show 30</option>
				<option value="50" <?php if (isset ( $this->_vars['pagesize'] ) && $this->_vars['pagesize'] == 50): ?>selected<?php endif; ?>>Show 50</option>
				<option value="100" <?php if (isset ( $this->_vars['pagesize'] ) && $this->_vars['pagesize'] == 100): ?>selected<?php endif; ?>>Show 100</option>
				<option value="200" <?php if (isset ( $this->_vars['pagesize'] ) && $this->_vars['pagesize'] == 200): ?>selected<?php endif; ?>>Show 200</option>
			</select>
		</div>
	</form>
</div>

<form name="bulk_moderate" id="user_list_form" action="<?php echo $this->_vars['my_base_url'];  echo $this->_vars['my_pligg_base']; ?>
/admin/admin_links.php?action=bulkmod&page=<?php echo $this->_run_modifier($_GET['page'], 'sanitize', 'plugin', 1, 2); ?>
" method="post" onsubmit="return validate_all_user_action()">
	<input type="hidden" name="admin_acction"  value="" id="admin_action"/>
	<?php echo $this->_vars['hidden_token_admin_links_edit']; ?>

	<table class="table table-bordered table-condensed">
		<tr>
			<th style="text-align:center;vertical-align:middle;"><input type='checkbox' id="selectall_user_ed" name="all1"></th>
			<?php echo tpl_function_checkActionsTpl(array('location' => "tpl_pligg_admin_submissions_th_start"), $this);?>
			<th><?php echo $this->_confs['PLIGG_Visual_View_Links_Author']; ?>
</th>
			<th><?php echo $this->_confs['PLIGG_Visual_View_Links_New_Window']; ?>
</th>
			<th nowrap style="text-align:center;"><?php echo $this->_confs['PLIGG_Visual_AdminPanel_Group_Date']; ?>
</th>
			<th nowrap style="text-align:center;"><?php echo $this->_confs['PLIGG_Visual_View_Links_Status']; ?>
</th>
			<?php echo tpl_function_checkActionsTpl(array('location' => "tpl_pligg_admin_submissions_th_end"), $this);?>
		</tr>
		<?php if (isset($this->_sections['id'])) unset($this->_sections['id']);
$this->_sections['id']['name'] = 'id';
$this->_sections['id']['loop'] = is_array($this->_vars['template_stories']) ? count($this->_vars['template_stories']) : max(0, (int)$this->_vars['template_stories']);
$this->_sections['id']['show'] = true;
$this->_sections['id']['max'] = $this->_sections['id']['loop'];
$this->_sections['id']['step'] = 1;
$this->_sections['id']['start'] = $this->_sections['id']['step'] > 0 ? 0 : $this->_sections['id']['loop']-1;
if ($this->_sections['id']['show']) {
	$this->_sections['id']['total'] = $this->_sections['id']['loop'];
	if ($this->_sections['id']['total'] == 0)
		$this->_sections['id']['show'] = false;
} else
	$this->_sections['id']['total'] = 0;
if ($this->_sections['id']['show']):

		for ($this->_sections['id']['index'] = $this->_sections['id']['start'], $this->_sections['id']['iteration'] = 1;
			 $this->_sections['id']['iteration'] <= $this->_sections['id']['total'];
			 $this->_sections['id']['index'] += $this->_sections['id']['step'], $this->_sections['id']['iteration']++):
$this->_sections['id']['rownum'] = $this->_sections['id']['iteration'];
$this->_sections['id']['index_prev'] = $this->_sections['id']['index'] - $this->_sections['id']['step'];
$this->_sections['id']['index_next'] = $this->_sections['id']['index'] + $this->_sections['id']['step'];
$this->_sections['id']['first']	  = ($this->_sections['id']['iteration'] == 1);
$this->_sections['id']['last']	   = ($this->_sections['id']['iteration'] == $this->_sections['id']['total']);
?>
		<tr <?php if ($this->_vars['template_stories'][$this->_sections['id']['index']]['link_status'] == 'moderated'): ?>class="tr_moderated"<?php endif; ?>>
			<td style="text-align:center;vertical-align:middle;">
				<?php if ($this->_vars['userlist'][$this->_sections['nr']['index']]['user_level'] != 'admin'): ?>      
					<input type="checkbox" name="link[<?php echo $this->_vars['template_stories'][$this->_sections['id']['index']]['link_id']; ?>
]" class="enabled_disable"  value="1" usernameval="<?php echo $this->_vars['template_stories'][$this->_sections['id']['index']]['link_author']; ?>
"/>
				<?php endif; ?> 
			</td>
			<?php echo tpl_function_checkActionsTpl(array('location' => "tpl_pligg_admin_submissions_td_start"), $this);?>
			<td><a href="<?php echo $this->_vars['my_base_url'];  echo $this->_vars['my_pligg_base']; ?>
/admin/admin_users.php?mode=view&user=<?php echo $this->_vars['template_stories'][$this->_sections['id']['index']]['link_author']; ?>
" title="<?php echo $this->_vars['template_stories'][$this->_sections['id']['index']]['link_author']; ?>
's Articles" id="link-<?php echo $this->_vars['template_stories'][$this->_sections['id']['index']]['link_id']; ?>
-author"><?php echo $this->_vars['template_stories'][$this->_sections['id']['index']]['link_author']; ?>
</a></td>
			<td>
				<a href='<?php echo $this->_vars['my_pligg_base']; ?>
/editlink.php?id=<?php echo $this->_vars['template_stories'][$this->_sections['id']['index']]['link_id']; ?>
'><i class="fa fa-edit" title="<?php echo $this->_confs['PLIGG_Visual_AdminPanel_Page_Edit']; ?>
" alt="<?php echo $this->_confs['PLIGG_Visual_AdminPanel_Page_Edit']; ?>
"></i></a>
				<a href="<?php echo $this->_vars['my_base_url'];  echo $this->_vars['my_pligg_base']; ?>
/story.php?title=<?php echo $this->_vars['template_stories'][$this->_sections['id']['index']]['link_title_url']; ?>
" title="<?php echo $this->_run_modifier($this->_vars['template_stories'][$this->_sections['id']['index']]['link_title'], 'truncate', 'plugin', 1, 50, "...", true); ?>
" ><?php echo $this->_vars['template_stories'][$this->_sections['id']['index']]['link_title']; ?>
</a>
			</td>
			<td style="text-align:center;vertical-align:middle;"><?php echo $this->_vars['template_stories'][$this->_sections['id']['index']]['link_date']; ?>
</td>
			<td style="text-align:center;vertical-align:middle;">
				<?php if ($this->_vars['template_stories'][$this->_sections['id']['index']]['link_status'] == 'new'): ?> 
					<?php echo $this->_confs['PLIGG_Visual_AdminPanel_New']; ?>

				<?php elseif ($this->_vars['template_stories'][$this->_sections['id']['index']]['link_status'] == 'published'): ?>
					<?php echo $this->_confs['PLIGG_Visual_AdminPanel_Published']; ?>

				<?php elseif ($this->_vars['template_stories'][$this->_sections['id']['index']]['link_status'] == 'discard'): ?>
					<?php echo $this->_confs['PLIGG_Visual_AdminPanel_Discarded']; ?>

				<?php elseif ($this->_vars['template_stories'][$this->_sections['id']['index']]['link_status'] == 'spam'): ?> 
					<?php echo $this->_confs['PLIGG_Visual_AdminPanel_Spam']; ?>

				<?php endif; ?>
			</td>
			<?php echo tpl_function_checkActionsTpl(array('location' => "tpl_pligg_admin_submissions_td_end"), $this);?>
		</tr>	
		<?php endfor; endif; ?>
	</table>
	<div style="clear:both;"> </div>
</form>
<div style="float:right;margin-top:6px;">
	<a data-toggle="modal" href="<?php echo $this->_vars['my_base_url'];  echo $this->_vars['my_pligg_base']; ?>
/admin/admin_delete_stories.php" class="btn btn-danger"><i class="fa fa-trash-o fa-white"></i> <?php echo $this->_confs['PLIGG_Visual_AdminPanel_Delete_Stories']; ?>
</a>
</div>
<div style="clear:both;"> </div>
<SCRIPT>
var confirmation = "<?php echo $this->_confs['PLIGG_Visual_AdminPanel_Confirm_Killspam']; ?>
\n";
<?php echo '
function mark_all_publish() {
	document.bulk_moderate.all1.checked=1;
	document.bulk_moderate.all2.checked=0;
	document.bulk_moderate.all3.checked=0;
	document.bulk_moderate.all4.checked=0;
	for (var i=0; i< document.bulk_moderate.length; i++) {
		if (document.bulk_moderate[i].value == "published") {
			document.bulk_moderate[i].checked = true;
		}
	}
}
function mark_all_discard() {
	document.bulk_moderate.all1.checked=0;
	document.bulk_moderate.all2.checked=0;
	document.bulk_moderate.all3.checked=0;
	document.bulk_moderate.all4.checked=1;
	for (var i=0; i< document.bulk_moderate.length; i++) {
		if (document.bulk_moderate[i].value == "discard") {
			document.bulk_moderate[i].checked = true;
		}
	}
}
function mark_all_new() {
	document.bulk_moderate.all1.checked=0;
	document.bulk_moderate.all2.checked=1;
	document.bulk_moderate.all3.checked=0;
	document.bulk_moderate.all4.checked=0;
	for (var i=0; i< document.bulk_moderate.length; i++) {
		if (document.bulk_moderate[i].value == "new") {
			document.bulk_moderate[i].checked = true;
		}
	}
}
function mark_all_spam() {
	document.bulk_moderate.all1.checked=0;
	document.bulk_moderate.all2.checked=0;
	document.bulk_moderate.all3.checked=1;
	document.bulk_moderate.all4.checked=0;
	for (var i=0; i< document.bulk_moderate.length; i++) {
		if (document.bulk_moderate[i].value == "spam") {
			document.bulk_moderate[i].checked = true;
		}
	}
}
function uncheck_all() {
	document.bulk_moderate.all1.checked=0;
	document.bulk_moderate.all2.checked=0;
	document.bulk_moderate.all3.checked=0;
	document.bulk_moderate.all4.checked=0;
	for (var i=0; i< document.bulk_moderate.length; i++) {
		if ((document.bulk_moderate[i].value == "new")||(document.bulk_moderate[i].value == "discard")||(document.bulk_moderate[i].value == "spam")|| (document.bulk_moderate[i].value == "published")){
			document.bulk_moderate[i].checked = false;
		}
	}
}
function confirm_spam() {
    var checks = document.getElementsByTagName(\'INPUT\');
    var authors = new Array();
    for (var i=0; i<checks.length; i++)
     	if (checks[i].type=="radio" && checks[i].checked && checks[i].value=="spam")
        {
            old = document.getElementById(checks[i].id+\'-old\');
            if (old.value!=\'spam\')
            {
                author = document.getElementById(checks[i].id+\'-author\');
                authors[author.innerHTML] = 1;
            }
        }

    var message = "";
    for (name in authors)
	if (authors[name]==1)
            message += name+"\\n";
    if (message.length > 0)
        	return confirm(confirmation+message);
    return 1;
}
</SCRIPT>
'; ?>

<!--/submissions.tpl -->