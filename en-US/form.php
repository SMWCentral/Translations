<?php

return [
	'field' => [
		'title' => '{Title}:',
	],
	'validation' => [
		'required' => 'The {title} is required.',
		'string' => 'The {title} must be a string.',
		'integer' => 'The {title} must be a number.',
		'float' => 'The {title} must be a number.',
		'array' => 'The {title} has invalid data.',
		'token' => 'Invalid token. Please try again.',
		'between' => [
			'number' => 'The {title} must be between {min} and {max}.',
			'array' => 'The {title} must have between {min} and {max} elements.',
			'string' => 'The {title} must have between {min} and {max} characters.',
		],
		'max' => [
			'number' => 'The {title} may not be greater than {max}.',
			'string' => 'The {title} may not have more than {max} characters.',
			'array' => 'The {title} may not have more than {max} elements.',
		],
		'min' => [
			'number' => 'The {title} must be at least {min}.',
			'string' => 'The {title} must have at least {min} characters.',
			'array' => 'The {title} must have at least {min} elements.',
		],
		'size' => [
			'number' => 'The {title} must be {size}.',
			'string' => 'The {title} must have {size} characters.',
			'array' => 'The {title} must have {size} elements.',
		],
		'in' => 'The {title} must be one of {values}.',
		'unique' => 'The {title} has already been taken.',
		'exists' => 'The {title} does not exist.',
	],
];
