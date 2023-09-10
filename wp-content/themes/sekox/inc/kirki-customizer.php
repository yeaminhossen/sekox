<?php
/**
 * sekox customizer
 *
 * @package sekox
 */

// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) {
    exit;
}

/**
 * Added Panels & Sections
 */
function sekox_customizer_panels_sections( $wp_customize ) {

    //Add panel
    $wp_customize->add_panel( 'sekox_customizer', [
        'priority' => 10,
        'title'    => esc_html__( 'Sekox Customizer', 'sekox' ),
    ] );

    /**
     * Customizer Section
     */
    $wp_customize->add_section( 'header_top_setting', [
        'title'       => esc_html__( 'Header Info Setting', 'sekox' ),
        'description' => '',
        'priority'    => 10,
        'capability'  => 'edit_theme_options',
        'panel'       => 'sekox_customizer',
    ] );

    $wp_customize->add_section( 'header_social', [
        'title'       => esc_html__( 'Header Social', 'sekox' ),
        'description' => '',
        'priority'    => 11,
        'capability'  => 'edit_theme_options',
        'panel'       => 'sekox_customizer',
    ] );

    $wp_customize->add_section( 'section_header_logo', [
        'title'       => esc_html__( 'Header Setting', 'sekox' ),
        'description' => '',
        'priority'    => 12,
        'capability'  => 'edit_theme_options',
        'panel'       => 'sekox_customizer',
    ] );

    $wp_customize->add_section( 'blog_setting', [
        'title'       => esc_html__( 'Blog Setting', 'sekox' ),
        'description' => '',
        'priority'    => 13,
        'capability'  => 'edit_theme_options',
        'panel'       => 'sekox_customizer',
    ] );

    $wp_customize->add_section( 'header_side_setting', [
        'title'       => esc_html__( 'Side Info', 'sekox' ),
        'description' => '',
        'priority'    => 14,
        'capability'  => 'edit_theme_options',
        'panel'       => 'sekox_customizer',
    ] );

    $wp_customize->add_section( 'breadcrumb_setting', [
        'title'       => esc_html__( 'Breadcrumb Setting', 'sekox' ),
        'description' => '',
        'priority'    => 15,
        'capability'  => 'edit_theme_options',
        'panel'       => 'sekox_customizer',
    ] );

    $wp_customize->add_section( 'blog_setting', [
        'title'       => esc_html__( 'Blog Setting', 'sekox' ),
        'description' => '',
        'priority'    => 16,
        'capability'  => 'edit_theme_options',
        'panel'       => 'sekox_customizer',
    ] );

    $wp_customize->add_section( 'footer_setting', [
        'title'       => esc_html__( 'Footer Settings', 'sekox' ),
        'description' => '',
        'priority'    => 16,
        'capability'  => 'edit_theme_options',
        'panel'       => 'sekox_customizer',
    ] );

    $wp_customize->add_section( 'color_setting', [
        'title'       => esc_html__( 'Color Setting', 'sekox' ),
        'description' => '',
        'priority'    => 17,
        'capability'  => 'edit_theme_options',
        'panel'       => 'sekox_customizer',
    ] );

    $wp_customize->add_section( '404_page', [
        'title'       => esc_html__( '404 Page', 'sekox' ),
        'description' => '',
        'priority'    => 18,
        'capability'  => 'edit_theme_options',
        'panel'       => 'sekox_customizer',
    ] );

    $wp_customize->add_section( 'tutor_course_settings', [
        'title'       => esc_html__( 'Tutor Course Settings ', 'sekox' ),
        'description' => '',
        'priority'    => 19,
        'capability'  => 'edit_theme_options',
        'panel'       => 'sekox_customizer',
    ] );

    $wp_customize->add_section( 'learndash_course_settings', [
        'title'       => esc_html__( 'Learndash Course Settings ', 'sekox' ),
        'description' => '',
        'priority'    => 20,
        'capability'  => 'edit_theme_options',
        'panel'       => 'sekox_customizer',
    ] );

    $wp_customize->add_section( 'typo_setting', [
        'title'       => esc_html__( 'Typography Setting', 'sekox' ),
        'description' => '',
        'priority'    => 21,
        'capability'  => 'edit_theme_options',
        'panel'       => 'sekox_customizer',
    ] );

    $wp_customize->add_section( 'slug_setting', [
        'title'       => esc_html__( 'Slug Settings', 'sekox' ),
        'description' => '',
        'priority'    => 22,
        'capability'  => 'edit_theme_options',
        'panel'       => 'sekox_customizer',
    ] );
    $wp_customize->add_section( 'tutor_course_settings', [
        'title'       => esc_html__( 'Tutor Course Settings ', 'sekox' ),
        'description' => '',
        'priority'    => 23,
        'capability'  => 'edit_theme_options',
        'panel'       => 'sekox_customizer',
    ] );
}

add_action( 'customize_register', 'sekox_customizer_panels_sections' );

