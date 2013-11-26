<?php /* V2.20 Template Lite, 8 March 2008. (c) Mark Dickenson, Jon Langevin. GNU LGPL. 2013-11-24 00:29:03 CET */ ?>

<?php $this->config_load($this->_vars['simple_messaging_lang_conf'], null, null); ?>
<?php if ($this->_vars['user_authenticated'] == true): ?>
	<li <?php if ($this->_vars['modulename_sm'] != ""): ?>class="active"<?php endif; ?>>
		<a href="<?php echo $this->_vars['URL_simple_messaging_inbox']; ?>
" <?php if ($this->_vars['msg_new_count'] > 0): ?>class="simple_messaging_alert"<?php endif; ?>><?php echo $this->_confs['PLIGG_MESSAGING_Inbox'];  if ($this->_vars['msg_new_count'] > 0): ?> <span class="label label-warning"><?php echo $this->_vars['msg_new_count']; ?>
</span><?php endif; ?></a>
	</li>
<?php endif; ?>
<?php $this->config_load(simple_messaging_pligg_lang_conf, null, null); ?>