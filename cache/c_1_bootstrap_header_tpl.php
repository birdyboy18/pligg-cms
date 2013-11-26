<?php require_once('/Applications/MAMP/htdocs/pligg/plugins/function.checkActionsTpl.php'); $this->register_function("checkActionsTpl", "tpl_function_checkActionsTpl");  /* V2.20 Template Lite, 8 March 2008. (c) Mark Dickenson, Jon Langevin. GNU LGPL. 2013-11-24 00:29:03 CET */ ?>


<!-- header.tpl -->
<header role="banner" class="navbar navbar-inverse navbar-fixed-top custom_header">
	<!--<div class="container">-->
		<div class="navbar-header">
			<button data-target=".bs-navbar-collapse" data-toggle="collapse" type="button" class="navbar-toggle">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="<?php echo $this->_vars['my_base_url'];  echo $this->_vars['my_pligg_base']; ?>
"><i class="fa fa-bars"></i><?php echo $this->_confs['PLIGG_Visual_Name']; ?>
</a>			
		</div>
		<!-- Search Box start -->
		<div class="search-wrap">
			<?php $_templatelite_tpl_vars = $this->_vars;
echo $this->_fetch_compile_include($this->_vars['the_template']."/search_box.tpl", array());
$this->_vars = $_templatelite_tpl_vars;
unset($_templatelite_tpl_vars);
 ?>
		</div>
		<div class="submit pull-right">
			<?php echo tpl_function_checkActionsTpl(array('location' => "tpl_pligg_submit_link_start"), $this);?>
				<a href="<?php echo $this->_vars['URL_submit']; ?>
"><?php echo $this->_confs['PLIGG_Visual_Submit_A_New_Story']; ?>
</a>
				<?php echo tpl_function_checkActionsTpl(array('location' => "tpl_pligg_submit_link_end"), $this);?>
		</div>
		<!-- search Box End -->
		<!--<nav role="navigation" class="collapse navbar-collapse bs-navbar-collapse">
			<ul class="nav navbar-nav">
				<li <?php if ($this->_vars['pagename'] == "published" || $this->_vars['pagename'] == "index"): ?>class="active"<?php endif; ?>><a href="<?php echo $this->_vars['my_base_url'];  echo $this->_vars['my_pligg_base']; ?>
"><?php echo $this->_confs['PLIGG_Visual_Home']; ?>
</a></li>
				<?php echo tpl_function_checkActionsTpl(array('location' => "tpl_pligg_navbar_start"), $this);?>
				<li <?php if ($this->_vars['pagename'] == "new"): ?>class="active"<?php endif; ?>><a href="<?php echo $this->_vars['URL_new']; ?>
"><?php echo $this->_confs['PLIGG_Visual_Pligg_Queued']; ?>
</a></li>
				<?php echo tpl_function_checkActionsTpl(array('location' => "tpl_pligg_submit_link_start"), $this);?>
				<li <?php if ($this->_vars['pagename'] == "submit"): ?>class="active"<?php endif; ?>><a href="<?php echo $this->_vars['URL_submit']; ?>
"><?php echo $this->_confs['PLIGG_Visual_Submit_A_New_Story']; ?>
</a></li>
				<?php echo tpl_function_checkActionsTpl(array('location' => "tpl_pligg_submit_link_end"), $this);?>
				<?php if ($this->_vars['enable_group'] == "true"): ?>	
					<li <?php if ($this->_vars['pagename'] == "groups" || $this->_vars['pagename'] == "submit_groups" || $this->_vars['pagename'] == "group_story"): ?>class="active"<?php endif; ?>><a href="<?php echo $this->_vars['URL_groups']; ?>
"><span><?php echo $this->_confs['PLIGG_Visual_Groups']; ?>
</span></a></li>
				<?php endif; ?>
				<?php if ($this->_vars['Auto_scroll'] == '2'): ?>
					<li class="dropdown">
						<a data-toggle="dropdown" class="dropdown-toggle" href="#">More <b class="caret"></b></a>
						<ul class="dropdown-menu">
							<li><a href="<?php echo $this->_vars['URL_advancedsearch']; ?>
"><?php echo $this->_confs['PLIGG_Visual_Search_Advanced']; ?>
</a> 
							<?php if ($this->_vars['Enable_Live']): ?>
								<li><a href="<?php echo $this->_vars['URL_live']; ?>
"><?php echo $this->_confs['PLIGG_Visual_Live']; ?>
</a></li>
							<?php endif; ?>
							<?php if ($this->_vars['Enable_Tags']): ?>
								<li><a href="<?php echo $this->_vars['URL_tagcloud']; ?>
"><?php echo $this->_confs['PLIGG_Visual_Tags']; ?>
</a></li>
							<?php endif; ?>
							<li><a href="<?php echo $this->_vars['URL_topusers']; ?>
"><?php echo $this->_confs['PLIGG_Visual_Top_Users']; ?>
</a></li>
							<?php if ($this->_vars['URL_rss_page']): ?>
								<li><a href="<?php echo $this->_vars['URL_rss_page']; ?>
" target="_blank">RSS</a></li>
							<?php endif; ?>
							<li><a href="<?php echo $this->_vars['my_base_url'];  echo $this->_vars['my_pligg_base']; ?>
