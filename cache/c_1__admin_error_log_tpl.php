<?php /* V2.20 Template Lite, 8 March 2008. (c) Mark Dickenson, Jon Langevin. GNU LGPL. 2013-11-24 00:28:44 CET */ ?>

<!-- error_log.tpl -->
<legend>Error Log</legend>
<p>Below you will find the contents of the /<?php  echo LOG_FILE;  ?> file, where Pligg CMS stores error messages. Not all of these error messages are significant, but you should carefully review each one to detect problems with your website. Once you have reviewed the errors below, dismiss them by clicking on the "Clear Log" button.</p>
<a class="btn btn-default" ONCLICK="history.go(-1)">Back</a> <a class="btn btn-primary" href="admin_log.php?clear=1">Clear Log</a>
<br /><br />
<?php if ($this->_vars['error_count'] != '0'): ?>
	<pre><?php 
		if ($fh = fopen('../'.LOG_FILE, "r")) {
			@readfile('../'.LOG_FILE); 
			fclose($fh);
		} else {
			echo "Error:'../".LOG_FILE."' can not be read.";
		}
	 ?></pre>
<?php endif; ?>
<!--/error_log.tpl -->