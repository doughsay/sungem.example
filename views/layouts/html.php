<?php
/* html($pageTitle, $content, $js, $css): */
?>
<!DOCTYPE html>
<html>
	<head>
		<title>
			<?php echo getConfigVar('core', 'title'); ?>
			- <?php echo $pageTitle; ?>
		</title>

		<?php if(isset($css)) { echo helpers\html\css($css); }?>
	</head>
	<body>
		<h1><?php echo getConfigVar('core', 'title'); ?></h1>
		<h2><?php echo $pageTitle; ?></h2>
		<div id='Main'>
			<hr>
			<?php echo $content; ?>
		</div>
	</body>

	<?php if(isset($js)) { echo helpers\html\js($js); }?>
</html>