<?php /* V2.20 Template Lite, 8 March 2008. (c) Mark Dickenson, Jon Langevin. GNU LGPL. 2013-11-24 00:26:34 CET */ ?>

<?php $this->config_load(links_lang_conf, null, null); ?>
<li<?php if ($this->_vars['modulename'] == "links"): ?> class="active"<?php endif; ?>><a href="<?php echo $this->_vars['my_pligg_base']; ?>
/module.php?module=links">Links Module</a></li>
<?php $this->config_load(links_pligg_lang_conf, null, null); ?>