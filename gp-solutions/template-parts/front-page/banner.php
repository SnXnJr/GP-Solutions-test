<?php
    $items = get_sub_field('list');
    if ($items) :
?>
        <section class="banner">
            <div class="swiper banner__slider">
                <div class="swiper-wrapper">
                    <?php
                        foreach ($items as $key => $item) :
                    ?>
                            <div class="swiper-slide d-flex d-flex-ai-center" style="background-image: url(<?php echo wp_get_attachment_image_url( $item['image'], 'full'); ?>)">
                                <div class="container">
                                    <div class="banner__content">
                                        <h1><?php echo $item['title']; ?></h1>
                                        <a class="btn" href="<?php echo $item['link']; ?>">Get in Touch</a>
                                    </div>
                                </div>
                            </div>
                    <?php
                        endforeach;
                    ?>
                </div>
            </div>
            <div class="swiper-pagination banner__pagination"></div>
            <svg class="svg-icon scroll">
                <use xlink:href="<?php echo get_template_directory_uri(); ?>/img/sprites.svg#mouse"></use>
            </svg> 
        </section>
<?php
    endif;
?>