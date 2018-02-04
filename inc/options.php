<?php
/**
 * Options.
 *
 * @package nglconst
 */

class NGLConst_Info extends WP_Customize_Control {
    public $type = 'info';
    public $label = '';
    public function render_content() {
    ?>
        <h2><?php echo esc_html( $this->label ); ?></h2>
    <?php
    }
}

$default = nglconst_get_default_theme_options();

//Logo Options Setting Starts
$wp_customize->add_setting('site_identity', array(
	'default' 			=> $default['site_identity'],
	'sanitize_callback' => 'nglconst_sanitize_select'        // to be created...
	));

$wp_customize->add_control('site_identity', array(
	'type' 		=> 'radio',
	'label' 	=> esc_html__('Logo Options', 'nglconst'),
	'section' 	=> 'title_tagline',
	'choices' 	=> array(
		'logo-only' 	=> esc_html__('Logo Only', 'nglconst'),
		'title-text' 	=> esc_html__('Title + Tagline', 'nglconst'),
		'logo-desc' 	=> esc_html__('Logo + Tagline', 'nglconst')
		)
));

//Add Theme Options panel
$wp_customize->add_panel('theme_option_panel',
	array(
		'title' 		=> 	esc_html__('Theme Options', 'nglconst'),
		'priority' 		=> 	100,
		'capability'	=>	'edit_theme_options',
	)
);

// Header Section.
$wp_customize->add_section( 'section_header',
	array(
		'title'      => esc_html__( 'Header Options', 'nglconst' ),
		'priority'   => 100,
		'capability' => 'edit_theme_options',
		'panel'      => 'theme_option_panel',
	)
);

// Setting show_top_header.
$wp_customize->add_setting( 'show_top_header',
	array(
		'default'           => $default['show_top_header'],
		'sanitize_callback' => 'nglconst_sanitize_checkbox',
	)
);
$wp_customize->add_control( 'show_top_header',
	array(
		'label'    			=> esc_html__( 'Show Top Header', 'nglconst' ),
		'section'  			=> 'section_header',
		'type'     			=> 'checkbox',
		'priority' 			=> 100,
	)
);

// Address Setting...
$wp_customize->add_setting( 'show_address',
	array(
		'default'			=>	'present address',
		'sanitize_callback'	=>	'sanitize_text_field'
	)
);
$wp_customize->add_control( 'show_address',
	array(
		'label'		=>	esc_html__('Address:', 'nglconst'),
		'section'	=>	'section_header',
		'type'		=>	'text',
		'priority'	=>	100,
	)
);


//Blog posts section..options to display number of blog posts on home page...
// Blog Posts Count Section.
$wp_customize->add_section( 'blog_post_count_section',
	array(
		'title'      => esc_html__( 'Blog Post Count', 'nglconst' ),
		'priority'   => 100,
		'capability' => 'edit_theme_options',
		'panel'      => 'theme_option_panel',
	)
);
// Blog Post Count Setting...
$wp_customize->add_setting( 'blog_post_count',
	array(
		'default'			=>	3,
		'sanitize_callback'	=>	'sanitize_text_field'
	)
);
$wp_customize->add_control( 'blog_post_count',
	array(
		'label'		=>	esc_html__('Blog Posts Count:', 'nglconst'),
		'section'	=>	'blog_post_count_section',
		'type'		=>	'number',
		'priority'	=>	100,
		'sanitize_callback' => 'business_point_sanitize_positive_integer',
	)
);


?>