function _header_top_fields( $fields ) {
    $fields[] = [
        'type'     => 'switch',
        'settings' => 'sekox_topbar_switch',
        'label'    => esc_html__( 'Topbar Swicher', 'sekox' ),
        'section'  => 'header_top_setting',
        'default'  => '0',
        'priority' => 10,
        'choices'  => [
            'on'  => esc_html__( 'Enable', 'sekox' ),
            'off' => esc_html__( 'Disable', 'sekox' ),
        ],
    ];

    $fields[] = [
        'type'     => 'switch',
        'settings' => 'sekox_preloader',
        'label'    => esc_html__( 'Preloader On/Off', 'sekox' ),
        'section'  => 'header_top_setting',
        'default'  => '0',
        'priority' => 10,
        'choices'  => [
            'on'  => esc_html__( 'Enable', 'sekox' ),
            'off' => esc_html__( 'Disable', 'sekox' ),
        ],
    ];


    $fields[] = [
        'type'     => 'switch',
        'settings' => 'sekox_backtotop',
        'label'    => esc_html__( 'Back To Top On/Off', 'sekox' ),
        'section'  => 'header_top_setting',
        'default'  => '0',
        'priority' => 10,
        'choices'  => [
            'on'  => esc_html__( 'Enable', 'sekox' ),
            'off' => esc_html__( 'Disable', 'sekox' ),
        ],
    ];

    $fields[] = [
        'type'     => 'switch',
        'settings' => 'sekox_header_right',
        'label'    => esc_html__( 'Header Right On/Off', 'sekox' ),
        'section'  => 'header_top_setting',
        'default'  => '0',
        'priority' => 10,
        'choices'  => [
            'on'  => esc_html__( 'Enable', 'sekox' ),
            'off' => esc_html__( 'Disable', 'sekox' ),
        ],
    ];    

    $fields[] = [
        'type'     => 'switch',
        'settings' => 'sekox_search',
        'label'    => esc_html__( 'Header Search On/Off', 'sekox' ),
        'section'  => 'header_top_setting',
        'default'  => '0',
        'priority' => 10,
        'choices'  => [
            'on'  => esc_html__( 'Enable', 'sekox' ),
            'off' => esc_html__( 'Disable', 'sekox' ),
        ],
    ];

    $fields[] = [
        'type'     => 'switch',
        'settings' => 'sekox_header_lang',
        'label'    => esc_html__( 'language On/Off', 'sekox' ),
        'section'  => 'header_top_setting',
        'default'  => '0',
        'priority' => 10,
        'choices'  => [
            'on'  => esc_html__( 'Enable', 'sekox' ),
            'off' => esc_html__( 'Disable', 'sekox' ),
        ],
    ];

    // button
    $fields[] = [
        'type'     => 'text',
        'settings' => 'sekox_button_text',
        'label'    => esc_html__( 'Button Text', 'sekox' ),
        'section'  => 'header_top_setting',
        'default'  => esc_html__( 'Get A Quote', 'sekox' ),
        'priority' => 10,
        'active_callback' => [
            [
                'setting'  => 'sekox_header_right',
                'operator' => '==',
                'value'    => true,
            ],
        ],
    ];

    $fields[] = [
        'type'     => 'link',
        'settings' => 'sekox_button_link',
        'label'    => esc_html__( 'Button URL', 'sekox' ),
        'section'  => 'header_top_setting',
        'default'  => esc_html__( '#', 'sekox' ),
        'priority' => 10,
        'active_callback' => [
            [
                'setting'  => 'sekox_header_right',
                'operator' => '==',
                'value'    => true,
            ],
        ],
    ];


    // phone
    $fields[] = [
        'type'     => 'text',
        'settings' => 'sekox_phone_num',
        'label'    => esc_html__( 'Phone Number', 'sekox' ),
        'section'  => 'header_top_setting',
        'default'  => esc_html__( '+(088) 234 567 899', 'sekox' ),
        'priority' => 10,
    ];    

    // email
    $fields[] = [
        'type'     => 'text',
        'settings' => 'sekox_mail_id',
        'label'    => esc_html__( 'Mail ID', 'sekox' ),
        'section'  => 'sekox_mail_id',
        'default'  => esc_html__( 'info@sekox.com', 'sekox' ),
        'priority' => 10,
    ];    

    // email
    $fields[] = [
        'type'     => 'text',
        'settings' => 'sekox_address',
        'label'    => esc_html__( 'Address', 'sekox' ),
        'section'  => 'header_top_setting',
        'default'  => esc_html__( 'Moon ave, New York, 2020 NY US', 'sekox' ),
        'priority' => 10,
    ];    

    $fields[] = [
        'type'     => 'text',
        'settings' => 'sekox_address_url',
        'label'    => esc_html__( 'Address URL', 'sekox' ),
        'section'  => 'header_top_setting',
        'default'  => esc_html__( 'https://goo.gl/maps/qzqY2PAcQwUz1BYN9', 'sekox' ),
        'priority' => 10,
    ];    

    // Login
    $fields[] = [
        'type'     => 'text',
        'settings' => 'sekox_acc_button_text',
        'label'    => esc_html__( 'Login', 'sekox' ),
        'section'  => 'header_top_setting',
        'default'  => esc_html__( 'Login', 'sekox' ),
        'priority' => 10,
    ];    

    $fields[] = [
        'type'     => 'text',
        'settings' => 'sekox_acc_button_link',
        'label'    => esc_html__( 'Account URL', 'sekox' ),
        'section'  => 'header_top_setting',
        'default'  => esc_html__( '#', 'sekox' ),
        'priority' => 10,
    ];

    return $fields;

}
add_filter( 'kirki/fields', '_header_top_fields' );

