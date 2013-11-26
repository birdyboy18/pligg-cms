<?php /* V2.20 Template Lite, 8 March 2008. (c) Mark Dickenson, Jon Langevin. GNU LGPL. 2013-11-24 00:28:58 CET */ ?>

<?php echo '
<style type="text/css">
/* Override some defaults */
html, body {
background-color: #eee;
text-align:center;
}
</style>
'; ?>

<div class="login_box">
	<div class="login_content">
		<?php if ($this->_vars['errorMsg'] != ""): ?>
			<div class="alert alert-warning">
				<a class="close" data-dismiss="alert" href="#">&times;</a>
				<?php echo $this->_vars['errorMsg']; ?>

			</div>
		<?php endif; ?>
		<div class="login_form">
			<h2><?php echo $this->_confs['PLIGG_Visual_Name']; ?>
</h2>
			<form action="<?php echo $this->_vars['my_pligg_base']; ?>
/admin/admin_login.php" method="post">
				<div class="clearfix login_username">
					<input type="text" class="form-control" name="username" <?php if ($this->_vars['post_username']): ?>value="<?php echo $this->_vars['post_username']; ?>
"<?php else: ?>placeholder="<?php echo $this->_confs['PLIGG_Visual_Register_Username'];  endif; ?>">
				</div>
				<div class="clearfix login_password">
					<input type="password" class="form-control" name="password" placeholder="<?php echo $this->_confs['PLIGG_Visual_Register_Password']; ?>
">
				</div>
				<input type="hidden" name="processlogin" value="1"/>
				<input type="hidden" name="return" value="<?php echo $this->_vars['get']['return']; ?>
"/>
				<button class="btn btn-primary col-md-12 admin_login_submit" type="submit"><?php echo $this->_confs['PLIGG_Visual_Login_LoginButton']; ?>
</button>
			</form>
		</div>
	</div>
</div>
