<?php

  function add_contributor_post_type() {
    $labels = array(
      'name' => __('Contributors'),
      'singular_name' => __('Contributor')
    );

    register_post_type('contributor', array(
      'labels' => $labels,
      'public' => true,
      'has_archive' => false,
      'show_in_rest' => true,
      'supports' => array( 'title', 'editor', 'custom-fields' )
    ));
  }

  add_action('init', 'add_contributor_post_type');
