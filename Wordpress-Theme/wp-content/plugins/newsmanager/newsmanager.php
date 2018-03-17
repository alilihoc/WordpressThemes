<?php
/*
Plugin Name: News Manager
Description: Plugin de newsletter
version: 0.0.1
Author: Hocine A.
*/

class NewsmanagerPlugin
{

	public function __construct() {
		require_once (plugin_dir_path(__FILE__) .'/newsmanager_widget.php');
		require_once (plugin_dir_path(__FILE__) .'/newsmanager_adminpage.php');
		add_action('widgets_init', function(){
			register_widget('NewsmanagerWidget');
		});

		add_action('wp_loaded', [$this, 'addNewEmail']);

		new NewsmanagerAdmin();

		add_shortcode('newsmanager_form', [$this, 'shortCodeAction']);
	}

	public static function pluginActivation(){
		global $wpdb;
		$wpdb -> query('CREATE TABLE IF NOT EXISTS ' . $wpdb->prefix
		               .'newsmanager_emails (id INT AUTO_INCREMENT PRIMARY KEY, email VARCHAR(320) NOT NULL)');

	}

	public static function pluginUninstall(){
		global $wpdb;
		$wpdb->query('DROP TABLE IF NOT EXISTS ' . $wpdb->prefix . 'newsmanager_emails');
	}

	public function addNewEmail(){

		if ( isset($_POST['news_manager_email']) ){
			if (filter_var($_POST['news_manager_email'], FILTER_VALIDATE_EMAIL)){

				global $wpdb;
				$checkIfExists = $wpdb -> get_var(
					$wpdb -> prepare('SELECT COUNT(*) FROM '. $wpdb->prefix .'newsmanager_emails WHERE email = %s', $_POST['news_manager_email'])
				);

				if ($checkIfExists == 0){
					$wpdb -> query(
					    $wpdb -> prepare('INSERT into ' . $wpdb->prefix . 'newsmanager_emails (email) VALUES(%s)', $_POST['news_manager_email'])
					);
					$this->displayMsg('Vous inscription a bien été prise en compte');

				} else {
					$this->displayMsg('Attention ! Adresse mail déjà inscrite');
				}
			} else {
				$this->displayMsg('Veuillez entrer un email valide !');
			}
		}
	}

	public function displayMsg($msg){
		add_action('wp_enqueue_scripts', function() use($msg){
			?>
			<script>
				document.addEventListener
				('DOMContentLoaded', function (){
					alert('<?= $msg ?>')
                })
			</script>
			<?php
		});
	}

	public function shortCodeAction(){
		the_widget('NewsmanagerWidget');
	}


}

register_activation_hook(__FILE__, ['NewsmanagerPlugin','pluginActivation']);
register_uninstall_hook(__FILE__,  ['NewsmanagerPlugin','pluginUninstall']);
add_action('plugins_loaded', function (){
	new NewsmanagerPlugin();
});