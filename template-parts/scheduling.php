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

<div id="lct-scheduling-section" class="lct-scheduling lct-section pt-5">

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
        <?php if($heading): ?>
          <h2><?= $heading; ?></h2>
        <?php endif; ?>
        <?= $fields['embed'] ?>
      </div>
    </div>
  </div>
</div>