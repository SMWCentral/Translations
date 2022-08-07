<?php

return [
	'user_bar' => [
		'username' => 'Nome de Usuário',
		'password' => 'Senha',
		'login' => 'Entrar',
		'register' => 'Registrar',
		'profile' => 'Perfil',
		'files' => 'Meus Arquivos',
		'editprofile' => 'Editar Perfil',
		'logout' => 'Sair',
		'pm' => '[0] MP|[1] MP {new} nova|[*,*] MP {new}{count} novas{/new}',
		'notifications' => '[0] Notificações|[1] Notificação {new} nova|[*,*] Notificações {new}{count} novas{/new}',
		'staffpanel' => 'Painel da Staff',
		'search' => 'Pesquisar…', // U+2026 (HORIZONTAL ELLIPSIS)
		'go' => 'Go',
		'language' => 'Idioma…' // U+2026 (HORIZONTAL ELLIPSIS)
	],
	'menu' => [
		'title' => 'Menu',
		'site' => [
			'name' => 'SMW Central',
			'main' => 'Página Principal',
			'news' => 'Notícias',
			'forums' => 'Fóruns',
			'member_list' => 'Lista de Membros',
			'rules' => 'Regras',
			'beginners' => 'Guia para Iniciantes',
			'discord' => 'Discord',
			'staff' => 'Staff',
			'links' => 'Links'
		],
		'smw' => [
			'name' => 'Super Mario World',
			'hacks' => 'Hacks',
			'sram' => 'Savebase',
			'faq' => 'F.A.Q.',
			'tutorials' => 'Tutoriais',
			'tools' => 'Ferramentas',
			'graphics' => 'Gráficos',
			'music' => 'Música',
			'brrsamples' => 'BRR Samples',
			'blocks' => 'Blocos',
			'sprites' => 'Sprites',
			'tweaks' => 'Tweaks',
			'patches' => 'Patches',
			'uberasm' => 'UberASM',
			'online_tools' => 'Ferramentas Online',
			'documents' => 'Documentos',
			'rom_map' => 'Mapa da ROM',
			'ram_map' => 'Mapa da RAM',
			'hijack_map' => 'Mapa de Hijacks'
		],
		'yi' => [
			'name' => 'SMW2: Yoshi\'s Island',
			'hacks' => 'Hacks',
			'sram' => 'Savebase',
			'faq' => 'F.A.Q.',
			'tutorials' => 'Tutoriais',
			'tools' => 'Ferramentas',
			'music' => 'Música',
			'patches' => 'Patches',
			'spasm' => 'SPASM',
			'documents' => 'Documentos',
			'rom_map' => 'Mapa da ROM',
			'ram_map' => 'Mapa da RAM',
			'sram_map' => 'Mapa da SRAM'
		],
		'sm64' => [
			'name' => 'Super Mario 64',
			'hacks' => 'Hacks',
			'sram' => 'Savebase',
			'faq' => 'F.A.Q.',
			'tutorials' => 'Tutoriais',
			'tools' => 'Ferramentas',
			'music' => 'Música',
			'textures' => 'Texturas',
			'documents' => 'Documentos',
			'rom_map' => 'Mapa da ROM',
			'ram_map' => 'Mapa da RAM'
		],
		'unread' => "[1] \u{A0}- {new}new{/new}|[*,*] \u{A0}- {new}{count} new{/new}", // \u{A0} is U+00A0 (NO-BREAK SPACE)
	],
	'header' => [
		'users' => 'Usuários: {stats}{count}{/stats}',
		'active_users' => '({count} ativos)',
		'latest_user' => 'Último usuário: {user}'
	],
	'footer' => [
		'page_views' => 'Visualizações: {stats}{count}{/stats}',
		'legal_information' => 'Informação Legal',
		'privacy_policy' => 'Política de Privacidade',
		'staff_comment' => 'Forneça feedback para a staff',
		'affiliates' => 'Afiliados (Link para nós)',
		'queries' => 'Consultas: ~ {stats}{count}{/stats}',
		'generate_sql_report' => 'Gerar Relatório SQL',
		'sql_report' => 'Relatório SQL'
	],
	'online_user_list' => [
		'online' => '{stats}{count}{/stats} usuário online:|{stats}{count}{/stats} usuários online:',
		'hidden' => '{stats}{count}{/stats} usuário online ({stats}{hidden}{/stats} ocultos):|{stats}{count}{/stats} usuários online ({stats}{hidden}{/stats} ocultos):',
		'user_separator' => ', ',
		'guests' => 'Visitantes: {stats}{count}{/stats}',
		'stat_separator' => ' - ',
		'bots' => 'Bots: {stats}{count}{/stats}'
	],
	'pagination' => [
		'title' => 'Páginas:',
		'range' => '{start}–{end}', // U+2013 (EN DASH)
		'asc' => 'Crescente',
		'desc' => 'Decrescente'
	],
	'post' => [
		'info' => [
			'generic' => 'Postado em {datetime}',
			'thread' => 'Postado em {datetime} em {thread}',
			'recipient' => 'Enviado em {datetime} para {username}'
		],
		'unread' => 'NOVO',
		'separator' => [
			'info' => ' - ',
			'menu' => ' | '
		],
		'edited' => 'Última edição em {datetime} por {username}'
	],
	'post_sidebar' => [
		'last_seen' => [
			'online' => 'Online',
			'never' => 'Nunca'
		],
		'avatar' => 'Avatar',
		'info' => [
			'total_posts' => 'Postagens: {stats}{count}{/stats}',
			'posts' => 'Postagens: {stats}{count}/{total}{/stats}',
			'since' => 'Desde: {stats}{datetime}{/stats}',
			'from' => 'Local: {stats}{location}{/stats}',
			'pronouns' => 'Pronomes: {stats}{pronouns}{/stats}',
			'last_seen' => 'Última visita: {stats}{time}{/stats}',
			'last_warning' => 'Última advertência: {link}{time}{/link}'
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
		'toggle' => 'Alternar menu'
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
