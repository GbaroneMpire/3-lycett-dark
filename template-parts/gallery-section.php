<?php 
/**
 * @param array $fields | required
 */
?>

<?php extract($args); ?>

<section class="lct-gallery-section lct-section">

  <section class="container lct-smaller lct-title-section">
    <div class="row">
      <div class="col">
        <div class="lct-grid grid-lg-4">
            <h2><?= $fields['heading'] ?></h2>
        </div>
      </div>
    </div>
  </section>

  <section class="gallery-section text-white p-0">
    <div class="row no-gutters">
      <div class="col">
      <?php get_template_part('/template-parts/gallery', null, array(
        'fields' => $fields['lct_gallery']
      )); ?>
      
      </div>
    </div>
  </section>

</section>
