<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://fonts.googleapis.com/icon?family=Material+Icons' rel='stylesheet' type='text/css'/>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;300;400;500;600;700&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <title>shop</title>
    <?php wp_head() ?>
</head>
<body <?php body_class(); ?>>
    <?php get_template_part('template_parts/header/header', 'search') ?>
    <div class="topbar">
        <div class="sober-container">
            <div class="row">
                    <?php $shoeshop_he_thong_menu_args = array( 
                        'menu' => 'Hệ thống cửa hàng', 
                        'container' => 'div', 
                        'container_class' => 'topbar-left topbar-content text-left col-6', 
                        'container_id' => '', 
                        'echo' => true, 
                        'fallback_cb' => 'wp_page_menu', 
                        'before' => '', 
                        'after' => '', 
                        'link_before' => '', 
                        'link_after' => '', 
                        'items_wrap' => '<ul id="%1$s">%3$s</ul>', 
                        'item_spacing' => 'preserve', 
                        'depth' => 0, 
                        'walker' => '', 
                        'theme_location' => '' 
                    ); 
                    ?>
                    <?php wp_nav_menu( $shoeshop_he_thong_menu_args ); ?>
                <div class="topbar-menu text-right col-6">
                    <?php $shoeshop_main_menu_args = array( 
                        'menu' => 'headermenu', 
                        'container' => 'div', 
                        'container_class' => 'menu-topbar-menu-container', 
                        'container_id' => 'navbar', 
                        'echo' => true, 
                        'fallback_cb' => 'wp_page_menu', 
                        'before' => '', 
                        'after' => '', 
                        'link_before' => '', 
                        'link_after' => '', 
                        'items_wrap' => '<ul id="%1$s" class="topbar-menu nav-menu">%3$s</ul>', 
                        'item_spacing' => 'preserve', 
                        'depth' => 0, 
                        'walker' => '', 
                        'theme_location' => '' 
                    ); 
                    ?>
                    <?php wp_nav_menu( $shoeshop_main_menu_args ); ?>
                </div>
            </div>
        </div>
    </div>

    <header class="site-header">
        <div class="sober-container clearfix">
            <div class="row">
                <div class="mobile-nav-toggle col-4"></div>
                <?php get_template_part('template_parts/header/header', 'logo') ?>

                <?php get_template_part('template_parts/header/header', 'menu-pc') ?>
                
                <?php get_template_part('template_parts/header/header', 'icon') ?>
                
                <?php get_template_part('template_parts/header/header', 'menu-mobile') ?>
            </div>
        </div>
    </header>