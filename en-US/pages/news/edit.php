<?php

return [
	'title' => [
		'create' => 'New Article',
		'edit' => 'Edit {title}'
	],
	'preview' => 'Preview',
	'info' => 'Posted by {username} on {date}',
	'editor' => 'Editor',
	'form' => [
		'title' => 'title', // required, string, between.string
		'text' => 'text', // required, string, between.string
		'priority' => 'priority', // integer, between.integer
		'internal' => [
			'title' => 'Internal', // boolean
			'description' => '"Internal" articles cover topics that only matter to registered users, and might confuse or even put off the rest. They\'re not shown on the main page if you\'re not logged in.'
		],
		'submit' => 'Publish',
		'preview' => 'Preview'
	],
	'not_found' => [
		'title' => 'Error',
		'message' => 'Article not found.'
	],
	'success' => [
		'create' => [
			'title' => 'Success',
			'message' => 'Article created.'
		],
		'edit' => [
			'title' => 'Success',
			'message' => 'Article updated.'
		]
	]
];
