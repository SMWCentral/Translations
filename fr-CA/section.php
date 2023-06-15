<?php

return [
	'section' => [
		'smwhacks' => 'Hacks Super Mario World',
		'sm64hacks' => 'Hacks Super Mario 64',
		'sm64music' => 'Musique SM64',
		'sm64textures' => 'Textures SM64',
		'smwsprites' => 'Sprites SMW',
		'smwgraphics' => 'Graphismes SMW',
		'yihacks' => 'Hacks Yoshi\'s Island',
		'smwblocks' => 'Blocs SMW',
		'smwpatches' => 'Patchs SMW',
		'tools' => 'Outils',
		'documents' => 'Documents',
		'smwmusic' => 'Musique SMW',
		'sramdatabase' => 'Répertoire de SRAM',
		'brrsamples' => 'Échantillons BRR',
		'yipatches' => 'Patchs YI',
		'uberasm' => 'Répertoire d\'UberASM',
		'yimusic' => 'Musique YI',
		'spasm' => 'Répertoire de SPASM'
	],
	'field' => [
		'common' => [
			'name' => 'nom',
			'author' => [
				'name' => 'auteur',
				'description' => 'Jusqu\'à 5, séparés par des virgules.'
			],
			'tags' => [
				'name' => 'étiquettes',
				'description' => 'Jusqu\'à 5, séparés par des virgules. Préfixez des étiquettes avec + pour n\'inclure que les combinaisons (+space,+planet). Préfixez une étiquette avec - pour l\'exclure (-planet).'
			]
		],
		'smwhacks' => [
			'demo' => 'Démo',
			'featured' => [
				'name' => 'En vedette',
				'description' => 'N\'afficher que les hacks qui sont en vedettes ou pas.'
			],
			'length' => [
				'name' => 'Longueur',
				'description' => 'Nombres de sorties de niveau dans le hack.'
			],
			'difficulty' => [
				'name' => 'Type',
				'options' => [
					'easy' => 'Standard: Facile',
					'normal' => 'Standard: Normal',
					'hard' => 'Standard: Difficile',
					'very_hard' => 'Standard: Très difficile',
					'kaizo_beginner' => 'Kaizo: Débutant',
					'kaizo_light' => 'Kaizo: Intermédiaire',
					'kaizo_expert' => 'Kaizo: Expert',
					'kaizo_hard' => 'Avec outils: Kaizo', //not sure if outils is the right word, or if it should just be TAS: Kaizo
					'pit' => 'Avec outils: Pit',
					'troll' => 'Divers: Troll',
				]
			],
			'description' => 'Description'
		],
		'sm64hacks' => [
			'difficulty' => [
				'name' => 'Difficulté',
				'options' => [
					'easy' => 'Facile',
					'intermediate' => 'Intermédiaire',
					'hard' => 'Difficile',
					'kaizo' => 'Kaizo'
				]
			],
			'demo' => 'Démo',
			'length' => [
				'name' => 'Longueur',
				'description' => 'Nombre d\'étoiles dans le hack.'
			],
			'description' => 'Description',
			'video' => 'Lien vidéo'
		],
		'sm64music' => [
			'nlist' => [
				'name' => 'Nlist',
				'options' => [
					'nlst_0' => 'NLST 0 (SFX)',
					'nlst_1' => 'NLST 1 (SFX, Pas)',
					'nlst_2' => 'NLST 2 (SFX, Eau)',
					'nlst_3' => 'NLST 3 (SFX, Sable?)',
					'nlst_4' => 'NLST 4 (SFX)',
					'nlst_5' => 'NLST 5 (SFX)',
					'nlst_6' => 'NLST 6 (SFX)',
					'nlst_7' => 'NLST 7 (SFX, autre)',
					'nlst_8' => 'NLST 8 ("Mario" NLST)',
					'nlst_9' => 'NLST 9 (SFX)',
					'nlst_10' => 'NLST 10 (SFX, Voix)',
					'nlst_11' => 'NLST 11 (Neige)',
					'nlst_12' => 'NLST 12 (Non-utilisé)',
					'nlst_13' => 'NLST 13 (Koopa Rapido, Niveaux glissades)',
					'nlst_14' => 'NLST 14 (Château de Peach)',
					'nlst_15' => 'NLST 15 (Sables Trop Mouvants/Laves fatales)',
					'nlst_16' => 'NLST 16 (Maison hantée)',
					'nlst_17' => 'NLST 17 (Écran titre)',
					'nlst_18' => 'NLST 18 (Combat Bowser)',
					'nlst_19' => 'NLST 19 (Baie des pirates/Affreux bassin)',
					'nlst_20' => 'NLST 20 (Mélodie de la Fleur Piranha endormie)',
					'nlst_21' => 'NLST 21 (Caverne brumeuse)',
					'nlst_22' => 'NLST 22 (Choix d\'étoile)',
					'nlst_23' => 'NLST 23 (Casquette d\'ailes)',
					'nlst_24' => 'NLST 24 (Casquette de métal)',
					'nlst_25' => 'NLST 25 (Niveau Bowser)',
					'nlst_26' => 'NLST 26 (Fanfares)',
					'nlst_27' => 'NLST 27 (Boss)',
					'nlst_28' => 'NLST 28 (Escaliers infinis)',
					'nlst_29' => 'NLST 29 (Combat Bowser final)',
					'nlst_30' => 'NLST 30 (Message de Peach)',
					'nlst_31' => 'NLST 31 (Apparition d\'étoile)',
					'nlst_32' => 'NLST 32 (Toad)',
					'nlst_33' => 'NLST 33 (Manège hanté)',
					'nlst_34' => 'NLST 34 (Bataille de Bob-omb)',
					'nlst_35' => 'NLST 35 (Fin)',
					'nlst_36' => 'NLST 36 (Choix de fichier)',
					'nlst_37' => 'NLST 37 (Générique)'
				]
			],
			'description' => 'Description'
		],
		'sm64textures' => [
			'type' => [
				'name' => 'Type',
				'options' => [
					'original' => 'Original',
					'ripped' => 'Rippés'	// Is an anglicism, but I can't think of a better equivalent / Est un anglicisme, mais je n'arrive pas à penser à une meilleur traduction. "Extraits", peut-être?
				]
			],
			'amount' => [
				'name' => 'Nb. de textures',
				'description' => 'Nombre de textures dans le paquet.'
			],
			'description' => 'Description'
		],
		'smwsprites' => [
			'tool' => [
				'name' => 'Outil',
				'description' => 'Quel outil est nécessaire pour insérer ce sprite?',
				'options' => [
					'pixi' => 'PIXI',
					'giepy' => 'GIEPY',
					'romis_spritetool' => 'Spritetool de Romi',
					'overworld_spritetool' => 'Spritetool pour Overworld',
					'other' => 'Autre'
				]
			],
			'type' => [
				'name' => 'Type',
				'description' => 'De quel sorte de sprite s\'agit-il?',
				'options' => [
					'standard' => 'Standard',	//J'ai inclus les traductions anglaises puisque la terminologie anglaise est souvent utilisée / I included the English translations as well because the English terminology is often used
					'shooter' => 'Tireur (Shooter)',
					'generator' => 'Générateur (Generator)',
					'overworld' => 'Overworld',
					'cluster' => 'Amas (Cluster)',
					'extended' => 'Étendu (Extended)',
					'run-once' => 'Exécution unique (Run-Once)',
					'other' => 'Autre'
				]
			],
			'dynamic' => [
				'name' => 'Dynamique',
				'list' => 'Dyn.',
				'description' => 'Est-ce un sprite dynamique?'
			],
			'disassembly' => [
				'name' => 'Démontage',
				'list' => 'Dém.',
				'description' => 'Est-ce un démontage de sprite?'
			],
			'includesgfx' => [
				'name' => 'Graphismes Inclus',
				'list' => 'GFX',
				'description' => 'Où possible, est-ce que cette soumission vient avec des graphismes?'
			],
			'description' => [
				'name' => 'Description',
				'description' => 'La description devrait contenir des détails comme des notes d\'utilisation, une liste de mises à jour, des bogues connus, si les blocs nécessaires à l\'utilisation sont inclus ou des idées pour l\'avenir. '
			]
		],
		'smwgraphics' => [
			'type' => [
				'name' => 'Type',
				'options' => [
					'original' => 'Original',
					'ripped' => 'Rippés'
				]
			],
			'purpose' => [
				'name' => 'Fonction',
				'options' => [
					'background' => 'Arrière-plan',
					'foreground' => 'Premier plan',
					'sprite' => 'Sprite',
					'player' => 'Joueur',
					'layer_3' => 'Calque 3',
					'overworld' => 'Overworld',
					'font' => 'Police',
					'miscellaneous' => 'Divers',
					'graphics_hack' => 'Hack de graphismes'
				]
			],
			'slots' => [
				'name' => 'Champs utilisés', //no idea how to translate "slot" in this case, I don't think there really is a direct equivalent
				'list' => 'Champs',
				'options' => [
					'bg1' => 'BG1',
					'bg2' => 'BG2',
					'bg3' => 'BG3',
					'fg1' => 'FG1',
					'fg2' => 'FG2',
					'fg3' => 'FG3',
					'fg4' => 'FG4',
					'fg5' => 'FG5',
					'fg6' => 'FG6',
					'sp1' => 'SP1',
					'sp2' => 'SP2',
					'sp3' => 'SP3',
					'sp4' => 'SP4',
					'lg1' => 'LG1',
					'lg2' => 'LG2',
					'lg3' => 'LG3',
					'lg4' => 'LG4',
					'an2' => 'AN2'
				]
			],
			'palettes' => [
				'name' => 'Rangs de palette utilisés',
				'options' => [
					'p0' => '0',
					'p1' => '1',
					'p2' => '2',
					'p3' => '3',
					'p4' => '4',
					'p5' => '5',
					'p6' => '6',
					'p7' => '7',
					'p8' => '8',
					'p9' => '9',
					'pA' => 'A',
					'pB' => 'B',
					'pC' => 'C',
					'pD' => 'D',
					'pE' => 'E',
					'pF' => 'F'
				]
			],
			'description' => 'Description'
		],
		'yihacks' => [
			'demo' => 'Démo',
			'length' => [
				'name' => 'Longueur',
				'description' => 'Nombre de niveaux dans le hack.'
			],
			'description' => 'Description'
		],
		'smwblocks' => [
			'actas' => [
				'name' => 'Comportement',
				'list' => 'Comp.',
				'description' => 'Ce bloc devrait se comporter comme quelle tuile?'	//est-ce que ça se dit "tuile" lol?
			],
			'includesgfx' => [
				'name' => 'Graphismes Inclus',
				'list' => 'GFX',
				'description' => 'Où possible, est-ce que cette soumission vient avec des graphismes?'
			],
			'description' => [
				'name' => 'Description',
				'description' => 'Pour votre bloc, tapez une description qui sera vue sur la page du fichier. Incluez des détails tels que des notes d\'utilisation, une liste de mises à jours, des bogues connus, si les patchs ou sprites nécessaires à l\'utilisation sont compris ou des idées pour l\'avenir.'
			]
		],
		'smwpatches' => [
			'tool' => [
				'name' => 'Outil',
				'description' => 'Quel outil est nécessaire pour insérer ce patch?',
				'options' => [
					'xkas' => 'xkas',
					'asar' => 'Asar',
					'both' => 'xkas ou Asar'
				]
			],
			'freespace' => [
				'name' => 'Espace Libre Requis',
				'list' => 'Esp. Lib.',
				'description' => 'Est-ce que ce patch nécessite de l\'espace libre?'
			],
			'bugfix' => [
				'name' => 'Correction de bogues',
				'list' => 'Corr.',
				'description' => 'Est-ce que ce patch corrige des bogues présentes dans la version originale de Super Mario World?'
			],
			'featured' => [
				'name' => 'En vedette',
				'description' => 'S\'agit-il d\'un patch très reconnu ou utile qui devrait être mis en vedette?',
				'options' => [
					'no' => 'Non',
					'yes' => 'Oui',
					'essential' => 'Essentiel'
				]
			],
			'description' => [
				'name' => 'Description',
				'description' => 'Pour votre patch, tapez une description complète qui sera vue en entier sur la page de détails. Incluez des détails tels que des notes d\'utilisation, une liste de mises à jours, des bogues connus, des idées pour l\'avenir et/ou une liste de hijacks, l\'espace libre et l\'utilisation du RAM.'
			]
		],
		'tools' => [
			'os' => [
				'name' => 'Système d\'exploitation',
				'list' => 'OS',
				'description' => 'Quel(s) système(s) d\'exploitation cet outil nécessite-t-il?',
				'options' => [
					'windows' => 'Windows',
					'mac_os' => 'Mac OS X',
					'linux' => 'Linux',
					'other' => 'Autre'
				]
			],
			'platforms' => [
				'name' => 'Plate-formes',
				'description' => 'Quelle(s) plate-forme(s) cet outil vise-t-il?',
				'options' => [
					'general' => 'Général',
					'snes' => 'SNES',
					'n64' => 'N64'
				]
			],
			'games' => [
				'name' => 'Jeux',
				'description' => 'Cet outil est pertinent pour quel(s) jeu(x)?',
				'options' => [
					'general' => 'Général',
					'smw' => 'SMW',
					'yi' => 'YI',
					'sm64' => 'SM64'
				]
			],
			'source' => [
				'name' => 'Source disponible',
				'list' => 'Src.',
				'description' => 'Est-ce que le code source de l\'outil est compris dans son archive ou disponible ailleurs?'
			],
			'featured' => [
				'name' => 'En vedette',
				'description' => 'S\'agit-il d\'un outil très reconnu ou utile qui devrait être mis en vedette?',
				'options' => [
					'no' => 'Non',
					'yes' => 'Oui',
					'essential' => 'Essentiel'
				]
			],
			'website' => 'Site web',
			'description' => [
				'name' => 'Description',
				'description' => 'Pour votre outil, tapez une description complète qui sera vue en entier sur la page de détails. Incluez des détails tels que des notes d\'utilisation, une liste de mises à jours, des bogues connus ou des idées pour l\'avenir.'
			]
		],
		'documents' => [
			'platforms' => [
				'name' => 'Plate-formes',
				'description' => 'Quelle(s) plate-forme(s) ce document vise-t-il?',
				'options' => [
					'general' => 'Général',
					'snes' => 'SNES',
					'n64' => 'N64'
				]
			],
			'games' => [
				'name' => 'Games',
				'description' => 'Ce document est pertinent pour quel(s) jeu(x)?',
				'options' => [
					'general' => 'Général',
					'smw' => 'SMW',
					'yi' => 'YI',
					'sm64' => 'SM64'
				]
			],
			'type' => [
				'name' => 'Type',
				'description' => 'Est-ce que cette soumission joue le rôle de documentation ou s\'agit-t-il d\'un tutoriel?',
				'options' => [
					'documentation' => 'Documentation',
					'tutorial' => 'Tutoriel'
				]
			],
			'language' => [
				'name' => 'Langue',
				'description' => 'Le document est écrit en quelle langue?',
				'options' => [
					'english' => 'Anglais',
					'portuguese' => 'Portugais',
					'dutch' => 'Néerlandais',
					'spanish' => 'Espagnol',
					'french' => 'Français',
					'german' => 'Allemand',
					'italian' => 'Italien',
					'other' => 'Autre'
				]
			],
			'description' => [
				'name' => 'Description',
				'description' => 'Pour votre document, tapez une description complète qui sera vue en entier sur la page de détails. Incluez des détails tels qu\'une table des contenus, une liste de mises à jours ou des idées pour l\'avenir.'
			]
		],
		'smwmusic' => [
			'size' => [
				'name' => 'Taille d\'insertion',
				'description' => 'Taille d\'insertion du morceau de musique en hexadécimal. Obligatoire seulement pour des soumissions de type « Chanson » et « Divers »; sinon, laissez la case vide. N\'écrivez pas le « 0x » lorsque vous saisissez la taille d\'insertion, car le site l\'ajoute automatiquement.'
			],
			'type' => [
				'name' => 'Type',
				'description' => 'Est-ce que la soumission est une chanson normale, une compilation de bande-son, un effet sonore ou un morceau divers spécialement conçu pour une utilisation globale?',
				'options' => [
					'song' => 'Chanson',
					'soundtrack' => 'Bande-son',
					'sound_effect' => 'Effet sonore',
					'misc' => 'Divers'
				]
			],
			'samples' => [
				'name' => 'Utilisation d\'échantillons',
				'list' => 'Éch.',
				'description' => 'À quel point la soumission utilise des échantillons qui ne proviennent pas de SMW? Si la soumission est de type « Bande-son », privilégiez la majorité des chansons lorsque vous choisissez la classification.',
				'options' => [
					'none' => 'Aucun',
					'light' => 'Peu',
					'many' => 'Beaucoup'
				]
			],
			'source' => [
				'name' => 'Source',
				'description' => 'Est-ce que la soumission est une adaptation d\'une chanson qui existe, un remix d\'une chanson qui existe ou une composition originale? Si la soumission est de type « Bande-son », privilégiez la majorité des chansons lorsque vous choisissez la classification.',
				'options' => [
					'port' => 'Adapation',		//pas nécessairement le meilleur mot, mais bon
					'remix' => 'Remix',
					'original' => 'Originale'
				]
			],
			'duration' => [
				'name' => 'Durée',
				'description' => 'Durée d\'une boucle du morceau de musique. Obligatoire seulement pour des soumissions de type « Chanson » et « Divers ». Sinon, laissez la case vide.'
			],
			'featured' => [
				'name' => 'En vedette',
				'description' => 'Adaptations ou compositions musicales qui se distinguent des autres.'
			],
			'description' => [
				'name' => 'Description',
				'description' => 'Pour votre chanson, tapez une description qui sera vue sur la liste principale des fichiers. Incluez des détails comme des utilisations possibles ou des thèmes auxquels la chanson pourrait adhérer, ainsi que toute information nécessaire qui devrait être connue à propos de la soumission.'
			]
		],
		'sramdatabase' => [
			'hid' => [
				'name' => 'Lien du hack',
				'list' => 'Hack',
				'description' => 'Ce champ devrait contenir un lien vers le hack auquel le SRAM se rattache.'
			],
			'description' => [
				'name' => 'Description',
				'description' => 'Notez sur quel niveau la sauvegarde du SRAM se retrouve.'
			]
		],
		'brrsamples' => [
			'collection' => [
				'name' => 'Collection',
				'description' => 'Est-ce que la soumission est un seul échantillon ou une collection d\échantillons?',
				'options' => [
					'compilation' => 'Collection',
					'single' => 'Singulier'
				]
			],
			'description' => [
				'name' => 'Description',
				'description' => 'Décrivez votre soumission.'
			]
		],
		'yipatches' => [
			'freespace' => [
				'name' => 'Nécessite de l\'espace libre',
				'list' => 'FS',
				'description' => 'Est-ce que ce patch nécessite de l\'espace libre (freespace)?'
			],
			'bugfix' => [
				'name' => 'Correction de bogues',
				'list' => 'Corr.',
				'description' => 'Est-ce que ce patch corrige des bogues présentes dans la version originale de Yoshi\'s Island?'
			],
			'featured' => [
				'name' => 'En vedette',
				'description' => 'S\'agit-il d\'un patch très reconnu ou utile qui devrait être mis en vedette?',
				'options' => [
					'no' => 'Non',
					'yes' => 'Oui'
				]
			],
			'description' => [
				'name' => 'Description',
				'description' => 'Pour votre patch, tapez une description complète qui sera vue en entier sur la page de détails. Incluez des détails tels que des notes d\'utilisation, une liste de mises à jours, des bogues connus, des idées pour l\'avenir et/ou une liste de hijacks, de l\'espace libre et de l\'utilisation du RAM.'
			]
		],
		'uberasm' => [
			'type' => [
				'name' => 'Type',
				'description' => 'Quel mode de jeu ce code vise-t-il?',
				'options' => [
					'level' => 'Niveau',
					'overworld' => 'Overworld',
					'game_mode' => 'Mode de jeu',
					'global' => 'Global'
				]
			],
			'includesgfx' => [
				'name' => 'Graphismes inclus',
				'list' => 'GFX',
				'description' => 'Où possible, est-ce que cette soumission vient avec des graphismes?'
			],
			'includeshijack' => [
				'name' => 'Hijack inclus',
				'list' => 'Hijack',
				'description' => 'Est-ce que le code contient des hijacks ou d\'autres modifications internes au ROM?'
			],
			'featured' => [
				'name' => 'En vedette',
				'description' => 'S\'agit-il de code très reconnu ou utile qui devrait être mis en vedette?'
			],
			'description' => [
				'name' => 'Description',
				'description' => 'La description devrait contenir des détails tels que des notes d\'utilisation, une liste de mises à jours, des bogues connus, si les blocs nécessaires à l\'utilisation sont incluses et des idées pour l\'avenir.'
			]
		],
		'yimusic' => [
			'type' => [
				'name' => 'Type',
				'description' => 'Est-ce que la soumission est une chanson normale, une compilation de bande-son, un effet sonore ou un morceau divers spécialement conçu pour une utilisation globale?',
				'options' => [
					'song' => 'Chanson',
					'soundtrack' => 'Bande-son',
					'sound_effect' => 'Effet sonore',
					'misc' => 'Divers'
				]
			],
			'custom' => [
				'name' => 'Originale',
				'description' => 'Est-ce que la soumission est une composition originale?'
			],
			'sampled' => [
				'name' => 'Échantillonnée',
				'description' => 'Est-ce que la soumissions utilise des échantillons qui ne proviennent pas de YI?'
			],
			'duration' => [
				'name' => 'Durée',
				'description' => 'Durée d\'une boucle du morceau de musique. Obligatoire seulement pour des soumissions de type « Chanson » et « Divers »; sinon, laissez la case vide.'
			],
			'featured' => [
				'name' => 'En vedette',
				'description' => 'Adaptations ou compositions musicales qui se distinguent des autres.'
			],
			'description' => [
				'name' => 'Description',
				'description' => 'Pour votre chanson, tapez une description qui sera vue sur la liste principale des fichiers. Incluez des détails comme des utilisations possibles ou des thèmes auxquels la chanson pourrait adhérer.'
			]
		],
		'spasm' => [
			'type' => [
				'name' => 'Type',
				'description' => 'Quand est-ce que ce code est exécuté?',
				'options' => [
					'init' => 'Init',
					'main' => 'Main'
				]
			],
			'includeshijack' => [
				'name' => 'Hijacks inclus',
				'list' => 'Hijacks',
				'description' => 'Est-ce que votre code contient des hijacks ou d\'autres modifications internes au ROM?'
			],
			'featured' => [
				'name' => 'En vedette',
				'description' => 'S\'agit-il de code très reconnu ou utile qui devrait être mis en vedette?'
			],
			'description' => [
				'name' => 'Description',
				'description' => 'La description devrait contenir des détails tels que des notes d\'utilisation, une liste de mises à jours, des bogues connus et des idées pour l\'avenir.'
			]
		]
	],
	'multiple' => '{description} Tenez la touche « Contrôle » pour en sélectionner plusieurs.',
	'binary' => [
		'any' => 'Tous',
		'yes' => 'Oui',
		'no' => 'Non'
	],
	'none' => 'Aucun',
	'preview' => [
		'default' => 'Aperçu',
		'spc' => [
			'verb' => 'Lire le SPC',
			'toggle' => 'Basculer le lecteur',
			'pause' => 'Interrompre',
			'resume' => 'Reprendre',
			'loop' => 'Activer/désactiver la boucle',
			'restart' => 'Recommencer',
			'stop' => 'Arrêter',
			'skip' => 'Sauter',
			'title' => 'Nom de la chanson',
			'volume' => 'Volume',
			'move' => 'Déplacer le lecteur'
		]
	],
	'preview_script' => 'Permettez l\'exécution de JavaScript pour pouvoir voir un aperçu des fichiers sans les télécharger.'
];
