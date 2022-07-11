<div id="search-modal" class="search-modal sober-modal">
    <div class="modal-header">
        <a href="#" class="close-modal">X</a>
        <h2>Tìm kiếm</h2>
    </div>
    <div class="modal-content">
        <div class="container">
            <div class="product-cats">
                <h2>Tất cả danh mục</h2>
                <?php
                    $prod_cat_args = array(
                        'taxonomy'     => 'product_cat', //woocommerce
                        'empty'        => 0,
                      );
                      $count = 1;
                      $woo_categories = get_categories( $prod_cat_args );
                      
                      foreach ( $woo_categories as $woo_cat ) {
                ?>
                    <a href="<?php echo get_term_link( intval($woo_cat->term_id), 'product_cat' ) ?>"><?php echo $woo_cat->name ?></a>
                    <?php
                }?>
            </div>
            <?php dynamic_sidebar('sidebar') ?>
        </div>
    </div>
</div>