<?php
/**
 * Spacious_Toolkit Elementor CTA 1 Element
 *
 * @author   ThemeGrill
 * @category Elements
 * @package  Spacious_Toolkit/Elements
 * @version  1.0.0
 */

namespace Elementor;

// Exit if it is accessed directly
if ( ! defined( 'ABSPATH' ) ) {
	return;
}

class SPT_CTA_1 extends Widget_Base {

	/**
	 * Retrieve SPT_CTA_1 widget name.
	 *
	 * @access public
	 *
	 * @return string Widget name.
	 */
	public function get_name() {
		return 'SPT-CTA-1';
	}

	/**
	 * Retrieve SPT_CTA_1 widget title.
	 *
	 * @access public
	 *
	 * @return string Widget title.
	 */
	public function get_title() {
		return esc_html__( 'Call to Action 1', 'spacious-toolkit' );
	}

	/**
	 * Retrieve SPT_CTA_1 widget icon.
	 *
	 * @access public
	 *
	 * @return string Widget icon.
	 */
	public function get_icon() {
		return 'spacious-econs-cta-1';
	}

	/**
	 * Retrieve the list of categories the SPT_CTA_1 widget belongs to.
	 *
	 * Used to determine where to display the widget in the editor.
	 *
	 * @access public
	 *
	 * @return array Widget categories.
	 */
	public function get_categories() {
		return array( 'spacious-toolkit-cta-widgets' );
	}

	/**
	 * Register SPT_CTA_1 widget controls.
	 *
	 * Adds different input fields to allow the user to change and customize the widget settings.
	 *
	 * @access protected
	 */
	protected function _register_controls() {
		$this->add_inline_editing_attributes( 'title' );
		$this->add_inline_editing_attributes( 'content' );
		$this->add_inline_editing_attributes( 'button_text' );
		spacious_get_controls_template( 'content-widget-cta-1.php', $args = array( 'instance' => $this ) );
	}

	/**
	 * Render SPT_CTA_1 widget output on the frontend.
	 *
	 * Written in PHP and used to generate the final HTML.
	 *
	 * @access protected
	 */
	protected function render() {
		spacious_get_template( 'content-widget-cta-1.php', $args = array( 'instance' => $this ) );
	}

	/**
	 * Render SPT_COUNTER_1 widget output in the editor.
	 *
	 * Written as a Backbone JavaScript template and used to generate the live preview.
	 *
	 * @access protected
	 */
	protected function _content_template() {
		spacious_get_preview_template( 'content-widget-cta-1.php', $args = array( 'instance' => $this ) );
	}

}