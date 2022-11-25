<?php
if( function_exists('acf_add_options_page') ) {
    
    // acf_add_options_page(array(
    //     'page_title'    => 'Manage robots.txt',
    //     'menu_title'    => 'Manage Robots.txt',
    //     'menu_slug'     => 'manage-robots-txt',
        // 'capability'    => 'manage_sites',
    //     'redirect'      => false
    // ));
    acf_add_options_page(array(
        'page_title'    => 'Manage robots.txt',
        'menu_title'    => 'Manage Robots.txt',
        'menu_slug'     => 'sedoo-manage-robots-txt',
        // 'capability'    => 'manage_sites',
        'redirect'      => false
    ));
    
    // acf_add_options_sub_page(array(
    //     'page_title'    => 'Manage robots.txt',
    //     'menu_title'    => 'Manage Robots.txt',
    //     'menu_slug'     => 'manage-robots-txt',
    //     'parent_slug'   => 'theme-informations',
    //     // 'capability'    => 'manage_sites',
    // ));
    
}
?>