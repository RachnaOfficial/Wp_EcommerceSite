<?php
/**
 * Customize Heading control class.
 *
 * @package awpbusinesspress
 *
 * @see     WP_Customize_Control
 * @access  public
 */

/**
 * Class awpbusinesspress_Customize_Heading_Control
 */
class awpbusinesspress_Customize_Heading_Control extends awpbusinesspress_Customize_Base_Control {

	/**
	 * Customize control type.
	 *
	 * @access public
	 * @var    string
	 */
	public $type = 'awpbusinesspress-heading';

	/**
	 * Renders the Underscore template for this control.
	 *
	 * @see    WP_Customize_Control::print_template()
	 * @access protected
	 * @return void
	 */
	protected function content_template() {
		?>

		<h4>
			<# if ( data.label ) { #><span class="customize-control-title">{{{ data.label }}}</span><# } #>
		</h4>

		<?php
	}

	/**
	 * Render content is still called, so be sure to override it with an empty function in your subclass as well.
	 */
	protected function render_content() {

	}

}
