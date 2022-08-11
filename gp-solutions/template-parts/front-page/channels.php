<?php
    $items = get_sub_field('list');
    $gallery = get_sub_field('gallery');
    if ($items || $gallery) :
?>
        <section class="channels">
            <h2 class="title title--center">We Cover Distribution Channels That Matter</h2>
            <div class="subtitle"><?php the_sub_field('content');?></div>
            <div class="bg-gray">
                <div class="container">
                    <div class="channels__container d-flex">
                        <?php
                            if ($items) :
                        ?>
                                <div class="channels__list">
                                    <h4>Channel Types Supported</h4>
                                    <ul>
                                        <?php 
                                            foreach ($items as $key => $item) :
                                        ?>
                                                <li class="d-flex d-flex-ai-center">
                                                    <div class="icon d-flex d-flex-ai-center d-flex-jc-center">
                                                        <?php echo wp_get_attachment_image( $item['image'], array(33,33)); ?>
                                                    </div>
                                                    <p><?php echo $item['title'];?></p>
                                                </li>
                                        <?php
                                            endforeach;
                                        ?>
                                    </ul>
                                    <p>… and any other types required</p>
                                </div>
                        <?php
                            endif;
                            if ($gallery) :
                        ?>
                                <div class="channels__brands">
                                    <h4>Key Channels already on our list</h4>
                                    <div class="channels__brands-list">
                                        <?php
                                            foreach ($gallery as $key => $image) :
                                                echo '<div class="d-flex d-flex-ai-center d-flex-jc-center">'.wp_get_attachment_image( $image, 'full' ).'</div>';
                                            endforeach;
                                        ?>
                                    </div>
                                    <a class="btn" href="/">See more channels</a>
                                </div>
                        <?php
                            endif;
                        ?>
                    </div>
                </div>
            </div>
        </section>
<?php
    endif;
?>