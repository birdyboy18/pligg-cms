<?php /* V2.20 Template Lite, 8 March 2008. (c) Mark Dickenson, Jon Langevin. GNU LGPL. 2013-11-25 14:03:09 CET */ ?>

<?php $this->config_load(upload_lang_conf, null, null); ?>

<legend> <?php echo $this->_confs['PLIGG_Upload']; ?>
</legend>
<?php echo $this->_confs['PLIGG_Upload_Instructions']; ?>

<br />

<form action="" method="POST" id="thisform">

	<legend><?php echo $this->_confs['PLIGG_Upload_General']; ?>
</legend>
	<br />

	<table class="table table-bordered table-striped">
		<tbody>
			<tr>
				<td style="min-width:130px;width:200px;"><label><a href="#<?php echo $this->_confs['PLIGG_Upload_Storage_Directory']; ?>
"><?php echo $this->_confs['PLIGG_Upload_Storage_Directory']; ?>
</a>:</label></td>
				<td><input type="text" name="upload_directory" id="upload_directory" value="<?php echo $this->_vars['settings']['directory']; ?>
" class="form-control"/></td>
			</tr>
			<tr>
				<td><label><a href="#<?php echo $this->_confs['PLIGG_Upload_File_Size']; ?>
"><?php echo $this->_confs['PLIGG_Upload_File_Size']; ?>
</a>:</label></td>
				<td>
					<div class="input-append">
					</div>
					<div class="input-group" style="width:100px;">
						<input type="text" name="upload_filesize" id="upload_filesize" class="form-control" value="<?php echo $this->_vars['settings']['filesize']; ?>
"/>
						<span class="input-group-addon">KB</span>
					</div>
				</td>
			</tr>
			<tr>
				<td><label><a href="#<?php echo $this->_confs['PLIGG_Upload_Max_Number']; ?>
"><?php echo $this->_confs['PLIGG_Upload_Max_Number']; ?>
</a>:</label></td>
				<td><input type="text" name="upload_maxnumber" id="upload_maxnumber" value="<?php echo $this->_vars['settings']['maxnumber']; ?>
" class="form-control" style="width:100px;" /></td>
			</tr>
			<tr>
				<td><label><a href="#<?php echo $this->_confs['PLIGG_Upload_File_Extensions']; ?>
"><?php echo $this->_confs['PLIGG_Upload_File_Extensions']; ?>
</a>:</label></td>
				<td>
					<input type="text" name="upload_extensions" id="upload_extensions" value="<?php echo $this->_vars['settings']['extensions']; ?>
" class="form-control"/>
					<p class="help-block"><?php echo $this->_confs['PLIGG_Upload_File_Extensions_Note']; ?>
</p>
				</td>
			</tr>
			<tr>
				<td><label><a href="#<?php echo $this->_confs['PLIGG_Upload_Allow_External']; ?>
"><?php echo $this->_confs['PLIGG_Upload_Allow_External']; ?>
</a>:</label></td>
				<td>
					<select name="upload_external" class="form-control">
						<option value='file,url' <?php if ($this->_vars['settings']['external'] == 'file,url'): ?>selected<?php endif; ?>><?php echo $this->_confs['PLIGG_Upload_Both']; ?>
</option>
						<option value='file' <?php if ($this->_vars['settings']['external'] == 'file'): ?>selected<?php endif; ?>><?php echo $this->_confs['PLIGG_Upload_File_Only']; ?>
</option>
						<option value='url' <?php if ($this->_vars['settings']['external'] == 'url'): ?>selected<?php endif; ?>><?php echo $this->_confs['PLIGG_Upload_URL_Only']; ?>
</option>
					</select>
				</td>
			</tr>
			<tr>
				<td><label><a href="#<?php echo $this->_confs['PLIGG_Upload_Allow_Hiding']; ?>
"><?php echo $this->_confs['PLIGG_Upload_Allow_Hiding']; ?>
</a>:</label></td>
				<td><input type="checkbox" name="upload_allow_hide" id="upload_allow_hide" value="1" <?php if ($this->_vars['settings']['allow_hide']): ?>checked<?php endif; ?>/></td>
			</tr>
			<tr>
				<td><label><a href="#<?php echo $this->_confs['PLIGG_Upload_Allow_Comment_Attachments']; ?>
