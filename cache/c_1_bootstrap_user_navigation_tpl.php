<?php require_once('/Applications/MAMP/htdocs/pligg/plugins/modifier.capitalize.php'); $this->register_modifier("capitalize", "tpl_modifier_capitalize");  require_once('/Applications/MAMP/htdocs/pligg/plugins/function.checkActionsTpl.php'); $this->register_function("checkActionsTpl", "tpl_function_checkActionsTpl");  /* V2.20 Template Lite, 8 March 2008. (c) Mark Dickenson, Jon Langevin. GNU LGPL. 2013-11-24 04:35:51 CET */ ?>


<!-- user_navigation.tpl -->


<?php echo tpl_function_checkActionsTpl(array('location' => "tpl_pligg_profile_start"), $this);?>
<div style="margin-bottom:10px;" class="row user_navigation_top">
	<div class="col-md-9 user_navigation_left">
		<h1 style="margin-bottom:0px;">
			<?php if ($this->_vars['UseAvatars'] != "0" && $this->_vars['pagename'] == "user_edit"): ?>
				<a href="#profileavatar" data-toggle="modal">
					<div class="img-thumbnail avatar_thumb">
						<?php 
							// Edit Avatar on Page Load using ?avatar=edit at end of URL
							$refer  = $_SERVER["REQUEST_URI"];
							$avatarcheck = strstr($refer, '?');
							if ($avatarcheck == "?avatar=edit"){
								echo "
									<script type='text/javascript'>
										$(window).load(function(){
											$('#profileavatar').modal('show');
										});
									</script>
								";
							}
						 ?>
						<img style="float:left;margin:0 15px 0 0;" src="<?php echo $this->_vars['Avatar']['large']; ?>
" style="margin-bottom:4px;" alt="Avatar" />
						<a href="#profileavatar" data-toggle="modal" class="btn btn-default btn-xs edit-avatar">Edit Avatar</a>
					</div>
				</a>
				
				<div class="modal fade" id="profileavatar">
					<div class="modal-dialog">
						<div class="modal-content">
							<form method="POST" enctype="multipart/form-data" name="image_upload_form">
								<script type="text/javascript">
									$('.fileupload').fileupload()
								</script>
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
									<h4 class="modal-title"><?php echo $this->_confs['PLIGG_Visual_Profile_UploadAvatar2']; ?>
</h4>
								</div>
								<div class="modal-body">
									<div class="fileupload fileupload-new" data-provides="fileupload">
										<div class="fileupload-new img-thumbnail">
											<img src="<?php echo $this->_vars['Avatar']['large']; ?>
" title="<?php echo $this->_confs['PLIGG_Visual_Profile_CurrentAvatar']; ?>
" />
										</div>
										<div class="fileupload-preview fileupload-exists img-thumbnail" style="max-width:<?php echo $this->_vars['Avatar_Large']; ?>
px;max-height:<?php echo $this->_vars['Avatar_Large']; ?>
px;"></div>
										<div>
											<span class="btn btn-default btn-file">
												<span class="fileupload-new"><i class="fa fa-picture"></i> Browse</span>
												<span class="fileupload-exists"><i class="fa fa-picture"></i> Browse</span>
												<input type="file" class="fileupload" name="image_file"/>
											</span>
											<a href="#" class="btn btn-danger fileupload-exists" data-dismiss="fileupload">Remove</a>
										</div>
									</div>
								</div>
								<div class="modal-footer">
									<input type="hidden" name="avatar" value="uploaded"/>
									<?php echo $this->_vars['hidden_token_profile_change']; ?>

									<a class="btn btn-default" data-dismiss="modal"><?php echo $this->_confs['PLIGG_Visual_View_User_Edit_Cancel']; ?>
</a>
									<input type="submit" name="action" class="btn btn-primary" value="<?php echo $this->_confs['PLIGG_Visual_Profile_AvatarUpload']; ?>
