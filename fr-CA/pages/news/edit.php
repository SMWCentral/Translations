<?php

return [
	'title' => [
		'create' => 'Nouvel article',
		'edit' => 'Modifier {title}'
	],
	'preview' => 'Aperçu',
	'info' => 'Publié par {username} le {date}',
	'editor' => 'Éditeur',
	'form' => [
		'title' => 'titre', // required, string, between.string
		'text' => 'texte', // required, string, between.string
		'priority' => 'priorité', // integer, between.integer
		'internal' => [
			'title' => 'Interne', // boolean
			'description' => 'Les articles « internes » concernent des sujets qui sont utiles ou pertinents uniquement pour les utilisateurs inscrits aux site. Ils pourraient confondre ou même dissuader les autres. Ils ne sont pas affichés sur la page principale si vous n\'êtes pas connecté.' // U+00AB (LEFT-POINTING DOUBLE ANGLE QUOTATION MARK), U+00BB (RIGHT-POINTING DOUBLE ANGLE QUOTATION MARK)
		],
		'submit' => 'Publier',
		'preview' => 'Aperçu'
	],
	'not_found' => [
		'title' => 'Erreur',
		'message' => 'Article non trouvé.'
	],
	'success' => [
		'create' => [
			'title' => 'Succès',
			'message' => 'Article créé.'
		],
		'edit' => [
			'title' => 'Succès',
			'message' => 'Article mis à jour.'
		]
	]
];