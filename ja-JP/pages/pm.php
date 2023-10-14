<?php

return [
	'title' => [
		'inbox' => 'プライベートメッセージ',
		'sentbox' => '送信済みメッセージ',
		'inbox_for' => '{username}へのプライベートメッセージ',
		'sentbox_for' => '{username}へメッセージを送信する',
		'read' => '{subject} - プライベートメッセージ',
		'compose' => 'メッセージを作成',
		'delete' => '削除を確認',
	],
	'list' => [
		'count' => [
			'inbox' => '{stats}{count}{/stats}件のPMを受信しました。{stats}{start}{/stats}–{stats}{end}{/stats}件目を表示しています。', // U+2013 (EN DASH)
			'sentbox' => '{stats}{count}{/stats}件のPMが送信されました。{stats}{start}{/stats}–{stats}{end}{/stats}件目を表示しています。.', // U+2013 (EN DASH)
		],
		'view' => [
			'line' => '表示: {received} | {sent}',
			'received' => '受信',
			'sent' => '送信済み',
		],
		'delete_selected' => '選択したPMを削除',
		'write' => 'PMを書く',
		'search' => [
			'title' => '検索',
			'too_many' => '見つかったユーザーが多すぎます。一部の結果が省略されている可能性があります。',
			'field' => '件名またはユーザー名:',
			'submit' => '検索',
		],
		'inbox' => '受信ボックス',
		'sentbox' => '送信ボックス',
		'from' => '送信ユーザー',
		'to' => '受信ユーザー',
		'time' => '日時',
		'none' => '表示するメッセージはありません。',
		'new' => '新しい',
		'unread' => '未読のPM',
		'deleted' => '[削除済み]',
	],
	'confirm_read' => [
		'title' => '読み取り確認',
		'user' => '{bold}{username}{/bold}のPMを読み取ろうとしています。すべてのスタッフ メンバーがこのアクションを見ることができます。',
		'pm' => '{bold}{sender}{/bold}から{bold}{recipient}{/bold}へのPMを読もうとしています。すべてのスタッフ メンバーがこのアクションを見ることができます。',
		'reason' => '理由: ',
		'submit' => '確認',
	],
	'read' => [
		'breadcrumbs' => [
			'inbox' => '{link}PM受信箱{/link} → {subject}', // U+2192 (RIGHTWARDS ARROW)
			'sentbox' => '{link}PM送信箱{/link} → {subject}', // U+2192 (RIGHTWARDS ARROW)
		],
		'reply' => '返信',
	],
	'compose' => [
		'editor' => 'エディター',
		'success' => [
			'title' => '完了',
			'message' => 'メッセージは正常に送信されました。',
		],
		'error' => [
			'title' => 'Error',
			'message' => 'メッセージを送信できませんでした。',
		],
	],
	'form' => [
		'recipient' => [
			'title' => '受信者', // required, string, not_found (non-standard), banned_all (non-standard), banned_staff (non-standard), rate (non-standard)
			'not_found' => '受信者が見つかりません。',
			'banned_all' => '禁止されたユーザーは PM を送信できません。',
			'banned_staff' => '禁止されたユーザーはスタッフ メンバーにのみ PM を送信できます。',
			'rate' => 'すぐに別の PM を送ることはできません。',
		],
		'subject' => '件名', // required, string, between.string
		'text' => 'メッセージ', // required, string, between.string
		'submit' => 'PMを送信する',
		'preview' => 'PMをプレビューする',
	],
	'delete' => [
		'description' => '[1] 選択したPMを削除してもよろしいですか?|[*,*] 選択された{bold}{count}{/bold}件のPMを削除してもよろしいですか?',
		'single' => 'このPMを削除してもよろしいですか?',
		'confirm' => '確認',
		'cancel' => 'キャンセル',
		'none' => [
			'title' => 'エラー',
			'message' => 'メッセージが選択されていません。',
		],
		'success' => [
			'title' => '完了',
			'message' => '[0] メッセージは削除されませんでした。|[1] メッセージは削除されました。|[*,*] {count}件のメッセージが削除されました。',
		],
	],
	'pm_not_found' => [
		'title' => 'エラー',
		'message' => 'メッセージが見つかりません。',
	],
	'user_not_found' => [
		'title' => 'エラー',
		'message' => '指定されたユーザーは存在しません。',
	],
];
