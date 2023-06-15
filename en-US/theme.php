<?php

return [
	'global' => [
		'value' => '[0] {Theme}|[*,*] {Theme} ({count})',
		'options' => [
			'menu' => [
				'title' => 'Menu',
				'description' => 'Controls which side of the screen the sidebar menu will be on.',
				'values' => [
					'right' => '[0] Right|[*,*] Right ({count})',
					'left' => '[0] Left|[*,*] Left ({count})'
				]
			]
		]
	],
	'legacy' => [
		'name' => 'Classic',
		'options' => [
			'scheme' => [
				'title' => 'Scheme',
				'value' => '[0] {Scheme}|[*,*] {Scheme} ({count})'
			]
		]
	],
	'smwc2' => [
		'name' => 'SMWC2',
		'options' => [
			'scheme' => [
				'title' => 'Scheme',
				'values' => [
					'default' => 'Default',
					'original' => 'Rust',
					'classic' => '2006 Nostalgia',
					'darkblue' => 'Dark Blue',
					'ambiance' => 'Ambiance',
					'c3w2023' => "\u{200C}[C3] Mario Party"
				]
			]
		]
	]
];
