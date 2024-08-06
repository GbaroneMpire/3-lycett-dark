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