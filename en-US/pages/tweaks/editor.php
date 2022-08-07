<?php

return [
	'title' => [
		'submit' => 'Submit Tweak - {game} Tweaks',
		'update' => '{tweak} - Submit Update - {game} Tweaks',
		'edit' => '{tweak} - Edit Tweak - {game} Tweaks',
		'approve' => '{tweak} - Approve Tweak - {game} Tweaks'
	],
	'heading' => [
		'submit' => 'Submit {game} Tweak',
		'update' => 'Submit Update to {tweak}',
		'edit' => '{tweak}',
		'approve' => '{tweak}'
	],
	'submission_guidelines' => 'Submission Guidelines',
	'editor' => [
		'submit' => 'Submit',
		'update' => 'Submit Update',
		'edit' => 'Edit',
		'approve' => 'Approve'
	],
	'form' => [
		'summary' => [
			'title' => 'summary',
			'description' => 'Summary of the tweak\'s effect. Appears in generated patches.'
		],
		'description' => [
			'title' => 'description',
			'description' => 'Detailed description or usage instructions, if applicable. HTML is allowed. Does not appear in generated patches.'
		],
		'tags' => [
			'title' => 'Tags',
			'description' => 'Press comma (,) or Enter after each tag to add it to the list.'
		],
		'params' => [
			'title' => 'Parameters',
			'description' => 'Parameters to be customized by the user, if any.',
			'bad_request' => 'Bad parameter data.',
			'bad_id' => 'Invalid characters in identifier "{id}" for parameter "{name}".',
			'bad_type' => 'Bad type "{type}" for parameter "{name}".',
			'duplicate_id' => 'Duplicate identifier "{id}" in parameter "{name}".',
			'duplicate_name' => 'Duplicate parameter name "{name}".',
			'duplicate_option' => 'Duplicate option name "{name}" in parameter "{param}".',
			'old_mismatch' => 'Parameters\' order and types must be preserved.'
		],
		'code' => [
			'title' => 'code',
			'description' => 'Reference parameters using their identifier surrounded by angle brackets (e.g. <id>).',
			'bad_param' => 'Code references undefined parameter "<{id}>".',
			'no_macro_def' => 'Code shouldn\'t define macros.',
			'no_macro_call' => 'Code shouldn\'t call macros.'
		],
		'submission_notes' => [
			'title' => 'submission Notes',
			'description' => 'If you have any notes to the moderators regarding this submission, please put them here. Not publicly visible.'
		],
		'submit' => [
			'submit' => 'Submit',
			'update' => 'Submit',
			'edit' => 'Save',
			'approve' => 'Approve'
		]
	],
	'success' => [
		'submit' => [
			'title' => 'Success',
			'message' => 'Tweak submitted.'
		],
		'update' => [
			'title' => 'Success',
			'message' => 'Update submitted.'
		],
		'edit' => [
			'title' => 'Success',
			'message' => 'Tweak saved.'
		],
		'approve' => [
			'title' => 'Success',
			'message' => 'Tweak approved.'
		]
	]
];
