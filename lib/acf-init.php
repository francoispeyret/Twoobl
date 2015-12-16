<?php

function twoobl_acf_init()
{
	if( !function_exists( 'acf_get_setting' ) ) {
		echo '<div class="error"><p>'.__('Warning! In order to use Twoobl, you must install ACF.', 'twoobl').'</p></div>';
	}

}

add_action('admin_notices', 'twoobl_acf_init');



if (function_exists('acf_add_options_page'))
{
	acf_add_options_page(
		array(
			'page_title'  => __('Website settings', 'twoobl'),
			'menu_title'  => 'Twoobl',
			'menu_slug'   => 'twoobl',
			'icon_url'    => 'dashicons-admin-settings',
			'position'    => 22
		)
	);

	acf_add_options_sub_page(array(
		'title' => __('Settings', 'twoobl'),
		'parent' => 'twoobl'
	));

	acf_add_options_sub_page(array(
		'title' => __('Home', 'twoobl'),
		'parent' => 'twoobl'
	));

	acf_add_options_sub_page(array(
		'title' => __('Footer', 'twoobl'),
		'parent' => 'twoobl'
	));
}
