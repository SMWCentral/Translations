<?php

return [
	'title' => [
		'own' => 'My Files',
		'other' => '{username}\'s Files',
	],
	'breadcrumbs' => '{link}{username}\'s Profile{/link} → Files', // U+2192 (RIGHTWARDS ARROW)
	'stats' => [
		'files' => '{bold}{count}{/bold} file uploaded.|{bold}{count}{/bold} files uploaded.',
		'usage' => 'Usage: {bold}{used}{/bold} of {total} ({bold}{percent}%{/bold}).',
	],
	'action' => [
		'selected' => 'With selected:',
		'upload' => 'Upload',
		'folder' => 'Create folder',
		'folder_name' => 'Enter folder name:',
		'move' => 'Move',
		'move_root' => 'Top',
		'move_new_folder' => 'New folder',
		'confirm_move' => 'Move selected files?',
		'edit' => 'Edit',
		'delete' => 'Delete',
	],
	'header' => [
		'name' => 'Name',
		'size' => 'Size',
		'date' => 'Date',
	],
	'sort' => [
		'name' => 'Sort by name',
		'size' => 'Sort by size',
		'date' => 'Sort by date',
	],
	'info' => [
		'file' => '{type} | {size}',
		'folder' => '{type}',
	],
	'unlisted' => 'Unlisted',
	'no_files' => 'No files.',
	'upload' => [
		'title' => 'Upload',
		'bytes' => 'bytes',
		'rules' => 'The files {bold}must not{/bold} contain illegal material, including, but not limited to, copyrighted ROM images and warez, nor may it contain malicious software (malware, spyware, viruses, etc.). Such files will be removed {bold}without prior notice{/bold} and may result in punishment.',
		'unlisted' => 'Unlisted',
		'unlisted_warning' => 'Others can\'t see unlisted files in your File Bin, but they can access them if you share the URL. All rules still apply for unlisted files.',
		'submit' => 'Upload',
		'cancel' => 'Cancel',
	],
];
