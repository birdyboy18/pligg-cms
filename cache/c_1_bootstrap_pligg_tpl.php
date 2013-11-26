<?php require_once('/Applications/MAMP/htdocs/pligg/plugins/function.checkForJs.php'); $this->register_function("checkForJs", "tpl_function_checkForJs");  require_once('/Applications/MAMP/htdocs/pligg/plugins/function.checkForCss.php'); $this->register_function("checkForCss", "tpl_function_checkForCss");  require_once('/Applications/MAMP/htdocs/pligg/plugins/function.checkActionsTpl.php'); $this->register_function("checkActionsTpl", "tpl_function_checkActionsTpl");  /* V2.20 Template Lite, 8 March 2008. (c) Mark Dickenson, Jon Langevin. GNU LGPL. 2013-11-24 06:22:26 CET */ ?>

<?php if ($this->_vars['maintenance_mode'] == "true" && $this->_vars['user_level'] != 'admin'):  $_templatelite_tpl_vars = $this->_vars;
echo $this->_fetch_compile_include($this->_vars['the_template']."/maintenance.tpl", array());
$this->_vars = $_templatelite_tpl_vars;
unset($_templatelite_tpl_vars);
  else: ?><!DOCTYPE html>
<html class="no-js" dir="<?php echo $this->_confs['PLIGG_Visual_Language_Direction']; ?>
" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<?php echo tpl_function_checkActionsTpl(array('location' => "tpl_pligg_head_start"), $this);?>
	
	<!-- START META -->
		<?php $_templatelite_tpl_vars = $this->_vars;
echo $this->_fetch_compile_include($this->_vars['the_template']."/meta.tpl", array());
$this->_vars = $_templatelite_tpl_vars;
unset($_templatelite_tpl_vars);
 ?>
	<!-- END META -->
	
	<link rel="stylesheet" type="text/css" href="<?php echo $this->_vars['my_pligg_base']; ?>
/templates/<?php echo $this->_vars['the_template']; ?>
/css/bootstrap.no-icons.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo $this->_vars['my_pligg_base']; ?>
/templates/<?php echo $this->_vars['the_template']; ?>
/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo $this->_vars['my_pligg_base']; ?>
/templates/<?php echo $this->_vars['the_template']; ?>
/css/jquery.pnotify.css" media="screen" />
	<link rel="stylesheet" type="text/css" href="<?php echo $this->_vars['my_pligg_base']; ?>
/templates/<?php echo $this->_vars['the_template']; ?>
/css/style.css" media="screen" />
	<script type="text/javascript" src="<?php echo $this->_vars['my_pligg_base']; ?>
/templates/<?php echo $this->_vars['the_template']; ?>
/js/modernizr.js"></script>

	<?php if ($this->_vars['Voting_Method'] == 2): ?>
	<link rel="stylesheet" type="text/css" href="<?php echo $this->_vars['my_pligg_base']; ?>
/templates/<?php echo $this->_vars['the_template']; ?>
/css/star_rating/star.css" media="screen" />
	<?php endif; ?>
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
	<?php echo '
	<script>
		$(document).ready(function(){
			$(\'.navbar-brand\').click(function(e){
				e.preventDefault();
				$(\'.sidebar\').toggleClass(\'open\');
			})
		});
	</script>
	'; ?>

	<?php echo tpl_function_checkForCss(array(), $this);?>
	<?php echo tpl_function_checkForJs(array(), $this);?>
	
	<!-- START TITLE -->
		<?php $_templatelite_tpl_vars = $this->_vars;
