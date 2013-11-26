<?php /* V2.20 Template Lite, 8 March 2008. (c) Mark Dickenson, Jon Langevin. GNU LGPL. 2013-11-24 06:04:02 CET */ ?>

<script type="text/javascript" language="javascript">
		

		var my_pligg_url = "<?php echo $this->_vars['my_base_url'];  echo $this->_vars['my_pligg_base']; ?>
";
		var Pager_setting = "<?php echo $this->_vars['Pager_setting']; ?>
";
		var page_name = "<?php echo $this->_vars['pagename']; ?>
";
		var total_row_for_group = "<?php echo $this->_vars['total_row_for_group']; ?>
";
		var pageSize = "<?php echo $this->_vars['scrollpageSize']; ?>
";
		
		
		<?php echo '
		$(document).ready(function(){
			
			var count;
			count=parseInt(pageSize);
			
			
			total_row_for_group = parseInt(total_row_for_group);
			
			var endLmt = $(\'.group_container\').length;
			
			function last_msg_funtion_for_group() 
			{ 
				var	url = my_pligg_url+"/load_data_for_groups.php";
				var dataString = "start_up="+count+"&pagesize="+pageSize;
									
					$.ajax({
						type: "POST",
						url:url,
						data: dataString,
						beforeSend: function() {
							$(".group_container:last").addClass("loader");
						},
						cache: false,
						success: function(html)	{
							
							if (html != "") {
								$(".group_container:last").after(html); 
								$(".group_container").removeClass("loader");
								count=count+parseInt(pageSize);
							}
						} 
				});
			}; 
      		
		   if(Pager_setting==2){
		   
			$(window).scroll(function(){
				if ($(window).scrollTop() == $(document).height() - $(window).height()){
					if(parseInt(total_row_for_group)>=count)
					last_msg_funtion_for_group();
				}
			}); 
		   } else if(Pager_setting==3){
			   
				if(parseInt(total_row_for_group)>=count)  
				$(".group_container:last").after("<div class=\'btn btn-default contine_read_story\'>';  echo $this->_confs['PLIGG_Continue_Reading'];  echo '</div>"); 
				
				$(".contine_read_story").live("click", function(){
					if(parseInt(total_row_for_group)>count){
						last_msg_funtion_for_group();
					}else{	
						$(this).hide();
						$(".group_container:last").after("<div class=\'btn btn-default no_stories_left\'>';  echo $this->_confs['PLIGG_No_More_Articles'];  echo '</div>"); 
					}
				});
		   }
		})
		'; ?>
			
		</script>