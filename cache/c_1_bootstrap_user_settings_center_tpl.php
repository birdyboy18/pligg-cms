<?php require_once('/Applications/MAMP/htdocs/pligg/plugins/modifier.capitalize.php'); $this->register_modifier("capitalize", "tpl_modifier_capitalize");  require_once('/Applications/MAMP/htdocs/pligg/plugins/function.checkActionsTpl.php'); $this->register_function("checkActionsTpl", "tpl_function_checkActionsTpl");  /* V2.20 Template Lite, 8 March 2008. (c) Mark Dickenson, Jon Langevin. GNU LGPL. 2013-11-24 04:36:16 CET */ ?>


<?php $_templatelite_tpl_vars = $this->_vars;
echo $this->_fetch_compile_include($this->_vars['the_template']."/user_navigation.tpl", array());
$this->_vars = $_templatelite_tpl_vars;
unset($_templatelite_tpl_vars);
 ?>

<!-- user_settings_center.tpl -->

<?php if ($this->_vars['savemsg'] != ""): ?><div class="alert alert-warning fade in"><a data-dismiss="alert" class="close">&times;</a><?php echo $this->_vars['savemsg']; ?>
</div><?php endif; ?> 
<?php echo tpl_function_checkActionsTpl(array('location' => "tpl_pligg_profile_info_start"), $this);?>
<form action="" method="post" id="thisform" role="form">
	<div id="profile_container" class="js-masonry">
		<?php echo tpl_function_checkActionsTpl(array('location' => "tpl_user_edit_fields"), $this);?>
		<?php echo tpl_function_checkActionsTpl(array('location' => "tpl_pligg_profile_info_middle"), $this);?>
		<div class="col-md-4 masonry_wrapper">
			<table class="table table-bordered table-striped">
				<thead class="table_title">
					<tr>
						<th colspan="2"><?php echo $this->_confs['PLIGG_Visual_Profile_ModifyProfile']; ?>
</th>
					</tr>
				</thead>
				<tbody>
					<?php if ($this->_vars['userlevel'] == 'admin' || $this->_vars['userlevel'] == 'moderator'): ?>
						<tr>
							<td><label for="user_login" accesskey="1"><?php echo $this->_confs['PLIGG_Visual_Register_Username']; ?>
:</label></td>
							<td><input type="text" class="form-control" name="user_login" id="names" tabindex="1" value="<?php echo $this->_vars['user_login']; ?>
"></td>
						</tr>
					<?php endif; ?>
					<tr>
						<td><label for="name" accesskey="1"><?php echo $this->_confs['PLIGG_Visual_Profile_Email']; ?>
:</label></td>
						<td><input type="text" class="form-control" name="email" id="email" tabindex="3" value="<?php echo $this->_vars['user_email']; ?>
">
							<br /><div class="help-inline"><?php echo $this->_confs['PLIGG_Visual_Profile_OnlyAdmins']; ?>
</div></td>
					</tr>
					<tr>
						<td><label for="name" accesskey="1"><?php echo $this->_confs['PLIGG_Visual_User_Profile_PublicEmail']; ?>
:</label></td>
						<td><input type="text" class="form-control" name="public_email" id="public_email" tabindex="5" value="<?php echo $this->_vars['user_publicemail']; ?>
"></td>
					</tr>
					<tr>
						<td><label for="name" accesskey="1"><?php echo $this->_confs['PLIGG_Visual_User_Profile_Homepage']; ?>
:</label></td>
						<td><input type="text" class="form-control" name="url" id="url" tabindex="7" value="<?php echo $this->_vars['user_url']; ?>
"></td>
					</tr>
					<tr>
						<td><label for="name" accesskey="1"><?php echo $this->_confs['PLIGG_Visual_Profile_RealName']; ?>
:</label></td>
						<td><input type="text" class="form-control" name="names" id="names" tabindex="1" value="<?php echo $this->_vars['user_names']; ?>
