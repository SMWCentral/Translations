<?php

return [
	'addressApproved' => [
		'title' => 'アドレスは承認されました!',
		'body' => '{username}は{stats}{map} Map{/stats}の {stats}${address}{/stats} を承認しました。',
	],
	'addressRejected' => [
		'title' => 'アドレスは拒否されました',
		'body' => '{username}は{stats}{map} Map{/stats}の{stats}${address}{/stats}を拒否しました。{log_link}削除ログはここで確認できます{/log_link}。',
	],
	'commentReply' => [
		'title' => 'コメントに新しい返信があります!',
		'body' => '{username}が{stats}{link}{file_name}{/link}{/stats}のコメントに返信しました。',
	],
	'fileApproved' => [
		'title' => '投稿は承認されました!',
		'body' => '{username}は{stats}{link}{file_name}{/link}{/stats}を承認しました。',
	],
	'fileComment' => [
		'title' => '見ている投稿に新しいコメントがあります!',
		'body' => '{username}が{stats}{link}{file_name}{/link}{/stats}にコメントしました。',
	],
	'fileRejected' => [
		'title' => '提出は拒否されました',
		'body' => '{username}は{stats}{file_name}{/stats}を拒否しました。{log_link}削除ログはここで確認できます{/log_link}。',
	],
	'fileUpdate' => [
		'title' => '見ている投稿にアップデートが送信されました!',
		'body' => '{username}が{stats}{old_link}{old_name}{/link}{/stats}に{new_link}アップデートを送信しました{/link}。',
	],
	'post' => [
		'title' => '見ているスレッドに新しい投稿があります!',
		'known' => '{username}が{stats}{link}{title}{/link}{/stats} に返信しました。この投稿の後にさらに新しい投稿がある可能性があります。',
		'restricted' => '{username}は、あなたが通知を受け取るように設定をしている制限付きスレッドに返信しました。',
	],
	'tweakApproved' => [
		'title' => '微調整は承認されました!',
		'body' => '{username}は{stats}{link}{summary}{/link}{/stats} を承認しました。',
	],
	'tweakRejected' => [
		'title' => '微調整は拒否されました',
		'body' => '{username}は{stats}{summary}{/stats}を拒否しました。{log_link}削除ログはここで確認できます{/log_link}。',
	],
];
