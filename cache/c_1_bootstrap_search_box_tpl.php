<?php require_once('/Applications/MAMP/htdocs/pligg/plugins/function.checkActionsTpl.php'); $this->register_function("checkActionsTpl", "tpl_function_checkActionsTpl");  /* V2.20 Template Lite, 8 March 2008. (c) Mark Dickenson, Jon Langevin. GNU LGPL. 2013-11-24 00:29:03 CET */ ?>


<!-- search_box.tpl -->
<?php echo tpl_function_checkActionsTpl(array('location' => "tpl_pligg_search_start"), $this);?>
<script type="text/javascript">
	<?php if (! isset ( $this->_vars['searchboxtext'] )): ?>
		<?php $this->assign('searchboxtext', $this->_confs['PLIGG_Visual_Search_SearchDefaultText']); ?>			
	<?php endif; ?>
	var some_search='<?php echo $this->_vars['searchboxtext']; ?>
';
</script>
<div class="search">
	<form action="<?php echo $this->_vars['my_pligg_base']; ?>
/search.php" method="get" name="thisform-search" class="" role="form" id="thisform-search" <?php if ($this->_vars['urlmethod'] == 2): ?>onsubmit='document.location.href="<?php echo $this->_vars['my_base_url'];  echo $this->_vars['my_pligg_base']; ?>
/search/"+this.search.value.replace(/\//g,"|").replace(/\?/g,"%3F"); return false;'<?php endif; ?>>
		<div class="">
			<input type="text" class="" tabindex="20" name="search" id="searchsite" value="<?php echo $this->_vars['searchboxtext']; ?>
" onfocus="if(this.value == some_search) {this.value = '';}" onblur="if (this.value == '') {this.value = some_search;}"/>
		</div>
		<!-- <div class="form-group col-md-4">
			<button type="submit" tabindex="21" class="btn btn-primary custom_nav_search_button" /><?php echo $this->_confs['PLIGG_Visual_Search_Go']; ?>
</button>
		</div> -->
	</form>
	<div style="clear:both;"></div>
</div>
<?php echo tpl_function_checkActionsTpl(array('location' => "tpl_pligg_search_end"), $this);?>
<!--/search_box.tpl -->
