<?php
/**
 *	Customizer
 */
if( !function_exists( 'rifto_customizer' ) ) {
	add_action( 'customize_register', 'rifto_customizer' );
	function rifto_customizer( $wp_customize ) {
		$wp_customize->add_setting( 'rifto_headersticky_logo', array('sanitize_callback' => 'esc_url_raw'));
		$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'rifto_headersticky_logo', array(
				'label'    => __( 'Logo (sticky header):', 'rifto' ),
				'section'  => 'zerif_general_section',
				'settings' => 'rifto_headersticky_logo',
				'priority'    => 2,
		)));
	}
}
?>