"></td>
					</tr>
					<tr>
						<td><label for="name" accesskey="1"><?php echo $this->_confs['PLIGG_Visual_Profile_Occupation']; ?>
:</label></td>
						<td><input type="text" class="form-control" name="occupation" id="occupation" tabindex="11" value="<?php echo $this->_vars['user_occupation']; ?>
"></td>
					</tr>
					<tr>
						<td><label for="name" accesskey="1"><?php echo $this->_confs['PLIGG_Visual_Profile_Location']; ?>
:</label></td>
						<td><input type="text" class="form-control" name="location" id="location" tabindex="9" value="<?php echo $this->_vars['user_location']; ?>
"></td>
					</tr>
				</tbody>
			</table>
		</div>
		<div class="col-md-4 masonry_wrapper">
			<table class="table table-bordered table-striped">	
				<thead class="table_title">
					<tr>
						<th colspan="2"><?php echo $this->_confs['PLIGG_User_Profile_Social']; ?>
</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td><label for="name" accesskey="1"><?php echo $this->_confs['PLIGG_Visual_User_Profile_Skype']; ?>
:</label></td>
						<td><input type="text" class="form-control" name="skype" id="skype" tabindex="10" value="<?php echo $this->_vars['user_skype']; ?>
"></td>
					</tr>
					
					<tr>
						<td><label for="name" accesskey="1"><?php echo $this->_confs['PLIGG_User_Profile_Facebook']; ?>
:</label></td>
						<td><input type="text" class="form-control" name="facebook" id="facebook" tabindex="2" value="<?php echo $this->_vars['user_facebook']; ?>
"></td>
					</tr>
					<tr>
						<td><label for="name" accesskey="1"><?php echo $this->_confs['PLIGG_User_Profile_Twitter']; ?>
:</label></td>
						<td><input type="text" class="form-control" name="twitter" id="twitter" tabindex="4" value="<?php echo $this->_vars['user_twitter']; ?>
"></td>
					</tr>
					<tr>
						<td><label for="name" accesskey="1"><?php echo $this->_confs['PLIGG_User_Profile_Linkedin']; ?>
:</label></td>
						<td><input type="text" class="form-control" name="linkedin" id="linkedin" tabindex="6" value="<?php echo $this->_vars['user_linkedin']; ?>
"></td>
					</tr>
					<tr>
						<td><label for="name" accesskey="1"><?php echo $this->_confs['PLIGG_User_Profile_Googleplus']; ?>
:</label></td>
						<td><input type="text" class="form-control" name="googleplus" id="googleplus" tabindex="8" value="<?php echo $this->_vars['user_googleplus']; ?>
"></td>
					</tr>
					<tr>
						<td><label for="name" accesskey="1"><?php echo $this->_confs['PLIGG_User_Profile_Pinterest']; ?>
:</label></td>
						<td><input type="text" class="form-control" name="pinterest" id="pinterest" tabindex="12" value="<?php echo $this->_vars['user_pinterest']; ?>
"></td>	
					</tr>
				</tbody>
			</table>
		</div>
		<?php echo tpl_function_checkActionsTpl(array('location' => "tpl_pligg_profile_settings_start"), $this);?>		
		<div class="col-md-4 masonry_wrapper">
			<table class="table table-bordered table-striped">
				<thead class="table_title">
					<tr>
						<th colspan="2"><?php echo $this->_confs['PLIGG_User_Display_Settings']; ?>
