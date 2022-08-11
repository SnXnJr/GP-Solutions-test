        </main>
        <footer class="footer">
            <div class="container">
                <div class="footer__top d-flex d-flex-ai-center d-flex-jc-between">
                    <?php if ( is_front_page() || is_home() ) : ?>
                        <div>
                            <svg class="svg-icon" width="74" height="20">
                                <use xlink:href="<?php echo get_template_directory_uri(); ?>/img/sprites.svg#logo"></use>
                            </svg>
                        </div>
                    <?php else : ?>
                        <a href="/">
                            <svg class="svg-icon" width="74" height="20">
                                <use xlink:href="<?php echo get_template_directory_uri(); ?>/img/sprites.svg#logo"></use>
                            </svg>
                        </a>
                    <?php endif;?>
                    <a class="btn" href="/">Contact Us</a>
                </div>
                <div class="footer__middle">
                    <?php
                        wp_nav_menu(
                            array(
                                'menu_id'        => 'footer',
                                'theme_location' => 'footer',
                                'container' => false,
                                'items_wrap' => '<ul>%3$s</ul>',
                            )
                        );
                    ?>
                </div>
                <div class="footer__bottom">
                    <div class="d-flex d-flex-ai-center">
                        <a href="">
                            <svg class="svg-icon" width="18" height="18">
                                <use xlink:href="<?php echo get_template_directory_uri(); ?>/img/sprites.svg#linked"></use>
                            </svg>
                        </a>
                        <a href="">
                            <svg class="svg-icon" width="18" height="18">
                                <use xlink:href="<?php echo get_template_directory_uri(); ?>/img/sprites.svg#twitter"></use>
                            </svg>
                        </a>
                        <a href="">
                            <svg class="svg-icon" width="18" height="18">
                                <use xlink:href="<?php echo get_template_directory_uri(); ?>/img/sprites.svg#facebook"></use>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    <?php wp_footer(); ?>
    </body>
</html>