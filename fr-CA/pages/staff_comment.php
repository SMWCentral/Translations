<?php

return [
	'title' => 'Passer des commentaires au personnel',
	'editor' => 'Éditeur',
	'body' => [
		'main' => 'Vous avez un problème avec la manière dont un membre du personnel se comporte? Vous souhaitez faire reconnaître un membre du personnel assidu qui n\'est pas assez reconnu à votre avis? Vous avez des idées générales pour le personnel? N\'hésitez pas à envoyer des commentaires. Ils seront utilisés pour améliorer le site.',
		'attitude' => 'S\'il y a un problème avec le comportement d\'un membre du personnel, veuillez nous fournir des exemples, puisqu\'il se pourrait que ce soit quelque chose dont nous ne sommes pas au courant.',
		'response' => 'Nous réponderons à votre message publiquement dans le {link}Fil de réponses aux commentaires au personnel{/link}, tant que votre message respecte les critères détaillées dans la première publication de ce fil. Si vous choisissez de partager votre identité, il se pourrait qu\'on vous contacte à propos de vos commentaires.',
	],
	'form' => [
		'subject' => 'sujet',
		'message' => [
			'title' => 'Vos commentaires',
			'rate' => 'Afin de prévenir l\'abus, l\'envoi de commentaires au personnel est sujet à une limite de débit (« rate limit ») globale et n\'est présentement pas disponible. Veuillez réessayer dans 5 minutes.', // U+00AB left-pointing double angle quotation mark     U+00BB right-pointing double angle quotation mark
		],
		'reveal' => [
			'title' => 'Partager votre identité',
			'label' => 'Partager mon identité',
			'description' => 'Les commentaires aux personnel sont anonymes par défaut. Si vous cochez cette option, par contre, votre nom d\'utilisateur sera rattaché à votre message, ce qui nous permettera de vous contacter si nécessaire.',
		],
		'submit' => 'Envoyer mes commentaires',
		'preview' => 'Aperçu du message',
	],
	'success' => [
		'title' => 'Succès',
		'message' => 'Vos commentaires ont été envoyés.',
	],
	'error' => [
		'title' => 'Erreur',
		'message' => 'Une erreur interne a eu lieu lors de l\'envoi de vos commentaires. Veuillez réessayer plus tard.',
	],
];