</th>
					</tr>
				</thead>
				<tbody>
					<?php 
					if (user_language)
					{
					 ?>
						
							<tr>
								<td><label for="name" accesskey="1"><?php echo $this->_confs['PLIGG_Visual_User_Profile_Language']; ?>
:</label></td>
								<td><select name='language' class="site_languages" >
										<?php if (count((array)$this->_vars['languages'])):  foreach ((array)$this->_vars['languages'] as $this->_vars['lang']): ?>
											<option <?php if ($this->_vars['lang'] == $this->_vars['user_language']): ?>selected<?php endif; ?>><?php echo $this->_vars['lang']; ?>
</option>
										<?php endforeach; endif; ?>
									</select>
								</td>
							</tr>
						
					<?php 
					}
					 ?>
					<?php if ($this->_vars['Allow_User_Change_Templates']): ?>
						<?php if (count ( $this->_vars['templates'] ) > 1): ?>
							<tr>
								<td><label><?php echo $this->_confs['PLIGG_Visual_User_Setting_Template']; ?>
:</label></td>
								<td><select name='template'>
								<?php if (count((array)$this->_vars['templates'])):  foreach ((array)$this->_vars['templates'] as $this->_vars['template']): ?>
									<option <?php if ($this->_vars['template'] == $this->_vars['current_template']): ?>selected<?php endif; ?>><?php echo $this->_run_modifier($this->_vars['template'], 'capitalize', 'plugin', 1); ?>
</option>
								<?php endforeach; endif; ?>
								</select>
								</td>
							</tr>
						<?php endif; ?>
					<?php endif; ?>
					<tr>
						<td><label><?php echo $this->_confs['PLIGG_Visual_User_Setting_Categories']; ?>
:</label></td>
						<td>
						<?php if (count((array)$this->_vars['category'])):  $this->_templatelite_vars['foreach'][cate]['iteration'] = 0;  foreach ((array)$this->_vars['category'] as $this->_vars['cat']):  $this->_templatelite_vars['foreach'][cate]['iteration']++; ?>
							<input type="checkbox" name="chack[]" value="<?php echo $this->_vars['cat']['category__auto_id']; ?>
" <?php if (! in_array ( $this->_vars['cat']['category__auto_id'] , $this->_vars['user_category'] )): ?> checked="checked"<?php endif; ?>>
							<?php echo $this->_vars['cat']['category_name']; ?>
<br/>
						<?php endforeach; endif; ?>
						</td>
					</tr>
				</tbody>
			</table>
		</div>
		<?php echo tpl_function_checkActionsTpl(array('location' => "tpl_pligg_profile_settings_end"), $this);?>
		<div class="col-md-4 masonry_wrapper">
			<table class="table table-bordered table-striped">
				<thead class="table_title">
					<tr>
						<th colspan="2"><?php echo $this->_confs['PLIGG_Visual_Profile_ChangePass']; ?>
</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td><label><?php echo $this->_confs['PLIGG_Visual_Profile_OldPass']; ?>
:</label></td>
						<td><input type="password" class="form-control" id="oldpassword" name="oldpassword" size="25" tabindex="13"/></td>
					</tr>
					<tr>
						<td><label><?php echo $this->_confs['PLIGG_Visual_Profile_NewPass']; ?>
:</label></td>
						<td><input type="password" class="form-control" id="newpassword" name="newpassword" size="25" tabindex="14"/></td>
					</tr>
					<tr>
						<td><label><?php echo $this->_confs['PLIGG_Visual_Profile_VerifyNewPass']; ?>
:</label></td>
						<td><input type="password" class="form-control" id="verify" name="newpassword2" size="25" tabindex="15"/></td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>
	<div style="clear:both;"></div>
	<div class="form-actions">
		<?php echo $this->_vars['hidden_token_profile_change']; ?>

		<input type="hidden" name="process" value="1">
		<input type="hidden" name="user_id" value="<?php echo $this->_vars['user_id']; ?>
">	
		<input type="submit" name="save_profile" value="<?php echo $this->_confs['PLIGG_Visual_Profile_Save']; ?>
" class="btn btn-primary btn-lg profile_settings_save" tabindex="16">
	</div>
</form>
<?php echo tpl_function_checkActionsTpl(array('location' => "tpl_pligg_profile_end"), $this);?>
<!--/user_settings_center.tpl -->