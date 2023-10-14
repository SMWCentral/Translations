<?php

return [
	'global' => [
		'value' => '[0] {Theme}|[*,*] {Theme} ({count})',
		'options' => [
			'menu' => [
				'title' => 'メニュー',
				'description' => 'サイドバー メニューが画面のどちら側に表示されるかを制御します。',
				'values' => [
					'right' => '[0] 右|[*,*] 右 ({count})',
					'left' => '[0] 左|[*,*] 左 ({count})',
				],
			],
		],
	],
	'legacy' => [
		'name' => 'クラシック',
		'options' => [
			'scheme' => [
				'title' => 'スキーム',
				'value' => '[0] {Scheme}|[*,*] {Scheme} ({count})',
			],
		],
	],
	'smwc2' => [
		'name' => 'SMWC2',
		'options' => [
			'scheme' => [
				'title' => 'スキーム',
				'values' => [
					'default' => 'デフォルト',
					'original' => '錆',
					'classic' => '2006年 ノスタルジア ',
					'darkblue' => 'ダークブルー',
					'ambiance' => 'アンビアンス',
					'c3w2023' => "\u{200C}[C3] マリオパーティ",
					'rain' => '雨',
					'doomsday' => 'ドゥームズデイ',
				],
			],
		],
	],
];
