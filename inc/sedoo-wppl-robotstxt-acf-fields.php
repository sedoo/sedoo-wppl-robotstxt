<?php
if( function_exists('acf_add_local_field_group') ):

    acf_add_local_field_group(array(
        'key' => 'group_637cbad90befb',
        'title' => 'Robots.txt lines',
        'fields' => array(
            array(
                'key' => 'field_637cbae440df5',
                'label' => 'Lignes à ajouter',
                'name' => 'robots-txt-lines',
                'type' => 'repeater',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'collapsed' => '',
                'min' => 0,
                'max' => 0,
                'layout' => 'table',
                'button_label' => 'Ajouter une ligne',
                'sub_fields' => array(
                    array(
                        'key' => 'field_637cbb0f40df6',
                        'label' => '',
                        'name' => 'robots-txt-line',
                        'type' => 'text',
                        'instructions' => 'Attention, la modification du fichier robots.txt requiert une certaine expertise... <a href="https://developers.google.com/search/docs/crawling-indexing/robots/intro?hl=fr">Lire un peu de doc avant...</a>',
                        'required' => 0,
                        'conditional_logic' => 0,
                        'wrapper' => array(
                            'width' => '',
                            'class' => '',
                            'id' => '',
                        ),
                        'default_value' => '',
                        'placeholder' => 'Sitemap: https://www.example.com/sitemap.xml',
                        'prepend' => '',
                        'append' => '',
                        'maxlength' => '',
                    ),
                ),
            ),
        ),
        'location' => array(
            array(
                array(
                    'param' => 'options_page',
                    'operator' => '==',
                    'value' => 'sedoo-manage-robots-txt',
                ),
            ),
        ),
        'menu_order' => 0,
        'position' => 'normal',
        'style' => 'default',
        'label_placement' => 'top',
        'instruction_placement' => 'label',
        'hide_on_screen' => '',
        'active' => true,
        'description' => '',
        'show_in_rest' => 0,
    ));
    
    endif;		
?>