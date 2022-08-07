<?php

return [
	'title' => [
		'generic' => 'Forums',
		'index' => 'Forum Index',
		'forum' => '{forum}',
		'bonus_game' => 'Error'
	],
	'stats' => [
		'posts' => '{stats}{count}{/stats} post|{stats}{count}{/stats} posts',
		'threads' => '{stats}{count}{/stats} thread|{stats}{count}{/stats} threads',
		'posts_today' => 'Posts today: {stats}{count}{/stats}',
		'posts_hour' => 'Posts this hour: {stats}{count}{/stats}',
		'line' => '{posts} in {threads} | {posts_today} | {posts_hour}'
	],
	'action' => [
		'edit' => 'Edit Forum',
		'c3_edit' => 'Edit C3',
		'c3_results' => 'View Results',
		'c3_vote' => 'Vote',
		'mark_read' => 'Mark Forum Read',
		'mark_tagged_read' => 'Mark Tagged Threads Read',
		'new_thread' => 'New Thread',
		'new_tagged_thread' => 'New Thread with Tag',
		'link' => 'Link'
	],
	'mark_all_read' => 'Mark all forums read',
	'watched_threads' => 'Watched threads',
	'viewing_tagged' => 'Currently only viewing threads tagged as {tag}.',
	'breadcrumbs' => [
		'index' => 'Forum Index',
		'tagged' => 'Tagged Threads'
	],
	'category' => [
		'forums' => 'Forums',
		'subforums' => 'Subforums'
	],
	'last_post_info' => '{date}{br}by {user} {link}',
	'forum' => [
		'threads' => 'Threads',
		'posts' => 'Posts',
		'last_post' => 'Last post',
		'new_posts' => 'New posts',
		'new_posts_sub' => 'New posts in subforums',
		'no_new_posts' => 'No new posts',
		'moderated_by' => 'Moderated by:',
		'no_posts' => 'No posts.'
	],
	'threads' => [
		'title' => 'Thread title',
		'created' => 'Posted on',
		'replies' => 'Replies',
		'views' => 'Views',
		'last_post' => 'Last post',
		'status' => [
			'open' => 'No new posts',
			'closed' => 'Thread closed',
			'moved' => 'Phantom thread',
			'open_new' => 'New posts',
			'closed_new' => 'Thread closed, new posts',
			'moved_new' => 'New posts'
		],
		'poll' => 'poll',
		'first_unread' => 'Go to first unread post',
		'view_latest' => 'Go to latest post',
		'description' => 'Posted by {user} on {date}',
		'moved' => '[0] → Moved to {forum} (this will vanish from here soon)|[1]→ Moved to {forum} (this will vanish from here in a day)|[*,*]→ Moved to {forum} (this will vanish from here in {count} days)', // U+2192 (RIGHTWARDS ARROW)
		'watching' => 'You\'re watching this thread',
		'nsfw' => 'Not safe for work',
		'page' => 'Page',
		'none' => 'There are no threads in this forum.'
	],
	'not_found' => [
		'title' => 'Error',
		'message' => 'The requested forum either does not exist or you don\'t have permission to view it.'
	],
	'bad_token' => [
		'title' => 'Error',
		'message' => 'Incorrect token.'
	],
	'read_all' => [
		'title' => 'Success',
		'message' => 'All forums have been marked read.'
	],
	'read_forum' => [
		'title' => 'Success',
		'message' => '{bold}{forum}{/bold} has been marked read.'
	],
	'read_tag_success' => [
		'title' => 'Success',
		'message' => 'The tag {bold}{tag}{/bold} has been marked read.'
	],
	'read_tag_error' => [
		'title' => 'Error',
		'message' => 'The tag couldn\'t be marked read.'
	]
];
