<?php
$config = (object) [
	'language_list' => [
		'ja',
		'en',
	],
	'actor_list' => [
		'g',
		'm',
		'a',
	],
	'page_target_list' => [
		'docs',
	],
	'crud_target_list' => [
		'category',
		'item',
	],
	'default_target' => 'docs',

	'session_save_path' => session_save_path(),
	'session_gc_maxlifetime' => ini_get('session.gc_maxlifetime'),
	'session_cookie_lifetime' => ini_get('session.cookie_lifetime'),
	'session_gc_probability' => ini_get('session.gc_probability'),
	'session_gc_divisor' => ini_get('session.gc_divisor'),
];
