<?php

get('/pages/(\w+)', function($page) {
	$titles = array(
		'page1' => 'Simple Page 1',
		'page2' => 'Simple Page 2'
	);

	$viewFile = "../views/pages/$page.html";
	if(!file_exists($viewFile)) { msgOr404("There is no such view file: $viewFile"); }

	$pageTitle = $titles[$page];
	$html = view\php('layouts/html');
	$content = view\plain('pages/'.$page);
	return $html(compact('pageTitle', 'content'));
});