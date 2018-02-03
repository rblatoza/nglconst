<?php
/**
 * Options.
 *
 * @package nglconst
 */

$default = nglconst_get_default_theme_options();

//Logo Options Setting Starts
$wp_customize->add_setting('site_identity', array(
	'default' 			=> $default['site_identity'],
	'sanitize_callback' => 'nglconst_sanitize_select'        // to be created...
	));

$wp_customize->add_control('site_identity', array(
	'type' 		=> 'radio',
	'label' 	=> esc_html__('Logo Options', 'business-point'),
	'section' 	=> 'title_tagline',
	'choices' 	=> array(
		'logo-only' 	=> esc_html__('Logo Only', 'business-point'),
		'title-text' 	=> esc_html__('Title + Tagline', 'business-point'),
		'logo-desc' 	=> esc_html__('Logo + Tagline', 'business-point')
		)
));

?>