"><?php echo $this->_confs['PLIGG_Upload_Allow_Comment_Attachments']; ?>
</a>:</label></td>
				<td><input type="checkbox" name="upload_allow_comment" id="upload_allow_comment" value="1" <?php if ($this->_vars['settings']['allow_comment']): ?>checked<?php endif; ?>/></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" name="submit" value="<?php echo $this->_confs['PLIGG_Upload_Submit']; ?>
" class="btn btn-primary"/></td>
			</tr>
		</tbody>
	</table>
	
	<legend>Thumbnails</legend>
	<br />

	<table class="table table-bordered table-striped">
		<tbody>
			<tr>
				<td style="min-width:130px;width:200px;">
					<label><a href="#<?php echo $this->_confs['PLIGG_Upload_Generate_Thumbnails']; ?>
"><?php echo $this->_confs['PLIGG_Upload_Generate_Thumbnails']; ?>
</a>:</label>
				</td>
				<td>
					<select name="upload_thumb" class="form-control" style="width:100px;">
						<option value='1' <?php if ($this->_vars['settings']['thumb']): ?>selected<?php endif; ?>>On</option>
						<option value='0' <?php if (! $this->_vars['settings']['thumb']): ?>selected<?php endif; ?>>Off</option>
					</select>
				</td>
			</tr>
			<tr <?php if (! $this->_vars['settings']['thumb']): ?>style="display:none;"<?php endif; ?>>
				<td><label><a href="#<?php echo $this->_confs['PLIGG_Upload_Thumbnail_Directory']; ?>
"><?php echo $this->_confs['PLIGG_Upload_Thumbnail_Directory']; ?>
</a>:</label></td>
				<td><input type="text" name="upload_thdirectory" id="upload_thdirectory" value="<?php echo $this->_vars['settings']['thdirectory']; ?>
" class="form-control"/></td>
			</tr>
			<tr <?php if (! $this->_vars['settings']['thumb']): ?>style="display:none;"<?php endif; ?>>
				<td>
					<label><a href="#<?php echo $this->_confs['PLIGG_Upload_Quality']; ?>
"><?php echo $this->_confs['PLIGG_Upload_Quality']; ?>
 (1-100)</a>:</label>
				</td>
				<td>
					<input type='text' name='upload_quality' class="form-control" style="width:100px;" value="<?php echo $this->_vars['settings']['quality']; ?>
">
				</td>
			</tr>
			<tr <?php if (! $this->_vars['settings']['thumb']): ?>style="display:none;"<?php endif; ?>>
				<td>
					<label><a href="#<?php echo $this->_confs['PLIGG_Upload_Thumbnail_Defsize']; ?>
"><?php echo $this->_confs['PLIGG_Upload_Thumbnail_Defsize']; ?>
</a>:</label>
				</td>
				<td>
					<select name="upload_defsize" class="form-control">
						<option value='orig' <?php if ($this->_vars['settings']['defsize'] == 'orig'): ?>selected<?php endif; ?>><?php echo $this->_confs['PLIGG_Upload_Original_Image']; ?>
</option>
						<?php if (count((array)$this->_vars['settings']['sizes'])):  foreach ((array)$this->_vars['settings']['sizes'] as $this->_vars['size']): ?>
							<option <?php if ($this->_vars['settings']['defsize'] == $this->_vars['size']): ?>selected<?php endif; ?>><?php echo $this->_vars['size']; ?>
</option>
						<?php endforeach; endif; ?>
					</select>
				</td>
			</tr>
			<tr <?php if (! $this->_vars['settings']['thumb']): ?>style="display:none;"<?php endif; ?>>
				<td><label><a href="#<?php echo $this->_confs['PLIGG_Upload_Thumbnail_Link']; ?>
"><?php echo $this->_confs['PLIGG_Upload_Thumbnail_Link']; ?>
</a>:</label></td>
				<td>
					<select name="upload_link" class="form-control">
						<option value='story' <?php if ($this->_vars['settings']['link'] == 'story'): ?>selected<?php endif; ?>><?php echo $this->_confs['PLIGG_Upload_Story_Page']; ?>
