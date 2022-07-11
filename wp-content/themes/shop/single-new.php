<?php get_header() ?>

<div class="content">
    <div class="container">
    <?php
if (have_posts() ) {
	while (have_posts() ) {
		the_post();
?>
    <div class="main-post <?php echo get_the_ID() ?> category-tin-tuc-thoi-trang tag-fashion tag-shopping">
            <div class="entry-meta">
                <span class="posted-on">
                    <time><?php the_date_xml() ?></time>
                </span>
                <span class="cat-links">
                    <?php the_category() ?>
                </span>
            </div>
            <h2>
                <?php the_title() ?>
            </h2>
            <ul class="socials-share">
                <li> <a target="_blank" class="share-facebook social" href="https://www.facebook.com/sharer.php?u=https%3A%2F%2Fgiayxshop.vn%2F9-ky-thuat-lam-dep-danh-cho-u30%2F&amp;t=9+k%E1%BB%B9+thu%E1%BA%ADt+l%C3%A0m+%C4%91%E1%BA%B9p+d%C3%A0nh+cho+U30"> <i class="<?php the_field( 'icon1' ); ?>"></i> </a></li>
                <li> <a class="share-twitter social" href="https://twitter.com/share?text=9 kỹ thuật làm đẹp dành cho U30&amp;url=https%3A%2F%2Fgiayxshop.vn%2F9-ky-thuat-lam-dep-danh-cho-u30%2F" target="_blank"> <i class="<?php the_field( 'icon2' ); ?>"></i> </a></li>
                <li> <a target="_blank" class="share-google-plus social" href="https://plus.google.com/share?url=https%3A%2F%2Fgiayxshop.vn%2F9-ky-thuat-lam-dep-danh-cho-u30%2F&amp;text=9+k%E1%BB%B9+thu%E1%BA%ADt+l%C3%A0m+%C4%91%E1%BA%B9p+d%C3%A0nh+cho+U30"><i class="<?php the_field( 'icon3' ); ?>"></i> </a></li>
                <li> <a target="_blank" class="share-pinterest social" href="https://pinterest.com/pin/create/button/?url=https%3A%2F%2Fgiayxshop.vn%2Fwp-content%2Fuploads%2F2016%2F09%2Fu30-meo.jpg&amp;description=9+k%E1%BB%B9+thu%E1%BA%ADt+l%C3%A0m+%C4%91%E1%BA%B9p+d%C3%A0nh+cho+U30"><i class="<?php the_field( 'icon4' ); ?>"></i> </a></li>
            </ul>
            <div class="entry-thumbnail">
                <img src="<?php echo get_the_post_thumbnail_url() ?>" alt="">
            </div>
            <div class="entry-summary">
                <?php the_excerpt() ?>
            </div>
            
    </div>  
<?php
	}
} else {

}

wp_reset_postdata();
?>
    </div>
</div>



<?php get_footer() ?>