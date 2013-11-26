<?php require_once('/Applications/MAMP/htdocs/pligg/plugins/function.checkActionsTpl.php'); $this->register_function("checkActionsTpl", "tpl_function_checkActionsTpl");  /* V2.20 Template Lite, 8 March 2008. (c) Mark Dickenson, Jon Langevin. GNU LGPL. 2013-11-24 00:29:08 CET */ ?>


<!-- submit_step_1_center.tpl -->
<legend><?php echo $this->_confs['PLIGG_Visual_Submit1_Header']; ?>
</legend>
<div class="submit">
	<h3><?php echo $this->_confs['PLIGG_Visual_Submit1_Instruct']; ?>
:</h3>
	<?php echo tpl_function_checkActionsTpl(array('location' => "tpl_pligg_submit_step1_start"), $this);?>
	<div class="submit_instructions">
		<ul class="instructions">
			<?php if ($this->_confs['PLIGG_Visual_Submit1_Instruct_1A'] != ''): ?><li><strong><?php echo $this->_confs['PLIGG_Visual_Submit1_Instruct_1A']; ?>
:</strong> <?php echo $this->_confs['PLIGG_Visual_Submit1_Instruct_1B']; ?>
</li><?php endif; ?>
			<?php if ($this->_confs['PLIGG_Visual_Submit1_Instruct_2A'] != ''): ?><li><strong><?php echo $this->_confs['PLIGG_Visual_Submit1_Instruct_2A']; ?>
:</strong> <?php echo $this->_confs['PLIGG_Visual_Submit1_Instruct_2B']; ?>
</li><?php endif; ?>
			<?php if ($this->_confs['PLIGG_Visual_Submit1_Instruct_3A'] != ''): ?><li><strong><?php echo $this->_confs['PLIGG_Visual_Submit1_Instruct_3A']; ?>
:</strong> <?php echo $this->_confs['PLIGG_Visual_Submit1_Instruct_3B']; ?>
</li><?php endif; ?>
			<?php if ($this->_confs['PLIGG_Visual_Submit1_Instruct_4A'] != ''): ?><li><strong><?php echo $this->_confs['PLIGG_Visual_Submit1_Instruct_4A']; ?>
:</strong> <?php echo $this->_confs['PLIGG_Visual_Submit1_Instruct_4B']; ?>
</li><?php endif; ?>
			<?php if ($this->_confs['PLIGG_Visual_Submit1_Instruct_5A'] != ''): ?><li><strong><?php echo $this->_confs['PLIGG_Visual_Submit1_Instruct_5A']; ?>
:</strong> <?php echo $this->_confs['PLIGG_Visual_Submit1_Instruct_5B']; ?>
</li><?php endif; ?>
			<?php if ($this->_confs['PLIGG_Visual_Submit1_Instruct_6A'] != ''): ?><li><strong><?php echo $this->_confs['PLIGG_Visual_Submit1_Instruct_6A']; ?>
:</strong> <?php echo $this->_confs['PLIGG_Visual_Submit1_Instruct_6B']; ?>
</li><?php endif; ?>
			<?php if ($this->_confs['PLIGG_Visual_Submit1_Instruct_7A'] != ''): ?><li><strong><?php echo $this->_confs['PLIGG_Visual_Submit1_Instruct_7A']; ?>
:</strong> <?php echo $this->_confs['PLIGG_Visual_Submit1_Instruct_7B']; ?>
</li><?php endif; ?>
		</ul>
	</div>
	<?php echo tpl_function_checkActionsTpl(array('location' => "tpl_pligg_submit_step1_middle"), $this);?>
	<form action="<?php if ($this->_vars['UrlMethod'] == "2"):  echo $this->_vars['URL_submit'];  else: ?>submit.php<?php endif; ?>" method="post" class="form-inline" id="thisform">
		<h3><?php echo $this->_confs['PLIGG_Visual_Submit1_NewsSource']; ?>
</h3>
		<label for="url"><?php echo $this->_confs['PLIGG_Visual_Submit1_NewsURL']; ?>
:</label>
		<div class="row">
			<div class="col-md-5 form-group">
				<input autofocus="autofocus" type="text" name="url" class="form-control col-md-12" id="url" placeholder="http://" />
			</div>
			<div class="col-md-2 form-group">
				<input type="hidden" name="phase" value="1">
				<input type="hidden" name="randkey" value="<?php echo $this->_vars['submit_rand']; ?>
">
				<input type="hidden" name="id" value="c_1">
				<input type="submit" value="<?php echo $this->_confs['PLIGG_Visual_Submit1_Continue']; ?>
" class="col-md-12 btn btn-primary" />
			</div>
		</div>
		<?php echo tpl_function_checkActionsTpl(array('location' => "tpl_pligg_submit_step1_end"), $this);?>
	</form>
	<hr />
	<div class="bookmarklet">
		<h3><?php echo $this->_confs['PLIGG_Visual_User_Profile_Bookmarklet_Title']; ?>
</h3>
		<p><?php echo $this->_confs['PLIGG_Visual_User_Profile_Bookmarklet_Title_1']; ?>
 <?php echo $this->_confs['PLIGG_Visual_Name']; ?>
.<?php echo $this->_confs['PLIGG_Visual_User_Profile_Bookmarklet_Title_2']; ?>
<br />
		<br /><strong><?php echo $this->_confs['PLIGG_Visual_User_Profile_IE']; ?>
:</strong> <?php echo $this->_confs['PLIGG_Visual_User_Profile_IE_1']; ?>

		<br /><strong><?php echo $this->_confs['PLIGG_Visual_User_Profile_Firefox']; ?>
:</strong> <?php echo $this->_confs['PLIGG_Visual_User_Profile_Firefox_1']; ?>

		<br /><strong><?php echo $this->_confs['PLIGG_Visual_User_Profile_Opera']; ?>
:</strong> <?php echo $this->_confs['PLIGG_Visual_User_Profile_Opera_1']; ?>

		<br /><br /><strong><?php echo $this->_confs['PLIGG_Visual_User_Profile_The_Bookmarklet']; ?>
: <?php $_templatelite_tpl_vars = $this->_vars;
echo $this->_fetch_compile_include($this->_vars['the_template']."/bookmarklet.tpl", array());
$this->_vars = $_templatelite_tpl_vars;
unset($_templatelite_tpl_vars);
 ?></strong>
		</p>
	</div>
</div>
<!-- submit_step_1_center.tpl -->