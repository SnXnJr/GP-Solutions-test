<?php
    $items = new WP_Query(
        array(
            'post_type'     => 'page',
            'post_parent'   => 13,
            'posts_per_page'=> -1,
            'fields'        => 'ids',
            'orderby'     => 'date',
	        'order'       => 'ASC'
        )
    );
    if ($items->posts) :
?>
        <section class="solutions">
            <div class="container">
                <h2 class="title title--center">Our Solutions</h2>
                <div class="solutions__list">
                    <?php
                        foreach ($items->posts as $key => $item) :
                    ?>
                        <div class="solutions__item">
                            <?php echo get_the_post_thumbnail($item, array(347, 252));?>
                            <div class="solutions__title d-flex d-flex-ai-center">
                                <h3><?php echo get_the_title($item);?></h3>
                            </div>
                            <div class="solutions__content">
                                <p><?php echo get_the_excerpt($item);?></p>
                            </div>
                            <a class="btn" href="<?php the_permalink( $item ); ?>">Learn more </a>
                        </div>
                    <?php
                        endforeach;
                    ?>
                </div>
            </div>
        </section>
<?php
    endif;
?>