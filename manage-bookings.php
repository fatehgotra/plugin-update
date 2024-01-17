<?php
/*
Plugin Name: Booking Management
Description: Manage all rooms, slots and days.
Author: Fateh Gotra
Version: 1.0.0
Author URI: https://www.n2rtechnologies.com/
*/
define('ROOTDIR', plugin_dir_path(__FILE__));
add_action('admin_menu', 'a_booking_menu');

require 'plugin-update-checker/plugin-update-checker.php';
use YahnisElsts\PluginUpdateChecker\v5\PucFactory;

$myUpdateChecker = PucFactory::buildUpdateChecker(
	'https://github.com/fatehgotra/plugin-update.git',
	__FILE__,
	'plugin-update'
);

// //Set the branch that contains the stable release.
// $myUpdateChecker->setBranch('main');

// //Optional: If you're using a private repository, specify the access token like this:
// //$myUpdateChecker->setAuthentication('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');

$myUpdateChecker->setAuthentication(array(
	'consumer_key' => 'fatehgotra',
	'consumer_secret' => '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',
));

require_once (ROOTDIR.'PageController.php');

function a_booking_menu() {
    
    add_menu_page('Rooms', 
        'Booking Rooms', 
        'manage_options', 
        'room_list', 
        'room_list_cb', 
        'dashicons-admin-home',
        '30'   
    );
    
    add_submenu_page('room_list',
        'Room Slots',
        'Booking Slots',
        'manage_options',
        'slots',
        'slots_list_cb'
        
    );
    add_submenu_page('room_list',
        'Status',
        'Status Manager',
        'manage_options',
        'status_manager',
        'status_manager_cb'
        
    );
     add_submenu_page(null,
        'AddRoom',
        '',
        'manage_options',
        'add_room',
        'add_room_cb'
        
    );
    add_submenu_page(null,
        'EditRoom',
        '',
        'manage_options',
        'edit_room',
        'edit_room_cb'
        
    );

    add_submenu_page(null,
    'AddSlot',
    '',
    'manage_options',
    'add_slot',
    'add_slots_cb'
    
    );
    add_submenu_page(null,
    'EditSlot',
    '',
    'manage_options',
    'edit_slot',
    'edit_slot_cb'
    
    );
    

}

