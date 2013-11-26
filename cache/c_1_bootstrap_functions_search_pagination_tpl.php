<?php /* V2.20 Template Lite, 8 March 2008. (c) Mark Dickenson, Jon Langevin. GNU LGPL. 2013-11-24 01:51:29 CET */ ?>

<script type="text/javascript" language="javascript">
	
	var my_pligg_url = "<?php echo $this->_vars['my_base_url'];  echo $this->_vars['my_pligg_base']; ?>
";
	var Pager_setting = "<?php echo $this->_vars['Pager_setting']; ?>
";
	var page_name = "<?php echo $this->_vars['pagename']; ?>
";
	var total_row_for_search = "<?php echo $this->_vars['total_row_for_search']; ?>
";
	var pageSize = "<?php echo $this->_vars['scrollpageSize']; ?>
";
	var sql = "<?php echo $this->_vars['sql']; ?>
";
	
	<?php echo '
	
		$(document).ready(function(){
			
			var count=parseInt(pageSize);
		
			function pagination_for_search() 
			{ 
				var url = "";
			
			 	url = my_pligg_url+"/load_data_for_search.php";
			
				var dataString = "start_up="+count+"&pagesize="+pageSize+"&sql="+sql;
								
				$.ajax({
						type: "POST",
						url:url,
						data: dataString,
						beforeSend: function() {
							
							$(".stories:last").addClass("loader");
						},
						cache: false,
						success: function(html)	{
							
							if (html != "") {
								
								$(".stories:last").after(html); 
								$(".stories").removeClass("loader");
								count=count+parseInt(pageSize);
							}
						} 
				});
			}; 
		
		 	if(Pager_setting==2){
				$(window).scroll(function(){
					if ($(window).scrollTop() == $(document).height() - $(window).height()){
						if(parseInt(total_row_for_search)>=count)
						pagination_for_search();
					}
				}); 
		   } else if(Pager_setting==3){
			   
				if(parseInt(total_row_for_search)>count)  
					$(".stories:last").after("<div class=\'btn btn-default contine_read_story\'>';  echo $this->_confs['PLIGG_Continue_Reading'];  echo '</div>"); 
				
				$(".contine_read_story").live("click", function(){
					if(parseInt(total_row_for_search) > count){
						pagination_for_search();
					}else{	
						$(this).hide();
						
						$(".stories:last").after("<div class=\'btn btn-default no_stories_left\'>';  echo $this->_confs['PLIGG_No_More_Articles'];  echo '</div>"); 
					}
				});
		   }
		});
		
	'; ?>

	</script>