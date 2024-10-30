<?php
/*
Plugin Name: BuddyPress Multi Group Remove
Plugin URI:
Description: Select multiple groups and remove them at once, this plugin only removes groups and does not have other group mange options.
Version: 1.0
Author: Blackphantom
Author URI:
*/

function multi_group_remove_init()
{
    //initialize the core
    require_once('core.php');
}

add_action('bp_init', 'multi_group_remove_init');