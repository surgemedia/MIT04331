<?php 
function change_post_menu_label() {
    global $menu;
    global $submenu;
    $menu[5][0] = 'Resources';
    $submenu['edit.php'][5][0] = 'Resources';
    $submenu['edit.php'][10][0] = 'Add Resources';
    $submenu['edit.php'][15][0] = 'categories'; // Change name for categories
    $submenu['edit.php'][16][0] = 'tags'; // Change name for tags
    echo '';
}

function change_post_object_label() {
        global $wp_post_types;
        $labels = &$wp_post_types['post']->labels;
        $labels->name = 'Resources';
        $labels->singular_name = 'Resource';
        $labels->add_new = 'Add Resource';
        $labels->add_new_item = 'Add Resource';
        $labels->edit_item = 'Edit Resources';
        $labels->new_item = 'Resource';
        $labels->view_item = 'View Resource';
        $labels->search_items = 'Search Resources';
        $labels->not_found = 'No Resources found';
        $labels->not_found_in_trash = 'No Resources found in Trash';
    }
    add_action( 'init', 'change_post_object_label' );
    add_action( 'admin_menu', 'change_post_menu_label' );