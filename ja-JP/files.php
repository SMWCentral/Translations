<?php

return [
	'type' => [
		'blank' => 'ファイル',
		'extension' => '{EXTENSION}ファイル',
		'folder' => 'フォルダー',
	],
	'filter' => [
		'titled_rom' => '{game}のROM',
		'known_rom' => '{game}のROM',
		'maybe_rom' => '潜在的なROM',
		'executable' => '実行可能ファイル',
		'bad_ips' => '不正な形式のIPSパッチ',
		'bad_bps' => '不正な形式のBPSパッチ',
		'archive' => 'アーカイブ',
		'bad_zip' => '不正な形式の ZIP アーカイブ',
		'big_zip' => '大きな ZIP アーカイブ',
		'encrypted_zip' => '暗号化されたアーカイブ',
		'zip_contents' => "以下を含むアーカイブ:\n{contents}",
		'zip_file' => '• {filename}: {result}', // U+2022 (BULLET)
	],
	'upload' => [
		'filter' => 'このファイルは {reason} であるため、アップロードできません。',
		'process_size' => 'ファイルが大きすぎて処理できません。',
		'file_size' => '{limit} を超えるファイルはアップロードできません。',
		'bin_size' => 'サイズ制限を超えました。',
		'partial' => 'ファイルは部分的にアップロードされました。',
		'no_file' => 'ファイルをアップロードする必要があります。',
		'internal' => 'ファイルをアップロードできませんでした。',
	],
];