/rssfeeds.php"><?php echo $this->_confs['PLIGG_Visual_RSS_Feeds']; ?>
</a></li>
							<?php echo tpl_function_checkActionsTpl(array('location' => "tpl_pligg_header_more_end"), $this);?>
						</ul>
					</li>
				<?php endif; ?>
				<?php echo tpl_function_checkActionsTpl(array('location' => "tpl_pligg_navbar_end"), $this);?>
				<?php if ($this->_vars['user_authenticated'] != true): ?>
					<li <?php if ($this->_vars['pagename'] == "register"): ?>class="active"<?php endif; ?>><a href="<?php echo $this->_vars['URL_register']; ?>
"><span><?php echo $this->_confs['PLIGG_Visual_Register']; ?>
</span></a></li>
					<li <?php if ($this->_vars['pagename'] == "login"): ?>class="active"<?php endif; ?>><a data-toggle="modal" href="#loginModal"><?php echo $this->_confs['PLIGG_Visual_Login_Title']; ?>
</a>
				<?php endif; ?>
				<?php if (isset ( $this->_vars['isadmin'] ) && $this->_vars['isadmin'] == 1): ?>
					<li><a href="<?php echo $this->_vars['URL_admin']; ?>
"><span><?php echo $this->_confs['PLIGG_Visual_Header_AdminPanel']; ?>
</span></a></li>
				<?php endif; ?>
			</ul>-->
			<!--
			<?php if ($this->_vars['user_authenticated'] == true): ?>
				<div class="btn-group navbar-right">
					<a class="btn btn-default dropdown-toggle" data-toggle="dropdown" href="#">
						<?php 
						global $main_smarty, $current_user;

						if ($current_user->user_id > 0 && $current_user->authenticated) {
								$login=$current_user->user_login;
						}

						// Read the users information from the database
						$user=new User();
						$user->username = $login;
						if(!$user->read()) {
							echo "invalid user";
							die;
						}

						// Assign smarty variables to use in the template.
							$main_smarty->assign('Avatar_ImgLarge', get_avatar('large', $user->avatar_source, $user->username, $user->email));
							$main_smarty->assign('Avatar_ImgSmall', get_avatar('small', $user->avatar_source, $user->username, $user->email));
							$main_smarty->assign('user_names', $user->names);
							$main_smarty->assign('user_id', $user->id);
							$main_smarty->assign('user_username', $user->username);

						 ?>
						<img src="<?php echo $this->_vars['Avatar_ImgSmall']; ?>
" onerror="this.src='<?php echo $this->_vars['my_pligg_base']; ?>
/avatars/Avatar_32.png'; this.title='Loading...';" style="height:16px;width:16px;" /> &nbsp;  <?php echo $this->_vars['user_logged_in']; ?>

						<span class="caret"></span>
					</a>
					<ul class="dropdown-menu">
						<?php echo tpl_function_checkActionsTpl(array('location' => "tpl_pligg_profile_sort_start"), $this);?>
						<li><a href="<?php echo $this->_vars['URL_userNoVar']; ?>
" class="navbut<?php echo $this->_vars['nav_pd']; ?>
"><?php echo $this->_confs['PLIGG_Visual_Profile']; ?>
</a></li>
						<li><a href="<?php echo $this->_vars['URL_Profile']; ?>
" class="navbut<?php echo $this->_vars['nav_set']; ?>
"><span><?php echo $this->_confs['PLIGG_Visual_User_Setting']; ?>
</a></li>
						<li><a href="<?php echo $this->_vars['user_url_news_sent']; ?>
" class="navbut<?php echo $this->_vars['nav_ns']; ?>
"><?php echo $this->_confs['PLIGG_Visual_User_NewsSent']; ?>
</a></li>
						<li><a href="<?php echo $this->_vars['user_url_commented']; ?>
" class="navbut<?php echo $this->_vars['nav_c']; ?>
"><?php echo $this->_confs['PLIGG_Visual_User_NewsCommented']; ?>
</a></li>
						<li><a href="<?php echo $this->_vars['user_url_news_upvoted']; ?>
" class="navbut<?php echo $this->_vars['nav_nv']; ?>
"><?php echo $this->_confs['PLIGG_Visual_UpVoted']; ?>
</a></li>
						<li><a href="<?php echo $this->_vars['user_url_news_downvoted']; ?>
" class="navbut<?php echo $this->_vars['nav_nv']; ?>
"><?php echo $this->_confs['PLIGG_Visual_DownVoted']; ?>
</a></li>
						<li><a href="<?php echo $this->_vars['user_url_saved']; ?>
" class="navbut<?php echo $this->_vars['nav_s']; ?>
"><?php echo $this->_confs['PLIGG_Visual_User_NewsSaved']; ?>
</a></li>
						<?php echo tpl_function_checkActionsTpl(array('location' => "tpl_pligg_profile_sort_end"), $this);?>
						<li class="divider"></li>
						<li><a href="<?php echo $this->_vars['URL_logout']; ?>
"><?php echo $this->_confs['PLIGG_Visual_Logout']; ?>
</a></li>
					</ul>
				</div>
				/$user_authenticated
			<?php endif; ?>
			
		</nav> -->
	<!--</div>-->
</header>
<!--/header.tpl -->