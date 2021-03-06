<?php /* V2.20 Template Lite, 8 March 2008. (c) Mark Dickenson, Jon Langevin. GNU LGPL. 2013-11-24 01:00:49 CET */ ?>

<!-- home.tpl -->
<?php if ($this->_vars['amIadmin'] == 1): ?>
	<div class="column" id="left_column">
		<?php if (count((array)$this->_vars['widgets'])):  foreach ((array)$this->_vars['widgets'] as $this->_vars['widget']): ?>	
			<?php if ($this->_vars['widget']['column'] == 'left'): ?>
				<div class="portlet ui-widget ui-widget-content ui-helper-clearfix ui-corner-all" id="<?php echo $this->_vars['widget']['id']; ?>
">
					<?php $this->_vars['index']++; ?>
					<div class="portlet-header ui-widget-header">
						<div id="coda-nav-right-<?php echo $this->_vars['index']; ?>
" class="coda-nav-right">
							<?php if ($this->_vars['widget']['widget_uninstall_icon']): ?>
								<span onclick='if (confirm("Uninstall <?php echo $this->_vars['widget']['widget_title']; ?>
?")) window.location.href="admin_widgets.php?action=remove&widget="+encodeURIComponent("<?php echo $this->_vars['widget']['name']; ?>
")' class="ui-icon ui-icon-close"></span>
							<?php endif; ?>
							<?php if ($this->_vars['widget']['widget_shrink_icon']): ?>
								<span class="ui-icon <?php if ($this->_vars['widget']['display'] == 'none'): ?>ui-icon-plusthick<?php else: ?>ui-icon-minusthick<?php endif; ?>"></span>
							<?php endif; ?>
							<?php if ($this->_vars['widget']['widget_has_settings']): ?>
								<a href="#"><span class="ui-icon ui-icon-wrench"></span></a>
							<?php endif; ?>
						</div>
						<?php echo $this->_vars['widget']['widget_title']; ?>

					</div>
					<div class="portlet-content" <?php if ($this->_vars['widget']['display'] == 'none'): ?>style='display:none;'<?php endif; ?>>
						<div class="coda-slider-wrapper">
							<div class="coda-slider preload" id="coda-slider-<?php echo $this->_vars['index']; ?>
">
								<div class="panel" id="p<?php echo $this->_vars['widget']['id']; ?>
">
									<div class="panel-wrapper">
										<?php if ($this->_vars['widget']['lang_conf']):  $this->config_load($this->_vars['widget']['lang_conf'], null, null);  endif; ?>
										<?php $_templatelite_tpl_vars = $this->_vars;
echo $this->_fetch_compile_include($this->_vars['widget']['main'], array());
$this->_vars = $_templatelite_tpl_vars;
unset($_templatelite_tpl_vars);
 ?>
										<?php $this->config_load($this->_vars['pligg_lang_conf'], null, null); ?>
										<div style="clear:both;"> </div>
									</div>
								</div>
								<?php if ($this->_vars['widget']['widget_has_settings']): ?>
								<div class="panel">
									<div class="panel-wrapper">
										<?php if ($this->_vars['widget']['lang_conf']):  $this->config_load($this->_vars['widget']['lang_conf'], null, null);  endif; ?>
										<?php $_templatelite_tpl_vars = $this->_vars;
echo $this->_fetch_compile_include($this->_vars['widget']['settings'], array());
$this->_vars = $_templatelite_tpl_vars;
unset($_templatelite_tpl_vars);
 ?>
										<?php $this->config_load($this->_vars['pligg_lang_conf'], null, null); ?>
										<div style="clear:both;"> </div>
									</div>
								</div>
								<?php endif; ?>
							</div><!-- .coda-slider -->
						</div><!-- .coda-slider-wrapper -->
					</div>
				</div>
			<?php endif; ?>
		<?php endforeach; endif; ?>
	</div><!-- END LEFT COLUMN -->
	<div class="column" id="right_column"><!-- START RIGHT COLUMN -->
		<?php if (count((array)$this->_vars['widgets'])):  foreach ((array)$this->_vars['widgets'] as $this->_vars['widget']): ?>	
			<?php if ($this->_vars['widget']['column'] == 'right'): ?>
				<div class="portlet ui-widget ui-widget-content ui-helper-clearfix ui-corner-all" id="<?php echo $this->_vars['widget']['id']; ?>
">
					<?php $this->_vars['index']++; ?>
					<div class="portlet-header ui-widget-header">
						<div id="coda-nav-right-<?php echo $this->_vars['index']; ?>
" class="coda-nav-right">
							<?php if ($this->_vars['widget']['widget_uninstall_icon']): ?>
								<span onclick='if (confirm("Uninstall <?php echo $this->_vars['widget']['widget_title']; ?>
?")) window.location.href="admin_widgets.php?action=remove&widget="+encodeURIComponent("<?php echo $this->_vars['widget']['name']; ?>
")' class="ui-icon ui-icon-close"></span>
							<?php endif; ?>
							<?php if ($this->_vars['widget']['widget_shrink_icon']): ?>
								<span class="ui-icon <?php if ($this->_vars['widget']['display'] == 'none'): ?>ui-icon-plusthick<?php else: ?>ui-icon-minusthick<?php endif; ?>"></span>
							<?php endif; ?>
							<?php if ($this->_vars['widget']['widget_has_settings']): ?>
								<a href="#" data-slide="next"><span class="ui-icon ui-icon-wrench"></span></a>
							<?php endif; ?>
						</div>
						<?php echo $this->_vars['widget']['widget_title']; ?>

					</div>
					<div class="portlet-content" <?php if ($this->_vars['widget']['display'] == 'none'): ?>style='display:none;'<?php endif; ?>>
						<div class="coda-slider-wrapper">
							<div class="coda-slider preload" id="coda-slider-<?php echo $this->_vars['index']; ?>
">
								<div class="panel" id="p<?php echo $this->_vars['widget']['id']; ?>
">
									<div class="panel-wrapper">
										<?php if ($this->_vars['widget']['lang_conf']):  $this->config_load($this->_vars['widget']['lang_conf'], null, null);  endif; ?>
										<?php $_templatelite_tpl_vars = $this->_vars;
echo $this->_fetch_compile_include($this->_vars['widget']['main'], array());
$this->_vars = $_templatelite_tpl_vars;
unset($_templatelite_tpl_vars);
 ?>
										<?php $this->config_load($this->_vars['pligg_lang_conf'], null, null); ?>
										<div style="clear:both;"> </div>
									</div>
								</div>
								<?php if ($this->_vars['widget']['widget_has_settings']): ?>
								<div class="panel">
									<div class="panel-wrapper">
										<?php if ($this->_vars['widget']['lang_conf']):  $this->config_load($this->_vars['widget']['lang_conf'], null, null);  endif; ?>
										<?php $_templatelite_tpl_vars = $this->_vars;
echo $this->_fetch_compile_include($this->_vars['widget']['settings'], array());
$this->_vars = $_templatelite_tpl_vars;
unset($_templatelite_tpl_vars);
 ?>
										<?php $this->config_load($this->_vars['pligg_lang_conf'], null, null); ?>
										<div style="clear:both;"> </div>
									</div>
								</div>
								<?php endif; ?>
							</div><!-- .coda-slider -->
						</div><!-- .coda-slider-wrapper -->
					</div>
				</div>
			<?php endif; ?>
		<?php endforeach; endif; ?>
	</div>
<?php else: ?>
	<?php echo $this->_confs['PLIGG_Visual_AdminPanel_NoAccess']; ?>

<?php endif; ?>
<!--/home.tpl -->