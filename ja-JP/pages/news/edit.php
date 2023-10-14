<?php

return [
	'title' => [
		'create' => '新しい記事',
		'edit' => '{title}を編集',
	],
	'preview' => 'プレビュー',
	'info' => '{username}が{date}に投稿',
	'editor' => 'エディター',
	'form' => [
		'title' => 'タイトル', // required, string, between.string
		'text' => '文章', // required, string, between.string
		'priority' => '優先度', // integer, between.integer
		'internal' => [
			'title' => '内部', // boolean
			'description' => '「内部」記事は、登録ユーザーのみに重要なトピックを取り上げており、混乱を招いたり、残りの部分を後回しにしたりする可能性があります。ログインしていない場合、メイン ページには表示されません。',
		],
		'submit' => '公開',
		'preview' => 'プレビュー',
	],
	'not_found' => [
		'title' => 'エラー',
		'message' => '記事がありません。',
	],
	'success' => [
		'create' => [
			'title' => '完了',
			'message' => '記事が作成されました。',
		],
		'edit' => [
			'title' => '完了',
			'message' => '記事が更新されました。',
		],
	],
];
