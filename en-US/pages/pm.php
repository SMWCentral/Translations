<?php

return [
	'title' => [
		'inbox' => 'Private Messages',
		'sentbox' => 'Sent Messages',
		'inbox_for' => 'Private Messages for {username}',
		'sentbox_for' => 'Sent Messages for {username}',
		'read' => '{subject} - Private Messages',
		'compose' => 'Compose Message',
		'delete' => 'Confirm Deletion',
	],
	'list' => [
		'count' => [
			'inbox' => '{stats}{count}{/stats} PMs received. Showing {stats}{start}{/stats}–{stats}{end}{/stats}.', // U+2013 (EN DASH)
			'sentbox' => '{stats}{count}{/stats} PMs sent. Showing {stats}{start}{/stats}–{stats}{end}{/stats}.', // U+2013 (EN DASH)
		],
		'view' => [
			'line' => 'View: {received} | {sent}',
			'received' => 'received',
			'sent' => 'sent',
		],
		'delete_selected' => 'Delete selected PMs',
		'write' => 'Write a PM',
		'search' => [
			'title' => 'Search',
			'too_many' => 'Too many users found; some results may have been omitted.',
			'field' => 'Subject or username:',
			'submit' => 'Search',
		],
		'inbox' => 'Inbox',
		'sentbox' => 'Sentbox',
		'from' => 'From',
		'to' => 'To',
		'time' => 'Time',
		'none' => 'No messages to display.',
		'new' => 'NEW',
		'unread' => 'Unread PM',
		'deleted' => '[Deleted]',
	],
	'confirm_read' => [
		'title' => 'Confirm Reading',
		'user' => "You are about to read {bold}{username}{/bold}'s PMs. All staff members will be able to see this action.",
		'pm' => 'You are about to read a PM from {bold}{sender}{/bold} to {bold}{recipient}{/bold}. All staff members will be able to see this action.',
		'reason' => 'Reason: ',
		'submit' => 'Confirm',
	],
	'read' => [
		'breadcrumbs' => [
			'inbox' => '{link}PM inbox{/link} → {subject}', // U+2192 (RIGHTWARDS ARROW)
			'sentbox' => '{link}PM sentbox{/link} → {subject}', // U+2192 (RIGHTWARDS ARROW)
		],
		'reply' => 'Reply',
	],
	'compose' => [
		'editor' => 'Editor',
		'success' => [
			'title' => 'Success',
			'message' => 'Message sent successfully.',
		],
		'error' => [
			'title' => 'Error',
			'message' => "Couldn't send message.",
		],
	],
	'form' => [
		'recipient' => [
			'title' => 'recipient', // required, string, not_found (non-standard), banned_all (non-standard), banned_staff (non-standard), rate (non-standard)
			'not_found' => 'Recipient not found.',
			'banned_all' => 'Banned users may not send PMs.',
			'banned_staff' => 'Banned users may only send PMs to staff members.',
			'rate' => 'You can\'t send another PM so soon.',
		],
		'subject' => 'subject', // required, string, between.string
		'text' => 'message', // required, string, between.string
		'submit' => 'Send PM',
		'preview' => 'Preview PM',
	],
	'delete' => [
		'description' => '[1] Are you sure you want to delete the selected PM?|[*,*] Are you sure you want to delete the {bold}{count}{/bold} selected PMs?',
		'single' => 'Are you sure you want to delete this PM?',
		'confirm' => 'Confirm',
		'cancel' => 'Cancel',
		'none' => [
			'title' => 'Error',
			'message' => 'No messages selected.',
		],
		'success' => [
			'title' => 'Success',
			'message' => '[0] No messages deleted.|[1] Message deleted.|[*,*] {count} messages deleted.',
		],
	],
	'pm_not_found' => [
		'title' => 'Error',
		'message' => 'Message not found.',
	],
	'user_not_found' => [
		'title' => 'Error',
		'message' => 'The specified user does not exist.',
	],
];