echo $this->_fetch_compile_include($this->_vars['the_template']."/title.tpl", array());
$this->_vars = $_templatelite_tpl_vars;
unset($_templatelite_tpl_vars);
 ?>
	<!-- END TITLE -->
	
	<?php if ($this->_vars['pagename'] == "submit"): ?>
		<?php echo '
			<script type="text/javascript">
		$(function()
		{
			$(".title").keyup(function() 
			{
				var title=$(this).val();
				$(".story_title").html(title);
				return false;
			});
			$(".story_category").keyup(function() 
			{
				var category=$(this).val();
				$(".category").html(category);
				return false;
			});
			$(".story_group").keyup(function() 
			{
				var story_group=$(this).val();
				$(".story_group").html(story_group);
				return false;
			});
			$(".tags").keyup(function() 
			{
				var tags=$(this).val();
				$(".tags").html(tags);
				return false;
			});
			$(".bodytext").keyup(function() 
			{
				var bodytext=$(this).val();
				$(".bodytext").html(bodytext);
				return false;
			});
			
		});
		</script>
		'; ?>

	<?php endif; ?>
	
	<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php echo $this->_vars['my_base_url'];  echo $this->_vars['my_pligg_base']; ?>
/rss.php"/>
	<link rel="icon" href="<?php echo $this->_vars['my_pligg_base']; ?>
/favicon.ico" type="image/x-icon"/>
	<?php echo tpl_function_checkActionsTpl(array('location' => "tpl_pligg_head_end"), $this);?>
</head>
<body dir="<?php echo $this->_confs['PLIGG_Visual_Language_Direction']; ?>
" <?php echo $this->_vars['body_args']; ?>
 <?php echo tpl_function_checkActionsTpl(array('location' => "tpl_pligg_body_onload"), $this);?>>
	<?php if ($this->_vars['maintenance_mode'] == "true" && $this->_vars['user_level'] == 'admin'): ?>
		<div class="alert alert-danger" style="margin-bottom:0;"><button class="close" data-dismiss="alert">&times;</button><?php echo $this->_confs['PLIGG_Maintenance_Admin_Warning']; ?>
</div>
	<?php endif; ?>
	
	<?php echo tpl_function_checkActionsTpl(array('location' => "tpl_pligg_body_start"), $this);?>
	<div class="sidebar">
		<?php $_templatelite_tpl_vars = $this->_vars;
echo $this->_fetch_compile_include($this->_vars['the_template']."/sidebar_menu.tpl", array());
$this->_vars = $_templatelite_tpl_vars;
unset($_templatelite_tpl_vars);
 ?>
	</div>
	<!-- START HEADER -->
		<?php $_templatelite_tpl_vars = $this->_vars;
echo $this->_fetch_compile_include($this->_vars['tpl_header'].".tpl", array());
$this->_vars = $_templatelite_tpl_vars;
unset($_templatelite_tpl_vars);
 ?>
	<!-- END HEADER -->
	<div id="main">
	<!-- START CATEGORIES -->
		
	<!-- END CATEGORIES -->
	<div class="container">
		<section id="maincontent">
			<div class="row">
				<?php echo tpl_function_checkActionsTpl(array('location' => "tpl_pligg_banner_top"), $this);?>
			<?php if ($this->_vars['pagename'] == "submit" || $this->_vars['pagename'] == "user" || $this->_vars['pagename'] == "profile" || $this->_vars['pagename'] == "user_edit" || $this->_vars['pagename'] == "register" || $this->_vars['pagename'] == "login"): ?>
				<div class="col-md-12">
			<?php else: ?>
				<div class="col-md-12">
			<?php endif; ?>
					<!-- START BREADCRUMB -->
						
					<!-- END BREADCRUMB -->
					
					<?php echo '
						<script type="text/javascript" language="JavaScript">
						function checkForm() {
							answer = true;
							if (siw && siw.selectingSomething)
								answer = false;
							return answer;
						}//
						</script>
					'; ?>

					
					<?php echo tpl_function_checkActionsTpl(array('location' => "tpl_pligg_content_start"), $this);?>
					<?php echo tpl_function_checkActionsTpl(array('location' => "tpl_pligg_above_center"), $this);?>
					
					<!-- START CENTER CONTENT -->
						<?php $_templatelite_tpl_vars = $this->_vars;
