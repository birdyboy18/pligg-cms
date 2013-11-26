<?php require_once('/Applications/MAMP/htdocs/pligg/plugins/modifier.truncate.php'); $this->register_modifier("truncate", "tpl_modifier_truncate");  require_once('/Applications/MAMP/htdocs/pligg/plugins/function.checkActionsTpl.php'); $this->register_function("checkActionsTpl", "tpl_function_checkActionsTpl");  require_once('/Applications/MAMP/htdocs/pligg/plugins/modifier.sanitize.php'); $this->register_modifier("sanitize", "tpl_modifier_sanitize");  /* V2.20 Template Lite, 8 March 2008. (c) Mark Dickenson, Jon Langevin. GNU LGPL. 2013-11-24 04:16:36 CET */ ?>

<!-- users.tpl -->
<?php echo '

<script type="text/javascript">
	$(function () {
		$("[rel=\'tooltip\']").tooltip();
	});
</script>

<script type="text/javascript" language="javascript">
function submit_list_form(){
	
	if($(".enabled_disable:checked").length==0) {
		alert("Please select users");
		return false;
	}
	
	val_action=$("#admin_action").val();
	
	if(val_action==3){
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
	if(acc==1){
		$("#selected_action").addClass("fa fa-check-square-o");
		$("#selected_action").removeClass("fa fa-ban");
		$("#selected_action").removeClass("fa fa-fa-square-o");
		$("#admin_action").val(1);
	}
	if(acc==2){
		$("#selected_action").addClass("fa fa-fa-square-o");
		$("#selected_action").removeClass("fa fa-check-square-o");
		$("#selected_action").removeClass("fa fa-ban");
		$("#admin_action").val(2);
	}
	if(acc==3){
		$("#selected_action").addClass("fa fa-ban");
		$("#selected_action").removeClass("fa fa-fa-square-o");
		$("#selected_action").removeClass("fa fa-check-square-o");
		$("#admin_action").val(3);
	}
	submit_list_form(); 
}

function validate_all_user_action(){
	if($("#admin_action").val()==""){
		alert("select user list");
		return false;
	}
}
</script>
'; ?>

<legend><?php echo $this->_confs['PLIGG_Visual_AdminPanel_User_Manage']; ?>
</legend>
<?php if ($this->_vars['moderated_users_count'] != "0"): ?>
	<div class="alert alert-warning">
		There <?php if ($this->_vars['moderated_users_count'] == "1"): ?>is<?php else: ?>are<?php endif; ?> <strong><?php echo $this->_vars['moderated_users_count']; ?>
 <?php if ($this->_vars['moderated_users_count'] == "1"): ?>user<?php else: ?>users<?php endif; ?></strong> awaiting moderation.<br />
		<a href="admin_users.php?filter=disabled">Click here to review the <?php if ($this->_vars['moderated_users_count'] == "1"): ?>acccount<?php else: ?>accounts<?php endif; ?>.</a>
	</div>
<?php endif; ?>

<form action="<?php echo $this->_vars['my_base_url'];  echo $this->_vars['my_pligg_base']; ?>
/admin/admin_users.php" method="get" >
	<div class="row management-tools">
		<div class="col-md-3">
			<div class="btn-group pull">
				<a class="btn btn-default dropdown-toggle" href="#" data-toggle="dropdown">
					<i id="selected_action"></i>
					<?php echo $this->_confs['PLIGG_Visual_AdminPanel_Apply_Changes']; ?>

					<span class="caret"></span>
				</a>
				<ul class="dropdown-menu">
					<li>
						<a onclick="set_admin_action('1')" href="#">
							<i class="fa fa-check-square-o"></i>
							<?php echo $this->_confs['PLIGG_Visual_User_Profile_Enabled']; ?>

						</a>
					</li>
					<li>
						<a onclick="set_admin_action('2')" href="#">
							<i class="fa fa-square-o"></i>
							<?php echo $this->_confs['PLIGG_Visual_User_Profile_Disabled']; ?>

						</a>
					</li>
					<li>
						<a onclick="set_admin_action('3')" href="#">
							<i class="fa fa-ban"></i>
							<?php echo $this->_confs['PLIGG_Visual_KillSpam']; ?>

						</a>
					</li>
				</ul>
			</div>
		</div>
		<div class="col-md-3">
			<div class="input-append">
				<input type="hidden" name="mode" value="search">
				<?php if (isset ( $_GET['keyword'] ) && $_GET['keyword'] != ""): ?>
					<?php $this->assign('searchboxtext', $this->_run_modifier($_GET['keyword'], 'sanitize', 'plugin', 1, 2)); ?>
				<?php else: ?>
					<?php $this->assign('searchboxtext', $this->_confs['PLIGG_Visual_Search_SearchDefaultText']); ?>			
				<?php endif; ?>
				<input type="text" class="form-control search-query" name="keyword" placeholder="<?php echo $this->_vars['searchboxtext']; ?>
">
				<button type="submit" class="btn btn-primary"><?php echo $this->_confs['PLIGG_Visual_Search_Go']; ?>
</button>
			</div>
		</div>			
		<div class="col-md-3">
			<select name="filter" class="form-control" id="user_filter" onchange="this.form.submit()">
				<option value=""> -- User Level -- </option>
				<option value="admin" <?php if ($_GET['filter'] == "admin"): ?> selected="selected" <?php endif; ?>>Admin</option>
				<option value="moderator" <?php if ($_GET['filter'] == "moderator"): ?> selected="selected" <?php endif; ?>>Moderator</option>
				<option value="normal" <?php if ($_GET['filter'] == "normal"): ?> selected="selected" <?php endif; ?>>Normal</option>
				<option value="spammer" <?php if ($_GET['filter'] == "spammer"): ?> selected="selected" <?php endif; ?>>Spammer</option>
			</select>
		</div>
		<div class="col-md-3">
			<select name="pagesize" class="form-control" id="user_sort" onchange="this.form.submit()">
				<option value="15" <?php if (isset ( $this->_vars['pagesize'] ) && $this->_vars['pagesize'] == 15): ?>selected<?php endif; ?>>Show 15</option>
				<option value="30" <?php if (isset ( $this->_vars['pagesize'] ) && $this->_vars['pagesize'] == 30): ?>selected<?php endif; ?>>Show 30</option>
				<option value="50" <?php if (isset ( $this->_vars['pagesize'] ) && $this->_vars['pagesize'] == 50): ?>selected<?php endif; ?>>Show 50</option>
				<option value="100" <?php if (isset ( $this->_vars['pagesize'] ) && $this->_vars['pagesize'] == 100): ?>selected<?php endif; ?>>Show 100</option>
				<option value="200" <?php if (isset ( $this->_vars['pagesize'] ) && $this->_vars['pagesize'] == 200): ?>selected<?php endif; ?>>Show 200</option>
			</select>
		</div>
	</div>
</form>

<?php if (isset ( $this->_vars['usererror'] )): ?>
	<span class="error"><?php echo $this->_vars['usererror']; ?>
</span><br/>
<?php endif; ?>
<form name="user_list_form" id="user_list_form" action="<?php echo $this->_vars['my_base_url'];  echo $this->_vars['my_pligg_base']; ?>
/admin/admin_users.php" method="post" onsubmit="return validate_all_user_action()">
	<input type="hidden" name="frmsubmit" value="userlist" />	
	<input type="hidden" name="admin_acction"  value="" id="admin_action"/>
	<?php echo $this->_vars['hidden_token_admin_users_list']; ?>

	<table class="table table-bordered table-bordered table-condensed tablesorter" id="tablesorter-userTable">
		<thead>
			<tr>
				<th style="text-align:center;vertical-align:middle;"><input type='checkbox' id="selectall_user_ed" name="all1"></th>
				<?php echo tpl_function_checkActionsTpl(array('location' => "tpl_pligg_admin_users_th_start"), $this);?>
				<th style="min-width:50px;text-align:center;">ID</th>
				<th style="min-width:95px;"><?php echo $this->_confs['PLIGG_Visual_Login_Username']; ?>
</th>
				<th style="min-width:75px;text-align:center;"><?php echo $this->_confs['PLIGG_Visual_View_User_Level']; ?>
</th>
				<th><?php echo $this->_confs['PLIGG_Visual_View_User_Email']; ?>
</th>
				<th style="min-width:85px"><?php echo $this->_confs['PLIGG_Visual_User_Profile_Joined']; ?>
</th>
				<th style="min-width:50px;text-align:center;">Status</th>
				<?php echo tpl_function_checkActionsTpl(array('location' => "tpl_pligg_admin_users_th_end"), $this);?>
			</tr>
		</thead>
		<tbody>
			<?php if (isset($this->_sections['nr'])) unset($this->_sections['nr']);
$this->_sections['nr']['name'] = 'nr';
$this->_sections['nr']['loop'] = is_array($this->_vars['userlist']) ? count($this->_vars['userlist']) : max(0, (int)$this->_vars['userlist']);
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
				
				<tr class="<?php if ($this->_vars['userlist'][$this->_sections['nr']['index']]['user_enabled'] == '0'): ?>tr_moderated <?php endif; ?>">
					<td style="text-align:center;vertical-align:middle;">
						<?php if ($this->_vars['userlist'][$this->_sections['nr']['index']]['user_level'] != 'admin'): ?>      
							<input type="checkbox" name="enabled[<?php echo $this->_vars['userlist'][$this->_sections['nr']['index']]['user_id']; ?>
]" class="enabled_disable"  value="1" usernameval="<?php echo $this->_vars['userlist'][$this->_sections['nr']['index']]['user_login']; ?>
"/>
						<?php endif; ?> 
					</td>
					<?php echo tpl_function_checkActionsTpl(array('location' => "tpl_pligg_admin_users_td_start"), $this);?>
					<td style="text-align:center;vertical-align:middle;"><?php echo $this->_vars['userlist'][$this->_sections['nr']['index']]['user_id']; ?>
