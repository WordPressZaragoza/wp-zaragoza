<?php 

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
//Pincipal Function
if (!function_exists('EnableGutenbergThemeSupport')) {

	
	add_theme_support( 'align-wide' );
	add_theme_support( 'align-full' );
	
	add_theme_support( 'dark-editor-style' );
	add_theme_support( 'editor-styles' );

	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'responsive-embeds' );


	add_theme_support( 'editor-color-palette', array(
		array(
			'name' => __( 'primary color', 'enable-gutenberg-theme-support' ),
			'slug' => 'egts-primary',
			'color' => esc_attr( get_option( 'egts_option_primary_color' ) ),
		),
		array(
			'name' => __( 'secondary color', 'enable-gutenberg-theme-support' ),
			'slug' => 'egts-secondary',
			'color' => esc_attr( get_option( 'egts_option_secondary_color' ) ),
		),
		array(
			'name' => __( 'tertiary color', 'enable-gutenberg-theme-support' ),
			'slug' => 'egts-tertiary',
			'color' => esc_attr( get_option( 'egts_option_tertiary_color' ) ),
		),
		array(
			'name' => __( 'complementary color 1', 'enable-gutenberg-theme-support' ),
			'slug' => 'egts-quaternary',
			'color' => esc_attr( get_option( 'egts_option_quaternary_color' ) ),
		),
		array(
			'name' => __( 'complementary color 2', 'enable-gutenberg-theme-support' ),
			'slug' => 'egts-quinary',
			'color' => esc_attr( get_option( 'egts_option_quinary_color' ) ),
		),
	) );
	

	add_theme_support( 'editor-font-sizes', array(
		array(
			'name' => __( 'extra small', 'enable-gutenberg-theme-support' ),
			'shortName' => __( 'XS', 'enable-gutenberg-theme-support' ),
			'size' =>  esc_attr( get_option( 'egts_option_xs_size' ) ),
			'slug' => 'extra-small'
		),
		array(
			'name' => __( 'small', 'enable-gutenberg-theme-support' ),
			'shortName' => __( 'S', 'enable-gutenberg-theme-support' ),
			'size' => esc_attr( get_option( 'egts_option_s_size' ) ),
			'slug' => 'small'
		),
		array(
			'name' => __( 'regular', 'enable-gutenberg-theme-support' ),
			'shortName' => __( 'M', 'enable-gutenberg-theme-support' ),
			'size' =>  esc_attr( get_option( 'egts_option_m_size' ) ),
			'slug' => 'regular'
		),
		array(
			'name' => __( 'large', 'enable-gutenberg-theme-support' ),
			'shortName' => __( 'L', 'themeLangDomain' ),
			'size' => esc_attr( get_option( 'egts_option_l_size' ) ),
			'slug' => 'large'
		),
		array(
			'name' => __( 'larger', 'enable-gutenberg-theme-support' ),
			'shortName' => __( 'XL', 'enable-gutenberg-theme-support' ),
			'size' => esc_attr( get_option( 'egts_option_xl_size' ) ),
			'slug' => 'larger'
		)
	) );
	
}