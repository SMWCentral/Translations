<?php

return [
	'title' => '{file} - {Section}',
	'age_gate' => 'Este arquivo pode conter conteúdo não adequado para menores de idade.',
	'breadcrumbs' => [
		'moderated' => '{link}{section}{/link} → {file}', // U+2192 (RIGHTWARDS ARROW)
		'waiting' => '{link}Em espera {section}{/link} → {file}', // U+2192 (RIGHTWARDS ARROW)
	],
	'action' => [
		'submit_update' => 'Submeter Atualização',
		'edit' => 'Editar',
		'delete' => 'Excluir',
		'claim' => 'Reivindicar',
		'free' => 'Liberar',
		'approve' => 'Aprovar',
		'reject' => 'Rejeitar',
		'watch' => 'Observar',
		'unwatch' => 'Desobservar',
		'random' => 'Mostrar aleatório',
		'link' => 'Link',
	],
	'obsolete' => 'Este arquivo é obsoleto. Sua última versão é {latest_link}{latest}{/link}. Para outras versões, confira o {history_link}histórico de versões{/link}.',
	'content' => [
		'warning' => 'Este arquivo contém {warnings}. Discrição é aconselhada.',
		'suggestive_dialogue' => 'diálogo sugestivo',
		'crude_language' => 'linguagem profana',
		'sexual_content' => 'conteúdo sexual',
		'violence' => 'violência',
		'epilepsy' => 'conteúdo (como imagens piscantes) que pode ser prejudicial para pessoas com epilepsia fotossensível ou condições semelhantes',
	],
	'details' => 'Detalhes da Submissão',
	'field' => [
		'name' => 'Nome:',
		'authors' => 'Autor:|Autores:',
		'added' => 'Adicionado:',
		'history' => [
			'name' => 'Histórico de Versões:',
			'view' => 'Ver',
		],
		'submitted' => [
			'name' => 'Submetido:',
			'content' => '{date} por {user}',
		],
		'obsoletes' => 'Obsoletos:',
		'submission_notes' => 'Notas da Submissão:',
		'preview' => 'Visualização:',
		'tags' => [
			'name' => 'Marcadores:',
			'view_all' => 'Ver todas as submissões com este marcador',
		],
		'comments' => [
			'name' => 'Comentários:',
			'jump' => '(pular para comentários)',
		],
		'rating' => [
			'name' => 'Avaliação:',
			'count' => '(1 avaliação)|({count} avaliações)',
			'none' => 'Sem avaliações',
		],
		'claimed' => 'Reivindicado para moderação por {user} em {date}',
	],
	'download' => [
		'button' => 'Download',
		'info' => '{size} | {downloads}',
		'count' => '1 download|{count} downloads',
	],
	'rate' => [
		'name' => 'Avaliar:',
		'star' => 'Avaliar {count}',
	],
	'images' => [
		'title' => 'Capturas de Tela',
		'view_all' => 'Ver todas',
	],
	'comments' => [
		'title' => '[0] Comentários|[*,*]Comentários ({count})',
		'form' => [
			'textarea' => 'Poste um comentário',
			'submit' => 'Postar',
		],
		'avatar' => 'Avatar',
		'link' => 'Link',
		'quote' => 'Mencionar',
		'edit' => 'Editar',
		'delete' => 'Excluir',
	],
	'not_found' => [
		'title' => 'Erro',
		'message' => 'Arquivo não encontrado.',
	],
];
