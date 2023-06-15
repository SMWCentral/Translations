<?php

return [
	'global' => [
		'value' => '[0] {Theme}|[*,*] {Theme} ({count})',
		'options' => [
			'menu' => [
				'title' => 'Menu',
				'description' => 'Contrôle sur quel bord de l\'écran le menu se situera.',
				'values' => [
					'right' => '[0] Droite|[*,*] Droite ({count})',
					'left' => '[0] Gauche|[*,*] Gauche ({count})'
				]
			]
		]
	],
	'legacy' => [
		'name' => 'Classique',
		'options' => [
			'scheme' => [
				'title' => 'Modèle',
				'value' => '[0] {Scheme}|[*,*] {Scheme} ({count})'
			]
		]
	],
	'smwc2' => [
		'name' => 'SMWC2',
		'options' => [
			'scheme' => [
				'title' => 'Modèle',
				'values' => [
					'default' => 'Défaut',
					'original' => 'Rouille',
					'classic' => 'Nostalgie 2006',
					'darkblue' => 'Bleu foncé',
					'c3w2023' => "\u{200C}[C3] Mario Party"
				]
			]
		]
	]
];
