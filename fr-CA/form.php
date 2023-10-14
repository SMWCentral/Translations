<?php

return [					// i'm not sure where these strings appear on the site, so I couldn't adapt as well, but depending on what Title is, All the "le" might have to become "la"?
	'field' => [
		'title' => '{Title}:',
	],
	'validation' => [
		'required' => 'Le {title} est requis.',
		'string' => 'Le {title} doit être une chaîne de caractères (string).', // considering changing "chaîne de caractères" (Official way to way "string" in French to "texte alphanumérique" (alphanumeric text) or something of the sort because I've never heard anyone say the former.
		'integer' => 'Le {title} doit être un nombre.',
		'float' => 'Le {title} doit être un nombre.',
		'array' => 'Le {title} contient des données non valides.',
		'token' => 'Jeton non valide. Veuillez réessayer s\'il vous plaît.',
		'between' => [
			'number' => 'Le {title} doit être entre {min} et {max}.',
			'array' => 'Le {title} doit contenir entre {min} et {max} éléments.',
			'string' => 'Le {title} doit avoir entre {min} et {max} caractères.',
		],
		'max' => [
			'number' => 'Le {title} ne peut pas être plus grand que {max}.',
			'string' => 'Le {title} ne peut pas avoir plus de {max} caractères.',
			'array' => 'Le {title} ne peut pas contenir plus de {max} éléments.',
		],
		'min' => [
			'number' => 'Le {title} doit être au moins {min}.',
			'string' => 'Le {title} doit avoir au moins {min} caractères.',
			'array' => 'Le {title} doit contenir au moins {min} éléments.',
		],
		'size' => [
			'number' => 'Le {title} doit être {size}.',
			'string' => 'Le {title} doit avoir {size} caractères.',
			'array' => 'Le {title} doit contenir {size} éléments.',
		],
		'in' => 'Le {title} doit être un des {values}.', // unsure about the translation here
		'unique' => 'Le {title} existe déjà.',
		'exists' => 'Le {title} n\'existe pas.',
	],
];
