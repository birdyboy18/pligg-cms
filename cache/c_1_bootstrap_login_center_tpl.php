<?php require_once('/Applications/MAMP/htdocs/pligg/plugins/function.checkActionsTpl.php'); $this->register_function("checkActionsTpl", "tpl_function_checkActionsTpl");  /* V2.20 Template Lite, 8 March 2008. (c) Mark Dickenson, Jon Langevin. GNU LGPL. 2013-11-24 06:24:39 CET */ ?>


<!-- login_center.tpl -->
<div class="leftwrapper">
	<?php if ($this->_vars['errorMsg'] != ""): ?>
		<div class="alert alert-block alert-danger">
			<a class="close" data-dismiss="alert" href="#">&times;</a>
			<?php echo $this->_vars['errorMsg']; ?>

		</div>
	<?php endif; ?>
	<?php echo tpl_function_checkActionsTpl(array('location' => "tpl_login_top"), $this);?>
	<div class="col-md-4 login-left">
		<form id="thisform" method="post">
			<h2><?php echo $this->_confs['PLIGG_Visual_Login_Login']; ?>
</h2>
			<p><?php echo $this->_confs['PLIGG_Visual_Login_Have_Account']; ?>
</p>
			<form action="<?php echo $this->_vars['URL_login']; ?>
" method="post">	
				<strong><?php echo $this->_confs['PLIGG_Visual_Login_Username']; ?>
/<?php echo $this->_confs['PLIGG_Visual_Register_Email']; ?>
:</strong><br />
				<input autofocus="autofocus" type="text" name="username" class="form-control" value="<?php if (isset ( $this->_vars['login_username'] )):  echo $this->_vars['login_username'];  endif; ?>" tabindex="1" /><br />
				
				<strong><?php echo $this->_confs['PLIGG_Visual_Login_Password']; ?>
:</strong><br />
				<input type="password" name="password" class="form-control" tabindex="2" /><br />
				<input type="hidden" name="processlogin" value="1"/>
				<input type="hidden" name="return" value="<?php echo $this->_vars['get']['return']; ?>
"/>
				<div class="col-sm-6">
					<input type="submit" value="<?php echo $this->_confs['PLIGG_Visual_Login_LoginButton']; ?>
" class="btn btn-primary" tabindex="4" />
				</div>
				<div class="col-sm-6">
					<input type="checkbox" class="col-sm-offset-2" name="persistent" tabindex="3" /> <?php echo $this->_confs['PLIGG_Visual_Login_Remember']; ?>

				</div>
			</form>
		</form>
	</div>
	<div class="col-md-4 login-middle">
		<form action="<?php echo $this->_vars['URL_login']; ?>
" id="thisform2" method="post">
			<h2><?php echo $this->_confs['PLIGG_Visual_Login_ForgottenPassword']; ?>
</h2>
			<p><?php echo $this->_confs['PLIGG_Visual_Login_EmailChangePass']; ?>
</p>
			<strong><?php echo $this->_confs['PLIGG_Visual_Register_Email']; ?>
:</strong><br />
			<input type="text" name="email" class="form-control" size="25" tabindex="5" id="forgot-email" value="" />
			<br />
			<input type="submit" value="Submit" class="btn btn-primary" tabindex="6" />
			<input type="hidden" name="processlogin" value="3"/>
			<input type="hidden" name="return" value="<?php echo $this->_vars['get']['return']; ?>
"/>
		</form>
	</div>
	<div class="col-md-4 login-right">
		<h2><?php echo $this->_confs['PLIGG_Visual_Login_NewUsers']; ?>
</h2>
		<p><?php echo $this->_confs['PLIGG_Visual_Login_NewUsersA']; ?>
<a href="<?php echo $this->_vars['register_url']; ?>
" class="btn btn-success btn-xs" tabindex="7"><?php echo $this->_confs['PLIGG_Visual_Login_NewUsersB']; ?>
</a><?php echo $this->_confs['PLIGG_Visual_Login_NewUsersC']; ?>
</p>
	</div>
	
	<div class="clearfix"></div>
	<br /><br />

	<?php echo tpl_function_checkActionsTpl(array('location' => "tpl_login_bottom"), $this);?>
</div>
<!--/login_center.tpl -->