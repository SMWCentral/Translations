<?php

return [
	'addressApproved' => [
		'title' => 'Your address has been approved!',
		'body' => '{username} approved {stats}${address}{/stats} in {stats}{map} Map{/stats}.',
	],
	'addressRejected' => [
		'title' => 'Your address has been rejected',
		'body' => '{username} rejected {stats}${address}{/stats} in {stats}{map} Map{/stats}. {log_link}You can view the removal log here{/log_link}.',
	],
	'commentReply' => [
		'title' => 'New reply to one of your comments!',
		'body' => '{username} replied to your comment on {stats}{link}{file_name}{/link}{/stats}.',
	],
	'fileApproved' => [
		'title' => 'Your submission has been approved!',
		'body' => '{username} approved {stats}{link}{file_name}{/link}{/stats}.',
	],
	'fileComment' => [
		'title' => 'New comment on a submission you\'re watching!',
		'body' => '{username} commented on {stats}{link}{file_name}{/link}{/stats}.',
	],
	'fileRejected' => [
		'title' => 'Your submission has been rejected',
		'body' => '{username} rejected {stats}{file_name}{/stats}. {log_link}You can view the removal log here{/log_link}.',
	],
	'fileUpdate' => [
		'title' => 'Update submitted to a submission you\'re watching!',
		'body' => '{username} {new_link}submitted an update{/link} to {stats}{old_link}{old_name}{/link}{/stats}.',
	],
	'post' => [
		'title' => 'New post in a thread you\'re watching!',
		'known' => '{username} replied to {stats}{link}{title}{/link}{/stats}. There may be more new posts after this one.',
		'restricted' => '{username} replied to a restricted thread which you are watching.'
	],
	'tweakApproved' => [
		'title' => 'Your tweak has been approved!',
		'body' => '{username} approved {stats}{link}{summary}{/link}{/stats}.',
	],
	'tweakRejected' => [
		'title' => 'Your tweak has been rejected',
		'body' => '{username} rejected {stats}{summary}{/stats}. {log_link}You can view the removal log here{/log_link}.',
	],
];