/*
Header Social
 */
function _header_social_fields( $fields ) {
    // header section social
    $fields[] = [
        'type'     => 'text',
        'settings' => 'sekox_topbar_fb_url',
        'label'    => esc_html__( 'Facebook Url', 'sekox' ),
        'section'  => 'header_social',
        'default'  => esc_html__( '#', 'sekox' ),
        'priority' => 10,
    ];

    $fields[] = [
        'type'     => 'text',
        'settings' => 'sekox_topbar_twitter_url',
        'label'    => esc_html__( 'Twitter Url', 'sekox' ),
        'section'  => 'header_social',
        'default'  => esc_html__( '#', 'sekox' ),
        'priority' => 10,
    ];

    $fields[] = [
        'type'     => 'text',
        'settings' => 'sekox_topbar_linkedin_url',
        'label'    => esc_html__( 'Linkedin Url', 'sekox' ),
        'section'  => 'header_social',
        'default'  => esc_html__( '#', 'sekox' ),
        'priority' => 10,
    ];

    $fields[] = [
        'type'     => 'text',
        'settings' => 'sekox_topbar_instagram_url',
        'label'    => esc_html__( 'Instagram Url', 'sekox' ),
        'section'  => 'header_social',
        'default'  => esc_html__( '#', 'sekox' ),
        'priority' => 10,
    ];

    $fields[] = [
        'type'     => 'text',
        'settings' => 'sekox_topbar_youtube_url',
        'label'    => esc_html__( 'Youtube Url', 'sekox' ),
        'section'  => 'header_social',
        'default'  => esc_html__( '#', 'sekox' ),
        'priority' => 10,
    ];


    return $fields;
}
add_filter( 'kirki/fields', '_header_social_fields' );

/*
Header Settings
 */
function _header_header_fields( $fields ) {
    $fields[] = [
        'type'        => 'radio-image',
        'settings'    => 'choose_default_header',
        'label'       => esc_html__( 'Select Header Style', 'sekox' ),
        'section'     => 'section_header_logo',
        'placeholder' => esc_html__( 'Select an option...', 'sekox' ),
        'priority'    => 10,
        'multiple'    => 1,
        'choices'     => [
            'header-style-1'   => get_template_directory_uri() . '/inc/img/header/header-1.png',
            'header-style-2' => get_template_directory_uri() . '/inc/img/header/header-2.png',
            'header-style-3'  => get_template_directory_uri() . '/inc/img/header/header-3.png'
        ],
        'default'     => 'header-style-1',
    ];

    $fields[] = [
        'type'        => 'image',
        'settings'    => 'logo',
        'label'       => esc_html__( 'Header Logo', 'sekox' ),
        'description' => esc_html__( 'Upload Your Logo.', 'sekox' ),
        'section'     => 'section_header_logo',
        'default'     => get_template_directory_uri() . '/assets/img/logo/logo-black.png',
    ];

    $fields[] = [
        'type'        => 'image',
        'settings'    => 'seconday_logo',
        'label'       => esc_html__( 'Header Secondary Logo', 'sekox' ),
        'description' => esc_html__( 'Header Logo Black', 'sekox' ),
        'section'     => 'section_header_logo',
        'default'     => get_template_directory_uri() . '/assets/img/logo/logo.png',
    ];

    $fields[] = [
        'type'        => 'image',
        'settings'    => 'preloader_logo',
        'label'       => esc_html__( 'Preloader Logo', 'sekox' ),
        'description' => esc_html__( 'Upload Preloader Logo.', 'sekox' ),
        'section'     => 'section_header_logo',
        'default'     => get_template_directory_uri() . '/assets/img/logo/favicon.png',
    ];

    return $fields;
}
add_filter( 'kirki/fields', '_header_header_fields' );

/*
Header Side Info
 */
