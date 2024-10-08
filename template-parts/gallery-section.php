<?php 
/**
 * @param array $fields | required
 */
?>

<?php extract($args); ?>

<section id="lct-gallery-section" class="lct-gallery-section lct-section">

  <div class="lct-inner">

    <section class="container lct-smaller lct-title-section">
      <div class="row">
        <div class="col text-center">
          <h2><?= $fields['heading'] ?></h2>
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

  </div>


</section>
