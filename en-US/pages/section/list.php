<?php

return [
	'title' => [
		'moderated' => '{Section}',
		'waiting' => 'Waiting {Section}'
	],
	'menu' => [
		'count' => '{stats}{count}{/stats} submissions found. Showing {stats}{start}{/stats}–{stats}{end}{/stats}.', // U+2013 (EN DASH)
		'view' => 'View: {moderated} | {waiting}',
		'moderated' => 'moderated',
		'waiting' => '[0] waiting|[*,*] waiting ({count})',
		'delete_selected' => 'Delete selected',
		'reject_selected' => 'Reject selected',
		'submit' => [
			'smwhacks' => 'Submit a hack',
			'sm64hacks' => 'Submit a hack',
			'sm64music' => 'Submit music',
			'sm64textures' => 'Submit textures',
			'smwsprites' => 'Submit a sprite',
			'smwgraphics' => 'Submit graphics',
			'yihacks' => 'Submit a hack',
			'smwblocks' => 'Submit a block',
			'smwpatches' => 'Submit a patch',
			'tools' => 'Submit a tool',
			'documents' => 'Submit a document',
			'smwmusic' => 'Submit music',
			'sramdatabase' => 'Submit SRAM',
			'brrsamples' => 'Submit samples',
			'yipatches' => 'Submit a patch',
			'uberasm' => 'Submit UberASM',
			'yimusic' => 'Submit music',
			'spasm' => 'Submit SPASM'
		],
		'random' => 'Show random'
	],
	'filter' => [
		'title' => 'Filter',
		'submit' => 'Filter',
		'reset' => 'Clear'
	],
	'view' => [
		'line' => 'View as: {list} | {gallery}',
		'list' => 'List',
		'gallery' => 'Gallery',
		'radio' => 'Radio'
	],
	'header' => [
		'name' => 'Name',
		'date' => 'Date',
		'authors' => 'Authors',
		'rating' => 'Rating',
		'filesize' => 'Size',
		'downloads' => 'Download'
	],
	'sort' => [
		'title' => 'Sort by: ',
		'separator' => ' | ',
		'tooltip' => 'Sort by {column}',
		'generic' => 'Sort by this column',
		'field' => [
			'name' => 'name',
			'date' => 'date',
			'rating' => 'rating',
			'filesize' => 'size',
			'downloads' => 'downloads'
		]
	],
	'moderation' => ' (being moderated by {moderator})',
	'list' => [
		'added' => 'Added: {datetime}',
		'submitted' => 'Submitted: {datetime} by {username}',
		'filter' => 'Filter by "{value}"',
		'no_ratings' => 'None',
		'download' => 'Download',
		'downloads' => '{count} download|{count} downloads'
	],
	'gallery' => [
		'added' => 'Added on {datetime}',
		'submitted' => 'Submitted on {datetime} by {username}',
		'authors' => 'By {authors}'
	]
];