function _header_side_fields( $fields ) {
    // side info settings
    $fields[] = [
        'type'     => 'switch',
        'settings' => 'sekox_side_hide',
        'label'    => esc_html__( 'Side Info On/Off', 'sekox' ),
        'section'  => 'header_side_setting',
        'default'  => '0',
        'priority' => 10,
        'choices'  => [
            'on'  => esc_html__( 'Enable', 'sekox' ),
            'off' => esc_html__( 'Disable', 'sekox' ),
        ],
    ];  
    $fields[] = [
        'type'        => 'image',
        'settings'    => 'sekox_side_logo',
        'label'       => esc_html__( 'Logo Side', 'sekox' ),
        'description' => esc_html__( 'Logo Side', 'sekox' ),
        'section'     => 'header_side_setting',
        'default'     => get_template_directory_uri() . '/assets/img/logo/logo.png',
    ];
    $fields[] = [
        'type'     => 'textarea',
        'settings' => 'sekox_extra_about_text',
        'label'    => esc_html__( 'Side Description Text', 'sekox' ),
        'section'  => 'header_side_setting',
        'default'  => esc_html__( 'But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and will give you a complete account of the system and expound the actual teachings of the great explore', 'sekox' ),
        'priority' => 10,
    ];

    $fields[] = [
        'type'     => 'textarea',
        'settings' => 'sekox_extra_map',
        'label'    => esc_html__( 'Map Address Iframe', 'sekox' ),
        'section'  => 'header_side_setting',
        'default'  => esc_html__( '#', 'sekox' ),
        'priority' => 10,
    ];

    // contact
    $fields[] = [
        'type'     => 'text',
        'settings' => 'sekox_contact_title',
        'label'    => esc_html__( 'Contact Title', 'sekox' ),
        'section'  => 'header_side_setting',
        'default'  => esc_html__( 'Contact Title', 'sekox' ),
        'priority' => 10,
    ];
    $fields[] = [
        'type'     => 'textarea',
        'settings' => 'sekox_extra_address',
        'label'    => esc_html__( 'Office Address', 'sekox' ),
        'section'  => 'header_side_setting',
        'default'  => esc_html__( '12/A, Mirnada City Tower, NYC', 'sekox' ),
        'priority' => 10,
    ];
    $fields[] = [
        'type'     => 'textarea',
        'settings' => 'sekox_extra_phone',
        'label'    => esc_html__( 'Phone Number', 'sekox' ),
        'section'  => 'header_side_setting',
        'default'  => esc_html__( '+0989 7876 9865 9', 'sekox' ),
        'priority' => 10,
    ];

    $fields[] = [
        'type'     => 'textarea',
        'settings' => 'sekox_extra_email',
        'label'    => esc_html__( 'Email ID', 'sekox' ),
        'section'  => 'header_side_setting',
        'default'  => esc_html__( 'info@themepure.net', 'sekox' ),
        'priority' => 10,
    ];
    return $fields;
}
add_filter( 'kirki/fields', '_header_side_fields' );

/*
_header_page_title_fields
 */
function _header_page_title_fields( $fields ) {
    // Breadcrumb Setting
    $fields[] = [
        'type'        => 'image',
        'settings'    => 'breadcrumb_bg_img',
        'label'       => esc_html__( 'Breadcrumb Background Image', 'sekox' ),
        'description' => esc_html__( 'Breadcrumb Background Image', 'sekox' ),
        'section'     => 'breadcrumb_setting',
        'default'     => get_template_directory_uri() . '/assets/img/page-title/page-title.jpg',
    ];
    $fields[] = [
        'type'        => 'color',
        'settings'    => 'sekox_breadcrumb_bg_color',
        'label'       => __( 'Breadcrumb BG Color', 'sekox' ),
        'description' => esc_html__( 'This is a Breadcrumb bg color control.', 'sekox' ),
        'section'     => 'breadcrumb_setting',
        'default'     => '#f4f9fc',
        'priority'    => 10,
    ];

    $fields[] = [
        'type'     => 'switch',
        'settings' => 'breadcrumb_info_switch',
        'label'    => esc_html__( 'Breadcrumb Info switch', 'sekox' ),
        'section'  => 'breadcrumb_setting',
        'default'  => '1',
        'priority' => 10,
        'choices'  => [
            'on'  => esc_html__( 'Enable', 'sekox' ),
            'off' => esc_html__( 'Disable', 'sekox' ),
        ],
    ];

    return $fields;
}
add_filter( 'kirki/fields', '_header_page_title_fields' );

/*
Header Social
 */
function _header_blog_fields( $fields ) {
// Blog Setting
    $fields[] = [
        'type'     => 'switch',
        'settings' => 'sekox_blog_btn_switch',
        'label'    => esc_html__( 'Blog BTN On/Off', 'sekox' ),
        'section'  => 'blog_setting',
        'default'  => '1',
        'priority' => 10,
        'choices'  => [
            'on'  => esc_html__( 'Enable', 'sekox' ),
            'off' => esc_html__( 'Disable', 'sekox' ),
        ],
    ];

    $fields[] = [
        'type'     => 'switch',
        'settings' => 'sekox_blog_cat',
        'label'    => esc_html__( 'Blog Category Meta On/Off', 'sekox' ),
        'section'  => 'blog_setting',
        'default'  => '0',
        'priority' => 10,
        'choices'  => [
            'on'  => esc_html__( 'Enable', 'sekox' ),
            'off' => esc_html__( 'Disable', 'sekox' ),
        ],
    ];

    $fields[] = [
        'type'     => 'switch',
        'settings' => 'sekox_blog_author',
        'label'    => esc_html__( 'Blog Author Meta On/Off', 'sekox' ),
        'section'  => 'blog_setting',
        'default'  => '1',
        'priority' => 10,
        'choices'  => [
            'on'  => esc_html__( 'Enable', 'sekox' ),
            'off' => esc_html__( 'Disable', 'sekox' ),
        ],
    ];
    $fields[] = [
        'type'     => 'switch',
        'settings' => 'sekox_blog_date',
        'label'    => esc_html__( 'Blog Date Meta On/Off', 'sekox' ),
        'section'  => 'blog_setting',
        'default'  => '1',
        'priority' => 10,
        'choices'  => [
            'on'  => esc_html__( 'Enable', 'sekox' ),
            'off' => esc_html__( 'Disable', 'sekox' ),
        ],
    ];
    $fields[] = [
        'type'     => 'switch',
        'settings' => 'sekox_blog_comments',
        'label'    => esc_html__( 'Blog Comments Meta On/Off', 'sekox' ),
        'section'  => 'blog_setting',
        'default'  => '1',
        'priority' => 10,
        'choices'  => [
            'on'  => esc_html__( 'Enable', 'sekox' ),
            'off' => esc_html__( 'Disable', 'sekox' ),
        ],
    ];

    $fields[] = [
        'type'     => 'text',
        'settings' => 'sekox_blog_btn',
        'label'    => esc_html__( 'Blog Button text', 'sekox' ),
        'section'  => 'blog_setting',
        'default'  => esc_html__( 'Read More', 'sekox' ),
        'priority' => 10,
    ];

    $fields[] = [
        'type'     => 'text',
        'settings' => 'breadcrumb_blog_title',
        'label'    => esc_html__( 'Blog Title', 'sekox' ),
        'section'  => 'blog_setting',
        'default'  => esc_html__( 'Blog', 'sekox' ),
        'priority' => 10,
    ];

    $fields[] = [
        'type'     => 'text',
        'settings' => 'breadcrumb_blog_title_details',
        'label'    => esc_html__( 'Blog Details Title', 'sekox' ),
        'section'  => 'blog_setting',
        'default'  => esc_html__( 'Blog Details', 'sekox' ),
        'priority' => 10,
    ];
    return $fields;
}
add_filter( 'kirki/fields', '_header_blog_fields' );

