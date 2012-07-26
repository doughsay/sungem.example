<?php
namespace spreadsheet;
useLib('db/google');
use db\google;

function get() {
	$data = google\get('0Ak8h4FehYJ4BdGxEWlNCaHdYQXNKeHRva3FEYVNWeWc', 'select *');
	return $data;
}