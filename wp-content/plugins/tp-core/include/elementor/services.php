<?php
namespace TPCore\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;
use \Elementor\Group_Control_Background;
use \Elementor\Group_Control_Image_Size;
use \Elementor\Repeater;
use \Elementor\Utils;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

/**
 * Tp Core
 *
 * Elementor widget for hello world.
 *
 * @since 1.0.0
 */
class TP_Services extends Widget_Base {

    /**
     * Retrieve the widget name.
     *
     * @since 1.0.0
     *
     * @access public
     *
     * @return string Widget name.
     */
    public function get_name() {
        return 'services';
    }

    /**
     * Retrieve the widget title.
     *
     * @since 1.0.0
     *
     * @access public
     *
     * @return string Widget title.
     */
    public function get_title() {
        return __( 'Services', 'tpcore' );
    }

    /**
     * Retrieve the widget icon.
     *
     * @since 1.0.0
     *
     * @access public
     *
     * @return string Widget icon.
     */
    public function get_icon() {
        return 'tp-icon';
    }

    /**
     * Retrieve the list of categories the widget belongs to.
     *
     * Used to determine where to display the widget in the editor.
     *
     * Note that currently Elementor supports only one category.
     * When multiple categories passed, Elementor uses the first one.
     *
     * @since 1.0.0
     *
     * @access public
     *
     * @return array Widget categories.
     */
    public function get_categories() {
        return [ 'tpcore' ];
    }

    /**
     * Retrieve the list of scripts the widget depended on.
     *
     * Used to set scripts dependencies required to run the widget.
     *
     * @since 1.0.0
     *
     * @access public
     *
     * @return array Widget scripts dependencies.
     */
    public function get_script_depends() {
        return [ 'tpcore' ];
    }

