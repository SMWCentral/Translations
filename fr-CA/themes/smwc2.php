<?php

return [
	'user_bar' => [
		'login' => 'Connexion',
		'register' => 'S\'inscrire',
		'profile' => 'Profil',
		'files' => 'Mes fichiers',
		'editprofile' => 'Modifier mon profil',
		'logout' => 'Déconnexion',
		'pm' => '[0] MP|[*,*] MP {new}{count} nouv.{/new}',
		'notifications' => '[0] Notifications|[*,*] Notifications {new}{count} nouv.{/new}',
		'staffpanel' => 'Tableau de bord du personnel',
		'search' => 'Rechercher…', // U+2026 (HORIZONTAL ELLIPSIS)
		'go' => 'Go',
		'language' => 'Langue…' // U+2026 (HORIZONTAL ELLIPSIS)
	],
	'menu' => [
		'title' => 'Menu',
		'site' => [
			'name' => 'SMW Central',
			'main' => 'Page principale',
			'news' => 'Nouvelles',
			'forums' => 'Forums',
			'member_list' => 'Liste des membres',
			'rules' => 'Règles',
			'beginners' => 'Guide pour débutants',
			'discord' => 'Discord',
			'staff' => 'Personnel',
			'links' => 'Liens'
		],
		'smw' => [
			'name' => 'Super Mario World',
			'hacks' => 'Hacks',
			'sram' => 'Répertoire de sauvegardes',
			'faq' => 'F.A.Q.',
			'tutorials' => 'Tutoriels',
			'tools' => 'Outils',
			'graphics' => 'Graphismes',
			'music' => 'Musique',
			'brrsamples' => 'Échantillons BRR',
			'blocks' => 'Blocs',
			'sprites' => 'Sprites',
			'tweaks' => 'Ajustements',
			'patches' => 'Patchs',
			'uberasm' => 'UberASM',
			'online_tools' => 'Outils en ligne',
			'documents' => 'Documents',
			'rom_map' => 'Plan du ROM',
			'ram_map' => 'Plan du RAM',
			'hijack_map' => 'Plan des hijacks'
		],
		'yi' => [
			'name' => 'SMW2: Yoshi\'s Island',
			'hacks' => 'Hacks',
			'sram' => 'Répertoire de sauvegardes',
			'faq' => 'F.A.Q.',
			'tutorials' => 'Tutoriels',
			'tools' => 'Outils',
			'music' => 'Musique',
			'patches' => 'Patchs',
			'spasm' => 'SPASM',
			'documents' => 'Documents',
			'rom_map' => 'Plan du ROM',
			'ram_map' => 'Plan du RAM',
			'sram_map' => 'Plan du SRAM'
		],
		'sm64' => [
			'name' => 'Super Mario 64',
			'hacks' => 'Hacks',
			'sram' => 'Répertoire de sauvegardes',
			'faq' => 'F.A.Q.',
			'tutorials' => 'Tutoriels',
			'tools' => 'Outils',
			'music' => 'Musique',
			'textures' => 'Textures',
			'documents' => 'Documents',
			'rom_map' => 'Plan du ROM',
			'ram_map' => 'Plan du RAM'
		],
		'unread' => "[1] \u{A0}- {new}nouv.{/new}|[*,*] \u{A0}- {new}{count} nouv.{/new}", // \u{A0} is U+00A0 (NO-BREAK SPACE)
	],
	'header' => [
		'users' => 'Utilisateurs: {stats}{count}{/stats}',
		'active_users' => '({count} actifs)',
		'latest_user' => 'Dernier utilisateur: {user}',
		'latest_user_hidden' => 'Dernier utilisateur invisible'
	],
	'footer' => [
		'page_views' => 'Visionnements: {stats}{count}{/stats}',
		'legal_information' => 'Information légale',
		'privacy_policy' => 'Politique de confidentialité',
		'staff_comment' => 'Envoyer des commentaires au personnel',
		'affiliates' => 'Communautés affiliées (Liens vers nous)',
		'queries' => 'Requêtes: ~ {stats}{count}{/stats}',
		'generate_sql_report' => 'Générer un rapport SQL',
		'sql_report' => 'Rapport SQL'
	],
	'online_user_list' => [
		'online' => '{stats}{count}{/stats} utilisateur en ligne:|{stats}{count}{/stats} utilisateurs en ligne:',
		'hidden' => '{stats}{count}{/stats} utilisateur en ligne (invisibles: {stats}{hidden}{/stats}):|{stats}{count}{/stats} utilisateurs en ligne (invisibles: {stats}{hidden}{/stats}):', //putting "invisibles" after the number would make it conditional on plurals
		'user_separator' => ', ',
		'guests' => 'Visiteurs: {stats}{count}{/stats}',
		'stat_separator' => ' - ',
		'bots' => 'Bots: {stats}{count}{/stats}'
	],
	'pagination' => [
		'title' => 'Pages:',
		'range' => '{start}–{end}', // U+2013 (EN DASH)
		'asc' => 'Ascendant',
		'desc' => 'Descendant'
	],
	'post' => [
		'info' => [
			'generic' => 'Publiée le {datetime}',
			'thread' => 'Publiée le {datetime} dans {thread}',
			'recipient' => 'Envoyée le {datetime} à {username}'
		],
		'unread' => 'NOUV.',
		'separator' => [
			'info' => ' - ',
			'menu' => ' | '
		],
		'edited' => 'Dernière modification le {datetime} par {username}'
	],
	'post_sidebar' => [
		'last_seen' => [
			'online' => 'En ligne',
			'never' => 'Jamais'
		],
		'avatar' => 'Photo',
		'info' => [
			'total_posts' => 'Publications: {stats}{count}{/stats}',
			'posts' => 'Publications: {stats}{count}/{total}{/stats}',
			'since' => 'Depuis: {stats}{datetime}{/stats}',
			'from' => 'Localisation: {stats}{location}{/stats}',
			'pronouns' => 'Pronoms: {stats}{pronouns}{/stats}',
			'last_seen' => 'Dernière activité: {stats}{time}{/stats}',
			'last_warning' => 'Dernière infraction: {link}{time}{/link}'
		]
	],
	'qp_menu' => [
		'title' => 'Punition',
		'notice' => 'Avis',
		'warn' => 'Avertissement',
		'ban' => 'Bannissement temporaire',
		'forumBan' => 'Bannissement de forum',
		'sectionBan' => 'Bannissement de section',
		'disable' => 'Désactiver',
		'nuke' => 'Éliminer des champs de profil',
		'kamikaze' => 'Kamikaze'
	],
	'secondary_menu' => [
		'toggle' => 'Basculer le menu'
	],
	'form' => [
		'horizontal' => [
			'title' => '{Title}',
			'description' => '{Description}'
		],
		'vertical' => [
			'title' => '{Title}: ',
			'label' => '{Title}'
		]
	]
];
