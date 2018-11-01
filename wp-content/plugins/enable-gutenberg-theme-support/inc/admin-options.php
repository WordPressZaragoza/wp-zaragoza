<?php 

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
//Add theme support options

add_action('admin_menu', 'egts_setup_page');
add_action('admin_init', 'egts_register_settings');

function egts_setup_page() {
    add_menu_page(__("Style Guide"), __("Enable Gutenberg"), "manage_options", __FILE__, 'egts_page_content', 'dashicons-art');
}

function egts_register_settings() {

    // Add options to database if they don't already exist
    add_option("egts_option_xl_size", "", "", "yes");
    add_option("egts_option_l_size", "", "", "yes");
	add_option("egts_option_m_size", "", "", "yes");
	add_option("egts_option_s_size", "", "", "yes");
	add_option("egts_option_xs_size", "", "", "yes");
	add_option("egts_option_primary_color", "", "", "yes");
    add_option("egts_option_secondary_color", "", "", "yes");
	add_option("egts_option_tertiary_color", "", "", "yes");
	add_option("egts_option_quaternary_color", "", "", "yes");
	add_option("egts_option_quinary_color", "", "", "yes");
	add_option("egts_select_unit_font_size", "", "", "yes");
	add_option("egts_max-width-gutenberg-editor-page", "", "", "yes");

    // Register settings that this form is allowed to update
    register_setting('test_settings', 'egts_option_xl_size');
	register_setting('test_settings', 'egts_option_l_size');
	register_setting('test_settings', 'egts_option_m_size');
	register_setting('test_settings', 'egts_option_s_size');
	register_setting('test_settings', 'egts_option_xs_size');
	register_setting('test_settings', 'egts_option_primary_color');
	register_setting('test_settings', 'egts_option_secondary_color');
	register_setting('test_settings', 'egts_option_tertiary_color');
	register_setting('test_settings', 'egts_option_quaternary_color');
	register_setting('test_settings', 'egts_option_quinary_color');
	register_setting('test_settings', 'egts_select_unit_font_size');
	register_setting('test_settings', 'egts_max-width-gutenberg-editor-page');

}