"/>
								</div>
							</form>
						</div><!-- /.modal-content -->
					</div><!-- /.modal-dialog -->
				</div><!-- /.modal -->
			<?php elseif ($this->_vars['UseAvatars'] != "0" && $this->_vars['pagename'] == "user"): ?>
				<?php if ($this->_vars['user_login'] == $this->_vars['user_logged_in'] || $this->_vars['isadmin']): ?>
					<a href="<?php if ($this->_vars['UrlMethod'] == "2"):  echo $this->_vars['my_base_url'];  echo $this->_vars['my_pligg_base']; ?>
/user/<?php echo $this->_vars['user_login']; ?>
/edit/?avatar=edit<?php else:  echo $this->_vars['my_base_url'];  echo $this->_vars['my_pligg_base']; ?>
/profile.php?avatar=edit<?php endif; ?>">
				<?php endif; ?>
				<div class="img-thumbnail avatar_thumb">
					<img style="float:left;margin:0 15px 0 0;" src="<?php echo $this->_vars['Avatar']['large']; ?>
" style="margin-bottom:4px;" alt="Avatar" />
					<?php if ($this->_vars['user_login'] == $this->_vars['user_logged_in'] || $this->_vars['isadmin']): ?>
						<a class="btn btn-default btn-xs edit-avatar" href="<?php if ($this->_vars['UrlMethod'] == "2"):  echo $this->_vars['my_base_url'];  echo $this->_vars['my_pligg_base']; ?>
/user/<?php echo $this->_vars['user_login']; ?>
/edit/?avatar=edit<?php else:  echo $this->_vars['my_base_url'];  echo $this->_vars['my_pligg_base']; ?>
/profile.php?avatar=edit<?php endif; ?>">Edit Avatar</a>
					<?php endif; ?>
				</div>
				<?php if ($this->_vars['user_login'] == $this->_vars['user_logged_in'] || $this->_vars['isadmin']): ?></a><?php endif; ?>
			<?php endif; ?>
			<?php echo $this->_run_modifier($this->_vars['user_username'], 'capitalize', 'plugin', 1); ?>

		</h1>
		<div>
			<?php echo tpl_function_checkActionsTpl(array('location' => "tpl_user_profile_social_start"), $this);?>
			<?php if ($this->_vars['user_skype']): ?>
				<a href="callto://<?php echo $this->_vars['user_skype']; ?>
" title="Skype <?php echo $this->_run_modifier($this->_vars['user_username'], 'capitalize', 'plugin', 1); ?>
" rel="nofollow" target="_blank"><img src="<?php echo $this->_vars['my_pligg_base']; ?>
/templates/<?php echo $this->_vars['the_template']; ?>
/img/skype_round.png" /></a>
			<?php endif; ?>
			<?php if ($this->_vars['user_facebook']): ?>
				<a href="http://www.facebook.com/<?php echo $this->_vars['user_facebook']; ?>
" title="<?php echo $this->_run_modifier($this->_vars['user_username'], 'capitalize', 'plugin', 1); ?>
 on Facebook" rel="nofollow" target="_blank"><img src="<?php echo $this->_vars['my_pligg_base']; ?>
/templates/<?php echo $this->_vars['the_template']; ?>
/img/facebook_round.png" /></a>
			<?php endif; ?>
			<?php if ($this->_vars['user_twitter']): ?>
				<a href="http://twitter.com/<?php echo $this->_vars['user_twitter']; ?>
" title="<?php echo $this->_run_modifier($this->_vars['user_username'], 'capitalize', 'plugin', 1); ?>
 on Twitter" rel="nofollow" target="_blank"><img src="<?php echo $this->_vars['my_pligg_base']; ?>
/templates/<?php echo $this->_vars['the_template']; ?>
/img/twitter_round.png" /></a>
			<?php endif; ?>
			<?php if ($this->_vars['user_linkedin']): ?>
				<a href="http://www.linkedin.com/in/<?php echo $this->_vars['user_linkedin']; ?>
