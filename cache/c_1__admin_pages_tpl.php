<?php require_once('/Applications/MAMP/htdocs/pligg/plugins/function.checkActionsTpl.php'); $this->register_function("checkActionsTpl", "tpl_function_checkActionsTpl");  /* V2.20 Template Lite, 8 March 2008. (c) Mark Dickenson, Jon Langevin. GNU LGPL. 2013-11-24 04:16:44 CET */ ?>

<!-- pages.tpl -->
<legend><?php echo $this->_confs['PLIGG_Visual_AdminPanel_Manage_Pages']; ?>
</legend>
<br />
<table class="table table-condensed table-bordered table-striped">
	<thead>
		<tr>
			<?php echo tpl_function_checkActionsTpl(array('location' => "tpl_pligg_admin_pages_th_start"), $this);?>
			<th class="page_th_title"><?php echo $this->_confs['PLIGG_Visual_AdminPanel_Page_Submit_Title']; ?>
</th>
			<th class="page_th_edit"><?php echo $this->_confs['PLIGG_Visual_AdminPanel_Page_Edit']; ?>
</th>
			<th class="page_th_delete"><?php echo $this->_confs['PLIGG_Visual_AdminPanel_Page_Delete']; ?>
</th>
			<?php echo tpl_function_checkActionsTpl(array('location' => "tpl_pligg_admin_pages_th_end"), $this);?>
		</tr>
	</thead>
	<tbody>
		<?php echo $this->_vars['page_title']; ?>

	</tbody>
</table>
<?php echo $this->_vars['page_text']; ?>

<a class="btn btn-success" href="<?php echo $this->_vars['my_base_url'];  echo $this->_vars['my_pligg_base']; ?>
/admin/submit_page.php" title="<?php echo $this->_confs['PLIGG_Visual_AdminPanel_Page_Submit_New']; ?>
"><?php echo $this->_confs['PLIGG_Visual_AdminPanel_Page_Submit_New']; ?>
</a>
<!--/pages.tpl -->