</td>
					<td style="vertical-align:middle;"><img src="<?php echo $this->_vars['userlist'][$this->_sections['nr']['index']]['Avatar']; ?>
" style="height:18px;width:18px;" /> <a href = "?mode=view&user=<?php echo $this->_vars['userlist'][$this->_sections['nr']['index']]['user_id']; ?>
"><?php echo $this->_vars['userlist'][$this->_sections['nr']['index']]['user_login']; ?>
</a></td>	
					<td style="text-align:center;vertical-align:middle;"><?php echo $this->_vars['userlist'][$this->_sections['nr']['index']]['user_level']; ?>
</td>
					<td style="vertical-align:middle;">
						<?php if ($this->_vars['userlist'][$this->_sections['nr']['index']]['user_lastlogin'] != "0000-00-00 00:00:00"): ?>
							<i class="fa fa-ok confirmed-email" title="<?php echo $this->_confs['PLIGG_Visual_AdminPanel_Confirmed_Email']; ?>
" alt="<?php echo $this->_confs['PLIGG_Visual_AdminPanel_Confirmed_Email']; ?>
"></i>
						<?php else: ?>
							<a data-toggle="modal" href="<?php echo $this->_vars['my_base_url'];  echo $this->_vars['my_pligg_base']; ?>
/admin/admin_user_validate.php?id=<?php echo $this->_vars['userlist'][$this->_sections['nr']['index']]['user_id']; ?>
" title="<?php echo $this->_confs['PLIGG_Visual_AdminPanel_Unconfirmed_Email']; ?>
"><i class="fa fa-warning-sign unconfirmed-email" rel="tooltip" data-placement="left" data-toggle="tooltip" data-original-title="<?php echo $this->_confs['PLIGG_Visual_AdminPanel_Unconfirmed_Email']; ?>
"></i></a>
						<?php endif; ?>
						<a href="mailto:<?php echo $this->_vars['userlist'][$this->_sections['nr']['index']]['user_email']; ?>