echo $this->_fetch_compile_include($this->_vars['tpl_center'].".tpl", array());
$this->_vars = $_templatelite_tpl_vars;
unset($_templatelite_tpl_vars);
 ?>
					<!-- END CENTER CONTENT -->
					
					<?php echo tpl_function_checkActionsTpl(array('location' => "tpl_pligg_below_center"), $this);?>
					<?php echo tpl_function_checkActionsTpl(array('location' => "tpl_pligg_content_end"), $this);?>
				</div><!--/span-->
	  
				<?php echo tpl_function_checkActionsTpl(array('location' => "tpl_pligg_columns_start"), $this);?>	
				
				<?php if ($this->_vars['pagename'] != "submit" && $this->_vars['pagename'] != "user" && $this->_vars['pagename'] != "profile" && $this->_vars['pagename'] != "user_edit" && $this->_vars['pagename'] != "register" && $this->_vars['pagename'] != "login"): ?>
					<!-- START RIGHT COLUMN -->
					
					<!-- END RIGHT COLUMN -->
				<?php endif; ?>
			<?php echo tpl_function_checkActionsTpl(array('location' => "tpl_pligg_banner_bottom"), $this);?>
			</div><!--/.row-->
		</section><!--/#maincontent-->
		<?php if ($this->_vars['Auto_scroll'] != '2'): ?>
			<hr>
			<footer class="footer">
				<!-- START FOOTER -->
					<?php $_templatelite_tpl_vars = $this->_vars;
echo $this->_fetch_compile_include($this->_vars['tpl_footer'].".tpl", array());
$this->_vars = $_templatelite_tpl_vars;
unset($_templatelite_tpl_vars);
 ?>
				<!-- END FOOTER -->
			</footer>
		<?php endif; ?>
		
	</div><!--/.container-->
</div>
	
	<!-- START COMMON JAVASCRIPT FUNCTIONS -->
	<?php $_templatelite_tpl_vars = $this->_vars;
echo $this->_fetch_compile_include($this->_vars['the_template']."/functions/common.tpl", array());
$this->_vars = $_templatelite_tpl_vars;
unset($_templatelite_tpl_vars);
 ?>
	<!-- END COMMON JAVASCRIPT FUNCTIONS -->
	
	<?php if ($this->_vars['Voting_Method'] == 2): ?>
		<!-- START STAR VOTING JAVASCRIPT -->
		<?php $_templatelite_tpl_vars = $this->_vars;
echo $this->_fetch_compile_include($this->_vars['the_template']."/functions/vote_star.tpl", array());
$this->_vars = $_templatelite_tpl_vars;
unset($_templatelite_tpl_vars);
 ?>
		<!-- END STAR VOTING JAVASCRIPT -->
	<?php else: ?>
		<!-- START UP/DOWN VOTING JAVASCRIPT -->
			<?php $_templatelite_tpl_vars = $this->_vars;
echo $this->_fetch_compile_include($this->_vars['the_template']."/functions/vote_normal.tpl", array());
$this->_vars = $_templatelite_tpl_vars;
unset($_templatelite_tpl_vars);
 ?>
		<!-- END UP/DOWN VOTING JAVASCRIPT -->
	<?php endif; ?>
	<?php if ($this->_vars['pagename'] == "story" || $this->_vars['pagename'] == "user"): ?>
		<!-- START COMMENT VOTING JAVASCRIPT -->
			<?php $_templatelite_tpl_vars = $this->_vars;
echo $this->_fetch_compile_include($this->_vars['the_template']."/functions/vote_comments.tpl", array());
$this->_vars = $_templatelite_tpl_vars;
unset($_templatelite_tpl_vars);
 ?>
		<!-- START COMMENT VOTING JAVASCRIPT -->
	<?php endif; ?>

	<?php $_templatelite_tpl_vars = $this->_vars;
