<?php // Do not delete these lines
	if ('comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
		die(__('Forbidden for you!','lime').' <a href="'.bloginfo('url').'">'.__('Start here...','lime').'</a>');

	if (!empty($post->post_password)) { // if there's a password
		if ($_COOKIE['wp-postpass_' . COOKIEHASH] != $post->post_password) {  // and it doesn't match the cookie
			?>

	<table class="log"><tr><td class="logbody"><i><?php _e('You have to give the password to see the comments!','lime'); ?></i></td><tr></table>
			<?php
			return;
		}
	}

	/* This variable is for alternating comment background */
	$oddcomment = 'comm1';
?>
	<table class="comments">
<?php if ($comments) : ?>
	<tr><td colspan="2" class="commenthead"><a class="commenthead" name="comments" href="#commentform"><?php comments_number(__('Have a Voice','lime').'!', '1 '.__('Comment','lime'), '% '.__('Comments','lime'));?></a></td></tr>

	<?php foreach ($comments as $comment) : ?>
	  <tr class="main_side2"><td></td></tr>
		<?php
			if($oddcomment == 'comm1') {
		?>
	  <tr class="comm_side">
		<td class="ctl"></td>
		<td class="cp"></td>
		<td class="ctr"></td>
	  </tr>
	  <tr>
		<td class="cp"></td>
		<td class="comment1"><p class="commenter"><!--sbi2 o rly? <img src="wp-content/themes/lime/media/sbi2.png" alt="&raquo;">&nbsp; sbi2 o rly?--><?php comment_author_link() ?> <?php edit_comment_link(__('Edit This'),':: ',' '); ?>:: <i><a class="commtime" name="comment-<?php comment_ID() ?>"><?php comment_date('Y.m.d.') ?> - <?php comment_time() ?></a></i></p><?php comment_text() ?><?php if ($comment->comment_approved == '0') { ?>[<em><?php _e('Your comment is waiting for approval.','lime'); ?></em>]<?php } ?></td>
		<td class="cp"></td>
	  </tr>
	  <tr class="comm_side">
		<td class="cbl"></td>
		<td class="cp"></td>
		<td class="cbr"></td>
	  </tr>
		<?php
			}else {
		?>
	  <tr>
		<td></td>
		<td class="comment2"><p class="commenter"><!--sbi1 o rly? <img src="wp-content/themes/lime/media/sbi1.png" alt="&raquo;">&nbsp; sbi1 o rly?--><?php comment_author_link() ?> <?php edit_comment_link(__('Edit This'),':: ',' '); ?>:: <i><a class="commtime" name="comment-<?php comment_ID() ?>"><?php comment_date('Y.m.d.') ?> - <?php comment_time() ?></a></i></p><?php comment_text() ?><?php if ($comment->comment_approved == '0') { ?>[<em><?php _e('Your comment is waiting for approval.','lime'); ?></em>]<?php } ?></td>
		<td></td>
	  </tr>

		<?php
			}
			if ('comm1' == $oddcomment) $oddcomment = 'comm2';
			else $oddcomment = 'comm1';
			endforeach; /* end for each comment */
		?>

<?php else : // this is displayed if there are no comments so far ?>
	<?php if ('open' != $post->comment_status) : ?>
	<tr><td colspan="2" class="commenthead"><a class="commenthead" name="comments" href="#commentform"><?php _e('Comments closed!','lime'); ?></a></td></tr>
	<?php endif; ?>
<?php endif; ?>

<?php if ('open' == $post->comment_status) : ?>
	<?php if ( get_option('comment_registration') && !$user_ID ) : ?>
		<a href="<?php echo get_option('siteurl'); ?>/wp-login.php?redirect_to=<?php the_permalink(); ?>"><?php _e('Log in','lime'); ?></a> <?php _e('to have a voice.','lime'); ?>
<?php else : ?>




	  <tr class="main_side2"><td></td></tr>
	  <tr class="comm_side">
		<td class="ctl"></td>
		<td class="cp"></td>
		<td class="ctr"></td>
	  </tr>
		<tr>
			<td class="cp"></td>
			<td class="commentformhead"><a class="commentformhead" name="commentform"><?php _e('Your opinion?','lime'); ?></a></td>
			<td class="cp"></td>
		</tr>
			<form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post">
	<?php if ( $user_ID ) : ?>
					<tr>
					  <td class="cp"></td>
					  <td class="commentform"><?php _e('You are logged in as','lime'); ?> <a href="<?php echo get_option('siteurl'); ?>/wp-admin/profile.php"><?php echo $user_identity; ?></a> <?php _e('&#46;','lime'); ?> <a href="<?php echo get_option('siteurl'); ?>/wp-login.php?action=logout"><?php _e('Log out','lime'); ?></a> &raquo;</td>
					  <td class="cp"></td>
					</tr>
	<?php else : ?>
					<tr>
					  <td class="cp"></td>
					  <td class="commentform"><?php _e('Name','lime'); ?>:<?php if ($req) echo '<b><font size="3" color="red">*</font></b>'; ?><br><input class="inputbox1" type="text" name="author" value="<?php echo $comment_author; ?>" maxlength="32" tabindex="1"></td>
					  <td class="cp"></td>
					</tr>
					<tr>
					  <td class="cp"></td>
					  <td class="commentform"><?php _e('E-Mail','lime'); ?>:<?php if ($req) echo '<b><font size="3" color="red">*</font></b>'; ?><br><input class="inputbox1" type="text" name="email" value="<?php echo $comment_author_email; ?>" tabindex="2"> <i><?php _e('(we keep it secret)','lime'); ?></i></td>
					  <td class="cp"></td>
					</tr>
					<tr>
					  <td class="cp"></td>
					  <td class="commentform"><?php _e('Webpage','lime'); ?>:<br><input class="inputbox1" type="text" name="url" value="<?php echo $comment_author_url; ?>" tabindex="3"></td>
					  <td class="cp"></td>
					</tr>
	<?php endif; ?>
					<tr>
					  <td class="cp"></td>
					  <td class="commentform"><textarea class="inputbox2" name="comment" tabindex="4"></textarea></td>
					  <td class="cp"></td>
					</tr>
					<tr>
					  <td class="cp"></td>
					  <td class="commentform">
						<input name="submit" class="button" type="submit" value="<?php _e('Send','lime'); ?>" tabindex="5">&nbsp;
						<input type="hidden" name="comment_post_ID" value="<?php echo $id; ?>">
						<input class="button" type="button" value="<&#63;>" onClick="alert('<?php _e('The xHTML tags you can use:','lime'); ?> ' + '\n' + '<?php echo allowed_tags(); ?>')">&nbsp;
						<a href="<?php echo get_option('siteurl'); ?>/wp-commentsrss2.php?p=<?php echo $post->ID; ?>" onmouseover="rsscomm2()" onmouseout="rsscomm1()"><img class="themerss" src="wp-content/themes/lime/media/rss1.png" alt="<?php _e('Comment','lime'); ?> RSS" name="rsscomm"></a>
		<?php do_action('comment_form', $post->ID); ?>
					  </td>
					  <td class="cp"></td>
					</tr>
			</form>
	  <tr class="comm_side">
		<td class="cbl"></td>
		<td class="cp"></td>
		<td class="cbr"></td>
	  </tr>




<?php endif; // If registration required and not logged in ?>
<?php endif; // if you delete this the sky will fall on your head ?>
	</table>