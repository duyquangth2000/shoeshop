<?php
$prod_cat_args = array(
    'taxonomy'     => 'product_cat', //woocommerce
    'empty'        => 0,
  );
  $count = 1;
  $woo_categories = get_categories( $prod_cat_args );
  
  foreach ( $woo_categories as $woo_cat ) {
      if($count <=3){?>
                            <div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-3ca4b4c1">
                                <div class="elementor-column-wrap elementor-element-populated">
                                    <div class="elementor-widget-wrap">
                                        <div class="elementor-cta">
                                            <div class="elementor-cta__bg-wrapper img<?php echo $count ?>">
                                            </div>
                                            <div class="elementor-cta__content">
                                                <h2 class="elementor-cta__title elementor-cta__content-item elementor-content-item elementor-animated-item--grow"><?php echo $woo_cat->name ?></h2>
                                                <?php $woo_cat_id = $woo_cat->term_id;  ?>
                                                <div class="elementor-cta__button-wrapper elementor-cta__content-item elementor-content-item elementor-animated-item--grow"><a href="<?php echo get_term_link( intval($woo_cat->term_id), 'product_cat' ) ?>"> XEM NGAY </a></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php
      }
      $count++;
  }?>