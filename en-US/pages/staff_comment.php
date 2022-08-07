<?php

return [
	'title' => 'Provide Staff Feedback',
	'editor' => 'Editor',
	'body' => [
		'main' => 'Problem with a staff member\'s attitude? Praise for a hard-working staff member who you feel is underappreciated? General ideas for the staff? Feel free to send feedback. It will only be used to help improve the site.',
		'attitude' => 'If there is a problem with a staff member\'s attitude, please provide examples as it could be something which we are unaware of.',
		'response' => 'We will respond to your message publicly in the {link}Staff Feedback Thread{/link} as long as it fits the criteria listed in the first post. If you choose to share your identity, we may also contact you regarding your feedback.'
	],
	'form' => [
		'subject' => 'subject',
		'message' => [
			'title' => 'Your feedback',
			'rate' => 'The Staff Feedback form enforces a global rate limit to prevent abuse, and is currently unavailable. Please try again in 5 minutes.'
		],
		'reveal' => [
			'title' => 'Share identity',
			'label' => 'Share my identity',
			'description' => 'Staff feedback is fully anonymous by default. If you check this option, however, your username will be attached to your message, which will allow us to get back to you if necessary.'
		],
		'submit' => 'Send feedback',
		'preview' => 'Preview message'
	],
	'success' => [
		'title' => 'Success',
		'message' => 'Feedback sent.'
	],
	'error' => [
		'title' => 'Error',
		'message' => 'An internal error occurred while sending your feedback. Please try again later.'
	]
];
