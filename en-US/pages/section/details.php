<?php

return [
	'title' => '{file} - {Section}',
	'age_gate' => 'This file contains content unsuitable for minors.',
	'breadcrumbs' => [
		'moderated' => '{link}{section}{/link} → {file}', // U+2192 (RIGHTWARDS ARROW)
		'waiting' => '{link}Waiting {section}{/link} → {file}' // U+2192 (RIGHTWARDS ARROW)
	],
	'action' => [
		'submit_update' => 'Submit Update',
		'edit' => 'Edit',
		'delete' => 'Delete',
		'claim' => 'Claim',
		'free' => 'Free',
		'approve' => 'Approve',
		'reject' => 'Reject',
		'watch' => 'Watch',
		'unwatch' => 'Unwatch',
		'random' => 'Show random',
		'link' => 'Link'
	],
	'obsolete' => 'This file is obsolete. The latest version is {latest_link}{latest}{/link}. For other versions, check the {history_link}version history{/link}.',
	'content' => [
		'warning' => 'This file contains {warnings}. Discretion is advised.',
		'suggestive_dialogue' => 'suggestive dialogue',
		'crude_content' => 'crude content',
		'crude_language' => 'crude language',
		'sexual_content' => 'sexual content',
		'violence' => 'violence',
		'epilepsy' => 'content (such as flashing imagery) that may be harmful to people with photosensitive epilepsy or similar conditions'
	],
	'details' => 'Submission Details',
	'field' => [
		'name' => 'Name:',
		'authors' => 'Author:|Authors:',
		'added' => 'Added:',
		'history' => [
			'name' => 'Version History:',
			'view' => 'View'
		],
		'submitted' => [
			'name' => 'Submitted:',
			'content' => '{date} by {user}'
		],
		'obsoletes' => 'Obsoletes:',
		'submission_notes' => 'Submission Notes:',
		'preview' => 'Preview:',
		'tags' => [
			'name' => 'Tags:',
			'view_all' => 'View all submissions with this tag'
		],
		'comments' => [
			'name' => 'Comments:',
			'jump' => '(jump to comments)'
		],
		'rating' => [
			'name' => 'Rating:',
			'count' => '(1 rating)|({count} ratings)',
			'none' => 'No rating'
		],
		'claimed' => 'Claimed for moderation by {user} on {date}'
	],
	'download' => [
		'button' => 'Download',
		'info' => '{size} | {downloads}',
		'count' => '1 download|{count} downloads'
	],
	'rate' => [
		'name' => 'Rate:',
		'star' => 'Rate {count}'
	],
	'images' => [
		'title' => 'Screenshots',
		'view_all' => 'View all'
	],
	'comments' => [
		'title' => '[0] Comments|[*,*]Comments ({count})',
		'form' => [
			'title' => 'Post a Comment',
			'textarea' => 'Comment',
			'replying' => 'Replying to {author}: {text}',
			'unreply' => 'cancel reply',
			'submit' => 'Post',
			'preview' => 'Preview'
		],
		'option' => [
			'filter' => 'Showing comments from:',
			'all' => 'All versions',
			'current' => 'Only this version'
		],
		'badge' => [
			'author' => 'Author',
			'pinned' => 'Pinned',
			'old' => 'From older version: {link}{name}{/link}'
		],
		'link' => 'Link',
		'reply' => 'Reply',
		'quote' => 'Quote',
		'pin' => 'Pin',
		'unpin' => 'Unpin',
		'edit' => 'Edit',
		'delete' => 'Delete'
	],
	'not_found' => [
		'title' => 'Error',
		'message' => 'File not found.'
	]
];
