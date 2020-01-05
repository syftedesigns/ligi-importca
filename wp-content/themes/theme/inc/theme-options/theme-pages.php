<?php if( ! defined('ABSPATH') ){ return; }

add_filter( 'zn_theme_pages', 'dannys_theme_pages' );
function dannys_theme_pages( $pages ){

	$admin_pages = array();

	/**
	 *	General options
	 */
	$admin_pages['general_options'] =  array(
		'title' =>  'General Options',
		'submenus' => 	array(
			array(
				'slug' => 'general_options',
				'title' =>  'General options'
			),
			array(
				'slug' => 'header_options',
				'title' =>  'Header - General options'
			),
			array(
				'slug' => 'logo_options',
				'title' =>  'Header - Logo options'
			),
			array(
				'slug' => 'nav_options',
				'title' =>  'Header - Navigations Options'
			),
			array(
				'slug' => 'cta_options',
				'title' =>  'Header - Call to action'
			),
			array(
				'slug' => 'head_topbar_options',
				'title' =>  'Header - TopBar Options'
			),
			 array(
				'slug' => 'breadcrumbs_options',
				'title' =>  'Breadcrumbs options'
			),
			array(
				'slug' => 'footer_options',
				'title' =>  'Footer options'
			),
			array(
				'slug' => 'google_analytics',
				'title' =>  'Google Analytics'
			),
			array(
				'slug' => 'recaptcha_options',
				'title' =>  'reCaptcha options'
			),
		)
	);

	$admin_pages['color_options'] = array(
		'title' =>  'Colors',
		'submenus' => 	array()
	);

	$admin_pages['google_font_options'] = array(
		'title' =>  'Fonts Setup',
		'submenus' => 	array(
				array(
					'slug' => 'gfont_setup',
					'title' =>  'Google Fonts setup'
				),
				array(
					'slug' => 'custom_font_setup',
					'title' =>  'Custom Fonts setup'
				),
			)
	);

	$admin_pages['font_options'] = array(
		'title' =>  'Typography',
		'submenus' => 	array()
	);

	$admin_pages['pb_layouts'] = array(
		'title' =>  'Smart Areas',
		'submenus' => 	array(
				array(
					'slug' => 'general_pb_settings',
					'title' => 'General settings'
				),
				array(
					'slug' => 'single_pages_settings',
					'title' => 'Single pages settings'
				),
				array(
					'slug' => 'archive_pages_settings',
					'title' => 'Archive pages settings'
				),
		)
	);

	$admin_pages['unlimited_sidebars'] = array(
		'parent'=>'unlimited_sidebars',
		'title' =>  'Sidebars options',
		'submenus' => 	array(
			array(
				'slug' => 'unlimited_sidebars',
				'title' =>  'Unlimited Sidebars'
			),
			array(
				'slug' => 'sidebar_settings',
				'title' =>  'Sidebar Settings'
			),
		),
	);

	$admin_pages['blog_options'] = array(
		'title' =>  'Blog',
		'submenus' => 	array(
			array(
				'slug' => 'blog_archive_options',
				'title' =>  'Archive options'
			),
			array(
				'slug' => 'single_blog_options',
				'title' =>  'Single blog item options'
			),
		)
	);

	$admin_pages['options_404'] = array(
		'title' =>  '404 Page',
		'submenus' => 	array()
	);

	$admin_pages['advanced_options'] = array(
		'title' =>  'Advanced Options',
		'submenus' => 	array(
			array(
				'slug' => 'advanced_options',
				'title' =>  'Advanced options'
			),
			array(
				'slug' => 'custom_css',
				'title' =>  'Custom css'
			),
			array(
				'slug' => 'custom_js',
				'title' =>  'Custom javascript'
			),
			array(
				'slug' => 'theme_export_import',
				'title' =>  'Import/Export options'
			),
		)
	);



	return array_merge( $pages, $admin_pages );

}
