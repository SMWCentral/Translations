<?php

return [
	'title' => [
		'moderated' => '{Section}',
		'waiting' => ' {Section} en attente'
	],
	'menu' => [
		'count' => '{stats}{count}{/stats} soumissions trouvées. {stats}{start}{/stats}–{stats}{end}{/stats} affichées.', // U+2013 (EN DASH)
		'view' => 'Voir: {moderated} | {waiting}',
		'moderated' => 'modérées',
		'waiting' => '[0] en attente|[*,*] en attente ({count})',
		'delete_selected' => 'Supprimer les sélectionnées',
		'reject_selected' => 'Rejeter les sélectionnées',
		'submit' => [
			'smwhacks' => 'Soumettre un hack',
			'sm64hacks' => 'Soumettre un hack',
			'sm64music' => 'Soumettre de la musique',
			'sm64textures' => 'Soumettre des textures',
			'smwsprites' => 'Soumettre un sprite',
			'smwgraphics' => 'Soumettre des graphismes',
			'yihacks' => 'Soumettre un hack',
			'smwblocks' => 'Soumettre un bloc',
			'smwpatches' => 'Soumettre un patch',
			'tools' => 'Soumettre un outil',
			'documents' => 'Soumettre un document',
			'smwmusic' => 'Soumettre de la musique',
			'sramdatabase' => 'Soumettre un SRAM',
			'brrsamples' => 'Soumettre un échantillon',
			'yipatches' => 'Soumettre un patch',
			'uberasm' => 'Soumettre du UberASM',
			'yimusic' => 'Soumettre de la musique',
			'spasm' => 'Soumettre du SPASM'
		],
		'random' => 'Soumission aléatoire'
	],
	'filter' => [
		'title' => 'Filtrer',
		'submit' => 'Filtrer'
	],
	'view' => [
		'line' => 'Voir en tant que: {list} | {gallery}',
		'list' => 'Liste',
		'gallery' => 'Galerie'
	],
	'header' => [
		'name' => 'Nom',
		'date' => 'Date',
		'authors' => 'Auteurs',
		'rating' => 'Note',
		'filesize' => 'Taille',
		'downloads' => 'Télécharger'
	],
	'sort' => [
		'title' => 'Classer par: ',
		'separator' => ' | ',
		'tooltip' => 'Classer par {column}',
		'generic' => 'Classer selon cette colonne',
		'field' => [
			'name' => 'nom',
			'date' => 'date',
			'rating' => 'note',
			'filesize' => 'taille',
			'downloads' => 'téléchargements'
		]
	],
	'moderation' => ' (réservé pour modération par {moderator})',
	'list' => [
		'added' => 'Ajouté: {datetime}',
		'submitted' => 'Soumis: {datetime} par {username}',
		'no_ratings' => 'Aucune',
		'download' => 'Télécharger',
		'downloads' => '{count} téléchargement|{count} téléchargements'
	],
	'gallery' => [
		'added' => 'Ajouté le {datetime}',
		'submitted' => 'Soumis le {datetime} par {username}'
	]
];
