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
    <div class="main-post <?php echo get_the_ID() ?> category-tin-tuc-thoi-trang tag-fashion tag-shopping">
        <a href="<?php the_permalink() ?>" class="post-thumbnail"><img src="<?php echo get_the_post_thumbnail_url() ?>" alt=""></a>
        <div class="post-summary">
            <div class="entry-meta">
                <span class="posted-on">
                    <time><?php the_date_xml() ?></time>
                </span>
                <span class="cat-links">
                    <?php the_category() ?>
                </span>
            </div>
            <h2>
                <a href="<?php the_permalink() ?>"><?php the_title() ?></a>
            </h2>
            <div class="entry-summary">
                <?php the_excerpt() ?>
            </div>
            <a href="<?php the_permalink() ?>" class="line-hover read-more">Xem chi tiết</a>
        </div>
    </div>  
<?php
	}
} else {

}

wp_reset_postdata();
?>