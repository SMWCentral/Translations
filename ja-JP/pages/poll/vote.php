<?php

return [
	'title' => '投票',
	'success' => [
		'title' => '完了',
		'message' => 'あなたの投票が送信されました。',
	],
	'not_found' => [
		'title' => 'エラー',
		'message' => '要求されたアンケートは存在しないか、投票する権限がありません。',
	],
	'too_few' => [
		'title' => 'エラー',
		'message' => '少なくとも 1 つのオプションを選択する必要があります。',
	],
	'too_many' => [
		'title' => 'エラー',
		'message' => '複数のオプションを選択することはできません。|{count}個より多くオプションを選択することはできません。',
	],
	'error' => [
		'title' => 'エラー',
		'message' => '不明なエラー ({code})。',
	],
	'bad_token' => [
		'title' => 'エラー',
		'message' => '不正なトークン。',
	],
];
