<?php

return [
	'user_bar' => [
		'login' => 'Login',
		'register' => 'Register',
		'profile' => 'Profile',
		'files' => 'My Files',
		'editprofile' => 'Edit Profile',
		'logout' => 'Logout',
		'pm' => '[0] PM|[*,*] PM {new}{count} new{/new}',
		'notifications' => '[0] Notifications|[*,*] Notifications {new}{count} new{/new}',
		'staffpanel' => 'Staff Panel',
		'search' => 'Search…', // U+2026 (HORIZONTAL ELLIPSIS)
		'go' => 'Go',
		'language' => 'Language…', // U+2026 (HORIZONTAL ELLIPSIS)
	],
	'menu' => [
		'title' => 'Menu',
		'site' => [
			'name' => 'SMW Central',
			'main' => 'Main Page',
			'news' => 'News',
			'forums' => 'Forums',
			'member_list' => 'Member List',
			'rules' => 'Rules',
			'beginners' => 'Beginners\' Guide',
			'discord' => 'Discord',
			'staff' => 'Staff',
			'links' => 'Links',
		],
		'smw' => [
			'name' => 'Super Mario World',
			'hacks' => 'Hacks',
			'sram' => 'Savebase',
			'faq' => 'F.A.Q.',
			'tutorials' => 'Tutorials',
			'tools' => 'Tools',
			'graphics' => 'Graphics',
			'music' => 'Music',
			'brrsamples' => 'BRR Samples',
			'blocks' => 'Blocks',
			'sprites' => 'Sprites',
			'tweaks' => 'Tweaks',
			'patches' => 'Patches',
			'uberasm' => 'UberASM',
			'online_tools' => 'Online Tools',
			'documents' => 'Documents',
			'rom_map' => 'ROM Map',
			'ram_map' => 'RAM Map',
			'hijack_map' => 'Hijack Map',
		],
		'yi' => [
			'name' => 'SMW2: Yoshi\'s Island',
			'hacks' => 'Hacks',
			'sram' => 'Savebase',
			'faq' => 'F.A.Q.',
			'tutorials' => 'Tutorials',
			'tools' => 'Tools',
			'music' => 'Music',
			'patches' => 'Patches',
			'spasm' => 'SPASM',
			'documents' => 'Documents',
			'rom_map' => 'ROM Map',
			'ram_map' => 'RAM Map',
			'sram_map' => 'SRAM Map',
		],
		'sm64' => [
			'name' => 'Super Mario 64',
			'hacks' => 'Hacks',
			'sram' => 'Savebase',
			'faq' => 'F.A.Q.',
			'tutorials' => 'Tutorials',
			'tools' => 'Tools',
			'music' => 'Music',
			'textures' => 'Textures',
			'documents' => 'Documents',
			'rom_map' => 'ROM Map',
			'ram_map' => 'RAM Map',
		],
		'unread' => "[1] \u{A0}- {new}new{/new}|[*,*] \u{A0}- {new}{count} new{/new}", // \u{A0} is U+00A0 (NO-BREAK SPACE)
	],
	'header' => [
		'users' => 'Users: {stats}{count}{/stats}',
		'active_users' => '({count} active)',
		'latest_user' => 'Latest user: {user}',
		'latest_user_hidden' => 'Latest user hidden',
	],
	'footer' => [
		'page_views' => 'Views: {stats}{count}{/stats}',
		'legal_information' => 'Legal Information',
		'privacy_policy' => 'Privacy Policy',
		'staff_comment' => 'Provide feedback to the staff',
		'affiliates' => 'Affiliates (Link to us)',
		'oss' => 'Open Source',
		'queries' => 'Queries: ~ {stats}{count}{/stats}',
		'generate_sql_report' => 'Generate SQL Report',
		'sql_report' => 'SQL Report',
	],
	'online_user_list' => [
		'online' => '{stats}{count}{/stats} user online:|{stats}{count}{/stats} users online:',
		'hidden' => '{stats}{count}{/stats} user online ({stats}{hidden}{/stats} hidden):|{stats}{count}{/stats} users online ({stats}{hidden}{/stats} hidden):',
		'user_separator' => ', ',
		'guests' => 'Guests: {stats}{count}{/stats}',
		'stat_separator' => ' - ',
		'bots' => 'Bots: {stats}{count}{/stats}',
	],
	'pagination' => [
		'title' => 'Pages:',
		'range' => '{start}–{end}', // U+2013 (EN DASH)
		'asc' => 'Ascending',
		'desc' => 'Descending',
	],
	'post' => [
		'info' => [
			'generic' => 'Posted on {datetime}',
			'thread' => 'Posted on {datetime} in {thread}',
			'recipient' => 'Sent on {datetime} to {username}',
		],
		'unread' => 'NEW',
		'separator' => [
			'info' => ' - ',
			'menu' => ' | ',
		],
		'edited' => 'Last edited on {datetime} by {username}',
	],
	'post_sidebar' => [
		'last_seen' => [
			'online' => 'Online',
			'never' => 'Never',
		],
		'avatar' => 'Avatar',
		'info' => [
			'total_posts' => 'Posts: {stats}{count}{/stats}',
			'posts' => 'Posts: {stats}{count}/{total}{/stats}',
			'since' => 'Since: {stats}{datetime}{/stats}',
			'from' => 'From: {stats}{location}{/stats}',
			'pronouns' => 'Pronouns: {stats}{pronouns}{/stats}',
			'last_seen' => 'Last seen: {stats}{time}{/stats}',
			'last_warning' => 'Last infraction: {link}{time}{/link}',
		],
	],
	'qp_menu' => [
		'title' => 'Punishment',
		'notice' => 'Notice',
		'warn' => 'Warn',
		'ban' => 'Temp ban',
		'forumBan' => 'Forum ban',
		'sectionBan' => 'Section ban',
		'disable' => 'Disable',
		'nuke' => 'Nuke profile fields',
		'kamikaze' => 'Kamikaze',
	],
	'secondary_menu' => [
		'toggle' => 'Toggle menu',
	],
	'form' => [
		'horizontal' => [
			'title' => '{Title}',
			'description' => '{Description}',
		],
		'vertical' => [
			'title' => '{Title}: ',
			'label' => '{Title}',
		],
	],
];