function egts_page_content() {
    if (!current_user_can('manage_options'))
        wp_die(__("You don't have access to this page", 'enable-gutenberg-theme-support'));
    ?>
    <div class="wrap">
		<h2><? esc_html_e("Style Guide Gutenberg", 'enable-gutenberg-theme-support') ?></h2>
		
		<?php settings_errors(); ?>

        <form method="post" action="options.php">

			<?php settings_fields('test_settings'); ?>
			
            <table class="form-table">
				<h3><?php esc_html_e( 'Create your custom Font Sizes', 'enable-gutenberg-theme-support' ); ?></h3>
				<hr>

				<tr valign="top">
                    <th scope="row"><?php esc_html_e( 'Select CSS Unit Font Size', 'enable-gutenberg-theme-support' ); ?></th>
					<td>
						<select name="egts_select_unit_font_size">
							<option value="px" <?php selected (get_option('egts_select_unit_font_size'), "px"); ?>>px</option>
							<option value="em" <?php selected (get_option('egts_select_unit_font_size'), "em"); ?>>em</option>
							<option value="rem" <?php selected (get_option('egts_select_unit_font_size'), "rem");?>>rem</option>
						</select>
					</td>
                </tr>

                <tr valign="top">
                    <th scope="row"><?php esc_html_e( 'XL Font Size', 'enable-gutenberg-theme-support'); ?></th>
                    <td><input type="number" step="any" name="egts_option_xl_size" value="<?php echo esc_attr (get_option('egts_option_xl_size')); ?>" /><?php echo esc_attr (get_option('egts_select_unit_font_size')); ?></td>
                </tr>

                <tr valign="top">
                    <th scope="row"><?php esc_html_e( 'L Font Size', 'enable-gutenberg-theme-support' ); ?></th>
                    <td><input type="number" step="any" name="egts_option_l_size" value="<?php echo esc_attr (get_option('egts_option_l_size')); ?>" /><?php echo esc_attr (get_option('egts_select_unit_font_size')); ?> </td>
                </tr>

                <tr valign="top">
                    <th scope="row"><?php esc_html_e( 'M Font Size', 'enable-gutenberg-theme-support' ); ?></th>
                    <td><input type="number" step="any" name="egts_option_m_size" value="<?php echo esc_attr (get_option('egts_option_m_size')); ?>" /><?php echo esc_attr (get_option('egts_select_unit_font_size')); ?></td>
				</tr>
				<tr valign="top">
                    <th scope="row"><?php esc_html_e( 'S Font Size', 'enable-gutenberg-theme-support' ); ?></th>
                    <td><input type="number" step="any" name="egts_option_s_size" value="<?php echo esc_attr (get_option('egts_option_s_size')); ?>" /><?php echo esc_attr (get_option('egts_select_unit_font_size')); ?></td>
				</tr>
				<tr valign="top">
                    <th scope="row"><?php esc_html_e( 'XS Font Size', 'enable-gutenberg-theme-support' ); ?></th>
                    <td><input type="number" step="any" name="egts_option_xs_size" value="<?php echo esc_attr (get_option('egts_option_xs_size')); ?>" /><?php echo esc_attr (get_option('egts_select_unit_font_size')); ?> </td>
				</tr>
			</table>
			<table class="form-table">
				<h3><?php esc_html_e( 'Create your custom Color Palette', 'enable-gutenberg-theme-support' ); ?></h3>
				<hr>
				<tr valign="top">
                    <th scope="row"><?php esc_html_e( 'Primary Color', 'enable-gutenberg-theme-support' ); ?></th>
                    <td><input type="text" name="egts_option_primary_color" value="<?php echo esc_attr (get_option('egts_option_primary_color')); ?>" class="my-color-field" data-default-color="#effeff" /></td>
				</tr>
				<tr valign="top">
                    <th scope="row"><?php esc_html_e( 'Secondary Color', 'enable-gutenberg-theme-support' ); ?></th>
                    <td><input type="text" name="egts_option_secondary_color" value="<?php echo esc_attr (get_option('egts_option_secondary_color')); ?>" class="my-color-field" data-default-color="#effeff" /></td>
				</tr>
				<tr valign="top">
                    <th scope="row"><?php esc_html_e( 'Tertiary Color', 'enable-gutenberg-theme-support' ); ?></th>
                    <td><input type="text" name="egts_option_tertiary_color" value="<?php echo esc_attr (get_option('egts_option_tertiary_color')); ?>" class="my-color-field" data-default-color="#effeff" /></td>
				</tr>
				<tr valign="top">
                    <th scope="row"><?php esc_html_e( 'Complementary Color', 'enable-gutenberg-theme-support' ); ?></th>
                    <td><input type="text" name="egts_option_quaternary_color" value="<?php echo esc_attr (get_option('egts_option_quaternary_color')); ?>" class="my-color-field" data-default-color="#effeff" /></td>
				</tr>
				<tr valign="top">
                    <th scope="row"><?php esc_html_e( 'Complementary Color', 'enable-gutenberg-theme-support' ); ?></th>
                    <td><input type="text" name="egts_option_quinary_color" value="<?php echo esc_attr (get_option('egts_option_quinary_color')); ?>" class="my-color-field" data-default-color="#effeff" /></td>
				</tr>
			</table>
			<table class="form-table">
				<h3><?php esc_html_e( 'Create your custom width for WordPress Editor', 'enable-gutenberg-theme-support' ); ?></h3>
				<hr>
				<tr valign="top">
                    <th scope="row"><?php esc_html_e( 'WordPress Editor Width', 'enable-gutenberg-theme-support' ); ?></th>
                    <td><input type="number" step="any" name="egts_max-width-gutenberg-editor-page" value="<?php echo esc_attr (get_option ('egts_max-width-gutenberg-editor-page')); ?>" /> px</td>
				</tr>	
			</table>

            <p class="submit">
                <input type="submit" class="button-primary" value="<?php _e('Save changes', 'enable-gutenberg-theme-support') ?>" />
            </p>

        </form>
	</div>
<?php
}
