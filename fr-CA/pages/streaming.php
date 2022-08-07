<?php

return [
	'title' => 'Diffusion en direct',
	'dashboard' => 'Tableau de bord',
	'form' => [
		'status' => [
			'title' => 'état de diffusion', // string, in
			'on' => 'En direct',
			'off' => 'Hors ligne'
		],
		'user' => [
			'title' => 'diffuseur', // required, string, between.string, exists (non-standard) / there isn't really a word for "streamer" in French as far as I know
			'description' => 'Numéro d\'utilisateur ou nom d\'utilisateur de la personne qui diffuse.',
			'exists' => 'Le numéro d\'utilisateur ou le nom d\'utilisateur que vous avez entré n\'est pas valide.'
		],
		'stream' => 'lien de la diffusion', // required, string, between.string
		'banner' => 'titre de la bannière', // required, string, between.string
		'streamer' => [
			'title' => 'diffuseur', // required, string, between.string
			'description' => 'Nom d\'utilisateur du compte de Twitch de la personne qui diffuse.'
		],
		'game_name' => [
			'title' => 'nom du jeu', // required, string, between.string
			'description' => 'Nom du jeu ou du hack qui est joué.'
		],
		'game_creator' => [
			'title' => 'créateur du jeu', // required, string, between.string
			'description' => 'Nom de la personne ou de l\'équipe qui a créé le jeu ou le hack qui est joué.'
		],
		'submit' => 'Sauvegarder'
	],
	'inactive' => [
		'title' => 'Erreur',
		'message' => 'La page de diffusion en direct n\'est pas configurée. Veuillez réessayer plus tard.'
	],
	'success' => [
		'title' => 'Succès',
		'message' => 'Vos changements ont été sauvegardés. La bannière sera mise à jour si l\'information est correcte.'
	]
];
