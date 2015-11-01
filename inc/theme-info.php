<?php
/**
 * Add theme info page
 */

function ft_theme_info() {

	add_theme_page( __( 'Patus WordPress Theme', 'patus' ), __('Theme Info', 'patus'), 'edit_theme_options', 'patus', 'ft_theme_info_page');

}
add_action('admin_menu', 'ft_theme_info');


function ft_theme_info_page() {

	$theme_data = wp_get_theme(); ?>

	<div class="wrap about-wrap theme_info_wrapper">

		<h1><?php printf(__('Welcome to %1s - Version %2s', 'patus'), $theme_data->Name, $theme_data->Version ); ?></h1>
		<div class="about-text"><?php echo $theme_data->Description; ?></div>
		<hr>
		<p>
			<?php printf(__('%1s is proudly brought to you by %2s<span> Follow us on: </strong> %3s %4s</span>', 'patus'),
				$theme_data->Name,
				'<a target="_blank" href="'. esc_url('http://www.famethemes.com/?utm_source=theme_info&utm_medium=text_link&utm_campaign=Theme_Info_Page') .'" title="FameThemes">FameThemes</a>',
				'<a class="fame_social" target="_blank" href="'. esc_url('https://www.facebook.com/famethemes') .'" title="FameThemes on Facebook">' . __('Facebook', 'patus') . '</a>',
				'<a class="fame_social" target="_blank" href="'. esc_url('https://twitter.com/famethemes') .'" title="FameThemes on Twitter">' . __('Twitter', 'patus') . '</a>');
			?>
		</p>
		<hr>

		<div class="theme_info">

			<h3><?php printf(__('Getting started with %s', 'patus'), $theme_data->Name); ?></h3>

			<div class="theme_info_column clearfix">
				<div class="theme_info_left">
					<div class="theme_link">
						<h4><?php _e('Theme Documentation', 'patus'); ?></h4>
						<p class="about"><?php printf(__('Need any help to setup and configure %s? Please have a look at our documentations instructions.', 'patus'), $theme_data->Name); ?></p>
						<p>
							<a href="<?php echo esc_url( __( 'http://www.famethemes.com/themes/patus/', 'patus' ) ); ?>" target="_blank" class="button button-secondary"><?php _e('Online Documentation', 'patus'); ?></a>
						</p>
					</div>
					<div class="theme_link">
						<h4><?php _e('Theme Options', 'patus'); ?></h4>
						<p class="about"><?php printf(__('%s supports the Theme Customizer for all theme settings. Click "Customize" to start customize your site.',  'patus'), $theme_data->Name); ?></p>
						<p>
							<a href="<?php echo admin_url('customize.php'); ?>" class="button button-primary"><?php _e('Customize', 'patus'); ?></a>
						</p>
					</div>
					<div class="theme_link">
						<h4><?php _e('Having Trouble and Need Support?', 'patus'); ?></h4>
						<p class="about"><?php _e('Support for all our themes is conducted through the FameThemes support forums, if you would like to start a new thread over there our staff will take a look at your issue ;) ', 'patus'); ?></p>
						<p>
							<a href="<?php echo esc_url( __( 'http://www.famethemes.com/forums?utm_source=theme_info&utm_medium=text_link&utm_campaign=Theme_Info_Page', 'patus' ) ); ?>" target="_blank" class="button button-secondary"><?php _e('FameThemes Support Forum', 'patus'); ?></a>
						</p>
					</div>
				</div>

				<div class="theme_info_right">

					<img src="<?php echo get_template_directory_uri(); ?>/screenshot.png" alt="Theme Screenshot" />

				</div>
			</div>

		</div>

	</div> <!-- END .theme_info -->

<?php
}
?>