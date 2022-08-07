<?php

return [
	'user_bar' => [
		'username' => 'Nom d\'utilisateur',
		'password' => 'Mot de passe',
		'login' => 'Connexion',
		'register' => 'Créer un compte',
		'profile' => 'Profil',
		'files' => 'Mes fichiers',
		'editprofile' => 'Modifier mon profil',
		'logout' => 'Déconnexion',
		'pm' => '[0] MP|[*,*] MP {new}{count} nouv.{/new}',
		'notifications' => '[0] Alertes|[*,*] Alertes {new}{count} nouv.{/new}',
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
			'patches' => 'Patchs',
			'uberasm' => 'UberASM',
			'online_tools' => 'Outils en ligne',
			'documents' => 'Documents',
			'rom_map' => 'Plan du ROM',
			'ram_map' => 'Plan du RAM',
			'hijack_map' => 'Plan des Hijacks'
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
		'unread' => "[1] \u{A0}- {new}new{/new}|[*,*] \u{A0}- {new}{count} new{/new}", // \u{A0} is U+00A0 (NO-BREAK SPACE)
	],
	'header' => [
		'users' => 'Utilisateurs: {stats}{count}{/stats}',
		'active_users' => '({count} actifs)',
		'latest_user' => 'Dernier utilisateur: {user}'
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
		'hidden' => '{stats}{count}{/stats} utilisateur en ligne (Cachés: {stats}{hidden}{/stats}):|{stats}{count}{/stats} utilisateurs en ligne (Cachés: {stats}{hidden}{/stats}):', //putting "cachés" after the number would make it conditional on plurals
		'user_separator' => ', ',
		'guests' => 'Invités: {stats}{count}{/stats}',
		'stat_separator' => ' - ',
		'bots' => 'Robots: {stats}{count}{/stats}'
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
			'last_warning' => 'Dernier avertissement: {link}{time}{/link}'
		]
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
