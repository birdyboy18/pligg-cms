<?php require_once('/Applications/MAMP/htdocs/pligg/plugins/modifier.capitalize.php'); $this->register_modifier("capitalize", "tpl_modifier_capitalize");  require_once('/Applications/MAMP/htdocs/pligg/plugins/function.checkActionsTpl.php'); $this->register_function("checkActionsTpl", "tpl_function_checkActionsTpl");  /* V2.20 Template Lite, 8 March 2008. (c) Mark Dickenson, Jon Langevin. GNU LGPL. 2013-11-24 04:35:51 CET */ ?>


<?php $_templatelite_tpl_vars = $this->_vars;
echo $this->_fetch_compile_include($this->_vars['the_template']."/user_navigation.tpl", array());
$this->_vars = $_templatelite_tpl_vars;
unset($_templatelite_tpl_vars);
 ?>

<!-- user_history_center.tpl -->

<?php if ($this->_vars['user_view'] == 'profile'): ?>
	<div id="profile_container" style="position: relative;">
		<div class="row">
			<?php echo tpl_function_checkActionsTpl(array('location' => "tpl_pligg_profile_info_start"), $this);?>
			<?php echo tpl_function_checkActionsTpl(array('location' => "tpl_pligg_profile_info_middle"), $this);?>
			<div id="stats" class="col-md-6">
				<table class="table table-bordered table-striped">
					<thead class="table_title">
						<tr>
							<th colspan="2"><?php echo $this->_confs['PLIGG_Visual_User_Profile_User_Stats']; ?>
</th>
						</tr>
					</thead>
					<tbody>
						<?php if ($this->_vars['user_karma'] > "0.00"): ?>
							<tr>
								<td><strong><?php echo $this->_confs['PLIGG_Visual_Rank']; ?>
:</strong></td>
								<td><?php echo $this->_vars['user_rank']; ?>
</td>
							</tr>
							<tr>
								<td><strong><?php echo $this->_confs['PLIGG_Visual_User_Profile_KarmaPoints']; ?>
:</strong></td>
								<td><?php echo $this->_run_modifier($this->_vars['user_karma'], 'number_format', 'PHP', 1, "0"); ?>
</td>
							</tr>
						<?php endif; ?>
						<tr>
							<td><strong><?php echo $this->_confs['PLIGG_Visual_User_Profile_Joined']; ?>
:</strong></td>
							<td width="120px">
								
								<?php 
									$pligg_date = $this->_vars['user_joined'];
									echo date("F d, Y", strtotime($pligg_date));
								 ?>
							</td>	
						</tr>
						<tr>
							<td><strong><?php echo $this->_confs['PLIGG_Visual_User_Profile_Total_Links']; ?>
:</strong></td>
							<td><?php echo $this->_vars['user_total_links']; ?>
</td>
						</tr>
						<tr>
							<td><strong><?php echo $this->_confs['PLIGG_Visual_User_Profile_Published_Links']; ?>
:</strong></td>
							<td><?php echo $this->_vars['user_published_links']; ?>
</td>
						</tr>
						<tr>
							<td><strong><?php echo $this->_confs['PLIGG_Visual_User_Profile_Total_Comments']; ?>
:</strong></td>
							<td><?php echo $this->_vars['user_total_comments']; ?>
</td>
						</tr>
						<tr>
							<td><strong><?php echo $this->_confs['PLIGG_Visual_User_Profile_Total_Votes']; ?>
:</strong></td>
							<td><?php echo $this->_vars['user_total_votes']; ?>
</td>
						</tr>
						
					</tbody>
				</table>
			</div>
			<?php if ($this->_vars['enable_group'] == "true"): ?>
				<div id="groups" class="col-md-6">
					<table class="table table-bordered table-striped">
						<thead class="table_title">
							<tr>
								<th>Group Name</th>
								<th style="width:60px;text-align:center;">Members</th>
							</tr>
						<tbody>
							<?php if ($this->_vars['group_display'] == ''): ?>
								<tr>
									<td colspan="2">
										<?php echo $this->_confs['Pligg_Profile_No_Membership']; ?>

									</td>
								</tr>
							<?php else: ?>
								<?php echo $this->_vars['group_display']; ?>

							<?php endif; ?>
						</tbody>
					</table>
				</div>
			<?php endif; ?>
			<?php if ($this->_vars['Allow_Friends'] != "0"): ?>
				<div id="following" class="col-md-6">
					<table class="table table-bordered table-striped">
						<thead class="table_title">
							<tr>
								<th><?php echo $this->_confs['PLIGG_Visual_Login_Username']; ?>
