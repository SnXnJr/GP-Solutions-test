<?php
    $items = new WP_Query(
        array(
            'post_type'     => 'feedbacks',
            'posts_per_page'=> -1,
            'fields'        => 'ids',
            'orderby'     => 'date',
	        'order'       => 'DESC'
        )
    );
    if ($items->posts) :
?>
        <section class="feedback bg-light-gray">
            <div class="container">
                <h2 class="title title--center">Trusted by the Hospitality Industry</h2>
                <div class="swiper feedback__list">
                    <div class="swiper-wrapper">
                        <?php
                            foreach ($items->posts as $key => $item) :
                        ?>
                                <div class="swiper-slide">
                                    <div class="feedback__item">
                                        <div class="feedback__top d-flex">
                                            <div class="feedback__author d-flex d-flex-ai-center">
                                                <?php echo get_the_post_thumbnail($item, array(130, 130));?>
                                                <div class="author">
                                                    <h3><?php echo get_the_title($item);?></h3>
                                                    <?php the_field('position', $item); ?>
                                                </div>
                                            </div>
                                            <div class="company d-flex d-flex-ai-center d-flex-jc-center">
                                                <img src="<?php echo get_template_directory_uri(); ?>/img/brands/<?php the_field('brand', $item); ?>.png" alt="">
                                            </div>
                                        </div>
                                        <div class="feedback__bottom">
                                            <?php echo get_the_content(null, null, $item);?>
                                        </div>
                                    </div>
                                </div>
                        <?php
                            endforeach;
                        ?>
                    </div>
                    <div class="feedback__pagination">
                        <div class="swiper-button-prev"></div>
                        <div class="feedback-pagination d-flex d-flex-ai-center d-flex-jc-center"></div>
                        <div class="swiper-button-next"></div>
                    </div>
                </div>
            </div>
        </section>
<?php
    endif;
?>