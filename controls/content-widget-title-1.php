<?php
/**
 * Title 1 Widget controls
 *
 * This template can be overridden by copying it to yourtheme/spacious-toolkit/controls/content-widget-title-1.php.
 *
 * HOWEVER, on occasion Spacious Toolkit will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see      http://docs.themegrill.com/spacious-toolkit/template-structure/
 * @extends  SPT_TITLE_1
 * @extends  Scheme_Color
 * @version  1.0.0
 * @package  Spacious_Toolkit/Widgets
 * @category Widgets
 * @author   ThemeGrill
 *
 * @var $instance SPT_TITLE_1
 */

use Elementor\SPT_TITLE_1;
use Elementor\Controls_Manager;
use ELementor\Group_Control_Typography;
use Elementor\Scheme_Typography;
use ELementor\Group_Control_Border;
use Elementor\Scheme_Color;

// Exit if it is accessed directly
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// Widget title section
$instance->start_controls_section(
	'section_text_title',
	array(
		'label' => esc_html__( 'Title 1', 'spacious-toolkit' ),
	)
);

// Title
$instance->add_control(
	'title',
	array(
		'label'   => esc_html__( 'Title', 'spacious-toolkit' ),
		'type'    => Controls_Manager::TEXT,
		'default' => esc_html__( 'Section title', 'spacious-toolkit' ),
	)
);

// Content
$instance->add_control(
	'description',
	array(
		'label'   => esc_html__( 'Description', 'spacious-toolkit' ),
		'type'    => Controls_Manager::TEXTAREA,
		'default' => esc_html__( 'Some description about the section.', 'spacious-toolkit' ),
	)
);

$instance->add_control(
	'alignment',
	array(
		'label'   => esc_html__( 'Alignment', 'spacious-toolkit' ),
		'type'    => Controls_Manager::CHOOSE,
		'default' => 'left',
		'options' => array(
			'left'   => array(
				'icon' => 'fa fa-align-left',
			),
			'center' => array(
				'icon' => 'fa fa-align-center',
			),
			'right'  => array(
				'icon' => 'fa fa-align-right',
			),

		),
	)
);

$instance->end_controls_section();

// Widget style section
$instance->start_controls_section(
	'section_title_style',
	array(
		'label' => esc_html__( 'Styles', 'spacious-toolkit' ),
		'tab'   => Controls_Manager::TAB_STYLE,
	)
);

$instance->add_control(
	'style',
	array(
		'label'   => esc_html__( 'Styles', 'spacious-toolkit' ),
		'type'    => Controls_Manager::SELECT,
		'default' => 'style_one',
		'options' => array(
			'style_one'   => esc_html__( 'Style 1', 'spacious-toolkit' ),
			'style_two'   => esc_html__( 'Style 2', 'spacious-toolkit' ),
			'style_three' => esc_html__( 'Style 3', 'spacious-toolkit' ),
		),
	)
);

$instance->end_controls_section();

// Title Style
$instance->start_controls_section(
	'section_styling_title',
	array(
		'label' => __( 'Title', 'spacious' ),
		'tab'   => \Elementor\Controls_Manager::TAB_STYLE,
	)
);

$instance->add_control(
	'title_color',
	array(
		'label'     => esc_html__( 'Color', 'spacious' ),
		'type'      => Controls_Manager::COLOR,
		'default'   => '#444444',
		'scheme'    => array(
			'type'  => Scheme_Color::get_type(),
			'value' => Scheme_Color::COLOR_1,
		),
		'selectors' => array(
			'{{WRAPPER}} .spacious-title .widget-title' => 'color: {{VALUE}}',
		),
	)
);

$instance->add_group_control(
	Group_Control_Typography::get_type(),
	array(
		'name'     => 'title_typography',
		'label'    => __( 'Typography', 'spacious' ),
		'scheme'   => Scheme_Typography::TYPOGRAPHY_1,
		'selector' => '{{WRAPPER}} .spacious-title .widget-title',
	)
);

$instance->end_controls_section();

// Description Style
$instance->start_controls_section(
	'section_styling_description',
	array(
		'label' => __( 'Description', 'spacious' ),
		'tab'   => \Elementor\Controls_Manager::TAB_STYLE,
	)
);

$instance->add_control(
	'description_color',
	array(
		'label'     => esc_html__( 'Color', 'spacious' ),
		'type'      => Controls_Manager::COLOR,
		'default'   => '#999999',
		'scheme'    => array(
			'type'  => Scheme_Color::get_type(),
			'value' => Scheme_Color::COLOR_1,
		),
		'selectors' => array(
			'{{WRAPPER}} .spacious-title .widget-desc' => 'color: {{VALUE}}',
		),
	)
);

$instance->add_group_control(
	Group_Control_Typography::get_type(),
	array(
		'name'     => 'description_typography',
		'label'    => __( 'Typography', 'spacious' ),
		'scheme'   => Scheme_Typography::TYPOGRAPHY_1,
		'selector' => '{{WRAPPER}} .spacious-title .widget-desc',
	)
);

$instance->end_controls_section();

// Divider Style
$instance->start_controls_section(
	'section_styling_divider',
	array(
		'label' => __( 'Divider', 'spacious' ),
		'tab'   => \Elementor\Controls_Manager::TAB_STYLE,
	)
);

$instance->add_control(
	'divider_color',
	array(
		'label'     => esc_html__( 'Color', 'spacious' ),
		'type'      => Controls_Manager::COLOR,
		'default'   => '#999999',
		'scheme'    => array(
			'type'  => Scheme_Color::get_type(),
			'value' => Scheme_Color::COLOR_1,
		),
		'selectors' => array(
			'{{WRAPPER}} .spacious-title.style_two .widget-title::after' => 'background-color: {{VALUE}}',
			'{{WRAPPER}} .spacious-title.style_three .widget-desc span::after' => 'background-color: {{VALUE}}',
		),
	)
);

$instance->end_controls_section();