</option>
						<option value='orig' <?php if ($this->_vars['settings']['link'] == 'orig'): ?>selected<?php endif; ?>><?php echo $this->_confs['PLIGG_Upload_Original_Image']; ?>
</option>
						<?php if (count((array)$this->_vars['settings']['sizes'])):  foreach ((array)$this->_vars['settings']['sizes'] as $this->_vars['size']): ?>
							<option value='<?php echo $this->_vars['size']; ?>
' <?php if ($this->_vars['settings']['link'] == $this->_vars['size']): ?>selected<?php endif; ?>><?php echo $this->_confs['PLIGG_Upload_Another_Thumbnail']; ?>
 (<?php echo $this->_vars['size']; ?>
)</option>
						<?php endforeach; endif; ?>
					</select>
				</td>
			</tr>
			<tr <?php if (! $this->_vars['settings']['thumb']): ?>style="display:none;"<?php endif; ?>>
				<td><label><a href="#<?php echo $this->_confs['PLIGG_Upload_Pre_Thumbnail_Format']; ?>
"><?php echo $this->_confs['PLIGG_Upload_Pre_Thumbnail_Format']; ?>
</a>:</label></td>
				<td><input type="text" name="upload_thumb_pre_format" id="upload_thumb_pre_format" value="<?php echo $this->_vars['settings']['thumb_pre_format']; ?>
" class="form-control"/></td>
			</tr>
			<tr <?php if (! $this->_vars['settings']['thumb']): ?>style="display:none;"<?php endif; ?>>
				<td><label><a href="#<?php echo $this->_confs['PLIGG_Upload_Thumbnail_Format']; ?>
"><?php echo $this->_confs['PLIGG_Upload_Thumbnail_Format']; ?>
</a>:</label></td>
				<td>
					<input type="text" name="upload_thumb_format" id="upload_thumb_format" value="<?php echo $this->_vars['settings']['thumb_format']; ?>
" class="form-control"/>
					<p class="help-block"><?php echo $this->_confs['PLIGG_Upload_Can_Use']; ?>
: <?php echo '{target}, {path}, {fieldX}'; ?>
</p>
				</td>
			</tr>
			<tr <?php if (! $this->_vars['settings']['thumb']): ?>style="display:none;"<?php endif; ?>>
				<td><label><a href="#<?php echo $this->_confs['PLIGG_Upload_Post_Thumbnail_Format']; ?>
"><?php echo $this->_confs['PLIGG_Upload_Post_Thumbnail_Format']; ?>
</a>:</label></td>
				<td><input type="text" name="upload_thumb_post_format" id="upload_thumb_post_format" value="<?php echo $this->_vars['settings']['thumb_post_format']; ?>
" class="form-control"/></td>
			</tr>
			<tr <?php if (! $this->_vars['settings']['thumb']): ?>style="display:none;"<?php endif; ?>>
				<td><label><a href="#<?php echo $this->_confs['PLIGG_Upload_Thumbnail_Place']; ?>
"><?php echo $this->_confs['PLIGG_Upload_Thumbnail_Place']; ?>
</a>:</label></td>
				<td>
					<select name="upload_place" class="form-control">
						<option <?php if ($this->_vars['settings']['place'] == 'upload_story_thumb_custom'): ?>selected<?php endif; ?>>upload_story_thumb_custom</option>
						<?php if (count((array)$this->_vars['upload_places'])):  foreach ((array)$this->_vars['upload_places'] as $this->_vars['place']): ?>
							<option <?php if ($this->_vars['settings']['place'] == $this->_vars['place']): ?>selected<?php endif; ?>><?php echo $this->_vars['place']; ?>
</option>
						<?php endforeach; endif; ?>
					</select>
				</td>
			</tr>
			<tr <?php if (! $this->_vars['settings']['thumb'] || ! $this->_vars['settings']['allow_comment']): ?>style="display:none;"<?php endif; ?>>
				<td><label><a href="#<?php echo $this->_confs['PLIGG_Upload_Comment_Place']; ?>
