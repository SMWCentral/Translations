<?php

return [
	'title' => 'Vote',
	'success' => [
		'title' => 'Success',
		'message' => 'Your vote has been registered.'
	],
	'not_found' => [
		'title' => 'Error',
		'message' => 'The requested poll either does not exist or you don\'t have permission to vote in it.'
	],
	'too_few' => [
		'title' => 'Error',
		'message' => 'You must select at least one option.'
	],
	'too_many' => [
		'title' => 'Error',
		'message' => 'You can\'t select more than one option.|You can\'t select more than {count} options.'
	],
	'error' => [
		'title' => 'Error',
		'message' => 'Unspecified error ({code}).'
	],
	'bad_token' => [
		'title' => 'Error',
		'message' => 'Bad token.'
	]
];
