<?php /* V2.20 Template Lite, 8 March 2008. (c) Mark Dickenson, Jon Langevin. GNU LGPL. 2013-11-24 00:27:30 CET */ ?>

﻿<legend>ReCaptcha Configuration</legend>

<?php if (isset ( $this->_vars['msg'] )): ?>
	<div class="alert fade in">
		<a data-dismiss="alert" class="close">&times;</a>
		<?php echo $this->_vars['msg']; ?>

	</div>
<?php endif; ?>

<form>
	A 'Public Key' and a 'Private Key' are needed. You can get your own from <a href="http://recaptcha.net/whyrecaptcha.html">reCAPTCHA.net</a>.<br />
	To change your keys enter them in the input fields below and click the Submit Keys button.<br />
	<br />
	By default, Pligg uses a "global key" for ReCaptcha which allows any Pligg site to use ReCaptcha without configuring reCaptcha.<br />
	If you have mistakenly removed the default keys and aren't able to generate your own for your domain you can use these default values:<br />
	<strong>Public:</strong> 6LfwKQQAAAAAAPFCNozXDIaf8GobTb7LCKQw54EA<br />
	<strong>Private:</strong> 6LfwKQQAAAAAALQosKUrE4MepD0_kW7dgDZLR5P1<br />
	<br />
	<input type="hidden" name="module" value="captcha">
	<input type="hidden" name="captcha" value="reCaptcha">
	<input type="hidden" name="action" value="configure">
	
    <div class="control-group">
		<label class="control-label">Public Key:</label>
		<div class="controls">
			<input type="text" name="pubkey" class="form-control input-sm" value="<?php echo $this->_vars['captcha_pubkey']; ?>
">
		</div>
    </div>
    <div class="control-group">
		<label class="control-label">Private Key:</label>
		<div class="controls">
			<input type="text" name="prikey" class="form-control input-sm" value="<?php echo $this->_vars['captcha_prikey']; ?>
">
		</div>
    </div>
	<br />
	<input type="submit" class="btn btn-primary" value="Submit Keys">
</form>

<hr />
<a href="<?php echo $this->_vars['URL_captcha']; ?>
" class="btn btn-default">Return to the Captcha Settings Page</a>