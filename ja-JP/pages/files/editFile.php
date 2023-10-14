<?php

return [
	'title' => '{file} - 編集 - 私のファイル',
	'breadcrumbs' => '{profile}{username}のプロフィール{/profile} → {files}ファイル{/files} → {file} → 編集', // U+2192 (RIGHTWARDS ARROW)
	'form' => [
		'title' => '編集',
		'name' => [
			'title' => '名前',
			'description' => 'ファイル名を変更すると、そのファイルへのリンクが機能しなくなる可能性があります。',
		],
		'unlisted' => 'ほかのユーザーに表示しない',
		'submit' => '保存',
	],
	'success' => [
		'title' => '完了',
		'message' => '変更が保存されました。',
	],
	'not_found' => [
		'title' => 'エラー',
		'message' => 'ファイルがありません。',
	],
];
