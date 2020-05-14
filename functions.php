<?php
  add_theme_support('post-thumbnails');

  add_action( 'wp_enqueue_scripts', 'delete_plugin_css' );
  function delete_plugin_css() {
      wp_deregister_style( 'contact-form-7' );
  }
