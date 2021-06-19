<?php
  function university_post_types() {
    // public => makes to post type visible to editors and viewers
    register_post_type('event', array(
      'public' => true,
      'labels' => array (
        'name' => 'Events',
        'add_new_item' => 'Add New Event',
        'edit_item' => 'Edit Event',
        'all_items' => 'All Events',
        'singular_name' => 'Event'
      ),
      'menu_icon' => 'dashicons-calendar'
    ));
  }

  add_action('init', 'university_post_types');
?>