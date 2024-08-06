<?php
    get_header(); 
    b4st_main_before();

    /* Template Name: Front Page */
?>

<main id="main">
  <?php 
    if ( have_rows('lct_index_sections') ):

      while( have_rows('lct_index_sections')) : the_row();

        $layout = get_row_layout();
        $fields = get_sub_field($layout)["lct_{$layout}"];
        $component_path = "/template-parts/{$layout}";

        if ($fields) {
          get_template_part($component_path, null, array(
            'fields' => $fields
          ));
        }

      endwhile;

    endif;
  ?>
</main><!-- /.container -->

<?php 
    b4st_main_after();
    get_footer(); 
?>
