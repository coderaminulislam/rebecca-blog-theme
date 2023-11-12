<?php


function rebecca_widgets(){
    register_sidebar(array(
        'name'=> __('Blog Sidebar', 'rebecca'),
        'id'=> 'main_sidebar',
        'before_widget'=>'<div class="widget">' ,
        'after_widget'=> '</div>',
        'before_title'=> '<h2 class="widget-title">',
        'after_title'=> '</h2>',
        
    ));
}
add_action('widgets_init', 'rebecca_widgets');