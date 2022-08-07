<?php

return [
	'title' => 'Forneça Feedback para a Staff',
	'editor' => 'Editor',
	'body' => [
		'main' => 'Problema com a atitude de um membro da staff? Elogio para um membro da staff que trabalha duro quem você sente que é pouco valorizado? Ideias em geral para a staff? Sinta-se livre para enviar feedback. Ele será usado apenas para ajudar a melhorar o site.',
		'attitude' => 'Se houver um problema com a atitude de um membro da staff, por favor forneça exemplos pois pode ser algo que não estamos cientes sobre.',
		'response' => 'Responderemos a sua mensagem publicamente no {link}Tópico de Feedback para a Staff{/link} desde que ela se encaixe nos critérios listados na primeira postagem. Se você optar por mostrar sua identidade, talvez entremos em contato com você a respeito de seu feedback.'
	],
	'form' => [
		'subject' => 'assunto',
		'message' => 'Seu feedback',
		'reveal' => [
			'title' => 'Mostrar identidade',
			'label' => 'Mostrar minha identidade',
			'description' => 'Feedback para a staff é completamente anônimo por padrão. Entretanto, se você marcar esta opção, seu nome de usuário será anexado à mensagem, o que nos permitirá entrar em contato com você se necessário.'
		],
		'submit' => 'Enviar feedback',
		'preview' => 'Visualizar mensagem'
	],
	'success' => [
		'title' => 'Successo',
		'message' => 'Feedback enviado.'
	],
	'error' => [
		'title' => 'Erro',
		'message' => 'Ocorreu um erro interno enquanto enviavamos seu feedback. Por favor tente novamente mais tarde.'
	]
];
