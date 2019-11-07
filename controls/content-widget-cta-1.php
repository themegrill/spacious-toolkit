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
use Elementor\Group_Control_Box_Shadow;

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

$instance->add_group_control(
	Group_Control_Border::get_type(),
	array(
		'name'           => 'call_to_action_box_border',
		'selector'       => '{{WRAPPER}} .call-to-action',
		'separator'      => 'before',
		'fields_options' => array(
			'border' => array(
				'default' => 'solid'
			),
			'width'  => array(
				'default' => array(
					'top'    => '1',
					'right'  => '1',
					'bottom' => '1',
					'left'   => '1',
				)
			),
			'color'  => array(
				'default' => '#e5e4e6'
			)
		)
	)
);

$instance->add_responsive_control(
	'call_to_action_box_radius',
	array(
		'label'      => __( 'Border Radius', 'spacious' ),
		'type'       => Controls_Manager::DIMENSIONS,
		'size_units' => array( 'px', '%', 'em' ),
		'selectors'  => array(
			'{{WRAPPER}} .call-to-action' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
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

$instance->add_responsive_control(
	'call_to_action_content_margin',
	array(
		'label' => __( 'Margin', 'spacious' ),
		'type' => \Elementor\Controls_Manager::DIMENSIONS,
		'size_units' => array( 'px', 'em', '%' ),
		'selectors' => array(
			'{{WRAPPER}} .call-to-action .call-to-action__content p' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
		),
	)
);

$instance->end_controls_section();

// Style for Button.
$instance->start_controls_section(
	'section_call_to_action_1_button_style',
	array(
		'label' => __( 'Button', 'spacious-toolkit' ),
		'tab'   => \Elementor\Controls_Manager::TAB_STYLE,
	)
);

$instance->add_responsive_control(
	'call_to_action_button_padding',
	array(
		'label' => __( 'Padding', 'spacious' ),
		'type' => \Elementor\Controls_Manager::DIMENSIONS,
		'size_units' => array( 'px', 'em', '%' ),
		'selectors' => array(
			'{{WRAPPER}} .call-to-action-right .call-to-action__button' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
		),
	)
);

$instance->add_responsive_control(
	'call_to_action_button_margin',
	array(
		'label' => __( 'Margin', 'spacious' ),
		'type' => \Elementor\Controls_Manager::DIMENSIONS,
		'size_units' => array( 'px', 'em', '%' ),
		'selectors' => array(
			'{{WRAPPER}} .call-to-action-right .call-to-action__button' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
		),
	)
);

$instance->add_group_control(
	Group_Control_Typography::get_type(),
	array(
		'name'     => 'call_to_action_1_button_typography',
		'label'    => __( 'Typography', 'spacious' ),
		'scheme'   => Scheme_Typography::TYPOGRAPHY_1,
		'selector' => '{{WRAPPER}} .call-to-action-right .call-to-action__button',
	)
);

$instance->start_controls_tabs(
	'button_style_tabs'
);

$instance->start_controls_tab(
	'style_normal_tab',
	array(
		'label' => __( 'Normal', 'spacious-toolkit' ),
	)
);

$instance->add_control(
	'button_text_color',
	array(
		'label'     => esc_html__( 'Color', 'spacious' ),
		'type'      => Controls_Manager::COLOR,
		'default'   => '#ffffff',
		'scheme'    => array(
			'type'  => Scheme_Color::get_type(),
			'value' => Scheme_Color::COLOR_1,
		),
		'selectors' => array(
			'{{WRAPPER}} .call-to-action-right .call-to-action__button' => 'color: {{VALUE}}',
		),
	)
);

$instance->add_control(
	'button_background_color',
	array(
		'label'     => esc_html__( 'Background', 'spacious' ),
		'type'      => Controls_Manager::COLOR,
		'default'   => '#78b865',
		'scheme'    => array(
			'type'  => Scheme_Color::get_type(),
			'value' => Scheme_Color::COLOR_1,
		),
		'selectors' => array(
			'{{WRAPPER}} .call-to-action-right .call-to-action__button' => 'background-color: {{VALUE}}',
		),
	)
);

$instance->end_controls_tab();

$instance->start_controls_tab(
	'style_hover_tab',
	array(
		'label' => __( 'Hover', 'spacious-toolkit' ),
	)
);

$instance->add_control(
	'button_text_hover_color',
	array(
		'label'     => esc_html__( 'Color', 'spacious' ),
		'type'      => Controls_Manager::COLOR,
		'default'   => '#ffffff',
		'scheme'    => array(
			'type'  => Scheme_Color::get_type(),
			'value' => Scheme_Color::COLOR_1,
		),
		'selectors' => array(
			'{{WRAPPER}} .call-to-action-right .call-to-action__button:hover' => 'color: {{VALUE}}',
		),
	)
);

$instance->add_control(
	'button_background_hover_color',
	array(
		'label'     => esc_html__( 'Background', 'spacious' ),
		'type'      => Controls_Manager::COLOR,
		'default'   => '#78b865',
		'scheme'    => array(
			'type'  => Scheme_Color::get_type(),
			'value' => Scheme_Color::COLOR_1,
		),
		'selectors' => array(
			'{{WRAPPER}} .call-to-action-right .call-to-action__button:hover' => 'background-color: {{VALUE}}',
		),
	)
);

$instance->end_controls_tab();

$instance->end_controls_tabs();

$instance->add_group_control(
	Group_Control_Border::get_type(),
	array(
		'name'      => 'button_border',
		'selector'  => '{{WRAPPER}} .call-to-action-right .call-to-action__button',
		'separator' => 'before',
	)
);

$instance->add_responsive_control(
	'button_radius',
	array(
		'label'      => __( 'Border Radius', 'spacious' ),
		'type'       => Controls_Manager::DIMENSIONS,
		'size_units' => array( 'px', '%', 'em' ),
		'selectors'  => array(
			'{{WRAPPER}} .call-to-action-right .call-to-action__button' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
		),
	)
);

$instance->add_group_control(
	Group_Control_Box_Shadow::get_type(),
	array(
		'name' => 'button_box_shadow',
		'label' => __( 'Box Shadow', 'spacious-toolkit' ),
		'selector' => '{{WRAPPER}} .call-to-action-right .call-to-action__button',
	)
);

$instance->end_controls_section();

