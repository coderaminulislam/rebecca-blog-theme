<?php
	/**
	 * STCore Sidebar Posts Imagee
	 *
	 *
	 * @author 		Simple_Theme
	 * @category 	Widgets
	 * @package 	STCore/Widgets
	 * @version 	1.0.0
	 * @extends 	WP_Widget
	*/

Class ST_Post_Sidebar_Widget extends WP_Widget{

	public function __construct(){
		parent::__construct('st-latest-posts', 'Rebecca Sidebar Posts', array(
			'description'	=> 'Latest Blog Post Widget by Coderaminul'
		));
	}


	public function widget($args, $instance){
		extract($args);
		extract($instance);

 		echo $before_widget;
 		if($instance['title']):
 		echo $before_title; ?>
 			<?php echo apply_filters( 'widget_title', $instance['title'] ); ?>
 		<?php echo $after_title; ?>
 		<?php endif; ?>

		<div class="widget kd-posts-list">
           <div class="widget-inner">
			    <?php
				$q = new WP_Query( array(
				    'post_type'     => 'post',
				    'posts_per_page'=> ($instance['count']) ? $instance['count'] : '3',
				    'order'			=> ($instance['posts_order']) ? $instance['posts_order'] : 'DESC',
				    'orderby' => 'date'
				));

				if( $q->have_posts() ):
				while( $q->have_posts() ):$q->the_post();
				?>
              <div class="item clearfix">
              	<?php if(has_post_thumbnail()): ?>
                <div class="image" style="background-image: url(<?php the_post_thumbnail_url(); ?>); ">
                    <img src="<?php the_post_thumbnail_url(); ?>" alt="The basis of friendship is sharing">
                </div>
                 <?php endif; ?>

                 <div class="widget-item-content">
                    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                    <div class="post-details">
                        <a href="<?php the_permalink(); ?>" class="post-date"><?php the_time('F j, Y'); ?></a>
                    </div>
                </div>

              </div>
              <?php endwhile; endif; wp_reset_query(); ?>	
           </div>
        </div>

		<?php echo $after_widget; ?>

		<?php
	}



	public function form($instance){
		$title = ! empty( $instance['title'] ) ? $instance['title'] : '';
		$count = ! empty( $instance['count'] ) ? $instance['count'] : esc_html__( '3', 'stcore' );
		$posts_order = ! empty( $instance['posts_order'] ) ? $instance['posts_order'] : esc_html__( 'DESC', 'stcore' );
		$choose_style = ! empty( $instance['choose_style'] ) ? $instance['choose_style'] : esc_html__( 'style_1', 'stcore' );
	?>
		<p>
			<label for="<?php echo $this->get_field_id('title'); ?>">Title</label>
			<input type="text" name="<?php echo $this->get_field_name('title'); ?>" id="<?php echo $this->get_field_id('title'); ?>" value="<?php echo esc_attr( $title ); ?>" class="widefat">
		</p>

		<p>
			<label for="<?php echo $this->get_field_id('count'); ?>">How many posts you want to show ?</label>
			<input type="number" name="<?php echo $this->get_field_name('count'); ?>" id="<?php echo $this->get_field_id('count'); ?>" value="<?php echo esc_attr( $count ); ?>" class="widefat">
		</p>

		<p>
			<label for="<?php echo $this->get_field_id('posts_order'); ?>">Posts Order</label>
			<select name="<?php echo $this->get_field_name('posts_order'); ?>" id="<?php echo $this->get_field_id('posts_order'); ?>" class="widefat">
				<option value="" disabled="disabled">Select Post Order</option>
				<option value="ASC" <?php if($posts_order === 'ASC'){ echo 'selected="selected"'; } ?>>ASC</option>
				<option value="DESC" <?php if($posts_order === 'DESC'){ echo 'selected="selected"'; } ?>>DESC</option>
			</select>
		</p>

	<?php }


}

add_action('widgets_init', function(){
	register_widget('ST_Post_Sidebar_Widget');
});
