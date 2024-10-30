<?php
/**
 * This is the core file
 * 
 */
define('MULTI_GROUP_REMOVE_VERSION', '1.0');
define('MULTI_GROUP_REMOVE_IS_INSTALLED', 1);

/**
 * Setup admin navigation
 *
 */
add_action('admin_menu', 'multi_group_remove_Admin');
add_action('network_admin_menu', 'multi_group_remove_Admin');

function multi_group_remove_admin()
{
    if (!is_super_admin()) {
    	return false;
    }

    add_submenu_page(
        'bp-general-settings',
        __('Multi group remove', 'multi_group_remove_lang'),
        __('Multi group remove', 'multi_group_remove_lang'),
        'manage_options',
        'multi_group_remove', 
        'multi_group_remove_settings'
     );
}

/**
 * Settings page
 *
 */
function multi_group_remove_settings()
{
    include(WP_PLUGIN_DIR . "/bp-multi-group-remove/templates/groups.php");
}