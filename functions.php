<?php







function rebecca_theme_setup(){

    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    remove_theme_support( 'widgets-block-editor' );
    register_nav_menus(
        array('primary_menu'=> esc_html__('Main Menu', 'rebecca'))
    );
}

add_action('after_setup_theme', 'rebecca_theme_setup');




/**
 *
 * pagination
 */
if ( !function_exists( 'rebecca_pagination' ) ) {

    function _rebecca_pagi_callback( $pagination ) {
        return $pagination;
    }

    //page navegation
    function rebecca_pagination( $prev, $next, $pages, $args ) {
        global $wp_query, $wp_rewrite;
        $menu = '';
        $wp_query->query_vars['paged'] > 1 ? $current = $wp_query->query_vars['paged'] : $current = 1;

        if ( $pages == '' ) {
            global $wp_query;
            $pages = $wp_query->max_num_pages;

            if ( !$pages ) {
                $pages = 1;
            }

        }

        $pagination = [
            'base'      => add_query_arg( 'paged', '%#%' ),
            'format'    => '',
            'total'     => $pages,
            'current'   => $current,
            'prev_text' => $prev,
            'next_text' => $next,
            'type'      => 'array',
        ];

        //rewrite permalinks
        if ( $wp_rewrite->using_permalinks() ) {
            $pagination['base'] = user_trailingslashit( trailingslashit( remove_query_arg( 's', get_pagenum_link( 1 ) ) ) . 'page/%#%/', 'paged' );
        }

        if ( !empty( $wp_query->query_vars['s'] ) ) {
            $pagination['add_args'] = ['s' => get_query_var( 's' )];
        }

        $pagi = '';
        if ( paginate_links( $pagination ) != '' ) {
            $paginations = paginate_links( $pagination );
            $pagi .= '<ul>';
            foreach ( $paginations as $key => $pg ) {
                $pagi .= '<li>' . $pg . '</li>';
            }
            $pagi .= '</ul>';
        }

        print _rebecca_pagi_callback( $pagi );
    }
}

function custom_excerpt_more( $more ) {
	return '';
}
add_filter( 'excerpt_more', 'custom_excerpt_more' );

function rebecca_excerpt_length( $length ) {
	return 30;
}
add_filter( 'excerpt_length', 'rebecca_excerpt_length', 999 );






require_once('lib/rebecca-script.php');
require_once('lib/widget.php');
require_once('lib/sidebar-blogpost.php');