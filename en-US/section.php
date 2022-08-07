<?php

return [
	'section' => [
		'smwhacks' => 'Super Mario World Hacks',
		'sm64hacks' => 'Super Mario 64 Hacks',
		'sm64music' => 'SM64 Music',
		'sm64textures' => 'SM64 Textures',
		'smwsprites' => 'SMW Sprites',
		'smwgraphics' => 'SMW Graphics',
		'yihacks' => 'Yoshi\'s Island Hacks',
		'smwblocks' => 'SMW Blocks',
		'smwpatches' => 'SMW Patches',
		'tools' => 'Tools',
		'documents' => 'Documents',
		'smwmusic' => 'SMW Music',
		'sramdatabase' => 'SRAM Database',
		'brrsamples' => 'BRR Samples',
		'yipatches' => 'YI Patches',
		'uberasm' => 'UberASM Repository',
		'yimusic' => 'YI Music',
		'spasm' => 'SPASM Repository'
	],
	'field' => [
		'common' => [
			'name' => 'name',
			'author' => [
				'name' => 'author',
				'description' => 'Up to 5, comma separated.'
			],
			'tags' => [
				'name' => 'tags',
				'description' => 'Up to 5, comma separated. Prefix a tag with + to require multiple (+space,+planet). Prefix with - to exclude (-planet).'
			]
		],
		'smwhacks' => [
			'demo' => 'Demo',
			'featured' => [
				'name' => 'Featured',
				'description' => 'Controls featured status of a hack.'
			],
			'length' => [
				'name' => 'Length',
				'description' => 'Number of level exits in the hack.'
			],
			'difficulty' => [
				'name' => 'Type',
				'options' => [
					'easy' => 'Standard: Easy',
					'normal' => 'Standard: Normal',
					'hard' => 'Standard: Hard',
					'very_hard' => 'Standard: Very Hard',
					'kaizo_beginner' => 'Kaizo: Beginner',
					'kaizo_light' => 'Kaizo: Intermediate',
					'kaizo_expert' => 'Kaizo: Expert',
					'kaizo_hard' => 'Tool-Assisted: Kaizo',
					'pit' => 'Tool-Assisted: Pit',
					'troll' => 'Misc.: Troll'
				]
			],
			'description' => 'Description'
		],
		'sm64hacks' => [
			'difficulty' => [
				'name' => 'Difficulty',
				'options' => [
					'easy' => 'Easy',
					'intermediate' => 'Intermediate',
					'hard' => 'Hard',
					'kaizo' => 'Kaizo'
				]
			],
			'demo' => 'Demo',
			'length' => [
				'name' => 'Length',
				'description' => 'Number of stars in the hack.'
			],
			'description' => 'Description',
			'video' => 'Video Link'
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
			'description' => 'Description'
		],
		'sm64textures' => [
			'type' => [
				'name' => 'Type',
				'options' => [
					'original' => 'Original',
					'ripped' => 'Ripped'
				]
			],
			'amount' => [
				'name' => 'No. of Textures',
				'description' => 'Amount of textures in the pack.'
			],
			'description' => 'Description'
		],
		'smwsprites' => [
			'tool' => [
				'name' => 'Tool',
				'description' => 'What tool is required to insert this sprite?',
				'options' => [
					'pixi' => 'PIXI',
					'giepy' => 'GIEPY',
					'romis_spritetool' => 'Romi\'s Spritetool',
					'overworld_spritetool' => 'Overworld Spritetool',
					'other' => 'Other'
				]
			],
			'type' => [
				'name' => 'Type',
				'description' => 'What kind of sprite is this?',
				'options' => [
					'standard' => 'Standard',
					'shooter' => 'Shooter',
					'generator' => 'Generator',
					'overworld' => 'Overworld',
					'cluster' => 'Cluster',
					'extended' => 'Extended',
					'run-once' => 'Run-Once',
					'other' => 'Other'
				]
			],
			'dynamic' => [
				'name' => 'Dynamic',
				'list' => 'Dyn.',
				'description' => 'Is this a dynamic sprite?'
			],
			'disassembly' => [
				'name' => 'Disassembly',
				'list' => 'Dis.',
				'description' => 'Is this a disassembly?'
			],
			'includesgfx' => [
				'name' => 'Includes GFX',
				'list' => 'GFX',
				'description' => 'Where applicable, does this sprite submission include graphics?'
			],
			'description' => [
				'name' => 'Description',
				'description' => 'The description should include details such as usage notes, changelog, known bugs, whether required blocks for use are included, or future plans.'
			]
		],
		'smwgraphics' => [
			'type' => [
				'name' => 'Type',
				'options' => [
					'original' => 'Original',
					'ripped' => 'Ripped'
				]
			],
			'purpose' => [
				'name' => 'Purpose',
				'options' => [
					'background' => 'Background',
					'foreground' => 'Foreground',
					'sprite' => 'Sprite',
					'player' => 'Player',
					'layer_3' => 'Layer 3',
					'overworld' => 'Overworld',
					'font' => 'Font',
					'miscellaneous' => 'Miscellaneous',
					'graphics_hack' => 'Graphics Hack'
				]
			],
			'slots' => [
				'name' => 'Slots Used',
				'list' => 'Slots',
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
				'name' => 'Palette Row(s) Used',
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
			'demo' => 'Demo',
			'length' => [
				'name' => 'Length',
				'description' => 'Number of levels in the hack.'
			],
			'description' => 'Description'
		],
		'smwblocks' => [
			'actas' => [
				'name' => 'Act As',
				'description' => 'What tile should this block act like?'
			],
			'includesgfx' => [
				'name' => 'Includes GFX',
				'list' => 'GFX',
				'description' => 'Where applicable, does this block submission include graphics?'
			],
			'description' => [
				'name' => 'Description',
				'description' => 'Type a description of your block that will be seen on the file page. Include details such as usage notes, changelog, known bugs, whether required patches or sprites for use are included, or future plans.'
			]
		],
		'smwpatches' => [
			'tool' => [
				'name' => 'Tool',
				'description' => 'What tool is required to insert this patch?',
				'options' => [
					'xkas' => 'xkas',
					'asar' => 'Asar',
					'both' => 'xkas or Asar'
				]
			],
			'freespace' => [
				'name' => 'Requires Free Space',
				'list' => 'FS',
				'description' => 'Does this patch require free space?'
			],
			'bugfix' => [
				'name' => 'Bug Fix',
				'list' => 'Fix',
				'description' => 'Does this patch fix bugs in the original Super Mario World?'
			],
			'featured' => [
				'name' => 'Featured',
				'description' => 'Is this a widely recognized or useful patch that should be featured?',
				'options' => [
					'no' => 'No',
					'yes' => 'Yes',
					'essential' => 'Essential'
				]
			],
			'description' => [
				'name' => 'Description',
				'description' => 'Type a full description of your patch that will be seen on the details page. Include details such as usage notes, changelog, known bugs, future plans, and/or a list of hijacks, free space, and RAM usage.'
			]
		],
		'tools' => [
			'os' => [
				'name' => 'Operating System',
				'list' => 'OS',
				'description' => 'What operating system(s) does this tool run under?',
				'options' => [
					'windows' => 'Windows',
					'mac_os' => 'Mac OS X',
					'linux' => 'Linux',
					'other' => 'Other'
				]
			],
			'platforms' => [
				'name' => 'Platforms',
				'description' => 'What platform(s) does this tool target?',
				'options' => [
					'general' => 'General',
					'snes' => 'SNES',
					'n64' => 'N64'
				]
			],
			'games' => [
				'name' => 'Games',
				'description' => 'What game(s) is this tool relevant for?',
				'options' => [
					'general' => 'General',
					'smw' => 'SMW',
					'yi' => 'YI',
					'sm64' => 'SM64'
				]
			],
			'source' => [
				'name' => 'Source Available',
				'list' => 'Src.',
				'description' => 'Is the source code for the tool included in its archive or available somewhere else?'
			],
			'featured' => [
				'name' => 'Featured',
				'description' => 'Is this a widely recognized or useful tool that should be featured?',
				'options' => [
					'no' => 'No',
					'yes' => 'Yes',
					'essential' => 'Essential'
				]
			],
			'website' => 'Website',
			'description' => [
				'name' => 'Description',
				'description' => 'Type a full description of your tool that will be seen on the details page. Include details such as usage notes, changelog, known bugs and future plans.'
			]
		],
		'documents' => [
			'platforms' => [
				'name' => 'Platforms',
				'description' => 'What platform(s) does this document target?',
				'options' => [
					'general' => 'General',
					'snes' => 'SNES',
					'n64' => 'N64'
				]
			],
			'games' => [
				'name' => 'Games',
				'description' => 'What game(s) is this document relevant for?',
				'options' => [
					'general' => 'General',
					'smw' => 'SMW',
					'yi' => 'YI',
					'sm64' => 'SM64'
				]
			],
			'type' => [
				'name' => 'Type',
				'description' => 'Does this submission serve as documentation, or is it a tutorial?',
				'options' => [
					'documentation' => 'Documentation',
					'tutorial' => 'Tutorial'
				]
			],
			'language' => [
				'name' => 'Language',
				'description' => 'What language is this document written in?',
				'options' => [
					'english' => 'English',
					'portuguese' => 'Portuguese',
					'dutch' => 'Dutch',
					'spanish' => 'Spanish',
					'french' => 'French',
					'german' => 'German',
					'italian' => 'Italian',
					'other' => 'Other'
				]
			],
			'description' => [
				'name' => 'Description',
				'description' => 'Type a description of your document that will be seen in full on the details page. Include details such as table of contents, changelog, and future plans.'
			]
		],
		'smwmusic' => [
			'size' => [
				'name' => 'Insert Size',
				'description' => 'Insert size of the piece of music in hex. Required only for Songs and Misc. submissions - otherwise, leave this alone. Omit the 0x when entering the insert size, as the site generates it automatically.'
			],
			'type' => [
				'name' => 'Type',
				'description' => 'Is the submission a normal song, a soundtrack compilation, a sound effect or a miscellaneous track specifically intended to be global?',
				'options' => [
					'song' => 'Song',
					'soundtrack' => 'Soundtrack',
					'sound_effect' => 'Sound Effect',
					'misc' => 'Misc.'
				]
			],
			'samples' => [
				'name' => 'Sample Usage',
				'list' => 'Samples',
				'description' => 'How much of the submission utilizes custom samples? If the submission is a Soundtrack, err towards the majority of songs when labeling this.',
				'options' => [
					'none' => 'None',
					'light' => 'Light',
					'many' => 'Many'
				]
			],
			'source' => [
				'name' => 'Source',
				'description' => 'Is the submission a port of another song, a remix of another song or an original composition? If the submission is a Soundtrack, err towards the majority of songs when labeling this.',
				'options' => [
					'port' => 'Port',
					'remix' => 'Remix',
					'original' => 'Original'
				]
			],
			'duration' => [
				'name' => 'Duration',
				'description' => 'Duration of the piece of music in one loop. Required only for Songs and Misc. submissions - otherwise, leave this alone.'
			],
			'featured' => [
				'name' => 'Featured',
				'description' => 'Music ports or compositions which have stood out with distinction.'
			],
			'description' => [
				'name' => 'Description',
				'description' => 'Type a description of your piece of music that will be seen on the main file list. Include details such as possible purposes or areas it could potentially fit, as well as any necessary information that must be made known about the submission.'
			]
		],
		'sramdatabase' => [
			'hid' => [
				'name' => 'Hack link',
				'list' => 'Hack link',
				'description' => 'This field should contain a link to the hack the SRAM is for.'
			],
			'description' => [
				'name' => 'Description',
				'description' => 'Say what level the SRAM is saved on.'
			]
		],
		'brrsamples' => [
			'collection' => [
				'name' => 'Collection',
				'description' => 'Is the submission a single sample or collection of samples?',
				'options' => [
					'compilation' => 'Compilation',
					'single' => 'Single'
				]
			],
			'description' => [
				'name' => 'Description',
				'description' => 'Describe your submission.'
			]
		],
		'yipatches' => [
			'freespace' => [
				'name' => 'Requires Free Space',
				'list' => 'FS',
				'description' => 'Does this patch require free space?'
			],
			'bugfix' => [
				'name' => 'Bug Fix',
				'list' => 'Fix',
				'description' => 'Does this patch fix bugs in the original Yoshi\'s Island?'
			],
			'featured' => [
				'name' => 'Featured',
				'description' => 'Is this a widely recognized or useful patch that should be featured?',
				'options' => [
					'no' => 'No',
					'yes' => 'Yes'
				]
			],
			'description' => [
				'name' => 'Description',
				'description' => 'Type a full description of your patch that will be seen on the details page. Include details such as usage notes, changelog, known bugs, future plans, and/or a list of hijacks, free space, and RAM usage.'
			]
		],
		'uberasm' => [
			'type' => [
				'name' => 'Type',
				'description' => 'What game mode does this code target?',
				'options' => [
					'level' => 'Level',
					'overworld' => 'Overworld',
					'game_mode' => 'Game Mode',
					'global' => 'Global'
				]
			],
			'includesgfx' => [
				'name' => 'Includes GFX',
				'list' => 'GFX',
				'description' => 'Where applicable, does this code submission include graphics?'
			],
			'includeshijack' => [
				'name' => 'Includes Hijack',
				'list' => 'Hijack',
				'description' => 'Does your code contain any hijacks or other internal changes to the ROM?'
			],
			'featured' => [
				'name' => 'Featured',
				'description' => 'Is this a widely recognized or useful code that should be featured?'
			],
			'description' => [
				'name' => 'Description',
				'description' => 'The description should include details such as usage notes, changelog, known bugs, whether required blocks for use are included, and future plans.'
			]
		],
		'yimusic' => [
			'type' => [
				'name' => 'Type',
				'description' => 'Is the submission a normal song, a soundtrack compilation, a sound effect or a miscellaneous track specifically intended to be global?',
				'options' => [
					'song' => 'Song',
					'soundtrack' => 'Soundtrack',
					'sound_effect' => 'Sound Effect',
					'misc' => 'Misc.'
				]
			],
			'custom' => [
				'name' => 'Custom',
				'description' => 'Is the submission an original composition?'
			],
			'sampled' => [
				'name' => 'Sampled',
				'description' => 'Does the submission use custom samples?'
			],
			'duration' => [
				'name' => 'Duration',
				'description' => 'Duration of the piece of music in one loop. Required for all non-soundtrack/sound effect submissions. Otherwise, leave this alone.'
			],
			'featured' => [
				'name' => 'Featured',
				'description' => 'Music ports or compositions which have stood out with distinction.'
			],
			'description' => [
				'name' => 'Description',
				'description' => 'Type a description of your piece of music that will be seen on the main file list. Include details such as possible purposes or areas it could potentially fit.'
			]
		],
		'spasm' => [
			'type' => [
				'name' => 'Type',
				'description' => 'When is this code executed?',
				'options' => [
					'init' => 'Init',
					'main' => 'Main'
				]
			],
			'includeshijack' => [
				'name' => 'Includes Hijack',
				'list' => 'Hijack',
				'description' => 'Does your code contain any hijacks or other internal changes to the ROM?'
			],
			'featured' => [
				'name' => 'Featured',
				'description' => 'Is this a widely recognized or useful code that should be featured?'
			],
			'description' => [
				'name' => 'Description',
				'description' => 'The description should include details such as usage notes, changelog, known bugs, and future plans.'
			]
		]
	],
	'multiple' => '{description} Hold control to select multiple.',
	'binary' => [
		'any' => 'Any',
		'yes' => 'Yes',
		'no' => 'No'
	],
	'none' => 'None',
	'preview' => [
		'default' => 'Preview',
		'spc' => [
			'verb' => 'Play SPC',
			'toggle' => 'Toggle player',
			'pause' => 'Pause song',
			'resume' => 'Resume song',
			'loop' => 'Toggle looping',
			'restart' => 'Restart song',
			'stop' => 'Stop song',
			'skip' => 'Skip song',
			'title' => 'Song Title',
			'volume' => 'Volume',
			'move' => 'Move player'
		]
	],
	'preview_script' => 'Turn on JavaScript to preview files without downloading them.'
];
