<?php 
/* Template Name:Sidebar */
get_header(); ?>


<section id="page">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
            
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
            <div class="col-sm-4">
                <div class="sidebar">
                    <?php dynamic_sidebar( 'main_sidebar' )?>
                </div>
			</div>
        </div>
    </div>
</section>


<?php get_footer()?>