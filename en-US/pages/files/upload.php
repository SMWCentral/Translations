<?php

return [
	'title' => 'Upload File',
	'error' => 'Error',
	'form' => [
		'title' => 'Upload',
		'file' => [
			'title' => 'File(s)',
			'description' => 'Max size: {em}{max_size}{/em}',
		],
		'unlisted' => [
			'title' => 'Unlisted',
			'description' => 'Others can\'t see unlisted files in your File Bin, but they can access them if you share the URL. All rules still apply for unlisted files.',
		],
		'submit' => 'Upload',
		'cancel' => 'Cancel',
	],
	'text' => [
		'rules' => 'The files {bold}must not{/bold} contain illegal material, including, but not limited to, copyrighted ROM images and warez, nor may it contain malicious software (malware, spyware, viruses, etc.). Such files will be removed {bold}without prior notice{/bold} and may result in punishment.',
		'multiple' => 'You can also upload files quickly by dragging them into your {link}File Bin{/link}.',
		'left' => 'You have {bold}{left}{/bold} of space left.',
		'submit' => 'Note that uploading files takes some time. Please be patient and never click Upload more than once.',
	],
	'filter' => [
		'title' => 'Error',
		'text' => 'The files {bold}must not{/bold} contain illegal material, including, but not limited to, copyrighted ROM images and warez, nor may it contain malicious software.',
		'back' => 'Back',
	],
	'success' => [
		'title' => 'Success',
		'message' => 'Upload complete.',
	],
];
