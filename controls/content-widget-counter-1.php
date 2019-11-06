<?php
/**
 * COUNTER 1 Widget controls
 *
 * This template can be overridden by copying it to yourtheme/spacious-toolkit/controls/content-widget-counter-1.php.
 *
 * HOWEVER, on occasion Spacious Toolkit will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see      http://docs.themegrill.com/spacious-toolkit/template-structure/
 * @extends  SPT_COUNTER_1
 * @extends  Scheme_Color
 * @version  1.0.0
 * @package  Spacious_Toolkit/Widgets
 * @category Widgets
 * @author   ThemeGrill
 *
 * @var $instance SPT_COUNTER_1
 */

use Elementor\SPT_COUNTER_1;
use Elementor\Controls_Manager;
use Elementor\Scheme_Color;
use ELementor\Group_Control_Typography;
use ELementor\Group_Control_Border;
use Elementor\Scheme_Typography;

// Exit if it is accessed directly
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// Widget title section
$instance->start_controls_section(
	'section_counter_title',
	array(
		'label' => esc_html__( 'Counter', 'spacious-toolkit' ),
	)
);

// Icon
$instance->add_control(
	'icon',
	array(
		'label'   => esc_html__( 'Icon', 'spacious-toolkit' ),
		'type'    => Controls_Manager::ICON,
		'default' => 'fa fa-folder',
	)
);

// Starting number
$instance->add_control(
	'starting_number',
	array(
		'label'   => esc_html__( 'Starting number', 'spacious-toolkit' ),
		'type'    => Controls_Manager::NUMBER,
		'default' => 10,
	)
);

// Ending number
$instance->add_control(
	'ending_number',
	array(
		'label'   => esc_html__( 'Ending number', 'spacious-toolkit' ),
		'type'    => Controls_Manager::NUMBER,
		'default' => 100,
	)
);

// Title
$instance->add_control(
	'title',
	array(
		'label'   => esc_html__( 'Title', 'spacious-toolkit' ),
		'type'    => Controls_Manager::TEXT,
		'default' => esc_html__( 'Projects', 'spacious-toolkit' ),
	)
);

$instance->end_controls_section();

// Style for counter 1 icon.
$instance->start_controls_section(
	'section_counter_1_style',
	array(
		'label' => __( 'Icon', 'spacious-toolkit' ),
		'tab'   => \Elementor\Controls_Manager::TAB_STYLE,
	)
);

$instance->add_control(
	'counter_1_icon_color',
	array(
		'label'     => esc_html__( 'Color', 'spacious-toolkit' ),
		'type'      => Controls_Manager::COLOR,
		'default'   => '#78b865',
		'scheme'    => array(
			'type'  => Scheme_Color::get_type(),
			'value' => Scheme_Color::COLOR_1,
		),
		'selectors' => array(
			'{{WRAPPER}} .counter .counter__icon' => 'color: {{VALUE}}',

		),
	)
);

$instance->add_control(
	'counter_1_icon_size',
	array(
		'label' => __( 'Size', 'spacious-toolkit-toolkit' ),
		'type' => Controls_Manager::SLIDER,
		'size_units' => array( 'px', '%' ),
		'range' => array(
			'px' => array(
				'min' => 0,
				'max' => 100,
				'step' => 1,
			),
			'%' => array(
				'min' => 0,
				'max' => 100,
			),
		),
		'default' => array(
			'unit' => 'px',
			'size' => 40,
		),
		'selectors' => array(
			'{{WRAPPER}} .counter .counter__icon' => 'font-size: {{SIZE}}{{UNIT}};',
		),
	)
);

$instance->end_controls_section();

// For number.
$instance->start_controls_section(
	'section_counter_1_number_style',
	array(
		'label' => __( 'Number', 'spacious-toolkit' ),
		'tab'   => \Elementor\Controls_Manager::TAB_STYLE,
	)
);

$instance->add_control(
	'counter_1_number_color',
	array(
		'label'     => esc_html__( 'Color', 'spacious-toolkit' ),
		'type'      => Controls_Manager::COLOR,
		'default'   => '#1e1e1f',
		'scheme'    => array(
			'type'  => Scheme_Color::get_type(),
			'value' => Scheme_Color::COLOR_1,
		),
		'selectors' => array(
			'{{WRAPPER}} .counter .counter__number' => 'color: {{VALUE}}',

		),
	)
);

$instance->add_group_control(
	Group_Control_Typography::get_type(),
	array(
		'name'     => 'counter_1_number_typography',
		'label'    => __( 'Typography', 'spacious-toolkit' ),
		'scheme'   => Scheme_Typography::TYPOGRAPHY_1,
		'selector' => '{{WRAPPER}} .counter .counter__number',
	)
);

$instance->end_controls_section();

// For divider.
$instance->start_controls_section(
	'section_counter_1_divider_style',
	array(
		'label' => __( 'Divider', 'spacious-toolkit' ),
		'tab'   => \Elementor\Controls_Manager::TAB_STYLE,
	)
);

$instance->add_control(
	'counter_1_divider_color',
	array(
		'label'     => esc_html__( 'Color', 'spacious-toolkit' ),
		'type'      => Controls_Manager::COLOR,
		'default'   => '#78b865',
		'scheme'    => array(
			'type'  => Scheme_Color::get_type(),
			'value' => Scheme_Color::COLOR_1,
		),
		'selectors' => array(
			'{{WRAPPER}} .counter .counter__number:before' => 'background: {{VALUE}}',

		),
	)
);

$instance->end_controls_section();

// For titile.
$instance->start_controls_section(
	'section_counter_1_title_style',
	array(
		'label' => __( 'Title', 'spacious-toolkit' ),
		'tab'   => \Elementor\Controls_Manager::TAB_STYLE,
	)
);

$instance->add_control(
	'counter_1_title_color',
	array(
		'label'     => esc_html__( 'Color', 'spacious-toolkit' ),
		'type'      => Controls_Manager::COLOR,
		'default'   => '#807f83',
		'scheme'    => array(
			'type'  => Scheme_Color::get_type(),
			'value' => Scheme_Color::COLOR_1,
		),
		'selectors' => array(
			'{{WRAPPER}} .counter .counter__title' => 'color: {{VALUE}}',

		),
	)
);

$instance->add_group_control(
	Group_Control_Typography::get_type(),
	array(
		'name'     => 'counter_1_title_typography',
		'label'    => __( 'Typography', 'spacious-toolkit' ),
		'scheme'   => Scheme_Typography::TYPOGRAPHY_1,
		'selector' => '{{WRAPPER}} .counter .counter__title',
	)
);

$instance->end_controls_section();
