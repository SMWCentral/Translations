<?php

return [
	'title' => '{folder} - Edit - My Files',
	'breadcrumbs' => '{profile}{username}\'s Profile{/profile} → {files}Files{/files} → {folder} → Edit', // U+2192 (RIGHTWARDS ARROW)
	'form' => [
		'title' => 'Edit',
		'name' => [
			'title' => 'name',
			'description' => 'Renaming a folder may break existing links to it.',
		],
		'show_as' => [
			'title' => 'index',
			'description' => 'If not "None", the folder will get a URL which will show a specific file.',
			'options' => [
				'none' => 'None',
				'newest' => 'Show newest file',
				'oldest' => 'Show oldest file',
				'random' => 'Show random file',
			],
		],
		'submit' => 'Save',
	],
	'success' => [
		'title' => 'Success',
		'message' => 'Changes saved.',
	],
	'not_found' => [
		'title' => 'Error',
		'message' => 'Folder not found.',
	],
];