"><?php echo $this->_confs['PLIGG_Upload_Comment_Place']; ?>
</a>:</label></td>
				<td>
					<select name="upload_commentplace" class="form-control">
						<option <?php if ($this->_vars['settings']['commentplace'] == 'upload_comment_thumb_custom'): ?>selected<?php endif; ?>>upload_comment_thumb_custom</option>
					<?php if (count((array)$this->_vars['comment_places'])):  foreach ((array)$this->_vars['comment_places'] as $this->_vars['place']): ?>
						<option <?php if ($this->_vars['settings']['commentplace'] == $this->_vars['place']): ?>selected<?php endif; ?>><?php echo $this->_vars['place']; ?>
</option>
					<?php endforeach; endif; ?>
					</select>
				</td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" name="submit" value="<?php echo $this->_confs['PLIGG_Upload_Submit']; ?>
" class="btn btn-primary"/></td>
			</tr>
		</tbody>	
	</table>
		
	<legend>Attachment File List</legend>
	<br />

	<table class="table table-bordered table-striped">
		<tbody>
			<tr>
				<td><label><a href="#<?php echo $this->_confs['PLIGG_Upload_Pre_Format']; ?>
"><?php echo $this->_confs['PLIGG_Upload_Pre_Format']; ?>
</a>:</label></td>
				<td><input type="text" name="upload_pre_format" id="upload_pre_format" value="<?php echo $this->_vars['settings']['pre_format']; ?>
" class="form-control"/></td>
			</tr>
			<tr>
				<td><label><a href="#<?php echo $this->_confs['PLIGG_Upload_Format']; ?>
"><?php echo $this->_confs['PLIGG_Upload_Format']; ?>
</a>:</label></td>
				<td>
					<input type="text" name="upload_format" id="upload_format" value="<?php echo $this->_vars['settings']['format']; ?>
" class="form-control"/>
					<p class="help-block"><?php echo $this->_confs['PLIGG_Upload_Can_Use']; ?>
: <?php echo '{path}, {fieldX}'; ?>
</p>
				</td>
			</tr>
			<tr>
				<td><label><a href="#<?php echo $this->_confs['PLIGG_Upload_Post_Format']; ?>
"><?php echo $this->_confs['PLIGG_Upload_Post_Format']; ?>
</a>:</label></td>
				<td><input type="text" name="upload_post_format" id="upload_post_format" value="<?php echo $this->_vars['settings']['post_format']; ?>
" class="form-control"/></td>
			</tr>
			<tr>
				<td><label><a href="#<?php echo $this->_confs['PLIGG_Upload_Files_Place']; ?>
"><?php echo $this->_confs['PLIGG_Upload_Files_Place']; ?>
</a>:</label></td>
				<td>
					<select name="upload_fileplace" class="form-control">
						<option <?php if ($this->_vars['settings']['fileplace'] == 'upload_story_list_custom'): ?>selected<?php endif; ?>>upload_story_list_custom</option>
						<?php if (count((array)$this->_vars['upload_places'])):  foreach ((array)$this->_vars['upload_places'] as $this->_vars['place']): ?>
							<option <?php if ($this->_vars['settings']['fileplace'] == $this->_vars['place']): ?>selected<?php endif; ?>><?php echo $this->_vars['place']; ?>
</option>
						<?php endforeach; endif; ?>
					</select>
				</td>
			</tr>
			<tr <?php if (! $this->_vars['settings']['allow_comment']): ?>style="display:none"<?php endif; ?>>
				<td><label><a href="#<?php echo $this->_confs['PLIGG_Upload_Comment_File_List']; ?>
"><?php echo $this->_confs['PLIGG_Upload_Comment_File_List']; ?>
</a>:</label></td>
				<td>
					<select name="upload_commentfilelist" class="form-control">
						<option <?php if ($this->_vars['settings']['commentfilelist'] == 'upload_comment_list_custom'): ?>selected<?php endif; ?>>upload_comment_list_custom</option>
						<?php if (count((array)$this->_vars['comment_places'])):  foreach ((array)$this->_vars['comment_places'] as $this->_vars['place']): ?>
							<option <?php if ($this->_vars['settings']['commentfilelist'] == $this->_vars['place']): ?>selected<?php endif; ?>><?php echo $this->_vars['place']; ?>
