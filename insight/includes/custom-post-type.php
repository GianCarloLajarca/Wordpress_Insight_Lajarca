<?php

function insight_custom_post(){
    $servicePost_label = array(
        'name'          => __('Service Post','textdomain'),
        'singular_name' => __('Service Post','textdomain'),
        'add_new'       => __('Add Service Post', 'textdomain'),
        'add_new_item'  => __('Add new Service Post', 'textdomain'),
        'edit_item'     => __('Edit Service Post', 'textdomain'),
        'all_items'     => __('Service Post', 'textdomain'),
    );

    $servicePost_args = array(
        'labels'            => $servicePost_label,
        'public'            => true,
        'capability_type'   => 'post',
        'show_ui'           => true,
        'taxonomies'        => array('post_tag','category'),
        'supports'          => array('title', 'editor', 'thumbnail', 'excerpt'),
    );

    register_post_type('servicePost', $servicePost_args);
}

add_action('init', 'insight_custom_post');

function insight_custom_projects_post(){
    $projectsPost_label = array(
        'name'          => __('Projects Post','textdomain'),
        'singular_name' => __('Projects Post','textdomain'),
        'add_new'       => __('Add Projects Post', 'textdomain'),
        'add_new_item'  => __('Add new Projects Post', 'textdomain'),
        'edit_item'     => __('Edit Projects Post', 'textdomain'),
        'all_items'     => __('Projects Post', 'textdomain'),
    );

    $projectsPost_args = array(
        'labels'            => $projectsPost_label,
        'public'            => true,
        'capability_type'   => 'post',
        'show_ui'           => true,
        'taxonomies'        => array('post_tag','category'),
        'supports'          => array('title', 'editor', 'thumbnail', 'excerpt'),
    );

    register_post_type('projectsPost', $projectsPost_args);
}

add_action('init', 'insight_custom_projects_post');