<?php

return [
	'field' => [
		'title' => '{Title}:',
	],
	'validation' => [
		'required' => '{title}は必須です。',
		'string' => '{title}は文字列である必要があります。',
		'integer' => '{title}は数字でなければなりません。',
		'float' => '{title}は数字でなければなりません。',
		'array' => '{title}には無効なデータがあります。',
		'token' => '無効なトークンです。もう一度お試しください。',
		'between' => [
			'number' => '{title}は{min}と{max}の間にある必要があります。',
			'array' => '{title}には{min}から{max}までの要素が必要です。',
			'string' => '{title}には{min}から{max}文字までを含める必要があります。',
		],
		'max' => [
			'number' => '{title}は{max}を超えることはできません。',
			'string' => '{title}は{max}文字を超えることはできません。',
			'array' => '{title}には{max}個を超える要素を含めることはできません。',
		],
		'min' => [
			'number' => '{title}は少なくとも{min}である必要があります。',
			'string' => '{title}には少なくとも{min}文字が必要です。',
			'array' => '{title}には少なくとも{min}個の要素が必要です。',
		],
		'size' => [
			'number' => '{title}は{size}である必要があります。',
			'string' => '{title}には{size}文字が必要です。',
			'array' => '{title}には{size}要素が必要です。',
		],
		'in' => '{title}は{value}の1つである必要があります。',
		'unique' => '{title}はすでに取得されています。',
		'exists' => '{title}は存在しません。',
	],
];
