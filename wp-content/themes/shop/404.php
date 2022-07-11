<?php
get_header();
?>

	<h1>404 Lỗi</h1>
    <Button><a href="<?php echo home_url()?>">Về trang chủ</a></Button>

	<div class="error-404 not-found default-max-width">
		<div class="page-content">
			<p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try a search?', 'twentytwentyone' ); ?></p>
			<?php get_search_form(); ?>
		</div><!-- .page-content -->
	</div><!-- .error-404 -->

<?php
get_footer();
?>