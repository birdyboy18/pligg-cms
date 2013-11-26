<?php /* V2.20 Template Lite, 8 March 2008. (c) Mark Dickenson, Jon Langevin. GNU LGPL. 2013-11-24 06:04:02 CET */ ?>


<!-- group_center.tpl -->
<?php if ($this->_vars['enable_group'] == "true"): ?>
	<?php if ($this->_vars['pagename'] == "groups"): ?>
		<div class="well group_explain">
			<div class="group_explain_inner">
				<h2>Groups</h2>
				<div class="group_explain_description">
					<?php echo $this->_confs['PLIGG_Visual_Group_Explain']; ?>

				</div>
				<?php if ($this->_vars['group_allow'] == "1"): ?>
					<div class="create_group">
						<form>
							<input type="button" value="<?php echo $this->_confs['PLIGG_Visual_Submit_A_New_Group']; ?>
" onclick="window.location.href='<?php echo $this->_vars['URL_submit_groups']; ?>
'" class="btn btn-success">
						</form>
					</div>
				<?php endif; ?>
				<div class="search_groups">
					<div class="input-append">
						<form action="<?php echo $this->_vars['my_pligg_base']; ?>
/groups.php" method="get"	<?php if ($this->_vars['urlmethod'] == 2): ?>onsubmit="document.location.href = '<?php echo $this->_vars['my_base_url'];  echo $this->_vars['my_pligg_base']; ?>
/groups/search/' + encodeURIComponent(this.keyword.value); return false;"<?php endif; ?>>
							<input type="hidden" name="view" value="search">
							<?php if ($this->_vars['get']['keyword'] != ""): ?>
								<?php $this->assign('searchboxtext', $this->_vars['get']['keyword']); ?>		
							<?php endif; ?>
							<div class="col-md-8">
								<input type="text" class="form-control" name="keyword" value="<?php echo $this->_vars['searchboxtext']; ?>
" placeholder="<?php echo $this->_confs['PLIGG_Visual_Search_SearchDefaultText']; ?>
" onfocus="if(this.value == '<?php echo $this->_vars['searchboxtext']; ?>
') {this.value = '';}" onblur="if (this.value == '') {this.value = '<?php echo $this->_vars['searchboxtext']; ?>
';}">
							</div>
							<div class="col-md-4">
								<button class="btn btn-primary" type="submit"><?php echo $this->_confs['PLIGG_Visual_Group_Search_Groups']; ?>
</button>
							</div>
						</form>
					</div>
				</div>
				<div style="clear:both;"></div>
			</div>
		</div>
	<?php endif; ?>
	<?php if ($this->_vars['get']['keyword']): ?>
		<?php if ($this->_vars['group_display']): ?>
			<legend><?php echo $this->_confs['PLIGG_Visual_Search_SearchResults']; ?>
 &quot;<?php echo $this->_vars['search']; ?>
&quot;</legend>
		<?php else: ?>
			<legend><?php echo $this->_confs['PLIGG_Visual_Search_NoResults']; ?>
 &quot;<?php echo $this->_vars['search']; ?>
&quot;</legend>
		<?php endif; ?>
	<?php endif; ?>
	<?php echo $this->_vars['group_display']; ?>

	<div style="clear:both;"></div>
	<?php echo $this->_vars['group_pagination']; ?>

<?php endif; ?>
   <?php if ($this->_vars['enable_group'] != "true"): ?>
       <?php echo '
			<script type="text/javascript">
			   <!--
			   window.location="';  echo $this->_vars['my_base_url'];  echo $this->_vars['my_pligg_base']; ?>
/error_404.php<?php echo '";
			   //-->
			</script>
      '; ?>

   <?php endif; ?>
<!-- group_center.tpl -->