<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/normalize.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css">
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/index.css?ver=1.8">
    <script src="<?php echo get_template_directory_uri(); ?>/js/index.js?ver=1.2"></script>
    <?php wp_head(); ?>
  </head>
  <body>
    <div class="page-wrapper">
        <header class="header <?php echo (is_front_page() || is_home()) ? 'header--transparent' : ''; ?>">
            <div class="header__container d-flex d-flex-ai-center d-flex-jc-between">
                <?php if ( is_front_page() || is_home() ) : ?>
                    <div class="logo">
                        <svg class="svg-icon" width="74" height="20">
                            <use xlink:href="<?php echo get_template_directory_uri(); ?>/img/sprites.svg#logo"></use>
                        </svg>
                    </div>
                <?php else : ?>
                    <a class="logo" href="/">
                        <svg class="svg-icon" width="74" height="20">
                            <use xlink:href="<?php echo get_template_directory_uri(); ?>/img/sprites.svg#logo"></use>
                        </svg>
                    </a>
                <?php endif;?>
                <div class="menu d-flex d-flex-ai-center">
                    <?php
                        wp_nav_menu(
                            array(
                                'menu_id'        => 'header',
                                'theme_location' => 'header',
                                'container' => false,
                                'items_wrap' => '<ul>%3$s</ul>',
                            )
                        );
                    ?>
                    <div class="menu__buttons d-flex d-flex-ai-center">
                        <a class="btn" href=""> Book A Demo</a>
                        <a class="btn btn--bordered" href=""> Log in</a>
                    </div>
                </div>
            </div>
        </header>
        <main>