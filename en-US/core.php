<?php

return [
	'code' => [
		'lang' => 'en',
		'locale' => 'en-US'
	],
	'title' => '{title} - SMW Central',
	'language' => [
		'en-US' => 'English',
		'fr-CA' => 'Français',
		'pt-BR' => 'Português'
	],
	'time' => [
		'now' => 'just now',
		'past' => '{time} ago',
		'years' => '1 year|{count} years',
		'months' => '1 month|{count} months',
		'weeks' => '1 week|{count} weeks',
		'days' => '1 day|{count} days',
		'hours' => '1 hour|{count} hours',
		'minutes' => '1 minute|{count} minutes',
		'seconds' => '1 second|{count} seconds'
	],
	'unit' => [
		'byte' => '{count} byte|{count} bytes',
		'kibibyte' => "{count}\u{00A0}KiB", // U+00A0 (NO-BREAK SPACE)
		'mebibyte' => "{count}\u{00A0}MiB",
		'gibibyte' => "{count}\u{00A0}GiB"
	],
	'redirection' => 'Click {link}here{/link} or wait to get redirected…', // U+2026 (HORIZONTAL ELLIPSIS)
	'user_status' => [
		'owner' => 'Site Owner',
		'founder' => 'Founder and Ex-Site Owner',
		'manager' => 'Site Manager',
		'admin' => 'Administrator',
		'dev' => [
			'junior' => 'Walrus in Training',
			'senior' => 'Walrus Lieutenant',
			'sysadmin' => 'System Administrator'
		],
		'leader' => [
			'forum' => 'Forum Manager',
			'discord' => 'Discord Manager',
			'pr' => 'PR Manager',
			'smwhacks' => 'SMW Hack Manager',
			'smwgraphics' => 'SMW Graphics Manager',
			'smwmusic' => 'SMW Music Manager',
			'smwasm' => 'SMW ASM Manager',
			'sm64' => 'SM64 Manager',
			'yi' => 'Yoshi\'s Island Manager',
			'documents' => 'Documents Manager'
		],
		'moderator' => [
			'forum' => 'Forum Moderator',
			'discord' => 'Discord Moderator',
			'section' => 'Section Moderator',
			'smwhacks' => 'SMW Hack Moderator',
			'tools' => 'Tools Moderator',
			'smwgraphics' => 'SMW Graphics Moderator',
			'smwmusic' => 'SMW Music Moderator',
			'smwasm' => 'SMW ASM Moderator',
			'sm64' => 'SM64 Moderator',
			'yi' => 'Yoshi\'s Island Moderator',
			'documents' => 'Documents Moderator'
		],
		'pr' => 'Public Relations',
		'helper' => [
			'forum' => 'Forum Helper',
			'pr' => 'PR Helper',
			'smwhacks' => 'SMW Hacks Helper',
			'smwgraphics' => 'SMW Graphics Helper',
			'smwmusic' => 'SMW Music Helper',
			'smwasm' => 'SMW ASM Helper',
			'sm64' => 'SM64 Helper',
			'yi' => 'Yoshi\'s Island Helper',
			'documents' => 'Documents Helper'
		],
		'system' => 'Human Resources',
		'former' => [
			'admin' => 'Former Administrator',
			'dev' => 'Legendary Former Walrus',
			'legend' => 'Legend',
			'staff' => 'Legendary Ex-Staff Member'
		],
		'time_banned' => 'Banned Until {date}',
		'banned' => 'Banned',
		'disabled' => 'Account Disabled'
	],
	'post' => [
		'history' => 'Post history',
		'link' => 'Link',
		'quote' => 'Quote',
		'edit' => 'Edit',
		'delete' => 'Delete',
		'ip' => 'Search IP',
		'warn' => 'Warn'
	],
	'recent_notice' => [
		'title' => 'Recent Notice',
		'message' => 'You have recently been sent a notice from a moderator. You will be redirected to the notice.'
	],
	'recent_infraction' => [
		'title' => 'Recent Infraction',
		'message' => 'You have recently been issued an infraction for offensive behavior. You will be redirected to the infraction.'
	],
	'permission_denied' => [
		'title' => 'Permission Denied',
		'message' => 'You do not have permission to do this.'
	],
	'server_error' => [
		'title' => 'Error',
		'message' => 'Internal error, try again later.'
	]
];
