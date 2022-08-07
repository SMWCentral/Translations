<?php

return [
	'title' => [
		'moderated' => '{Section}',
		'waiting' => 'Em espera {Section}'
	],
	'menu' => [
		'count' => '{stats}{count}{/stats} submissões encontradas. Mostrando {stats}{start}{/stats}–{stats}{end}{/stats}.', // U+2013 (EN DASH)
		'view' => 'Ver: {moderated} | {waiting}',
		'moderated' => 'moderado',
		'waiting' => '[0] em espera|[*,*] em espera ({count})',
		'delete_selected' => 'Excluir selecionados',
		'reject_selected' => 'Rejeitar selecionados',
		'submit' => [
			'smwhacks' => 'Submeter uma hack',
			'sm64hacks' => 'Submeter uma hack',
			'sm64music' => 'Submeter música',
			'sm64textures' => 'Submeter texturas',
			'smwsprites' => 'Submeter um sprite',
			'smwgraphics' => 'Submeter gráficos',
			'yihacks' => 'Submeter uma hack',
			'smwblocks' => 'Submeter um bloco',
			'smwpatches' => 'Submeter um patch',
			'tools' => 'Submeter uma ferramenta',
			'documents' => 'Submeter um documento',
			'smwmusic' => 'Submeter música',
			'sramdatabase' => 'Submeter SRAM',
			'brrsamples' => 'Submeter samples',
			'yipatches' => 'Submeter um patch',
			'uberasm' => 'Submeter UberASM',
			'yimusic' => 'Submeter música',
			'spasm' => 'Submeter SPASM'
		],
		'random' => 'Mostrar aleatório'
	],
	'filter' => [
		'title' => 'Filtrar',
		'submit' => 'Filtrar'
	],
	'view' => [
		'line' => 'Ver como: {list} | {gallery}',
		'list' => 'Lista',
		'gallery' => 'Galeria'
	],
	'header' => [
		'name' => 'Nome',
		'date' => 'Data',
		'authors' => 'Autores',
		'rating' => 'Avaliação',
		'filesize' => 'Tamanho',
		'downloads' => 'Download'
	],
	'sort' => [
		'title' => 'Classificar por: ',
		'separator' => ' | ',
		'tooltip' => 'Classificar por {column}',
		'generic' => 'Classificar por esta coluna',
		'field' => [
			'name' => 'nome',
			'date' => 'data',
			'rating' => 'avaliação',
			'filesize' => 'tamanho',
			'downloads' => 'downloads'
		]
	],
	'moderation' => ' (sendo moderado por {moderator})',
	'list' => [
		'added' => 'Adicionado: {datetime}',
		'submitted' => 'Submetido: {datetime} por {username}',
		'no_ratings' => 'Nenhuma',
		'download' => 'Download',
		'downloads' => '{count} download|{count} downloads'
	],
	'gallery' => [
		'added' => 'Adicionado em {datetime}',
		'submitted' => 'Submetido em {datetime} por {username}'
	]
];
