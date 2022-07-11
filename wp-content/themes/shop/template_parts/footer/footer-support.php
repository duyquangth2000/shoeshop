<div class="footer-widgets-area-2 footer-widgets-area my-col-12 my-col-6 my-col-2">
    <div class="widget widget_recent_entries">
        <h4 class="widget-title">
            Hỗ trợ
        </h4>
        <ul>
        <?php
// Custom WP query query
$args_query = array(
	'post_type' => array('new'),
	'order' => 'DESC',
);

$query = new WP_Query( $args_query );

if ( $query->have_posts() ) {
	while ( $query->have_posts() ) {
		$query->the_post();
?>
            <li><a href="<?php the_permalink() ?>"><?php the_title() ?></a></li>
            <?php
	}
} else {

}

wp_reset_postdata();
?>
        </ul>
    </div>
</div>