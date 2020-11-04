<?php
/**
 * Plugin Name: tkd Must Use Plugin
 * Plugin URI: http://nicklasbryntesson.se/projects/taekwondo
 * Description: Custom post types plugin for tkd instructors
 * Version: 1.0
 * Author: Nicklas Bryntesson
 * Author URI: http://nicklasbryntesson.se
 * License: GPL2
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain: tkd
 * Domain Path: /languages
 */

/*  Copyright 2020  NICKAS_BRYNTESSON  (email : nicklas.bryntesson@gmail.com)

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License, version 2, as 
    published by the Free Software Foundation.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/

add_action( 'init', 'myplugin_load_textdomain' );
/**
 * Load plugin textdomain.
 *
 * @since 1.0.0
 */
function myplugin_load_textdomain() {
  load_plugin_textdomain( 'tkd', false, dirname( plugin_basename( __FILE__ ) ) . '/languages' ); 
}

function my_custom_posttypes() {
    
    // Instructor custom post type (hierarchical)
    $labels = array(
        'name'               => _x( 'Instructors', 'Post Type General Name', 'tkd' ),
        'singular_name'      => _x( 'Instructor', 'Post Type Singular Name', 'tkd' ),
        'menu_name'          => __( 'Instructors', 'tkd' ),
        'name_admin_bar'     => __( 'Instructor', 'tkd' ),
        'add_new'            => __( 'Add New', 'tkd' ),
        'add_new_item'       => __( 'Add New Instructor', 'tkd' ),
        'new_item'           => __( 'New Instructor', 'tkd' ),
        'edit_item'          => __( 'Edit Instructor', 'tkd' ), 
        'view_item'          => __( 'View Instructor', 'tkd' ),
        'all_items'          => __( 'All Instructors', 'tkd' ),
        'search_items'       => __( 'Search Instructor', 'tkd' ),
        'parent_item_colon'  => __( 'Parent Instructor:', 'tkd' ),
        'not_found'          => __( 'No Instructors found.', 'tkd' ),
        'not_found_in_trash' => __( 'No Instructors found in Trash.', 'tkd' ),
    );
    
    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'menu_icon'          => 'dashicons-id-alt',
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'Instructors', 'with_front' => false ),
        'capability_type'    => 'page',
        'has_archive'        => false,
        'hierarchical'       => false,
        'menu_position'      => 8,
        'supports'           => array( 'title', 'editor', 'thumbnail', 'excerpt', 'page-attributes' )
    );
    register_post_type( 'instructor', $args );
    
}
add_action( 'init', 'my_custom_posttypes' );

// Flush rewrite rules
function my_rewrite_flush() {
    my_custom_posttypes();
    flush_rewrite_rules();
}
register_activation_hook( __FILE__, 'my_rewrite_flush' );
                