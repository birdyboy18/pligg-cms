<?php /* V2.20 Template Lite, 8 March 2008. (c) Mark Dickenson, Jon Langevin. GNU LGPL. 2013-11-24 00:29:03 CET */ ?>

<script><?php echo '
function show_hide_user_links(thediv)
{
	if(window.Effect){
		if(thediv.style.display == \'none\')
		{Effect.Appear(thediv); return false;}
		else
		{Effect.Fade(thediv); return false;}
	}else{
		var replydisplay=thediv.style.display ? \'\' : \'none\';
		thediv.style.display = replydisplay;					
	}
}
'; ?>
</script>