" title="<?php echo $this->_run_modifier($this->_vars['user_username'], 'capitalize', 'plugin', 1); ?>
 on LinkedIn" rel="nofollow" target="_blank"><img src="<?php echo $this->_vars['my_pligg_base']; ?>
/templates/<?php echo $this->_vars['the_template']; ?>
/img/linkedin_round.png" /></a>
			<?php endif; ?>
			<?php if ($this->_vars['user_googleplus']): ?>
				<a href="https://plus.google.com/<?php echo $this->_vars['user_googleplus']; ?>
" title="<?php echo $this->_run_modifier($this->_vars['user_username'], 'capitalize', 'plugin', 1); ?>
 on Google+" rel="nofollow" target="_blank"><img src="<?php echo $this->_vars['my_pligg_base']; ?>
/templates/<?php echo $this->_vars['the_template']; ?>
/img/google_round.png" /></a>
			<?php endif; ?>
			<?php if ($this->_vars['user_pinterest']): ?>
				<a href="http://pinterest.com/<?php echo $this->_vars['user_pinterest']; ?>
/" title="<?php echo $this->_run_modifier($this->_vars['user_username'], 'capitalize', 'plugin', 1); ?>
 on Pinterest" rel="nofollow" target="_blank"><img src="<?php echo $this->_vars['my_pligg_base']; ?>
/templates/<?php echo $this->_vars['the_template']; ?>
/img/pinterest_round.png" /></a>
			<?php endif; ?>
			<?php echo tpl_function_checkActionsTpl(array('location' => "tpl_user_profile_social_end"), $this);?>
		</div>
		<?php echo tpl_function_checkActionsTpl(array('location' => "tpl_show_extra_profile"), $this);?>
		<div style="font-size:0.85em;line-height:1.3em;margin-top:2px;">		
			<?php if ($this->_vars['user_publicemail'] != ""): ?>
				<?php 
					// Method to try to trick automated email address collection bots
					global $main_smarty;
					$full_email = $this->_vars['user_publicemail'];
					list($email_start,$_) = explode('@',$full_email); $email_domain = ''.$_;
					$main_smarty->assign('email_start', $email_start);
					$main_smarty->assign('email_domain', $email_domain);
				 ?>
				<script type="text/javascript">
				<!--
					var string1 = "<?php echo $this->_vars['email_start']; ?>
";
					var string2 = "@";
					var string3 = "<?php echo $this->_vars['email_domain']; ?>
";
				//  document.write(string4);
					document.write("<a href=" + "mail" + "to:" + string1 + string2 + string3 + ">Email</a> | ");
				//-->
				</script>
			<?php endif; ?>
			<?php if ($this->_vars['user_url'] != "" && $this->_vars['user_karma'] > "20" || $this->_vars['user_login'] == $this->_vars['user_logged_in']): ?>
				<a href="<?php echo $this->_vars['user_url']; ?>
" target="_blank" rel="nofollow"><?php echo $this->_vars['user_url']; ?>
</a>
				<br />
			<?php endif; ?>
			<?php echo tpl_function_checkActionsTpl(array('location' => "tpl_user_profile_details_start"), $this);?>
			<?php if ($this->_vars['user_names'] != ""): ?>
				<?php echo $this->_vars['user_names']; ?>

				<?php if ($this->_vars['user_occupation'] != "" || $this->_vars['user_location'] != ""): ?>	is <?php endif; ?>
			<?php endif; ?>
			<?php if ($this->_vars['user_occupation'] != ""): ?>
				<?php if ($this->_vars['user_names'] != ""): ?> a <?php endif; ?>
				<?php echo $this->_vars['user_occupation']; ?>

			<?php endif; ?>
			<?php if ($this->_vars['user_location'] != ""): ?>
				<?php if ($this->_vars['user_occupation'] != "" || $this->_vars['user_names'] != ""): ?>
					 from 
				<?php elseif ($this->_vars['user_location'] != ""): ?>
					 From 
				<?php endif; ?>
				<?php echo $this->_vars['user_location']; ?>

			<?php endif; ?>
			<?php echo tpl_function_checkActionsTpl(array('location' => "tpl_user_profile_details_end"), $this);?>
		</div>
	</div>
	<div class="col-md-3 user_navigation_right">
		<div class="user_search">
			<form action="<?php echo $this->_vars['my_pligg_base']; ?>
