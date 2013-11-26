<?php /* V2.20 Template Lite, 8 March 2008. (c) Mark Dickenson, Jon Langevin. GNU LGPL. 2013-11-24 00:27:25 CET */ ?>

﻿<?php $this->config_load(captcha_lang_conf, null, null); ?>

<legend><?php echo $this->_confs['Pligg_Captcha_Settings']; ?>
</legend>
<?php if (isset ( $this->_vars['msg'] )): ?>
	<div class="alert fade in">
		<a data-dismiss="alert" class="close">&times;</a>
		<?php echo $this->_vars['msg']; ?>

	</div>
<?php endif; ?>
<p><?php echo $this->_confs['Pligg_Captcha_Description']; ?>
</p>
<table class="table table-bordered table-striped" cellpadding="0" cellspacing="0">
	<thead>
		<tr><th colspan="2"><?php echo $this->_confs['Pligg_Captcha_Captchas']; ?>
</th><tr>
	</thead>
	<tbody>
		<tr>
			<td><?php echo $this->_confs['Pligg_Captcha_Solve_Media']; ?>
: </td>
			<td> 
				<div id="tab" class="btn-group">
					<?php if ($this->_vars['captcha_method'] == "solvemedia"): ?>
						<span class="btn btn-success disabled" disabled><?php echo $this->_confs['PLIGG_Captcha_Active']; ?>
</span>
					<?php else: ?>
						<a class="btn btn-primary" href="module.php?module=captcha&captcha=solvemedia&action=enable"><?php echo $this->_confs['PLIGG_Captcha_Enable']; ?>
</a>
					<?php endif; ?>
					<a class="btn btn-default" href="module.php?module=captcha&captcha=solvemedia&action=configure"><?php echo $this->_confs['PLIGG_Captcha_Configure']; ?>
</a>
				</div>

			</td>
		</tr>
		<tr>
			<td><?php echo $this->_confs['Pligg_Captcha_recaptcha']; ?>
: </td>
			<td>
				<div id="tab" class="btn-group">
					<?php if ($this->_vars['captcha_method'] == "reCaptcha"): ?>
						<span class="btn btn-success disabled" disabled><?php echo $this->_confs['PLIGG_Captcha_Active']; ?>
</span>
					<?php else: ?>
						<a class="btn btn-primary" href="module.php?module=captcha&captcha=reCaptcha&action=enable"><?php echo $this->_confs['PLIGG_Captcha_Enable']; ?>
</a>
					<?php endif; ?>
					<a class="btn btn-default" href="module.php?module=captcha&captcha=reCaptcha&action=configure"><?php echo $this->_confs['PLIGG_Captcha_Configure']; ?>
</a>
				</div>
			</td>
		</tr>
		<tr>
			<td><?php echo $this->_confs['Pligg_Captcha_whitehat']; ?>
: </td>
			<td>
				<div id="tab" class="btn-group">
					<?php if ($this->_vars['captcha_method'] == "WhiteHat"): ?>
						<span class="btn btn-success disabled" disabled><?php echo $this->_confs['PLIGG_Captcha_Active']; ?>
</span>
					<?php else: ?>
						<a class="btn btn-primary" href="module.php?module=captcha&captcha=WhiteHat&action=enable"><?php echo $this->_confs['PLIGG_Captcha_Enable']; ?>
</a>
					<?php endif; ?>
				</div>
			</td>
		</tr>
		<tr>
			<td><?php echo $this->_confs['Pligg_Captcha_math']; ?>
: </td>
			<td>
				<div id="tab" class="btn-group">
					<?php if ($this->_vars['captcha_method'] == "math"): ?>
						<span class="btn btn-success disabled" disabled><?php echo $this->_confs['PLIGG_Captcha_Active']; ?>
</span>
					<?php else: ?>
						<a class="btn btn-primary" href="module.php?module=captcha&captcha=math&action=enable"><?php echo $this->_confs['PLIGG_Captcha_Enable']; ?>
</a>
					<?php endif; ?>
					<a class="btn btn-default" href="module.php?module=captcha&captcha=math&action=configure"><?php echo $this->_confs['PLIGG_Captcha_Configure']; ?>
</a>
				</div>
			</td>
		</tr>
	</tbody>
	<thead>
		<tr><th colspan="2"><?php echo $this->_confs['Pligg_Captcha_options']; ?>
</th><tr>
	</thead>
	<tbody>
		<tr>
			<td><?php echo $this->_confs['Pligg_Captcha_register']; ?>
:  </td>
			<td>
				<div id="tab" class="btn-group">
					<a href="module.php?module=captcha&captcha=default&action=EnableReg&value=true" class="btn btn-default <?php if ($this->_vars['captcha_reg_enabled'] == true): ?>active<?php endif; ?>"><?php echo $this->_confs['PLIGG_Captcha_Enable']; ?>
</a>
					<a href="module.php?module=captcha&captcha=default&action=EnableReg&value=false" class="btn btn-default <?php if ($this->_vars['captcha_reg_enabled'] == false): ?>active<?php endif; ?>"><?php echo $this->_confs['PLIGG_Captcha_Disable']; ?>
</a>
				</div>
			</td>
		</tr>
		<tr>
			<td><?php echo $this->_confs['Pligg_Captcha_story']; ?>
:  </td>
			<td>
				<div id="tab" class="btn-group">
					<a href="module.php?module=captcha&captcha=default&action=EnableStory&value=true" class="btn btn-default <?php if ($this->_vars['captcha_story_enabled'] == true): ?>active<?php endif; ?>"><?php echo $this->_confs['PLIGG_Captcha_Enable']; ?>
</a>
					<a href="module.php?module=captcha&captcha=default&action=EnableStory&value=false" class="btn btn-default <?php if ($this->_vars['captcha_story_enabled'] == false): ?>active<?php endif; ?>"><?php echo $this->_confs['PLIGG_Captcha_Disable']; ?>
</a>
				</div>
			</td>
		</tr>
		<tr>
			<td><?php echo $this->_confs['Pligg_Captcha_comment']; ?>
:  </td>
			<td>
				<div id="tab" class="btn-group">
					<a href="module.php?module=captcha&captcha=default&action=EnableComment&value=true" class="btn btn-default <?php if ($this->_vars['captcha_comment_enabled'] == true): ?>active<?php endif; ?>"><?php echo $this->_confs['PLIGG_Captcha_Enable']; ?>
</a>
					<a href="module.php?module=captcha&captcha=default&action=EnableComment&value=false" class="btn btn-default <?php if ($this->_vars['captcha_comment_enabled'] == false): ?>active<?php endif; ?>"><?php echo $this->_confs['PLIGG_Captcha_Disable']; ?>
</a>
				</div>
			</td>
		</tr>
	</tbody>
</table>
<?php $this->config_load(captcha_pligg_lang_conf, null, null); ?>