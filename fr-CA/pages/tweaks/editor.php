<?php

return [
	'title' => [
		'submit' => 'Soumettre un ajustement - Ajustements pour {game}',
		'update' => '{tweak} - Soumettre une mise à jour - Ajustements pour {game}',
		'edit' => '{tweak} - Modifier l\'ajustement - Ajustements pour {game}',
		'approve' => '{tweak} - Approuver l\'ajustement - Ajustements pour {game}'
	],
	'heading' => [
		'submit' => 'Soumettre un ajustement pour {game}',
		'update' => 'Soumettre une mise à jour à {tweak}',
		'edit' => '{tweak}',
		'approve' => '{tweak}'
	],
	'submission_guidelines' => 'Consignes de soumission',
	'editor' => [
		'submit' => 'Soumettre',
		'update' => 'Soumettre une mise à jour',
		'edit' => 'Modifier',
		'approve' => 'Approuver'
	],
	'form' => [
		'summary' => [
			'title' => 'résumé',
			'description' => 'Résume de l\'effet de l\'ajustement. Apparaît dans les patchs générés.'
		],
		'description' => [
			'title' => 'description',
			'description' => 'Description détaillée ou des instructions d\'utilisation, si applicable. L\'HTML est permis. N\'apparaît pas dans les patchs générés.'
		],
		'tags' => [
			'title' => 'Étiquettes',
			'description' => 'Appuyez la touche « virgule » (,) ou « Entrée » après chaque étiquette pour l\'ajouter à la liste.' // U+00AB left-pointing double angle quotation mark     U+00BB right-pointing double angle quotation mark
		],
		'params' => [
			'title' => 'Paramètres',
			'description' => 'Paramètres que l\'utilisateur devra configurer, s\'il y en a.',
			'bad_request' => 'Les paramètres comportent des données non conformes.',
			'bad_id' => 'L\'identifiant « {id} » pour le paramètre « {name} » contient des caractères invalides.',
			'bad_type' => 'Le type « {type} » du paramètre « {name} » n\'est pas conforme.',
			'duplicate_id' => 'L\'identifiant « {id} » pour le paramètre « {name} » est dupliqué.',
			'duplicate_name' => 'Le nom de paramètre « {name} » est dupliqué.',
			'duplicate_option' => 'Le nom de l\'option « {name} » pour le paramètre « {param} » est dupliqué.',
			'old_mismatch' => 'L\'ordre et les types des paramètres doit être maintenu.'
		],
		'code' => [
			'title' => 'code',
			'description' => 'Vous pouvez faire référence aux paramètres en utilisant leur identifiant, entouré de crochets obliques (ex. <id>).',
			'bad_param' => 'Le code fait référence à un paramètre non défini "<{id}>".',
			'no_macro_def' => 'Le code ne devrait pas définir des macros.',
			'no_macro_call' => 'Le code ne devrait pas appeler des macros.'
		],
		'submission_notes' => [
			'title' => 'Notes à propos de la soumission',
			'description' => 'Si vous avez des notes pour les modérateurs à propos de cette soumission, veuillez les indiquer ici. Ce champ n\'est pas publiquement visible.'
		],
		'submit' => [
			'submit' => 'Soumettre',
			'update' => 'Soumettre',
			'edit' => 'Sauvegarder',
			'approve' => 'Approuver'
		]
	],
	'success' => [
		'submit' => [
			'title' => 'Succès',
			'message' => 'L\'ajustement a été soumis.'
		],
		'update' => [
			'title' => 'Succàs',
			'message' => 'La mise à jour a été soumise.'
		],
		'edit' => [
			'title' => 'Succès',
			'message' => 'L\'ajustement a été sauvegardé.'
		],
		'approve' => [
			'title' => 'Succès',
			'message' => 'L\'ajustement a été approuvé.'
		]
	]
];
