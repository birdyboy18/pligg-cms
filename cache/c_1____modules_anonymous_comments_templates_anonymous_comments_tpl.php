<?php /* V2.20 Template Lite, 8 March 2008. (c) Mark Dickenson, Jon Langevin. GNU LGPL. 2013-11-24 01:40:07 CET */ ?>

<?php $this->config_load(anonymous_comments_lang_conf, null, null); ?>

<?php echo '
<script type="text/javascript">
	function validate(form_id,email) {
		var reg = /^([A-Za-z0-9_\\-\\.])+\\@([A-Za-z0-9_\\-\\.])+\\.([A-Za-z]{2,4})$/;
		var address = document.forms[form_id].elements[email].value;
		if(reg.test(address) == false) {
			alert(\'Invalid Email Address\');
			return false;
		}
	}
</script>
'; ?>


<fieldset><legend><?php echo $this->_confs['PLIGG_Anonymous_Comment_Submit_Comment']; ?>
</legend>	
	<form action="" method="POST" id="thisform" onsubmit="javascript:return validate('thisform','a_email');">
		<span><b>&nbsp;<?php echo $this->_confs['PLIGG_Anonymous_Comment_Name']; ?>
 :&nbsp;</b></span><br/><input  type ="text" name = "a_username" /><?php echo $this->_vars['a_username']; ?>
<br clear="all" />

		<label><?php echo $this->_confs['PLIGG_Anonymous_Comment_NoHTML']; ?>
</label><br clear="all" />
		<textarea name="<?php echo $_SESSION['commentname']; ?>
" id="comment" rows="6" cols="60"/><?php if (isset ( $this->_vars['TheComment'] )):  echo $this->_vars['TheComment'];  endif; ?></textarea><br />
		<br/>
		<?php if (isset ( $this->_vars['register_step_1_extra'] )): ?>
			<br />
			<?php echo $this->_vars['register_step_1_extra']; ?>

		<?php endif; ?>
		<input type="submit" name="submit" value="<?php echo $this->_confs['PLIGG_Anonymous_Comment_Submit']; ?>
" class="btn btn-default" />
		<input type="hidden" name="process" value="newcomment" />
		<input type="hidden" name="randkey" value="<?php echo $this->_vars['randkey']; ?>
" />
		<input type="hidden" name="link_id" value="<?php echo $this->_vars['link_id']; ?>
" />
		<input type="hidden" name="user_id" value="<?php echo $this->_vars['anonymous_user_id']; ?>
" />
		<input type="hidden" name="anon" value="1" />
	</form>
</fieldset>

<?php $this->config_load(anonymous_comments_pligg_lang_conf, null, null); ?>