    /**
     * Register the widget controls.
     *
     * Adds different input fields to allow the user to change and customize the widget settings.
     *
     * @since 1.0.0
     *
     * @access protected
     */
    protected function register_controls() {

        // layout Panel
        $this->start_controls_section(
            'tp_layout',
            [
                'label' => esc_html__('Design Layout', 'tpcore'),
            ]
        );
        $this->add_control(
            'tp_design_style',
            [
                'label' => esc_html__('Select Layout', 'tpcore'),
                'type' => Controls_Manager::SELECT,
                'options' => [
                    'layout-1' => esc_html__('Layout 1', 'tpcore'),
                    'layout-2' => esc_html__('Layout 2', 'tpcore'),
                    'layout-3' => esc_html__('Layout 3', 'tpcore'),
                ],
                'default' => 'layout-1',
            ]
        );

        $this->end_controls_section();

        // Service group
        $this->start_controls_section(
            'tp_services',
            [
                'label' => esc_html__('Services List', 'tpcore'),
                'description' => esc_html__( 'Control all the style settings from Style tab', 'tpcore' ),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );

        $repeater = new \Elementor\Repeater();

        $repeater->add_control(
            'repeater_condition',
            [
                'label' => __( 'Field condition', 'tpcore' ),
                'type' => Controls_Manager::SELECT,
                'options' => [
                    'style_1' => __( 'Style 1', 'tpcore' ),
                    'style_2' => __( 'Style 2', 'tpcore' ),
                ],
                'default' => 'style_1',
                'frontend_available' => true,
                'style_transfer' => true,
            ]
        );

        $repeater->add_control(
            'tp_service_icon_type',
            [
                'label' => esc_html__('Select Icon Type', 'tpcore'),
                'type' => \Elementor\Controls_Manager::SELECT,
                'default' => 'image',
                'options' => [
                    'image' => esc_html__('Image', 'tpcore'),
                    'icon' => esc_html__('Icon', 'tpcore'),
                ],
            ]
        );

        $repeater->add_control(
            'tp_service_image',
            [
                'label' => esc_html__('Upload Icon Image', 'tpcore'),
                'type' => Controls_Manager::MEDIA,
                'default' => [
                    'url' => Utils::get_placeholder_image_src(),
                ],
                'condition' => [
                    'tp_service_icon_type' => 'image'
                ]

            ]
        );

        if (tp_is_elementor_version('<', '2.6.0')) {
            $repeater->add_control(
                'tp_service_icon',
                [
                    'show_label' => false,
                    'type' => Controls_Manager::ICON,
                    'label_block' => true,
                    'default' => 'fa fa-star',
                    'condition' => [
                        'tp_service_icon_type' => 'icon'
                    ]
                ]
            );
        } else {
            $repeater->add_control(
                'tp_service_selected_icon',
                [
                    'show_label' => false,
                    'type' => Controls_Manager::ICONS,
                    'fa4compatibility' => 'icon',
                    'label_block' => true,
                    'default' => [
                        'value' => 'fas fa-star',
                        'library' => 'solid',
                    ],
                    'condition' => [
                        'tp_service_icon_type' => 'icon'
                    ]
                ]
            );
        }
        $repeater->add_control(
            'tp_service_title', [
                'label' => esc_html__('Title', 'tpcore'),
                'description' => tp_get_allowed_html_desc( 'basic' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('Service Title', 'tpcore'),
                'label_block' => true,
            ]
        );
        $repeater->add_control(
            'tp_service_description',
            [
                'label' => esc_html__('Description', 'tpcore'),
                'description' => tp_get_allowed_html_desc( 'intermediate' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered.',
                'label_block' => true,
            ]
        ); 

        $repeater->add_control(
            'tp_services_link_switcher',
            [
                'label' => esc_html__( 'Add Services link', 'tpcore' ),
                'type' => \Elementor\Controls_Manager::SWITCHER,
                'label_on' => esc_html__( 'Yes', 'tpcore' ),
                'label_off' => esc_html__( 'No', 'tpcore' ),
                'return_value' => 'yes',
                'default' => 'yes',
                'separator' => 'before',
            ]
        );
        $repeater->add_control(
            'tp_services_btn_text',
            [
                'label' => esc_html__('Button Text', 'tpcore'),
                'type' => Controls_Manager::TEXT,
                'default' => esc_html__('Button Text', 'tpcore'),
                'title' => esc_html__('Enter button text', 'tpcore'),
                'label_block' => true,
                'condition' => [
                    'tp_services_link_switcher' => 'yes'
                ],
            ]
        );
        $repeater->add_control(
            'tp_services_link_type',
            [
                'label' => esc_html__( 'Service Link Type', 'tpcore' ),
                'type' => \Elementor\Controls_Manager::SELECT,
                'options' => [
                    '1' => 'Custom Link',
                    '2' => 'Internal Page',
                ],
                'default' => '1',
                'condition' => [
                    'tp_services_link_switcher' => 'yes'
                ]
            ]
        );
        $repeater->add_control(
            'tp_services_link',
            [
                'label' => esc_html__( 'Service Link link', 'tpcore' ),
                'type' => \Elementor\Controls_Manager::URL,
                'dynamic' => [
                    'active' => true,
                ],
                'placeholder' => esc_html__( 'https://your-link.com', 'tpcore' ),
                'show_external' => true,
                'default' => [
                    'url' => '#',
                    'is_external' => false,
                    'nofollow' => false,
                ],
                'condition' => [
                    'tp_services_link_type' => '1',
                    'tp_services_link_switcher' => 'yes',
                ]
            ]
        );
        $repeater->add_control(
            'tp_services_page_link',
            [
                'label' => esc_html__( 'Select Service Link Page', 'tpcore' ),
                'type' => \Elementor\Controls_Manager::SELECT2,
                'label_block' => true,
                'options' => tp_get_all_pages(),
                'condition' => [
                    'tp_services_link_type' => '2',
                    'tp_services_link_switcher' => 'yes',
                ]
            ]
        );
        
        $repeater->add_control(
			'tp_creative_anima_switcher',
			[
				'label' => esc_html__( 'Active Animation', 'plugin-name' ),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Yes', 'tpcore' ),
				'label_off' => esc_html__( 'No', 'tpcore' ),
				'return_value' => 'yes',
				'default' => 'yes',
                'separator' => 'before',
			]
		);

        $repeater->add_control(
            'animation_type',
            [
                'label' => __( 'Animation Type', 'tpcore' ),
                'type' => Controls_Manager::SELECT,
                'options' => [
                    'tpfadeLeft' => __( 'Fade Left', 'tpcore' ),
                    'tpfadeRight' => __( 'Fade Right', 'tpcore' ),
                    'tpfadeUp' => __( 'Fade Up', 'tpcore' ),
                    'tpfadeInDown' => __( 'Fade Down', 'tpcore' ),
                ],
                'default' => 'tpfadeUp',
                'frontend_available' => true,
                'style_transfer' => true,
                'condition' => ['tp_creative_anima_switcher' => 'yes']
            ]
        );
        
        $repeater->add_control(
            'tp_anima_dura', [
                'label' => esc_html__('Animation Duration', 'tpcore'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('0.3s', 'tpcore'),
                'condition' => ['tp_creative_anima_switcher' => 'yes']
            ]
        );
        
        $repeater->add_control(
            'tp_anima_delay', [
                'label' => esc_html__('Animation Delay', 'tpcore'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('0.6s', 'tpcore'),
                'condition' => ['tp_creative_anima_switcher' => 'yes']
            ]
        ); 

        $this->add_control(
            'tp_service_list',
            [
                'label' => esc_html__('Services - List', 'tpcore'),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'default' => [
                    [
                        'tp_service_title' => esc_html__('Business Stratagy', 'tpcore'),
                    ],
                    [
                        'tp_service_title' => esc_html__('Website Development', 'tpcore')
                    ],
                    [
                        'tp_service_title' => esc_html__('Marketing & Reporting', 'tpcore')
                    ]
                ],
                'title_field' => '{{{ tp_service_title }}}',
            ]
        );
        $this->add_responsive_control(
            'tp_service_align',
            [
                'label' => esc_html__( 'Alignment', 'tpcore' ),
                'type' => Controls_Manager::CHOOSE,
                'options' => [
                    'text-left' => [
                        'title' => esc_html__( 'Left', 'tpcore' ),
                        'icon' => 'eicon-text-align-left',
                    ],
                    'text-center' => [
                        'title' => esc_html__( 'Center', 'tpcore' ),
                        'icon' => 'eicon-text-align-center',
                    ],
                    'text-right' => [
                        'title' => esc_html__( 'Right', 'tpcore' ),
                        'icon' => 'eicon-text-align-right',
                    ],
                ],
                'toggle' => true,
                'separator' => 'before',
            ]
        );
        $this->end_controls_section();

        // tp_services_columns_section
        $this->start_controls_section(
            'tp_services_columns_section',
            [
                'label' => esc_html__('Services - Columns', 'tpcore'),
            ]
        );

        $this->add_control(
            'tp_col_for_desktop',
            [
                'label' => esc_html__( 'Columns for Desktop', 'tpcore' ),
                'description' => esc_html__( 'Screen width equal to or greater than 992px', 'tpcore' ),
                'type' => Controls_Manager::SELECT,
                'options' => [
                    12 => esc_html__( '1 Columns', 'tpcore' ),
                    6 => esc_html__( '2 Columns', 'tpcore' ),
                    4 => esc_html__( '3 Columns', 'tpcore' ),
                    3 => esc_html__( '4 Columns', 'tpcore' ),
                    2 => esc_html__( '6 Columns', 'tpcore' ),
                    1 => esc_html__( '12 Columns', 'tpcore' ),
                ],
                'separator' => 'before',
                'default' => '4',
                'style_transfer' => true,
            ]
        );
        $this->add_control(
            'tp_col_for_laptop',
            [
                'label' => esc_html__( 'Columns for Laptop', 'tpcore' ),
                'description' => esc_html__( 'Screen width equal to or greater than 768px', 'tpcore' ),
                'type' => Controls_Manager::SELECT,
                'options' => [
                    12 => esc_html__( '1 Columns', 'tpcore' ),
                    6 => esc_html__( '2 Columns', 'tpcore' ),
                    4 => esc_html__( '3 Columns', 'tpcore' ),
                    3 => esc_html__( '4 Columns', 'tpcore' ),
                    2 => esc_html__( '6 Columns', 'tpcore' ),
                    1 => esc_html__( '12 Columns', 'tpcore' ),
                ],
                'separator' => 'before',
                'default' => '4',
                'style_transfer' => true,
            ]
        );
        $this->add_control(
            'tp_col_for_tablet',
            [
                'label' => esc_html__( 'Columns for Tablet', 'tpcore' ),
                'description' => esc_html__( 'Screen width equal to or greater than 576px', 'tpcore' ),
                'type' => Controls_Manager::SELECT,
                'options' => [
                    12 => esc_html__( '1 Columns', 'tpcore' ),
                    6 => esc_html__( '2 Columns', 'tpcore' ),
                    4 => esc_html__( '3 Columns', 'tpcore' ),
                    3 => esc_html__( '4 Columns', 'tpcore' ),
                    2 => esc_html__( '6 Columns', 'tpcore' ),
                    1 => esc_html__( '12 Columns', 'tpcore' ),
                ],
                'separator' => 'before',
                'default' => '6',
                'style_transfer' => true,
            ]
        );
        $this->add_control(
            'tp_col_for_mobile',
            [
                'label' => esc_html__( 'Columns for Mobile', 'tpcore' ),
                'description' => esc_html__( 'Screen width less than 576px', 'tpcore' ),
                'type' => Controls_Manager::SELECT,
                'options' => [
                    12 => esc_html__( '1 Columns', 'tpcore' ),
                    6 => esc_html__( '2 Columns', 'tpcore' ),
                    4 => esc_html__( '3 Columns', 'tpcore' ),
                    3 => esc_html__( '4 Columns', 'tpcore' ),
                    5 => esc_html__( '5 Columns (For Carousel Item)', 'tpcore' ),
                    2 => esc_html__( '6 Columns', 'tpcore' ),
                    1 => esc_html__( '12 Columns', 'tpcore' ),
                ],
                'separator' => 'before',
                'default' => '12',
                'style_transfer' => true,
            ]
        );

        $this->end_controls_section();

        // TAB_STYLE
        $this->start_controls_section(
            'section_style',
            [
                'label' => __( 'Style', 'tpcore' ),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_control(
            'text_transform',
            [
                'label' => __( 'Text Transform', 'tpcore' ),
                'type' => Controls_Manager::SELECT,
                'default' => '',
                'options' => [
                    '' => __( 'None', 'tpcore' ),
                    'uppercase' => __( 'UPPERCASE', 'tpcore' ),
                    'lowercase' => __( 'lowercase', 'tpcore' ),
                    'capitalize' => __( 'Capitalize', 'tpcore' ),
                ],
                'selectors' => [
                    '{{WRAPPER}} .title' => 'text-transform: {{VALUE}};',
                ],
            ]
        );

        $this->end_controls_section();
    }

    /**
     * Render the widget output on the frontend.
     *
     * Written in PHP and used to generate the final HTML.
     *
     * @since 1.0.0
     *
     * @access protected
     */
    protected function render() {
        $settings = $this->get_settings_for_display();

        ?>

        <?php if ( $settings['tp_design_style']  == 'layout-2' ): 
            $this->add_render_attribute('title_args', 'class', 'sectionTitle__big');
        ?>

         <section class="cta__area">
            <div class="container">
               <div class="cta__inner">
                  <div class="row">
                    <?php foreach ($settings['tp_service_list'] as $key => $item) : 
                        $border = ($key == 0) ? 'cta__item-border pr-110' : '';
                        $item_sec_class = ($key == 1) ? 'pl-85' : '';
                        $btn_class = ($key == 1) ? 'tp-btn tp-btn-4' : 'tp-btn tp-btn-3';
                        // Link
                        if ('2' == $item['tp_services_link_type']) {
                            $link = get_permalink($item['tp_services_page_link']);
                            $target = '_self';
                            $rel = 'nofollow';
                        } else {
                            $link = !empty($item['tp_services_link']['url']) ? $item['tp_services_link']['url'] : '';
                            $target = !empty($item['tp_services_link']['is_external']) ? '_blank' : '';
                            $rel = !empty($item['tp_services_link']['nofollow']) ? 'nofollow' : '';
                        }
                    ?> 
                     <div class="col-xxl-6 col-xl-6 col-lg-6">
                        <div class="cta__item <?php echo esc_attr($border); ?> <?php echo esc_attr($item_sec_class); ?> pt-40 pb-15 d-sm-flex align-items-start">
                           <div class="cta__icon mr-30">
                              <span>
                               <?php if($item['tp_service_icon_type'] !== 'image') : ?>
                                    <?php if (!empty($item['tp_service_icon']) || !empty($item['tp_service_selected_icon']['value'])) : ?>
                                        <span class="keyFeatureBlock__icon">
                                            <?php tp_render_icon($item, 'tp_service_icon', 'tp_service_selected_icon'); ?>
                                        </span>
                                    <?php endif; ?>   
                                <?php else : ?>                                
                                    <?php if (!empty($item['tp_service_image']['url'])): ?>
                                        <span class="keyFeatureBlock__icon">    
                                        <img src="<?php echo $item['tp_service_image']['url']; ?>" alt="<?php echo get_post_meta(attachment_url_to_postid($item['tp_service_image']['url']), '_wp_attachment_image_alt', true); ?>">
                                        </span> 
                                        <?php endif; ?> 
                                <?php endif; ?> 
                              </span>                             
                           </div>

                           <div class="cta__content">
                              <?php if (!empty($item['tp_service_title' ])): ?>
                              <h3 class="cta__title"><?php echo tp_kses($item['tp_service_title' ]); ?></h3>
                              <?php endif; ?> 
                              <?php if (!empty($item['tp_service_description' ])): ?>
                              <p class="keyFeatureBlock__text"><?php echo tp_kses($item['tp_service_description']); ?></p>
                              <?php endif; ?>


                            <?php if (!empty($link)) : ?>
                            <div class="sv-btn">
                                <a target="<?php echo esc_attr($target); ?>" rel="<?php echo esc_attr($rel); ?>" href="<?php echo esc_url($link); ?>" class="<?php echo esc_attr($btn_class); ?>">
                                <?php echo tp_kses($item['tp_services_btn_text']); ?>    
                                </a>
                            </div>
                            <?php endif; ?>
                           </div>

                        </div>
                     </div>
                     <?php endforeach; ?>

                  </div>
               </div>
            </div>
         </section>

        <?php elseif ( $settings['tp_design_style']  == 'layout-3' ): ?>
 

        <?php else: 
            $this->add_render_attribute('title_args', 'class', 'title');
        ?>  

         <section class="features__area">
            <div class="container">
               <div class="features__inner p-relative z-index-1 white-bg">
                  <div class="row">
                    <?php foreach ($settings['tp_service_list'] as $key => $item) : 
                        $border_none = ($key == 2) ? '' : 'features__border-right';
                        // Link
                        if ('2' == $item['tp_services_link_type']) {
                            $link = get_permalink($item['tp_services_page_link']);
                            $target = '_self';
                            $rel = 'nofollow';
                        } else {
                            $link = !empty($item['tp_services_link']['url']) ? $item['tp_services_link']['url'] : '';
                            $target = !empty($item['tp_services_link']['is_external']) ? '_blank' : '';
                            $rel = !empty($item['tp_services_link']['nofollow']) ? 'nofollow' : '';
                        }
                    ?>
                     <div class="col-xl-<?php echo esc_attr($settings['tp_col_for_desktop']); ?> col-lg-<?php echo esc_attr($settings['tp_col_for_laptop']); ?> col-md-<?php echo esc_attr($settings['tp_col_for_tablet']); ?> col-<?php echo esc_attr($settings['tp_col_for_mobile']); ?>">
                        <div class="features__item   d-sm-flex align-items-start white-bg mb-30">
                           <div class="features__icon mr-25">
                                <?php if($item['tp_service_icon_type'] !== 'image') : ?>
                                    <?php if (!empty($item['tp_service_icon']) || !empty($item['tp_service_selected_icon']['value'])) : ?>
                                        <div class="tp-sv-icon">
                                            <?php tp_render_icon($item, 'tp_service_icon', 'tp_service_selected_icon'); ?>
                                        </div>
                                    <?php endif; ?>   
                                <?php else : ?>
                                    <div class="tp-sv-icon">
                                        <?php if (!empty($item['tp_service_image']['url'])): ?>
                                        <img src="<?php echo $item['tp_service_image']['url']; ?>" alt="<?php echo get_post_meta(attachment_url_to_postid($item['tp_service_image']['url']), '_wp_attachment_image_alt', true); ?>">
                                        <?php endif; ?>  
                                    </div>
                                <?php endif; ?>                                 
                           </div>
                           <div class="features__content">
                            <?php if (!empty($item['tp_service_title' ])): ?>
                            <h3 class="features__title">
                                <?php if ($item['tp_services_link_switcher'] == 'yes') : ?>
                                <a href="<?php echo esc_url($link); ?>"><?php echo tp_kses($item['tp_service_title' ]); ?></a>
                                <?php else : ?>
                                    <?php echo tp_kses($item['tp_service_title' ]); ?>
                                <?php endif; ?>
                            </h3>
                            <?php endif; ?> 

                            <?php if (!empty($item['tp_service_description' ])): ?>
                            <p><?php echo tp_kses($item['tp_service_description']); ?></p>
                            <?php endif; ?>


                            <?php if (!empty($link)) : ?>
                            <div class="sv-btn">
                                <a target="<?php echo esc_attr($target); ?>" rel="<?php echo esc_attr($rel); ?>" href="<?php echo esc_url($link); ?>" class="link-btn">
                                <?php echo tp_kses($item['tp_services_btn_text']); ?> <i class="far fa-arrow-right"></i></a>
                            </div>
                            <?php endif; ?>
                           </div>
                        </div>
                     </div>
                     <?php endforeach; ?>
                  </div>
               </div>
            </div>
         </section>


        <?php endif; ?>

        <?php 
    }
}

$widgets_manager->register( new TP_Services() );