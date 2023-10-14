<?php

return [
	'field' => [
		'title' => '{Title}:',
	],
	'validation' => [
		'required' => 'O {title} é obrigatório.',
		'string' => 'O {title} deve ser uma string.',
		'integer' => 'O {title} precisa ser um número.',
		'float' => 'O {title} precisa ser um número.',
		'array' => 'O {title} tem dados inválidos.',
		'token' => 'Token inválido. Por favor tente novamente.',
		'between' => [
			'number' => 'O {title} deve estar entre {min} e {max}.',
			'array' => 'O {title} deve conter elementos entre {min} e {max}.',
			'string' => 'O {title} deve conter caracteres entre {min} e {max}.',
		],
		'max' => [
			'number' => 'O {title} não pode ser maior que {max}.',
			'string' => 'O {title} não pode ter mais que {max} caracteres.',
			'array' => 'O {title} não pode ter mais que {max} elementos.',
		],
		'min' => [
			'number' => 'O {title} deve ser pelo menos {min}.',
			'string' => 'O {title} deve conter no mínimo {min} caracteres.',
			'array' => 'O {title} deve conter no mínimo {min} elementos.',
		],
		'size' => [
			'number' => 'O {title} deve ser {size}.',
			'string' => 'O {title} deve conter {size} caracteres.',
			'array' => 'O {title} deve conter {size} elementos.',
		],
		'in' => 'O {title} deve ser um dos {values}.',
		'unique' => 'O {title} já foi obtido.',
		'exists' => 'O {title} não existe.',
	],
];
