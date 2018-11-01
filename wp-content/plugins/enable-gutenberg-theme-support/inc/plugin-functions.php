<?php 

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}


function egts_add_style_css(){
	?>
		<style type="text/css">

			/* Color Palette */
			.has-egts-primary-background-color {background-color: <?php echo get_option( 'egts_option_primary_color' );?> ;}
			.has-egts-primary-color {color:  <?php echo get_option( 'egts_option_primary_color' );?> ;}
			.has-egts-secondary-background-color {background-color: <?php echo get_option( 'egts_option_secondary_color' );?> ;}
			.has-egts-secondary-color {color:  <?php echo get_option( 'egts_option_secondary_color' );?> ;}
			.has-egts-tertiary-background-color {background-color: <?php echo get_option( 'egts_option_tertiary_color' );?> ;}
			.has-egts-tertiary-color {color:  <?php echo get_option( 'egts_option_tertiary_color' );?> ;}
			.has-egts-quaternary-background-color {background-color: <?php echo get_option('egts_option_quaternary_color' );?> ;}
			.has-egts-quaternary-color {color:  <?php echo get_option( 'egts_option_quaternary_color' );?> ;}
			.has-egts-quinary-background-color {background-color: <?php echo get_option( 'egts_option_quinary_color' );?> ;}
			.has-egts-quinary-color {color:  <?php echo get_option( 'egts_option_quinary_color' );?> ;}
			
			
			/* Font Size */
			.has-larger-font-size{font-size: <?php echo get_option( 'egts_egts_option_xl_size' );?><?php echo esc_attr (get_option('egts_select_unit_font_size')); ?>;}
			.has-large-font-size{font-size: <?php echo get_option( 'egts_option_l_size' );?><?php echo esc_attr (get_option('egts_select_unit_font_size')); ?>;}
			.has-regular-font-size{font-size: <?php echo get_option( 'egts_option_m_size' );?><?php echo esc_attr (get_option('egts_select_unit_font_size')); ?>;}
			.has-small-font-size{font-size: <?php echo get_option( 'egts_option_s_size' );?><?php echo esc_attr (get_option('egts_select_unit_font_size')); ?>;}
			.has-extra-small-font-size{font-size: <?php echo get_option( 'egts_option_xs_size' );?><?php echo esc_attr (get_option('egts_select_unit_font_size')); ?>;}
			
		</style>
	<?php
}
add_action( 'wp_head', 'egts_add_style_css' );

function egts_add_head_style_css(){
	?>
		<style type="text/css">

			/* Main column width */
			.wp-block {
				max-width: <?php echo get_option( 'egts_max-width-gutenberg-editor-page' );?>px;
			}

			/* Width of "wide" blocks */
			.wp-block[data-align="wide"]{
				max-width: 960px;
			}

			/* Width of "full-wide" blocks */
			.wp-block[data-align="full"]{
				max-width: none;
			}
			/* Font Sizes */
			.has-larger-font-size{font-size: <?php echo get_option( 'egts_option_xl_size' );?><?php echo esc_attr (get_option('egts_select_unit_font_size')); ?>!important;}
			.has-large-font-size{font-size: <?php echo get_option( 'egts_option_l_size' );?><?php echo esc_attr (get_option('egts_select_unit_font_size')); ?>!important;}
			.has-regular-font-size{font-size: <?php echo get_option( 'egts_option_m_size' );?><?php echo esc_attr (get_option('egts_select_unit_font_size')); ?>!important;}
			.has-small-font-size{font-size: <?php echo get_option( 'egts_option_s_size' );?><?php echo esc_attr (get_option('egts_select_unit_font_size')); ?>!important;}
			.has-extra-small-font-size{font-size: <?php echo get_option( 'egts_option_xs_size' );?><?php echo esc_attr (get_option('egts_select_unit_font_size')); ?>!important;}
			</style>
	<?php
}

add_action( 'admin_head', 'egts_add_head_style_css' );

