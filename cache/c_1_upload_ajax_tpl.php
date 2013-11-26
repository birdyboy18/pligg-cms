<?php /* V2.20 Template Lite, 8 March 2008. (c) Mark Dickenson, Jon Langevin. GNU LGPL. 2013-11-24 04:31:12 CET */ ?>






<fieldset style="border:1px solid #eee;padding:10px;margin-bottom:10px;" class="upload_ajax">

<table class="upload_ajax_table">
	<?php if (count((array)$this->_vars['images'])):  foreach ((array)$this->_vars['images'] as $this->_vars['image']): ?>
		<?php 
			if ($this->_vars['display'][$this->_vars['image']['file_size']]>0)
			{
		 ?>
			<tr class="upload_ajax_label">
				<td><?php echo $this->_vars['file']; ?>
</td>
			</tr>
			<tr class="upload_ajax_image">
				<td>
					<?php 
						// Get the image URL
						$image =  $this->_vars['my_base_url'].$this->_vars['my_pligg_base'].$this->_vars['upload_directory'].'/'.$this->_vars['image']['file_name'];
						// echo $image;
						
						// Assign $height and $width variables
						list($width, $height) = getimagesize($image);
						
						// Check that the height and width is within the 1-100px range
						if ((1 <= $width) && ($width <= 100)){
							// Use exact width between 1-100px
						} elseif ( $width > 100 ){
							$width = '100';
						} else {
							$width = '';
						}
						
						if ((1 <= $height) && ($height <= 100)){
							// Use exact height between 1-100px
						} elseif ( $height > 100 ){
							$height = '100';
						} else {
							$height = '';
						}
						
						global $main_smarty;
						$main_smarty->assign('image_width', $width);
						$main_smarty->assign('image_height', $height);

					 ?>
					<?php if (strpos ( $this->_vars['image']['file_name'] , 'http' ) === 0): ?>
						<a href="<?php echo $this->_vars['image']['file_name']; ?>
"><img src='<?php echo $this->_vars['image']['file_name']; ?>
' height="<?php echo $this->_vars['image_height']; ?>
" width="<?php echo $this->_vars['image_width']; ?>
" class="upload_ajax_image_preview"/></a>
					<?php elseif ($this->_vars['image']['file_size'] == 'orig'): ?>
						<a href="<?php echo $this->_vars['my_pligg_base'];  echo $this->_vars['upload_directory']; ?>
/<?php echo $this->_vars['image']['file_name']; ?>
" target="_blank"><img  src='<?php echo $this->_vars['my_pligg_base'];  echo $this->_vars['upload_directory']; ?>
/<?php echo $this->_vars['image']['file_name']; ?>
' height="<?php echo $this->_vars['image_height']; ?>
" width="<?php echo $this->_vars['image_width']; ?>
" class="upload_ajax_image_preview" /></a>
					<?php else: ?>
						<img src='<?php echo $this->_vars['my_pligg_base'];  echo $this->_vars['upload_thdirectory']; ?>
/<?php echo $this->_vars['image']['file_name']; ?>
' height="<?php echo $this->_vars['image_height']; ?>
" width="<?php echo $this->_vars['image_width']; ?>
" class="upload_ajax_image_preview"/>
					<?php endif; ?>
				</td>
			</tr>
			
		<?php 
			}
		 ?>
	<?php endforeach; endif; ?>
	
	<tr class="upload_ajax_remove">
		<td>
			<input type='button' class="btn btn-danger upload_ajax_remove_button" value='Remove Attachment' onclick='deleteImage(<?php echo $this->_vars['submit_id']; ?>
,<?php echo $this->_vars['number']; ?>
);'>
		</td>
	</tr>

	<?php if ($this->_vars['upload_allow_hide']): ?>
		<tr class="upload_ajax_hide">
			<td>
				<?php if ($this->_vars['ispicture']): ?>
					<input type='checkbox' onclick='switchImage(<?php echo $this->_vars['submit_id']; ?>
,<?php echo $this->_vars['number']; ?>
,"thumb");' <?php if ($this->_vars['hide_thumb']): ?>checked<?php endif; ?>> <?php echo $this->_confs['PLIGG_Upload_Off_Thumb']; ?>
<br>
				<?php endif; ?>
				<input type='checkbox' onclick='switchImage(<?php echo $this->_vars['submit_id']; ?>
,<?php echo $this->_vars['number']; ?>
,"file");'  <?php if ($this->_vars['hide_file']): ?>checked<?php endif; ?>> <?php echo $this->_confs['PLIGG_Upload_Off_File']; ?>

			</td>
		</tr>
	<?php endif; ?>

</table>

</fieldset>
