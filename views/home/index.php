<?php /* index($foo, $bar, $strings): */ ?>
<p>This is some static content.</p>

<p><?php echo $foo; ?></p>

<p><?php echo $bar; ?></p>

<?php
	echo view\php\partial('baz', array('baz' => 'And this is baz!'));
	echo view\php\partial('baz', array('baz' => 'This is a second call to baz!'));
?>

<p>
	Strings from the database:
</p>

<ul>
	<?php foreach($strings as $string): ?>
		<li>
			<?php echo $string; ?>
		</li>
	<?php endforeach; ?>
</ul>

<ul>
	<li><a href='/pages/page1'>simple page 1</a></li>
	<li><a href='/pages/page2'>simple page 2</a></li>
	<li><a href='/get_example/var_one/var_two'>url parameter example</a></li>
	<li><a href='/post_example'>form post example</a></li>
	<li><a href='/json'>Some JSON data</a></li>
	<li><a href='/download/example.png'>Example file download</a></li>
	<li><a href='/spreadsheet'>Data from a google spreadsheet</a></li>
	<li><a href='/admin'>Admin login</a></li>
</ul>