/user.php" class="form-inline" role="form" method="get" <?php  global $URLMethod, $my_base_url, $my_pligg_base; if ($URLMethod==2) print "onsubmit='document.location.href=\"{$my_base_url}{$my_pligg_base}/user/search/\"+encodeURIComponent(this.keyword.value); return false;'"; ?>>
				<input type="hidden" name="view" value="search">
				<div class="form-group">
					<input type="text" name="keyword" class="form-control" placeholder="<?php echo $this->_confs['PLIGG_Visual_User_Search_Users']; ?>
">
				</div>
				<button type="submit" class="btn btn-primary"><?php echo $this->_confs['PLIGG_Visual_Search_Go']; ?>
</button>
			</form>
			<?php if ($this->_vars['Allow_Friends']): ?>
				<div class="btn-group user_followers">
					<a class="btn btn-default btn-sm" href="<?php echo $this->_vars['user_url_friends']; ?>
"><i class="fa fa-user"></i> <?php echo $this->_vars['user_following']; ?>
 <?php echo $this->_confs['PLIGG_Visual_User_Profile_View_Friends']; ?>
</a>
					<a class="btn btn-default btn-sm" href="<?php echo $this->_vars['user_url_friends2']; ?>
"><i class="fa fa-user"></i> <?php echo $this->_vars['user_followers']; ?>
 <?php echo $this->_confs['PLIGG_Visual_User_Profile_Your_Friends']; ?>
</a>
					<?php if (check_for_enabled_module ( 'simple_messaging' , 2.0 ) && $this->_vars['is_friend']): ?>
						<a class="btn btn-default btn-sm" href="<?php echo $this->_vars['my_base_url'];  echo $this->_vars['my_pligg_base']; ?>
/module.php?module=simple_messaging&view=compose&to=<?php echo $this->_vars['username']; ?>
&return=<?php echo $this->_vars['my_pligg_base']; ?>
%2Fuser.php%3Flogin%3D<?php echo $this->_vars['user_logged_in']; ?>
%26view%3Dfollowers"><i class="fa fa-envelope"></i> Send Message</a>
					<?php endif; ?>
					<?php if ($this->_vars['is_friend'] > 0): ?>
						<a href="<?php echo $this->_vars['user_url_remove']; ?>
" class="btn btn-sm btn-danger"><?php echo $this->_confs['PLIGG_Unfollow']; ?>
</a>
						<?php if ($this->_vars['user_authenticated'] == true): ?>
							<?php echo tpl_function_checkActionsTpl(array('location' => "tpl_user_center"), $this);?>
						<?php endif; ?>
					<?php elseif ($this->_vars['user_login'] != $this->_vars['user_logged_in']): ?>
						<?php if ($this->_vars['user_authenticated'] == true): ?> 
							<a class="btn btn-sm btn-success" href="<?php echo $this->_vars['user_url_add']; ?>
"><?php echo $this->_confs['PLIGG_Visual_User_Profile_Add_Friend']; ?>
</a>
						<?php endif; ?>   
					<?php endif; ?>
				</div>
			<?php endif; ?>
		</div>
		<div class="clearfix"></div>
	</div>
	<div class="clearfix"></div>
