<?php

return [
	'title' => [
		'own' => 'Mes fichiers',
		'other' => 'Fichiers de {username}',
	],
	'breadcrumbs' => '{link}Profil de {username}{/link} → Fichiers', // U+2192 (RIGHTWARDS ARROW)
	'stats' => [
		'files' => '{bold}{count}{/bold} fichier a été téléversé.|{bold}{count}{/bold} fichiers ont été téléversés.',
		'usage' => 'Utilisation: {bold}{used}{/bold} de {total} ({bold}{percent}%{/bold}).',
	],
	'action' => [
		'selected' => 'Avec les sélectionnés:',
		'upload' => 'Téléverser',
		'folder' => 'Nouveau dossier',
		'folder_name' => 'Tapez le nom du dossier:',
		'move' => 'Déplacer',
		'move_root' => 'Retirer du dossier',
		'move_new_folder' => 'Nouveau dossier',
		'confirm_move' => 'Déplacer les fichiers sélectionnés?',
		'edit' => 'Modifier',
		'delete' => 'Supprimer',
	],
	'header' => [
		'name' => 'Nom',
		'size' => 'Taille',
		'date' => 'Date',
	],
	'sort' => [
		'name' => 'Trier par nom',
		'size' => 'Trier par taille',
		'date' => 'Trier par date',
	],
	'info' => [
		'file' => '{type} | {size}',
		'folder' => '{type}',
	],
	'unlisted' => 'Masqué',
	'no_files' => 'Aucun fichier.',
	'upload' => [
		'title' => 'Téléverser',
		'bytes' => 'octets',
		'rules' => 'Les fichiers {bold}ne doivent pas{/bold} contenir du contenu illégal, tels que des images ROM ou des logiciels piratés, ni contenir des logiciels malveillants (maliciel, espiogiciel, virus, etc.). Les fichiers enfreignants seront supprimés {bold}sans avis préalable{/bold} et pourraient mener à une punition.',
		'unlisted' => 'Masqué',
		'unlisted_warning' => 'D\'autres personnes ne peuvent pas voir les fichiers masqués depuis votre Boîte à fichiers, mais ils peuvent y accéder si vous y partagez un lien. Les fichiers masqués ne sont pas exempts des règlements du site.',
		'submit' => 'Téléverser',
		'cancel' => 'Annuler',
	],
];
