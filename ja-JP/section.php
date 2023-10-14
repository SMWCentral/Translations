<?php

return [
	'section' => [
		'smwhacks' => 'スーパーマリオワールドハック',
		'sm64hacks' => 'SM64 ハック',
		'sm64music' => 'SM64 音楽',
		'sm64textures' => 'SM64 テクスチャ',
		'smwsprites' => 'SMW スプライト',
		'smwgraphics' => 'SMW グラフィック',
		'yihacks' => 'ヨッシーアイランドハック',
		'smwblocks' => 'SMW ブロック',
		'smwpatches' => 'SMW パッチ',
		'tools' => 'ツール',
		'documents' => '資料',
		'smwmusic' => 'SMW 音楽',
		'sramdatabase' => 'SRAM データベース',
		'brrsamples' => 'BRR サンプル',
		'yipatches' => 'YI パッチ',
		'uberasm' => 'UberASM リポジトリ',
		'yimusic' => 'YI 音楽',
		'spasm' => 'SPASM リポジトリ',
	],
	'field' => [
		'common' => [
			'name' => '名前',
			'author' => [
				'name' => '作成者',
				'description' => '最大5個、カンマ区切り。',
			],
			'tags' => [
				'name' => 'タグ',
				'description' => '最大5個、カンマ区切り。複数のタグを必要とする場合は、タグの前に + を付けます(例:+space,+planet)。特定のタグを除外するには、接頭辞として - を付けます。(例:-planet)',
			],
		],
		'smwhacks' => [
			'demo' => 'デモ',
			'featured' => [
				'name' => '注目',
				'description' => 'ハッキングの注目のステータスを制御します。',
			],
			'length' => [
				'name' => '長さ',
				'description' => 'ハック内のゴールの数（隠しゴールを含む）。',
			],
			'difficulty' => [
				'name' => '難易度',
				'options' => [
					'easy' => 'スタンダード:初級',
					'normal' => 'スタンダード:中級',
					'hard' => 'スタンダード:上級',
					'very_hard' => 'スタンダード:超上級',
					'kaizo_beginner' => '改造:初級',
					'kaizo_light' => '改造:中級',
					'kaizo_expert' => '改造:上級',
					'kaizo_hard' => 'ツール支援:改造',
					'pit' => 'ツール支援:ピット',
					'troll' => 'その他:トロール',
				],
			],
			'description' => '説明',
		],
		'sm64hacks' => [
			'difficulty' => [
				'name' => '難易度',
				'options' => [
					'easy' => '初級',
					'intermediate' => '中級',
					'hard' => '上級',
					'kaizo' => '改造',
				],
			],
			'demo' => 'デモ',
			'length' => [
				'name' => '長さ',
				'description' => 'ハック内のスターの数。',
			],
			'description' => '説明',
			'video' => 'ビデオのリンク',
		],
		'sm64music' => [
			'nlist' => [
				'name' => 'Nリスト',
				'options' => [
					'nlst_0' => 'NLST 0 (SFX)',
					'nlst_1' => 'NLST 1 (SFX、足音)',
					'nlst_2' => 'NLST 2 (SFX、水)',
					'nlst_3' => 'NLST 3 (SFX、砂?)',
					'nlst_4' => 'NLST 4 (SFX)',
					'nlst_5' => 'NLST 5 (SFX)',
					'nlst_6' => 'NLST 6 (SFX)',
					'nlst_7' => 'NLST 7 (SFX、その他)',
					'nlst_8' => 'NLST 8 (「マリオ」のNLST)',
					'nlst_9' => 'NLST 9 (SFX)',
					'nlst_10' => 'NLST 10 (SFX、ボイス)',
					'nlst_11' => 'NLST 11 (雪)',
					'nlst_12' => 'NLST 12 (未使用)',
					'nlst_13' => 'NLST 13 (ノコノコ、スライダー)',
					'nlst_14' => 'NLST 14 (ピーチのお城)',
					'nlst_15' => 'NLST 15 (あっちっち さばく/ファイアバブル ランド)',
					'nlst_16' => 'NLST 16 (テレサのホラーハウス)',
					'nlst_17' => 'NLST 17(タイトル)',
					'nlst_18' => 'NLST 18 (クッパ戦)',
					'nlst_19' => 'NLST 19 (かいぞくの いりえ/ウォーター ランド)',
					'nlst_20' => 'NLST 20 (パックンフラワーの子守歌)',
					'nlst_21' => 'NLST 21 (やみにとける どうくつ)',
					'nlst_22' => 'NLST 22 (スター選択)',
					'nlst_23' => 'NLST 23 (羽根ぼうし)',
					'nlst_24' => 'NLST 24 (メタルぼうし)',
					'nlst_25' => 'NLST 25 (クッパへの道)',
					'nlst_26' => 'NLST 26 (ファンファーレ)',
					'nlst_27' => 'NLST 27 (ボス戦)',
					'nlst_28' => 'NLST 28 (無限階段)',
					'nlst_29' => 'NLST 29 (クッパ最終決戦)',
					'nlst_30' => 'NLST 30 (ピーチメッセージ)',
					'nlst_31' => 'NLST 31 (パワースター出現)',
					'nlst_32' => 'NLST 32 (キノピオ)',
					'nlst_33' => 'NLST 33 (ゴーストメリーゴーランド)',
					'nlst_34' => 'NLST 34 (ボムへいの せんじょう)',
					'nlst_35' => 'NLST 35 (エンディング)',
					'nlst_36' => 'NLST 36 (ファイル選択)',
					'nlst_37' => 'NLST 37 (クレジット)',
				],
			],
			'description' => '説明',
		],
		'sm64textures' => [
			'type' => [
				'name' => 'タイプ',
				'options' => [
					'original' => 'オリジナル',
					'ripped' => 'リッピング',
				],
			],
			'amount' => [
				'name' => 'No. of Textures',
				'description' => 'ハック内のテクスチャの量',
			],
			'description' => '説明',
		],
		'smwsprites' => [
			'tool' => [
				'name' => 'ツール',
				'description' => 'このスプライトを挿入するにはどのツールが必要ですか?',
				'options' => [
					'pixi' => 'PIXI',
					'giepy' => 'GIEPY',
					'romis_spritetool' => 'Romi\'s Spritetool',
					'overworld_spritetool' => 'Overworld Spritetool',
					'other' => 'その他',
				],
			],
			'type' => [
				'name' => 'タイプ',
				'description' => 'これはどのようなスプライトですか?',
				'options' => [
					'standard' => 'スタンダード',
					'shooter' => 'シューター',
					'generator' => 'ジェネレーター',
					'overworld' => 'オーバーワールド',
					'cluster' => 'クラスター',
					'extended' => '拡張',
					'run-once' => '一度のみ実行',
					'other' => 'その他',
				],
			],
			'dynamic' => [
				'name' => 'ダイナミック',
				'list' => 'ダイナミック',
				'description' => 'これはダイナミック スプライトですか?',
			],
			'disassembly' => [
				'name' => '分解',
				'list' => '分解',
				'description' => 'これは既存のスプライトの分解ですか?',
			],
			'includesgfx' => [
				'name' => 'GFXを含む',
				'list' => 'GFX',
				'description' => '該当する場合、このスプライトにはグラフィックスが含まれていますか?',
			],
			'description' => [
				'name' => '説明',
				'description' => '説明には、使用上の注意、変更履歴、既知のバグ、使用に必要なブロックが含まれているかどうか、または将来の計画などの詳細が含まれている必要があります。',
			],
		],
		'smwgraphics' => [
			'type' => [
				'name' => 'タイプ',
				'options' => [
					'original' => 'オリジナル',
					'ripped' => 'リッピング',
				],
			],
			'purpose' => [
				'name' => 'Purpose',
				'options' => [
					'background' => '背景',
					'foreground' => '前景',
					'sprite' => 'スプライト',
					'player' => 'プレーヤー',
					'layer_3' => 'レイヤー3',
					'overworld' => 'オーバーワールド',
					'font' => 'フォント',
					'miscellaneous' => 'その他',
					'graphics_hack' => 'グラフィックハック',
				],
			],
			'slots' => [
				'name' => '使用スロット',
				'list' => 'スロット',
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
					'an2' => 'AN2',
				],
			],
			'palettes' => [
				'name' => '使用するパレット行',
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
					'pF' => 'F',
				],
			],
			'description' => '説明',
		],
		'yihacks' => [
			'demo' => 'デモ',
			'length' => [
				'name' => '長さ',
				'description' => 'ハックのレベル数。',
			],
			'description' => '説明',
		],
		'smwblocks' => [
			'actas' => [
				'name' => '行動',
				'description' => 'このブロックはどのタイルのように動作する必要がありますか?',
			],
			'includesgfx' => [
				'name' => 'GFXを含む',
				'list' => 'GFX',
				'description' => '該当する場合、このブロックにはグラフィックが含まれていますか?',
			],
			'description' => [
				'name' => '説明',
				'description' => 'ファイル ページに表示されるブロックの説明を入力します。使用上の注意、変更履歴、既知のバグ、使用に必要なパッチやスプライトが含まれているかどうか、将来の計画などの詳細を含めます。',
			],
		],
		'smwpatches' => [
			'tool' => [
				'name' => 'ツール',
				'description' => 'このパッチを挿入するにはどのツールが必要ですか?',
				'options' => [
					'xkas' => 'xkas',
					'asar' => 'Asar',
					'both' => 'xkasかAsar',
				],
			],
			'freespace' => [
				'name' => '空き領域が必要',
				'list' => 'FS',
				'description' => 'このパッチには空き領域が必要ですか?',
			],
			'bugfix' => [
				'name' => 'バグ修正',
				'list' => 'バグ修正',
				'description' => 'このパッチの目的はオリジナルのスーパーマリオワールドのバグの修正ですか?',
			],
			'featured' => [
				'name' => '注目',
				'description' => 'これは広く認識されている、または注目すべき有用なパッチですか?',
				'options' => [
					'no' => 'いいえ',
					'yes' => 'はい',
					'essential' => '必須',
				],
			],
			'description' => [
				'name' => '説明',
				'description' => '詳細ページに表示されるパッチの完全な説明を入力します。使用上の注意、変更履歴、既知のバグ、将来の計画、および/またはハイジャック、空き領域、RAM 使用量のリストなどの詳細を含めます。',
			],
		],
		'tools' => [
			'os' => [
				'name' => 'OS',
				'list' => 'OS',
				'description' => 'このツールはどのオペレーティング システムで実行されますか?',
				'options' => [
					'windows' => 'Windows',
					'mac_os' => 'Mac OS X',
					'linux' => 'Linux',
					'other' => 'その他',
				],
			],
			'platforms' => [
				'name' => 'プラットフォーム',
				'description' => 'このツールはどのプラットフォームを対象としていますか?',
				'options' => [
					'general' => '全般',
					'snes' => 'SFC',
					'n64' => 'N64',
				],
			],
			'games' => [
				'name' => 'ゲーム',
				'description' => 'このツールはどのゲームに関連していますか?',
				'options' => [
					'general' => '全般',
					'smw' => 'SMW',
					'yi' => 'YI',
					'sm64' => 'SM64',
				],
			],
			'source' => [
				'name' => '利用可能なソース',
				'list' => 'ソース',
				'description' => 'ツールのソース コードはアーカイブに含まれていますか、それとも他の場所で入手できますか?',
			],
			'featured' => [
				'name' => '注目',
				'description' => 'これは広く認識されている、または注目すべき便利なツールですか?',
				'options' => [
					'no' => 'いいえ',
					'yes' => 'はい',
					'essential' => '必須',
				],
			],
			'website' => 'Webサイト',
			'description' => [
				'name' => '説明',
				'description' => '詳細ページに表示されるツールの完全な説明を入力します。使用上の注意、変更履歴、既知のバグ、将来の計画などの詳細を含めてください。',
			],
		],
		'documents' => [
			'platforms' => [
				'name' => 'プラットフォーム',
				'description' => 'このドキュメントはどのプラットフォームを対象としていますか?',
				'options' => [
					'general' => '一般',
					'snes' => 'SFC',
					'n64' => 'N64',
				],
			],
			'games' => [
				'name' => 'ゲーム',
				'description' => 'このドキュメントはどのゲームに関連していますか?',
				'options' => [
					'general' => '一般',
					'smw' => 'SMW',
					'yi' => 'YI',
					'sm64' => 'SM64',
				],
			],
			'type' => [
				'name' => 'タイプ',
				'description' => 'この提出物は資料ですか、それともチュートリアルですか?',
				'options' => [
					'documentation' => '資料',
					'tutorial' => 'チュートリアル',
				],
			],
			'language' => [
				'name' => '言語',
				'description' => 'このドキュメントは何語で書かれていますか?',
				'options' => [
					'english' => '英語',
					'portuguese' => 'ポルトガル語',
					'dutch' => 'オランダ語',
					'spanish' => 'スペイン語',
					'french' => 'フランス語',
					'german' => 'ドイツ語',
					'italian' => 'イタリア語',
					'other' => 'その他',
				],
			],
			'description' => [
				'name' => '説明',
				'description' => '詳細ページに全文が表示されるドキュメントの説明を入力します。目次、変更履歴、将来の計画などの詳細を含めてください。',
			],
		],
		'smwmusic' => [
			'size' => [
				'name' => '挿入時のサイズ',
				'description' => '音楽のサイズを 16 進数で挿入します。ソングとその他の場合にのみ必要です。提出物 - それ以外の場合は、そのままにしておきます。サイトが自動的に挿入サイズを生成するため、挿入サイズを入力するときは 0x を省略してください。',
			],
			'type' => [
				'name' => 'タイプ',
				'description' => '提出された曲は、通常の曲、サウンドトラック コンピレーション、サウンド エフェクト、またはグローバル向けに特別に意図されたその他のトラックですか?',
				'options' => [
					'song' => '音楽',
					'soundtrack' => 'サウンドトラック',
					'sound_effect' => '効果音',
					'misc' => 'その他',
				],
			],
			'samples' => [
				'name' => 'サンプル使用',
				'list' => 'サンプル',
				'description' => '提出物のうちどの程度がカスタム サンプルを使用していますか? 提出物がサウンドトラックの場合は、これにラベルを付けるときに大部分の曲に誤って対応してください。',
				'options' => [
					'none' => 'なし',
					'light' => '少し',
					'many' => '多く',
				],
			],
			'source' => [
				'name' => 'ソース',
				'description' => '提出されたものは別の曲の移植ですか、別の曲のリミックスですか、それともオリジナルの曲ですか? 提出物がサウンドトラックの場合は、これにラベルを付けるときに大部分の曲に誤って対応してください。',
				'options' => [
					'port' => '移植',
					'remix' => 'リミックス',
					'original' => 'オリジナル',
				],
			],
			'duration' => [
				'name' => '時間',
				'description' => '1 ループ内の音楽の長さ。ソングとその他の場合にのみ必要です。提出物 - それ以外の場合は、このままにしておいてください。',
			],
			'featured' => [
				'name' => '注目',
				'description' => '際立って目立った音楽移植または作品。',
			],
			'description' => [
				'name' => '説明',
				'description' => 'メイン ファイル リストに表示される音楽の説明を入力します。考えられる目的や適合する可能性のある分野などの詳細と、提出物に関して知らせる必要がある必要な情報を含めてください。',
			],
		],
		'sramdatabase' => [
			'hid' => [
				'name' => 'ハックリンク',
				'list' => 'ハックリンク',
				'description' => 'このフィールドには、SRAM のハックへのリンクが含まれている必要があります。',
			],
			'description' => [
				'name' => '説明',
				'description' => 'SRAM がどのレベルに保存されているかを言います。',
			],
		],
		'brrsamples' => [
			'collection' => [
				'name' => 'コレクション',
				'description' => '提出物は単一のサンプルですか、それともサンプルのコレクションですか?',
				'options' => [
					'compilation' => 'コレクション',
					'single' => '単一',
				],
			],
			'description' => [
				'name' => '説明',
				'description' => '提出物について説明してください。',
			],
		],
		'yipatches' => [
			'freespace' => [
				'name' => '空き領域が必要',
				'list' => '空き領域が必要',
				'description' => 'このパッチには空き領域が必要ですか?',
			],
			'bugfix' => [
				'name' => 'バグ修正',
				'list' => 'バグ修正',
				'description' => 'このパッチの目的はオリジナルのヨッシーアイランドのバグの修正ですか?',
			],
			'featured' => [
				'name' => '注目',
				'description' => 'これは広く認識されている、または注目すべき有用なパッチですか?',
				'options' => [
					'no' => 'いいえ',
					'yes' => 'はい',
				],
			],
			'description' => [
				'name' => '説明',
				'description' => '詳細ページに表示されるパッチの完全な説明を入力します。使用上の注意、変更履歴、既知のバグ、将来の計画、および/またはハイジャック、空き領域、RAM 使用量のリストなどの詳細を含めます。',
			],
		],
		'uberasm' => [
			'type' => [
				'name' => 'タイプ',
				'description' => 'このコードはどのゲームモードを対象としていますか?',
				'options' => [
					'level' => 'レベル',
					'overworld' => 'オーバーワールド',
					'game_mode' => 'ゲームモード',
					'global' => 'グローバル',
				],
			],
			'includesgfx' => [
				'name' => 'GFX を含む',
				'list' => 'GFX を含む',
				'description' => '該当する場合、このコードにはグラフィックスが含まれていますか?',
			],
			'includeshijack' => [
				'name' => 'ハイジャックを含む',
				'list' => 'ハイジャックを含む',
				'description' => 'コードには、ROM に対するハイジャックまたはその他の内部変更が含まれていますか?',
			],
			'featured' => [
				'name' => '注目',
				'description' => 'これは広く認識されている、または注目すべき有用なコードですか?',
			],
			'description' => [
				'name' => '説明',
				'description' => '説明には、使用上の注意、変更履歴、既知のバグ、使用に必要なブロックが含まれているかどうか、将来の計画などの詳細が含まれている必要があります。',
			],
		],
		'yimusic' => [
			'type' => [
				'name' => 'タイプ',
				'description' => '提出された曲は、通常の曲、サウンドトラック コンピレーション、サウンド エフェクト、またはグローバル向けに特別に意図されたその他のトラックですか?',
				'options' => [
					'song' => '音楽',
					'soundtrack' => 'サウンドトラック',
					'sound_effect' => '効果音',
					'misc' => 'その他',
				],
			],
			'custom' => [
				'name' => 'カスタム',
				'description' => '提出物はオリジナルの作品ですか?',
			],
			'sampled' => [
				'name' => 'サンプリング',
				'description' => '提出物はカスタムサンプルを使用していますか?',
			],
			'duration' => [
				'name' => '時間',
				'description' => '1 ループ内の音楽の長さ。サウンドトラック/サウンドエフェクト以外のすべての提出に必須です。そうでなければ、このままにしておいてください。',
			],
			'featured' => [
				'name' => '注目',
				'description' => '際立って目立った音楽移植または作品。',
			],
			'description' => [
				'name' => '説明',
				'description' => 'メイン ファイル リストに表示される音楽の説明を入力します。考えられる目的や適合する可能性のある分野などの詳細を含めてください。',
			],
		],
		'spasm' => [
			'type' => [
				'name' => 'タイプ',
				'description' => 'このコードはいつ実行されますか?',
				'options' => [
					'init' => 'Init',
					'main' => 'Main',
				],
			],
			'includeshijack' => [
				'name' => 'ハイジャックを含む',
				'list' => 'ハイジャックを含む',
				'description' => 'コードには、ROM に対するハイジャックまたはその他の内部変更が含まれていますか?',
			],
			'featured' => [
				'name' => '注目',
				'description' => 'これは広く認識されている、または注目すべき有用なコードですか?',
			],
			'description' => [
				'name' => '説明',
				'description' => '説明には、使用上の注意、変更履歴、既知のバグ、将来の計画などの詳細を含める必要があります。',
			],
		],
	],
	'multiple' => '{description} Ctrlキーを押したままにすると複数の項目を選択できます。',
	'binary' => [
		'any' => '任意',
		'yes' => 'はい',
		'no' => 'いいえ',
	],
	'none' => 'None',
	'preview' => [
		'default' => 'プレビュー',
		'spc' => [
			'verb' => 'SPCをプレイする',
			'toggle' => 'プレイヤーを切り替える',
			'pause' => '曲を一時停止',
			'resume' => '曲を再開',
			'loop' => 'ループの切り替え',
			'restart' => '曲を最初からにする',
			'stop' => '曲を停止',
			'skip' => '曲をスキップ',
			'title' => '曲名',
			'volume' => '音量',
			'move' => 'プレイヤーを移動',
		],
	],
	'preview_script' => 'ファイルをダウンロードせずにプレビューするには、JavaScript をオンにしてください。',
];
