<?php
	use helpers\html;
	/* numbers($numbers): */
?>
<p>
	This is some data from <a href='https://docs.google.com/spreadsheet/ccc?key=0Ak8h4FehYJ4BdGxEWlNCaHdYQXNKeHRva3FEYVNWeWc#gid=0'>this</a> google spreadsheet:<br>
	<?php echo html\table($data, true); ?>
</p>
