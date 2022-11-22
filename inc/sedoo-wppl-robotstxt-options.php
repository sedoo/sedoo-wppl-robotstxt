<?php
if( function_exists('acf_add_options_page') ) {
    
    // acf_add_options_page(array(
    //     'page_title'    => 'Theme General Settings',
    //     'menu_title'    => 'Theme Settings',
    //     'menu_slug'     => 'theme-general-settings',
    //     'capability'    => 'manage_sites',
    //     'redirect'      => false
    // ));
    
    acf_add_options_sub_page(array(
        'page_title'    => 'Manage robots.txt',
        'menu_title'    => 'Manage Robots.txt',
        'parent_slug'   => 'theme-informations',
        'capability'    => 'manage_sites',
    ));
    
}
?>