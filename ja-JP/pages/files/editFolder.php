<?php

return [
	'title' => '{folder} - 編集 - 私のファイル',
	'breadcrumbs' => '{profile}{username}のプロフィール{/profile} → {files}ファイル{/files} → {folder} → 編集', // U+2192 (RIGHTWARDS ARROW)
	'form' => [
		'title' => '編集',
		'name' => [
			'title' => '名前',
			'description' => 'ファイル名を変更すると、そのファイルへのリンクが機能しなくなる可能性があります。',
		],
		'show_as' => [
			'title' => 'インデックス',
			'description' => '「なし」以外の場合、フォルダーは特定のファイルをダウンロードするURLを取得します。',
			'options' => [
				'none' => 'なし',
				'newest' => '新しいファイルを表示する',
				'oldest' => '古いファイルを表示する',
				'random' => 'ランダムなファイルを表示する',
			],
		],
		'submit' => '保存',
	],
	'success' => [
		'title' => '完了',
		'message' => '変更が保存されました。',
	],
	'not_found' => [
		'title' => 'エラー',
		'message' => 'フォルダーがありません。',
	],
];
