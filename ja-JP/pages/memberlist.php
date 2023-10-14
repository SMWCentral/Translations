<?php

return [
	'title' => 'Member List',
	'count' => '{stats}{count}{/stats}人のメンバーが見つかりました。{stats}{start}{/stats}–{stats}{end}{/stats}番目を表示しています。', // U+2013 (EN DASH)
	'filter' => [
		'title' => 'フィルター',
		'username' => 'ユーザー名:',
		'username_ip' => 'ユーザー名/IP:',
		'inactive' => '非アクティブなユーザーを表示',
		'ip' => '最後のIPで検索',
		'submit' => 'フィルター',
	],
	'list' => [
		'number' => '#',
		'username' => 'ユーザー名',
		'since' => '登録日時',
		'posts' => '投稿数',
		'ip' => '最後のIP',
		'reveal' => '明らかにする',
		'empty' => 'メンバーが見つかりません。',
	],
];
