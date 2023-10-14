<?php

return [
	'title' => [
		'create' => 'Novo Artigo',
		'edit' => 'Editar {title}',
	],
	'preview' => 'Visualização',
	'info' => 'Postado por {username} em {date}',
	'editor' => 'Editor',
	'form' => [
		'title' => 'título', // required, string, between.string
		'text' => 'texto', // required, string, between.string
		'priority' => 'prioridade', // integer, between.integer
		'internal' => [
			'title' => 'Interno', // boolean
			'description' => 'Artigos "internos" cobrem assuntos de importância apenas para usuários registrados, e podem confundir ou até mesmo afastar visitantes. Estes não são mostrados na página principal sem estar conectado ao site.',
		],
		'submit' => 'Publicar',
		'preview' => 'Visualizar',
	],
	'not_found' => [
		'title' => 'Erro',
		'message' => 'Artigo não encontrado.',
	],
	'success' => [
		'create' => [
			'title' => 'Successo',
			'message' => 'Artigo criado.',
		],
		'edit' => [
			'title' => 'Successo',
			'message' => 'Artigo atualizado.',
		],
	],
];
