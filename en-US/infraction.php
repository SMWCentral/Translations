<?php

return [
	'action' => [
		'punishment' => 'Punishment:',
		'notice' => [
			'name' => 'Notice',
		],
		'warn' => [
			'name' => 'Warning',
		],
		'ban' => [
			'name' => 'Temp Ban',
			'field' => [
				'duration' => 'Duration:',
				'revoke' => 'Revoke privileges:',
			],
			'expires' => 'Expires on {datetime}',
			'privilege' => [
				'none' => 'None',
				'forums' => 'Posting in forums',
				'filebin' => 'File Bin',
				'edit_profile' => 'Editing profile',
				'pms' => [
					'non-staff' => 'Sending PMs to non-staff',
					'all' => 'Sending PMs',
				],
				'section_submit' => 'Submitting files to sections',
				'section_comment' => 'Posting comments in sections',
				'tweaks' => 'Submitting tweaks',
				'addresses' => 'Submitting memory addresses',
				'vote' => 'Voting (C3 and Mosts)',
			],
		],
		'forumBan' => [
			'name' => 'Forum Ban',
			'field' => [
				'forum' => 'Forum:',
			],
			'restricted' => '(restricted)',
		],
		'sectionBan' => [
			'name' => 'Section Ban',
			'field' => [
				'sections' => 'Sections:',
			],
			'none' => 'None',
			'all' => 'All',
		],
		'nuke' => [
			'name' => 'Profile Content Removed',
			'field' => [
				'fields' => 'Fields:',
			],
			'fields' => [
				'none' => 'None',
				'username' => 'Username',
				'display_name' => 'Display name',
				'title' => 'Title',
				'avatar' => 'Avatar',
				'location' => 'Location',
				'email' => 'Email',
				'discord_tag' => 'Discord tag',
				'contact' => 'Other contact details',
				'bio' => 'Bio',
				'layout' => 'Layout',
			],
		],
		'disable' => [
			'name' => 'Account Disabled',
			'revoked' => 'Account Unban',
			'field' => [
				'ipban' => 'IP Ban:',
			],
			'no_ipban' => 'No',
			'with_ipban' => 'Yes',
			'with_ipban_admin' => 'Level {bold}{level}{/bold} on {bold}{ip}{/bold} ({bold}{reason}{/bold})',
		],
	],
	'content' => [
		'empty' => [
			'blurb' => 'None',
		],
		'post' => [
			'blurb' => 'Post {post} ({forum})',
			'blurb_restricted' => 'Post (Restricted)',
		],
	],
];
