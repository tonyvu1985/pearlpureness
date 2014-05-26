<?php
/**
 * Description: Pearpureness footer content 
 * Author: Tony Vu (vuductrung2003@gmail.com)
 */


add_action( 'widgets_init', 'register_pearlpureness_widget' );

/* regiter a widget */
function register_pearlpureness_widget() {
	register_widget( 'Footer_Widget' );
}

class Footer_Widget extends WP_Widget {

	function Footer_Widget() 
/*		$widget_ops = array( 'classname' => 'pearlpureness-footer', 'description' => __('A widget that displays the authors name ', 'example') );
	        $control_ops = array( 'width' => 300, 'height' => 350, 'id_base' => 'example-widget' );{*/
		$this->WP_Widget( 'Footer_Widget', __('Pearlpureness Footer', 'pearlpureness-footer'), $widget_ops, $control_ops );
	}
	
                                
	function widget( $args, $instance ) {
		extract( $args );

		//Our variables from the widget settings.
		$name = $instance['name'];
                $detail = $instance['detail'];
                
		echo $before_widget;

		//Display the name 
		if ($name){
			echo '<span class="txtheading">' . $name . '</span>';
		}

                // Check if textarea is set
                if($detail) {
                      echo '<p class="txtcotent">' . $detail . '</p>';
                }

		echo $after_widget;
	}

	//Update the widget 
	 
	function update( $new_instance, $old_instance ) {
		$instance = $old_instance;

		//Strip tags from title and name to remove HTML 
		$instance['name'] = strip_tags( $new_instance['name']);            
                $instance['detail'] = stripslashes( $new_instance['detail'] );
		return $instance;
	}

	
	function form($instance){

		//Set up some default widget settings.
		$defaults = array('name' => __('Contact Detail', 'pearlpureness-footer'), 'detail' => __('Contact Detail', 'pearlpureness-footer'));
		$instance = wp_parse_args( (array) $instance, $defaults ); ?>
                
		<p>
			<label for="<?php echo $this->get_field_id( 'name' ); ?>"><?php _e('Heading:', 'pearlpureness-footer'); ?></label>
			<input id="<?php echo $this->get_field_id( 'name' ); ?>" name="<?php echo $this->get_field_name('name'); ?>" value="<?php echo $instance['name']; ?>" style="width:100%;" />
		</p>

                
                <p>
                    <label for="<?php echo $this->get_field_id('detail'); ?>"><?php _e('Contact Detail', 'pearlpureness-footer'); ?></label><br/>
                    <textarea rows="4" style="width:100%;" id="<?php echo $this->get_field_id('detail'); ?>" name="<?php echo $this->get_field_name('detail'); ?>" value="<?php echo $instance['detail']; ?>"><?php echo $instance['detail']; ?></textarea>
                </p>
	<?php
	}
}

?>
