<?php

return [
	'addressApproved' => [
		'title' => 'Votre addresse a été approuvée!',
		'body' => '{username} a approuvé {stats}${address}{/stats} au Plan-mémoire suivant: {stats}{map}{/stats}.',
	],
	'addressRejected' => [
		'title' => 'Votre addresse a été rejetée',
		'body' => '{username} a rejeté {stats}${address}{/stats} au Plan-mémoire suivant {stats}{map}{/stats}. {log_link}Vous pouvez accéder au registre de rejet ici{/log_link}.',
	],
	'commentReply' => [
		'title' => 'Une nouvelle réponse à votre commentaire!',
		'body' => '{username} a répondu à votre commentaire sur{stats}{link}{file_name}{/link}{/stats}.',
	],
	'fileApproved' => [
		'title' => 'Votre soumission a été approuvée!',
		'body' => '{username} a approuvé {stats}{link}{file_name}{/link}{/stats}.',
	],
	'fileComment' => [
		'title' => 'Un nouveau commentaire sur une soumission que vous surveillez!',
		'body' => '{username} a publié un commentaire sur {stats}{link}{file_name}{/link}{/stats}.',
	],
	'fileRejected' => [
		'title' => 'Votre soumission a été rejetée',
		'body' => '{username} a rejeté {stats}{file_name}{/stats}. {log_link}Vous pouvez accéder au registre de rejet ici{/log_link}.',
	],
	'fileUpdate' => [
		'title' => 'Une soumission que vous surveillez a été mise à jour!',
		'body' => '{username} {new_link}a soumis une mise à jour{/link} pour {stats}{old_link}{old_name}{/link}{/stats}.',
	],
	'post' => [
		'title' => 'Nouvelle publication dans un fil que vous surveillez!',
		'known' => '{username} a répondu à {stats}{link}{title}{/link}{/stats}. Il pourrait y avoir plus de publications après celle-ci.',
		'restricted' => '{username} a répondu à un fil restreint que vous surveillez.'
	],
	'tweakApproved' => [
		'title' => 'Votre ajustement a été approuvé!',
		'body' => '{username} a approuvé {stats}{link}{summary}{/link}{/stats}.',
	],
	'tweakRejected' => [
		'title' => 'Votre ajustement a été rejeté',
		'body' => '{username} a rejeté {stats}{summary}{/stats}. {log_link}Vous pouvez accéder au registre de rejet ici{/log_link}.',
	],
];