/*
Footer
 */
function _header_footer_fields( $fields ) {
    // Footer Setting
    $fields[] = [
        'type'        => 'radio-image',
        'settings'    => 'choose_default_footer',
        'label'       => esc_html__( 'Choose Footer Style', 'sekox' ),
        'section'     => 'footer_setting',
        'default'     => '5',
        'placeholder' => esc_html__( 'Select an option...', 'sekox' ),
        'priority'    => 10,
        'multiple'    => 1,
        'choices'     => [
            'footer-style-1'   => get_template_directory_uri() . '/inc/img/footer/footer-1.png',
            'footer-style-2' => get_template_directory_uri() . '/inc/img/footer/footer-2.png',
        ],
        'default'     => 'footer-style-1',
    ];

    $fields[] = [
        'type'        => 'select',
        'settings'    => 'footer_widget_number',
        'label'       => esc_html__( 'Widget Number', 'sekox' ),
        'section'     => 'footer_setting',
        'default'     => '4',
        'placeholder' => esc_html__( 'Select an option...', 'sekox' ),
        'priority'    => 10,
        'multiple'    => 1,
        'choices'     => [
            '4' => esc_html__( 'Widget Number 4', 'sekox' ),
            '3' => esc_html__( 'Widget Number 3', 'sekox' ),
            '2' => esc_html__( 'Widget Number 2', 'sekox' ),
        ],
    ];

    $fields[] = [
        'type'        => 'image',
        'settings'    => 'sekox_footer_bg',
        'label'       => esc_html__( 'Footer Background Image.', 'sekox' ),
        'description' => esc_html__( 'Footer Background Image.', 'sekox' ),
        'section'     => 'footer_setting',
    ];

    $fields[] = [
        'type'        => 'color',
        'settings'    => 'sekox_footer_bg_color',
        'label'       => __( 'Footer BG Color', 'sekox' ),
        'description' => esc_html__( 'This is a Footer bg color control.', 'sekox' ),
        'section'     => 'footer_setting',
        'default'     => '#f0f0f2',
        'priority'    => 10,
    ];

    $fields[] = [
        'type'     => 'switch',
        'settings' => 'footer_style_2_switch',
        'label'    => esc_html__( 'Footer Style 2 On/Off', 'sekox' ),
        'section'  => 'footer_setting',
        'default'  => '0',
        'priority' => 10,
        'choices'  => [
            'on'  => esc_html__( 'Enable', 'sekox' ),
            'off' => esc_html__( 'Disable', 'sekox' ),
        ],
    ];    

    $fields[] = [
        'type'     => 'text',
        'settings' => 'sekox_copyright',
        'label'    => esc_html__( 'Copy Right', 'sekox' ),
        'section'  => 'footer_setting',
        'default'  => esc_html__( 'Copyright &copy; 2022 Themeim. All Rights Reserved', 'sekox' ),
        'priority' => 10,
    ];
    return $fields;
}
add_filter( 'kirki/fields', '_header_footer_fields' );

