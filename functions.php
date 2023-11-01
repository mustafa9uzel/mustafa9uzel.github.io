<?php
/**
 * Emilybenson functions and definitions.
 */
add_filter( 'kava-theme/assets-depends/styles', 'emilybenson_styles_depends' );
add_action( 'jet-theme-core/register-config', 'emilybenson_core_config' );
add_action( 'init', 'emilybenson_plugins_wizard_config', 9 );
add_action( 'init', 'emilybenson_data_importer_config', 9 );
add_action( 'tgmpa_register', 'emilybenson_register_required_plugins' );

// Load the theme includes.
add_action( 'after_setup_theme', 'emilybenson_includes', 4 );

/**
 * Loads the theme files supported by themes and template-related functions/classes.
 */
function emilybenson_includes() {

	//	Theme banners
	require_once get_theme_file_path( 'inc/banner-content.php' );
}

/**
 * Enqueue styles.
 */
// function emilybenson_styles_depends( $deps ) {
	
// 	wp_enqueue_style( 'emilybenson-google-fonts', emilybenson_google_fonts_url(), array(), '1.0.0' );

// 	wp_register_style(
// 		'emilybenson-banner',
// 		get_theme_file_uri( 'assets/css/banner.css' ),
// 		array(),
// 		'1.0.0'
// 	);

// 	wp_register_style(
// 		'kava-parent-theme-style',
// 		get_template_directory_uri() . '/style.css',
// 		array(),
// 		kava_theme()->version()
// 	);

// 	$deps = array( 'emilybenson-banner', 'kava-parent-theme-style');

// 	return $deps;
// }

function emilybenson_styles_depends( $deps ) {
	
	wp_register_style(
		'emilybenson-google-fonts',
		emilybenson_google_fonts_url(),
		array(),
		'1.0.0'
	);

	wp_register_style(
		'emilybenson-banner',
		get_theme_file_uri( 'assets/css/banner.css' ),
		array(),
		'1.0.0'
	);

	wp_register_style(
		'kava-parent-theme-style',
		get_template_directory_uri() . '/style.css',
		array(),
		kava_theme()->version()
	);

	$deps = array( 'emilybenson-google-fonts', 'emilybenson-banner', 'kava-parent-theme-style', 'font-awesome' );

	return $deps;
}

/**
 * Register Google Fonts url
 */
function emilybenson_google_fonts_url(){
	
	$google_font_url = add_query_arg( 'family', urlencode( 'Gothic A1:400,700&subset=latin,latin-ext' ), "//fonts.googleapis.com/css" );
    
	return $google_font_url;
}

/**
 * Register JetThemeCore config
 *
 * @param  [type] $manager [description]
 * @return [type]          [description]
 */
function emilybenson_core_config( $manager ) {
	$manager->register_config(
		array(
			'dashboard_page_name' => esc_html__( 'Emilybenson', 'emilybenson' ),
			'library_button'      => false,
			'menu_icon'           => 'dashicons-admin-generic',
			'api'                 => array( 'enabled' => false ),
			'guide'               => array(
				'title'   => __( 'Learn More About Your Theme', 'jet-theme-core' ),
				'links'   => array(
					'documentation' => array(
						'label'  => __('Check documentation', 'jet-theme-core'),
						'type'   => 'primary',
						'target' => '_blank',
						'icon'   => 'dashicons-welcome-learn-more',
						'desc'   => __( 'Get more info from documentation', 'jet-theme-core' ),
						'url'    => 'https://documentation.zemez.io/zemez/index.php?project=magic',
					),
					'knowledge-base' => array(
						'label'  => __('Knowledge Base', 'jet-theme-core'),
						'type'   => 'primary',
						'target' => '_blank',
						'icon'   => 'dashicons-sos',
						'desc'   => __( 'Access the vast knowledge base', 'jet-theme-core' ),
						'url'    => 'https://zemez.io/wordpress/support/knowledge-base',
					),
					'community' => array(
						'label'  => __( 'Community', 'jet-theme-core' ),
						'type'   => 'primary',
						'target' => '_blank',
						'icon'   => 'dashicons-facebook',
						'desc'   => __( 'Join community to stay tuned to the latest news', 'jet-theme-core' ),
						'url'    => 'https://www.facebook.com/groups/ZemezJetCommunity',
					),
					'video-tutorials' => array(
						'label' => __( 'View Video', 'jet-theme-core' ),
						'type'   => 'primary',
						'target' => '_blank',
						'icon'   => 'dashicons-format-video',
						'desc'   => __( 'View video tutorials', 'jet-theme-core' ),
						'url'    => 'https://www.youtube.com/channel/UCPW43un8VFXHe9LxKpR_2Hg',
					),
				),
			)
		)
	);
}
/**
 * Register Jet Plugins Wizards config
 * @return [type] [description]
 */
