<?php

return [
	'title' => [
		'notice' => '{username}に通知を送ります',
		'warn' => '{username}に警告を出します。',
		'ban' => '{username}を禁止します',
		'forumBan' => '{username}のフォーラムへの投稿を禁止します。',
		'sectionBan' => '{username}のセクションへの投稿を禁止します。',
		'nuke' => '{username}プロファイルデータを消す',
		'disable' => '{username}を無効にする',
	],
	'form' => [
		'editor' => '違反',
		'user' => 'ユーザー',
		'content' => 'コンテンツ',
		'preset' => 'プリセット',
		'summary' => [
			'title' => '概要',
			'description' => '簡単な違反の理由。 {bold}パブリック{/bold}。',
			'notice' => '通知のトピック。ユーザーに表示されます。',
		],
		'message' => [
			'title' => 'メッセージ',
			'description' => 'ユーザーに表示されます。',
		],
		'notes' => [
			'title' => 'メモ',
			'description' => 'オプションです。スタッフメンバーのみに表示されます。',
		],
		'action' => [
			'ban' => [
				'ban' => '禁止',
				'privileges' => '特権を取り消す',
				'duration' => [
					'title' => '期間',
					'description' => '[0]|[1]禁止期間は最長1日です。|[*,*]禁止期間は最長{count}日間です。',
					'days' => '日',
					'hours' => '時間',
				],
				'forums' => [
					'title' => 'フォーラム',
					'description' => '読み取り専用になります',
				],
				'filebin' => 'ファイルビン',
				'edit_profile' => 'プロフィールの編集',
				'pms' => [
					'title' => 'PM',
					'options' => [
						'none' => '無効にしない',
						'non-staff' => 'スタッフメンバー以外への送信を無効にする',
						'all' => '送信を完全に無効にする',
					],
				],
				'section_submit' => 'ファイルを送信(セクション)',
				'section_comment' => 'コメントを投稿(セクション)',
				'tweaks' => '微調整を送信',
				'addresses' => 'メモリアドレスを送信',
				'vote' => [
					'title' => '投票',
					'description' => 'C3とモスト',
				],
			],
			'forumBan' => [
				'title' => 'フォーラム',
				'description' => '違反により無効にできるのは 1 つのフォーラムのみです。',
				'choose' => '選択',
			],
			'sectionBan' => [
				'title' => 'セクション',
				'all' => 'すべてを禁止しますか?',
				'sections' => 'セクション',
			],
			'nuke' => [
				'nuke' => 'Nuke フィールド',
				'username' => 'ユーザーネーム',
				'display_name' => '表示名',
				'title' => 'タイトル',
				'avatar' => 'アバター',
				'location' => '場所',
				'email' => [
					'title' => 'Eメール',
					'description' => '管理者のみに公開されます。',
				],
				'discord_tag' => 'Discordタグ',
				'contact' => 'その他の連絡先',
				'bio' => 'Bio',
				'layout' => 'レイアウト',
			],
			'disable' => [
				'disable' => '無効にする',
				'ipban' => 'このIPアドレスを禁止しますか?',
				'ip' => [
					'title' => 'IPアドレス',
					'description' => 'デフォルトはユーザーの最後のIPです。',
				],
				'level' => [
					'title' => 'レベル',
					'options' => [
						'register' => '1 - 登録できません',
						'login' => '2 - ログインできません',
						'access' => '3 - サイトにアクセスできません',
					],
				],
				'reason' => '理由',
			],
		],
		'submit' => '続行',
		'action_forum' => [
			'not_found' => 'フォーラムが見つかりません。',
		],
	],
	'review' => [
		'line_1' => '{username}に対して次の違反行為を行おうとしています。ユーザーの記録にエントリが追加され、次回サイトにアクセスしたときに違反箇所にリダイレクトされます。',
		'no_content' => 'この違反に関してコンテンツは指定されていません。問題のあるコンテンツが利用可能な場合は、コンテンツから発行して違反にリンクする必要があります。',
		'line_2' => 'すべての情報は正しいですか? 違反を発行した後は編集できなくなります。',
		'notice' => [
			'line_1' => '次の通知を{username}に送信しようとしています。ユーザーは次回サイトにアクセスしたときに通知にリダイレクトされます。',
			'line_2' => 'すべての情報は正しいですか? 送信後に通知を編集することはできません。',
		],
		'field' => [
			'user' => 'ユーザー:',
			'content' => 'コンテンツ:',
			'summary' => '概要:',
			'message' => 'メッセージ:',
			'notes' => 'メモ:',
			'date' => '日付:',
			'issuer' => '発行者:',
		],
		'action' => [
			'confirm' => '確認',
			'back' => '戻る',
		],
		'empty' => '{italic}N/A{/italic}',
	],
	'new_tab' => '新しいタブで開きます',
	'user_not_found' => [
		'title' => 'エラー',
		'message' => '指定されたユーザーは存在しません。',
	],
	'invalid_action' => [
		'title' => 'エラー',
		'message' => '無効な罰則のタイプです。',
	],
	'success' => [
		'title' => '完了',
		'message' => '違反が発行されました。',
	],
];
