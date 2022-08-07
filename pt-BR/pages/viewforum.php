<?php

return [
	'title' => [
		'generic' => 'Fóruns',
		'index' => 'Índice do Fórum',
		'forum' => '{forum}',
		'bonus_game' => 'Erro'
	],
	'stats' => [
		'posts' => '{stats}{count}{/stats} postagem|{stats}{count}{/stats} postagens',
		'threads' => '{stats}{count}{/stats} tópico|{stats}{count}{/stats} tópicos',
		'posts_today' => 'Postagens hoje: {stats}{count}{/stats}',
		'posts_hour' => 'Postagens nesta hora: {stats}{count}{/stats}',
		'line' => '{posts} em {threads} | {posts_today} | {posts_hour}'
	],
	'action' => [
		'edit' => 'Editar Fórum',
		'c3_edit' => 'Editar C3',
		'c3_results' => 'Ver Resultados',
		'c3_vote' => 'Votar',
		'mark_read' => 'Marcar Fórum como Lido',
		'mark_tagged_read' => 'Marcar Tópicos com Marcadores como Lidos',
		'new_thread' => 'Novo Tópico',
		'new_tagged_thread' => 'Novo Tópico com Marcador',
		'link' => 'Link'
	],
	'mark_all_read' => 'Marcar todos os fóruns como lidos',
	'watched_threads' => 'Tópicos em observação',
	'viewing_tagged' => 'Atualmente vendo apenas tópicos com o marcador {tag}.',
	'breadcrumbs' => [
		'index' => 'Índice do Fórum',
		'tagged' => 'Tópicos Marcados'
	],
	'category' => [
		'forums' => 'Fóruns',
		'subforums' => 'Subfóruns'
	],
	'last_post_info' => '{date}{br}por {user} {link}',
	'forum' => [
		'threads' => 'Tópicos',
		'posts' => 'Postagens',
		'last_post' => 'Última postagem',
		'new_posts' => 'Novas postagens',
		'new_posts_sub' => 'Novas postagens em subfóruns',
		'no_new_posts' => 'Nenhuma postagem nova',
		'moderated_by' => 'Moderado por:',
		'no_posts' => 'Sem postagens.'
	],
	'threads' => [
		'title' => 'Título do tópico',
		'created' => 'Postado em',
		'replies' => 'Respostas',
		'views' => 'Visualizações',
		'last_post' => 'Última postagem',
		'status' => [
			'open' => 'Nenhuma postagem nova',
			'closed' => 'Tópico fechado',
			'moved' => 'Tópico fantasma',
			'open_new' => 'Novas postagens',
			'closed_new' => 'Tópico fechado, novas postagens',
			'moved_new' => 'Novas postagens'
		],
		'poll' => 'enquete',
		'first_unread' => 'Ir para primeira postagem não lida',
		'view_latest' => 'Ir para última postagem',
		'description' => 'Postado por {user} em {date}',
		'moved' => '[0] → Movido para {forum} (isto desaparecerá daqui em breve)|[1]→ Movido para {forum} (isto desaparecerá daqui em um dia)|[*,*]→ Movido para {forum} (isto desaparecerá daqui em {count} dias)', // U+2192 (RIGHTWARDS ARROW)
		'watching' => 'Você está observando este tópico',
		'nsfw' => 'Não seguro para o trabalho (NSFW)',
		'page' => 'Página',
		'none' => 'Não existem tópicos neste fórum.'
	],
	'not_found' => [
		'title' => 'Erro',
		'message' => 'O fórum solicitado não existe ou você não tem permissão para vê-lo.'
	],
	'bad_token' => [
		'title' => 'Erro',
		'message' => 'Token incorreto.'
	],
	'read_all' => [
		'title' => 'Successo',
		'message' => 'Todos os fóruns foram marcados como lidos.'
	],
	'read_forum' => [
		'title' => 'Successo',
		'message' => '{bold}{forum}{/bold} foi marcado como lido.'
	],
	'read_tag_success' => [
		'title' => 'Successo',
		'message' => 'O marcador {bold}{tag}{/bold} foi marcado como lido.'
	],
	'read_tag_error' => [
		'title' => 'Erro',
		'message' => 'O marcador não pôde ser marcado como lido.'
	]
];
