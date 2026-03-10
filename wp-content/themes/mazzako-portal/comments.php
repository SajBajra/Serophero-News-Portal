<?php
$comment_args = array(
	'class_submit' => 'btn btn-default submit',
	'comment_field' => '<p class="comment-form-comment"><label for="comment">' . _x('<b>प्रतिक्रिया</b><span class="required text-danger">*</span>', 'noun') . '</label> <textarea id="comment" name="comment" class="form-control" cols="48" rows="2" aria-required="true" required="required"></textarea></p>',
	'fields' => array(
		'author' => '<div class="row"><div class="col"><p class="comment-form-author">' . '<label for="author">' . __('<b>नाम</b>') . ($req ? ' <span class="required text-danger">*</span>' : '') . '</label> ' .
			'<input id="author" name="author" class="form-control" type="text" value="' . esc_attr($commenter['comment_author']) . '" size="30"' . $aria_req . $html_req . ' /></p></div>',
		'email'  => '<div class="col"><p class="comment-form-email"><label for="email">' . __('<b>इमेल</b>') . ($req ? ' <span class="required text-danger">*</span>' : '') . '</label> ' .
			'<input id="email" name="email" class="form-control" ' . ($html5 ? 'type="email"' : 'type="text"') . ' value="' . esc_attr($commenter['comment_author_email']) . '" size="30" aria-describedby="email-notes"' . $aria_req . $html_req  . ' /></p></div></div>',

	)
);
comment_form($comment_args);