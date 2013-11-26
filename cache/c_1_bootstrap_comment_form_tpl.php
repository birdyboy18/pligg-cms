<?php require_once('/Applications/MAMP/htdocs/pligg/plugins/function.checkActionsTpl.php'); $this->register_function("checkActionsTpl", "tpl_function_checkActionsTpl");  /* V2.20 Template Lite, 8 March 2008. (c) Mark Dickenson, Jon Langevin. GNU LGPL. 2013-11-24 04:52:35 CET */ ?>


<!-- comment_form.tpl -->
<a name="discuss"></a>
<?php echo tpl_function_checkActionsTpl(array('location' => "tpl_pligg_story_comments_form_start"), $this);?>
<form action="" method="post" id="thisform" name="mycomment_form">
<div class="form-horizontal">
	<fieldset>
		<?php echo tpl_function_checkActionsTpl(array('location' => "tpl_pligg_story_comments_submit_start"), $this);?>
		<div class="control-group">
			<label for="fileInput" class="control-label"><?php echo $this->_confs['PLIGG_Visual_Comment_Send']; ?>
</label>
			<div class="controls">
				<textarea autofocus="autofocus" name="<?php echo $_SESSION['commentname']; ?>
" id="comment_content" class="form-control comment-form" rows="6" /><?php if (isset ( $this->_vars['TheComment'] )):  echo $this->_vars['TheComment'];  endif; ?></textarea>
				<p class="help-inline"><?php echo $this->_confs['PLIGG_Visual_Comment_NoHTML']; ?>
</p>
			</div>
		</div>
        
		<?php if (isset ( $this->_vars['register_step_1_extra'] )): ?>
			<?php echo $this->_vars['register_step_1_extra']; ?>

		<?php endif; ?>
		<?php echo tpl_function_checkActionsTpl(array('location' => "tpl_pligg_story_comments_submit_end"), $this);?>
		<div class="form-actions">
			<input type="hidden" name="process" value="newcomment" />
			<input type="hidden" name="randkey" value="<?php echo $this->_vars['randkey']; ?>
" />
			<input type="hidden" name="link_id" value="<?php echo $this->_vars['link_id']; ?>
" />
			<input type="hidden" name="user_id" value="<?php echo $this->_vars['user_id']; ?>
" />
            <input type="hidden" name="parrent_comment_id" value="<?php echo $this->_vars['parrent_comment_id']; ?>
" />
			<input type="submit" name="submit" value="<?php echo $this->_confs['PLIGG_Visual_Comment_Submit']; ?>
" class="btn btn-primary" />
		</div>
	</fieldset>
</div><!--/.form-horizontal -->
</form>
<?php echo tpl_function_checkActionsTpl(array('location' => "tpl_pligg_story_comments_form_end"), $this);?>
<!--/comment_form.tpl -->