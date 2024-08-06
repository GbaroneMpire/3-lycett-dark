<?php 
/**
 * @param array $fields | required
 */
?>

<?php extract($args); ?>

<section class="lct-gallery-section lct-section">

  <section class="container lct-smaller lct-title-section">
    <div class="row">
      <div class="col-md-6">
        <h2 class="lct-highlights__heading lct-main-heading"><?= $fields['heading'] ?></h2>
      </div>

      <?php if($description): ?>
        <div class="col-md-6">
          <div class="lct-highlights__description">
              <p><?= $fields['description'] ?></p>
          </div>
        </div>
      <?php endif; ?>
      
    </div>
  </section>

  <section class="gallery-section container-md text-white p-0" style="background-color: #000000;">
    <div class="row no-gutters">
      <div class="col">

        <div class="container lct-smaller p-0 p-lg-5">
          <div class="row no-gutters">
            <div class="col">
              <?php get_template_part('/template-parts/gallery', null, array(
                'fields' => $fields['lct_gallery']
              )); ?>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>

</section>
