<?php /* V2.20 Template Lite, 8 March 2008. (c) Mark Dickenson, Jon Langevin. GNU LGPL. 2013-11-24 00:26:02 CET */ ?>

<?php $this->config_load(karma_lang_conf, null, null); ?>
<li<?php if ($this->_vars['modulename'] == "karma"): ?> class="active"<?php endif; ?>><a href="<?php echo $this->_vars['my_pligg_base']; ?>
/module.php?module=karma"><?php echo $this->_confs['PLIGG_Karma']; ?>
</a></li>
<?php $this->config_load(karma_pligg_lang_conf, null, null); ?>