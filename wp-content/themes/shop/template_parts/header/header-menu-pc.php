<!-- <div class="main-navigation site-navigation col-6">
    <ul class="nav-menu">
        <li class="menu-item menu-item-type-custom menu-item-object-custom"><a href="">Giày Nike</a></li>
        <li class="menu-item menu-item-type-custom menu-item-object-custom"><a href="">Giày Adidas</a></li>
        <li class="menu-item menu-item-type-custom menu-item-object-custom"><a href="">Giày Vans</a></li>
        <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children">
            <a href="">Giày Thời Trang</a>
            <ul class="sub-menu">
                <li class="menu-item menu-item-type-custom menu-item-object-custom children"><a href="">GIÀY BALENCIAGA</a></li>
                <li class="menu-item menu-item-type-custom menu-item-object-custom children"><a href="">GIÀY CONVERSE</a></li>
                <li class="menu-item menu-item-type-custom menu-item-object-custom children"><a href="">GIÀY MCQUEEN</a></li>
            </ul>
        </li>
    </ul>
</div> -->

<?php $shoeshop_main_menu_args = array( 
                        'menu' => 'catagorymenu', 
                        'container' => 'div', 
                        'container_class' => 'main-navigation site-navigation col-6', 
                        'container_id' => 'navbar', 
                        'echo' => true, 
                        'fallback_cb' => 'wp_page_menu', 
                        'before' => '', 
                        'after' => '', 
                        'link_before' => '', 
                        'link_after' => '', 
                        'items_wrap' => '<ul id="%1$s" class="nav-menu">%3$s</ul>', 
                        'item_spacing' => 'preserve', 
                        'depth' => 0, 
                        'walker' => '', 
                        'theme_location' => '' 
                    ); 
?>
<?php wp_nav_menu( $shoeshop_main_menu_args ); ?>