" target="_blank"><?php echo $this->_run_modifier($this->_vars['userlist'][$this->_sections['nr']['index']]['user_email'], 'truncate', 'plugin', 1, 25, "...", true); ?>
</a>
					</td>
					<td><?php echo $this->_vars['userlist'][$this->_sections['nr']['index']]['user_date']; ?>
</td>
					<td style="text-align:center;vertical-align:middle;">
						<?php if ($this->_vars['userlist'][$this->_sections['nr']['index']]['user_level'] == 'Spammer'): ?>
							<i class="fa fa-ban" title="<?php echo $this->_confs['PLIGG_Visual_AdminPanel_Spam']; ?>
"></i> <?php echo $this->_confs['PLIGG_Visual_AdminPanel_Spam']; ?>

						<?php elseif ($this->_vars['userlist'][$this->_sections['nr']['index']]['user_enabled'] == 1): ?>
							<i class="fa fa-check-square-o" title="<?php echo $this->_confs['PLIGG_Visual_User_Profile_Enabled']; ?>
"></i> <?php echo $this->_confs['PLIGG_Visual_User_Profile_Enabled']; ?>

						<?php else: ?>
							<i class="fa fa-square-o" title="<?php echo $this->_confs['PLIGG_Visual_User_Profile_Disabled']; ?>
"></i> <?php echo $this->_confs['PLIGG_Visual_User_Profile_Disabled']; ?>

						<?php endif; ?>
					</td>
					<?php echo tpl_function_checkActionsTpl(array('location' => "tpl_pligg_admin_users_td_end"), $this);?>
				</tr>
			<?php endfor; endif; ?>
		</tbody>
	</table>
</form>
<?php $_templatelite_tpl_vars = $this->_vars;
echo $this->_fetch_compile_include("/admin/user_create.tpl", array());
$this->_vars = $_templatelite_tpl_vars;
unset($_templatelite_tpl_vars);
 ?>
<div style="float:right;margin:8px 2px 0 0;">
	<a class="btn btn-success"  href="#createUserForm-modal" data-toggle="modal" title="<?php echo $this->_confs['PLIGG_Visual_AdminPanel_New_User']; ?>
"><?php echo $this->_confs['PLIGG_Visual_AdminPanel_New_User']; ?>
</a>
</div>
<div style="clear:both;"></div>

<SCRIPT>
<?php echo '
function check_all(elem) {
	for (var i=0; i< document.bulk.length; i++) 
		if (document.bulk[i].id == "killspam")
			document.bulk[i].checked = elem.checked;
}
'; ?>

</SCRIPT>
<!--/users.tpl -->