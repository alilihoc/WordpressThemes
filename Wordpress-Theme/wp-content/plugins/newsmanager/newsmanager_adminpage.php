<?php

class NewsmanagerAdmin
{

	public function __construct() {
		add_action('admin_menu', [$this, 'addNewsmanagerMenu']);
	}

	public function addNewsmanagerMenu(){
		$hookID = add_menu_page(
			'Page d\'administration de newsmanager',
			'Newsletter',
			'manage_options',
			'newsmanageradminpage',
			[$this, 'displayMenu'],
			'dashicons-email-alt', // https://developer.wordpress.org/resource/dashicons
			2

		);

		add_action('load-'.$hookID, [$this, 'sendEmails']);
	}

	public function sendEmails(){

		if ( isset($_POST['subject']) && isset($_POST['content']) ){
			if (!preg_match('#^.{3,100}$#', $_POST['subject'])){
				$error = true;
				$this -> displayAdminNotice('Sujet Invalide !');
			}

			if (!preg_match('#^.{3,20000}$#', $_POST['content'])){
				$error = true;
				$this -> displayAdminNotice('Contenu Invalide !');
			}

			if (!isset($error)){
				global $wpdb;
				$emails = $wpdb -> get_results('SELECT email from '.$wpdb->prefix.'newsmanager_emails');
				$sender = 'noreply@localhost.fr';
				$headers = ['From :'.$sender];
				foreach ($emails as $email){
					wp_mail(
						$email->email,
						$_POST['subject'],
						$_POST['content'],
						$headers

					);
				}
				$this -> displayAdminNotice('Messages Envoyés', 'notice-success');
			}
		}
	}

	public function displayAdminNotice($msg, $class = 'notice-error'){
		add_action('admin_notices', function() use ($msg, $class){
			?>
			<div class="notice <?= $class ?>"><?= $msg ?></div>
			<?php
		});
	}

	public function displayMenu(){
		?>
		<h1><?= get_admin_page_title() ?></h1>
		<p> Emails présents dans la base de donnée : <?= $this->getCountEmail() ?></p>

		<form action="" method="post">
			<p>
				<label for="subject"></label>
				<input type="text" name="subject" placeholder="Sujet du mail" id="subject">
			</p>
			<p>
				<label for="content"></label>
				<textarea name="content" id="content" cols="30" rows="10" placeholder="Contenu du mail"></textarea>
			</p>
			<?php submit_button('Envoyer') ?>
		</form>
		<?php
	}

	public function getCountEmail(){
		global $wpdb;
		$countEmail = $wpdb -> get_var('SELECT count(*) FROM '.$wpdb->prefix.'newsmanager_emails');
		return $countEmail;
	}
}