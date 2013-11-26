<?php /* V2.20 Template Lite, 8 March 2008. (c) Mark Dickenson, Jon Langevin. GNU LGPL. 2013-11-24 01:00:50 CET */ ?>

<?php echo '
<style type="text/css">
.pligg_cms_widget {
	list-style-type: none;
    margin: 0;
    padding: 5px 4px;
}
.pligg_cms_widget li{
	margin:0 0 6px 0 !important;
}
</style>
'; ?>

<ul class="pligg_cms_widget">
	<li><img src="<?php echo $this->_vars['my_pligg_base']; ?>
/widgets/pligg_cms/templates/pligg.gif" align="absmiddle"/> <a href="http://pligg.com/support/" target="_blank">General Pligg Support</a></li>
	<li><img src="<?php echo $this->_vars['my_pligg_base']; ?>
/widgets/pligg_cms/templates/bug.png" align="absmiddle"/> <a href="https://github.com/Pligg/pligg-cms/issues" target="_blank">Report a Bug</a></li>
	<li><img src="<?php echo $this->_vars['my_pligg_base']; ?>
/widgets/pligg_cms/templates/cart.png" align="absmiddle"/> <a href="http://pligg.com/downloads/" target="_blank"><?php echo $this->_confs['PLIGG_Visual_AdminPanel_Shop']; ?>
</a></li>
	<li><img src="<?php echo $this->_vars['my_pligg_base']; ?>
/widgets/pligg_cms/templates/money.png" align="absmiddle"/> <a href="http://pligg.com/vendors/information/" target="_blank">Sell Your Add-Ons</a></li>
</ul>
