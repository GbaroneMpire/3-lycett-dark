<?php 
/**
 * @param array $fields | required
 */
?>

<?php 
  extract($args);
  $filters = $fields['filters'];
  $description = $fields['description'];
  $gallery_images = $fields['gallery'];
?>

<div class="lct-gallery-grid lct-grid py-5 lct-gap-3">

  <link rel="stylesheet" href="<?= get_template_directory_uri() ?>/theme/css/gallery.css">  
  <script defer src="<?= get_template_directory_uri() ?>/theme/js/gallery.js"></script>

  <?php if($filters): ?>
    <section class="lct-filters align-items-start d-flex flex-column lct-gap-2 p-4 p-lg-0">
      <button class=" lct-filter-button text-white text-uppercase lct-active" data-filter="*">All</button>
      <?php foreach($filters as $filter): ?>
        <button class="lct-filter-button text-white text-uppercase" data-filter=".<?= $filter['value'] ?>"><?= $filter['label'] ?></button>
      <?php endforeach; ?>        
    </section>
  <?php endif; ?>

  <?php if($description): ?>
    <section class="lct-gallery__description p-4 p-lg-0"><?= $description ?></section>
  <?php endif; ?>

  <?php if($gallery_images): ?>
    <section class="lct-gallery position-relative">
      <div class="lct-inner d-flex flex-column">
        <div class="lct-gallery-track lct-filterable">
          <div class="grid-sizer"></div>

          <?php foreach($gallery_images as $image): 
              $image_data = lct_get_image_data($image['ID']);
              $image_description = $image_data['description'];
              $image_class = '';

              $image_class .= (!empty($image_description)) ? ' ' . $image_description : '';
            
            ?>

              <a href="<?= $image['sizes']['large'] ?>" class="lct-gallery-image<?= $image_class ?>" itemprop="contentUrl" data-size-width="<?= $image['sizes']['large-width'] ?>" data-size-height="<?= $image['sizes']['large-height'] ?>" data-caption="<?= $image['caption']; ?>">
                <figure>
                  <?= wp_get_attachment_image( $image['ID'], 'medium', null, array(
                    'class' => 'lct-object-fit',
                    'loading' => 'lazy'
                  )); ?>
                </figure>
              </a>

          <?php endforeach ?>

        </div>
      </div>
    </section>
  <?php endif; ?>
</div>

<?php get_template_part('/template-parts/pswp_element'); ?>



