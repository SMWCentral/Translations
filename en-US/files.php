<?php

return [
	'type' => [
		'blank' => 'File',
		'extension' => '{EXTENSION} file',
		'folder' => 'Folder',
	],
	'filter' => [
		'titled_rom' => 'a {game} ROM',
		'known_rom' => 'a {game} ROM',
		'maybe_rom' => 'a potential ROM',
		'executable' => 'an executable file',
		'bad_ips' => 'a malformed IPS patch',
		'bad_bps' => 'a malformed BPS patch',
		'archive' => 'an archive',
		'bad_zip' => 'a malformed ZIP archive',
		'big_zip' => 'a large ZIP archive',
		'encrypted_zip' => 'an encrypted ZIP archive',
		'zip_contents' => "an archive containing:\n{contents}",
		'zip_file' => '• {filename}: {result}', // U+2022 (BULLET)
	],
	'upload' => [
		'filter' => 'You\'re not allowed to upload this file because it is {reason}.',
		'process_size' => 'The file is too big to be processed.',
		'file_size' => 'You cannot upload files larger than {limit}.',
		'bin_size' => 'Size limit exceeded.',
		'partial' => 'The file was partially uploaded.',
		'no_file' => 'You must upload a file.',
		'internal' => 'The file couldn\'t be uploaded.',
	],
];
