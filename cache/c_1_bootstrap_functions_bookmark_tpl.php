<?php /* V2.20 Template Lite, 8 March 2008. (c) Mark Dickenson, Jon Langevin. GNU LGPL. 2013-11-24 00:29:03 CET */ ?>

<?php if ($this->_vars['user_logged_in']): ?>
	<script type="text/javascript">
	var save_lang_text="<?php echo $this->_confs['PLIGG_MiscWords_Save_Links_Save']; ?>
";
	var remove_lang_text="<?php echo $this->_confs['PLIGG_MiscWords_Save_Links_Remove']; ?>
";
	var UserURLSave="<?php echo $this->_vars['user_url_saved']; ?>
";
	<?php echo '
	$(function() {
		$(".favorite").live("click", function(){
			var oparation = $(this).attr("id");
			var return_value="";
			var link_id=$(this).attr("linkid");
			var dataString = \'action=\'+oparation+\'&link_id=\'+link_id;
			var message="";
			link_title=$(this).attr("title");
			var parent = $(this);
			
			$.ajax({
				type: "POST",
				url:my_base_url+my_pligg_base+"/user_add_remove_links.php",
				data: dataString,
				beforeSend: function() {
					parent.addClass("loader");
				},
				cache: false,
				success: function(html)	{
					return_value=html;
					if(return_value==1){
						parent.attr(\'id\',\'remove\');
						message=\'Saved \\"\'+link_title+\'\\" to <a href="\'+UserURLSave+\'">Favorites</a>.\';
						parent.html(remove_lang_text);
						$.pnotify({
							pnotify_text: message,
							pnotify_sticker: false,
							pnotify_history: false,
							pnotify_notice_icon: \'fa fa-star\'
						});
						
						
					}else if(return_value==2){
						parent.attr(\'id\',\'add\');
						message=\'Removed \\"\'+link_title+\'\\" from <a href="\'+UserURLSave+\'">Favorites</a>.\';
						parent.html(save_lang_text);
						$.pnotify({
							pnotify_text: message,
							pnotify_sticker: false,
							pnotify_history: false,
							pnotify_notice_icon: \'fa fa-star-o\'
						});
					}else{
						var tag = $("<div></div>");
						tag.html(html).dialog({modal: true}).dialog(\'open\');
					}
					parent.removeClass("loader");
					
					$.ajax({
						type: "POST",
						cache:false,
						url: my_base_url+my_pligg_base+\'/modules/sidebar_saved/update_rightpanel.php\',
						success: function(html)	{
							$("#saved_stories").html(\'\');
							$("#saved_stories").html(html);
						}
					});
				} 
			});
			return false;
		});
	});
	'; ?>

	</script>
<?php endif; ?>