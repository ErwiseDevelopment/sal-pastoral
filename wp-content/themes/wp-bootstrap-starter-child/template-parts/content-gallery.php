<section class="l-gallery py-5">

    <div class="u-border-top-2 u-border-color-primary"></div>
    
    <div class="container">

        <div class="row">

            <div class="col-12">

                <div class="row">

                    <div class="col-lg-10 offset-md-1 d-flex flex-column flex-md-row align-items-center mb-3">
                        <h3 class="c-title u-font-weight-bold text-uppercase u-color-folk-white u-bg-folk-primary py-3 px-5">
                            <span class="u-font-weight-medium u-color-folk-white mr-2">//</span> acontecendo na AJS
                        </h3>
                    </div>
                </div>

                <div class="row">
                    
                    <div class="col-lg-9">

                        <div class="row">
                            
                            <!-- loop -->
                            <?php
                                $args = array(
                                    'posts_per_page' => 8,
                                    'post_type'      => 'fotos',
                                    'order'          => 'DESC'
                                );

                                $galleries = new WP_Query( $args );

                                if( $galleries->have_posts() ) :
                                    while( $galleries->have_posts() ) : $galleries->the_post();
                            ?>
                                        <div class="col-md-6 my-3">
                                            
                                            <a 
                                            class="l-gallery__album d-block"
                                            href="<?php the_permalink() ?>">
                                                <img
                                                class="img-fluid w-100"
                                                src="<?php echo get_field( 'capa_do_album' ) ?>"
                                                alt="<?php the_title() ?>">
                                            </a>
                                        </div>
                            <?php   endwhile;
                                endif;

                                wp_reset_query();
                            ?>
                            <!-- end loop -->

                        </div>

                        <div class="row justify-content-center">

                            <div class="col-md-4 col-lg-3 mt-md-5">

                                <a 
                                class="l-news__small__card-read-more u-line-height-100 hover:u-opacity-8 d-block u-font-weight-bold text-center text-decoration-none u-color-folk-white u-bg-folk-primary py-2 px-5" 
                                href="<?php echo get_home_url( null, 'fotos' ) ?>">
                                    Mais fotos
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 mt-3 mt-lg-0">

                        <div class="row">
                                <?php if(have_rows('videos')) :
                                    while(have_rows('videos')) : the_row();
                                    ?>
                            <!-- loop -->
                            <div class="col-md-6 col-lg-12 my-3">

                                <div class="d-flex justify-content-center justify-content-lg-start">
                                     <?php the_sub_field('video_repetidor'); ?>
                                </div>

                                <p class="l-gallery__video-title u-font-weight-bold text-center u-color-folk-white">
                                    <?php echo get_sub_field('titulo')?>
                                </p>
                            </div>
                            <?php endwhile; 
                                    endif;
                                ?>
                            <!-- end loop -->
                         
                        </div>

                        <div class="row justify-content-center">

                            <div class="col-md-4 col-lg-10">

                                <a 
                                class="l-news__small__card-read-more u-line-height-100 hover:u-opacity-8 d-block u-font-weight-bold text-center text-decoration-none u-color-folk-white u-bg-folk-primary py-2 px-5" 
                                href="<?php echo get_field('mais_videos')?>" target="_blank">
                                    Mais vídeos
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>