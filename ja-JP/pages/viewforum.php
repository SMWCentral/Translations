<?php

return [
	'title' => [
		'generic' => 'フォーラム',
		'index' => 'フォーラムインデックス',
		'forum' => '{forum}',
		'bonus_game' => 'エラー',
	],
	'stats' => [
		'posts' => '{stats}{count}{/stats}件の投稿|{stats}{count}{/stats}件の投稿',
		'threads' => '{stats}{count}{/stats} thread|{stats}{count}{/stats} threads',
		'posts_today' => '今日の投稿数:{stats}{count}{/stats}',
		'posts_hour' => 'この時間の投稿数:{stats}{count}{/stats}',
		'line' => '{threads}の{posts}| {posts_today} | {posts_hour}',
	],
	'action' => [
		'edit' => 'フォーラムを編集',
		'c3_edit' => 'C3を編集',
		'c3_results' => '結果の表示',
		'c3_vote' => '投票',
		'mark_read' => 'フォーラムを既読としてマーク',
		'mark_tagged_read' => 'タグ付きスレッドを既読としてマーク',
		'new_thread' => '新しいスレッド',
		'new_tagged_thread' => 'タグ付きの新しいスレッド',
		'link' => 'リンク',
	],
	'mark_all_read' => 'すべてのフォーラムを既読としてマークする',
	'watched_threads' => 'スレッドの通知を受け取る',
	'viewing_tagged' => '現在、{tag} のタグが付いたスレッドのみを表示しています。',
	'breadcrumbs' => [
		'index' => 'フォーラムインデックス',
		'tagged' => 'タグ付きスレッド',
	],
	'category' => [
		'forums' => 'フォーラム',
		'subforums' => 'サブフォーラム',
	],
	'last_post_info' => '{user}が{date}{br}に投稿 {link}',
	'forum' => [
		'threads' => 'スレッド',
		'posts' => '投稿',
		'last_post' => '最後の投稿',
		'new_posts' => '新しい投稿',
		'new_posts_sub' => 'サブフォーラムの新しい投稿',
		'no_new_posts' => '新しい投稿はありません。',
		'moderated_by' => 'モデレート者:',
		'no_posts' => '投稿はありません。',
	],
	'threads' => [
		'title' => 'スレッドのタイトル',
		'created' => '投稿日',
		'replies' => '返信',
		'views' => 'ビュー',
		'last_post' => '最後の投稿',
		'status' => [
			'open' => '新しい投稿はありません',
			'closed' => 'スレッド閉鎖済み',
			'moved' => 'ファントム スレッド',
			'open_new' => '新しい投稿',
			'closed_new' => 'スレッドは閉じられたが、新しい投稿',
			'moved_new' => '新しい投稿',
		],
		'poll' => '投票',
		'first_unread' => '最初の未読投稿に移動',
		'view_latest' => '最新の投稿に移動',
		'description' => '{user}が{date}に投稿',
		'moved' => '[0] → {forum}に移動しました (ここからすぐに消えます)|[1]→ {forum}に移動しました (ここから1日で消えます)|[*,*]→ {forum} (ここから{count}日で消えます)', // U+2192 (RIGHTWARDS ARROW)
		'watching' => 'あなたはこのスレッドを見ています',
		'nsfw' => 'NSFW',
		'page' => 'ページ',
		'none' => 'このフォーラムにはスレッドがありません。',
	],
	'not_found' => [
		'title' => 'エラー',
		'message' => '要求されたフォーラムは存在しないか、閲覧する権限がありません。',
	],
	'bad_token' => [
		'title' => 'エラー',
		'message' => '不正なトークンです。',
	],
	'read_all' => [
		'title' => '完了',
		'message' => 'All forums have been marked read.',
	],
	'read_forum' => [
		'title' => '完了',
		'message' => '{bold}{forum}{/bold}は既読としてマークされました。',
	],
	'read_tag_success' => [
		'title' => '完了',
		'message' => 'タグ {bold}{tag}{/bold} は既読マークが付けられました。',
	],
	'read_tag_error' => [
		'title' => 'Error',
		'message' => 'タグを既読としてマークできませんでした。',
	],
];