function emilybenson_plugins_wizard_config() {
	if ( ! is_admin() ) {
		return;
	}
	if ( ! function_exists( 'jet_plugins_wizard_register_config' ) ) {
		return;
	}
	jet_plugins_wizard_register_config( array(
		'license' => array(
			'enabled' => false,
		),
		'plugins' => array(
			'jet-data-importer' => array(
				'name'   => esc_html__( 'Jet Data Importer', 'emilybenson' ),
				'source' => 'remote',
				'path'   => 'https://github.com/ZemezLab/jet-data-importer/archive/master.zip',
				'access' => 'base',
				),			
			'elementor' => array(
				'name'   => esc_html__( 'Elementor', 'emilybenson' ),
				'access' => 'base',
				),
			
			),
		'skins'   => array(
			'base' => array(
				'jet-data-importer',
				),
			'advanced' => array(
				'default' => array(
					'full'  => array(
						'elementor',				
						),
					'lite'  => false,
					'demo'  => 'https://ld-wp73.template-help.com/wordpress_free/prod_25004/v2/',
					'thumb' => get_stylesheet_directory_uri() . '/screenshot.png',
					'name'  => esc_html__( 'Emilybenson', 'emilybenson' ),
					),
				),
			),
		'texts'   => array(
			'theme-name' => esc_html__( 'Emilybenson', 'emilybenson' ),
		)
	) );
}
/**
 * Register Jet Data Importer config
 * @return [type] [description]
 */
function emilybenson_data_importer_config() {
	if ( ! is_admin() ) {
		return;
	}
	if ( ! function_exists( 'jet_data_importer_register_config' ) ) {
		return;
	}
	jet_data_importer_register_config( array(
		'xml' => false,
		'advanced_import' => array(
			'default' => array(
				'label'    => esc_html__( 'Emilybenson', 'emilybenson' ),
				'full'     => get_stylesheet_directory() . '/assets/demo-content/default/default-full.xml',
				'lite'     => false,
				'thumb'    => get_stylesheet_directory_uri() . '/assets/demo-content/default/default-thumb.jpg',
				'demo_url' => 'https://ld-wp73.template-help.com/wordpress_free/prod_25004/v2/',
			),
		),
		'import' => array(
			'chunk_size' => 3,
		),
		'slider' => array(
			'path' => 'https://raw.githubusercontent.com/JetImpex/wizard-slides/master/slides.json',
		),
		'export' => array(
			'options' => array(
				'site_icon',
				'elementor_cpt_support',
				'elementor_disable_color_schemes',
				'elementor_disable_typography_schemes',
				'elementor_container_width',
				'elementor_css_print_method',
				'elementor_global_image_lightbox',
				'jet-elements-settings',
				'jet_menu_options',
				'highlight-and-share',
				'stockticker_defaults',
				'wsl_settings_social_icon_set',
			),

			'tables' => array(),
		),
		'success-links' => array(
			'home' => array(
				'label'  => __('View your site', 'jet-date-importer'),
				'type'   => 'primary',
				'target' => '_self',
				'icon'   => 'dashicons-welcome-view-site',
				'desc'   => __( 'Take a look at your site', 'jet-data-importer' ),
				'url'    => home_url( '/' ),
			),
			'edit' => array(
				'label'  => __('Start editing', 'jet-date-importer'),
				'type'   => 'primary',
				'target' => '_self',
				'icon'   => 'dashicons-welcome-write-blog',
				'desc'   => __( 'Proceed to editing pages', 'jet-data-importer' ),
				'url'    => admin_url( 'edit.php?post_type=page' ),
			),
		),
		'slider' => array(
			'path' => 'https://raw.githubusercontent.com/ZemezLab/kava-emilybenson/master/slides.json',
		),
	) );
}
/**
 * Register Class Tgm Plugin Activation
 */
require_once('inc/classes/class-tgm-plugin-activation.php');
/**
 * Setup Jet Plugins Wizard
 */
function emilybenson_register_required_plugins() {
	$plugins = array(
		array(
			'name'         => esc_html__( 'Jet Plugin Wizard', 'emilybenson' ),
			'slug'         => 'jet-plugins-wizard',
			'source'       => 'https://github.com/ZemezLab/jet-plugins-wizard/archive/master.zip',
			'external_url' => 'https://github.com/ZemezLab/jet-plugins-wizard',
		),
	);
	$config = array(
		'id'           => 'emilybenson',
		'default_path' => '',
		'menu'         => 'tgmpa-install-plugins',
		'has_notices'  => true,
		'dismissable'  => true,
		'dismiss_msg'  => '',
		'is_automatic' => true,
		'message'      => '',
	);
	tgmpa( $plugins, $config );
}

/* 
* Fonts Google Add


add_filter( 'elementor/fonts/additional_fonts', 'add_additional_fonts' );

function add_additional_fonts( $additional_fonts ) {
$additional_fonts[ 'Red Hat Display' ] = 'googlefonts';

return $additional_fonts;
}

*/	
