<?php

return [
	'title' => [
		'generic' => 'Forums',
		'index' => 'Index des forums',
		'forum' => '{forum}',
		'bonus_game' => 'Erreur',
	],
	'stats' => [
		'posts' => '{stats}{count}{/stats} publication|{stats}{count}{/stats} publications',
		'threads' => '{stats}{count}{/stats} fil|{stats}{count}{/stats} fils',
		'posts_today' => 'Publications aujourd\'hui: {stats}{count}{/stats}',
		'posts_hour' => 'Publications cette heure: {stats}{count}{/stats}',
		'line' => '{posts} dans {threads} | {posts_today} | {posts_hour}',
	],
	'action' => [
		'edit' => 'Modifier le forum',
		'c3_edit' => 'Modifier C3',
		'c3_results' => 'Voir les résultats',
		'c3_vote' => 'Voter',
		'mark_read' => 'Marquer le forum comme lu',
		'mark_tagged_read' => 'Marquer les forums étiquettés comme lus',
		'new_thread' => 'Nouveau fil',
		'new_tagged_thread' => 'Nouveau fil avec étiquette',
		'link' => 'Lien',
	],
	'mark_all_read' => 'Marquer tous les forums comme lus',
	'watched_threads' => 'Fils surveillés',
	'viewing_tagged' => 'Seuls les fils avec l\'étiquette {tag} sont présentement affichés.',
	'breadcrumbs' => [
		'index' => 'Index des forums',
		'tagged' => 'Forums étiquettés',
	],
	'category' => [
		'forums' => 'Forums',
		'subforums' => 'Sous-forums',
	],
	'last_post_info' => '{date}{br}par {user} {link}',
	'forum' => [
		'threads' => 'Fils',
		'posts' => 'Publications',
		'last_post' => 'Dernière publication',
		'new_posts' => 'Nouvelles publications',
		'new_posts_sub' => 'Nouvelles publications dans les sous-forums',
		'no_new_posts' => 'Aucune nouvelle publication',
		'moderated_by' => 'Modéré par:',
		'no_posts' => 'Aucune publication.',
	],
	'threads' => [
		'title' => 'Titre du fil',
		'created' => 'Publié le',
		'replies' => 'Réponses',
		'views' => 'Visionnements',
		'last_post' => 'Dernière publication',
		'status' => [
			'open' => 'Aucune nouvelle publication',
			'closed' => 'Fil fermé',
			'moved' => 'Fil fantôme',
			'open_new' => 'Nouvelles publications',
			'closed_new' => 'Fil fermé, nouvelles publications',
			'moved_new' => 'Nouvelles publications',
		],
		'poll' => 'sondage',
		'first_unread' => 'Aller à la première publication non-lue',
		'view_latest' => 'Aller à la dernière publication',
		'description' => 'Publié par {user} le {date}',
		'moved' => '[0] → Déplacé vers {forum} (ceci disparaîtra d\'ici bientôt)|[1]→ Déplacé vers {forum} (ceci disparaîtra d\'ici dans un jour)|[*,*]→ Déplacé vers {forum} (ceci disparaîtra d\'ici dans {count} jours)', // U+2192 (RIGHTWARDS ARROW)
		'watching' => 'Vous surveillez ce fil',
		'nsfw' => 'Contenu inapproprié pour les mineurs',
		'page' => 'Page',
		'none' => 'Il n\'y a aucun fil dans ce forum.',
	],
	'not_found' => [
		'title' => 'Erreur',
		'message' => 'Le forum demandé n\'existe pas, ou vous n\'avez pas la permission de le visionner.',
	],
	'bad_token' => [
		'title' => 'Erreur',
		'message' => 'Jeton incorrect.',
	],
	'read_all' => [
		'title' => 'Succès',
		'message' => 'Tous les forums ont été marqués comme lus.',
	],
	'read_forum' => [
		'title' => 'Succès',
		'message' => '{bold}{forum}{/bold} a été marqué comme lu.',
	],
	'read_tag_success' => [
		'title' => 'Succès',
		'message' => 'L\'étiquette {bold}{tag}{/bold} a été marqué comme lu.',
	],
	'read_tag_error' => [
		'title' => 'Erreur',
		'message' => 'L\'étiquette n\'a pas pu être marqué comme lu.',
	],
];
