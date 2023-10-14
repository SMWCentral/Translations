<?php

return [
	'title' => [
		'notice' => 'Send Notice to {username}',
		'warn' => 'Issue Warning to {username}',
		'ban' => 'Ban {username}',
		'forumBan' => 'Issue Forum Ban to {username}',
		'sectionBan' => 'Issue Section Ban to {username}',
		'nuke' => 'Nuke Profile Fields of {username}',
		'disable' => 'Disable {username}',
	],
	'form' => [
		'editor' => 'Infraction',
		'user' => 'User',
		'content' => 'Content',
		'preset' => 'Preset',
		'summary' => [
			'title' => 'summary',
			'description' => 'Brief reason for the infraction. {bold}Public{/bold}.',
			'notice' => 'Topic of the notice. Shown to the user.',
		],
		'message' => [
			'title' => 'message',
			'description' => 'Shown to the user.',
		],
		'notes' => [
			'title' => 'notes',
			'description' => 'Optional. Only visible to staff members.',
		],
		'action' => [
			'ban' => [
				'ban' => 'Ban',
				'privileges' => 'Revoke privileges',
				'duration' => [
					'title' => 'Duration',
					'description' => '[0]|[1]The ban can be at most 1 day long.|[*,*] The ban can be at most {count} days long.',
					'days' => 'day(s)',
					'hours' => 'hour(s)',
				],
				'forums' => [
					'title' => 'Forums',
					'description' => 'Will be read-only',
				],
				'filebin' => 'File Bin',
				'edit_profile' => 'Edit Profile',
				'pms' => [
					'title' => 'PMs',
					'options' => [
						'none' => 'Do not disable',
						'non-staff' => 'Disable sending to non-staff',
						'all' => 'Disable sending entirely',
					],
				],
				'section_submit' => 'Submit files (sections)',
				'section_comment' => 'Post comments (sections)',
				'tweaks' => 'Submit tweaks',
				'addresses' => 'Submit memory addresses',
				'vote' => [
					'title' => 'Voting',
					'description' => 'C3 and Mosts',
				],
			],
			'forumBan' => [
				'title' => 'Forum',
				'description' => 'An infraction can only disable access to a single forum.',
				'choose' => 'Choose',
			],
			'sectionBan' => [
				'title' => 'Sections',
				'all' => 'Ban from all?',
				'sections' => 'Sections',
			],
			'nuke' => [
				'nuke' => 'Nuke fields',
				'username' => 'Username',
				'display_name' => 'Display name',
				'title' => 'Title',
				'avatar' => 'Avatar',
				'location' => 'Location',
				'email' => [
					'title' => 'Email',
					'description' => 'Will be made visible to admins only, not nuked.',
				],
				'discord_tag' => 'Discord tag',
				'contact' => 'Other contact details',
				'bio' => 'Bio',
				'layout' => 'Layout',
			],
			'disable' => [
				'disable' => 'Disable',
				'ipban' => 'Apply IP ban?',
				'ip' => [
					'title' => 'IP address',
					'description' => 'Defaults to the user\'s last IP.',
				],
				'level' => [
					'title' => 'Level',
					'options' => [
						'register' => '1 - Unable to register',
						'login' => '2 - Unable to login',
						'access' => '3 - Unable to access site',
					],
				],
				'reason' => 'Reason',
			],
		],
		'submit' => 'Continue',
		'action_forum' => [
			'not_found' => 'Forum not found.',
		],
	],
	'review' => [
		'line_1' => 'You are about to issue the following infraction to {username}. An entry will be added to the user\'s record and they will be redirected to the infraction the next time they visit the site.',
		'no_content' => 'No content has been specified in relation to this infraction. If the offending content is available, you should link it to the infraction by issuing it from the content.',
		'line_2' => 'Is all information correct? You will not be able to edit the infraction after issuing it.',
		'notice' => [
			'line_1' => 'You are about to send the following notice to {username}. The user will be redirected to the notice the next time they visit the site.',
			'line_2' => 'Is all information correct? You will not be able to edit the notice after sending it.',
		],
		'field' => [
			'user' => 'User:',
			'content' => 'Content:',
			'summary' => 'Summary:',
			'message' => 'Message:',
			'notes' => 'Notes:',
			'date' => 'Date:',
			'issuer' => 'Issuer:',
		],
		'action' => [
			'confirm' => 'Confirm',
			'back' => 'Back',
		],
		'empty' => '{italic}N/A{/italic}',
	],
	'new_tab' => 'Opens in a new tab',
	'user_not_found' => [
		'title' => 'Error',
		'message' => 'The specified user does not exist.',
	],
	'invalid_action' => [
		'title' => 'Error',
		'message' => 'Invalid punishment type.',
	],
	'success' => [
		'title' => 'Success',
		'message' => 'Infraction issued.',
	],
];
