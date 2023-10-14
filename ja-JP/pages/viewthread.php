<?php

return [
	'title' => '{title} - {forum}',
	'age_gate' => [
		'nsfw' => 'このスレッドには未成年者にふさわしくないコンテンツが含まれています。',
		'time' => 'このスレッドは{months}か月前に作成されました。現在の基準に従って適切に管理されていない可能性があり、未成年者に不適切なコンテンツが含まれている可能性があります。',
	],
	'forum_index' => 'フォーラムインデックス',
	'actions' => [
		'reply' => '新しい返信',
		'closed' => 'スレッド閉鎖済み',
		'watch' => 'スレッドの通知を受け取る',
		'unwatch' => 'スレッドの通知を受け取らない',
		'move' => 'スレッドを移動',
		'sticky' => 'スティッキースレッド',
		'desticky' => 'ディスティッキースレッド',
		'close' => 'スレッドを閉鎖する',
		'open' => 'スレッドを開く',
		'trash' => 'スレッドを削除する',
		'link' => 'リンク',
	],
	'poll' => [
		'show_results' => '結果を表示',
		'hide_results' => '結果を非表示',
		'delete' => '削除',
		'votes' => '{percentage}% ({link}1件の投票{/link})|{percentage}% ({link}{count}件の投票{/link})',
		'limit' => '投票は 1 つだけ許可されます。|最大{count}票まで許可されます。',
		'once' => '後で投票を変更することはできません。',
		'public' => '後で投票を変更することはできません。',
		'voters' => '投票者数の合計:{count}人',
		'closes' => '投票は{time}後に終了します。',
		'cast_vote' => '投票する',
		'change_vote' => '投票を変更',
		'closed' => '投票は{time}に終了しました。',
		'thread_closed' => 'スレッドが閉じられました。',
		'cannot_vote' => '投票できません。',
	],
	'quick_reply' => [
		'title' => 'クイック返信',
		'text' => 'コンテンツを投稿',
		'submit' => '返信を送信',
		'full' => '完全なエディターに移動',
	],
	'thread_not_found' => [
		'title' => 'エラー',
		'message' => '要求されたスレッドは存在しないか、スレッドを表示する権限がありません。',
	],
	'post_not_found' => [
		'title' => 'エラー',
		'message' => '要求された投稿は存在しないか、閲覧する権限がありません。',
	],
];