echo $this->_fetch_compile_include($this->_vars['the_template']."/functions/bookmark.tpl", array());
$this->_vars = $_templatelite_tpl_vars;
unset($_templatelite_tpl_vars);
 ?>
	<?php echo tpl_function_checkActionsTpl(array('location' => "tpl_pligg_body_end"), $this);?>
	
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.18/jquery-ui.min.js"></script>
	<link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.18/themes/smoothness/jquery-ui.css" media="all" rel="stylesheet" type="text/css" />
	
	<!--[if lt IE 7]>
	<script type="text/javascript" src="<?php echo $this->_vars['my_pligg_base']; ?>
/templates/<?php echo $this->_vars['the_template']; ?>
/js/jquery/jquery.dropdown.js"></script>
	<![endif]-->
	
	<script type="text/javascript" src="<?php echo $this->_vars['my_pligg_base']; ?>
/templates/<?php echo $this->_vars['the_template']; ?>
/js/registration_verify.js"></script>
	<script type="text/javascript" src="<?php echo $this->_vars['my_pligg_base']; ?>
/templates/<?php echo $this->_vars['the_template']; ?>
/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="<?php echo $this->_vars['my_pligg_base']; ?>
/templates/<?php echo $this->_vars['the_template']; ?>
/js/bootstrap-fileupload.js"></script>
	<script type="text/javascript" src="<?php echo $this->_vars['my_pligg_base']; ?>
/templates/<?php echo $this->_vars['the_template']; ?>
/js/jquery/jquery.pnotify.min.js"></script>
	
	<?php if ($this->_vars['pagename'] == 'advancedsearch'): ?>
		<script type="text/javascript" src="<?php echo $this->_vars['my_pligg_base']; ?>
/templates/<?php echo $this->_vars['the_template']; ?>
/js/bootstrap-datepicker.js"></script>
		<link type="text/css" rel="stylesheet" media="all" href="<?php echo $this->_vars['my_pligg_base']; ?>
/templates/<?php echo $this->_vars['the_template']; ?>
/css/datepicker.css" />
	<?php endif; ?>
	
    <?php if ($this->_vars['pagename'] == "topusers"): ?>
		<script type="text/javascript" src="<?php echo $this->_vars['my_pligg_base']; ?>
