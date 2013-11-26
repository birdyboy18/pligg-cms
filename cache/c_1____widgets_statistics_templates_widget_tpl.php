<?php require_once('/Applications/MAMP/htdocs/pligg/plugins/function.checkActionsTpl.php'); $this->register_function("checkActionsTpl", "tpl_function_checkActionsTpl");  /* V2.20 Template Lite, 8 March 2008. (c) Mark Dickenson, Jon Langevin. GNU LGPL. 2013-11-24 01:00:49 CET */ ?>

<?php echo tpl_function_checkActionsTpl(array('location' => "tpl_pligg_admin_stats_widget_start"), $this);?>
<table class="table table-condensed table-striped" style="margin-bottom:0;">
	<?php if ($this->_vars['sw_version'] == "1"): ?>
		<tr>
			<td>
				<strong>
				<?php echo $this->_confs['PLIGG_Statistics_Widget_Version']; ?>
:
				</strong>
			</td>
			<td>
				<?php echo $this->_vars['version_number']; ?>

			</td>
		</tr>
	<?php endif; ?>
	<?php if ($this->_vars['sw_members'] == "1"): ?>
		<tr>
			<td>
				<strong>
				<?php echo $this->_confs['PLIGG_Statistics_Widget_Front_Members']; ?>
:
				</strong>
			</td>
			<td>
				<?php echo $this->_vars['members']; ?>

			</td>
		</tr>
	<?php endif; ?>
	<?php if ($this->_vars['sw_groups'] == "1"): ?>
		<tr>
			<td>
				<strong>
				<?php echo $this->_confs['PLIGG_Statistics_Widget_Front_Groups']; ?>
:
				</strong>
			</td>
			<td>
				<?php echo $this->_vars['grouptotal']; ?>

			</td>
		</tr>
	<?php endif; ?>
	<?php if ($this->_vars['sw_links'] == "1"): ?>
		<tr>
			<td>
				<strong>
				<?php echo $this->_confs['PLIGG_Statistics_Widget_Front_Submissions']; ?>
:
				</strong>
			</td>
			<td>
				<?php echo $this->_vars['total']; ?>

			</td>
		</tr>
	<?php endif; ?>
	<?php if ($this->_vars['sw_members'] == "1"): ?>
		<tr>
			<td>
				<strong>
				<?php echo $this->_confs['PLIGG_Statistics_Widget_Front_Published']; ?>
:
				</strong>
			</td>
			<td>
				<?php echo $this->_vars['published_submissions_count']; ?>

			</td>
		</tr>
	<?php endif; ?>
	<?php if ($this->_vars['sw_members'] == "1"): ?>
		<tr>
			<td>
				<strong>
				<?php echo $this->_confs['PLIGG_Statistics_Widget_Front_New']; ?>
:
				</strong>
			</td>
			<td>
				<?php echo $this->_vars['new_submissions_count']; ?>

			</td>
		</tr>
	<?php endif; ?>
	<?php if ($this->_vars['sw_members'] == "1"): ?>
		<tr>
			<td>
				<strong>
				<?php echo $this->_confs['PLIGG_Statistics_Widget_Front_Votes']; ?>
:
				</strong>
			</td>
			<td>
				<?php echo $this->_vars['votes']; ?>

			</td>
		</tr>
	<?php endif; ?>
	<?php if ($this->_vars['sw_members'] == "1"): ?>
		<tr>
			<td>
				<strong>
				<?php echo $this->_confs['PLIGG_Statistics_Widget_Front_Comments']; ?>
:
				</strong>
			</td>
			<td>
				<?php echo $this->_vars['comments']; ?>

			</td>
		</tr>
	<?php endif; ?>
	<?php if ($this->_vars['sw_members'] == "1"): ?>
		<tr>
			<td>
				<strong>
				<?php echo $this->_confs['PLIGG_Statistics_Widget_Front_Member']; ?>
:
				</strong>
			</td>
			<td>
				<a href="<?php echo $this->_vars['URL_user'].$this->_vars['last_user']; ?>
" title="<?php echo $this->_confs['PLIGG_Visual_AdminPanel_Latest_User']; ?>
"><?php echo $this->_vars['last_user']; ?>
</a>
			</td>
		</tr>
	<?php endif; ?>
	<?php if ($this->_vars['sw_members'] == "1"): ?>
		<tr>
			<td>
				<strong>
				<?php echo $this->_confs['PLIGG_Statistics_Widget_PHP_Version']; ?>
:
				</strong>
			</td>
			<td>
				<?php if ($this->_vars['phpver'] == "1"):  
					if( function_exists( "phpversion" ) ){
						print phpversion();
					}else{
						print 'Unknown';
					}
				  endif; ?>
			</td>
		</tr>
	<?php endif; ?>
	<?php if ($this->_vars['sw_members'] == "1"): ?>
		<tr>
			<td>
				<strong>
				<?php echo $this->_confs['PLIGG_Statistics_Widget_MySQL_Version']; ?>
:
				</strong>
			</td>
			<td>
				<?php 
					function find_SQL_Version() {
						$output = shell_exec('mysql -V');
						preg_match('@[0-9]+\.[0-9]+\.[0-9]+@', $output, $version);
						if ($version[0] != ''){
							return $version[0];
						}else{
							return 'Unknown';
						}
					}
					echo find_SQL_Version();
				 ?>
			</td>
		</tr>
	<?php endif; ?>
	<?php if ($this->_vars['sw_members'] == "1"): ?>
		<tr>
			<td>
				<strong>
				<?php echo $this->_confs['PLIGG_Statistics_Widget_DB_Size']; ?>
:
				</strong>
			</td>
			<td>
				<?php echo $this->_vars['dbsize']; ?>

			</td>
		</tr>
	<?php endif; ?>
	<?php echo tpl_function_checkActionsTpl(array('location' => "tpl_pligg_admin_stats_widget_intable"), $this);?>
</table>
<?php echo tpl_function_checkActionsTpl(array('location' => "tpl_pligg_admin_stats_widget_end"), $this);?>