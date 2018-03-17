<?php

class NewsmanagerWidget extends WP_Widget
{

	public function __construct() {
		$options = [
			'classname'   => 'newsmanagerwidgetclass',
			'description' => 'Affichage du formulaire de newsletter'
		];
		parent::__construct( 'newsmanagerwidget', 'Newsletter', $options);
	}

	public function widget($args, $instance) {

		echo $args['before_widget'];
		echo $args['before_title'];
		echo apply_filters('widget_title', $instance['title']);
		echo $args['after_title'];
		?>
		<form action="" method="POST">
			<label for="newsmanageremail"></label>
			<input type="text" id ="newsmanageremail" name="news_manager_email" placeholder="Votre Email">
			<input type="submit">
		</form>
		<?php
		echo $args['after_widget'];
	}

	public function form($instance) {
		if(isset($instance['title'])){
			$title = $instance['title'];
		} else {
			$title = '';
		}
		?>
		<label for="<?= $this->get_field_id('title') ?>">Titre :</label>
		<input type="text" id="<?= $this->get_field_id('title') ?>"
		       value="<?= $title ?>"
		       name="<?= $this->get_field_name('title')?>">
		<?php
	}


}