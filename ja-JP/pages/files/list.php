<?php

return [
	'title' => [
		'own' => '私のファイル',
		'other' => '{username}のファイル',
	],
	'breadcrumbs' => '{link}{username}のプロフィール{/link} → ファイル', // U+2192 (RIGHTWARDS ARROW)
	'stats' => [
		'files' => '{bold}{count}{/bold}個のファイルがアップロードされています。|{bold}{count}{/bold}個のファイルがアップロードされています。',
		'usage' => '{total}中{bold}{used}{/bold}が使用されています。({bold}{percent}%{/bold}).',
	],
	'action' => [
		'selected' => '選択したファイル:',
		'upload' => 'アップロード',
		'folder' => 'フォルダーを作成する',
		'folder_name' => 'フォルダーの名前を入力してください:',
		'move' => '移動する',
		'move_root' => '上',
		'move_new_folder' => '新しいフォルダー',
		'confirm_move' => '選択したファイルを移動しますか?',
		'edit' => '編集',
		'delete' => '削除',
	],
	'header' => [
		'name' => '名前',
		'size' => 'サイズ',
		'date' => '日付',
	],
	'sort' => [
		'name' => '名前で並べ替える',
		'size' => 'サイズで並べ替える',
		'date' => '日付で並べ替える',
	],
	'info' => [
		'file' => '{type} | {size}',
		'folder' => '{type}',
	],
	'unlisted' => '表示しない',
	'no_files' => 'ファイルがありません。',
	'upload' => [
		'title' => 'アップロード',
		'bytes' => 'バイト',
		'rules' => 'ファイルに著作権で保護された ROM イメージやウェアーズなどの違法なファイルや、悪意のあるソフトウェア (マルウェア、スパイウェア、ウイルスなど) が{bold}含まれていてはいけません{/bold}。このようなファイルは{bold}予告なく削除され{/bold}、処罰される可能性があります。',
		'unlisted' => '表示しない',
		'unlisted_warning' => '他のユーザーは、ファイルビンにあるがリストされていないファイルを見ることはできませんが、URLを共有すればアクセスできます。リストにないファイルには、すべてのルールが適用されます。',
		'submit' => 'アップロード',
		'cancel' => 'キャンセル',
	],
];
