<?php
/**
 * Team 2 Widget controls
 *
 * This template can be overridden by copying it to yourtheme/spacious-toolkit/controls/content-widget-team-2.php.
 *
 * HOWEVER, on occasion Spacious Toolkit will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see      http://docs.themegrill.com/spacious-toolkit/template-structure/
 * @extends  SPT_TEAM_2
 * @extends  Scheme_Color
 * @version  1.0.0
 * @package  Spacious_Toolkit/Widgets
 * @category Widgets
 * @author   ThemeGrill
 *
 * @var $instance SPT_TEAM_2
 */

use Elementor\SPT_TEAM_2;
use Elementor\Controls_Manager;
use Elementor\Utils;
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
	'section_team_title',
	array(
		'label' => esc_html__( 'Team', 'spacious-toolkit' ),
	)
);

// Member name
$instance->add_control(
	'member_name',
	array(
		'label'   => esc_html__( 'Name', 'spacious-toolkit' ),
		'type'    => Controls_Manager::TEXT,
		'default' => esc_html__( 'Member name', 'spacious-toolkit' ),
	)
);

// Member designation
$instance->add_control(
	'member_designation',
	array(
		'label'   => esc_html__( 'Designation', 'spacious-toolkit' ),
		'type'    => Controls_Manager::TEXT,
		'default' => esc_html__( 'Member designation', 'spacious-toolkit' ),
	)
);

// Member image
$instance->add_control(
	'member_image',
	array(
		'label'   => esc_html__( 'Choose Image', 'spacious-toolkit' ),
		'type'    => Controls_Manager::MEDIA,
		'default' => array(
			'url' => Utils::get_placeholder_image_src(),
		),
	)
);

// Member description
$instance->add_control(
	'member_description',
	array(
		'label'   => esc_html__( 'Description', 'spacious-toolkit' ),
		'type'    => Controls_Manager::TEXTAREA,
		'default' => esc_html__( 'Description of the member goes here.', 'spacious-toolkit' ),
	)
);

$instance->end_controls_section();

// Team two Style.
$instance->start_controls_section(
	'section_team2_box',
	array(
		'label' => __( 'Team Box', 'spacious' ),
		'tab'   => \Elementor\Controls_Manager::TAB_STYLE,
	)
);

$instance->add_control(
	'team2_background_color',
	array(
		'label'     => esc_html__( 'Background', 'spacious' ),
		'type'      => Controls_Manager::COLOR,
		'default'   => 'rgba(120,184,101,0.5)',
		'scheme'    => array(
			'type'  => Scheme_Color::get_type(),
			'value' => Scheme_Color::COLOR_1,
		),
		'selectors' => array(
			'{{WRAPPER}} .team-member__info' => 'background-color: {{VALUE}}',
		),
	)
);

$instance->end_controls_section();

// Name Style
$instance->start_controls_section(
	'section_team2_name',
	array(
		'label' => __( 'Name', 'spacious' ),
		'tab'   => \Elementor\Controls_Manager::TAB_STYLE,
	)
);

$instance->add_control(
	'team_two_name',
	array(
		'label'     => esc_html__( 'Color', 'spacious' ),
		'type'      => Controls_Manager::COLOR,
		'default'   => '#ffffff',
		'scheme'    => array(
			'type'  => Scheme_Color::get_type(),
			'value' => Scheme_Color::COLOR_1,
		),
		'selectors' => array(
			'{{WRAPPER}} .team-member__title' => 'color: {{VALUE}}',
		),
	)
);

$instance->add_group_control(
	Group_Control_Typography::get_type(),
	array(
		'name'     => 'team_two_name_typography',
		'label'    => __( 'Typography', 'spacious' ),
		'scheme'   => Scheme_Typography::TYPOGRAPHY_1,
		'selector' => '{{WRAPPER}} .team-member__title',
	)
);

$instance->end_controls_section();

// Designation Style
$instance->start_controls_section(
	'section_team2_designation',
	array(
		'label' => __( 'Designation', 'spacious' ),
		'tab'   => \Elementor\Controls_Manager::TAB_STYLE,
	)
);

$instance->add_control(
	'team_two_designation',
	array(
		'label'     => esc_html__( 'Color', 'spacious' ),
		'type'      => Controls_Manager::COLOR,
		'default'   => '#ffffff',
		'scheme'    => array(
			'type'  => Scheme_Color::get_type(),
			'value' => Scheme_Color::COLOR_1,
		),
		'selectors' => array(
			'{{WRAPPER}} .team-member__position' => 'color: {{VALUE}}',
		),
	)
);

$instance->add_group_control(
	Group_Control_Typography::get_type(),
	array(
		'name'     => 'team_two_designation_typography',
		'label'    => __( 'Typography', 'spacious' ),
		'scheme'   => Scheme_Typography::TYPOGRAPHY_1,
		'selector' => '{{WRAPPER}} .team-member__position',
	)
);

$instance->end_controls_section();

// Description Style.
$instance->start_controls_section(
	'section_team2_description',
	array(
		'label' => __( 'Description', 'spacious' ),
		'tab'   => \Elementor\Controls_Manager::TAB_STYLE,
	)
);

$instance->add_control(
	'team_two_description',
	array(
		'label'     => esc_html__( 'Color', 'spacious' ),
		'type'      => Controls_Manager::COLOR,
		'default'   => '#ffffff',
		'scheme'    => array(
			'type'  => Scheme_Color::get_type(),
			'value' => Scheme_Color::COLOR_1,
		),
		'selectors' => array(
			'{{WRAPPER}} .team-member__description' => 'color: {{VALUE}}',
		),
	)
);

$instance->add_group_control(
	Group_Control_Typography::get_type(),
	array(
		'name'     => 'team_two_description_typography',
		'label'    => __( 'Typography', 'spacious' ),
		'scheme'   => Scheme_Typography::TYPOGRAPHY_1,
		'selector' => '{{WRAPPER}} .team-member__description',
	)
);

$instance->end_controls_section();
