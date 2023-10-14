<?php

return [
	'action' => [
		'punishment' => '罰則:',
		'notice' => [
			'name' => 'お知らせ',
		],
		'warn' => [
			'name' => '警告',
		],
		'ban' => [
			'name' => '一時的に禁止',
			'field' => [
				'duration' => '期間:',
				'revoke' => '特権を取り消します:',
			],
			'expires' => '{datetime}に期限切れになります',
			'privilege' => [
				'none' => 'なし',
				'forums' => 'フォーラムへの投稿',
				'filebin' => 'ファイルビン',
				'edit_profile' => 'プロフィールの編集',
				'pms' => [
					'non-staff' => '非スタッフへのPMの送信',
					'all' => 'PMの送信',
				],
				'section_submit' => 'セクションにファイルを送信',
				'section_comment' => 'セクションにコメントを投稿',
				'tweaks' => '微調整の送信',
				'addresses' => 'メモリアドレスの送信',
				'vote' => '投票(C3とモスト)',
			],
		],
		'forumBan' => [
			'name' => 'フォーラム禁止',
			'field' => [
				'forum' => 'フォーラム:',
			],
			'restricted' => '(制限付き)',
		],
		'sectionBan' => [
			'name' => 'セクション禁止',
			'field' => [
				'sections' => 'セクション:',
			],
			'none' => 'なし',
			'all' => '全て',
		],
		'nuke' => [
			'name' => 'プロフィールコンテンツが削除されました',
			'field' => [
				'fields' => 'フィールド:',
			],
			'fields' => [
				'none' => 'なし',
				'username' => 'ユーザー名',
				'display_name' => '表示名',
				'title' => 'タイトル',
				'avatar' => 'アバター',
				'location' => '場所',
				'email' => 'Eメール',
				'discord_tag' => 'Discordタグ',
				'contact' => 'その他の連絡先詳細',
				'bio' => 'Bio',
				'layout' => 'レイアウト',
			],
		],
		'disable' => [
			'name' => 'アカウントが無効',
			'revoked' => 'アカウントの禁止を解除',
			'field' => [
				'ipban' => 'IP禁止:',
			],
			'no_ipban' => 'いいえ',
			'with_ipban' => 'はい',
			'with_ipban_admin' => '{bold}{level}{/bold}のレベル{bold}{ip}{/bold} ({bold}{reason}{/bold})',
		],
	],
	'content' => [
		'empty' => [
			'blurb' => 'なし',
		],
		'post' => [
			'blurb' => '投稿{post} ({forum})',
			'blurb_restricted' => '投稿(制限付き)',
		],
	],
];
