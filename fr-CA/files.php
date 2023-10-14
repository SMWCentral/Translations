<?php

return [
	'type' => [
		'blank' => 'Fichier',
		'extension' => 'Fichier de type {EXTENSION}',
		'folder' => 'Dossier',
	],
	'filter' => [
		'titled_rom' => 'un ROM de {game}',
		'known_rom' => 'un ROM de {game}',
		'maybe_rom' => 'un ROM potentiel',
		'executable' => 'un fichier exécutable',
		'bad_ips' => 'un patch IPS malformé',
		'bad_bps' => 'un patch BPS malformé',
		'archive' => 'une archive',
		'bad_zip' => 'une archive ZIP malformée',
		'big_zip' => 'une archive ZIP à grande taille',
		'encrypted_zip' => 'une archive ZIP cryptée',
		'zip_contents' => "une archive contenant:\n{contents}",
		'zip_file' => '• {filename}: {result}', // U+2022 (BULLET)
	],
	'upload' => [
		'filter' => 'Vous ne pouvez pas téléverser ce fichier, car il est interdit de téléverser {reason}.',
		'process_size' => 'Le fichier est trop grand pour être traité.',
		'file_size' => 'Vous ne pouvez pas téléverser des fichiers plus grand que {limit}.',
		'bin_size' => 'La limite de taille a été dépassée.',
		'partial' => 'Le fichier a été partiellement téléversé.',
		'no_file' => 'Vous devez téléverser un fichier.',
		'internal' => 'Le fichier n\'a pas pu être téléversé.',
	],
];
