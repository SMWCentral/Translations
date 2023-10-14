<?php

return [
	'title' => 'Transmissão Ao Vivo',
	'dashboard' => 'Live Dashboard',
	'form' => [
		'status' => [
			'title' => 'status da transmissão', // string, in
			'on' => 'Ao Vivo',
			'off' => 'Offline',
		],
		'user' => [
			'title' => 'streamer', // required, string, between.string, exists (non-standard)
			'description' => 'ID numérica do usuário ou nome de usuário de quem está fazendo a transmissão.',
			'exists' => 'O streamer não é uma ID ou nome de usuário válido.',
		],
		'stream' => 'URL da stream', // required, string, between.string
		'banner' => 'título do banner', // required, string, between.string
		'streamer' => [
			'title' => 'streamer', // required, string, between.string
			'description' => 'Twitch username of the user who is streaming.',
		],
		'game_name' => [
			'title' => 'nome do jogo', // required, string, between.string
			'description' => 'Nome do jogo ou hack que está sendo jogada.',
		],
		'game_creator' => [
			'title' => 'criador do jogo', // required, string, between.string
			'description' => 'Nome da pessoa ou equipe que criou o jogo ou hack que está sendo jogada.',
		],
		'submit' => 'Salvar alterações',
	],
	'inactive' => [
		'title' => 'Erro',
		'message' => 'A página de transmissão ao vivo não está configurada. Tente novamente mais tarde.',
	],
	'success' => [
		'title' => 'Successo',
		'message' => 'Alterações salvas. The banner will update soon if the information is correct.',
	],
];
