<?php
    $items = get_sub_field('list');
    if ($items) :
?>
        <section class="brands">
            <div class="container">
                <div class="brands__list d-flex d-flex-ai-center d-flex-jc-between">
                    <?php
                        foreach ($items as $key => $item) :
                            echo wp_get_attachment_image( $item, 'full' );
                        endforeach;
                    ?>
                </div>
            </div>
        </section>
<?php
    endif;
?>