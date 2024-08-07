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

<div id="lct-scheduling-section" class="lct-scheduling lct-section pt-5 pb-0 position-relative">
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

        <?php if($heading): ?>
          <h2 class="lct-schduling-section__heading"><?= $heading; ?></h2>
        <?php endif; ?>

        <div class="col">
          <?= $fields['embed'] ?>
        </div>
      </div>
    </div>
</div>