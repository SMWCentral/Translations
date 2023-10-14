<?php

return [
	'code' => [
		'lang' => 'ja',
		'locale' => 'ja-JP',
	],
	'title' => '{title} - SMW Central',
	'language' => [
		'en-US' => 'English',
		'fr-CA' => 'Français',
		'pt-BR' => 'Português',
		'ja-JP' => '日本語',
	],
	'time' => [
		'now' => 'たった今',
		'past' => '{time}前',
		'years' => '1年|{count}年',
		'months' => '1ヵ月|{count}ヵ月',
		'weeks' => '1週間|{count}週間',
		'days' => '1日|{count}日',
		'hours' => '1時間|{count}時間',
		'minutes' => '1分|{count}分',
		'seconds' => '1秒|{count}秒',
	],
	'unit' => [
		'byte' => '{count}バイト|{count}バイト',
		'kibibyte' => "{count}\u{00A0}キロバイト", // U+00A0 (NO-BREAK SPACE)
		'mebibyte' => "{count}\u{00A0}メガバイト",
		'gibibyte' => "{count}\u{00A0}ギガバイト",
	],
	'redirection' => '{link}ここ{/link}をクリックするか、リダイレクトされるまでお待ちください…', // U+2026 (HORIZONTAL ELLIPSIS)
	'user_status' => [
		'owner' => 'サイトオーナー',
		'founder' => '創設者および元サイト所有者',
		'manager' => 'サイトマネージャー',
		'admin' => '管理者',
		'dev' => [
			'junior' => 'トレーニング中のWalrus',
			'senior' => 'Walrus中尉',
			'sysadmin' => 'システム管理者',
		],
		'leader' => [
			'forum' => 'フォーラムマネージャー',
			'discord' => 'Discordマネージャー',
			'pr' => 'PRマネージャー',
			'smwhacks' => 'SMWハックマネージャー',
			'smwgraphics' => 'SMWグラフィックマネージャー',
			'smwmusic' => 'SMW音楽マネージャー',
			'smwasm' => 'SMW ASMマネージャー',
			'sm64' => 'SM64マネージャー',
			'yi' => 'ヨッシーアイランドマネージャー',
			'documents' => '資料マネージャー',
		],
		'moderator' => [
			'forum' => 'フォーラムモデレーター',
			'discord' => 'Discordモデレーター',
			'section' => 'セクションモデレーター',
			'smwhacks' => 'SMWハックモデレーター',
			'tools' => 'ツールモデレーター',
			'smwgraphics' => 'SMWグラフィックモデレーター',
			'smwmusic' => 'SMW音楽モデレーター',
			'smwasm' => 'SMW ASMモデレーター',
			'sm64' => 'SM64モデレーター',
			'yi' => 'ヨッシーアイランドモデレーター',
			'documents' => '資料モデレーター',
		],
		'pr' => '広報',
		'helper' => [
			'forum' => 'フォーラムヘルパー',
			'pr' => 'PRヘルパー',
			'smwhacks' => 'SMWハックヘルパー',
			'smwgraphics' => 'SMWグラフィックヘルパー',
			'smwmusic' => 'SMW音楽ヘルパー',
			'smwasm' => 'SMW ASMヘルパー',
			'sm64' => 'SM64ヘルパー',
			'yi' => 'ヨッシーアイランドヘルパー',
			'documents' => '資料ヘルパー',
		],
		'system' => '人事',
		'former' => [
			'admin' => '元管理者',
			'dev' => '伝説の元Walrus',
			'legend' => 'レジェンド',
			'staff' => '伝説の元スタッフ',
		],
		'time_banned' => '{date}まで禁止',
		'banned' => '禁止',
		'disabled' => 'アカウントが無効',
	],
	'post' => [
		'history' => '投稿履歴',
		'link' => 'リンク',
		'quote' => '引用',
		'edit' => '編集',
		'delete' => '削除',
		'ip' => 'IPを検索',
		'warn' => '警告',
	],
	'recent_notice' => [
		'title' => '最近のお知らせ',
		'message' => '最近モデレータから通知が送られてきました。通知にリダイレクトされます。',
	],
	'recent_infraction' => [
		'title' => '最近の違反',
		'message' => 'あなたは最近、攻撃的な行為に対して違反行為を受けました。違反箇所​​にリダイレクトされます。',
	],
	'permission_denied' => [
		'title' => '許可は拒否されました',
		'message' => 'これを行う権限がありません。',
	],
	'server_error' => [
		'title' => 'エラー',
		'message' => '内部エラー。後でもう一度お試しください。',
	],
];