/templates/<?php echo $this->_vars['the_template']; ?>
/js/jquery/jquery.tablesorter.js"></script>
		<?php echo '
			<script type="text/javascript">
				$(function() {	
					$("#tablesorter-demo").tablesorter({sortList:[[0,0]], widgets: [\'zebra\']});
					$("#options").tablesorter({sortList: [[0,0]], headers: { 3:{sorter: false}, 1:{sorter: false}}});
				});	
			</script>
		'; ?>

    <?php endif; ?>
	
	<?php if ($this->_vars['user_authenticated'] != true): ?>
		<!-- Login Modal -->
		<div class="modal fade" id="loginModal" tabindex="-1" role="dialog">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						<h4 class="modal-title"><?php echo $this->_confs['PLIGG_Visual_Login_Title']; ?>
</h4>
					</div>
					<div class="modal-body">
						<div class="control-group">
							<form id="signin" action="<?php echo $this->_vars['URL_login']; ?>
" method="post">
								
								<div style="login_modal_username">
									<label for="username"><?php echo $this->_confs['PLIGG_Visual_Login_Username']; ?>
/<?php echo $this->_confs['PLIGG_Visual_Register_Email']; ?>
</label>
									<input id="username" name="username" class="form-control" value="<?php if (isset ( $this->_vars['login_username'] )):  echo $this->_vars['login_username'];  endif; ?>" title="username" tabindex="1" type="text">
								</div>
								<div class="login_modal_password">
									<label for="password"><?php echo $this->_confs['PLIGG_Visual_Login_Password']; ?>
</label>
									<input id="password" name="password" class="form-control" value="" title="password" tabindex="2" type="password">
								</div>
								<div class="login_modal_remember">
									<div class="login_modal_remember_checkbox">
										<input id="remember" style="float:left;margin-right:5px;" name="persistent" value="1" tabindex="3" type="checkbox">
									</div>
									<div class="login_modal_remember_label">
										<label for="remember" style=""><?php echo $this->_confs['PLIGG_Visual_Login_Remember']; ?>
</label>
									</div>
									<div style="clear:both;"></div>
								</div>
								<div class="login_modal_login">
									<input type="hidden" name="processlogin" value="1"/>
									<input type="hidden" name="return" value="<?php echo $this->_vars['get']['return']; ?>
"/>
									<input class="btn btn-primary col-md-12" id="signin_submit" value="<?php echo $this->_confs['PLIGG_Visual_Login_LoginButton']; ?>
" tabindex="4" type="submit">
								</div>
								<?php echo tpl_function_checkActionsTpl(array('location' => "tpl_pligg_login_link"), $this);?>
								<hr class="soften" id="login_modal_spacer" />
								<div class="login_modal_forgot">
									<a class="btn btn-default col-md-12" id="forgot_password_link" href="<?php echo $this->_vars['URL_login']; ?>
"><?php echo $this->_confs['PLIGG_Visual_Login_ForgottenPassword']; ?>
?</a>
								</div>
							</form>
						</div>
					</div>
				</div><!-- /.modal-content -->
			</div><!-- /.modal-dialog -->
		</div><!-- /.modal -->
	<?php endif; ?>

	<?php if ($this->_vars['pagename'] == 'index' || $this->_vars['pagename'] == 'published' || $this->_vars['pagename'] == 'new' || $this->_vars['pagename'] == 'group_story' || $this->_vars['pagename'] == 'user'): ?>
		<!-- START ARTICLES PAGINATION JAVASCRIPT -->
			<?php $_templatelite_tpl_vars = $this->_vars;
echo $this->_fetch_compile_include($this->_vars['the_template']."/functions/articles_pagination.tpl", array());
$this->_vars = $_templatelite_tpl_vars;
unset($_templatelite_tpl_vars);
 ?>
		<!-- END ARTICLES PAGINATION JAVASCRIPT -->
	<?php endif; ?>
	
	<?php if ($this->_vars['pagename'] == 'topusers'): ?>
		<!-- START TOPUSERS PAGINATION JAVASCRIPT -->
			<?php $_templatelite_tpl_vars = $this->_vars;
echo $this->_fetch_compile_include($this->_vars['the_template']."/functions/topusers_pagination.tpl", array());
$this->_vars = $_templatelite_tpl_vars;
unset($_templatelite_tpl_vars);
 ?>
		<!-- END TOPUSERS PAGINATION JAVASCRIPT -->
	<?php endif; ?>
	
	<?php if ($this->_vars['pagename'] == 'groups'): ?>
		<!-- START GROUPS PAGINATION JAVASCRIPT -->
			<?php $_templatelite_tpl_vars = $this->_vars;
echo $this->_fetch_compile_include($this->_vars['the_template']."/functions/groups_pagination.tpl", array());
$this->_vars = $_templatelite_tpl_vars;
unset($_templatelite_tpl_vars);
 ?>
		<!-- END GROUPS PAGINATION JAVASCRIPT -->
	<?php endif; ?>
	
	<?php if ($this->_vars['pagename'] == 'search'): ?>
		<!-- START SEARCH PAGINATION JAVASCRIPT -->
			<?php $_templatelite_tpl_vars = $this->_vars;
echo $this->_fetch_compile_include($this->_vars['the_template']."/functions/search_pagination.tpl", array());
$this->_vars = $_templatelite_tpl_vars;
unset($_templatelite_tpl_vars);
 ?>
		<!-- END SEARCH PAGINATION JAVASCRIPT -->
	<?php endif; ?>
	
	<?php echo '
		<script> 
		$(\'.avatar-tooltip\').tooltip()
		</script>
	'; ?>


	<?php if ($this->_vars['pagename'] == "profile"): ?>
		
		<?php echo '
			<script>
			var container = document.querySelector(\'#profile_container\');
			var msnry = new Masonry( container, {
			  // options
			  columnWidth: 200,
			  itemSelector: \'.masonry_wrapper\'
			});
			</script>
		'; ?>

	<?php endif; ?>
</body>
</html>
<?php endif; ?>