</div>
<?php echo tpl_function_checkActionsTpl(array('location' => "tpl_user_center_just_below_header"), $this);?>
<ul class="nav nav-tabs" id="profiletabs">
	<?php echo tpl_function_checkActionsTpl(array('location' => "tpl_pligg_profile_sort_start"), $this);?>
	<li <?php if ($this->_vars['user_view'] == 'profile' || $this->_vars['user_view'] == 'removefriend' || $this->_vars['user_view'] == 'addfriend'): ?>class="active"<?php endif; ?>><a <?php if ($this->_vars['user_view'] == 'profile'): ?>data-toggle="tab" href="#personal_info"<?php else: ?>href="<?php echo $this->_vars['user_url_personal_data2']; ?>
"<?php endif; ?> class="navbut<?php echo $this->_vars['nav_pd']; ?>
"><?php echo $this->_confs['PLIGG_Visual_User_PersonalData']; ?>
</a></li>
	<?php if ($this->_vars['user_login'] == $this->_vars['user_logged_in'] || $this->_vars['isadmin']): ?>
		<li <?php if ($this->_vars['pagename'] == 'user_edit'): ?>class="active"<?php endif; ?>><a href="<?php echo $this->_vars['URL_Profile2']; ?>
" class="navbut<?php echo $this->_vars['nav_set']; ?>
"><?php echo $this->_confs['PLIGG_Visual_User_Setting']; ?>
</a></li>
	<?php endif; ?>
	<li <?php if ($this->_vars['user_view'] == 'history'): ?>class="active"<?php endif; ?>><a href="<?php echo $this->_vars['user_url_news_sent2']; ?>
" class="navbut<?php echo $this->_vars['nav_ns']; ?>
"><?php echo $this->_confs['PLIGG_Visual_User_NewsSent']; ?>
</a></li>
	<li <?php if ($this->_vars['user_view'] == 'published'): ?>class="active"<?php endif; ?>><a href="<?php echo $this->_vars['user_url_news_published2']; ?>
" class="navbut<?php echo $this->_vars['nav_np']; ?>
"><?php echo $this->_confs['PLIGG_Visual_User_NewsPublished']; ?>
</a></li>
	<li <?php if ($this->_vars['user_view'] == 'new'): ?>class="active"<?php endif; ?>><a href="<?php echo $this->_vars['user_url_news_unpublished2']; ?>
" class="navbut<?php echo $this->_vars['nav_nu']; ?>
"><?php echo $this->_confs['PLIGG_Visual_User_NewsUnPublished']; ?>
</a></li>
	<li <?php if ($this->_vars['user_view'] == 'commented'): ?>class="active"<?php endif; ?>><a href="<?php echo $this->_vars['user_url_commented2']; ?>
" class="navbut<?php echo $this->_vars['nav_c']; ?>
"><?php echo $this->_confs['PLIGG_Visual_User_NewsCommented']; ?>
</a></li>
	<li <?php if ($this->_vars['user_view'] == 'upvoted'): ?>class="active"<?php endif; ?>><a href="<?php echo $this->_vars['user_url_news_upvoted2']; ?>
" class="navbut<?php echo $this->_vars['nav_nv']; ?>
"><?php echo $this->_confs['PLIGG_Visual_UpVoted']; ?>
</a></li>
	<li <?php if ($this->_vars['user_view'] == 'downvoted'): ?>class="active"<?php endif; ?>><a href="<?php echo $this->_vars['user_url_news_downvoted2']; ?>
" class="navbut<?php echo $this->_vars['nav_nv']; ?>
"><?php echo $this->_confs['PLIGG_Visual_DownVoted']; ?>
</a></li>
	<li <?php if ($this->_vars['user_view'] == 'saved'): ?>class="active"<?php endif; ?>><a href="<?php echo $this->_vars['user_url_saved2']; ?>
" class="navbut<?php echo $this->_vars['nav_s']; ?>
"><?php echo $this->_confs['PLIGG_Visual_User_NewsSaved']; ?>
</a></li>
	<?php echo tpl_function_checkActionsTpl(array('location' => "tpl_pligg_profile_sort_end"), $this);?>
</ul>

<!--/user_navigation.tpl -->