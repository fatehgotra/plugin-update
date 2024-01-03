<?php
require_once (ROOTDIR.'Room/room_list.php');
require_once (ROOTDIR.'Room/add_room.php');
require_once (ROOTDIR.'Room/edit_room.php');

require_once (ROOTDIR.'Slots/slot_list.php');
require_once (ROOTDIR.'Slots/add_slots.php');
require_once (ROOTDIR.'Slots/edit_slot.php');
require_once (ROOTDIR.'status_manager.php');

function wp_booking_scripts()
{
    
    $current_screen = get_current_screen();

    if ( strpos($current_screen->base, 'room_list') === false && strpos($current_screen->base, 'add_room') === false 
         && strpos($current_screen->base, 'edit_room') === false && strpos($current_screen->base, 'slots') === false
         && strpos($current_screen->base, 'add_slot') === false && strpos($current_screen->base, 'edit_slot') === false
         && strpos($current_screen->base, 'status_manager') === false
    )
    {
    return;
    } else {

    wp_enqueue_style('flow-bite','https://unpkg.com/flowbite@1.5.3/dist/flowbite.min.css','1.0.1',array());
    wp_enqueue_style('font-icons','https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css',array());
    wp_enqueue_style('wp-booking-bootstrap', plugin_dir_url(__FILE__) . 'assets/css/bootstrap.min.css', array());
    wp_enqueue_style('wp-booking-style', plugin_dir_url(__FILE__) . 'assets/style.css', array());
  
    wp_enqueue_script('booking-jquery','https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js',array());
    wp_enqueue_script('booking-datepicker','https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/js/bootstrap-datepicker.js',array());
    wp_enqueue_script('booking-admin-js',plugin_dir_url(__FILE__) . 'assets/admin.js',array());

    wp_localize_script('wp-booking-ajax', 'booking_ajax_url', array(

        'ajax_url' => admin_url('admin-ajax.php'),
    ));
}
}
add_action('admin_enqueue_scripts', 'wp_booking_scripts');
