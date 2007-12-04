<?php get_header(); ?>

	<?php if (have_posts()) : ?>

		<?php while (have_posts()) : the_post(); ?>
	<table class="log">
			<tr>
				<td class="loghead">
					<a class="loghead" href="<?php the_permalink() ?>" rel="bookmark" title="Link: <?php the_title(); ?>"><font color="#66ccff"><b>|</b></font><?php the_title(); ?></a>
					<?php edit_post_link(__('Edit This'), '&nbsp;&nbsp;[', ']'); ?>
				</td>
				<td class="logheadcat">
					<?php the_category(' ', 'none') ?>
				</td>
			</tr>
			<tr>
				<td colspan="2" class="logbody">
					<?php if(is_category() || is_archive()) {
						the_excerpt();
					} else {
						the_content(__('More &#187;','lime'));
					} ?> 
				</td>
			</tr>
			<tr>
				<td colspan="2">
					<table class="log">
					  <tr>
						<td class="logfootcomm">
							<?php comments_popup_link(__('Have a Voice','lime').' &#187;', '1 '.__('Comment','lime').' &#187;', '% '.__('Comments','lime').' &#187;'); ?>
						</td>
						<td class="logfootprop">
							<?php the_time('Y. F j.') ?> <b>::</b> <?php the_author() ?>
						</td>
					  </tr>
					</table>
				</td>
			</tr>
			<tr>
				<td colspan="2" class="logfoot"><hr size="10" width="60%" align="right" color="#3a3a3a"></td>
			</tr>
	</table>
			<?php comments_template(); // Get wp-comments.php template ?>
		<?php endwhile; ?>
		<div class="logfoot">
			<?php posts_nav_link('&nbsp;||&nbsp;', '<< '.__('Previous','lime'), __('Next','lime').' >>'); ?>
		</div>
	<?php else : ?>
	<table class="log">	<tr><td colspan="2" class="logbody"><h2><?php _e('404 - Nothing here...','lime') ?></h2><p><i><?php _e('The page you are looking for is not here, or it was deleted.','lime') ?></i></p></td><tr></table>
	<?php endif; ?>
<?php get_footer(); ?>