// color
function sekox_color_fields( $fields ) {
    // Color Settings
    $fields[] = [
        'type'        => 'color',
        'settings'    => 'sekox_color_option',
        'label'       => __( 'Theme Color', 'sekox' ),
        'description' => esc_html__( 'This is a Theme color control.', 'sekox' ),
        'section'     => 'color_setting',
        'default'     => '#2b4eff',
        'priority'    => 10,
    ];
    // Color Settings
    $fields[] = [
        'type'        => 'color',
        'settings'    => 'sekox_color_option_2',
        'label'       => __( 'Primary Color', 'sekox' ),
        'description' => esc_html__( 'This is a Primary color control.', 'sekox' ),
        'section'     => 'color_setting',
        'default'     => '#f2277e',
        'priority'    => 10,
    ];
     // Color Settings
    $fields[] = [
        'type'        => 'color',
        'settings'    => 'sekox_color_option_3',
        'label'       => __( 'Secondary Color', 'sekox' ),
        'description' => esc_html__( 'This is a Secondary color control.', 'sekox' ),
        'section'     => 'color_setting',
        'default'     => '#30a820',
        'priority'    => 10,
    ];
     // Color Settings
    $fields[] = [
        'type'        => 'color',
        'settings'    => 'sekox_color_option_3_2',
        'label'       => __( 'Secondary Color 2', 'sekox' ),
        'description' => esc_html__( 'This is a Secondary color 2 control.', 'sekox' ),
        'section'     => 'color_setting',
        'default'     => '#ffb352',
        'priority'    => 10,
    ];
     // Color Settings
    $fields[] = [
        'type'        => 'color',
        'settings'    => 'sekox_color_scrollup',
        'label'       => __( 'ScrollUp Color', 'sekox' ),
        'description' => esc_html__( 'This is a ScrollUp colo control.', 'sekox' ),
        'section'     => 'color_setting',
        'default'     => '#2b4eff',
        'priority'    => 10,
    ];

    return $fields;
}
add_filter( 'kirki/fields', 'sekox_color_fields' );

// 404
function sekox_404_fields( $fields ) {
    // 404 settings
    $fields[] = [
        'type'     => 'text',
        'settings' => 'sekox_error_title',
        'label'    => esc_html__( 'Not Found Title', 'sekox' ),
        'section'  => '404_page',
        'default'  => esc_html__( 'Page not found', 'sekox' ),
        'priority' => 10,
    ];
    $fields[] = [
        'type'     => 'textarea',
        'settings' => 'sekox_error_desc',
        'label'    => esc_html__( '404 Description Text', 'sekox' ),
        'section'  => '404_page',
        'default'  => esc_html__( 'Oops! The page you are looking for does not exist. It might have been moved or deleted', 'sekox' ),
        'priority' => 10,
    ];
    $fields[] = [
        'type'     => 'text',
        'settings' => 'sekox_error_link_text',
        'label'    => esc_html__( '404 Link Text', 'sekox' ),
        'section'  => '404_page',
        'default'  => esc_html__( 'Back To Home', 'sekox' ),
        'priority' => 10,
    ];
    return $fields;
}
add_filter( 'kirki/fields', 'sekox_404_fields' );

// course_settings
function sekox_learndash_fields( $fields ) {

    $fields[] = [
        'type'     => 'number',
        'settings' => 'sekox_learndash_post_number',
        'label'    => esc_html__( 'Learndash Post Per page', 'sekox' ),
        'section'  => 'learndash_course_settings',
        'default'  => 6,
        'priority' => 10,
    ];

    $fields[] = [
        'type'        => 'select',
        'settings'    => 'sekox_learndash_order',
        'label'       => esc_html__( 'Post Order', 'sekox' ),
        'section'     => 'learndash_course_settings',
        'default'     => 'DESC',
        'placeholder' => esc_html__( 'Select an option...', 'sekox' ),
        'priority'    => 10,
        'multiple'    => 1,
        'choices'     => [
            'ASC' => esc_html__( 'ASC', 'sekox' ),
            'DESC' => esc_html__( 'DESC', 'sekox' ),
        ],
    ];

    $fields[] = [
        'type'     => 'switch',
        'settings' => 'sekox_learndash_related',
        'label'    => esc_html__( 'Show Related?', 'sekox' ),
        'section'  => 'learndash_course_settings',
        'default'  => 1,
        'priority' => 10,
        'choices'  => [
            'on'  => esc_html__( 'Enable', 'sekox' ),
            'off' => esc_html__( 'Disable', 'sekox' ),
        ],
    ];

    return $fields;

}

if ( class_exists( 'SFWD_LMS' ) ) {
add_filter( 'kirki/fields', 'sekox_learndash_fields' );
}