</option>
						<?php endforeach; endif; ?>
					</select>
				</td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" name="submit" value="<?php echo $this->_confs['PLIGG_Upload_Submit']; ?>
" class="btn btn-primary"/></td>
			</tr>
		</tbody>
	</table>
	
	<div class="col-md-4" style="<?php if (! $this->_vars['settings']['thumb']): ?>display:none;<?php endif; ?>">
		<legend><a href="#<?php echo $this->_confs['PLIGG_Upload_Thumbnail_Sizes']; ?>
"><?php echo $this->_confs['PLIGG_Upload_Thumbnail_Sizes']; ?>
</a></legend>
		<table class="table table-bordered table-striped">
			<thead>
				<tr>
					<th><?php echo $this->_confs['PLIGG_Upload_Max_Size']; ?>
</th>
					<th style="width:115px;text-align:center;"><?php echo $this->_confs['PLIGG_Upload_Display_On_Upload']; ?>
</th>
					<th style="width:40px;text-align:center;"><?php echo $this->_confs['PLIGG_Upload_Delete']; ?>
</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td><?php echo $this->_confs['PLIGG_Upload_Original']; ?>
</td>
					<td style="width:115px;text-align:center;"><input type='checkbox' name='display[orig]' value='1' <?php if ($this->_vars['settings']['display']['orig']): ?>checked<?php endif; ?>></td>
					<td style="width:40px;text-align:center;"></td>
				</tr>
				<?php if (count((array)$this->_vars['settings']['sizes'])):  foreach ((array)$this->_vars['settings']['sizes'] as $this->_vars['size']): ?>
					<tr>
						<td><?php echo $this->_vars['size']; ?>
</td>
						<td style="width:115px;text-align:center;"><input type='checkbox' name='display[<?php echo $this->_vars['size']; ?>
]' value='1' <?php if ($this->_vars['settings']['display'][$this->_vars['size']]) echo 'checked'; ?>></td>
						<td style="width:40px;text-align:center;"><input type='checkbox' name='delsize[]' value='<?php echo $this->_vars['size']; ?>
'></td>
					</tr>
				<?php endforeach; endif; ?>
				<tr>
					<td colspan="3">
						<div style="float:left;width:50%;display:inline;padding-left:5px;">
							<?php echo $this->_confs['PLIGG_Upload_Width']; ?>
: 
							<div class="input-group" style="width:100px;">
								<input type='text' name='upload_width' class="form-control">
								<span class="input-group-addon">px</span>
							</div>
						</div>
						<div style="float:left;width:50%;display:inline;padding-left:5px;">
							<?php echo $this->_confs['PLIGG_Upload_Height']; ?>
: 					
							<div class="input-group" style="width:100px;">
								<input type='text' name='upload_height' class="form-control"> 
								<span class="input-group-addon">px</span>
							</div>
						</div>
						<div style="clear:both;"></div>
					</td>
				</tr>
				<tr>
					<td colspan="3"><input type="submit" name="submit" value="<?php echo $this->_confs['PLIGG_Upload_Submit']; ?>
" class="btn btn-primary"/></td>
				</tr>
			</tbody>
		</table>
	</div>
	<div class="col-md-8" style="<?php if (! $this->_vars['settings']['thumb']): ?>width:100%<?php endif; ?>;min-width:500px;">
		<legend><a href="#<?php echo $this->_confs['PLIGG_Upload_Thumbnail_Fields']; ?>
"><?php echo $this->_confs['PLIGG_Upload_Thumbnail_Fields']; ?>
</a></legend>
		<table class="table table-bordered table-striped">
			<thead>
				<tr>
					<th><?php echo $this->_confs['PLIGG_Upload_Tag_Name']; ?>
</th>
					<th><?php echo $this->_confs['PLIGG_Upload_Field_Name']; ?>
</th>
					<th><?php echo $this->_confs['PLIGG_Upload_Alternate']; ?>
</th>
					<th style="width:70px;text-align:center;"><?php echo $this->_confs['PLIGG_Upload_Mandatory']; ?>
