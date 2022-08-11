<?php 
  get_header();
    if (have_rows('content')):
        while (have_rows('content')): the_row();
            switch (get_row_layout()) :
                case 'banner' : 
                    get_template_part( './template-parts/front-page/banner');
                break;
                case 'brands' : 
                    get_template_part( './template-parts/front-page/brands');
                break;
                case 'content' : 
                    get_template_part( './template-parts/front-page/content');
                break;
                case 'solutions' : 
                    get_template_part( './template-parts/front-page/solutions');
                break;
                case 'feedbacks' : 
                    get_template_part( './template-parts/front-page/feedback');
                break;
                case 'channels' : 
                    get_template_part( './template-parts/front-page/channels');
                break;
                case 'contact' : 
                    get_template_part( './template-parts/front-page/contact');
                break;
                default:        
                break;
            endswitch;
        endwhile;
    endif;
  get_footer();