// tutor_course_settings
function sekox_tutor_course_fields( $fields ) {
    $fields[] = [
        'type'     => 'switch',
        'settings' => 'sekox_tutor_course_details_author_meta_switch',
        'label'    => esc_html__( 'Tutor Course Details Author Meta', 'sekox' ),
        'section'  => 'tutor_course_settings',
        'default'  => '1',
        'priority' => 10,
        'choices'  => [
            'on'  => esc_html__( 'Enable', 'sekox' ),
            'off' => esc_html__( 'Disable', 'sekox' ),
        ],
    ];    

    $fields[] = [
        'type'     => 'switch',
        'settings' => 'sekox_tutor_course_details_payment_switch',
        'label'    => esc_html__( 'Tutor Course Details Payment', 'sekox' ),
        'section'  => 'tutor_course_settings',
        'default'  => '1',
        'priority' => 10,
        'choices'  => [
            'on'  => esc_html__( 'Enable', 'sekox' ),
            'off' => esc_html__( 'Disable', 'sekox' ),
        ],
    ];

    $fields[] = [
        'type'     => 'switch',
        'settings' => 'sekox_tutor_course_desc_tab_switch',
        'label'    => esc_html__( 'Tutor Course Description Tab Swicher', 'sekox' ),
        'section'  => 'tutor_course_settings',
        'default'  => '1',
        'priority' => 10,
        'choices'  => [
            'on'  => esc_html__( 'Enable', 'sekox' ),
            'off' => esc_html__( 'Disable', 'sekox' ),
        ],
    ];    

    $fields[] = [
        'type'     => 'switch',
        'settings' => 'sekox_tutor_course_curriculum_tab_switch',
        'label'    => esc_html__( 'Tutor Course Curriculum Tab Swicher', 'sekox' ),
        'section'  => 'tutor_course_settings',
        'default'  => '1',
        'priority' => 10,
        'choices'  => [
            'on'  => esc_html__( 'Enable', 'sekox' ),
            'off' => esc_html__( 'Disable', 'sekox' ),
        ],
    ];    

    $fields[] = [
        'type'     => 'switch',
        'settings' => 'sekox_tutor_course_reviews_tab_switch',
        'label'    => esc_html__( 'Tutor Course Reviews Tab Swicher', 'sekox' ),
        'section'  => 'tutor_course_settings',
        'default'  => '1',
        'priority' => 10,
        'choices'  => [
            'on'  => esc_html__( 'Enable', 'sekox' ),
            'off' => esc_html__( 'Disable', 'sekox' ),
        ],
    ];    

    $fields[] = [
        'type'     => 'switch',
        'settings' => 'sekox_tutor_course_instructor_tab_switch',
        'label'    => esc_html__( 'Tutor Course Instructor Tab Swicher', 'sekox' ),
        'section'  => 'tutor_course_settings',
        'default'  => '1',
        'priority' => 10,
        'choices'  => [
            'on'  => esc_html__( 'Enable', 'sekox' ),
            'off' => esc_html__( 'Disable', 'sekox' ),
        ],
    ];
    return $fields;
}

if (  function_exists('tutor') ) {
    add_filter( 'kirki/fields', 'sekox_tutor_course_fields' );
}


/**
 * Added Fields
 */
function sekox_typo_fields( $fields ) {
    // typography settings
    $fields[] = [
        'type'        => 'typography',
        'settings'    => 'typography_body_setting',
        'label'       => esc_html__( 'Body Font', 'sekox' ),
        'section'     => 'typo_setting',
        'default'     => [
            'font-family'    => '',
            'variant'        => '',
            'font-size'      => '',
            'line-height'    => '',
            'letter-spacing' => '0',
            'color'          => '',
        ],
        'priority'    => 10,
        'transport'   => 'auto',
        'output'      => [
            [
                'element' => 'body',
            ],
        ],
    ];

    $fields[] = [
        'type'        => 'typography',
        'settings'    => 'typography_h_setting',
        'label'       => esc_html__( 'Heading h1 Fonts', 'sekox' ),
        'section'     => 'typo_setting',
        'default'     => [
            'font-family'    => '',
            'variant'        => '',
            'font-size'      => '',
            'line-height'    => '',
            'letter-spacing' => '0',
            'color'          => '',
        ],
        'priority'    => 10,
        'transport'   => 'auto',
        'output'      => [
            [
                'element' => 'h1',
            ],
        ],
    ];

    $fields[] = [
        'type'        => 'typography',
        'settings'    => 'typography_h2_setting',
        'label'       => esc_html__( 'Heading h2 Fonts', 'sekox' ),
        'section'     => 'typo_setting',
        'default'     => [
            'font-family'    => '',
            'variant'        => '',
            'font-size'      => '',
            'line-height'    => '',
            'letter-spacing' => '0',
            'color'          => '',
        ],
        'priority'    => 10,
        'transport'   => 'auto',
        'output'      => [
            [
                'element' => 'h2',
            ],
        ],
    ];

    $fields[] = [
        'type'        => 'typography',
        'settings'    => 'typography_h3_setting',
        'label'       => esc_html__( 'Heading h3 Fonts', 'sekox' ),
        'section'     => 'typo_setting',
        'default'     => [
            'font-family'    => '',
            'variant'        => '',
            'font-size'      => '',
            'line-height'    => '',
            'letter-spacing' => '0',
            'color'          => '',
        ],
        'priority'    => 10,
        'transport'   => 'auto',
        'output'      => [
            [
                'element' => 'h3',
            ],
        ],
    ];

    $fields[] = [
        'type'        => 'typography',
        'settings'    => 'typography_h4_setting',
        'label'       => esc_html__( 'Heading h4 Fonts', 'sekox' ),
        'section'     => 'typo_setting',
        'default'     => [
            'font-family'    => '',
            'variant'        => '',
            'font-size'      => '',
            'line-height'    => '',
            'letter-spacing' => '0',
            'color'          => '',
        ],
        'priority'    => 10,
        'transport'   => 'auto',
        'output'      => [
            [
                'element' => 'h4',
            ],
        ],
    ];

    $fields[] = [
        'type'        => 'typography',
        'settings'    => 'typography_h5_setting',
        'label'       => esc_html__( 'Heading h5 Fonts', 'sekox' ),
        'section'     => 'typo_setting',
        'default'     => [
            'font-family'    => '',
            'variant'        => '',
            'font-size'      => '',
            'line-height'    => '',
            'letter-spacing' => '0',
            'color'          => '',
        ],
        'priority'    => 10,
        'transport'   => 'auto',
        'output'      => [
            [
                'element' => 'h5',
            ],
        ],
    ];

    $fields[] = [
        'type'        => 'typography',
        'settings'    => 'typography_h6_setting',
        'label'       => esc_html__( 'Heading h6 Fonts', 'sekox' ),
        'section'     => 'typo_setting',
        'default'     => [
            'font-family'    => '',
            'variant'        => '',
            'font-size'      => '',
            'line-height'    => '',
            'letter-spacing' => '0',
            'color'          => '',
        ],
        'priority'    => 10,
        'transport'   => 'auto',
        'output'      => [
            [
                'element' => 'h6',
            ],
        ],
    ];
    return $fields;
}

