<?php

return [
	'section' => [
		'smwhacks' => 'Hacks de Super Mario World',
		'sm64hacks' => 'Hacks de Super Mario 64',
		'sm64music' => 'Música para SM64',
		'sm64textures' => 'Texturas para SM64',
		'smwsprites' => 'Sprites para SMW',
		'smwgraphics' => 'Gráficos para SMW',
		'yihacks' => 'Hacks de Yoshi\'s Island',
		'smwblocks' => 'Blocos para SMW',
		'smwpatches' => 'Patches para SMW',
		'tools' => 'Ferramentas',
		'documents' => 'Documentos',
		'smwmusic' => 'Música para SMW',
		'sramdatabase' => 'SRAM Database',
		'brrsamples' => 'Samples para BRR',
		'yipatches' => 'Patches para YI',
		'uberasm' => 'Repositório de UberASM',
		'yimusic' => 'Música para YI',
		'spasm' => 'Repositório de SPASM'
	],
	'field' => [
		'common' => [
			'name' => 'nome',
			'author' => [
				'name' => 'autor',
				'description' => 'Até 5, separado por vírgula.'
			],
			'tags' => [
				'name' => 'marcadores',
				'description' => 'Até 5, separado por vírgula. Prefix a tag with + to require multiple (+space,+planet). Prefix with - to exclude (-planet).'
			]
		],
		'smwhacks' => [
			'demo' => 'Demonstração',
			'featured' => [
				'name' => 'Em Destaque',
				'description' => 'Controla o status de destaque da hack.'
			],
			'length' => [
				'name' => 'Duração',
				'description' => 'Número de saídas de fase (level exits) na hack.'
			],
			'difficulty' => [
				'name' => 'Tipo',
				'options' => [
					'easy' => 'Padrão: Fácil',
					'normal' => 'Padrão: Normal',
					'hard' => 'Padrão: Difícil',
					'very_hard' => 'Padrão: Muito Difícil',
					'kaizo_light' => 'Kaizo: Leve',
					'kaizo_hard' => 'Kaizo: Difícil',
					'pit' => 'Kaizo: Pit',
					'troll' => 'Misc.: Troll'
				]
			],
			'description' => 'Descrição'
		],
		'sm64hacks' => [
			'difficulty' => [
				'name' => 'Dificuldade',
				'options' => [
					'easy' => 'Fácil',
					'intermediate' => 'Intermediária',
					'hard' => 'Difícil',
					'kaizo' => 'Kaizo'
				]
			],
			'demo' => 'Demonstração',
			'length' => [
				'name' => 'Duração',
				'description' => 'Número de estrelas na hack.'
			],
			'description' => 'Descrição',
			'video' => 'Link para Vídeo'
		],
		'sm64music' => [
			'nlist' => [
				'name' => 'Nlist',
				'options' => [
					'nlst_0' => 'NLST 0 (SFX)',
					'nlst_1' => 'NLST 1 (SFX, Footsteps)',
					'nlst_2' => 'NLST 2 (SFX, Water)',
					'nlst_3' => 'NLST 3 (SFX, Sand?)',
					'nlst_4' => 'NLST 4 (SFX)',
					'nlst_5' => 'NLST 5 (SFX)',
					'nlst_6' => 'NLST 6 (SFX)',
					'nlst_7' => 'NLST 7 (SFX, misc)',
					'nlst_8' => 'NLST 8 ("Mario\'s" NLST)',
					'nlst_9' => 'NLST 9 (SFX)',
					'nlst_10' => 'NLST 10 (SFX, Voices)',
					'nlst_11' => 'NLST 11 (Snow)',
					'nlst_12' => 'NLST 12 (Unused)',
					'nlst_13' => 'NLST 13 (Koopa the Quick, Slide Levels)',
					'nlst_14' => 'NLST 14 (Inside Castle Walls)',
					'nlst_15' => 'NLST 15 (Shifting Sand Land/Lethal Lava Land)',
					'nlst_16' => 'NLST 16 (Haunted House)',
					'nlst_17' => 'NLST 17 (Title Screen)',
					'nlst_18' => 'NLST 18 (Bowser Battle)',
					'nlst_19' => 'NLST 19 (Jolly Roger Bay/Dire Dire Docks)',
					'nlst_20' => 'NLST 20 (Piranha Plant\'s Sleeping Melody)',
					'nlst_21' => 'NLST 21 (Hazy Maze Cave)',
					'nlst_22' => 'NLST 22 (Star Select)',
					'nlst_23' => 'NLST 23 (Wing Cap)',
					'nlst_24' => 'NLST 24 (Metal Cap)',
					'nlst_25' => 'NLST 25 (Bowser Course)',
					'nlst_26' => 'NLST 26 (Fanfares)',
					'nlst_27' => 'NLST 27 (Boss Fight)',
					'nlst_28' => 'NLST 28 (Looping Stairs)',
					'nlst_29' => 'NLST 29 (Final Bowser Battle)',
					'nlst_30' => 'NLST 30 (Peach Message)',
					'nlst_31' => 'NLST 31 (Star Appears)',
					'nlst_32' => 'NLST 32 (Toad)',
					'nlst_33' => 'NLST 33 (Ghost Merry-Go-Round)',
					'nlst_34' => 'NLST 34 (Bob-Omb Battlefield)',
					'nlst_35' => 'NLST 35 (Ending)',
					'nlst_36' => 'NLST 36 (File Select)',
					'nlst_37' => 'NLST 37 (Credits)'
				]
			],
			'description' => 'Descrição'
		],
		'sm64textures' => [
			'type' => [
				'name' => 'Tipo',
				'options' => [
					'original' => 'Original',
					'ripped' => 'Ripada'
				]
			],
			'amount' => [
				'name' => 'Número de Texturas',
				'description' => 'Quantidade de texturas no pacote.'
			],
			'description' => 'Descrição'
		],
		'smwsprites' => [
			'tool' => [
				'name' => 'Ferramenta',
				'description' => 'Qual ferramenta é necessária para inserir este sprite?',
				'options' => [
					'pixi' => 'PIXI',
					'giepy' => 'GIEPY',
					'romis_spritetool' => 'Romi\'s Spritetool',
					'overworld_spritetool' => 'Overworld Spritetool',
					'other' => 'Outra'
				]
			],
			'type' => [
				'name' => 'Tipo',
				'description' => 'Que tipo de sprite é este?',
				'options' => [
					'standard' => 'Padrão (Standard)',
					'shooter' => 'Atirador (Shooter)',
					'generator' => 'Gerador (Generator)',
					'overworld' => 'Mapa (Overworld)',
					'cluster' => 'Cluster',
					'extended' => 'Extendido (Extended)',
					'run-once' => 'Execução Única (Run-Once)',
					'other' => 'Outro'
				]
			],
			'dynamic' => [
				'name' => 'Dinâmico',
				'list' => 'Din.',
				'description' => 'Este é um sprite dinâmico?'
			],
			'disassembly' => [
				'name' => 'Disassembly',
				'list' => 'Dis.',
				'description' => 'Este sprite é um disassembly (desmontado)?'
			],
			'includesgfx' => [
				'name' => 'Gráficos Inclusos',
				'list' => 'GFX',
				'description' => 'Quando aplicável, esta submissão de sprite inclui gráficos?'
			],
			'description' => [
				'name' => 'Descrição',
				'description' => 'A descrição deve incluir detalhes como notas de uso, registro de alterações, bugs conhecidos, se blocos necessários para uso estão inclusos, ou planos futuros.'
			]
		],
		'smwgraphics' => [
			'type' => [
				'name' => 'Tipo',
				'options' => [
					'original' => 'Original',
					'ripped' => 'Ripado'
				]
			],
			'purpose' => [
				'name' => 'Função',
				'options' => [
					'background' => 'Fundo (Background)',
					'foreground' => 'Primeiro Plano (Foreground)',
					'sprite' => 'Sprite',
					'player' => 'Jogador (Player)',
					'layer_3' => 'Layer 3',
					'overworld' => 'Mapa (Overworld)',
					'font' => 'Fonte',
					'miscellaneous' => 'Diversos',
					'graphics_hack' => 'Hack de Gráficos'
				]
			],
			'description' => 'Descrição'
		],
		'yihacks' => [
			'demo' => 'Demonstração',
			'length' => [
				'name' => 'Duração',
				'description' => 'Número de fases na hack.'
			],
			'description' => 'Descrição'
		],
		'smwblocks' => [
			'actas' => [
				'name' => 'Comportamento (Act As)',
				'description' => 'Como este bloco deve se comportar?'
			],
			'includesgfx' => [
				'name' => 'Gráficos Inclusos',
				'list' => 'GFX',
				'description' => 'Quando aplicável, esta submissão de bloco inclui gráficos?'
			],
			'description' => [
				'name' => 'Descrição',
				'description' => 'Escreva uma descrição do seu bloco que será vista na página do arquivo. Inclua detalhes como notas de uso, registro de alterações, bugs conhecidos, se patches ou sprites necessários para uso estão inclusos, ou planos futuros.'
			]
		],
		'smwpatches' => [
			'tool' => [
				'name' => 'Ferramenta',
				'description' => 'Qual ferramenta é necessária para inserir este patch?',
				'options' => [
					'xkas' => 'xkas',
					'asar' => 'Asar',
					'both' => 'Asar ou xkas'
				]
			],
			'freespace' => [
				'name' => 'Requer Espaço Livre',
				'list' => 'FS',
				'description' => 'Este patch requer espaço livre?'
			],
			'bugfix' => [
				'name' => 'Bug Fix',
				'list' => 'Fix',
				'description' => 'Este patch conserta bugs do Super Mario World original?'
			],
			'featured' => [
				'name' => 'Em Destaque',
				'description' => 'Este é um patch amplamente conhecido ou útil que deve ficar em destaque?',
				'options' => [
					'no' => 'Não',
					'yes' => 'Sim',
					'essential' => 'Essencial'
				]
			],
			'description' => [
				'name' => 'Descrição',
				'description' => 'Escreva uma descrição completa do seu patch que será vista na página de detalhes. Inclua detalhes como notas de uso, registro de alterações, bugs conhecidos, planos futuros, lista de hijacks, espaço livre, e uso de RAM.'
			]
		],
		'tools' => [
			'os' => [
				'name' => 'Sistema Operacional',
				'list' => 'SO',
				'description' => 'Em quais sistemas operacionais essa ferramenta é executada?',
				'options' => [
					'windows' => 'Windows',
					'mac_os' => 'Mac OS X',
					'linux' => 'Linux',
					'other' => 'Outro'
				]
			],
			'platforms' => [
				'name' => 'Plataformas',
				'description' => 'Quais plataformas esta ferramenta visa?',
				'options' => [
					'general' => 'Geral',
					'snes' => 'SNES',
					'n64' => 'N64'
				]
			],
			'games' => [
				'name' => 'Jogos',
				'description' => 'Para quais jogos essa ferramenta é relevante?',
				'options' => [
					'general' => 'Geral',
					'smw' => 'SMW',
					'yi' => 'YI',
					'sm64' => 'SM64'
				]
			],
			'source' => [
				'name' => 'Fonte Disponível',
				'list' => 'Fnt.',
				'description' => 'O código fonte da ferramenta vem incluso ou está disponível em outro lugar?'
			],
			'featured' => [
				'name' => 'Em Destaque',
				'description' => 'Esta é uma ferramente amplamente conhecida ou útil que deve ficar em destaque?',
				'options' => [
					'no' => 'Não',
					'yes' => 'Sim',
					'essential' => 'Essencial'
				]
			],
			'website' => 'Website',
			'description' => [
				'name' => 'Descrição',
				'description' => 'Escreva uma descrição completa da sua ferramenta que será vista na página de detalhes. Inclua detalhes como notas de uso, registro de alterações, bugs conhecidos e planos futuros.'
			]
		],
		'documents' => [
			'platforms' => [
				'name' => 'Plataformas',
				'description' => 'Quais plataformas este documento visa?',
				'options' => [
					'general' => 'Geral',
					'snes' => 'SNES',
					'n64' => 'N64'
				]
			],
			'games' => [
				'name' => 'Jogos',
				'description' => 'Para quais jogos este documento é relevante?',
				'options' => [
					'general' => 'Geral',
					'smw' => 'SMW',
					'yi' => 'YI',
					'sm64' => 'SM64'
				]
			],
			'type' => [
				'name' => 'Tipo',
				'description' => 'Esta submissão serve como documentação, ou é um tutorial?',
				'options' => [
					'documentation' => 'Documentação',
					'tutorial' => 'Tutorial'
				]
			],
			'language' => [
				'name' => 'Idioma',
				'description' => 'Em qual idioma este documento foi escrito?',
				'options' => [
					'english' => 'Inglês',
					'portuguese' => 'Português',
					'dutch' => 'Holandês',
					'spanish' => 'Espanhol',
					'french' => 'Francês',
					'german' => 'Alemão',
					'italian' => 'Italiano',
					'other' => 'Outro'
				]
			],
			'description' => [
				'name' => 'Descrição',
				'description' => 'Escreva uma descrição do seu documento que será vista completa na página de detalhes. Inclua detalhes como índice, registro de alterações, e planos futuros.'
			]
		],
		'smwmusic' => [
			'size' => [
				'name' => 'Tamanho de Inserção',
				'description' => 'Tamanho de inserção do pedaço de música em hex. Apenas necessários para Canções e submissões Diversas - caso contrário, deixe em branco. Omita o 0x ao digitar o tamanho de inserção, já que o site o gera automaticamente.'
			],
			'type' => [
				'name' => 'Tipo',
				'description' => 'A submissão é uma canção normal, uma trilha sonora compilada, um efeito sonoro ou uma faixa diversa especificamente para uso global?',
				'options' => [
					'song' => 'Canção',
					'soundtrack' => 'Trilha Sonora',
					'sound_effect' => 'Efeito Sonoro',
					'misc' => 'Diversos'
				]
			],
			'samples' => [
				'name' => 'Utilização de Sample',
				'list' => 'Samples',
				'description' => 'Quanto da submissão utiliza samples customizados? Se a submissão for uma Trilha Sonora, observe a maioria das canções ao rotular.',
				'options' => [
					'none' => 'Nenhuma',
					'light' => 'Leve',
					'many' => 'Muita'
				]
			],
			'source' => [
				'name' => 'Fonte',
				'description' => 'A submissão é um port de outra canção, um remix de outra canção ou uma composição original? Se a submissão for uma Trilha Sonora, observe a maioria das canções ao rotular.',
				'options' => [
					'port' => 'Port',
					'remix' => 'Remix',
					'original' => 'Original'
				]
			],
			'duration' => [
				'name' => 'Duração',
				'description' => 'Duração do pedaço de música em um loop. Necessário apenas para Canções e submissões Diversas - caso contrário, deixe em branco.'
			],
			'featured' => [
				'name' => 'Em Destaque',
				'description' => 'Ports de música ou composições que se destacaram com distinção.'
			],
			'description' => [
				'name' => 'Descrição',
				'description' => 'Escreva uma descrição para seu pedaço de música que será vista na lista de arquivos principal. Inclua detalhes como possíveis fins ou áreas onde ela poderia combinar, assim como qualquer informação necessária que precisa ser de conhecimento da submissão.'
			]
		],
		'sramdatabase' => [
			'hid' => [
				'name' => 'Link para hack',
				'list' => 'Link para hack',
				'description' => 'Este campo deve conter um link para a hack desta SRAM.'
			],
			'description' => [
				'name' => 'Descrição',
				'description' => 'Diga em qual fase a SRAM foi salva.'
			]
		],
		'brrsamples' => [
			'collection' => [
				'name' => 'Coleção',
				'description' => 'Esta submissão é um sample único ou uma coleção de samples?',
				'options' => [
					'compilation' => 'Compilação',
					'single' => 'Único'
				]
			],
			'description' => [
				'name' => 'Descrição',
				'description' => 'Descreva sua submissão.'
			]
		],
		'yipatches' => [
			'freespace' => [
				'name' => 'Requer Espaço Livre',
				'list' => 'FS',
				'description' => 'Este patch requer espaço livre?'
			],
			'bugfix' => [
				'name' => 'Bug Fix',
				'list' => 'Fix',
				'description' => 'Este patch conserta bugs do Yoshi\'s Island original?'
			],
			'featured' => [
				'name' => 'Em Destaque',
				'description' => 'Este é um patch amplamente conhecido ou útil que deve ficar em destaque?',
				'options' => [
					'no' => 'Não',
					'yes' => 'Sim'
				]
			],
			'description' => [
				'name' => 'Descrição',
				'description' => 'Escreva uma descrição completa do seu patch que será vista na página de detalhes. Inclua detalhes como notas de uso, registro de alterações, bugs conhecidos, planos futuros, lista de hijacks, espaço livre, e uso de RAM.'
			]
		],
		'uberasm' => [
			'type' => [
				'name' => 'Tipo',
				'description' => 'Para qual modo de jogo é este código?',
				'options' => [
					'level' => 'Fase (Level)',
					'overworld' => 'Mapa (Overworld)',
					'game_mode' => 'Game Mode',
					'global' => 'Global'
				]
			],
			'includesgfx' => [
				'name' => 'Gráficos Inclusos',
				'list' => 'GFX',
				'description' => 'Quando aplicável, esta submissão de código inclui gráficos?'
			],
			'includeshijack' => [
				'name' => 'Hijack Incluso',
				'list' => 'Hijack',
				'description' => 'Seu código contém quaisquer hijacks ou outras mudanças internas na ROM?'
			],
			'featured' => [
				'name' => 'Em Destaque',
				'description' => 'Este é um código amplamente conhecido ou útil que deve ficar em destaque?'
			],
			'description' => [
				'name' => 'Descrição',
				'description' => 'A descrição deve incluir detalhes como notas de uso, registro de alterações, bugs conhecidos, se blocos necessários para uso estão incluídos, e planos futuros.'
			]
		],
		'yimusic' => [
			'type' => [
				'name' => 'Tipo',
				'description' => 'A submissão é uma canção normal, compilação de uma trilha sonora, um efeito sonoro uma faixa diversa especificamente para uso global?',
				'options' => [
					'song' => 'Canção',
					'soundtrack' => 'Trilha Sonora',
					'sound_effect' => 'Efeito Sonoro',
					'misc' => 'Diversos'
				]
			],
			'custom' => [
				'name' => 'Custom',
				'description' => 'A submissão é uma composição original?'
			],
			'sampled' => [
				'name' => 'Sampled',
				'description' => 'A submissão utiliza samples customizados?'
			],
			'duration' => [
				'name' => 'Duração',
				'description' => 'Duração do pedaço de música em um loop. Necessário para todas as submissões que não são trilha sonora ou efeito sonoro. Caso contrário, deixe em branco.'
			],
			'featured' => [
				'name' => 'Em Destaque',
				'description' => 'Ports de música ou composições que se destacaram com distinção.'
			],
			'description' => [
				'name' => 'Description',
				'description' => 'Escreva uma descrição para seu pedaço de música que será vista na lista de arquivos principal. Inclua detalhes como possiveis fins ou áreas onde ela poderia combinar.'
			]
		],
		'spasm' => [
			'type' => [
				'name' => 'Tipo',
				'description' => 'Quando este código é executado?',
				'options' => [
					'init' => 'Init',
					'main' => 'Main'
				]
			],
			'includeshijack' => [
				'name' => 'Hijack Incluso',
				'list' => 'Hijack',
				'description' => 'Seu código contém quaisquer hijacks ou outras mudanças internas na ROM?'
			],
			'featured' => [
				'name' => 'Em Destaque',
				'description' => 'Este é um código amplamente conhecido ou útil que deve ficar em destaque?'
			],
			'description' => [
				'name' => 'Descrição',
				'description' => 'A descrição deve conter detalhes como notas de uso, registro de alterações, bugs conhecidos, e planos futuros.'
			]
		]
	],
	'multiple' => '{description} Segure Control (Ctrl) para escolha múltipla.',
	'binary' => [
		'any' => 'Qualquer',
		'yes' => 'Sim',
		'no' => 'Não'
	],
	'none' => 'Nenhum',
	'preview' => [
		'default' => 'Visualizar',
		'spc' => [
			'verb' => 'Tocar SPC',
			'toggle' => 'Alternar player',
			'pause' => 'Pausar canção',
			'resume' => 'Resumir canção',
			'loop' => 'Alternar looping',
			'restart' => 'Recomeçar canção',
			'stop' => 'Parar canção',
			'title' => 'Título da Canção',
			'volume' => 'Volume',
			'move' => 'Mover player'
		]
	],
	'preview_script' => 'Habilite JavaScript para visualizar arquivos sem precisar fazer download.'
];
