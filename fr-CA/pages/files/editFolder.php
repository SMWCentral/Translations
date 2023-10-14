<?php

return [
	'title' => '{folder} - Modifier - Mes fichiers',
	'breadcrumbs' => '{profile}Profil de {username}{/profile} → {files}Fichiers{/files} → {folder} → Edit', // U+2192 (RIGHTWARDS ARROW)
	'form' => [
		'title' => 'Modifier',
		'name' => [
			'title' => 'nom',
			'description' => 'Les liens qui existent vers un dossier peuvent devenir désuets si vous le renommez.',
		],
		'show_as' => [
			'title' => 'index',
			'description' => 'Si l\index n\'est pas « Aucun », le dossier aura un lien qui affichera un fichier en particulier.',
			'options' => [
				'none' => 'Aucun',
				'newest' => 'Afficher le fichier le plus récent',
				'oldest' => 'Afficher le fichier le plus vieux',
				'random' => 'Afficher un fichier aléatoire',
			],
		],
		'submit' => 'Sauvegarder',
	],
	'success' => [
		'title' => 'Succès',
		'message' => 'Les modifications ont été sauvegardées.',
	],
	'not_found' => [
		'title' => 'Erreur',
		'message' => 'Dossier non trouvé.',
	],
];
