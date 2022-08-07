<?php

return [
	'title' => [
		'inbox' => 'Mensagens Privadas',
		'sentbox' => 'Mensagens Enviadas',
		'inbox_for' => 'Mensagens Privadas de {username}',
		'sentbox_for' => 'Mensagens Enviadas de {username}',
		'read' => '{subject} - Mensagens Privadas',
		'compose' => 'Compor Mensagem',
		'delete' => 'Confirmar Exclusão'
	],
	'list' => [
		'count' => [
			'inbox' => '{stats}{count}{/stats} MPs recebidas. Mostrando {stats}{start}{/stats}–{stats}{end}{/stats}.', // U+2013 (EN DASH)
			'sentbox' => '{stats}{count}{/stats} MPs enviadas. Mostrando {stats}{start}{/stats}–{stats}{end}{/stats}.' // U+2013 (EN DASH)
		],
		'view' => [
			'line' => 'Ver: {received} | {sent}',
			'received' => 'recebidas',
			'sent' => 'enviadas'
		],
		'delete_selected' => 'Excluir MPs selecionadas',
		'write' => 'Escrever uma MP',
		'search' => [
			'title' => 'Pesquisar',
			'too_many' => 'Muitos usuários encontrados; alguns resultados podem ter sido omitidos.',
			'field' => 'Assunto ou nome de usuário:',
			'submit' => 'Pesquisar'
		],
		'inbox' => 'Caixa de Entrada',
		'sentbox' => 'Enviadas',
		'from' => 'De',
		'to' => 'Para',
		'time' => 'Horário',
		'none' => 'No messages to display.',
		'new' => 'NOVA',
		'unread' => 'Mensagem Não Lida',
		'deleted' => '[Excluída]'
	],
	'confirm_read' => [
		'title' => 'Confirmar Leitura',
		'user' => "Você está prestes a ler as MPs de {bold}{username}{/bold}. Todos os membros da staff poderão ver esta ação.",
		'pm' => 'Você está prestes a ler a MP de {bold}{sender}{/bold} para {bold}{recipient}{/bold}. Todos os membros da staff poderão ver esta ação.',
		'reason' => 'Motivo: ',
		'submit' => 'Confirmar'
	],
	'read' => [
		'breadcrumbs' => [
			'inbox' => '{link}Caixa de entrada de MP{/link} → {subject}', // U+2192 (RIGHTWARDS ARROW)
			'sentbox' => '{link}Caixa de saída de MP{/link} → {subject}' // U+2192 (RIGHTWARDS ARROW)
		],
		'reply' => 'Responder'
	],
	'compose' => [
		'editor' => 'Editor',
		'success' => [
			'title' => 'Successo',
			'message' => 'Mensagem enviada com sucesso.'
		],
		'error' => [
			'title' => 'Erro',
			'message' => "Não foi possível enviar a mensagem."
		]
	],
	'form' => [
		'recipient' => [
			'title' => 'destinatário', // required, string, not_found (non-standard), banned (non-standard)
			'not_found' => 'Destinatário não encontrado.',
			'banned' => 'Usuáios banidos só podem mandar MPs para membros da staff.'
		],
		'subject' => 'assunto', // required, string, between.string
		'text' => 'mensagem', // required, string, between.string
		'submit' => 'Enviar MP',
		'preview' => 'Visualizar MP'
	],
	'delete' => [
		'description' => '[1] Você tem certeza de que quer excluir a MP selecionada?|[*,*] Você tem certeza de que quer excluir as {bold}{count}{/bold} MPs selecionadas?',
		'single' => 'Are you sure you want to delete this PM?',
		'confirm' => 'Confirmar',
		'cancel' => 'Cancelar',
		'none' => [
			'title' => 'Erro',
			'message' => 'Nenhuma mensagem selecionada.'
		],
		'success' => [
			'title' => 'Successo',
			'message' => '[0] Nenhuma mensagem excluída.|[1] Mensagem excluída.|[*,*] {count} mensagens excluídas.'
		]
	],
	'pm_not_found' => [
		'title' => 'Erro',
		'message' => 'Mensagem não encontrada.'
	],
	'user_not_found' => [
		'title' => 'Erro',
		'message' => 'O usuário especificado não existe.'
	]
];
