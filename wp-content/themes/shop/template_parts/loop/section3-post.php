<?php 
    // Custom WP query query_clients
    $args_query_indexsection3 = array(
        'post_type' => array('product'),
        'posts_per_page' => 20,
        'order' => 'DESC',
        'orderby' => 'date',
    );

    $query_indexsection3 = new WP_Query( $args_query_indexsection3 );

    if ( $query_indexsection3->have_posts() ) {
        while ( $query_indexsection3->have_posts() ) {
            $query_indexsection3->the_post();
            ?>
                <li class="woo-variation-gallery-product layout-style-2 product-has-gallery product-style-quickview product type-product post-10151 status-publish first instock product_cat-giay-adidas product_cat-giay-doi product_cat-giay-nam product_cat-giay-nu product_cat-giay-thoi-trang product_tag-giay-doi product_tag-giay-nam product_tag-giay-nu product_tag-giay-sneaker-nam product_tag-giay-sneaker-nu product_tag-giay-the-thao-nam product_tag-giay-the-thao-nu has-post-thumbnail sale shipping-taxable purchasable product-type-variable has-default-attributes">
                    <div class="product-header">
                        <a href="<?php the_permalink() ?>">
                            <?php the_post_thumbnail("thumbnail",array( "title" => get_the_title(),"alt" => get_the_title() ));?>
                            <!-- <img src="<?php //echo get_post_meta( get_the_ID(), 'section3_hover-images', true) ?>" class="after"> -->
                        </a>
                    </div>
                    <h3 class="woocommerce-loop-product__title">
                        <a href="<?php the_permalink() ?>"><?php the_title() ;?></a>
                    </h3>
                    <span class="price">
                    <?php
                        global $post;
                        $product = wc_get_product( $post->ID ); 
                        echo $product->get_price_html();
                    ?>
                    </span>
                </li>
            <?php
        }
    } else {

    }
    wp_reset_postdata();
?>