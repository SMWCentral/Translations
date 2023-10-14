<?php

return [
	'title' => '{title} - {forum}',
	'age_gate' => [
		'nsfw' => 'This thread contains content unsuitable for minors.',
		'time' => 'This thread is {months} months old. It may not have been properly moderated according to our current standards and might contain content unsuitable for minors.',
	],
	'forum_index' => 'Forum Index',
	'actions' => [
		'reply' => 'New Reply',
		'closed' => 'Thread Closed',
		'watch' => 'Watch Thread',
		'unwatch' => 'Unwatch Thread',
		'move' => 'Move Thread',
		'sticky' => 'Sticky Thread',
		'desticky' => 'Desticky Thread',
		'close' => 'Close Thread',
		'open' => 'Open Thread',
		'trash' => 'Trash Thread',
		'link' => 'Link',
	],
	'poll' => [
		'show_results' => 'Show Results',
		'hide_results' => 'Hide Results',
		'delete' => 'Delete',
		'votes' => '{percentage}% ({link}1 vote{/link})|{percentage}% ({link}{count} votes{/link})',
		'limit' => 'Only one vote is allowed.|Up to {count} votes are allowed.',
		'once' => 'You cannot change your vote later.',
		'public' => 'Your vote will be publicly visible.',
		'voters' => 'Total voters: {count}',
		'closes' => 'Poll closes in {time}.',
		'cast_vote' => 'Cast vote',
		'change_vote' => 'Change vote',
		'closed' => 'Poll closed on {time}.',
		'thread_closed' => 'Thread closed.',
		'cannot_vote' => 'Cannot vote.',
	],
	'quick_reply' => [
		'title' => 'Quick Reply',
		'text' => 'Post content',
		'submit' => 'Submit reply',
		'full' => 'Go to full editor',
	],
	'thread_not_found' => [
		'title' => 'Error',
		'message' => 'The requested thread either does not exist or you don\'t have permission to view it.',
	],
	'post_not_found' => [
		'title' => 'Error',
		'message' => 'The requested post either does not exist or you don\'t have permission to view it.',
	],
];