</th>
								<?php echo tpl_function_checkActionsTpl(array('location' => "tpl_pligg_profile_friend_th"), $this);?>
								<?php if ($this->_vars['user_login'] == $this->_vars['user_logged_in']): ?><th><?php echo $this->_confs['PLIGG_Visual_User_Profile_Remove_Friend']; ?>
</th><?php endif; ?>
							</tr>
						</thead>
						<tbody>
							<?php if ($this->_vars['following']): ?>
								<?php if (count((array)$this->_vars['following'])):  foreach ((array)$this->_vars['following'] as $this->_vars['myfriend']): ?>
									<?php 
										$this->_vars['friend_avatar'] = get_avatar('small', $this->_vars['myfriend']['user_avatar_source'], $this->_vars['myfriend']['user_login'], $this->_vars['myfriend']['user_email']);
										$this->_vars['profileURL'] = getmyurl('user2', $this->_vars['myfriend']['user_login'], 'profile');
										$this->_vars['removeURL'] = getmyurl('user_add_remove', $this->_vars['myfriend']['user_login'], 'removefriend');
									 ?>
									<tr>
										<td>
											<a href="<?php echo $this->_vars['profileURL']; ?>
"><img src="<?php echo $this->_vars['friend_avatar']; ?>
" style="text-decoration:none;border:0;"/></a>
											<a href="<?php echo $this->_vars['profileURL']; ?>
"><?php echo $this->_vars['myfriend']['user_login']; ?>
</a>
										</td>
										<?php echo tpl_function_checkActionsTpl(array('location' => "tpl_pligg_profile_friend_td"), $this);?>
										<?php if ($this->_vars['user_login'] == $this->_vars['user_logged_in']): ?>
											<td>
												<a class="btn btn-danger" href="<?php echo $this->_vars['removeURL']; ?>
">Unfollow</a>
											</td>
										<?php endif; ?>
									</tr>
								<?php endforeach; endif; ?>
							<?php else: ?>
								<tr>
									<td colspan="3">
										<?php echo $this->_run_modifier($this->_vars['user_username'], 'capitalize', 'plugin', 1); ?>
 <?php echo $this->_confs['PLIGG_Visual_User_Profile_No_Friends']; ?>

									</td>
								</tr>
							<?php endif; ?>
						</tbody>
					</table>
				</div>
			<?php endif; ?>
			<?php echo tpl_function_checkActionsTpl(array('location' => "tpl_pligg_profile_info_end"), $this);?>
			<div style="clear:both;"> </div>
			<?php echo tpl_function_checkActionsTpl(array('location' => "tpl_pligg_profile_tab_insert"), $this);?>
		</div>
	</div>
<?php endif; ?>


<?php if (isset ( $this->_vars['user_page'] )): ?>
	<?php echo $this->_vars['user_page']; ?>

	<?php if ($this->_vars['user_page'] == ''): ?>
		<div class="jumbotron" style="padding:15px 25px;"><p style="padding:0;margin:0;font-size:1.1em;"><?php echo $this->_confs['PLIGG_User_Profile_No_Content']; ?>
</p></div>
	<?php endif; ?>
<?php endif; ?>

<?php if (isset ( $this->_vars['user_pagination'] ) && $this->_vars['user_page'] != ''): ?>
	<?php echo tpl_function_checkActionsTpl(array('location' => "tpl_pligg_pagination_start"), $this);?>
	<?php echo $this->_vars['user_pagination']; ?>

	<?php echo tpl_function_checkActionsTpl(array('location' => "tpl_pligg_pagination_end"), $this);?>
<?php endif; ?>

<?php echo tpl_function_checkActionsTpl(array('location' => "tpl_pligg_profile_end"), $this);?>
<!--/user_history_center.tpl -->