<?php
/*
Plugin Name: plugCustom
Plugin URI: http://CustomPlug.com
Description: Un plugin d'introduction pour le développement sous WordPress
Version: 0.1
Author: Ny Avo Kevin
License: GPL2
*/

add_action("widgets_init",'exemple_init');

function exemple_init(){
	register_widget("widget_exemple");
}

class widget_exemple extends WP_Widget{

	function widget_exemple(){
		
		$control = array(
			"width"=>1000,
			"height"=>500
		);


		$this->WP_widget("widget-exemple","Widget Exemple");

	}

	function widget($args, $instance){
		extract($args);
		echo $before_widget;
		echo $before_title.$instance["titre"].$after_title;
		echo $afte_widget;
	}

	function form($instance){
		?>
		<p>
			<label>Titre: </label>
			<input value="<?php echo $instance["titre"]; ?>" name="<?php echo $this->get_field_name("titre"); ?>" type="text"/>
		</p>
		<?php
	}

	function update($new,$old){
		return $new;
	}
}
?>