<?php 
/* Template Name:fluid */
get_header(); ?>


<section id="page">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
            
            <?php
                the_content();

                wp_link_pages(
                    array(
                        'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'rebecca' ),
                        'after'  => '</div>',
                    )
                );
                ?>

                </div>
            </div>
        </div>
    </div>
</section>


<?php get_footer()?>