<?php // Uninstall Plugin

if (!defined('ABSPATH') && !defined('WP_UNINSTALL_PLUGIN')) exit();

delete_option( 'egts_option_xl_size' );
delete_option( 'egts_option_l_size' );
delete_option( 'egts_option_m_size' );
delete_option( 'egts_option_s_size' );
delete_option( 'egts_option_xs_size' );
delete_option( 'egts_option_primary_color' );
delete_option( 'egts_option_secondary_color' );
delete_option( 'egts_option_tertiary_color' );
delete_option( 'egts_option_quaternary_color' );
delete_option( 'egts_option_quinary_color' );
delete_option( 'egts_max-width-gutenberg-editor-page' );

