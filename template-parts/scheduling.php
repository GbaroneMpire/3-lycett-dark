<?php 
/**
 * @param array $fields | required
 */
?>

<?php 
  extract($args);

  $heading = $fields['heading'];
  $bg = $fields['background_image'];
?>

<div id="lct-scheduling-section" class="lct-scheduling lct-section pt-5 mb-0 justify-content-end">

  <?php if($heading): ?>
    <div class="container mb-5">
      <div class="row">
        <div class="col">
          <h2 class="lct-schduling-section__heading"><?= $heading; ?></h2>
        </div>
      </div>
    </div>
  <?php endif; ?>

  <div class="lct-inner h-100 w-100 py-5 position-relative">
    <?php if($bg): ?>
      <div class="lct-scheduling-section__background lct-background-cover">
        <?= wp_get_attachment_image($bg['ID'], 'lct-hero', false, array(
          'class' => 'lct-object-fit',
          'loading' => 'lazy'
        ) ); ?>
      </div>
    <?php endif; ?>

    <div class="container lct-smaller">
      <div class="row">
        <div class="col">
          <?= $fields['embed'] ?>
        </div>
      </div>
    </div>

  </div>
</div>