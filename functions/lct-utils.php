<?php

function lct_test($var) {

  echo '<pre>';
  echo print_r($var);
  echo '</pre>';

}

function lct_get_image_data($image_id) {
  $image_data = get_post($image_id);
  return array(
    'alt' => get_post_meta( $image_data->ID, '_wp_attachment_image_alt', true ),
    'caption' => $image_data->post_excerpt,
    'description' => $image_data->post_content
  );
}


function add_specific_menu_location_atts( $atts, $item, $args ) {
  // check if the item is in the primary menu
  if( $args->theme_location == 'navbar' ) {
    // add the desired attributes:
    $atts['class'] = 'lct-test';
  }
  return $atts;
}
add_filter( 'nav_menu_link_attributes', 'add_specific_menu_location_atts', 10, 3 );




