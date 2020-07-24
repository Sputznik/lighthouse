<?php

/*ENQUEUE STYLES*/
add_action('wp_enqueue_scripts',function(){
  wp_enqueue_style('lighthouse-css', get_stylesheet_directory_uri().'/assets/css/lighthouse.css', array('sp-core-style'), '1.0.0' );
},99);

//Include Files
include('lib/cpt/cpt.php');
