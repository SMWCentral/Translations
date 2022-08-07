<?php

return [
	'global' => [
		'value' => '[0] {Theme}|[*,*] {Theme} ({count})',
		'options' => [
			'menu' => [
				'title' => 'Menu',
				'description' => 'Controla em qual lado da tela o menu lateral ficará.',
				'values' => [
					'right' => '[0] Direita|[*,*] Direita ({count})',
					'left' => '[0] Esquerda|[*,*] Esquerda ({count})'
				]
			]
		]
	],
	'legacy' => [
		'name' => 'Clássico',
		'options' => [
			'scheme' => [
				'title' => 'Tema',
				'value' => '[0] {Scheme}|[*,*] {Scheme} ({count})'
			]
		]
	],
	'smwc2' => [
		'name' => 'SMWC2',
		'options' => [
			'scheme' => [
				'title' => 'Tema',
				'values' => [
					'default' => 'Padrão',
					'original' => 'Rust',
					'classic' => 'Nostalgia de 2006'
				]
			]
		]
	]
];
