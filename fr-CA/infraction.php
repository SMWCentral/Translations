<?php

return [
	'action' => [
		'punishment' => 'Punition:',
		'notice' => [
			'name' => 'Avis',
		],
		'warn' => [
			'name' => 'Avertissement',
		],
		'ban' => [
			'name' => 'Bannissement temporaire',
			'field' => [
				'duration' => 'Durée:',
				'revoke' => 'Révoquer des privilèges:',
			],
			'expires' => 'Expire le {datetime}',
			'privilege' => [
				'none' => 'Aucun',
				'forums' => 'Publier dans les forums',
				'filebin' => 'Boîte à fichiers',
				'edit_profile' => 'Modification de profil',
				'pms' => [
					'non-staff' => 'Envoyer des MP au personnel', // TODO ADD NEW ONES
					'all' => 'Envoyer des MP',
				],
				'section_submit' => 'Soumettre des fichiers aux sections',
				'section_comment' => 'Publier des commentaires dans les sections',
				'tweaks' => 'Soumettre des ajustements',
				'addresses' => 'Soumettres des addresses de mémoire', // CHECK
				'vote' => 'Voter (C3 et Mosts)',
			],
		],
		'forumBan' => [
			'name' => 'Bannissement de forum',
			'field' => [
				'forum' => 'Forum:',
			],
			'restricted' => '(restreint)',
		],
		'sectionBan' => [
			'name' => 'Bannissement de section',
			'field' => [
				'sections' => 'Sections:',
			],
			'none' => 'Aucune',
			'all' => 'Tous',
		],
		'nuke' => [
			'name' => 'Champs de profil éliminés',
			'field' => [
				'fields' => 'Champs:',
			],
			'fields' => [
				'none' => 'Aucun',
				'username' => 'Nom d\'utilisateur',
				'display_name' => 'Nom affiché',
				'title' => 'Titre',
				'avatar' => 'Photo',
				'location' => 'Localisation',
				'email' => 'Courriel',
				'discord_tag' => 'Tag Discord', // looked it up on actual French Discord, it's called a tag even there
				'contact' => 'Autres coordonnées',
				'bio' => 'Bio',
				'layout' => 'Mise en page',
			],
		],
		'disable' => [
			'name' => 'Compte désactiver',
			'revoked' => 'Débannissement de compte',
			'field' => [
				'ipban' => 'Bannissement IP:',
			],
			'no_ipban' => 'Non',
			'with_ipban' => 'Oui',
			'with_ipban_admin' => 'Niveau {bold}{level}{/bold} sur {bold}{ip}{/bold} ({bold}{reason}{/bold})',
		],
	],
	'content' => [
		'empty' => [
			'blurb' => 'Aucun',
		],
		'post' => [
			'blurb' => 'Publication {post} ({forum})',
			'blurb_restricted' => 'Publication (Restreinte)',
		],
	],
];
