<?php

return [
	'title' => [
		'submit' => '微調整を送信 - {game}の微調整',
		'update' => '{tweak} - アップデートを送信 - {game}の微調整',
		'edit' => '{tweak} - 微調整を編集 - {game}の微調整',
		'approve' => '{tweak} - 微調整を承認 - {game}の微調整',
	],
	'heading' => [
		'submit' => '{game}の微調整を送信',
		'update' => '{tweak}のアップデートを送信',
		'edit' => '{tweak}',
		'approve' => '{tweak}',
	],
	'submission_guidelines' => '提出ガイドライン',
	'editor' => [
		'submit' => '送信',
		'update' => 'アップデートを送信',
		'edit' => '編集',
		'approve' => '承認',
	],
	'form' => [
		'summary' => [
			'title' => '概要',
			'description' => '微調整の効果の概要。生成されたパッチに表示されます。',
		],
		'description' => [
			'title' => '説明',
			'description' => '詳細な説明または使用方法 (該当する場合)。HTML は許可されます。生成されたパッチには表示されません。',
		],
		'tags' => [
			'title' => 'タグ',
			'description' => '各タグの後にカンマ (,) または Enter を押してリストに追加します。',
		],
		'params' => [
			'title' => 'パラメータ',
			'bad_request' => '不正なパラメータ データ。',
			'bad_id' => 'パラメータ「{name}」の識別子「{id}」に無効な文字があります。',
			'bad_type' => 'パラメータ「{name}」のタイプ 「{type}」が正しくありません。',
			'duplicate_id' => 'パラメータ「{name}」の識別子 "{id}」が重複しています。',
			'duplicate_name' => 'パラメータ名「{name}」が重複しています。',
			'duplicate_option' => 'パラメータ 「{param}」のオプション名 "{name}」が重複しています。',
			'old_mismatch' => 'パラメータの順序と型を保持する必要があります。',
		],
		'code' => [
			'title' => 'コード',
			'description' => '山括弧（<>）で囲まれた識別子を使用してパラメーターを参照します (例: <id>)。',
			'bad_param' => 'コードは未定義のパラメータ「<{id}>」を参照しています。',
			'no_macro_def' => 'コードはマクロを定義すべきではありません。',
			'no_macro_call' => 'コードはマクロを呼び出すべきではありません。',
		],
		'submission_notes' => [
			'title' => '送信ノート',
			'description' => 'この投稿に関してモデレータへのメモがある場合は、ここに記入してください。公には公開されません。',
		],
		'submit' => [
			'submit' => '送信',
			'update' => '送信',
			'edit' => '保存',
			'approve' => '承認',
		],
	],
	'success' => [
		'submit' => [
			'title' => '完了',
			'message' => '微調整を送信しました。',
		],
		'update' => [
			'title' => '完了',
			'message' => 'アップデートを送信しました。',
		],
		'edit' => [
			'title' => '完了',
			'message' => '微調整が保存されました。',
		],
		'approve' => [
			'title' => '完了',
			'message' => '微調整が承認されました。',
		],
	],
];
