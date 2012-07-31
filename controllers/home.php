<?php

get('/', function() {
	useModel('strings');

	$strings = strings\getStrings();

	$html = view\php('layouts/html');
	$index = view\php('home/index');

	return $html([
		'pageTitle' => 'Home',
		'css' => 'basic',  // can be an array or a string
		'js' => 'example', // ''
		'content' => $index([
			'foo' => 'This is foo!',
			'bar' => 'And bar!',
			'strings' => $strings
		])
	]);
});

get('/get_example/(\w+)/(\w+)', function($foo, $bar) {
	$html = view\php('layouts/html');
	$page = view\php('home/get_example');

	return $html([
		'pageTitle' => 'GET example',
		'content' => $page(compact('foo', 'bar'))
	]);
});

get('/post_example', function() {
	$html = view\php('layouts/html');

	return $html([
		'pageTitle' => 'POST example',
		'content' => view\plain('home/post_example')
	]);
});

post('/post_example', function() {
	$html = view\php('layouts/html');
	$page = view\php('home/post_example');
	$foo = postVar('foo');
	$bar = postVar('bar');

	return $html([
		'pageTitle' => 'POST example',
		'content' => $page(compact('foo', 'bar'))
	]);
});

get('/json', function() {
	$data = [
		'folder1' => [
			'file1',
			'file2',
			'file3'
		],
		'folder2' => [
			'folder3' => [
				'file4',
				'file5'
			]
		]
	];

	return json($data);
});

get('/spreadsheet', function() {
	useModel('spreadsheet');
	$html = view\php('layouts/html');
	$page = view\php('home/spreadsheet');

	return $html([
		'pageTitle' => 'Spreadsheet example',
		'content' => $page(['data' => spreadsheet\get()])
	]);
});