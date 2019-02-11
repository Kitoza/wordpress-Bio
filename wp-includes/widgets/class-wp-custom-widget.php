<?
    class WP_Custom_Widget extends WP_Widget{


        function _construct(){
            parent::_construct(
                //id Widget
                'hstngr_widget',
                //name Widget
                _('Sample Widget','hstngr_widget_domain'),
                //desc
                array('description' => _('Sample Widget','hstngr_widget_domain'))
            )
        }

        public function widget($args, $instance){
            $title = apply_filters('widget_title',$instance['title']);
            echo $args['before_widget'];

            if(!empty($title))
            echo $args['before_title'] . $title . $args['after_title'];

            echo _('Hello from Ny Avo','hstngr_widget_domain');
            echo $args['after_widget'];
        }

        public function form( $instance ) {
            if ( isset( $instance[ 'title' ] ) )
            $title = $instance[ 'title' ];
            else
            $title = __( 'Default Title', 'hstngr_widget_domain' );
            ?>
            <p>
            <label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Title:' ); ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" />
            </p>
            <?php
            }
    } 
?>