<?php

return [
	'title' => [
		'notice' => 'Aviser {username}',
		'warn' => 'Avertir {username}',
		'ban' => 'Bannir {username}',
		'forumBan' => 'Bannir {username} des forums',
		'sectionBan' => 'Bannir {username} des sections',
		'nuke' => 'Éliminer des champs de profil de {username}',
		'disable' => 'Désactiver le compte de {username}'
	],
	'form' => [
		'editor' => 'Infraction',
		'user' => 'Utilisateur',
		'content' => 'Contenu',
		'preset' => 'Préréglés',
		'summary' => [
			'title' => 'résumé',
			'description' => 'Explication brève de l\'infraction. {bold}Publiquement visible{/bold}.',
			'notice' => 'Sujet de l\'avis. Affiché à l\'utilisateur.'
		],
		'message' => [
			'title' => 'message',
			'description' => 'Affiché à l\'utilisateur.'
		],
		'notes' => [
			'title' => 'notes',
			'description' => 'Facultatif. Uniquement visible aux membres du personnel.'
		],
		'action' => [
			'ban' => [
				'ban' => 'Bannir',
				'privileges' => 'Révoquer des privilèges',
				'duration' => [
					'title' => 'Durée',
					'description' => '[0]|[1]Le bannissement ne peut durer qu\'un jour au maximum.|[*,*] Le bannissement ne peut durer que {count} jours au maximum.',
					'days' => 'jour(s)',
					'hours' => 'heure(s)'
				],
				'forums' => [
					'title' => 'Forums',
					'description' => 'Sera en lecture seule'
				],
				'filebin' => 'Boîte à fichiers',
				'edit_profile' => 'Modification de profil',
				'pms' => [
					'title' => 'MP',
					'options' => [
						'none' => 'Ne pas empêcher',
						'non-staff' => 'Empêcher l\'envoi à ceux qui ne sont pas membres du personnel',
						'all' => 'Empêcher l\'envoi complètement'
					]
				],
				'section_submit' => 'Soumettre des fichiers (sections)',
				'section_comment' => 'Publier des commentaires (sections)',
				'tweaks' => 'Soumettre des ajustements',
				'addresses' => 'Soumettre des addresses de mémoire',
				'vote' => [
					'title' => 'Voter',
					'description' => 'C3 et Mosts'
				]
			],
			'forumBan' => [
				'title' => 'Forum',
				'description' => 'Une infraction peut seulement empêcher l\'accès à un seul forum.',
				'choose' => 'Choisir'
			],
			'sectionBan' => [
				'title' => 'Sections',
				'all' => 'Bannir de toutes les sections?',
				'sections' => 'Sections'
			],
			'nuke' => [
				'nuke' => 'Éliminer des champs',
				'username' => 'Nom d\'utilisateur',
				'display_name' => 'Nom affiché',
				'title' => 'Titre',
				'avatar' => 'Photo',
				'location' => 'Localisation',
				'email' => [
					'title' => 'Courriel',
					'description' => 'Ne sera pas supprimé, mais rendu uniquement visible aux administrateurs.'
				],
				'discord_tag' => 'Tag Discord',
				'contact' => 'Autres coordonnées',
				'bio' => 'Bio',
				'layout' => 'Mise en page'
			],
			'disable' => [
				'disable' => 'Désactiver',
				'ipban' => 'Appliquer un bannissement d\'IP?',
				'ip' => [
					'title' => 'Addresse IP',
					'description' => 'Contient le dernier IP de l\'utilisateur par défaut.'
				],
				'level' => [
					'title' => 'Niveau',
					'options' => [
						'register' => '1 - Incapable de s\'inscrire',
						'login' => '2 - Incapable de se connecter',
						'access' => '3 - Incapable d\accéder au site'
					]
				],
				'reason' => 'Raison'
			]
		],
		'submit' => 'Continuer',
		'action_forum' => [
			'not_found' => 'Le forum n\'a pas pu être trouvé.'
		]
	],
	'review' => [
		'line_1' => 'Vous vous apprêtez à émettre une infraction à {username}. Une entrée sera ajoutée à leur dossier, et il sera redirigé vers l\'infraction la prochaine fois qu\'il visitera le site.',
		'no_content' => 'Aucun contenu n\'a été précisé en lien avec cette infraction. Si le contenu enfreignant est disponible, liez-y l\'infraction en l\'émettant à partir du contenu.',
		'line_2' => 'Est-ce que toute l\'information est correcte? Vous ne pourriez plus modifier l\'infraction une fois émise.',
		'notice' => [
			'line_1' => 'Vous vous apprêtez à envoyer cet avis à {username}. L\'utilisateur y sera redirigé la prochaine fois qu\'il visitera le site.',
			'line_2' => 'Est-ce que toute l\'information est correcte? Vous ne pourriez plus modifier l\'avis une fois envoyé.'
		],
		'field' => [
			'user' => 'Utilisateur:',
			'content' => 'Contenu:',
			'summary' => 'Résumé:',
			'message' => 'Message:',
			'notes' => 'Notes:',
			'date' => 'Date:',
			'issuer' => 'Émetteur:'
		],
		'action' => [
			'confirm' => 'Confirmer',
			'back' => 'Retour'
		],
		'empty' => '{italic}N/A{/italic}'
	],
	'new_tab' => 'S\'ouvre dans un nouvel onglet',
	'user_not_found' => [
		'title' => 'Erreur',
		'message' => 'L\'utilisateur précisé n\'existe pas.'
	],
	'invalid_action' => [
		'title' => 'Erreur',
		'message' => 'Type de punition invalide.'
	],
	'success' => [
		'title' => 'Succès',
		'message' => 'Infraction émise.'
	]
];
