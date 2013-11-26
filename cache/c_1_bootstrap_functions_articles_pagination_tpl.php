<?php /* V2.20 Template Lite, 8 March 2008. (c) Mark Dickenson, Jon Langevin. GNU LGPL. 2013-11-24 00:29:03 CET */ ?>

<script type="text/javascript">
	var my_pligg_url="<?php echo $this->_vars['my_base_url'];  echo $this->_vars['my_pligg_base']; ?>
";
	var catID="<?php echo $this->_vars['catID']; ?>
";
	var part="<?php echo $this->_vars['part']; ?>
";
	var total_row="<?php echo $this->_vars['total_row']; ?>
";
	var Pager_setting="<?php echo $this->_vars['Pager_setting']; ?>
";
	var page_name="<?php echo $this->_vars['pagename']; ?>
";
	var groupID="<?php echo $this->_vars['groupID']; ?>
";
	var viewtype="<?php echo $this->_vars['viewtype']; ?>
";
	var pageSize="<?php echo $this->_vars['scrollpageSize']; ?>
";
	var searchorder="<?php echo $this->_vars['searchOrder']; ?>
";
	var group_vote="<?php echo $this->_vars['group_vote']; ?>
";
	var userid="<?php echo $this->_vars['userid']; ?>
";
	var curuserid="<?php echo $this->_vars['curuserid']; ?>
";
	
	<?php echo '
	$(document).ready(function()
	{
		var count;
		count=parseInt(pageSize);
		
		function last_msg_funtion() 
		{ 
			var data="";
			var url = "";
		
			if(page_name=="index" || page_name=="new" || page_name=="published"){
			 	data="&catID="+catID+"&part="+part+"&sorder="+searchorder;
			 	url = my_pligg_url+"/load_data.php";
			 }
			else if(page_name=="group_story"){
			 	data="&groupid="+groupID+"&view="+viewtype+"&group_vote="+group_vote+"&catID="+catID; 
			 	url = my_pligg_url+"/load_data.php";
			 }
			else if(page_name=="user"){
			 	data="&view="+viewtype+"&userid="+userid+"&curuserid="+curuserid; 
			 	url = my_pligg_url+"/load_data.php";
			 }
			
			var dataString = "pname="+page_name+"&start_up="+count+"&pagesize="+pageSize+data;
								
				$.ajax({
					type: "POST",
					url:url,
					data: dataString,
					beforeSend: function() {
						$(".stories:last").addClass("loader");
					},
					cache: false,
					success: function(html)	{
						
						if ($.trim(html) != "") {
							
							$(".stories:last").after(html); 
							$(".stories").removeClass("loader");
							count=count+parseInt(pageSize);
						} else{
						
							$(".stories").removeClass("loader");
						}
					} 
			});
		}; 
      
	   if(Pager_setting==2){
		$(window).scroll(function(){
			if ($(window).scrollTop() == $(document).height() - $(window).height()){
				if(parseInt(total_row)>=count)
				last_msg_funtion();
			}
		}); 
	   }else if(Pager_setting==3){
		   
			if(parseInt(total_row)>count)  
			$(".stories:last").after("<div class=\'btn btn-default contine_read_story\'>';  echo $this->_confs['PLIGG_Continue_Reading'];  echo '</div>"); 
			
			$(".contine_read_story").live("click", function(){
				if(parseInt(total_row) > count){
					last_msg_funtion();
				}else{	
					$(this).hide();
					$(".stories:last").after("<div class=\'btn btn-default no_stories_left\'>';  echo $this->_confs['PLIGG_No_More_Articles'];  echo '</div>"); 
				}
			});
	   }
	});
	'; ?>

	</script>