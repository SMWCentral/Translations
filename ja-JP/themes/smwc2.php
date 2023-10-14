<?php

return [
	'user_bar' => [
		'login' => 'ログイン',
		'register' => '登録',
		'profile' => 'プロフィール',
		'files' => '私のファイル',
		'editprofile' => 'プロフィールを編集',
		'logout' => 'ログアウト',
		'pm' => '[0] PM|[*,*] PM {new}未読{count}件{/new}',
		'notifications' => '[0] Notifications|[*,*] Notifications {new}未読{count}件{/new}',
		'staffpanel' => 'スタッフパネル',
		'search' => '検索', // U+2026 (HORIZONTAL ELLIPSIS)
		'go' => '検索',
		'language' => '言語', // U+2026 (HORIZONTAL ELLIPSIS)
	],
	'menu' => [
		'title' => 'メニュー',
		'site' => [
			'name' => 'SMW Central',
			'main' => 'メインページ',
			'news' => 'ニュース',
			'forums' => 'フォーラム',
			'member_list' => 'メンバーリスト',
			'rules' => 'ルール',
			'beginners' => '初心者向けガイド',
			'discord' => 'Discord',
			'staff' => 'スタッフ',
			'links' => 'リンク',
		],
		'smw' => [
			'name' => 'スーパーマリオワールド',
			'hacks' => 'ハック',
			'sram' => 'セーブベース',
			'faq' => 'よくある質問',
			'tutorials' => 'チュートリアル',
			'tools' => 'ツール',
			'graphics' => 'グラフィック',
			'music' => '音楽',
			'brrsamples' => 'BRRサンプル',
			'blocks' => 'ブロック',
			'sprites' => 'スプライト',
			'tweaks' => '微調整',
			'patches' => 'パッチ',
			'uberasm' => 'UberASM',
			'online_tools' => 'オンラインツール',
			'documents' => '資料',
			'rom_map' => 'ROMマップ',
			'ram_map' => 'RAMマップ',
			'hijack_map' => 'ハイジャックマップ',
		],
		'yi' => [
			'name' => 'ヨッシーアイランド',
			'hacks' => 'ハック',
			'sram' => 'セーブベース',
			'faq' => 'よくある質問',
			'tutorials' => 'チュートリアル',
			'tools' => 'ツール',
			'music' => '音楽',
			'patches' => 'パッチ',
			'spasm' => 'SPASM',
			'documents' => '資料',
			'rom_map' => 'ROMマップ',
			'ram_map' => 'RAMマップ',
			'sram_map' => 'SRAMマップ',
		],
		'sm64' => [
			'name' => 'スーパーマリオ64',
			'hacks' => 'ハック',
			'sram' => 'セーブベース',
			'faq' => 'よくある質問',
			'tutorials' => 'チュートリアル',
			'tools' => 'ツール',
			'music' => '音楽',
			'textures' => 'テクスチャ',
			'documents' => '資料',
			'rom_map' => 'ROMマップ',
			'ram_map' => 'RAMマップ',
		],
		'unread' => "[1] \u{A0}- {new}未読{/new}|[*,*] \u{A0}- {new}未読{count}件{/new}", // \u{A0} is U+00A0 (NO-BREAK SPACE)
	],
	'header' => [
		'users' => 'ユーザー数: {stats}{count}{/stats}人',
		'active_users' => '(アクティブなユーザー:{count}人)',
		'latest_user' => '最新のユーザー: {user}',
		'latest_user_hidden' => '最新のユーザーを表示',
	],
	'footer' => [
		'page_views' => '表示回数: {stats}{count}{/stats}回',
		'legal_information' => '法的情報',
		'privacy_policy' => 'プライバシーポリシー',
		'staff_comment' => 'スタッフへのフィードバックの提供',
		'affiliates' => 'アフィリエント (関連リンク)',
		'oss' => 'ソースを開く',
		'queries' => 'クエリ: ~ {stats}{count}{/stats}',
		'generate_sql_report' => 'SQLレポートを生成',
		'sql_report' => 'SQLレポート',
	],
	'online_user_list' => [
		'online' => '{stats}{count}{/stats}名のユーザーがオンライン:|{stats}{count}{/stats}名のユーザーがオンライン:',
		'hidden' => '{stats}{count}{/stats}名のユーザーがオンライン({stats}{hidden}{/stats}名を非表示):|{stats}{count}{/stats}名のユーザーがオンライン({stats}{hidden}{/stats}名を非表示):',
		'user_separator' => ', ',
		'guests' => 'ゲスト: {stats}{count}{/stats}名',
		'stat_separator' => ' - ',
		'bots' => 'ボット: {stats}{count}{/stats}名',
	],
	'pagination' => [
		'title' => 'ページ:',
		'range' => '{start}–{end}', // U+2013 (EN DASH)
		'asc' => '昇順',
		'desc' => '降順',
	],
	'post' => [
		'info' => [
			'generic' => '投稿日:{datetime}',
			'thread' => '{datetime}に{thread}に投稿',
			'recipient' => '{datetime}に{username}に送信',
		],
		'unread' => '未読',
		'separator' => [
			'info' => ' - ',
			'menu' => ' | ',
		],
		'edited' => '最終編集日:{datetime},作成者:{username}',
	],
	'post_sidebar' => [
		'last_seen' => [
			'online' => 'オンライン',
			'never' => 'オフライン',
		],
		'avatar' => 'Avatar',
		'info' => [
			'total_posts' => '投稿数:{stats}{count}{/stats}',
			'posts' => '投稿:{stats}{count}/{total}{/stats}',
			'since' => '登録日時: {stats}{datetime}{/stats}',
			'from' => '出身地: {stats}{location}{/stats}',
			'pronouns' => '代名詞: {stats}{pronouns}{/stats}',
			'last_seen' => '最後のオンライン: {stats}{time}{/stats}',
			'last_warning' => '最後の違反: {link}{time}{/link}',
		],
	],
	'qp_menu' => [
		'title' => '罰則',
		'notice' => '通知',
		'warn' => '警告',
		'ban' => '一時的な禁止',
		'forumBan' => 'フォーラム禁止',
		'sectionBan' => 'セクション禁止',
		'disable' => '無効にする',
		'nuke' => 'プロファイルデータを消す',
		'kamikaze' => 'かみかぜ',
	],
	'secondary_menu' => [
		'toggle' => 'メニューをトグル',
	],
	'form' => [
		'horizontal' => [
			'title' => '{Title}',
			'description' => '{Description}',
		],
		'vertical' => [
			'title' => '{Title}: ',
			'label' => '{Title}',
		],
	],
];