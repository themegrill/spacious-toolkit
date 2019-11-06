<?php
/**
 * CTA 1 Widget controls
 *
 * This template can be overridden by copying it to yourtheme/spacious-toolkit/controls/content-widget-cta-1.php.
 *
 * HOWEVER, on occasion Spacious Toolkit will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see      http://docs.themegrill.com/spacious-toolkit/template-structure/
 * @extends  SPT_CTA_1
 * @extends  Scheme_Color
 * @version  1.0.0
 * @package  Spacious_Toolkit/Widgets
 * @category Widgets
 * @author   ThemeGrill
 *
 * @var $instance SPT_CTA_1
 */

use Elementor\SPT_CTA_1;
use Elementor\Scheme_Color;
use Elementor\Controls_Manager;
use Elementor\Group_Control_Background;
use ELementor\Group_Control_Typography;
use ELementor\Group_Control_Border;
use Elementor\Scheme_Typography;

// Exit if it is accessed directly
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// Widget title section
$instance->start_controls_section(
	'section_cta_title',
	array(
		'label' => esc_html__( 'Call to Action', 'spacious-toolkit' ),
	)
);

// Title
$instance->add_control(
	'title',
	array(
		'label'   => esc_html__( 'Title', 'spacious-toolkit' ),
		'type'    => Controls_Manager::TEXT,
		'default' => esc_html__( 'Call to Action title', 'spacious-toolkit' ),
	)
);

// Content
$instance->add_control(
	'content',
	array(
		'label'   => esc_html__( 'Content', 'spacious-toolkit' ),
		'type'    => Controls_Manager::TEXTAREA,
		'default' => esc_html__( 'Content goes here.', 'spacious-toolkit' ),
	)
);

// Button Text
$instance->add_control(
	'button_text',
	array(
		'label'   => esc_html__( 'Button Text', 'spacious-toolkit' ),
		'type'    => Controls_Manager::TEXT,
		'default' => esc_html__( 'Click here', 'spacious-toolkit' ),
	)
);

// Button Link
$instance->add_control(
	'button_link',
	array(
		'label'       => esc_html__( 'Button Link', 'spacious-toolkit' ),
		'type'        => Controls_Manager::URL,
		'placeholder' => esc_html__( 'http://site-link.com' ),
	)
);

$instance->end_controls_section();

// Style for CTA box.
$instance->start_controls_section(
	'section_call_to_action_1_style',
	array(
		'label' => __( 'Call To Action Box', 'spacious-toolkit' ),
		'tab'   => \Elementor\Controls_Manager::TAB_STYLE,
	)
);

$instance->add_group_control(
	Group_Control_Background::get_type(),
	array(
		'name'     => 'call_to_action_background',
		'label'    => __( 'Background', 'spacious-toolkit' ),
		'types'    => array( 'classic', 'gradient' ),
		'selector' => '{{WRAPPER}} .call-to-action',
	)
);

$instance->add_group_control(
	Group_Control_Background::get_type(),
	array(
		'name'      => 'call_to_action_background_overlay',
		'label'     => __( 'Background Overlay', 'spacious-toolkit' ),
		'types'     => array( 'classic', 'gradient' ),
		'selector' => '{{WRAPPER}} .call-to-action',
		'condition' => array(
			'background' => array( 'classic' ),
		),
	)
);

$instance->add_responsive_control(
	'call_to_action_box_padding',
	array(
		'label' => __( 'Padding', 'spacious' ),
		'type' => \Elementor\Controls_Manager::DIMENSIONS,
		'size_units' => array( 'px', 'em', '%' ),
		'selectors' => array(
			'{{WRAPPER}} .call-to-action' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
		),
	)
);

$instance->end_controls_section();

// Style for title.
$instance->start_controls_section(
	'section_call_to_action_1_title_style',
	array(
		'label' => __( 'Title', 'spacious-toolkit' ),
		'tab'   => \Elementor\Controls_Manager::TAB_STYLE,
	)
);

$instance->add_control(
	'call_to_action_1_title_color',
	array(
		'label'     => esc_html__( 'Color', 'spacious-toolkit' ),
		'type'      => Controls_Manager::COLOR,
		'default'   => '#424143',
		'scheme'    => array(
			'type'  => Scheme_Color::get_type(),
			'value' => Scheme_Color::COLOR_1,
		),
		'selectors' => array(
			'{{WRAPPER}} .call-to-action .call-to-action__title' => 'color: {{VALUE}}',

		),
	)
);

$instance->add_group_control(
	Group_Control_Typography::get_type(),
	array(
		'name'     => 'call_to_action_1_title_typography',
		'label'    => __( 'Typography', 'spacious' ),
		'scheme'   => Scheme_Typography::TYPOGRAPHY_1,
		'selector' => '{{WRAPPER}} .call-to-action .call-to-action__title',
	)
);

$instance->add_responsive_control(
	'call_to_action_title_padding',
	array(
		'label' => __( 'Padding', 'spacious' ),
		'type' => \Elementor\Controls_Manager::DIMENSIONS,
		'size_units' => array( 'px', 'em', '%' ),
		'selectors' => array(
			'{{WRAPPER}} .call-to-action .call-to-action__title' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
		),
	)
);

$instance->end_controls_section();

// Style for content.
$instance->start_controls_section(
	'section_call_to_action_1_content_style',
	array(
		'label' => __( 'Content', 'spacious-toolkit' ),
		'tab'   => \Elementor\Controls_Manager::TAB_STYLE,
	)
);

$instance->add_control(
	'call_to_action_1_content_color',
	array(
		'label'     => esc_html__( 'Color', 'spacious-toolkit' ),
		'type'      => Controls_Manager::COLOR,
		'default'   => '#67666a',
		'scheme'    => array(
			'type'  => Scheme_Color::get_type(),
			'value' => Scheme_Color::COLOR_1,
		),
		'selectors' => array(
			'{{WRAPPER}} .call-to-action .call-to-action__content' => 'color: {{VALUE}}',

		),
	)
);

$instance->add_group_control(
	Group_Control_Typography::get_type(),
	array(
		'name'     => 'call_to_action_1_content_typography',
		'label'    => __( 'Typography', 'spacious' ),
		'scheme'   => Scheme_Typography::TYPOGRAPHY_1,
		'selector' => '{{WRAPPER}} .call-to-action .call-to-action__content',
	)
);

$instance->end_controls_section();

