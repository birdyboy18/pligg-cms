<?php require_once('/Applications/MAMP/htdocs/pligg/plugins/function.checkActionsTpl.php'); $this->register_function("checkActionsTpl", "tpl_function_checkActionsTpl");  /* V2.20 Template Lite, 8 March 2008. (c) Mark Dickenson, Jon Langevin. GNU LGPL. 2013-11-24 06:03:44 CET */ ?>


<!-- register_center.tpl -->
<div class="row register-wrapper">
	<div class="col-md-4 register-left">
		<?php echo tpl_function_checkActionsTpl(array('location' => "tpl_pligg_register_start"), $this);?>
		<form action="<?php echo $this->_vars['URL_register']; ?>
" class="form-horizontal" method="post" id="thisform">
			<div class="control-group">
				<label class="control-label"><?php echo $this->_confs['PLIGG_Visual_Register_Username']; ?>
</label>
				<div class="controls">
					<?php if (isset ( $this->_vars['form_username_error'] )): ?>
						<?php if (count((array)$this->_vars['form_username_error'])):  foreach ((array)$this->_vars['form_username_error'] as $this->_vars['error']): ?>
							<div style="margin:10px 0 0 0;" class="alert alert-danger">
								<button class="close" data-dismiss="alert">&times;</button>
								<?php echo $this->_vars['error']; ?>

							</div>
						<?php endforeach; endif; ?>
					<?php endif; ?>
					<input autofocus="autofocus" type="text" class="form-control reg_username" id="reg_username" name="reg_username" value="<?php if (isset ( $this->_vars['reg_username'] )):  echo $this->_vars['reg_username'];  endif; ?>" size="25" tabindex="10" maxlength="32"/>
					<br/><span class="reg_usernamecheckitvalue"></span>
				</div>
			</div>
			<div class="control-group">
				<label class="control-label"><?php echo $this->_confs['PLIGG_Visual_Register_Email']; ?>
</label>
				<div class="controls">
					<?php if (isset ( $this->_vars['form_email_error'] )): ?>
						<?php if (count((array)$this->_vars['form_email_error'])):  foreach ((array)$this->_vars['form_email_error'] as $this->_vars['error']): ?>
							<div style="margin:10px 0 0 0;" class="alert alert-danger">
								<button class="close" data-dismiss="alert">&times;</button>
								<?php echo $this->_vars['error']; ?>

							</div>
						<?php endforeach; endif; ?>
					<?php endif; ?>
					<input type="text" class="form-control reg_email" id="reg_email" name="reg_email" value="<?php if (isset ( $this->_vars['reg_email'] )):  echo $this->_vars['reg_email'];  endif; ?>" tabindex="12" maxlength="128"/>
					<br/><span class="reg_emailcheckitvalue"></span>
					
				</div>
			</div>
			<div class="control-group">
				<label class="control-label"><?php echo $this->_confs['PLIGG_Visual_Register_Password']; ?>
</label>
				<div class="controls">
					<?php if (isset ( $this->_vars['form_password_error'] )): ?>
						<?php if (count((array)$this->_vars['form_password_error'])):  foreach ((array)$this->_vars['form_password_error'] as $this->_vars['error']): ?>
							<div style="margin:10px 0 0 0;" class="alert alert-danger">
								<button class="close" data-dismiss="alert">&times;</button>
								<?php echo $this->_vars['error']; ?>

							</div>
						<?php endforeach; endif; ?>
					<?php endif; ?>
					<input type="password" class="form-control" id="reg_password" name="reg_password" value="<?php if (isset ( $this->_vars['reg_password'] )):  echo $this->_vars['reg_password'];  endif; ?>" size="25" tabindex="14"/>
					<p class="help-inline"><?php echo $this->_confs['PLIGG_Visual_Register_FiveChar']; ?>
</p>
				</div>
			</div>
			<div class="control-group">
				<label class="control-label"><?php echo $this->_confs['PLIGG_Visual_Register_Verify_Password']; ?>
</label>
				<div class="controls">
					<input type="password" class="form-control" id="reg_verify" name="reg_password2" value="<?php if (isset ( $this->_vars['reg_password2'] )):  echo $this->_vars['reg_password2'];  endif; ?>" size="25" tabindex="15"/>
				</div>
			</div>
			<?php if (isset ( $this->_vars['register_step_1_extra'] )): ?>
				<?php echo $this->_vars['register_step_1_extra']; ?>

			<?php endif; ?>
			<div class="form-actions">
				<input type="submit" name="submit" value="<?php echo $this->_confs['PLIGG_Visual_Register_Create_User']; ?>
" class="btn btn-primary reg_submit" tabindex="16" />
				<input type="hidden" name="regfrom" value="full" />
			</div>
		</form>
	</div><!--/.register-left -->
	<div class="col-md-6 register-right">
		<h2><?php echo $this->_confs['PLIGG_Visual_Register_Description_Title']; ?>
</h2>
		<p><?php echo $this->_confs['PLIGG_Visual_Register_Description_Paragraph']; ?>

			<ul>
				<?php echo $this->_confs['PLIGG_Visual_Register_Description_Points']; ?>

			</ul>
		</p>
	</div>
	<?php echo tpl_function_checkActionsTpl(array('location' => "tpl_pligg_register_end"), $this);?>
</div><!--/.register-wrapper -->
<!--/register_center.tpl -->