</th>
					<th style="width:40px;text-align:center;"><?php echo $this->_confs['PLIGG_Upload_Delete']; ?>
</th>
				</tr>
			</thead>
			<tbody>
				<?php if (count((array)$this->_vars['settings']['fields'])):  foreach ((array)$this->_vars['settings']['fields'] as $this->_vars['i'] => $this->_vars['field']): ?>
					<tr>
						<td><?php echo '{'; ?>
field<?php echo $this->_vars['i']+1;  echo '}'; ?>
</td>
						<td><?php echo $this->_vars['field']; ?>
</td>
						<td><input type='text' name='alternate[<?php echo $this->_vars['i']+1; ?>]' value='<?php echo $this->_vars['settings']['alternates'][$this->_vars['i']+1]; ?>'></td>
						<td style="width:70px;text-align:center;"><input type='checkbox' name='mandatory[<?php echo $this->_vars['i']+1; ?>]' value='1' <?php if ($this->_vars['settings']['mandatory'][$this->_vars['i']+1]) echo 'checked'; ?>></td>
						<td style="width:40px;text-align:center;"><input type='checkbox' name='delfield[]' value='<?php echo $this->_vars['field']; ?>
'></td>
					</tr>
				<?php endforeach; endif; ?>
				<tr>
					<td colspan="2">
						<label><a href="#<?php echo $this->_confs['PLIGG_Upload_Add_Field']; ?>
"><?php echo $this->_confs['PLIGG_Upload_Add_Field']; ?>
</a>:</label>
					</td>
					<td colspan="3">
						<input type='text' name='upload_new_field' class="form-control">
						<p class="help-block"><?php echo $this->_confs['PLIGG_Upload_Add_Field_Note']; ?>
</p>
					</td>
				</tr>
				<tr>
					<td colspan="2"></td>
					<td colspan="3">
						<input type="submit" name="submit" value="<?php echo $this->_confs['PLIGG_Upload_Submit']; ?>
" class="btn btn-primary"/>
					</td>
				</tr>
			</tbody>
		</table>
	</div>
	<div style="clear:both;"></div>
</form>

<br /><br />
<hr class="soften" />

<legend><?php echo $this->_confs['PLIGG_Upload_Field_Definitions']; ?>
</legend>
<p><?php echo $this->_confs['PLIGG_Upload_Field_Definitions_Desc']; ?>
</p>

<p><strong><a name="<?php echo $this->_confs['PLIGG_Upload_Storage_Directory']; ?>
"><?php echo $this->_confs['PLIGG_Upload_Storage_Directory']; ?>
</a></strong>: <?php echo $this->_confs['PLIGG_Upload_Storage_Directory_Definition']; ?>
</p>
<p><strong><a name="<?php echo $this->_confs['PLIGG_Upload_File_Size']; ?>
"><?php echo $this->_confs['PLIGG_Upload_File_Size']; ?>
</a></strong>: <?php echo $this->_confs['PLIGG_Upload_File_Size_Definition']; ?>
</p>
<p><strong><a name="<?php echo $this->_confs['PLIGG_Upload_Max_Number']; ?>
"><?php echo $this->_confs['PLIGG_Upload_Max_Number']; ?>
</a></strong>: <?php echo $this->_confs['PLIGG_Upload_Max_Number_Definition']; ?>
</p>
<p><strong><a name="<?php echo $this->_confs['PLIGG_Upload_File_Extensions']; ?>
"><?php echo $this->_confs['PLIGG_Upload_File_Extensions']; ?>
</a></strong>: <?php echo $this->_confs['PLIGG_Upload_File_Extensions_Definition']; ?>
</p>
<p><strong><a name="<?php echo $this->_confs['PLIGG_Upload_Allow_External']; ?>
"><?php echo $this->_confs['PLIGG_Upload_Allow_External']; ?>
</a></strong>: <?php echo $this->_confs['PLIGG_Upload_Allow_External_Definition']; ?>
</p>
<p><strong><a name="<?php echo $this->_confs['PLIGG_Upload_Allow_Hiding']; ?>
"><?php echo $this->_confs['PLIGG_Upload_Allow_Hiding']; ?>
</a></strong>: <?php echo $this->_confs['PLIGG_Upload_Allow_Hiding_Definition']; ?>
</p>
<p><strong><a name="<?php echo $this->_confs['PLIGG_Upload_Allow_Comment_Attachments']; ?>
"><?php echo $this->_confs['PLIGG_Upload_Allow_Comment_Attachments']; ?>
</a></strong>: <?php echo $this->_confs['PLIGG_Upload_Allow_Comment_Definition']; ?>
</p>

