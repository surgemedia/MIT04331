<?php 
function change_post_menu_label() {
    global $menu;
    global $submenu;
    $menu[5][0] = 'Newsletters';
    $submenu['edit.php'][5][0] = 'Newsletters';
    $submenu['edit.php'][10][0] = 'Add Newsletters';
    $submenu['edit.php'][15][0] = 'Status'; // Change name for categories
    $submenu['edit.php'][16][0] = 'Labels'; // Change name for tags
    echo '';
}

function change_post_object_label() {
        global $wp_post_types;
        $labels = &$wp_post_types['post']->labels;
        $labels->name = 'Newsletters';
        $labels->singular_name = 'Newsletter';
        $labels->add_new = 'Add Newsletter';
        $labels->add_new_item = 'Add Newsletter';
        $labels->edit_item = 'Edit Newsletters';
        $labels->new_item = 'Newsletter';
        $labels->view_item = 'View Newsletter';
        $labels->search_items = 'Search Newsletters';
        $labels->not_found = 'No Newsletters found';
        $labels->not_found_in_trash = 'No Newsletters found in Trash';
    }
    add_action( 'init', 'change_post_object_label' );
    add_action( 'admin_menu', 'change_post_menu_label' );