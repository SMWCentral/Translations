<?php

return [
	'title' => [
		'inbox' => 'Messages privés',
		'sentbox' => 'Messages envoyés',
		'inbox_for' => 'Messages privés de {username}',
		'sentbox_for' => 'Messages envoyés de {username}',
		'read' => '{subject} - Messages privés',
		'compose' => 'Écrire un message',
		'delete' => 'Confirmer la suppression'
	],
	'list' => [
		'count' => [
			'inbox' => '{stats}{count}{/stats} messages privés reçus. {stats}{start}{/stats}–{stats}{end}{/stats} affichés.', // U+2013 (EN DASH)
			'sentbox' => '{stats}{count}{/stats} messages privés envoyés. {stats}{start}{/stats}–{stats}{end}{/stats} affichés.' // U+2013 (EN DASH)
		],
		'view' => [
			'line' => 'Afficher: {received} | {sent}',
			'received' => 'reçus',
			'sent' => 'envoyés'
		],
		'delete_selected' => 'Supprimer les messages sélectionnés',
		'write' => 'Écrire un message privé',
		'search' => [
			'title' => 'Rechercher',
			'too_many' => 'Trop d\'utilisateurs ont été trouvés; il se peut que certains résultats soient omis.',
			'field' => 'Sujet ou nom d\'utilisateur:',
			'submit' => 'Rechercher'
		],
		'inbox' => 'Boîte de réception',
		'sentbox' => 'Boîte d\'envoi',
		'from' => 'De',
		'to' => 'À',
		'time' => 'Heure',
		'none' => 'Aucun message à afficher.',
		'new' => 'NOUV.',
		'unread' => 'Message non lu',
		'deleted' => '[Supprimé]'
	],
	'confirm_read' => [
		'title' => 'Confirmer la lecture',
		'user' => "Vous vous apprêtez à lire les messages privés de {bold}{username}{/bold}. Tous les membres du personnel pourront voir cette action.",
		'pm' => 'Vous vous apprêtez à lire un message privé de {bold}{sender}{/bold} à {bold}{recipient}{/bold}. Tous les membres du personnel pourront voir cette action.',
		'reason' => 'Raison: ',
		'submit' => 'Confirmer'
	],
	'read' => [
		'breadcrumbs' => [
			'inbox' => '{link}Boîte de réception des messages privés{/link} → {subject}', // U+2192 (RIGHTWARDS ARROW)
			'sentbox' => '{link}Boîte d\'envoi des messages privés{/link} → {subject}' // U+2192 (RIGHTWARDS ARROW)
		],
		'reply' => 'Répondre'
	],
	'compose' => [
		'editor' => 'Éditeur',
		'success' => [
			'title' => 'Succès',
			'message' => 'Message envoyé avec succès.'
		],
		'error' => [
			'title' => 'Erreur',
			'message' => "Le message n'a pas pu être envoyé."
		]
	],
	'form' => [
		'recipient' => [
			'title' => 'Destinataire', // required, string, not_found (non-standard), banned (non-standard)
			'not_found' => 'Le destinataire n\'a pas été trouvé.',
			'banned_all' => 'Les utilisateurs bannis ne peuvent pas envoyer des messages privés.',
			'banned_staff' => 'Les utilisateurs bannis peuvent seulement envoyer des messages privés aux membres du personnel.',
			'rate' => 'Vous devez attendre avant de pouvoir envoyer un autre message privé.'
		],
		'subject' => 'sujet', // required, string, between.string
		'text' => 'message', // required, string, between.string
		'submit' => 'Envoyer',
		'preview' => 'Aperçu'
	],
	'delete' => [
		'description' => '[1] Êtes-vous sûr de vouloir supprimer le message privé sélectionné?|[*,*] Êtes-vous sûr de vouloir supprimer les {bold}{count}{/bold} messages privés sélectionnés?',
		'single' => 'Êtes-vous sûr de vouloir supprimer ce message privé?',
		'confirm' => 'Confirmer',
		'cancel' => 'Annuler',
		'none' => [
			'title' => 'Erreur',
			'message' => 'Aucun message sélectionné.'
		],
		'success' => [
			'title' => 'Succès',
			'message' => '[0] Aucun message supprimé.|[1] Message supprimé.|[*,*] {count} messages supprimés.'
		]
	],
	'pm_not_found' => [
		'title' => 'Erreur',
		'message' => 'Message non trouvé.'
	],
	'user_not_found' => [
		'title' => 'Erreur',
		'message' => 'L\'utilisateur précisé n\'existe pas.'
	]
];