<p <?php if (! $this->_vars['settings']['thumb']): ?>style="display:none"<?php endif; ?>><strong><a name="<?php echo $this->_confs['PLIGG_Upload_Generate_Thumbnails']; ?>
"><?php echo $this->_confs['PLIGG_Upload_Generate_Thumbnails']; ?>
</a></strong>: <?php echo $this->_confs['PLIGG_Upload_Generate_Thumbnails_Definition']; ?>
</p>
<p <?php if (! $this->_vars['settings']['thumb']): ?>style="display:none"<?php endif; ?>><strong><a name="<?php echo $this->_confs['PLIGG_Upload_Thumbnail_Directory']; ?>
"><?php echo $this->_confs['PLIGG_Upload_Thumbnail_Directory']; ?>
</a></strong>: <?php echo $this->_confs['PLIGG_Upload_Thumbnail_Directory_Definition']; ?>
</p>
<p <?php if (! $this->_vars['settings']['thumb']): ?>style="display:none"<?php endif; ?>><strong><a name="<?php echo $this->_confs['PLIGG_Upload_Quality']; ?>
"><?php echo $this->_confs['PLIGG_Upload_Quality']; ?>
</a></strong>: <?php echo $this->_confs['PLIGG_Upload_Quality_Definition']; ?>
</p>
<p <?php if (! $this->_vars['settings']['thumb']): ?>style="display:none"<?php endif; ?>><strong><a name="<?php echo $this->_confs['PLIGG_Upload_Thumbnail_Defsize']; ?>
"><?php echo $this->_confs['PLIGG_Upload_Thumbnail_Defsize']; ?>
</a></strong>: <?php echo $this->_confs['PLIGG_Upload_Thumbnail_Defsize_Definition']; ?>
</p>
<p <?php if (! $this->_vars['settings']['thumb']): ?>style="display:none"<?php endif; ?>><strong><a name="<?php echo $this->_confs['PLIGG_Upload_Add_Size']; ?>
"><?php echo $this->_confs['PLIGG_Upload_Add_Size']; ?>
</a></strong>: <?php echo $this->_confs['PLIGG_Upload_Add_Size_Definition']; ?>
</p>
<p <?php if (! $this->_vars['settings']['thumb']): ?>style="display:none"<?php endif; ?>><strong><a name="<?php echo $this->_confs['PLIGG_Upload_Thumbnail_Link']; ?>
"><?php echo $this->_confs['PLIGG_Upload_Thumbnail_Link']; ?>
</a></strong>: <?php echo $this->_confs['PLIGG_Upload_Thumbnail_Link_Definition']; ?>
</p>
<p <?php if (! $this->_vars['settings']['thumb']): ?>style="display:none"<?php endif; ?>><strong><a name="<?php echo $this->_confs['PLIGG_Upload_Pre_Thumbnail_Format']; ?>
"><?php echo $this->_confs['PLIGG_Upload_Pre_Thumbnail_Format']; ?>
</a></strong>: <?php echo $this->_confs['PLIGG_Upload_Pre_Thumbnail_Format_Definition']; ?>
</p>
<p <?php if (! $this->_vars['settings']['thumb']): ?>style="display:none"<?php endif; ?>><strong><a name="<?php echo $this->_confs['PLIGG_Upload_Thumbnail_Format']; ?>
"><?php echo $this->_confs['PLIGG_Upload_Thumbnail_Format']; ?>
</a></strong>: <?php echo $this->_confs['PLIGG_Upload_Thumbnail_Format_Definition']; ?>
</p>
<p <?php if (! $this->_vars['settings']['thumb']): ?>style="display:none"<?php endif; ?>><strong><a name="<?php echo $this->_confs['PLIGG_Upload_Post_Thumbnail_Format']; ?>
"><?php echo $this->_confs['PLIGG_Upload_Post_Thumbnail_Format']; ?>
</a></strong>: <?php echo $this->_confs['PLIGG_Upload_Post_Thumbnail_Format_Definition']; ?>
</p>
<p <?php if (! $this->_vars['settings']['thumb']): ?>style="display:none"<?php endif; ?>><strong><a name="<?php echo $this->_confs['PLIGG_Upload_Thumbnail_Place']; ?>
"><?php echo $this->_confs['PLIGG_Upload_Thumbnail_Place']; ?>
</a></strong>: <?php echo $this->_confs['PLIGG_Upload_Thumbnail_Place_Definition']; ?>
</p>
<p <?php if (! $this->_vars['settings']['thumb']): ?>style="display:none"<?php endif; ?>><strong><a name="<?php echo $this->_confs['PLIGG_Upload_Comment_Place']; ?>
"><?php echo $this->_confs['PLIGG_Upload_Comment_Place']; ?>
</a></strong>: <?php echo $this->_confs['PLIGG_Upload_Comment_Place_Definition']; ?>
</p>
<p><strong><a name="<?php echo $this->_confs['PLIGG_Upload_Pre_Format']; ?>
"><?php echo $this->_confs['PLIGG_Upload_Pre_Format']; ?>
</a></strong>: <?php echo $this->_confs['PLIGG_Upload_Pre_Format_Definition']; ?>
</p>
<p><strong><a name="<?php echo $this->_confs['PLIGG_Upload_Format']; ?>
"><?php echo $this->_confs['PLIGG_Upload_Format']; ?>
</a></strong>: <?php echo $this->_confs['PLIGG_Upload_Format_Definition']; ?>
</p>
<p><strong><a name="<?php echo $this->_confs['PLIGG_Upload_Post_Format']; ?>
"><?php echo $this->_confs['PLIGG_Upload_Post_Format']; ?>
</a></strong>: <?php echo $this->_confs['PLIGG_Upload_Post_Format_Definition']; ?>
</p>
<p><strong><a name="<?php echo $this->_confs['PLIGG_Upload_Files_Place']; ?>
"><?php echo $this->_confs['PLIGG_Upload_Files_Place']; ?>
</a></strong>: <?php echo $this->_confs['PLIGG_Upload_Files_Place_Definition']; ?>
</p>
<p><strong><a name="<?php echo $this->_confs['PLIGG_Upload_Comment_File_List']; ?>
"><?php echo $this->_confs['PLIGG_Upload_Comment_File_List']; ?>
</a></strong>: <?php echo $this->_confs['PLIGG_Upload_Comment_File_List_Definition']; ?>
</p>
<p <?php if (! $this->_vars['settings']['thumb']): ?>style="display:none"<?php endif; ?>><strong><a name="<?php echo $this->_confs['PLIGG_Upload_Thumbnail_Sizes']; ?>
"><?php echo $this->_confs['PLIGG_Upload_Thumbnail_Sizes']; ?>
</a></strong>: <?php echo $this->_confs['PLIGG_Upload_Thumbnail_Sizes_Definition']; ?>
</p>
<p <?php if (! $this->_vars['settings']['thumb']): ?>style="display:none"<?php endif; ?>><strong><a name="<?php echo $this->_confs['PLIGG_Upload_Thumbnail_Fields']; ?>
"><?php echo $this->_confs['PLIGG_Upload_Thumbnail_Fields']; ?>
</a></strong>: <?php echo $this->_confs['PLIGG_Upload_Thumbnail_Fields_Definition']; ?>
</p>
<p><strong><a name="<?php echo $this->_confs['PLIGG_Upload_Add_Field']; ?>
"><?php echo $this->_confs['PLIGG_Upload_Add_Field']; ?>
</a></strong>: <?php echo $this->_confs['PLIGG_Upload_Add_Field_Definition']; ?>
</p>

<?php $this->config_load(upload_pligg_lang_conf, null, null); ?>