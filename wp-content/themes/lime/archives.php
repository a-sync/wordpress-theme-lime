<?php
/*
Template Name: Archívum
*/

/* 	Smarter Archives 1.0.1 by rob1n (http://robinadr.com/)
	modded by Vector Akashi
*/
function wp_smart_archives() {
	global $wpdb;
	$years = $wpdb->get_results( "SELECT distinct year(post_date) AS year, count(ID) as posts FROM $wpdb->posts WHERE post_type = 'post' AND post_status = 'publish' GROUP BY year(post_date) ORDER BY post_date DESC" );
	if ( empty( $years ) ) { return; }
	$months_short = apply_filters( 'smarter_archives_months', array( '', __('Jan','lime'), __('Feb','lime'), __('Mar','lime'), __('Apr','lime'), __('May','lime'), __('Jun','lime'), __('Jul','lime'), __('Aug','lime'), __('Sep','lime'), __('Oct','lime'), __('Nov','lime'), __('Dec','lime') ) );
	print '<div class="smart-archives">';
	foreach ( $years as $year ) {
		print '<p><a class="year-link" href="' . get_year_link( $year->year ) . '">' . $year->year . '</a><b>:</b>&nbsp;&nbsp;';
		for ( $month = 1; $month <= 12; $month++ ) {
			if ( (int) $wpdb->get_var( "SELECT COUNT(ID) FROM $wpdb->posts WHERE post_type = 'post' AND post_status = 'publish' AND year(post_date) = '$year->year' AND month(post_date) = '$month'" ) > 0 ) { print '<a href="' . get_month_link( $year->year, $month ) . '">' . $months_short[$month] . '</a>'; }
			else { print '<span class="empty-month">' . $months_short[$month] . '</span>'; }
			if ( $month != 12 ) { print '&nbsp;<font color="#66ccff"><b>|</b></font>&nbsp;'; }
		} print '</p>';
	} print '</div>';
}

?>
<?php include 'header.php'; ?>

<div class="archiv">

<h3 class="archhead"><?php _e('Archives','lime'); ?></h2>


<?php wp_smart_archives(); ?>

<h3 class="archhead"><?php _e('Categories','lime'); ?></h2>
<ul>
	<?php wp_list_categories('orderby=name&show_count=1&title_li='); ?>
</ul>

<h3 class="archhead"><?php _e('All posts','lime'); ?></h2>
<ul>
	<?php wp_get_archives('type=postbypost'); ?>
</ul>

</div>

<?php include 'footer.php'; ?>