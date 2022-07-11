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
<div class="elementor-post elementor-grid-item post-2453 post type-post status-publish format-standard has-post-thumbnail hentry category-tin-tuc-thoi-trang tag-fashion tag-shopping">
                                <div class="elementor-post__card">
                                    <a class="elementor-post__thumbnail__link" href="<?php the_permalink() ?>">
                                        <div class="elementor-post__thumbnail">
                                            <img src="<?php echo get_the_post_thumbnail_url() ?>" alt="7-cach-bao-quan">
                                        </div>
                                    </a>
                                    <div class="elementor-post__badge">
                                        <?php the_category() ?> 
                                    </div>
                                    <div class="elementor-post__text">
                                        <h4 class="elementor-post__title"><a href="<?php the_permalink() ?>"> <?php the_title() ?>  </a></h4>
                                        <a class="elementor-post__read-more" href="<?php the_permalink() ?>"> Xem chi tiết > </a>
                                    </div>
                                </div>
                            </div>
<?php
}
} else {

}

wp_reset_postdata();
?>