<?php
    function theme_after_setup() {
        add_theme_support('title-tag');
    }
    add_action('after_setup_theme', 'theme_after_setup');

    function theme_enqueue_scripts() {
        wp_enqueue_style('bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css');
        wp_enqueue_style('theme', get_stylesheet_directory_uri() . '/style.css', array(), time());

        wp_enqueue_script('jquery');
        wp_enqueue_script('bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js');
    }
    add_action('wp_enqueue_scripts', 'theme_enqueue_scripts');

    /* Advanced Custom Fields PRO */

    define('ACF_PATH', get_stylesheet_directory() . '/includes/advanced-custom-fields-pro/');
    define('ACF_URL', get_stylesheet_directory_uri() . '/includes/advanced-custom-fields-pro/');
    
    include_once(ACF_PATH . 'acf.php');
    
    function theme_acf_settings_url($url) {
        return ACF_URL;
    }
    add_filter('acf/settings/url', 'theme_acf_settings_url');

    function theme_acf_settings_show_admin($show_admin) {
        return true;
    }
    add_filter('acf/settings/show_admin', 'theme_acf_settings_show_admin');

    function theme_acf_init() {
        acf_add_local_field_group(array(
            'key' => 'group_5f4a2da914566',
            'title' => 'Post Type: Page',
            'fields' => array(
                array(
                    'key' => 'field_5f4a2dbc57609',
                    'label' => 'Rows',
                    'name' => 'rows',
                    'type' => 'flexible_content',
                    'instructions' => '',
                    'required' => 0,
                    'conditional_logic' => 0,
                    'wrapper' => array(
                        'width' => '',
                        'class' => '',
                        'id' => '',
                    ),
                    'layouts' => array(
                        'layout_5f4a2dc475317' => array(
                            'key' => 'layout_5f4a2dc475317',
                            'name' => 'columns',
                            'label' => 'Columns',
                            'display' => 'block',
                            'sub_fields' => array(
                                array(
                                    'key' => 'field_5f4a2dcc5760a',
                                    'label' => 'Columns',
                                    'name' => 'columns',
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
                                    'button_label' => 'Add Column',
                                    'sub_fields' => array(
                                        array(
                                            'key' => 'field_5f4a2de05760b',
                                            'label' => 'Heading',
                                            'name' => 'heading',
                                            'type' => 'text',
                                            'instructions' => '',
                                            'required' => 0,
                                            'conditional_logic' => 0,
                                            'wrapper' => array(
                                                'width' => '',
                                                'class' => '',
                                                'id' => '',
                                            ),
                                            'default_value' => '',
                                            'placeholder' => '',
                                            'prepend' => '',
                                            'append' => '',
                                            'maxlength' => '',
                                        ),
                                        array(
                                            'key' => 'field_5f4a2e015760c',
                                            'label' => 'Content',
                                            'name' => 'content',
                                            'type' => 'wysiwyg',
                                            'instructions' => '',
                                            'required' => 0,
                                            'conditional_logic' => 0,
                                            'wrapper' => array(
                                                'width' => '',
                                                'class' => '',
                                                'id' => '',
                                            ),
                                            'default_value' => '',
                                            'tabs' => 'all',
                                            'toolbar' => 'full',
                                            'media_upload' => 1,
                                            'delay' => 0,
                                        ),
                                    ),
                                ),
                            ),
                            'min' => '',
                            'max' => '',
                        ),
                        'layout_5f4a32c1605ec' => array(
                            'key' => 'layout_5f4a32c1605ec',
                            'name' => 'center',
                            'label' => 'Center',
                            'display' => 'block',
                            'sub_fields' => array(
                                array(
                                    'key' => 'field_5f4a32cb605ed',
                                    'label' => 'Heading',
                                    'name' => 'heading',
                                    'type' => 'text',
                                    'instructions' => '',
                                    'required' => 0,
                                    'conditional_logic' => 0,
                                    'wrapper' => array(
                                        'width' => '',
                                        'class' => '',
                                        'id' => '',
                                    ),
                                    'default_value' => '',
                                    'placeholder' => '',
                                    'prepend' => '',
                                    'append' => '',
                                    'maxlength' => '',
                                ),
                                array(
                                    'key' => 'field_5f4a32d2605ee',
                                    'label' => 'Content',
                                    'name' => 'content',
                                    'type' => 'wysiwyg',
                                    'instructions' => '',
                                    'required' => 0,
                                    'conditional_logic' => 0,
                                    'wrapper' => array(
                                        'width' => '',
                                        'class' => '',
                                        'id' => '',
                                    ),
                                    'default_value' => '',
                                    'tabs' => 'all',
                                    'toolbar' => 'full',
                                    'media_upload' => 1,
                                    'delay' => 0,
                                ),
                            ),
                            'min' => '',
                            'max' => '',
                        ),
                        'layout_5f4a4b6348b54' => array(
                            'key' => 'layout_5f4a4b6348b54',
                            'name' => 'half',
                            'label' => 'Half',
                            'display' => 'block',
                            'sub_fields' => array(
                                array(
                                    'key' => 'field_5f4a4b6c48b55',
                                    'label' => 'Heading',
                                    'name' => 'heading',
                                    'type' => 'text',
                                    'instructions' => '',
                                    'required' => 0,
                                    'conditional_logic' => 0,
                                    'wrapper' => array(
                                        'width' => '',
                                        'class' => '',
                                        'id' => '',
                                    ),
                                    'default_value' => '',
                                    'placeholder' => '',
                                    'prepend' => '',
                                    'append' => '',
                                    'maxlength' => '',
                                ),
                                array(
                                    'key' => 'field_5f4a4b7148b56',
                                    'label' => 'Content',
                                    'name' => 'content',
                                    'type' => 'wysiwyg',
                                    'instructions' => '',
                                    'required' => 0,
                                    'conditional_logic' => 0,
                                    'wrapper' => array(
                                        'width' => '',
                                        'class' => '',
                                        'id' => '',
                                    ),
                                    'default_value' => '',
                                    'tabs' => 'all',
                                    'toolbar' => 'full',
                                    'media_upload' => 1,
                                    'delay' => 0,
                                ),
                                array(
                                    'key' => 'field_5f4a4b7e48b57',
                                    'label' => 'Image',
                                    'name' => 'image',
                                    'type' => 'image',
                                    'instructions' => '',
                                    'required' => 0,
                                    'conditional_logic' => 0,
                                    'wrapper' => array(
                                        'width' => '',
                                        'class' => '',
                                        'id' => '',
                                    ),
                                    'return_format' => 'array',
                                    'preview_size' => 'medium',
                                    'library' => 'all',
                                    'min_width' => '',
                                    'min_height' => '',
                                    'min_size' => '',
                                    'max_width' => '',
                                    'max_height' => '',
                                    'max_size' => '',
                                    'mime_types' => '',
                                ),
                                array(
                                    'key' => 'field_5f4caff45aad3',
                                    'label' => 'Reversed',
                                    'name' => 'reversed',
                                    'type' => 'true_false',
                                    'instructions' => '',
                                    'required' => 0,
                                    'conditional_logic' => 0,
                                    'wrapper' => array(
                                        'width' => '',
                                        'class' => '',
                                        'id' => '',
                                    ),
                                    'message' => '',
                                    'default_value' => 0,
                                    'ui' => 0,
                                    'ui_on_text' => '',
                                    'ui_off_text' => '',
                                ),
                            ),
                            'min' => '',
                            'max' => '',
                        ),
                    ),
                    'button_label' => 'Add Row',
                    'min' => '',
                    'max' => '',
                ),
            ),
            'location' => array(
                array(
                    array(
                        'param' => 'post_type',
                        'operator' => '==',
                        'value' => 'page',
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
        ));
    }
    //add_action('acf/init', 'theme_acf_init');
?>