add_filter( 'kirki/fields', 'sekox_typo_fields' );


// course_settings
function sekox_course_fields( $fields ) {

    $fields[] = [
        'type'        => 'radio-image',
        'settings'    => 'course_style',
        'label'       => esc_html__( 'Select Course Style', 'sekox' ),
        'section'     => 'tutor_course_settings',
        'default'     => '5',
        'placeholder' => esc_html__( 'Select an option...', 'sekox' ),
        'priority'    => 10,
        'multiple'    => 1,
        'choices'     => [
            'standard'   => get_template_directory_uri() . '/inc/img/course/course-1.jpg',
            'course_with_sidebar' => get_template_directory_uri() . '/inc/img/course/course-2.jpg',
            'course_solid'  => get_template_directory_uri() . '/inc/img/course/course-3.jpg',
        ],
        'default'     => 'standard',
    ];

    $fields[] = [
        'type'     => 'switch',
        'settings' => 'course_search_switch',
        'label'    => esc_html__( 'Show search?', 'sekox' ),
        'section'  => 'tutor_course_settings',
        'default'  => '0',
        'priority' => 10,
        'choices'  => [
            'on'  => esc_html__( 'Enable', 'sekox' ),
            'off' => esc_html__( 'Disable', 'sekox' ),
        ],
        'active_callback' => [
            [
                'setting'  => 'course_with_sidebar',
                'operator' => '==',
                'value'    => true,
            ],
        ],
    ];    

    $fields[] = [
        'type'     => 'switch',
        'settings' => 'course_latest_post_switch',
        'label'    => esc_html__( 'Show latest post?', 'sekox' ),
        'section'  => 'tutor_course_settings',
        'default'  => '0',
        'priority' => 10,
        'choices'  => [
            'on'  => esc_html__( 'Enable', 'sekox' ),
            'off' => esc_html__( 'Disable', 'sekox' ),
        ],
        'active_callback' => [
            [
                'setting'  => 'course_with_sidebar',
                'operator' => '==',
                'value'    => true,
            ],
        ],
    ];    

    $fields[] = [
        'type'     => 'switch',
        'settings' => 'course_category_switch',
        'label'    => esc_html__( 'Show category filter?', 'sekox' ),
        'section'  => 'tutor_course_settings',
        'default'  => '0',
        'priority' => 10,
        'choices'  => [
            'on'  => esc_html__( 'Enable', 'sekox' ),
            'off' => esc_html__( 'Disable', 'sekox' ),
        ],
        'active_callback' => [
            [
                'setting'  => 'course_with_sidebar',
                'operator' => '==',
                'value'    => true,
            ],
        ],
    ];    

    $fields[] = [
        'type'     => 'switch',
        'settings' => 'course_skill_switch',
        'label'    => esc_html__( 'Show skill filter?', 'sekox' ),
        'section'  => 'tutor_course_settings',
        'default'  => '0',
        'priority' => 10,
        'choices'  => [
            'on'  => esc_html__( 'Enable', 'sekox' ),
            'off' => esc_html__( 'Disable', 'sekox' ),
        ],
        'active_callback' => [
            [
                'setting'  => 'course_with_sidebar',
                'operator' => '==',
                'value'    => true,
            ],
        ],
    ];

    return $fields;

}

add_filter( 'kirki/fields', 'sekox_course_fields' );




/**
 * Added Fields
 */
function sekox_slug_setting( $fields ) {
    // slug settings
    $fields[] = [
        'type'     => 'text',
        'settings' => 'sekox_ev_slug',
        'label'    => esc_html__( 'Event Slug', 'sekox' ),
        'section'  => 'slug_setting',
        'default'  => esc_html__( 'ourevent', 'sekox' ),
        'priority' => 10,
    ];

    $fields[] = [
        'type'     => 'text',
        'settings' => 'sekox_port_slug',
        'label'    => esc_html__( 'Portfolio Slug', 'sekox' ),
        'section'  => 'slug_setting',
        'default'  => esc_html__( 'ourportfolio', 'sekox' ),
        'priority' => 10,
    ];

    return $fields;
}

add_filter( 'kirki/fields', 'sekox_slug_setting' );


/**
 * This is a short hand function for getting setting value from customizer
 *
 * @param string $name
 *
 * @return bool|string
 */
function sekox_THEME_option( $name ) {
    $value = '';
    if ( class_exists( 'sekox' ) ) {
        $value = Kirki::get_option( sekox_get_theme(), $name );
    }

    return apply_filters( 'sekox_THEME_option', $value, $name );
}

/**
 * Get config ID
 *
 * @return string
 */
function sekox_get_theme() {
    return 'sekox';
}