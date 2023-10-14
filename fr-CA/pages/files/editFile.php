<?php

return [
	'title' => '{file} - Modifier - Mes Fichiers',
	'breadcrumbs' => '{profile}Profil de {username}{/profile} → {files}Fichiers{/files} → {file} → Modifier', // U+2192 (RIGHTWARDS ARROW)
	'form' => [
		'title' => 'Modifier',
		'name' => [
			'title' => 'nom',
			'description' => 'Les liens qui existent vers un fichier peuvent devenir désuets si vous le renommez.',
		],
		'unlisted' => 'masqué',
		'submit' => 'Sauvegarder',
	],
	'success' => [
		'title' => 'Succès',
		'message' => 'Les modifications ont été sauvegardées.',
	],
	'not_found' => [
		'title' => 'Error',
		'message' => 'Fichier non trouvé.',
	],
];
